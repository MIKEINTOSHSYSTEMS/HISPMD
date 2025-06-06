<?php
			$optionsArray = array( 'master' => array( 'public.moh_data_sources' => array( 'preview' => false ),
'public.moh_assessments' => array( 'preview' => false ),
'public.moh_administration_units' => array( 'preview' => false ),
'public.moh_indicators' => array( 'preview' => false ),
'public.moh_regions' => array( 'preview' => false ),
'public.moh_facility_types' => array( 'preview' => false ),
'public.moh_data_scope' => array( 'preview' => false ),
'public.moh_indicator_groups' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'indicator_id',
'data_source_id',
'scope_id',
'region_id',
'unit_id',
'facility_type_id',
'year',
'value',
'gender_sex',
'data_representation',
'indicator_group_id',
'data_source_detail',
'period_id',
'month_id',
'quarter_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'indicator_id' => array( 'integrated_edit_field' ),
'data_source_id' => array( 'integrated_edit_field1' ),
'scope_id' => array( 'integrated_edit_field8' ),
'region_id' => array( 'integrated_edit_field3' ),
'unit_id' => array( 'integrated_edit_field4' ),
'facility_type_id' => array( 'integrated_edit_field5' ),
'year' => array( 'integrated_edit_field7' ),
'value' => array( 'integrated_edit_field6' ),
'gender_sex' => array( 'integrated_edit_field9' ),
'data_representation' => array( 'integrated_edit_field10' ),
'indicator_group_id' => array( 'integrated_edit_field11' ),
'data_source_detail' => array( 'integrated_edit_field12' ),
'period_id' => array( 'integrated_edit_field13' ),
'month_id' => array( 'integrated_edit_field14' ),
'quarter_id' => array( 'integrated_edit_field15' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close',
'prev',
'next',
'hamburger' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'notifications',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array( 'edit_header' ),
'grid' => array( 'integrated_edit_field11',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field14',
'integrated_edit_field15',
'integrated_edit_field13',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field5',
'integrated_edit_field12',
'integrated_edit_field6',
'integrated_edit_field10',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field9' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'update_records' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'prev' => 'below-grid',
'next' => 'below-grid',
'hamburger' => 'below-grid',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'edit_header' => 'top',
'integrated_edit_field11' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field9' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c15' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c16' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c20' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c21' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c22' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field6',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field15' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'changepassword_link' => array( 'changepassword_link' ),
'next' => array( 'next' ),
'prev' => array( 'prev' ),
'update_records' => array( 'update_records' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c21' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c22' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c23' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c24' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c25' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 1 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 2 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 8 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array( 'update_records' => array( 'tag' => 'UPDATE_N_RECORDS',
'type' => 2 ) ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => true ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'update_records',
'edit_back_list',
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'prev',
'next',
'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'notifications',
'loginform_login',
'username_button' ) ) ),
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
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c20' ),
array( 'cell' => 'c21' ),
array( 'cell' => 'c22' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c23' ),
array( 'cell' => 'c24' ),
array( 'cell' => 'c25' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ),
array( 'cell' => 'c16' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c17' ),
array( 'cell' => 'c18' ),
array( 'cell' => 'c19' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field14' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field15' ) ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field13' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c10' => array( 'model' => 'c3',
'items' => array(  ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field12' ) ),
'c14' => array( 'model' => 'c3',
'items' => array(  ) ),
'c15' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c16' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c17' => array( 'model' => 'c3',
'items' => array(  ) ),
'c18' => array( 'model' => 'c3',
'items' => array(  ) ),
'c19' => array( 'model' => 'c3',
'items' => array(  ) ),
'c20' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c21' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c22' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c23' => array( 'model' => 'c3',
'items' => array(  ) ),
'c24' => array( 'model' => 'c3',
'items' => array(  ) ),
'c25' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 3,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 'indicator_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'indicator_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'data_source_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'data_source_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'scope_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'scope_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'region_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'region_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'unit_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'unit_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'facility_type_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'facility_type_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'year',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'year',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'value',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'integrated_edit_field9' => array( 'field' => 'gender_sex',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'gender_sex',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field10' => array( 'field' => 'data_representation',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'data_representation',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'integrated_edit_field11' => array( 'field' => 'indicator_group_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'indicator_group_id',
'table' => 'public.moh_indicator_data',
'type' => 4 ),
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'data_source_detail',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field13' => array( 'field' => 'period_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field14' => array( 'field' => 'month_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field15' => array( 'field' => 'quarter_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'next' => array( 'type' => 'next' ),
'prev' => array( 'type' => 'prev' ),
'update_records' => array( 'type' => 'update_records' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>