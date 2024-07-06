<?php
class WebreportPage extends RunnerPage
{
	function __construct(&$params)
	{
		parent::__construct($params);
	}
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getDefault();			
	}
}
?>