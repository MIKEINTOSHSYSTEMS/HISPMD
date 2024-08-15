<?php

class SAMLUtils {
	//Signature
	const RSAwithSHA256 = 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256';
	const ECDSAwithSHA256 = 'http://www.w3.org/2001/04/xmldsig-more#ecdsa-sha256';
	const DSAwithSHA1 = 'http://www.w3.org/2000/09/xmldsig#dsa-sha1';
	const RSASHA1 = 'http://www.w3.org/2000/09/xmldsig#rsa-sha1';

	//Digest
    const SHA1 = 'http://www.w3.org/2000/09/xmldsig#sha1';
    const SHA256 = 'http://www.w3.org/2001/04/xmlenc#sha256';
    const SHA384 = 'http://www.w3.org/2001/04/xmldsig-more#sha384';
    const SHA512 = 'http://www.w3.org/2001/04/xmlenc#sha512';

	//Canonicalization & transforms
    const C14N = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315';
    const C14N_COMMENTS = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315#WithComments';
    const EXC_C14N = 'http://www.w3.org/2001/10/xml-exc-c14n#';
	const EXC_C14N_COMMENTS = 'http://www.w3.org/2001/10/xml-exc-c14n#WithComments';
	const ENVELOPED_SIGNATURE =  'http://www.w3.org/2000/09/xmldsig#enveloped-signature';

	//Encryption
	const TRIPLE_DES_CBC = 'http://www.w3.org/2001/04/xmlenc#tripledes-cbc';
	const AES_128_CBC = 'http://www.w3.org/2001/04/xmlenc#aes128-cbc';
	const AES_256_CBC = 'http://www.w3.org/2001/04/xmlenc#aes256-cbc';
	const AES_192_CBC = 'http://www.w3.org/2001/04/xmlenc#aes192-cbc';

	//Transport
	const RSA_1_5 = 'http://www.w3.org/2001/04/xmlenc#rsa-1_5';
	const RSA_OAEP = 'http://www.w3.org/2001/04/xmlenc#rsa-oaep-mgf1p';


	//Key-Wrap

}

class XMLEncDecryptor {
	protected $encDataNode = null;
	protected $encKeyNode = null;

	public function __construct($root) {
		$this->encDataNode = $root->getElementsByTagName('EncryptedData')->item(0);
		$this->encKeyNode = $root->getElementsByTagName('EncryptedKey')->item(0);

	}

	private function decryptKey($privateKey) {
		$encMethodURI = $this->encKeyNode->getElementsByTagName('EncryptionMethod')->item(0)->getAttribute('Algorithm');

		$padding = null;
		switch($encMethodURI) {
			case SAMLUtils::RSA_OAEP:
				$padding = OPENSSL_PKCS1_OAEP_PADDING;
				break;
			case SAMLUtils::RSA_1_5:
				$padding = OPENSSL_PKCS1_PADDING;
				break;
			default:
				throw new ErrorException('Not implemented yet');
				break;
		}
		
		//contains encrypted key
		$cipherValue = $this->encKeyNode->getElementsByTagName('CipherValue')->item(0)->nodeValue;
		$data = base64_decode($cipherValue);

		$output = "";
		if (openssl_private_decrypt($data, $output, $privateKey, $padding)) {
			return $output;
		} else {
			throw new ErrorException('Something went wrong');
		}
		
	}
	

	public function decryptData($privateKey) {
		$encMethodURI = $this->encDataNode->getElementsByTagName('EncryptionMethod')->item(0)->getAttribute('Algorithm');

		$decryptAlgo = null;
		switch($encMethodURI) {
			case SAMLUtils::AES_256_CBC:
				$decryptAlgo = "AES-256-CBC";
				break;
			case SAMLUtils::AES_192_CBC:
				$decryptAlgo = "AES-192-CBC";
				break;
			case SAMLUtils::AES_128_CBC:
				$decryptAlgo = "AES-128-CBC";
				break;
			default:
				throw new ErrorException('Not implemented yet');
				break;
		}

		$cipherValue = $this->encDataNode->getElementsByTagName('CipherValue')->item(0)->nodeValue;

		$data = base64_decode($cipherValue);
		$key = $this->decryptKey($privateKey);
		$iv_length = openssl_cipher_iv_length($decryptAlgo);
		$iv = substr($data, 0, $iv_length);
		$data = substr($data, $iv_length);

		$decryptedData = openssl_decrypt($data, $decryptAlgo, $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv);

		if( !$decryptedData )
			return false;

		// https://www.ibm.com/docs/en/zos/2.1.0?topic=rules-pkcs-padding-method		
		$dataLn = strlen( $decryptedData );
		$padLn = ord( $decryptedData[ $dataLn - 1 ] );
		$clearedData = substr( $decryptedData, 0, $dataLn - $padLn );

		return $clearedData;
	}
}

