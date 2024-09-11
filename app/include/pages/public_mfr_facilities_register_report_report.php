<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'listSearch' => array( 'alwaysOnPanelFields' => array( 'status',
'operationalstatus',
'facilitytype',
'parentfacilitytype',
'region',
'zone',
'woreda' ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array( 'count' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'region',
'zone',
'woreda',
'status',
'operationalstatus',
'parentfacilitytype',
'facilitytype' ),
'filterFields' => array( 'status',
'operationalstatus',
'facilitytype',
'parentfacilitytype',
'woreda',
'zone',
'region' ),
'fieldItems' => array( 'woreda' => array( 'report_group_field2' ),
'zone' => array( 'report_group_field1' ),
'region' => array( 'report_group_field' ),
'operationalstatus' => array( 'report_group_field3' ),
'count' => array( 'report_grid_field7' ),
'parentfacilitytype' => array( 'report_group_field4' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'page_size',
'print_panel',
'search_panel',
'filter_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ),
'grid' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4',
'report_grid_field7' ),
'top' => array(  ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'search_panel' => 'above-grid',
'filter_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_group_field2' => 'grid',
'report_group_field3' => 'grid',
'report_group_field4' => 'grid',
'report_grid_field7' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'export_report_excel' => array( 'export_report_excel' ),
'export_report_word' => array( 'export_report_word' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'-' => array( '-',
'-1' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field3',
'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field2',
'search_panel_field1' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'advsearch_link' => array( 'advsearch_link' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3',
'filter_panel_field6',
'filter_panel_field5',
'filter_panel_field4' ),
'export_report_pdf' => array( 'export_report_pdf' ),
'report_group_field' => array( 'report_group_field2',
'report_group_field1',
'report_group_field',
'report_group_field3',
'report_group_field4' ),
'report_grid_field' => array( 'report_grid_field7' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'report',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'field' => 'region',
'color' => array( 'header' => '7aca7a',
'summary' => '90ee90' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'zone',
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'woreda',
'color' => array( 'header' => 'd99ba4',
'summary' => 'ffb6c1' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'operationalstatus',
'color' => array( 'header' => 'd9d5ae',
'summary' => 'fffacd' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'parentfacilitytype',
'color' => array( 'header' => '6cd9b4',
'summary' => '7fffd4' ),
'axis' => 2 ) ),
'fields' => array( array( 'avg' => true,
'field' => 'count',
'grid' => true,
'max' => true,
'min' => true,
'sum' => true ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => true,
'colors' => array(  ),
'horizSummary' => true,
'layout' => 'block',
'vertSummary' => true ) ) );
			$pageArray = array( 'id' => 'report',
'type' => 'report',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'report-above-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'search_panel' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'filter_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'report-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-chart',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field7' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'field' => 'region',
'color' => array( 'header' => '7aca7a',
'summary' => '90ee90' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'zone',
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'woreda',
'color' => array( 'header' => 'd99ba4',
'summary' => 'ffb6c1' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'operationalstatus',
'color' => array( 'header' => 'd9d5ae',
'summary' => 'fffacd' ),
'axis' => 2 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'parentfacilitytype',
'color' => array( 'header' => '6cd9b4',
'summary' => '7fffd4' ),
'axis' => 2 ) ),
'fields' => array( array( 'avg' => true,
'field' => 'count',
'grid' => true,
'max' => true,
'min' => true,
'sum' => true ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => true,
'colors' => array(  ),
'horizSummary' => true,
'layout' => 'block',
'vertSummary' => true ) ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export_report_excel',
'export_report_word',
'export_report_pdf' ) ),
'export_report_excel' => array( 'type' => 'export_report_excel' ),
'export_report_word' => array( 'type' => 'export_report_word' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field1',
'search_panel_field2',
'search_panel_field7',
'search_panel_field6',
'search_panel_field3',
'search_panel_field4',
'search_panel_field' ),
'_flexiblePanel' => true ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'-' => array( 'type' => '-' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'facilitytype',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field3' => array( 'field' => 'operationalstatus',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field4' => array( 'field' => 'parentfacilitytype',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field6' => array( 'field' => 'status',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field7' => array( 'field' => 'woreda',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-1' => array( 'type' => '-' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field4',
'filter_panel_field5',
'filter_panel_field6',
'filter_panel_field',
'filter_panel_field1',
'filter_panel_field3',
'filter_panel_field2' ) ),
'filter_panel_field' => array( 'field' => 'status',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'operationalstatus',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'facilitytype',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'parentfacilitytype',
'type' => 'filter_panel_field' ),
'filter_panel_field6' => array( 'field' => 'woreda',
'type' => 'filter_panel_field' ),
'export_report_pdf' => array( 'type' => 'export_report_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'search_panel_field2' => array( 'field' => 'zone',
'type' => 'search_panel_field',
'alwaysOnPanel' => true,
'required' => false ),
'filter_panel_field5' => array( 'field' => 'zone',
'type' => 'filter_panel_field' ),
'search_panel_field1' => array( 'field' => 'region',
'type' => 'search_panel_field',
'alwaysOnPanel' => true,
'required' => false ),
'filter_panel_field4' => array( 'field' => 'region',
'type' => 'filter_panel_field' ),
'report_group_field2' => array( 'field' => 'woreda',
'type' => 'report_group_field',
'summary' => false,
'axis' => 2,
'interval' => 0 ),
'report_group_field1' => array( 'field' => 'zone',
'type' => 'report_group_field',
'summary' => false,
'axis' => 2,
'interval' => 0 ),
'report_group_field' => array( 'field' => 'region',
'type' => 'report_group_field',
'summary' => true,
'axis' => 2,
'interval' => 0 ),
'report_group_field3' => array( 'field' => 'operationalstatus',
'type' => 'report_group_field',
'summary' => false,
'axis' => 2,
'interval' => 0 ),
'report_grid_field7' => array( 'field' => 'count',
'type' => 'report_grid_field',
'reportAvg' => true,
'reportMin' => true,
'reportMax' => true,
'reportSum' => true ),
'report_group_field4' => array( 'field' => 'parentfacilitytype',
'type' => 'report_group_field',
'summary' => false,
'axis' => 2,
'interval' => 0 ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageWidth' => 'full',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>