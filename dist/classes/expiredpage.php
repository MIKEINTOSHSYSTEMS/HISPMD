<?php
/**
 * Class for session expired page
 */
class SessionExpiredPage extends RunnerPage {
	
	public $sessionControl;
	
	
	/**
	 * @constructor
	 */
	function __construct( &$params ) {
		parent::__construct( $params );


		//$this->headerForms = array( "supertop" );
		//$this->footerForms = array( "footer" );
		$this->bodyForms = array( "above-grid", "grid" );
	}

	
	/**
	 *
	 */
	public function process() {
		$this->addCommonJs();
		$this->addButtonHandlers();

		$this->fillSetCntrlMaps();
		$this->doCommonAssignments();

		$this->showPage();
	}

	/**
	 *
	 */
	public function doCommonAssignments() {
		$this->setLangParams();
	}

	/**
	 * Show the page
	 */
	public function showPage() {
		if( $this->mode == LOGIN_POPUP ) {
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			exit();
		}

		$this->assignBody();
		$this->display( $this->templatefile );
	}


	/**
	 * @return Number
	 */
	public static function readExpiredModeFromRequest() {
		$pageMode = postvalue("mode");

		if( postvalue("mode") == "popup" )
			return SESSION_EXPIRED_POPUP;

		return SESSION_EXPIRED_SIMPLE;
	}	
}
?>