<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'public.moh_assessments' => array( 'preview' => true ),
'public.moh_data_sources' => array( 'preview' => true ),
'public.moh_health_facilities' => array( 'preview' => true ),
'public.moh_indicators' => array( 'preview' => true ),
'public.moh_regions' => array( 'preview' => true ),
'public.moh_administration_units' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array( 'indicator_id',
'data_source_id',
'assessment_id',
'region_id',
'unit_id',
'facility_type_id',
'year',
'scope_id',
'gender_sex',
'indicator_group_id' ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array( 'data_source_id',
'assessment_id',
'region_id',
'unit_id',
'value',
'gender_sex',
'data_representation' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'indicator_group_id',
'indicator_id',
'scope_id',
'facility_type_id',
'year',
'data_source_id',
'assessment_id',
'region_id',
'unit_id',
'gender_sex',
'value',
'data_representation' ),
'filterFields' => array( 'indicator_id',
'data_source_id',
'assessment_id',
'region_id',
'unit_id',
'facility_type_id',
'year',
'scope_id',
'gender_sex',
'data_representation',
'indicator_group_id' ),
'fieldItems' => array( 'data_source_id' => array( 'report_grid_field2' ),
'assessment_id' => array( 'report_grid_field3' ),
'region_id' => array( 'report_grid_field4' ),
'unit_id' => array( 'report_grid_field5' ),
'value' => array( 'report_grid_field7' ),
'gender_sex' => array( 'report_grid_field10' ),
'data_representation' => array( 'report_grid_field11' ),
'indicator_group_id' => array( 'report_group_field' ),
'indicator_id' => array( 'report_group_field1' ),
'scope_id' => array( 'report_group_field2' ),
'facility_type_id' => array( 'report_group_field3' ),
'year' => array( 'report_group_field4' ) ) ),
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
'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field10',
'report_grid_field7',
'report_grid_field11' ),
'top' => array( 'master_info' ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
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
'report_grid_field2' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field10' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field11' => 'grid',
'master_info' => 'top' ),
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
'-1',
'-2' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
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
'report_grid_field' => array( 'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field7',
'report_grid_field10',
'report_grid_field11' ),
'master_info' => array( 'master_info' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_group_field4' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3',
'filter_panel_field4',
'filter_panel_field5',
'filter_panel_field6',
'filter_panel_field7',
'filter_panel_field8',
'filter_panel_field9',
'filter_panel_field10' ),
'lang_selector' => array( 'lang_selector' ),
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
'axis' => 0,
'color' => array( 'header' => 'c4c4d5',
'summary' => 'e6e6fa' ),
'field' => 'indicator_group_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'd9d9ce',
'summary' => 'fffff2' ),
'field' => 'indicator_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'c1d4d4',
'summary' => 'e3f9f9' ),
'field' => 'scope_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '95caca',
'summary' => 'afeeee' ),
'field' => 'facility_type_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'field' => 'year' ) ),
'fields' => array( array( 'avg' => false,
'field' => 'data_source_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'assessment_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'region_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'unit_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'gender_sex',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'value',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'data_representation',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'block',
'vertSummary' => false ) ) );
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
'items' => array( 'report_grid_field2',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field10',
'report_grid_field7',
'report_grid_field11' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'c4c4d5',
'summary' => 'e6e6fa' ),
'field' => 'indicator_group_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'd9d9ce',
'summary' => 'fffff2' ),
'field' => 'indicator_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => 'c1d4d4',
'summary' => 'e3f9f9' ),
'field' => 'scope_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '95caca',
'summary' => 'afeeee' ),
'field' => 'facility_type_id' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'field' => 'year' ) ),
'fields' => array( array( 'avg' => false,
'field' => 'data_source_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'assessment_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'region_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'unit_id',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'gender_sex',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'value',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ),
array( 'avg' => false,
'field' => 'data_representation',
'grid' => true,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array(  ),
'horizSummary' => false,
'layout' => 'block',
'vertSummary' => false ) ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ) ),
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
'-2',
'lang_selector' ) ),
'export_report_excel' => array( 'type' => 'export_report_excel' ),
'export_report_word' => array( 'type' => 'export_report_word' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field1',
'search_panel_field6',
'search_panel_field8',
'search_panel_field4',
'search_panel_field11',
'search_panel_field3',
'search_panel_field',
'search_panel_field7',
'search_panel_field9',
'search_panel_field5',
'search_panel_field10',
'search_panel_field2' ),
'_flexiblePanel' => true ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'-' => array( 'type' => '-' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'assessment_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field2' => array( 'field' => 'data_representation',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'data_source_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field4' => array( 'field' => 'facility_type_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field5' => array( 'field' => 'gender_sex',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field6' => array( 'field' => 'indicator_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field7' => array( 'field' => 'region_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field8' => array( 'field' => 'scope_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field9' => array( 'field' => 'unit_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field10' => array( 'field' => 'value',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'year',
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
'report_grid_field2' => array( 'field' => 'data_source_id',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field3' => array( 'field' => 'assessment_id',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field4' => array( 'field' => 'region_id',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field5' => array( 'field' => 'unit_id',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field7' => array( 'field' => 'value',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field10' => array( 'field' => 'gender_sex',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field11' => array( 'field' => 'data_representation',
'type' => 'report_grid_field',
'inlineAdd' => true,
'inlineEdit' => true,
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'public.moh_assessments' => 'true',
'public.moh_data_sources' => 'true',
'public.moh_health_facilities' => 'true',
'public.moh_indicators' => 'true',
'public.moh_regions' => 'true',
'public.moh_administration_units' => 'true' ) ),
'report_group_field' => array( 'field' => 'indicator_group_id',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field1' => array( 'field' => 'indicator_id',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field2' => array( 'field' => 'scope_id',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'report_group_field3' => array( 'field' => 'facility_type_id',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field10',
'filter_panel_field',
'filter_panel_field9',
'filter_panel_field7',
'filter_panel_field5',
'filter_panel_field6',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3',
'filter_panel_field4',
'filter_panel_field8' ) ),
'filter_panel_field' => array( 'field' => 'indicator_id',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'data_source_id',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'assessment_id',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'region_id',
'type' => 'filter_panel_field' ),
'filter_panel_field4' => array( 'field' => 'unit_id',
'type' => 'filter_panel_field' ),
'filter_panel_field5' => array( 'field' => 'facility_type_id',
'type' => 'filter_panel_field' ),
'filter_panel_field6' => array( 'field' => 'year',
'type' => 'filter_panel_field' ),
'filter_panel_field7' => array( 'field' => 'scope_id',
'type' => 'filter_panel_field' ),
'filter_panel_field8' => array( 'field' => 'gender_sex',
'type' => 'filter_panel_field' ),
'filter_panel_field9' => array( 'field' => 'data_representation',
'type' => 'filter_panel_field' ),
'search_panel_field1' => array( 'field' => 'indicator_group_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'report_group_field4' => array( 'field' => 'year',
'type' => 'report_group_field',
'summary' => true,
'axis' => 0,
'interval' => 0 ),
'filter_panel_field10' => array( 'field' => 'indicator_group_id',
'type' => 'filter_panel_field' ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'-2' => array( 'type' => '-' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageWidth' => 'full',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>