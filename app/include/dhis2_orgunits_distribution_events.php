<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_dhis2_orgunits_distribution  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$method = "GET";
$url = "/api/dhis2/orgunitdist/dhis2orgdist.php";
//	replace variables in the URL
$url = RunnerContext::PrepareRest( $url );

//	prepare request body
$body = array();
$body[] = array( "name" => "action", "value" => "fetch", "location" => "url", "skipEmpty" => true);
$body[] = array( "name" => "ou", "value" => "b3aCK1PTn5S;yY9BLUUegel;UFtGyqJMEZh;yb9NKGA8uqt;Fccw8uMlJHN;tDoLtk2ylu4;G9hDiPNoB7d;moBiwh9h5Ce;b9nYedsL8te;XU2wpLlX4Vk;xNUoZIrGKxQ;PCKGSJoNHXi;a2QIIR2UXcd;HIlnt7Qj8do;Gmw0DJLXGtx;WgZrDyI3CnP;uPpuXFZRN3x;xxawQ60i5Dv;U6EEjiVB1df;gblc1rrUi3G;JgBKioqJo5h;lXx23AvfczW;Rj13OIpmkhf;EQKmqr2D6OE;IRwFTUG9H8c;F6t8jiIrT2O;NEopQPE8Low;zAq6X665PeH;WhPahkU8aYa;N5IsomD6apU;ZDlhLE4uVcy;cb5DFQBKhxH;DUe9flf6UbD;opUmHDwZ1cV;I3VEcGLvKWH;QSKyxvhBqOc;lNdvRK5vV7T;ZYdzgZGuHZw;XE04hmJn5V8;jsVznKDygTL;MRZ6tna98i6;g5XQo2fWMaF;DeRcF32xDs2;EfvEtjmfr5a;ZfvhMccMq67;xpaR6AFzALJ;mChGq9jWlNn;KLn28g8EG5M;lfU06BMyg7z;i0d6kuR8ZcF;dHYgW9ecSdb;Bqq3KNXFksZ;JdAJSy4rp3e;iBRgt3YJixZ;AG9aCPKDjkC;FAWNQbAjX60;Y404i4NoTSI;E7UCvNIiFg7;lFbvMMGoDSk;uJdtdQAKj8G;lfyIJG8VQAT;O6v9kIwUMBu;oFolrhMolU8;lfTBaIBwiDL;G6Z6IER3bHK;BcPCDLI07oH;tJeSvHlEK5h;uCFOuyEXbZM;ikdpY8Z3x6C;cSO3kmM9xOX;BC0DHYPzMPi;K5QcW2biAl6;velyLjaLLXX;dMqvmbrO29v;JtJpEvHfb2N;yvg3cBW0CMH;jNuAckEhfXG;Rb15RthRp2J;IUfZ3YJUqnv;UFY6TdJMIRy;YaNacvYzyoZ;wnMhn0qfylr;Qqlg9Xanj7N;kOtubDQr7gE;MzGQXRNh9wd;scprIHq1JF3;Olki2VTqlYo;GZfzYxXRhWU;dltoE2SjWM5;W2qdaj1O8el;JRMjFMEQnKE;oyl5aa5BEse;ORllicI4Djm;wjqYDrPzbCd;jl0wgu7xWeM;Z64erTlWVQ0;STNMbnQCr0J;F73cO8KO9kj;Jk5NWM8MHKE;DOLYesRLNoS;fP7LbnZr3ef;cG3anFnMfXS;ZSqD0FXodFQ;GmvKtB6llIe;rA022ncR9gI;TYR3aVSKY1Y;bTnb7n7V0cS;oCrBD2wWQ5X;oF3UBEfqeSh;DfNcX7A8NKQ;Ehs3CF9et51;QP6pTyHePxw;LOYTxuwSQku;i9ejfKQ0slS;lZmcVkvBcRz;ytUFaJlj0uT;onnWwbKNXUp;HXgEDvYXyuC;euzg8n2zOGv;TCRufT4JgLZ;rGFGUEA0etS;HSBYk4v8ITI;PWEPBCTFiOD;WbUGWR4WLqA;JVDXHyY1fGt;UdapVUqZX5c;fkeURh0e1MM;MxsObjvc3WV;cfAFiP3WO4i;aeTzP0ST2hq;R6nsx1xB8wq;KOOk5MScXoZ;y8SN9S3PRMR;zmsFgTAIHhp;EsL3oY0kB99;N4fJZ3I3lcl;rvUmlyxbWKv;j59J2d3Ym3C;rXEEpmCHza5;veWjz5L6CYU;qGAyxCqSA7I;t2ZTjY33nql;OUK781pCgYt;KIbqbcLzWTV;cmTDCVHTLyt;z9w7nqA4Iq2;CFDYOTp0AG0;TgD3ZbJrhxD;X5H1aXr5EBG;EIUj4VhxIto;gcq8d9uMWcP;vg3Tn9x2w6p;JQLksc6ay2S;cyr04jmffzt;XqMQKpJmJyn;smjdej6f9a2;JlI1V06Lk2C;nJyGN1l4fgG;mEPDsoSlMDl;HTGMV2949xu;ObyC41kKKb7;QCZEHRJBSLH;x9l5eYnBnxl;adZbejN0bEA;hIEMxUvPicb;jtgQD6rjfw5;YPwUb3udumv;zd85WxRf7jf;dEC7FfaJhIZ;CzoyCC4ClgL;KBfiDXWjETn;RS3UP5GJUE4;QGE2dQiT91I;FWRCbPVr4Nw;YHUcJ6jcPVh;ReqsQEk6CJr;yBJAyhlL7wY;yyEdcknRXv5;wU7mJuDLHf7;V7UlCgfAva2;OK5ityZ56Xe;fr8CZJJFnxy;KpUJNTcKG9t;KPmsSOvSHMJ;BkxXrM55k0V;rpeXibZMrbh;Z6v6nzUi2QA;Oyv7rUEVODO;OW1VTIu7eWB;EUZ2KUsiiLo;k0NDQTXTSkD;CGFet8GSCre;fqlmSS5roQA;CWuvD3XhG3v;qcRKZ68lT3M;KTQ2XB5n6np;nmoOqbMLBfQ;PQNIosGAJ0a;YicU6Hpt7wu;LFfHQX4uOhH;RBoisUoJC2R;EoK5lX2siVg;AqscLOesrT1;B8w6TU5Zeac;BZouPKT5HPQ;u76ulmOEirX;dMScEUHgz1J;Ir4m5D1YQsb;npZAnAytalD;t5HM1XXcZXC;snAX12TjArW;sjJHTs0AZ2v;y5Wg5rqVqVw;xkT42JvQuNR;fCUQIpaxra5;kv7tlFHyi9a;ELtBjhnCtvX;jsn4NYnJdnI;JzECjRwaDqv;QICyCxyzv1O;nTRAz5zdYMC;W37HJpkS8kX", "location" => "url", "skipEmpty" => true);
$body[] = array( "name" => "ougs", "value" => "saIPeABoPMH;DHwYbeOm2S7;m31H59lciNv;MSkHuxjQyQH;CoD1qwLZime;sfBbCQCcJBd;qxGrmOo1l71;hxLghWPCAXE", "location" => "url", "skipEmpty" => true);
$body = $dataSource->preparePayload( $body );

//	do the API request
$response = $dataSource->getConnection()->requestJson( $url, $method, $body["form"], $body["header"], $body["url"] );
if( $response === false ) {
	//	something went wrong
	$dataSource->setError( $dataSource->getConnection()->lastError() );
	return false;
}

//	convert API result into recordset
$rs = $dataSource->resultFromJson( $response, true );
if( !$rs ) {
	return false;
}

// apply search and filter parameters. Comment out this line if filtering is done by REST API provider
$rs = $dataSource->filterResult( $rs, $command->filter );

// apply order parameters
$rs = $dataSource->reorderResult( $command, $rs );

//	apply pagination
$rs->seekRecord( $command->startRecord );
return $rs;

;		
} // function selectList

		
		
		
		
		



}
?>