class XMLDSigVerifier {
	protected $root = null;
	protected $signatureNode = null;

	public function __construct($rootNode, $signatureNode) {
		$this->root = $rootNode;
		$this->signatureNode = $signatureNode;
	}

	public function verifySignature($pubKey) {
		//$pubKey = openssl_pkey_get_public($pubKey);

		//digest does not match
		if ( !$this->verifyDigest() ) {
			return false;
		}

		//Node should be in tree to take C14N of <ds:SignedInfo>
		if (!$this->signatureNode->parentNode) {
			$this->root->appendChild($this->signatureNode);
		}
	
		
		$exclusive = null;
		$comments = null;
		$canonURI = $this->signatureNode->getElementsByTagName('CanonicalizationMethod')->item(0)->getAttribute('Algorithm');
		switch($canonURI) {
			case SAMLUtils::C14N:
				$exclusive = false;
				$comments = false;
				break;
			case SAMLUtils::C14N_COMMENTS:
				$exclusive = false;
				$comments = true;
				break;
			case SAMLUtils::EXC_C14N:
				$exclusive = true;
				$comments = false;
				break;
			case SAMLUtils::EXC_C14N_COMMENTS:
				$exclusive = true;
				$comments = true;
				break;	
		}

		$data = $this->signatureNode->getElementsByTagName('SignedInfo')->item(0)->C14N($exclusive, $comments);

		$signatureURI = $this->signatureNode->getElementsByTagName('SignatureMethod')->item(0)->getAttribute('Algorithm');
		$signAlgo = null;
		switch($signatureURI) {
			case SAMLUtils::RSAwithSHA256:
				$signAlgo = 'sha256';
				break;
			case SAMLUtils::ECDSAwithSHA256:
				throw new ErrorException('Not implemented yet');
				break;
			//Не везде установлен, пока не знаю как быть.
			case SAMLUtils::DSAwithSHA1:
				$signAlgo = 'dsaWithSHA1';
				break;
			case SAMLUtils::RSASHA1:
				$signAlgo = OPENSSL_ALGO_SHA1;
				break;				
			default: 
				throw new ErrorException('Not implemented yet');
				break;
		}

		$signatureValue = $this->signatureNode->getElementsByTagName('SignatureValue')->item(0)->nodeValue;

		$signature = base64_decode($signatureValue);

		return openssl_verify($data, $signature, $pubKey, $signAlgo) == 1;
		
	}

	private function verifyDigest() {
		$transforms = $this->signatureNode->getElementsByTagName('Transforms')->item(0);

		$exclusive = null;
		$comments = null;
		$C14TransformNode = null;
		foreach($transforms->childNodes as $node) {
			$algoURI = $node->getAttribute('Algorithm');
			switch($algoURI) {
				case SAMLUtils::ENVELOPED_SIGNATURE: 
					$this->root->removeChild($this->signatureNode);
					break;
				case SAMLUtils::C14N:
					$exclusive = false;
					$comments = false;
					$C14TransformNode = $node;
					break;
				case SAMLUtils::C14N_COMMENTS:
					$exclusive = false;
					$comments = true;
					$C14TransformNode = $node;
					break;
				case SAMLUtils::EXC_C14N:
					$exclusive = true;
					$comments = false;
					$C14TransformNode = $node;
					break;
				case SAMLUtils::EXC_C14N_COMMENTS:
					$exclusive = true;
					$comments = true;
					$C14TransformNode = $node;
					break;
				default: 
					throw new ErrorException('Not implemented yet');
					break;	
			}
		}

		//XPATH Transform is recommended, not implemented here
		//Should be somewhere HERE <--->

		$incNamespacesNode = $C14TransformNode->getElementsByTagName('InclusiveNamespaces')->item(0);

		$nsPrefixList = null;

		if ($incNamespacesNode) {
			$nsPrefixList = explode(' ', $incNamespacesNode->getAttribute('PrefixList'));
		}

		$digestMethodURI = $this->signatureNode->getElementsByTagName('DigestMethod')->item(0)->getAttribute('Algorithm');

		$hashAlg = null;
		switch($digestMethodURI) {
			case SAMLUtils::SHA1: 
				$hashAlg = 'sha1';
				break;
			case SAMLUtils::SHA256:
				$hashAlg = 'sha256';
				break;
			case SAMLUtils::SHA384:
				$hashAlg = 'sha384';
				break;
			case SAMLUtils::SHA512:
				$hashAlg = 'sha512';
				break;
		}


		$data =  $this->root->C14N($exclusive, $comments, null, $nsPrefixList);

		$hash = hash( $hashAlg, $data, true );

		$digestValue = $this->signatureNode->getElementsByTagName('DigestValue')->item(0)->nodeValue;

		return base64_encode($hash) == $digestValue;

	}
}

