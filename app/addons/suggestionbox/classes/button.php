<?php
class Button
{
	var $keys = array();
	
	var $currentKeys = array();
	
	var $selectedKeys = array();
	
	var $isManyKeys = false;
	
	var $location = "";
	
	var $nextInd;

	var $table;

	var $page;

	var $tempFileNames = array();
	
	public $masterTable;
	public $masterKeys;
	
	function __construct(&$params)
	{
		RunnerApply($this, $params);
		
		$this->nextInd = 0;
		$this->modifyKeys();
		$this->separateKeys();
	}
	/**
	 * Separate modified post keys to current and selected  
	 */
	function separateKeys()
	{
		if($this->location == 'grid')
		{
			if($this->isManyKeys) 
			{
				$this->currentKeys = $this->keys[0];
				for($i=1; $i<count($this->keys); $i++)
					$this->selectedKeys[$i-1] = $this->keys[$i]; 
			}
			else
				$this->currentKeys = $this->keys;
		}
		if($this->location == PAGE_LIST) {
			$this->selectedKeys = $this->keys;
			$this->currentKeys = $this->keys;
		}
		
		if($this->location == PAGE_EDIT || $this->location == PAGE_VIEW)
			$this->currentKeys = $this->keys;
	}
	/**
	 * Modify post keys array to associative 
	 */
	function modifyKeys()
	{
		$pSet = new ProjectSettings( $this->table, "", $this->page );
		
		$keys = array();
		
		// if array of keys exists
		if( $this->keys )
		{
			$tKeysNamesArr = $pSet->getTableKeys();
			if($this->isManyKeys)
			{
				foreach ($this->keys as $ind => $value)
				{
					$keys[$ind] = array();
					$recKeyArr = explode('&', $value);
					for($j=0;$j<count($tKeysNamesArr);$j++)
					{
						if (isset($recKeyArr[$j])){
							$keys[$ind][$tKeysNamesArr[$j]] = urldecode($recKeyArr[$j]);
						}
					}
				}
			}
			else
			{
				$keysReady = true;
				foreach( $tKeysNamesArr as $kf ) {
					if( !isset( $this->keys[ $kf ] ) ) {
						$keysReady = false;
						break;
					}
				}
				
				if( $keysReady )
					return;				
				
				for($j=0;$j<count($tKeysNamesArr);$j++)
				{
					$keys[$tKeysNamesArr[$j]] = urldecode(@$this->keys[$j]);
				}
			}
		}
		$this->keys = $keys;
	}
	/**
	 * Get keys
	 * @return {array} 
	 */
	function getKeys() {
		return $this->keys;
	}
	
	/**
	 * Get current record data
	 * @return {mixed} array of next record data or false
	 */
	function getCurrentRecord() {
		return $this->getRecordData();
	}
	
	/**
	 * Get next selected record
	 * @return {mixed} array of next record data or false
	 */	
	function getNextSelectedRecord() {
		if( $this->nextInd < count( $this->selectedKeys ) ) {
			$data =  $this->getRecordData( $this->selectedKeys[ $this->nextInd ] );
			$this->nextInd += 1;
			return $data;
		}
		
		return false;
	}	
	
	/**
	 * Read values from the database by keys
	 * @return {mixed} array of current record data or false
	 */	
	public function getRecordData( $keys = null ) {
		global $cipherer;
		
		if( !$keys )
			$keys = $this->currentKeys;
		
		$pSet = new ProjectSettings( $this->table, "", $this->page );
		
		$dc = new DsCommand();
		$dc->filter = Security::SelectCondition( "S", $pSet );
		$dc->keys = $keys;
		
		$dataSource = getDataSource( $this->table, $pSet );
		$fetchedArray = $dataSource->getSingle( $dc )->fetchAssoc();
		$data = $cipherer->DecryptFetchedArray( $fetchedArray );

		return $data;
	}
	
	
	function getMasterData( $masterTable )
	{
		if ( isset($_SESSION[ $masterTable . "_masterRecordData" ]) )
		{
			return $_SESSION[ $masterTable . "_masterRecordData" ];
		}
		
		return false;
	}

	function saveTempFile( $contents ) {
		$filename = tempnam("", "");
		runner_save_file($filename, $contents);
		$this->tempFileNames[] = $filename;
		return $filename;
	}

	function deleteTempFiles() {
		foreach( $this->tempFileNames as $f ) {
			@unlink( $f );
		}
	}
	
	public function getMasterRecord() {
		if( !$this->masterTable )
			return null;
		
		$pSet = new ProjectSettings( $this->table, "", $this->page );
		$mpSet = new ProjectSettings( $this->masterTable, PAGE_LIST );
		$masterDs = getDataSource( $this->masterTable, $mpSet );
		
		$filters = array();
		foreach( $pSet->getMasterTablesArr() as $i => $masterTableInfo ) {
			if( $this->masterTable != $masterTableInfo['mDataSourceTable'] )
				continue;
			
			foreach( $masterTableInfo['masterKeys'] as $j => $mKeyField ) {
				$filters[] = DataCondition::FieldEquals( $mKeyField, $this->masterKeys[ $j + 1 ] );
			}				
		}
		$filters[] = Security::SelectCondition( "S", $mpSet );
		
		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( $filters );
		$dc->reccount = 1;
		
		return $masterDs->getList( $dc )->fetchAssoc();
	}		
}
?>