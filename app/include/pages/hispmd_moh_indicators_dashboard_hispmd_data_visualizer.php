<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'grid' => array(  ),
'supertop' => array( 'breadcrumb',
'list_options',
'notifications',
'loginform_login',
'list_options1',
'username_button' ),
'top' => array( 'text' ) ),
'formXtTags' => array( 'grid' => array(  ) ),
'itemForms' => array( 'breadcrumb' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'list_options1' => 'supertop',
'username_button' => 'supertop',
'text' => 'top' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'list_options' => 5,
'username_button' => 5,
'list_options1' => 5,
'notifications' => 5,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'text' => array( 'text' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'list_options' => array( 'list_options',
'list_options1' ),
'username_button' => array( 'username_button' ),
'notifications' => array( 'notifications' ),
'loginform_login' => array( 'loginform_login' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'dashboard',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dashboard' => array( 'elements' => array(  ) ),
'dashSearch' => array( 'searchFields' => array(  ),
'allSearchFields' => array(  ),
'googleLikeFields' => array(  ) ) );
			$pageArray = array( 'id' => 'hispmd_data_visualizer',
'type' => 'dashboard',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'grid' => array( 'modelId' => 'dashboard-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'customCSS' => '.header-container {
    display: none;
}' ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array(  ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'list_options',
'notifications',
'loginform_login',
'list_options1',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'dashboard-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISPMD Chart and Visualizations Builder</title>
    <style>
        /* Reset default browser margins and paddings for consistency */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        iframe {
            border: none;
            width: 100%;
            height: 111vh; /* Default for large screens */
        }

        /* Adjust iframe height for smaller screens */
        @media (max-width: 768px) {
            iframe {
                height: 110vh; /* For tablets or smaller screens */
            }
        }

        @media (max-width: 480px) {
            iframe {
                height: 100vh; /* For mobile devices */
            }
        }
    </style>
</head>
<body>
    <!--
src="../api/chart/index.php"
src="index.php"
    -->
    <iframe
        id="hispmd-iframe"
        src="../api/chart/index.php"
        allowtransparency
        title="HISPMD Indicator Chart"
        loading="lazy">
    </iframe>


    <noscript>
        Your browser does not support JavaScript, which is required to load this chart.
    </noscript>
    <!-- If you have any questions, please contact: https://github.com/MIKEINTOSHSYSTEMS -->
</body>
</html>
',
'type' => 0 ),
'editedByRte' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'list_options' => array( 'type' => 'list_options',
'items' => array(  ),
'mobileDisplay' => 'desktop' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ),
'mobileDisplay' => 'desktop' ),
'list_options1' => array( 'type' => 'list_options',
'items' => array(  ),
'mobileDisplay' => 'desktop' ),
'notifications' => array( 'type' => 'notifications',
'mobileControl' => 'button',
'mobileDisplay' => 'desktop' ),
'loginform_login' => array( 'type' => 'loginform_login' ) ),
'dbProps' => array(  ),
'version' => 14,
'pageAlign' => 'center',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '    .header-container {
            display: none;
            /* justify-content: space-between; */
            /* align-items: center; */
            /* background-color: #00274c; */
            /* padding: 4px 10px; */
            /* box-shadow: 0 4px 2px -2px gray; */
            /* flex-wrap: wrap; */
                }',
'listTotals' => 1 );
		?>