class SAMLResponse {

	protected $raw = null;
	protected $doc = null;
	protected $root = null;

	protected $isAssertionEncrypted = false;

	protected $assertionNode = null;
	protected $assertionSignatureNode = null;
	protected $assertionEncryptedNode = null;


	protected $responseSignatureNode = null;
	
	public function __construct($rawRespnose) {
		$this->raw = $rawRespnose;

		$this->_buildRoot();
		$this->_buildNodes();
	}

	private function _buildRoot() {
		$xml = new DOMDocument();
		$xml->loadXML($this->raw);
		$this->doc = $xml;
		$this->root = $xml->documentElement;
	}

	private function _buildNodes() {
		foreach($this->root->childNodes as $node) {
			if ($node->nodeName == 'ds:Signature') {
				$this->responseSignatureNode = $node;
			} else if ($node->nodeName == 'saml2:Assertion') {
				$this->assertionNode = $node;
			} else if ($node->nodeName == 'saml2:EncryptedAssertion') {
				$this->isAssertionEncrypted = true;
				$this->assertionEncryptedNode = $node;
			}

			if ($this->assertionNode && $this->responseSignatureNode) {
				break;
			}
		}
	}

	/**
	 * @param String sigKey		public key
	 * @param String encKey		private key
	 * @return Boolean|Array
	 */
	public function verify( $sigKey = null, $encKey = null ) {
		//respnose signed
		if ( $this->responseSignatureNode ) {
			$resSigVerifier = new XMLDSigVerifier($this->root, $this->responseSignatureNode);
			$sigOk = $resSigVerifier->verifySignature($sigKey);
			if ($sigOk == false) {
				return false;
			}
		}

		//if assertion encrypted -> decrypt
		if ( $this->isAssertionEncrypted ) {
			$decryptor = new XMLEncDecryptor($this->assertionEncryptedNode);
			$rawAssertion = $decryptor->decryptData( $encKey );

			$newdoc = new DOMDocument;
			$newdoc->loadXML( $rawAssertion );
			
			// add assertion node to doc
			$node = $this->doc->importNode( $newdoc->documentElement, true );
			$this->doc->appendChild( $node );
			
			$this->assertionNode = $node;
		}

		$payload = array();
		
		$attributeStatementNode = $this->assertionNode->getElementsByTagName('AttributeStatement')->item(0);
		
		$subject = $this->assertionNode->getElementsByTagName('Subject')->item(0);
		if( $subject ) {
			$nameId = $subject->getElementsByTagName("NameID");
			if( $nameId->count() )
				$payload["id"] = $nameId->item(0)->nodeValue;
		}
		
		foreach( $attributeStatementNode->childNodes as $n ) {
			$values = array();	
			foreach( $n->getElementsByTagName('AttributeValue') as $aValue ) {
				$values[] = $aValue->nodeValue;
			}
			if( $values )
				$payload[ $n->getAttribute("Name") ] = implode( ", ", $values );
		};
		
		
		$this->assertionSignatureNode = $this->assertionNode->getElementsByTagName('Signature')->item(0);

		//assertion not signed
		if ( !$this->assertionSignatureNode ) {
			return $payload;
		}

		$assertionSigVerifier = new XMLDSigVerifier( $this->assertionNode, $this->assertionSignatureNode );
		if( $assertionSigVerifier->verifySignature( $sigKey ) ) {
			return $payload;
		}
		
		return false; 
	}
}




?>