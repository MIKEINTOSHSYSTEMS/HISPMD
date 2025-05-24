<?php
require_once( getabspath("classes/datasource/dataresult.php") );

/**
 * 
 * Proxy class for DataResult
 * 
 * Diff: fetchAssoc is result of composition 
 *   *Real Object* fetchAssoc and ProcessRecord event
 * 
 * TODO: Its possible to remove copy-paste with PHP methods like __call, etc.
 */
class EventDataResult extends DataResult {
    protected $dataResult = null;
    protected $eventsObject = null;

    /**
     * @param DataResult $dataResult
     * @param object $eventsObject
     */
    public function __construct( $dataResult, $eventsObject ) {
        $this->dataResult = $dataResult;
        $this->eventsObject = $eventsObject;
    }

    public function getQueryHandle() {
        return $this->dataResult->getQueryHandle();
    }

	public function fetchAssoc() {
        $data = $this->dataResult->fetchAssoc();
        if ( $data ) {
            $this->eventsObject->ProcessRecord( $data );
        }
        return $data;
    }

	public function fetchNumeric() {
        return $this->dataResult->fetchNumeric();
    }

	public function closeQuery() {
        $this->dataResult->closeQuery();
    }

	public function numFields() {
        return $this->dataResult->numFields();
    }

	public function fieldName( $offset ) {
        return $this->dataResult->fieldName( $offset ) ;
    }

	public function seekRecord( $n ) {
        $this->dataResult->seekRecord( $n);
    }

	public function eof() {
        return $this->dataResult->eof();
    }

	public function next() {
        $this->dataResult->next();
    }

	public function getData() {
        $this->dataResult->getData();
    }

	public function getNumData() {
        $this->dataResult->getNumData();
    }

    public function value( $field ) { 
		return $this->dataResult->value( $field );
	}

	public function seekPage( $pageSize, $page ) {
		$this->dataResult->seekRecord( $pageSize * ( $page - 1 ) );
	}

    public function reorder( $callback ) {
        $this->dataResult->reorder( $callback );
		return $this;
	}

	public function fieldExists( $fieldName ) {
		return $this->dataResult->fieldExists( $fieldName );
	}

	function setFieldSubstitutions( $fieldSubs ) {
        $this->dataResult->setFieldSubstitutions( $fieldSubs );
	}

	function substituteFields( &$data ) {
		return $this->dataResult->substituteFields( $data );
	}

	function randomAccess() {
		return $this->dataResult->randomAccess();
	}
	function position() {
		return $this->dataResult->position();
	}
}