<?php
class ViewQRCode extends ViewUserControl
{
	// Optional. Can be deleted
	public function initUserControl()
	{
		$myOption = $this->settings["MyOption"];
		$this->addJSControlSetting("myOpt", "myOpt:".$myOption);
	}

	// Optional. Can be deleted
	public function addJSFiles()
	{
		$this->AddJSFile("qrcode2.js");
		$this->AddJSFile("jquery.qrcode.js");
	}

	public function showDBValue(&$data, $keylink, $html = true )
	{
		$result = "<span id='qrcode_".$this->field."' value='".$data[$this->field]."'></span>";
		return $result;
	}

	public function getPdfValue(&$data, $keylink = "")
	{
		if( !strlen( $data[$this->field] ) ) {
			return "''";
		}
		return my_json_encode( array(
			"qr" => $data[$this->field],
			"fit" => $this->settings["qr_width"]
		) );
	}

}
?>