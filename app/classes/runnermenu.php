<?php
require_once( getabspath("include/menuitem.php") );
class RunnerMenu {
	/** @var MenuItem */
	protected $root;
	protected $_name;

	protected $activeItem = null;

	function __construct( $name, $root ) {
		$this->_name = $name;
		$this->root = $root;
	}

	public function name() {
		return $this->_name;
	}

	/**
	 * return corresponding RunnerMenu object
	 * @return RunnerMenu
	 */
	public static function getMenuObject( $name ) {
		if( !$name ) {
			$name = "main";
		}
		global $menuCache;
		if( $menuCache[ $name ] ) {
			return $menuCache[ $name ];
		}

		$menuNodes = loadMenuNodes( $name );

		$nullParent = NULL;
		$rootInfoArr = array("id"=>0, "href"=>"");
		/* $menuNodesIndex must be set to 0 for to operate properly */
		global $menuNodesIndex;
		$menuNodesIndex = 0;

		$menuMap = array();
		$rootElement = new MenuItem($rootInfoArr, $menuNodes, $nullParent, $menuMap, $name );
		global $menuNodesCache;
		unset( $menuNodesCache[ $name ] );

		$menuObj = new RunnerMenu( $name, $rootElement );
		$menuCache[ $name ] = $menuObj;

		global $globalEvents;
		if( $globalEvents->exists("ModifyMenu") ) {
			$globalEvents->ModifyMenu( $menuObj );
		}
		
		return $menuObj;
	}

	public function getRoot() {
		return $this->root;
	}

	/**
	 * Finds active item
	 * @return MenuItem
	 */
	public function findActiveItem( $savedActiveId, $hostTable, $hostPageType ) {
		$item = $this->root->findActiveItem( $savedActiveId, $hostTable, $hostPageType );
		if( !$item && $savedActiveId ) {
			// $savedActiveId might belong to other page
			$item = $this->root->findActiveItem( null, $hostTable, $hostPageType );
		}
		return $item;

	}
	
	/**
	 * @return MenuItem
	 */
	public function addURL( $label, $url, $parentId = 0 ) {
		$item = $this->makeURLItem( $label, $url );
		$this->addItemToMenu( $item, $parentId );
		return $item;
	}

	/**
	 * @return MenuItem
	 */
	public function addPageLink( $label, $table, $pageType, $parentId = 0 ) {
		$item = $this->makePageLinkItem( $label, $table, $pageType );
		$this->addItemToMenu( $item, $parentId );
		return $item;
	}

	/**
	 * @return MenuItem
	 */
	public function addGroup( $label, $parentId = 0 ) {
		$item = $this->makeGroupItem( $label );
		$this->addItemToMenu( $item, $parentId );
		return $item;
	}

	// ?
	public function makeGroupItem( $label ) {
		$menuNode = array();
		$menuNode["id"] = MenuItem::maxChildId( $this->root ) + 1;
		$menuNode["type"] = "Group";
		$menuNode["title"] = $label;

		// pass stub variables
		$childNodes = array();
		$parent = array(); 
		return new MenuItem( $menuNode, $childNodes, $parent, $this->root->menuTableMap, $this->name() );
	}

	public function makePageLinkItem( $label, $table, $pageType ) {
		$menuNode = array();
		$menuNode["id"] = MenuItem::maxChildId( $this->root ) + 1;
		$menuNode["type"] = "Leaf";
		$menuNode["title"] = $label;
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = $pageType;
		$menuNode["table"] = $table;

		// pass stub variables
		$childNodes = array();
		$parent = array(); 
		return new MenuItem( $menuNode, $childNodes, $parent, $this->root->menuTableMap, $this->name() );
	}

	public function makeURLItem( $label, $url ) {
		$menuNode = array();
		$menuNode["id"] = MenuItem::maxChildId( $this->root ) + 1;
		$menuNode["type"] = "Leaf";
		$menuNode["title"] = $label;
		$menuNode["linkType"] = "External";
		$menuNode["href"] = $url;

		// pass stub variables
		$childNodes = array();
		$parent = array(); 
		return new MenuItem( $menuNode, $childNodes, $parent, $this->root->menuTableMap, $this->name() );
	}

	protected function addItemToMenu( $menuItem, $parentId ) {
		$parent = MenuItem::findItemById( $this->root, $parentId );

		if( !$parent ) {
			return false;
		}

		$parent->AddChild( $menuItem );
	}

	public function removeItem( $id ) {
		$item = MenuItem::findItemById( $this->root, $id );
		if( !$item ) {
			return;
		}

		if( $item === $this->root ) {
			return;
		}

		// must have parent, because root case already handled
		$parent = $item->parentItem;

		// copy parents children, exclude needle
		$filteredChildren = array();
		foreach( $parent->children as $child ) {
			if( $child !== $item ) {
				$filteredChildren[] = $child;
			}
		}

		$parent->children = $filteredChildren;
		// requires recalculation (depends on children)
	}

	public function copyItem( $id, $parentId = -1 ) {
		$item = MenuItem::findItemById( $this->root, $id );
		if( !$item ) {
			return false;
		}

		$clone = MenuItem::cloneNode( $item );
		// set unique id
		$clone->id = MenuItem::maxChildId( $this->root ) + 1;
		
		// if $parentId == -1, add as $item sibling
		$parent = $parentId == -1 ? $item->parentItem : MenuItem::findItemById( $this->root, $parentId );
		if( !$parent ) {
			return false;
		}

		$parent->AddChild( $clone );

		return $clone;
	}

	public function getItem( $id ) {
		return MenuItem::findItemById( $this->root, $id );
	}


	/**
	 * Collect all menu nodes
	 * @return Array<MenuItem>
	 */
	public function collectNodes() {
		return $this->root->collectNodes();
	}
}

?>