<?php
require_once getabspath('classes/controls/TextControl.php');
require_once getabspath("classes/controls/ViewControlsContainer.php");
class ReadOnlyField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_READONLY;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		
		if( $mode == MODE_EDIT || $mode == MODE_ADD || $mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD ) {
			echo '<span class="r-readonly-control" id="readonly_'.$this->cfield.'" '.$this->inputStyle.'>'
				.$this->pageObject->readOnlyFields[ $this->field ].'</span>';
		}
		
		$attr = "";
		if( $this->pageObject->pSetEdit->getViewFormat( $this->field ) == FORMAT_CHECKBOX ) {
			$attr = "data-control-type='checkbox'";
			if ( $this->connection->dbType == nDATABASE_PostgreSQL ) {
				$attr.=' data-true="t" data-false="f"';
			}
		}
		
		echo '<input id="'.$this->cfield.'" type="Hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'" '.$attr.'>';
		$this->buildControlEnd( $validate, $mode );
	}

	/**
	 * Get the field's content
	 * @param &Array data
	 * @return String
	 */
	public function getDisplayValue( &$data ) 
	{
		//	$this->pageObject is not always a RunnerPage object, sometimes it is EditControlsContainer
		$container = new ViewControlsContainer( $this->container->pSetEdit, $this->pageObject->pageType, null );
		$control = $container->getControl( $this->field );
		
		return $control->showDbValue( $data, "", false );
	}
}
?>