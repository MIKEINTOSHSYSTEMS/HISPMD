<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();
$topsArray = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Amharic"] = array();
	$custom_labels["Amharic"]['_IFRAME_____SRC__HTTPS___VIZ_HISPMD_MERQCONSULTANCY_ORG_PUBLIC_DASHBOARD_D918846E_4CD4_4909_837E_73C99E8F85D8______FRAMEBORDER__0______WIDTH__100_______HEIGHT__100_______ALLOWTRANSPARENCY____IFRAME_'] = "<iframe
    src=\"https://viz.hispmd.merqconsultancy.org/public/dashboard/d918846e-4cd4-4909-837e-73c99e8f85d8\"
    frameborder=\"0\"
    width=\"100%\"
    height=\"100%\"
    allowtransparency
></iframe>";
		$custom_labels["Amharic"]['_BR_'] = "<br>";
		$custom_labels["Amharic"]['_BR___BR___BR_'] = "<br>
ምን እንረዳዎ?

";
		$custom_labels["Amharic"]['HOW_CAN_WE_HELP_YOU_'] = "የእውቀት ማዕከል";
		$custom_labels["Amharic"]['_BR__'] = "<br>
ምን እንረዳዎ?
<br>
<br>";
		$custom_labels["Amharic"]['KNOWLEDGE_BASE'] = "የእውቀት ማዕከል";
		$custom_labels["Amharic"]['MOST_VISITED_CONTENTS'] = "በብዛት የተጎበኙ ይዘቶች";
		$custom_labels["Amharic"]['NAME'] = "Name";
		$custom_labels["Amharic"]['ORGANISATION_AND_DEPARTMENT'] = "Organisation and Department";
		$custom_labels["Amharic"]['__DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_HISPMD_CHART_VISUALIZATIONS__TITLE_______STYLE__________HTML__BODY_______________MARGIN__0______________PADDING__0______________WIDTH__100_______________HEIGHT__100_______________DISPLAY__FLEX______________JUSTIFY_CONTENT__CENTER______________ALIGN_ITEMS__CENTER____________________IFRAME_______________BORDER__NONE______________WIDTH__100_______________HEIGHT__100VH_____________________MEDIA__MAX_WIDTH__768PX________________IFRAME___________________HEIGHT__80VH_____ADJUST_HEIGHT_FOR_SMALLER_SCREENS_____________________________________MEDIA__MAX_WIDTH__480PX________________IFRAME___________________HEIGHT__70VH_____FURTHER_ADJUST_FOR_MOBILE_DEVICES__________________________________STYLE____HEAD___BODY_______IFRAME_________ID__HISPMD_IFRAME__________SRC_____API__VISUALIZATION_________SRC__HTTPS___HISPMD_MERQCONSULTANCY_ORG_API_VISUALIZATION______________ALLOWTRANSPARENCY___IFRAME____BODY____HTML__'] = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>HISPMD Chart Visualizations</title>
    <style>
        iframe {
            border: none;
            width: 100%;
            height: 77vh;
        }
        @media (max-width: 768px) {
            iframe {
                height: 80vh; /* Adjust height for smaller screens */
            }
        }
        @media (max-width: 480px) {
            iframe {
                height: 70vh; /* Further adjust for mobile devices */
            }
        }
    </style>
</head>
<body>
    <iframe
        id=\"hispmd-iframe\"
        src=\"../api/visualization/\"
		<!--src=\"https://hispmd.merqconsultancy.org/api/visualization/\"-->
        allowtransparency></iframe>
<!--If any Questions Please Contact https://github.com/MIKEINTOSHSYSTEMS -->
</body>
</html>
";
		$custom_labels["Amharic"]['START_HERE_BY_SELECTING_AN_ORGANISATION_UNIT____DATASET_AND_THEN_REPORT_PERIOD_THE_AND_CLICK_ON_SEARCH'] = "START HERE by Selecting an Dataset, Facility Type and then Report Period the and Click on SEARCH";
		$custom_labels["Amharic"]['AFTER_SELECTING_FROM_THE_ABOVE_AVAILABLE_DATASETS_AND_ORGANISATION_UNITS__YOU_CAN_USE_THE_FILTERS_BELOW_TO_NARROW_DOWN_YOUR_SEARCH_RESULTS_'] = "After Selecting from the above Available Datasets and Facility Types, you can use the FILTER below to narrow down your search results by Org Units!";
		$custom_labels["Amharic"]['___'] = "⬅️";
		$custom_labels["Amharic"]['_BR__BR__BR_'] = "<br><br><br>";
		$custom_labels["Amharic"]['_P_CLICK_ON_THE_BUTTON_TO_EDIT_THE_SETTINGS__STRONG___GT___STRONG___P_'] = "<p>Click on the button to edit the settings <strong>=&gt;</strong></p>";
		$custom_labels["Amharic"]['__DOCTYPE_HTML___HTML_LANG__EN_____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_UPDATE_REPORTING_RATES__TITLE____________INCLUDE_BOOTSTRAP_CSS_FOR_MODERN_LOOK__________LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_3_0_ALPHA1_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET_________STYLE__________BODY_______________BACKGROUND_COLOR___F1F5F9______________FONT_FAMILY___ARIAL___SANS_SERIF______________PADDING__20PX______________________CONTAINER_______________MAX_WIDTH__600PX______________MARGIN__0_AUTO______________BACKGROUND___FFFFFF______________BORDER_RADIUS__10PX______________BOX_SHADOW__0_4PX_6PX_RGBA_0__0__0__0_1_______________PADDING__20PX_____________________H1_______________FONT_SIZE__1_8REM______________FONT_WEIGHT__BOLD______________COLOR___333______________________PROGRESS_CONTAINER_______________MARGIN_TOP__20PX______________________LOG_CONTAINER_______________MARGIN_TOP__20PX______________MAX_HEIGHT__300PX______________OVERFLOW_Y__AUTO______________BACKGROUND___F8F9FA______________PADDING__15PX______________BORDER__1PX_SOLID__DEE2E6______________BORDER_RADIUS__5PX______________________LOG_CONTAINER_PRE_______________MARGIN__0______________FONT_SIZE__14PX______________COLOR___495057______________WHITE_SPACE__PRE_WRAP______________________BTN_LG_______________FONT_SIZE__1REM______________PADDING__10PX_20PX______________________PROGRESS_BAR_______________TRANSITION__WIDTH_0_4S_EASE_____________________FOOTER_______________MARGIN_TOP__20PX______________TEXT_ALIGN__CENTER______________FONT_SIZE__0_9REM______________COLOR___6C757D_____________________FOOTER_A_______________COLOR___007BFF______________TEXT_DECORATION__NONE_____________________FOOTER_A_HOVER_______________TEXT_DECORATION__UNDERLINE__________________STYLE____HEAD____BODY_______DIV_CLASS__CONTAINER____________DIV_ALIGN__CENTER___SVG_WIDTH__64PX__HEIGHT__64PX__VIEWBOX__0_0_48_48__FILL__NONE__XMLNS__HTTP___WWW_W3_ORG_2000_SVG___G_ID__SVGREPO_BGCARRIER__STROKE_WIDTH__0____G__G_ID__SVGREPO_TRACERCARRIER__STROKE_LINECAP__ROUND__STROKE_LINEJOIN__ROUND____G__G_ID__SVGREPO_ICONCARRIER____PATH_FILL_RULE__EVENODD__CLIP_RULE__EVENODD__D__M8_05655_23_9708L6_86383_24_7067C5_64458_25_4589_5_58843_27_2115_6_75703_28_0402L22_8484_39_4515C23_5388_39_9411_24_4626_39_9431_25_1551_39_4565L41_3962_28_0456C42_5744_27_2178_42_5181_25_4536_41_2895_24_7026L39_8479_23_8215L38_0784_25_0839L40_2464_26_4091L24_0054_37_8201L7_91396_26_4088L9_84309_25_2186L8_05655_23_9708ZM33_4418_22_2498L24_0049_16_4814L14_4796_22_3581L12_693_21_1103L22_9547_14_7793C23_596_14_3837_24_4051_14_382_25_0479_14_775L35_2113_20_9873L33_4418_22_2498Z__FILL___3276C3____PATH___PATH_FILL_RULE__EVENODD__CLIP_RULE__EVENODD__D__M24_0048_9_48139L7_91391_19_4087L24_0053_30_82L40_2464_19_4091L24_0048_9_48139ZM6_86378_17_7066C5_64453_18_4588_5_58838_20_2114_6_75698_21_0401L22_8484_32_4514C23_5388_32_941_24_4626_32_943_25_1551_32_4565L41_3961_21_0455C42_5744_20_2177_42_518_18_4536_41_2894_17_7026L25_0479_7_77494C24_4051_7_38199_23_5959_7_38367_22_9547_7_77927L6_86378_17_7066Z__FILL___3276C3____PATH____G___SVG___DIV___________H2_CLASS__TEXT_CENTER_MB_4__UPDATE__U_DHIS2__U__REPORTING_RATES__H2____________DIV_CLASS__TEXT_CENTER________________BUTTON_ID__STARTUPDATE__CLASS__BTN_BTN_PRIMARY_BTN_LG__UPDATE_REPORTING_RATES__BUTTON____________DIV____________DIV_CLASS__PROGRESS_CONTAINER________________DIV_CLASS__PROGRESS____________________DIV_ID__PROGRESSBAR__CLASS__PROGRESS_BAR_BG_SUCCESS__ROLE__PROGRESSBAR__STYLE__WIDTH__0___ARIA_VALUENOW__0__ARIA_VALUEMIN__0__ARIA_VALUEMAX__100__0___DIV________________DIV____________DIV____________DIV_CLASS__LOG_CONTAINER_MT_4________________H5_CLASS__MB_3__LOGS___H5_______________PRE_ID__LOG__CLICK_THE_BUTTON_TO_START_THE_UPDATE_PROCESS_____PRE____________DIV____________FOOTER__________________BUILT_WITH____BY__A_HREF__HTTPS___MERQCONSULTANCY_ORG__TARGET___BLANK__MERQ_CONSULTANCY_PLC_LLC__A_______________FOOTER________DIV____________INCLUDE_JQUERY__________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT___________BOOTSTRAP_BUNDLE_JS__________SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_3_0_ALPHA1_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT________SCRIPT____________DOCUMENT__READY_FUNCTION______________________STARTUPDATE___ON__CLICK___FUNCTION______________________CONST_BUTTON_____THIS___________________CONST_PROGRESSBAR_______PROGRESSBAR____________________CONST_LOG_______LOG________________________RESET_PROGRESS_BAR_AND_LOG_________________PROGRESSBAR_CSS__WIDTH____0____ATTR__ARIA_VALUENOW___0__TEXT__0_____________________LOG_HTML__________CLEAR_LOGS_________________BUTTON_PROP__DISABLED___TRUE__TEXT__UPDATING___________________________SIMULATE_THE_UPDATE_PROCESS___________________AJAX_______________________URL______API_DHIS2_APIS_UPDATE_REPORTING_RATES_PHP_______________________TYPE___GET_______________________XHR__FUNCTION______________________________CONST_XHR___NEW_WINDOW_XMLHTTPREQUEST________________________________UPDATE_PROGRESS_AND_LOG_IN_REAL_TIME_________________________XHR_ONPROGRESS___FUNCTION__E________________________________IF__E_LENGTHCOMPUTABLE____________________________________CONST_PROGRESS___MATH_FLOOR__E_LOADED___E_TOTAL____100___________________________________PROGRESSBAR_CSS__WIDTH___PROGRESS________ATTR__ARIA_VALUENOW___PROGRESS__TEXT_PROGRESS____________________________________________________________________CONST_NEWLOG___E_TARGET_RESPONSETEXT______________________________LOG_HTML_NEWLOG_______UPDATE_LOG_DIV_WITH_NEW_LOG_DATA_____________________________________________________RETURN_XHR_____________________________________________SUCCESS__FUNCTION__RESPONSE____________________________PROGRESSBAR_CSS__WIDTH____100____ATTR__ARIA_VALUENOW___100__TEXT__100_____________________________BUTTON_PROP__DISABLED___FALSE__TEXT__UPDATE_REPORTING_RATES____________________________LOG_APPEND___PRE_UPDATE_COMPLETED_SUCCESSFULLY___PRE________________________________________________ERROR__FUNCTION__XHR__STATUS__ERROR____________________________LOG_APPEND___PRE_ERROR____ERROR___PRE_____________________________BUTTON_PROP__DISABLED___FALSE__TEXT__UPDATE_REPORTING_RATES________________________________________________________________________________SCRIPT____BODY_____HTML__'] = "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Update Reporting Rates</title>

    <!-- Include Bootstrap CSS for modern look -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .progress-container {
            margin-top: 20px;
        }

        .log-container {
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
            background: #f8f9fa;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .log-container pre {
            margin: 0;
            font-size: 14px;
            color: #495057;
            white-space: pre-wrap;
        }

        .btn-lg {
            font-size: 1rem;
            padding: 10px 20px;
        }

        .progress-bar {
            transition: width 0.4s ease;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class=\"container\">
        <div align=\"center\"><svg width=\"64px\" height=\"64px\" viewBox=\"0 0 48 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z\" fill=\"#3276c3\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z\" fill=\"#3276c3\"></path> </g></svg></div>
        <h2 class=\"text-center mb-4\">Update <u>DHIS2</u> Reporting Rates</h2>

        <div class=\"text-center\">
            <button id=\"startUpdate\" class=\"btn btn-primary btn-lg\">Update Reporting Rates</button>
        </div>

        <div class=\"progress-container\">
            <div class=\"progress\">
                <div id=\"progressBar\" class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
            </div>
        </div>

        <div class=\"log-container mt-4\">
            <h5 class=\"mb-3\">Logs:</h5>
            <pre id=\"log\">Click the button to start the update process...</pre>
        </div>

        <footer>
           <!-- Built with ❤️ by <a href=\"https://merqconsultancy.org\" target=\"_blank\">MERQ Consultancy PLC LLC</a>-->
        </footer>
    </div>

    <!-- Include jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <!-- Bootstrap Bundle JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        \$(document).ready(function () {
            \$('#startUpdate').on('click', function () {
                const button = \$(this);
                const progressBar = \$('#progressBar');
                const log = \$('#log');

                // Reset progress bar and log
                progressBar.css('width', '0%').attr('aria-valuenow', 0).text('0%');
                log.html('');  // Clear logs
                button.prop('disabled', true).text('Updating...');

                // Simulate the update process
                \$.ajax({
                    url: '../api/dhis2/apis/update_reporting_rates.php',
                    type: 'GET',
                    xhr: function () {
                        const xhr = new window.XMLHttpRequest();

                        // Update progress and log in real-time
                        xhr.onprogress = function (e) {
                            if (e.lengthComputable) {
                                const progress = Math.floor((e.loaded / e.total) * 100);
                                progressBar.css('width', progress + '%').attr('aria-valuenow', progress).text(progress + '%');
                            }

                            const newLog = e.target.responseText;
                            log.html(newLog);  // Update log div with new log data
                        };

                        return xhr;
                    },
                    success: function (response) {
                        progressBar.css('width', '100%').attr('aria-valuenow', 100).text('100%');
                        button.prop('disabled', false).text('Update Reporting Rates');
                        log.append('<pre>Update completed successfully!</pre>');
                    },
                    error: function (xhr, status, error) {
                        log.append(`<pre>Error: \${error}</pre>`);
                        button.prop('disabled', false).text('Update Reporting Rates');
                    }
                });
            });
        });
    </script>
</body>

</html>
";
		$custom_labels["Amharic"]['__PHP____INCLUDE_DATABASE_CONNECTION_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_DB_CONNECTION_PHP________DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_DHIS2_EIDM_DATA_MANAGEMENT__TITLE_______LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET________STYLE___________CONTAINER___MAX_WIDTH__1200PX__MARGIN__40PX_AUTO_____________DATA_PREVIEW___MAX_HEIGHT__500PX__OVERFLOW_Y__AUTO__MARGIN__20PX_0_____________STATUS_BOX___PADDING__15PX__MARGIN__10PX_0__BORDER_RADIUS__5PX__________STYLE____HEAD___BODY_______DIV_CLASS__CONTAINER____________H2_CLASS__MB_4__DHIS2___EIDM__HC_HOSP_WOR_HP__DATA_MANAGEMENT__H2________________ADD_THIS_AFTER__H2__TAG______UL_CLASS__NAV_NAV_TABS_MB_4________LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK_ACTIVE__HREF___OPERATIONS__DATA_BS_TOGGLE__TAB__OPERATIONS__A________LI_______LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK__HREF___SETTINGS__DATA_BS_TOGGLE__TAB__SETTINGS__A________LI____UL____DIV_CLASS__TAB_CONTENT________DIV_CLASS__TAB_PANE_FADE_SHOW_ACTIVE__ID__OPERATIONS________________EXISTING_OPERATIONS_CONTENT___________DIV_______DIV_CLASS__TAB_PANE_FADE__ID__SETTINGS_____________PHP_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_UI_PHP____________DIV____DIV________________________CONTROL_SECTION______________DIV_CLASS__CARD_MB_4________________DIV_CLASS__CARD_HEADER_BG_PRIMARY_TEXT_WHITE___________________OPERATIONS_______________DIV_______________DIV_CLASS__CARD_BODY____________________BUTTON_ID__UPDATEDATA__CLASS__BTN_BTN_SUCCESS_______________________UPDATE_EIDM_DATA___________________BUTTON___________________DIV_ID__STATUS__CLASS__STATUS_BOX____DIV________________DIV____________DIV________________DATA_PREVIEW_SECTION______________DIV_CLASS__CARD________________DIV_CLASS__CARD_HEADER___________________DATA_PREVIEW__LAST_FETCHED_RESULTS________________DIV_______________DIV_CLASS__CARD_BODY____________________DIV_ID__DATAPREVIEW__CLASS__DATA_PREVIEW____________________________DATA_WILL_BE_LOADED_HERE_______________________DIV________________DIV____________DIV________DIV________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT_______SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT_______SCRIPT________DOCUMENT__READY_FUNCTION_________________UPDATEDATA___CLICK_FUNCTION_________________CONST_BTN_____THIS_______________BTN_PROP__DISABLED___TRUE___________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__FETCHING_DATA_FROM_API_____DIV_____________________FETCH_DATA_FROM_API_______________AJAX___________________URL______API_DHIS2_EIDM_HC_SETTINGS_API_EIDMHC_PHP___________________METHOD___GET___________________DATATYPE___JSON___________________SUCCESS__FUNCTION_APIDATA____________________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__SAVING_DATA_TO_DATABASE_____DIV_________________________________________________SEND_DATA_TO_SAVE_ENDPOINT_______________________AJAX___________________________URL______API_DHIS2_EIDM_HC_SAVE_DATA_PHP___________________________METHOD___POST___________________________CONTENTTYPE___APPLICATION_JSON___________________________DATA__JSON_STRINGIFY_APIDATA___________________________SUCCESS__FUNCTION_RESPONSE________________________________IF_RESPONSE_SUCCESS________________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_SUCCESS___________________________________________SUCCESS____RESPONSE_INSERTED_ROWS__RECORDS_INSERTED_______________________________________DIV______________________________________________________________________LOADDATAPREVIEW__________________________________ELSE_______________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_DANGER___________________________________________ERROR____RESPONSE_ERROR________________________________________DIV_______________________________________________________________________________________________________________________ERROR__FUNCTION_XHR____________________________________STATUS___HTML____________________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________________SAVE_FAILED____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________________DIV_____________________________________________________________________________________COMPLETE________BTN_PROP__DISABLED___FALSE_____________________________________________________________ERROR__FUNCTION_XHR____________________________STATUS___HTML____________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________API_ERROR____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________DIV______________________________________________BTN_PROP__DISABLED___FALSE__________________________________________________________FUNCTION_LOADDATAPREVIEW___________________GET_____API_DHIS2_EIDM_HC_FETCH_DATA_PHP___FUNCTION_DATA____________________CONST_PREVIEW_______DATAPREVIEW____________________PREVIEW_HTML________________________TABLE_CLASS__TABLE_TABLE_STRIPED____________________________THEAD_______________________________TR___________________________________TH_INDICATOR__TH___________________________________TH_ORGANISATION_UNIT__TH___________________________________TH_PERIOD__TH___________________________________TH_VALUE__TH________________________________TR____________________________THEAD___________________________TBODY________________________________DATA_ROWS_MAP_ROW_______________________________________TR_______________________________________TD___ROW_INDICATOR___TD_______________________________________TD___ROW_ORGANISATION_UNIT___TD_______________________________________TD___ROW_PERIOD___TD_______________________________________TD___ROW_VALUE___TD____________________________________TR_________________________________JOIN________________________________TBODY________________________TABLE_____________________________________FAIL_____________________________DATAPREVIEW___HTML___DIV_CLASS__ALERT_ALERT_WARNING__ERROR_LOADING_PREVIEW__DIV___________________________________________LOAD_INITIAL_PREVIEW_________LOADDATAPREVIEW__________________SCRIPT____BODY____HTML_'] = "<?php
// Include database connection
include '../api/dhis2/eidm_hc/settings/db_connection.php';
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DHIS2 EIDM Data Management</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        .container { max-width: 1200px; margin: 40px auto; }
        .data-preview { max-height: 500px; overflow-y: auto; margin: 20px 0; }
        .status-box { padding: 15px; margin: 10px 0; border-radius: 5px; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h2 class=\"mb-4\">DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>

        <!-- Add this after <h2> tag -->
<ul class=\"nav nav-tabs mb-4\">
    <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"#operations\" data-bs-toggle=\"tab\">Operations</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#settings\" data-bs-toggle=\"tab\">Settings</a>
    </li>
</ul>

<div class=\"tab-content\">
    <div class=\"tab-pane fade show active\" id=\"operations\">
        <!-- Existing operations content -->
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
        <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
    </div>
</div>
        
        <!-- Control Section -->
        <div class=\"card mb-4\">
            <div class=\"card-header bg-primary text-white\">
                Operations
            </div>
            <div class=\"card-body\">
                <button id=\"updateData\" class=\"btn btn-success\">
                    Update EIDM Data
                </button>
                <div id=\"status\" class=\"status-box\"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class=\"card\">
            <div class=\"card-header\">
                Data Preview (Last Fetched Results)
            </div>
            <div class=\"card-body\">
                <div id=\"dataPreview\" class=\"data-preview\">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
    \$(document).ready(function() {
        \$('#updateData').click(function() {
            const btn = \$(this);
            btn.prop('disabled', true);
            \$('#status').html('<div class=\"alert alert-info\">Fetching data from API...</div>');

            // Fetch data from API
            \$.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    \$('#status').html('<div class=\"alert alert-info\">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    \$.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                \$('#status').html(`
                                    <div class=\"alert alert-success\">
                                        Success! \${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                \$('#status').html(`
                                    <div class=\"alert alert-danger\">
                                        Error: \${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            \$('#status').html(`
                                <div class=\"alert alert-danger\">
                                    Save failed: \${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    \$('#status').html(`
                        <div class=\"alert alert-danger\">
                            API Error: \${xhr.responseJSON?.error || 'Unknown error'}
                        </div>
                    `);
                    btn.prop('disabled', false);
                }
            });
        });

        function loadDataPreview() {
            \$.get('../api/dhis2/eidm_hc/fetch_data.php', function(data) {
                const preview = \$('#dataPreview');
                preview.html(
                    `<table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Indicator</th>
                                <th>Organisation Unit</th>
                                <th>Period</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            \${data.rows.map(row => `
                                <tr>
                                    <td>\${row.indicator}</td>
                                    <td>\${row.organisation_unit}</td>
                                    <td>\${row.period}</td>
                                    <td>\${row.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>`
                );
            }).fail(() => {
                \$('#dataPreview').html('<div class=\"alert alert-warning\">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>";
		$custom_labels["Amharic"]['__PHP____INCLUDE_DATABASE_CONNECTION_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_DB_CONNECTION_PHP________DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_DHIS2_EIDM_DATA_MANAGEMENT__TITLE_______LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET________STYLE___________CONTAINER___MAX_WIDTH__1200PX__MARGIN__40PX_AUTO_____________DATA_PREVIEW___MAX_HEIGHT__500PX__OVERFLOW_Y__AUTO__MARGIN__20PX_0_____________STATUS_BOX___PADDING__15PX__MARGIN__10PX_0__BORDER_RADIUS__5PX__________STYLE____HEAD___BODY_______DIV_CLASS__CONTAINER____________H2_CLASS__MB_4__DHIS2___EIDM__HC_HOSP_WOR_HP__DATA_MANAGEMENT__H2________________ADD_THIS_AFTER__H2__TAG______UL_CLASS__NAV_NAV_TABS_MB_4________LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK_ACTIVE__HREF___OPERATIONS__DATA_BS_TOGGLE__TAB__OPERATIONS__A________LI_______LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK__HREF___SETTINGS__DATA_BS_TOGGLE__TAB__SETTINGS__A________LI____UL____DIV_CLASS__TAB_CONTENT________DIV_CLASS__TAB_PANE_FADE_SHOW_ACTIVE__ID__OPERATIONS________________EXISTING_OPERATIONS_CONTENT___________DIV_______DIV_CLASS__TAB_PANE_FADE__ID__SETTINGS_____________PHP_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_UI_PHP____________DIV____DIV________________________CONTROL_SECTION______________DIV_CLASS__CARD_MB_4________________DIV_CLASS__CARD_HEADER_BG_PRIMARY_TEXT_WHITE___________________OPERATIONS_______________DIV_______________DIV_CLASS__CARD_BODY____________________BUTTON_ID__UPDATEDATA__CLASS__BTN_BTN_SUCCESS_______________________UPDATE_EIDM_DATA___________________BUTTON___________________DIV_ID__STATUS__CLASS__STATUS_BOX____DIV________________DIV____________DIV________________DATA_PREVIEW_SECTION______________DIV_CLASS__CARD________________DIV_CLASS__CARD_HEADER___________________DATA_PREVIEW__LAST_FETCHED_RESULTS________________DIV_______________DIV_CLASS__CARD_BODY____________________DIV_ID__DATAPREVIEW__CLASS__DATA_PREVIEW____________________________DATA_WILL_BE_LOADED_HERE_______________________DIV________________DIV____________DIV________DIV________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT_______SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT_______SCRIPT________DOCUMENT__READY_FUNCTION_________________UPDATEDATA___CLICK_FUNCTION_________________CONST_BTN_____THIS_______________BTN_PROP__DISABLED___TRUE___________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__FETCHING_DATA_FROM_API_____DIV_____________________FETCH_DATA_FROM_API_______________AJAX___________________URL______API_DHIS2_EIDM_HC_SETTINGS_API_EIDMHC_PHP___________________METHOD___GET___________________DATATYPE___JSON___________________SUCCESS__FUNCTION_APIDATA____________________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__SAVING_DATA_TO_DATABASE_____DIV_________________________________________________SEND_DATA_TO_SAVE_ENDPOINT_______________________AJAX___________________________URL______API_DHIS2_EIDM_HC_SAVE_DATA_PHP___________________________METHOD___POST___________________________CONTENTTYPE___APPLICATION_JSON___________________________DATA__JSON_STRINGIFY_APIDATA___________________________SUCCESS__FUNCTION_RESPONSE________________________________IF_RESPONSE_SUCCESS________________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_SUCCESS___________________________________________SUCCESS____RESPONSE_INSERTED_ROWS__RECORDS_INSERTED_______________________________________DIV______________________________________________________________________LOADDATAPREVIEW__________________________________ELSE_______________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_DANGER___________________________________________ERROR____RESPONSE_ERROR________________________________________DIV_______________________________________________________________________________________________________________________ERROR__FUNCTION_XHR____________________________________STATUS___HTML____________________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________________SAVE_FAILED____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________________DIV_____________________________________________________________________________________COMPLETE________BTN_PROP__DISABLED___FALSE_____________________________________________________________ERROR__FUNCTION_XHR____________________________STATUS___HTML____________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________API_ERROR____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________DIV______________________________________________BTN_PROP__DISABLED___FALSE__________________________________________________________FUNCTION_LOADDATAPREVIEW___________________GET_____API_DHIS2_EIDM_HC_FETCH_DATA_PHP___FUNCTION_DATA____________________CONST_PREVIEW_______DATAPREVIEW____________________PREVIEW_HTML________________________TABLE_CLASS__TABLE_TABLE_STRIPED____________________________THEAD_______________________________TR___________________________________TH_INDICATOR__TH___________________________________TH_ORGANISATION_UNIT__TH___________________________________TH_PERIOD__TH___________________________________TH_VALUE__TH________________________________TR____________________________THEAD___________________________TBODY________________________________DATA_ROWS_MAP_ROW_______________________________________TR_______________________________________TD___ROW_INDICATOR___TD_______________________________________TD___ROW_ORGANISATION_UNIT___TD_______________________________________TD___ROW_PERIOD___TD_______________________________________TD___ROW_VALUE___TD____________________________________TR_________________________________JOIN________________________________TBODY________________________TABLE_____________________________________FAIL_____________________________DATAPREVIEW___HTML___DIV_CLASS__ALERT_ALERT_WARNING__ERROR_LOADING_PREVIEW__DIV___________________________________________LOAD_INITIAL_PREVIEW_________LOADDATAPREVIEW__________________SCRIPT____BODY____HTML_1'] = "<?php
// Include database connection
include '../api/dhis2/eidm_hc/settings/db_connection.php';
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DHIS2 EIDM Data Management</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        .container { max-width: 1200px; margin: 40px auto; }
        .data-preview { max-height: 500px; overflow-y: auto; margin: 20px 0; }
        .status-box { padding: 15px; margin: 10px 0; border-radius: 5px; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h2 class=\"mb-4\">DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>

        <!-- Add this after <h2> tag -->
<ul class=\"nav nav-tabs mb-4\">
    <li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"#operations\" data-bs-toggle=\"tab\">Operations</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#settings\" data-bs-toggle=\"tab\">Settings</a>
    </li>
</ul>

<div class=\"tab-content\">
    <div class=\"tab-pane fade show active\" id=\"operations\">
        <!-- Existing operations content -->
    </div>
    <div class=\"tab-pane fade\" id=\"settings\">
        <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
    </div>
</div>
        
        <!-- Control Section -->
        <div class=\"card mb-4\">
            <div class=\"card-header bg-primary text-white\">
                Operations
            </div>
            <div class=\"card-body\">
                <button id=\"updateData\" class=\"btn btn-success\">
                    Update EIDM Data
                </button>
                <div id=\"status\" class=\"status-box\"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class=\"card\">
            <div class=\"card-header\">
                Data Preview (Last Fetched Results)
            </div>
            <div class=\"card-body\">
                <div id=\"dataPreview\" class=\"data-preview\">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
    \$(document).ready(function() {
        \$('#updateData').click(function() {
            const btn = \$(this);
            btn.prop('disabled', true);
            \$('#status').html('<div class=\"alert alert-info\">Fetching data from API...</div>');

            // Fetch data from API
            \$.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    \$('#status').html('<div class=\"alert alert-info\">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    \$.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                \$('#status').html(`
                                    <div class=\"alert alert-success\">
                                        Success! \${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                \$('#status').html(`
                                    <div class=\"alert alert-danger\">
                                        Error: \${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            \$('#status').html(`
                                <div class=\"alert alert-danger\">
                                    Save failed: \${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    \$('#status').html(`
                        <div class=\"alert alert-danger\">
                            API Error: \${xhr.responseJSON?.error || 'Unknown error'}
                        </div>
                    `);
                    btn.prop('disabled', false);
                }
            });
        });

        function loadDataPreview() {
            \$.get('../api/dhis2/eidm_hc/fetch_data.php', function(data) {
                const preview = \$('#dataPreview');
                preview.html(
                    `<table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Indicator</th>
                                <th>Organisation Unit</th>
                                <th>Period</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            \${data.rows.map(row => `
                                <tr>
                                    <td>\${row.indicator}</td>
                                    <td>\${row.organisation_unit}</td>
                                    <td>\${row.period}</td>
                                    <td>\${row.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>`
                );
            }).fail(() => {
                \$('#dataPreview').html('<div class=\"alert alert-warning\">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>";
	$custom_labels["English"] = array();
		$custom_labels["English"]['_IFRAME_____SRC__HTTPS___VIZ_HISPMD_MERQCONSULTANCY_ORG_PUBLIC_DASHBOARD_D918846E_4CD4_4909_837E_73C99E8F85D8______FRAMEBORDER__0______WIDTH__100_______HEIGHT__100_______ALLOWTRANSPARENCY____IFRAME_'] = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>MFR Facilities Registery Dashboard</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        iframe {
            border: none;
            width: 100%;
            height: 777vh;
            position: relative;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <iframe
        id=\"metabase-iframe\"
        src=\"\"
        allowtransparency></iframe>
    <script>
        // Set dashboard ID dynamically
        var dashboardId = 2; // Replace with dynamic ID if needed

        // Make a request to the PHP server to generate the iframe URL for the selected dashboard ID
        fetch('../api/meta/base.php?dashboardId=' + dashboardId)
            .then(response => response.text())
            .then(iframeUrl => {
                document.getElementById('metabase-iframe').src = iframeUrl;
            });
    </script>
</body>
        <!--If any Questions Please Contact https://github.com/MIKEINTOSHSYSTEMS -->

</html>
";
		$custom_labels["English"]['_BR_'] = "<br>
<br>
<br>
";
		$custom_labels["English"]['_BR___BR___BR_'] = "<br>
How can we help you?";
		$custom_labels["English"]['HOW_CAN_WE_HELP_YOU_'] = "Knowledge Base";
		$custom_labels["English"]['_BR__'] = "<br>
How can we help you?
<br>
<br>";
		$custom_labels["English"]['KNOWLEDGE_BASE'] = "Knowledge Base";
		$custom_labels["English"]['MOST_VISITED_CONTENTS'] = "Most Visited Contents";
		$custom_labels["English"]['NAME'] = "Your Name";
		$custom_labels["English"]['ORGANISATION_AND_DEPARTMENT'] = "Your Organisation and Department";
		$custom_labels["English"]['__DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_HISPMD_CHART_VISUALIZATIONS__TITLE_______STYLE__________HTML__BODY_______________MARGIN__0______________PADDING__0______________WIDTH__100_______________HEIGHT__100_______________DISPLAY__FLEX______________JUSTIFY_CONTENT__CENTER______________ALIGN_ITEMS__CENTER____________________IFRAME_______________BORDER__NONE______________WIDTH__100_______________HEIGHT__100VH_____________________MEDIA__MAX_WIDTH__768PX________________IFRAME___________________HEIGHT__80VH_____ADJUST_HEIGHT_FOR_SMALLER_SCREENS_____________________________________MEDIA__MAX_WIDTH__480PX________________IFRAME___________________HEIGHT__70VH_____FURTHER_ADJUST_FOR_MOBILE_DEVICES__________________________________STYLE____HEAD___BODY_______IFRAME_________ID__HISPMD_IFRAME__________SRC_____API__VISUALIZATION_________SRC__HTTPS___HISPMD_MERQCONSULTANCY_ORG_API_VISUALIZATION______________ALLOWTRANSPARENCY___IFRAME____BODY____HTML__'] = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>HISPMD Chart Visualizations</title>
    <style>
        iframe {
            border: none;
            width: 100%;
            height: 77vh;
        }
        @media (max-width: 768px) {
            iframe {
                height: 80vh; /* Adjust height for smaller screens */
            }
        }
        @media (max-width: 480px) {
            iframe {
                height: 70vh; /* Further adjust for mobile devices */
            }
        }
    </style>
</head>
<body>
    <iframe
        id=\"hispmd-iframe\"
        src=\"../api/visualization/\"
		<!--src=\"https://hispmd.merqconsultancy.org/api/visualization/\"-->
        allowtransparency></iframe>
<!--If any Questions Please Contact https://github.com/MIKEINTOSHSYSTEMS -->
</body>
</html>
";
		$custom_labels["English"]['START_HERE_BY_SELECTING_AN_ORGANISATION_UNIT____DATASET_AND_THEN_REPORT_PERIOD_THE_AND_CLICK_ON_SEARCH'] = "START HERE by Selecting an Dataset, Facility Type and then Report Period the and Click on SEARCH";
		$custom_labels["English"]['AFTER_SELECTING_FROM_THE_ABOVE_AVAILABLE_DATASETS_AND_ORGANISATION_UNITS__YOU_CAN_USE_THE_FILTERS_BELOW_TO_NARROW_DOWN_YOUR_SEARCH_RESULTS_'] = "After Selecting from the above Available Datasets and Facility Types, you can use the FILTER below to narrow down your search results by Org Units!";
		$custom_labels["English"]['___'] = "⬅️";
		$custom_labels["English"]['_BR__BR__BR_'] = "<br><br>";
		$custom_labels["English"]['_P_CLICK_ON_THE_BUTTON_TO_EDIT_THE_SETTINGS__STRONG___GT___STRONG___P_'] = "<p>Click on the button to edit the settings<strong>&nbsp; </strong></p>";
		$custom_labels["English"]['__DOCTYPE_HTML___HTML_LANG__EN_____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_UPDATE_REPORTING_RATES__TITLE____________INCLUDE_BOOTSTRAP_CSS_FOR_MODERN_LOOK__________LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_3_0_ALPHA1_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET_________STYLE__________BODY_______________BACKGROUND_COLOR___F1F5F9______________FONT_FAMILY___ARIAL___SANS_SERIF______________PADDING__20PX______________________CONTAINER_______________MAX_WIDTH__600PX______________MARGIN__0_AUTO______________BACKGROUND___FFFFFF______________BORDER_RADIUS__10PX______________BOX_SHADOW__0_4PX_6PX_RGBA_0__0__0__0_1_______________PADDING__20PX_____________________H1_______________FONT_SIZE__1_8REM______________FONT_WEIGHT__BOLD______________COLOR___333______________________PROGRESS_CONTAINER_______________MARGIN_TOP__20PX______________________LOG_CONTAINER_______________MARGIN_TOP__20PX______________MAX_HEIGHT__300PX______________OVERFLOW_Y__AUTO______________BACKGROUND___F8F9FA______________PADDING__15PX______________BORDER__1PX_SOLID__DEE2E6______________BORDER_RADIUS__5PX______________________LOG_CONTAINER_PRE_______________MARGIN__0______________FONT_SIZE__14PX______________COLOR___495057______________WHITE_SPACE__PRE_WRAP______________________BTN_LG_______________FONT_SIZE__1REM______________PADDING__10PX_20PX______________________PROGRESS_BAR_______________TRANSITION__WIDTH_0_4S_EASE_____________________FOOTER_______________MARGIN_TOP__20PX______________TEXT_ALIGN__CENTER______________FONT_SIZE__0_9REM______________COLOR___6C757D_____________________FOOTER_A_______________COLOR___007BFF______________TEXT_DECORATION__NONE_____________________FOOTER_A_HOVER_______________TEXT_DECORATION__UNDERLINE__________________STYLE____HEAD____BODY_______DIV_CLASS__CONTAINER____________DIV_ALIGN__CENTER___SVG_WIDTH__64PX__HEIGHT__64PX__VIEWBOX__0_0_48_48__FILL__NONE__XMLNS__HTTP___WWW_W3_ORG_2000_SVG___G_ID__SVGREPO_BGCARRIER__STROKE_WIDTH__0____G__G_ID__SVGREPO_TRACERCARRIER__STROKE_LINECAP__ROUND__STROKE_LINEJOIN__ROUND____G__G_ID__SVGREPO_ICONCARRIER____PATH_FILL_RULE__EVENODD__CLIP_RULE__EVENODD__D__M8_05655_23_9708L6_86383_24_7067C5_64458_25_4589_5_58843_27_2115_6_75703_28_0402L22_8484_39_4515C23_5388_39_9411_24_4626_39_9431_25_1551_39_4565L41_3962_28_0456C42_5744_27_2178_42_5181_25_4536_41_2895_24_7026L39_8479_23_8215L38_0784_25_0839L40_2464_26_4091L24_0054_37_8201L7_91396_26_4088L9_84309_25_2186L8_05655_23_9708ZM33_4418_22_2498L24_0049_16_4814L14_4796_22_3581L12_693_21_1103L22_9547_14_7793C23_596_14_3837_24_4051_14_382_25_0479_14_775L35_2113_20_9873L33_4418_22_2498Z__FILL___3276C3____PATH___PATH_FILL_RULE__EVENODD__CLIP_RULE__EVENODD__D__M24_0048_9_48139L7_91391_19_4087L24_0053_30_82L40_2464_19_4091L24_0048_9_48139ZM6_86378_17_7066C5_64453_18_4588_5_58838_20_2114_6_75698_21_0401L22_8484_32_4514C23_5388_32_941_24_4626_32_943_25_1551_32_4565L41_3961_21_0455C42_5744_20_2177_42_518_18_4536_41_2894_17_7026L25_0479_7_77494C24_4051_7_38199_23_5959_7_38367_22_9547_7_77927L6_86378_17_7066Z__FILL___3276C3____PATH____G___SVG___DIV___________H2_CLASS__TEXT_CENTER_MB_4__UPDATE__U_DHIS2__U__REPORTING_RATES__H2____________DIV_CLASS__TEXT_CENTER________________BUTTON_ID__STARTUPDATE__CLASS__BTN_BTN_PRIMARY_BTN_LG__UPDATE_REPORTING_RATES__BUTTON____________DIV____________DIV_CLASS__PROGRESS_CONTAINER________________DIV_CLASS__PROGRESS____________________DIV_ID__PROGRESSBAR__CLASS__PROGRESS_BAR_BG_SUCCESS__ROLE__PROGRESSBAR__STYLE__WIDTH__0___ARIA_VALUENOW__0__ARIA_VALUEMIN__0__ARIA_VALUEMAX__100__0___DIV________________DIV____________DIV____________DIV_CLASS__LOG_CONTAINER_MT_4________________H5_CLASS__MB_3__LOGS___H5_______________PRE_ID__LOG__CLICK_THE_BUTTON_TO_START_THE_UPDATE_PROCESS_____PRE____________DIV____________FOOTER__________________BUILT_WITH____BY__A_HREF__HTTPS___MERQCONSULTANCY_ORG__TARGET___BLANK__MERQ_CONSULTANCY_PLC_LLC__A_______________FOOTER________DIV____________INCLUDE_JQUERY__________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT___________BOOTSTRAP_BUNDLE_JS__________SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_3_0_ALPHA1_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT________SCRIPT____________DOCUMENT__READY_FUNCTION______________________STARTUPDATE___ON__CLICK___FUNCTION______________________CONST_BUTTON_____THIS___________________CONST_PROGRESSBAR_______PROGRESSBAR____________________CONST_LOG_______LOG________________________RESET_PROGRESS_BAR_AND_LOG_________________PROGRESSBAR_CSS__WIDTH____0____ATTR__ARIA_VALUENOW___0__TEXT__0_____________________LOG_HTML__________CLEAR_LOGS_________________BUTTON_PROP__DISABLED___TRUE__TEXT__UPDATING___________________________SIMULATE_THE_UPDATE_PROCESS___________________AJAX_______________________URL______API_DHIS2_APIS_UPDATE_REPORTING_RATES_PHP_______________________TYPE___GET_______________________XHR__FUNCTION______________________________CONST_XHR___NEW_WINDOW_XMLHTTPREQUEST________________________________UPDATE_PROGRESS_AND_LOG_IN_REAL_TIME_________________________XHR_ONPROGRESS___FUNCTION__E________________________________IF__E_LENGTHCOMPUTABLE____________________________________CONST_PROGRESS___MATH_FLOOR__E_LOADED___E_TOTAL____100___________________________________PROGRESSBAR_CSS__WIDTH___PROGRESS________ATTR__ARIA_VALUENOW___PROGRESS__TEXT_PROGRESS____________________________________________________________________CONST_NEWLOG___E_TARGET_RESPONSETEXT______________________________LOG_HTML_NEWLOG_______UPDATE_LOG_DIV_WITH_NEW_LOG_DATA_____________________________________________________RETURN_XHR_____________________________________________SUCCESS__FUNCTION__RESPONSE____________________________PROGRESSBAR_CSS__WIDTH____100____ATTR__ARIA_VALUENOW___100__TEXT__100_____________________________BUTTON_PROP__DISABLED___FALSE__TEXT__UPDATE_REPORTING_RATES____________________________LOG_APPEND___PRE_UPDATE_COMPLETED_SUCCESSFULLY___PRE________________________________________________ERROR__FUNCTION__XHR__STATUS__ERROR____________________________LOG_APPEND___PRE_ERROR____ERROR___PRE_____________________________BUTTON_PROP__DISABLED___FALSE__TEXT__UPDATE_REPORTING_RATES________________________________________________________________________________SCRIPT____BODY_____HTML__'] = "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Update Reporting Rates</title>

    <!-- Include Bootstrap CSS for modern look -->


    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
            /*padding: 20px;*/
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .progress-container {
            margin-top: 20px;
        }

        .log-container {
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
            background: #f8f9fa;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .log-container pre {
            margin: 0;
            font-size: 14px;
            color: #495057;
            white-space: pre-wrap;
        }

        .btn-lg {
            font-size: 1rem;
            padding: 10px 20px;
        }

        .progress-bar {
            transition: width 0.4s ease;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class=\"container\">
        <div align=\"center\"><svg width=\"64px\" height=\"64px\" viewBox=\"0 0 48 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z\" fill=\"#3276c3\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z\" fill=\"#3276c3\"></path> </g></svg></div>
        <h2 class=\"text-center mb-4\">Update <u>DHIS2</u> Reporting Rates</h2>

        <div class=\"text-center\">
<br>
<br>
            <button id=\"startUpdate\" class=\"btn btn-primary btn-lg\">START Updating Reporting Rates</button>
        </div>

        <div class=\"progress-container\">
            <div class=\"progress\">
                <div id=\"progressBar\" class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">0%</div>
            </div>
        </div>

        <div class=\"log-container mt-4\">
            <h5 class=\"mb-3\">Logs:</h5>
            <pre id=\"log\">Click the button to start the update process...</pre>
        </div>

        <footer>
           <!-- Built with ❤️ by <a href=\"https://merqconsultancy.org\" target=\"_blank\">MERQ Consultancy PLC LLC</a>-->
        </footer>
    </div>

    <!-- Include jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <!-- Bootstrap Bundle JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        \$(document).ready(function () {
            \$('#startUpdate').on('click', function () {
                const button = \$(this);
                const progressBar = \$('#progressBar');
                const log = \$('#log');

                // Reset progress bar and log
                progressBar.css('width', '0%').attr('aria-valuenow', 0).text('0%');
                log.html('');  // Clear logs
                button.prop('disabled', true).text('Updating...');

                // Simulate the update process
                \$.ajax({
                    url: '../api/dhis2/apis/update_reporting_rates.php',
                    type: 'GET',
                    xhr: function () {
                        const xhr = new window.XMLHttpRequest();

                        // Update progress and log in real-time
                        xhr.onprogress = function (e) {
                            if (e.lengthComputable) {
                                const progress = Math.floor((e.loaded / e.total) * 100);
                                progressBar.css('width', progress + '%').attr('aria-valuenow', progress).text(progress + '%');
                            }

                            const newLog = e.target.responseText;
                            log.html(newLog);  // Update log div with new log data
                        };

                        return xhr;
                    },
                    success: function (response) {
                        progressBar.css('width', '100%').attr('aria-valuenow', 100).text('100%');
                        button.prop('disabled', false).text('Update Reporting Rates');
                        log.append('<pre>Update completed successfully!</pre>');
                    },
                    error: function (xhr, status, error) {
                        log.append(`<pre>Error: \${error}</pre>`);
                        button.prop('disabled', false).text('Update Reporting Rates');
                    }
                });
            });
        });
    </script>
</body>

</html>
";
		$custom_labels["English"]['__PHP____INCLUDE_DATABASE_CONNECTION_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_DB_CONNECTION_PHP________DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_DHIS2_EIDM_DATA_MANAGEMENT__TITLE_______LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET________STYLE___________CONTAINER___MAX_WIDTH__1200PX__MARGIN__40PX_AUTO_____________DATA_PREVIEW___MAX_HEIGHT__500PX__OVERFLOW_Y__AUTO__MARGIN__20PX_0_____________STATUS_BOX___PADDING__15PX__MARGIN__10PX_0__BORDER_RADIUS__5PX__________STYLE____HEAD___BODY_______DIV_CLASS__CONTAINER____________H2_CLASS__MB_4__DHIS2___EIDM__HC_HOSP_WOR_HP__DATA_MANAGEMENT__H2________________ADD_THIS_AFTER__H2__TAG______UL_CLASS__NAV_NAV_TABS_MB_4________LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK_ACTIVE__HREF___OPERATIONS__DATA_BS_TOGGLE__TAB__OPERATIONS__A________LI_______LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK__HREF___SETTINGS__DATA_BS_TOGGLE__TAB__SETTINGS__A________LI____UL____DIV_CLASS__TAB_CONTENT________DIV_CLASS__TAB_PANE_FADE_SHOW_ACTIVE__ID__OPERATIONS________________EXISTING_OPERATIONS_CONTENT___________DIV_______DIV_CLASS__TAB_PANE_FADE__ID__SETTINGS_____________PHP_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_UI_PHP____________DIV____DIV________________________CONTROL_SECTION______________DIV_CLASS__CARD_MB_4________________DIV_CLASS__CARD_HEADER_BG_PRIMARY_TEXT_WHITE___________________OPERATIONS_______________DIV_______________DIV_CLASS__CARD_BODY____________________BUTTON_ID__UPDATEDATA__CLASS__BTN_BTN_SUCCESS_______________________UPDATE_EIDM_DATA___________________BUTTON___________________DIV_ID__STATUS__CLASS__STATUS_BOX____DIV________________DIV____________DIV________________DATA_PREVIEW_SECTION______________DIV_CLASS__CARD________________DIV_CLASS__CARD_HEADER___________________DATA_PREVIEW__LAST_FETCHED_RESULTS________________DIV_______________DIV_CLASS__CARD_BODY____________________DIV_ID__DATAPREVIEW__CLASS__DATA_PREVIEW____________________________DATA_WILL_BE_LOADED_HERE_______________________DIV________________DIV____________DIV________DIV________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT_______SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT_______SCRIPT________DOCUMENT__READY_FUNCTION_________________UPDATEDATA___CLICK_FUNCTION_________________CONST_BTN_____THIS_______________BTN_PROP__DISABLED___TRUE___________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__FETCHING_DATA_FROM_API_____DIV_____________________FETCH_DATA_FROM_API_______________AJAX___________________URL______API_DHIS2_EIDM_HC_SETTINGS_API_EIDMHC_PHP___________________METHOD___GET___________________DATATYPE___JSON___________________SUCCESS__FUNCTION_APIDATA____________________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__SAVING_DATA_TO_DATABASE_____DIV_________________________________________________SEND_DATA_TO_SAVE_ENDPOINT_______________________AJAX___________________________URL______API_DHIS2_EIDM_HC_SAVE_DATA_PHP___________________________METHOD___POST___________________________CONTENTTYPE___APPLICATION_JSON___________________________DATA__JSON_STRINGIFY_APIDATA___________________________SUCCESS__FUNCTION_RESPONSE________________________________IF_RESPONSE_SUCCESS________________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_SUCCESS___________________________________________SUCCESS____RESPONSE_INSERTED_ROWS__RECORDS_INSERTED_______________________________________DIV______________________________________________________________________LOADDATAPREVIEW__________________________________ELSE_______________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_DANGER___________________________________________ERROR____RESPONSE_ERROR________________________________________DIV_______________________________________________________________________________________________________________________ERROR__FUNCTION_XHR____________________________________STATUS___HTML____________________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________________SAVE_FAILED____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________________DIV_____________________________________________________________________________________COMPLETE________BTN_PROP__DISABLED___FALSE_____________________________________________________________ERROR__FUNCTION_XHR____________________________STATUS___HTML____________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________API_ERROR____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________DIV______________________________________________BTN_PROP__DISABLED___FALSE__________________________________________________________FUNCTION_LOADDATAPREVIEW___________________GET_____API_DHIS2_EIDM_HC_FETCH_DATA_PHP___FUNCTION_DATA____________________CONST_PREVIEW_______DATAPREVIEW____________________PREVIEW_HTML________________________TABLE_CLASS__TABLE_TABLE_STRIPED____________________________THEAD_______________________________TR___________________________________TH_INDICATOR__TH___________________________________TH_ORGANISATION_UNIT__TH___________________________________TH_PERIOD__TH___________________________________TH_VALUE__TH________________________________TR____________________________THEAD___________________________TBODY________________________________DATA_ROWS_MAP_ROW_______________________________________TR_______________________________________TD___ROW_INDICATOR___TD_______________________________________TD___ROW_ORGANISATION_UNIT___TD_______________________________________TD___ROW_PERIOD___TD_______________________________________TD___ROW_VALUE___TD____________________________________TR_________________________________JOIN________________________________TBODY________________________TABLE_____________________________________FAIL_____________________________DATAPREVIEW___HTML___DIV_CLASS__ALERT_ALERT_WARNING__ERROR_LOADING_PREVIEW__DIV___________________________________________LOAD_INITIAL_PREVIEW_________LOADDATAPREVIEW__________________SCRIPT____BODY____HTML_'] = "<?php
// Include database connection
include '../api/dhis2/eidm_hc/settings/db_connection.php';
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DHIS2 EIDM Data Management</title>
    <!--
    <link href=\"../api/styles/flatly_bootstrap.css\" rel=\"stylesheet\">
-->
    <link href=\"./styles/bootstrap/flatly/normal/style.css\" rel=\"stylesheet\">
    
    
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .nav-tabs .nav-link {
            color: #495057;
            font-weight: bold;
        }

        .nav-tabs .nav-link.active {
            background-color: #337ab7;
            color: white;
            border-radius: 5px 5px 0 0;
        }

        .status-box {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
        }

        .card {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #00274ce9;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }

        .btn-custom {
            font-size: 1rem;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }

        .data-preview {
            max-height: 500px;
            overflow-y: auto;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        
        <h2><svg width=\"64px\" height=\"64px\" viewBox=\"0 0 48 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z\" fill=\"#3276c3\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z\" fill=\"#3276c3\"></path> </g></svg>
        DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>
<br>
        <!-- Tabs Section -->
        <ul class=\"nav nav-tabs mb-4\">
                      <!--
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#eidm-operations\" data-bs-toggle=\"tab\">Operations</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#eidm-settings\" data-bs-toggle=\"tab\">Settings</a>
            </li>
    -->
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"eidm-operations\">
                <!-- Existing operations content -->
            </div>
            <div class=\"tab-pane fade\" id=\"eidm-settings\">
                <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
            </div>
        </div>

        <!-- Control Section -->
        <div class=\"card\">
            <div class=\"card-header\">Operations</div>
            <div class=\"card-body\">
                <button id=\"eidm-updateData\" class=\"btn btn-success btn-custom\">
                    Update EIDM Data
                </button>
                <div id=\"eidm-status\" class=\"status-box\"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class=\"card\">
            <div class=\"card-header\">Data Preview (Last Fetched Results)</div>
            <div class=\"card-body\">
                <div id=\"eidm-dataPreview\" class=\"data-preview\">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
    \$(document).ready(function() {
        \$('#eidm-updateData').click(function() {
            const btn = \$(this);
            btn.prop('disabled', true);
            \$('#eidm-status').html('<div class=\"alert alert-info\">Fetching data from API...</div>');

            // Fetch data from API
            \$.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    \$('#eidm-status').html('<div class=\"alert alert-info\">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    \$.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                \$('#eidm-status').html(`
                                    <div class=\"alert alert-success\">
                                        Success! \${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                \$('#eidm-status').html(`
                                    <div class=\"alert alert-danger\">
                                        Error: \${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            \$('#eidm-status').html(`
                                <div class=\"alert alert-danger\">
                                    Save failed: \${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    \$('#eidm-status').html(`
                        <div class=\"alert alert-danger\">
                            API Error: \${xhr.responseJSON?.error || 'Unknown error'}
                        </div>
                    `);
                    btn.prop('disabled', false);
                }
            });
        });

        function loadDataPreview() {
            \$.get('../api/dhis2/eidm_hc/fetch_data.php', function(data) {
                const preview = \$('#eidm-dataPreview');
                preview.html(
                    `<table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Indicator</th>
                                <th>Organisation Unit</th>
                                <th>Period</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            \${data.rows.map(row => `
                                <tr>
                                    <td>\${row.indicator}</td>
                                    <td>\${row.organisation_unit}</td>
                                    <td>\${row.period}</td>
                                    <td>\${row.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>`
                );
            }).fail(() => {
                \$('#eidm-dataPreview').html('<div class=\"alert alert-warning\">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>
";
		$custom_labels["English"]['__PHP____INCLUDE_DATABASE_CONNECTION_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_DB_CONNECTION_PHP________DOCTYPE_HTML___HTML_LANG__EN____HEAD_______META_CHARSET__UTF_8________META_NAME__VIEWPORT__CONTENT__WIDTH_DEVICE_WIDTH__INITIAL_SCALE_1_0________TITLE_DHIS2_EIDM_DATA_MANAGEMENT__TITLE_______LINK_HREF__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_CSS_BOOTSTRAP_MIN_CSS__REL__STYLESHEET________STYLE___________CONTAINER___MAX_WIDTH__1200PX__MARGIN__40PX_AUTO_____________DATA_PREVIEW___MAX_HEIGHT__500PX__OVERFLOW_Y__AUTO__MARGIN__20PX_0_____________STATUS_BOX___PADDING__15PX__MARGIN__10PX_0__BORDER_RADIUS__5PX__________STYLE____HEAD___BODY_______DIV_CLASS__CONTAINER____________H2_CLASS__MB_4__DHIS2___EIDM__HC_HOSP_WOR_HP__DATA_MANAGEMENT__H2________________ADD_THIS_AFTER__H2__TAG______UL_CLASS__NAV_NAV_TABS_MB_4________LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK_ACTIVE__HREF___OPERATIONS__DATA_BS_TOGGLE__TAB__OPERATIONS__A________LI_______LI_CLASS__NAV_ITEM____________A_CLASS__NAV_LINK__HREF___SETTINGS__DATA_BS_TOGGLE__TAB__SETTINGS__A________LI____UL____DIV_CLASS__TAB_CONTENT________DIV_CLASS__TAB_PANE_FADE_SHOW_ACTIVE__ID__OPERATIONS________________EXISTING_OPERATIONS_CONTENT___________DIV_______DIV_CLASS__TAB_PANE_FADE__ID__SETTINGS_____________PHP_INCLUDE_____API_DHIS2_EIDM_HC_SETTINGS_UI_PHP____________DIV____DIV________________________CONTROL_SECTION______________DIV_CLASS__CARD_MB_4________________DIV_CLASS__CARD_HEADER_BG_PRIMARY_TEXT_WHITE___________________OPERATIONS_______________DIV_______________DIV_CLASS__CARD_BODY____________________BUTTON_ID__UPDATEDATA__CLASS__BTN_BTN_SUCCESS_______________________UPDATE_EIDM_DATA___________________BUTTON___________________DIV_ID__STATUS__CLASS__STATUS_BOX____DIV________________DIV____________DIV________________DATA_PREVIEW_SECTION______________DIV_CLASS__CARD________________DIV_CLASS__CARD_HEADER___________________DATA_PREVIEW__LAST_FETCHED_RESULTS________________DIV_______________DIV_CLASS__CARD_BODY____________________DIV_ID__DATAPREVIEW__CLASS__DATA_PREVIEW____________________________DATA_WILL_BE_LOADED_HERE_______________________DIV________________DIV____________DIV________DIV________SCRIPT_SRC__HTTPS___CODE_JQUERY_COM_JQUERY_3_6_0_MIN_JS____SCRIPT_______SCRIPT_SRC__HTTPS___CDN_JSDELIVR_NET_NPM_BOOTSTRAP_5_1_3_DIST_JS_BOOTSTRAP_BUNDLE_MIN_JS____SCRIPT_______SCRIPT________DOCUMENT__READY_FUNCTION_________________UPDATEDATA___CLICK_FUNCTION_________________CONST_BTN_____THIS_______________BTN_PROP__DISABLED___TRUE___________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__FETCHING_DATA_FROM_API_____DIV_____________________FETCH_DATA_FROM_API_______________AJAX___________________URL______API_DHIS2_EIDM_HC_SETTINGS_API_EIDMHC_PHP___________________METHOD___GET___________________DATATYPE___JSON___________________SUCCESS__FUNCTION_APIDATA____________________________STATUS___HTML___DIV_CLASS__ALERT_ALERT_INFO__SAVING_DATA_TO_DATABASE_____DIV_________________________________________________SEND_DATA_TO_SAVE_ENDPOINT_______________________AJAX___________________________URL______API_DHIS2_EIDM_HC_SAVE_DATA_PHP___________________________METHOD___POST___________________________CONTENTTYPE___APPLICATION_JSON___________________________DATA__JSON_STRINGIFY_APIDATA___________________________SUCCESS__FUNCTION_RESPONSE________________________________IF_RESPONSE_SUCCESS________________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_SUCCESS___________________________________________SUCCESS____RESPONSE_INSERTED_ROWS__RECORDS_INSERTED_______________________________________DIV______________________________________________________________________LOADDATAPREVIEW__________________________________ELSE_______________________________________STATUS___HTML________________________________________DIV_CLASS__ALERT_ALERT_DANGER___________________________________________ERROR____RESPONSE_ERROR________________________________________DIV_______________________________________________________________________________________________________________________ERROR__FUNCTION_XHR____________________________________STATUS___HTML____________________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________________SAVE_FAILED____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________________DIV_____________________________________________________________________________________COMPLETE________BTN_PROP__DISABLED___FALSE_____________________________________________________________ERROR__FUNCTION_XHR____________________________STATUS___HTML____________________________DIV_CLASS__ALERT_ALERT_DANGER_______________________________API_ERROR____XHR_RESPONSEJSON__ERROR_____UNKNOWN_ERROR_____________________________DIV______________________________________________BTN_PROP__DISABLED___FALSE__________________________________________________________FUNCTION_LOADDATAPREVIEW___________________GET_____API_DHIS2_EIDM_HC_FETCH_DATA_PHP___FUNCTION_DATA____________________CONST_PREVIEW_______DATAPREVIEW____________________PREVIEW_HTML________________________TABLE_CLASS__TABLE_TABLE_STRIPED____________________________THEAD_______________________________TR___________________________________TH_INDICATOR__TH___________________________________TH_ORGANISATION_UNIT__TH___________________________________TH_PERIOD__TH___________________________________TH_VALUE__TH________________________________TR____________________________THEAD___________________________TBODY________________________________DATA_ROWS_MAP_ROW_______________________________________TR_______________________________________TD___ROW_INDICATOR___TD_______________________________________TD___ROW_ORGANISATION_UNIT___TD_______________________________________TD___ROW_PERIOD___TD_______________________________________TD___ROW_VALUE___TD____________________________________TR_________________________________JOIN________________________________TBODY________________________TABLE_____________________________________FAIL_____________________________DATAPREVIEW___HTML___DIV_CLASS__ALERT_ALERT_WARNING__ERROR_LOADING_PREVIEW__DIV___________________________________________LOAD_INITIAL_PREVIEW_________LOADDATAPREVIEW__________________SCRIPT____BODY____HTML_1'] = "<?php
// Include database connection
include '../api/dhis2/eidm_hc/settings/db_connection.php';
?>
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DHIS2 EIDM Data Management</title>
    <!--
    <link href=\"../api/styles/flatly_bootstrap.css\" rel=\"stylesheet\">
-->
    <link href=\"./styles/bootstrap/flatly/normal/style.css\" rel=\"stylesheet\">
    
    
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .nav-tabs .nav-link {
            color: #495057;
            font-weight: bold;
        }

        .nav-tabs .nav-link.active {
            background-color: #337ab7;
            color: white;
            border-radius: 5px 5px 0 0;
        }

        .status-box {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            background: #f8f9fa;
            border-left: 4px solid #007bff;
        }

        .card {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #00274ce9;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }

        .btn-custom {
            font-size: 1rem;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }

        .data-preview {
            max-height: 500px;
            overflow-y: auto;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        
        <h2><svg width=\"64px\" height=\"64px\" viewBox=\"0 0 48 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.05655 23.9708L6.86383 24.7067C5.64458 25.4589 5.58843 27.2115 6.75703 28.0402L22.8484 39.4515C23.5388 39.9411 24.4626 39.9431 25.1551 39.4565L41.3962 28.0456C42.5744 27.2178 42.5181 25.4536 41.2895 24.7026L39.8479 23.8215L38.0784 25.0839L40.2464 26.4091L24.0054 37.8201L7.91396 26.4088L9.84309 25.2186L8.05655 23.9708ZM33.4418 22.2498L24.0049 16.4814L14.4796 22.3581L12.693 21.1103L22.9547 14.7793C23.596 14.3837 24.4051 14.382 25.0479 14.775L35.2113 20.9873L33.4418 22.2498Z\" fill=\"#3276c3\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.0048 9.48139L7.91391 19.4087L24.0053 30.82L40.2464 19.4091L24.0048 9.48139ZM6.86378 17.7066C5.64453 18.4588 5.58838 20.2114 6.75698 21.0401L22.8484 32.4514C23.5388 32.941 24.4626 32.943 25.1551 32.4565L41.3961 21.0455C42.5744 20.2177 42.518 18.4536 41.2894 17.7026L25.0479 7.77494C24.4051 7.38199 23.5959 7.38367 22.9547 7.77927L6.86378 17.7066Z\" fill=\"#3276c3\"></path> </g></svg>
        DHIS2 - EIDM [HC|HOSP|WOR|HP] Data Management</h2>
<br>
        <!-- Tabs Section -->
        <ul class=\"nav nav-tabs mb-4\">
                      <!--
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#eidm-operations\" data-bs-toggle=\"tab\">Operations</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#eidm-settings\" data-bs-toggle=\"tab\">Settings</a>
            </li>
    -->
        </ul>

        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"eidm-operations\">
                <!-- Existing operations content -->
            </div>
            <div class=\"tab-pane fade\" id=\"eidm-settings\">
                <?php include '../api/dhis2/eidm_hc/settings_ui.php'; ?>
            </div>
        </div>

        <!-- Control Section -->
        <div class=\"card\">
            <div class=\"card-header\">Operations</div>
            <div class=\"card-body\">
                <button id=\"eidm-updateData\" class=\"btn btn-success btn-custom\">
                    Update EIDM Data
                </button>
                <div id=\"eidm-status\" class=\"status-box\"></div>
            </div>
        </div>

        <!-- Data Preview Section -->
        <div class=\"card\">
            <div class=\"card-header\">Data Preview (Last Fetched Results)</div>
            <div class=\"card-body\">
                <div id=\"eidm-dataPreview\" class=\"data-preview\">
                    <!-- Data will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
    \$(document).ready(function() {
        \$('#eidm-updateData').click(function() {
            const btn = \$(this);
            btn.prop('disabled', true);
            \$('#eidm-status').html('<div class=\"alert alert-info\">Fetching data from API...</div>');

            // Fetch data from API
            \$.ajax({
                url: '../api/dhis2/eidm_hc/settings/api_eidmhc.php',
                method: 'GET',
                dataType: 'json',
                success: function(apiData) {
                    \$('#eidm-status').html('<div class=\"alert alert-info\">Saving data to database...</div>');
                    
                    // Send data to save endpoint
                    \$.ajax({
                        url: '../api/dhis2/eidm_hc/save_data.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(apiData),
                        success: function(response) {
                            if(response.success) {
                                \$('#eidm-status').html(`
                                    <div class=\"alert alert-success\">
                                        Success! \${response.inserted_rows} records inserted
                                    </div>
                                `);
                                loadDataPreview();
                            } else {
                                \$('#eidm-status').html(`
                                    <div class=\"alert alert-danger\">
                                        Error: \${response.error}
                                    </div>
                                `);
                            }
                        },
                        error: function(xhr) {
                            \$('#eidm-status').html(`
                                <div class=\"alert alert-danger\">
                                    Save failed: \${xhr.responseJSON?.error || 'Unknown error'}
                                </div>
                            `);
                        },
                        complete: () => btn.prop('disabled', false)
                    });
                },
                error: function(xhr) {
                    \$('#eidm-status').html(`
                        <div class=\"alert alert-danger\">
                            API Error: \${xhr.responseJSON?.error || 'Unknown error'}
                        </div>
                    `);
                    btn.prop('disabled', false);
                }
            });
        });

        function loadDataPreview() {
            \$.get('../api/dhis2/eidm_hc/fetch_data.php', function(data) {
                const preview = \$('#eidm-dataPreview');
                preview.html(
                    `<table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Indicator</th>
                                <th>Organisation Unit</th>
                                <th>Period</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            \${data.rows.map(row => `
                                <tr>
                                    <td>\${row.indicator}</td>
                                    <td>\${row.organisation_unit}</td>
                                    <td>\${row.period}</td>
                                    <td>\${row.value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>`
                );
            }).fail(() => {
                \$('#eidm-dataPreview').html('<div class=\"alert alert-warning\">Error loading preview</div>');
            });
        }

        // Load initial preview
        loadDataPreview();
    });
    </script>
</body>
</html>
";

define('GLOBAL_PAGES_SHORT', ".global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_REMIND_SUCCESS',"remind_success");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");
define('PAGE_USERINFO',"userinfo");
define('PAGE_SESSION_EXPIRED',"session_expired");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);
define("LOGIN_AD",2);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);
define("nDATABASE_REST", 19 );

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("CHANGEPASS_SIMPLE", 0);
define("CHANGEPASS_POPUP", 1);

define("USERINFO_SIMPLE", 0 );
define("USERINFO_2FACTOR", 1 );

define("SESSION_EXPIRED_SIMPLE", 0 );
define("SESSION_EXPIRED_POPUP", 1 );

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);
define("titSQL",6);
define("titREST",7);
define("titSQL_REPORT",8);
define("titSQL_CHART",9);
define("titREST_REPORT",10);
define("titREST_CHART",11);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);
define("HERE_MAPS", 3);
define("MAPQUEST_MAPS", 4);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);
define('ICON_FONT_AWESOME', 3);


define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 0 );
define('RPM_RESET', 1 );

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)
define('CONTEXT_COMMAND', 5);	// 	DsCommand context
define('CONTEXT_SEARCH', 6);	// 	Search object context
define('CONTEXT_MASTER', 7);	// 	Master-details context

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);

define('WEBREPORTS_TABLE', "{04AFFBE6-86C0-47b0-ADD3-BA7FA19CA6FC}" );

define('REST_BASIC', 1);
define('REST_APIKEY', 2);
define('REST_JWT', 3);
define('REST_OAUTH', 4);

define("TIME_FORMAT_TIME_OF_DAY", 0);
define("TIME_FORMAT_DURATION", 1);

// user session levels
define("LOGGED_NONE", 0 );
//	logged in
define("LOGGED_FULL", 1 );
//	user has entered username & password, has to do 2factor authentication
define("LOGGED_2F_PENDING", 2 );
//	user has logged in, must setup 2factor authentication
define("LOGGED_2FSETUP_PENDING", 3 );
//	user has logged in, acount not activated, must confirm email address
define("LOGGED_ACTIVATION_PENDING", 4 );


define("stNONE", '%none' );
define("stHARDCODED", '%hardcoded' );
define("stDB", '%db' );
define("stAD", '%ad' );
define("stGOOGLE", '%google' );
define("stOPENID", '%openid' );
define("stFACEBOOK", '%facebook' );
define("stAZURE", '%azure' );
define("stSAML", '%saml' );
define("stOKTA", '%okta' );

//	storage providers
define("stpDISK", 0 );
define("stpAMAZON", 1 );
define("stpGOOGLEDRIVE", 2 );
define("stpONEDRIVE", 3 );
define("stpDROPBOX", 4 );

define( "spidGOOGLEDRIVE", "_PHPRunnerGoogleDriveConnection" );
define( "spidAMAZON", "_PHPRunnerAmazonS3Connection" );
define( "spidONEDRIVE", "_PHPRunnerOneDriveConnection" );
define( "spidDROPBOX", "_PHPRunnerDropboxConnection" );


$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$twilioSID = "";
$twilioAuth = "";
$twilioNumber = "";

// Update edit format for date text fields
$editTextAsDate = false;


/**
 * An option to be added to the wizard
 * Controls 'Remeber me' option
 */
$globalSettings["keepLoggedIn"] = true;

$globalSettings["bEncryptPasswords"] = true;
$globalSettings["nEncryptPasswordMethod"] = "0";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = true;

$globalSettings["strSMTPUser"] = "hispmd@cloud.merqconsultancy.org";
$globalSettings["strSMTPServer"] = "cloud.merqconsultancy.org";
$globalSettings["strSMTPPort"] = "587";
$globalSettings["strSMTPPassword"] = "hispmd@cloud";
$globalSettings["strFromEmail"] = "hispmd@cloud.merqconsultancy.org";

//

/*
$globalSettings["ADDomain"] = "";
$globalSettings["ADServer"] = "";
$globalSettings["ADFollowRefs"] = ;
$globalSettings["ADBaseDN"] = "";
if( !$globalSettings["ADBaseDN"] ) {
	$globalSettings["ADBaseDN"] = ldap_Domain2DN( $globalSettings["ADDomain"] );
}

$globalSettings["customLDAP"] = false;
*/
$customLDAPSettings = array(); //#9409

//	if user is member of group A, and group A is a memeber of group B,
//	count the user as member of group B
$adNestedPermissions = false;

$ajaxSearchStartsWith = true;



$globalSettings["LandingPageType"] = 2;
$globalSettings["LandingTable"] = "HISPMD_MOH_Indicators_Dashboard";
$globalSettings["LandingPage"] = "dashboard";
$globalSettings["LandingURL"] = "hispmd_moh_indicators_dashboard_dashboard.php?page=hispmd_dashboard&menuItemId=1";
$globalSettings["LandingPageId"] = "hispmd_dashboard";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Amharic"] = "<p><img src=\"moh_black.png\" alt=\"Health Information System Performance Monitoring Dashboard (HISPMD)\" width=\"147\" height=\"47\" class=\"mCS_img_loaded\" /></p>";
$globalSettings["ProjectLogo"]["English"] = "<p><img src=\"moh_black.png\" alt=\"Health Information System Performance Monitoring Dashboard (HISPMD)\" width=\"147\" height=\"47\" class=\"mCS_img_loaded\" /></p>";

$globalSettings["CookieBanner"] = array();
$globalSettings["CookieBanner"]["Amharic"] = "በእኛ የድር መተግበሪያ ላይ የእርስዎን የአሰሳ ተሞክሮ ለማሻሻል እና የጣቢያ ትራፊክን ለመተንተን ኩኪዎችን እና ሌሎች የመከታተያ ቴክኖሎጂዎችን እንጠቀማለን። 
እሺን/OK ጠቅ በማድረግ ኩኪዎችን እና ሌሎች የመከታተያ ቴክኖሎጂዎችን እንድንጠቀም ተስማምተሃል።
";
$globalSettings["CookieBanner"]["English"] = "We use cookies and other tracking technologies to improve your browsing experience on our web application, and analyze site traffic.
By clicking OK, you consent to our use of cookies and other tracking technologies.";

$globalSettings["useCookieBanner"] = 1 != 0;

$globalSettings["htmlEmailTemplates"] = array();
$globalSettings["htmlEmailTemplates"]["English"] = array();
$globalSettings["htmlEmailTemplates"]["English"]["twofactoremail"] = true;

$globalSettings["isAddWebRep"] = true;

$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 1;

$globalSettings["isSection508"] = true;

$globalSettings["apiGoogleMapsCode"] = "";

$globalSettings["useEmbedMapsAPI"] = 1 != 0;

//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;
$globalSettings["pwdUnique"] = 4;
$globalSettings["pwdDigits"] = 2;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();


$globalSettings["mapProvider"]=1;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 1;
$globalSettings["CaptchaSettings"]["siteKey"] = "6LeRAbcpAAAAAPy9LHXavzB-h0Ve7HSt7VY8R6EV";
$globalSettings["CaptchaSettings"]["secretKey"] = "6LeRAbcpAAAAAJFYeJQ-QO6BGTJvZpOiNgvxDdhH";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";





$bsProjectTheme = "flatly";
$bsProjectSize = "normal";

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$WRAdminPagePassword = "webreports";


/**
 * Legacy variables for pre-10.6 business templates only.
 * DEPRECATED
 */
$cLoginTable = "public.hispmdusers";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "";
$cEmailField = "email";
$cUserpicField = "userpic";
$loginKeyFields= array();
$loginKeyFields[] = "ID";

//	legacy use only
$cKeyFields = $loginKeyFields;

/**
 * End Legacy csection
 */


$globalSettings["usersDatasourceTable"] = "public.hispmdusers";

$globalSettings["userRequireActivation"] = true;
$globalSettings["userActivationField"] = "active";

$globalSettings["jwtSecret"] = "DBF7djMrYUhUrssFTEB2";


$arrCustomPages = array();


$gPermissionsRefreshTime = 5;
$gPermissionsRead = false;

//	-1 - undetermined, 0 - nah, 1 - yep
$gGuestHasPermissions = -1;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "774_1741699667";
$wizardBuildKey = "39558";
$projectBuildNumber = "774";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";
$projectMenus[] = "secondary";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;


$menuTreelikeFlags["secondary"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"]["MFR_Dashboard_Report"] = "MFR Dashboard Report";
$tableCaptions["English"]["MFR_Status_Report"] = "MFR Status Report";
$tableCaptions["English"]["MFR_Facilities"] = "MFR Facilities";
$tableCaptions["English"]["MFR_Region_Report"] = "MFR Region Report";
$tableCaptions["English"]["MFR_Zone_Report"] = "MFR Zone Report";
$tableCaptions["English"]["MFR_Woreda_Report"] = "MFR Woreda Report";
$tableCaptions["English"]["DHIS2_Indicators"] = "DHIS2 Indicators";
$tableCaptions["English"]["DHIS2_Organisation_Units"] = "DHIS2 Organisation Units";
$tableCaptions["English"]["DHIS2_Analytics"] = "DHIS2 Analytics";
$tableCaptions["English"]["DHIS2_Indicator"] = "DHIS2 Indicator";
$tableCaptions["English"]["DHIS2_Organisation_Unit"] = "DHIS2 Organisation Unit";
$tableCaptions["English"]["DHIS2_Analytics_Chart"] = "DHIS2 Analytics Chart";
$tableCaptions["English"]["DHIS2_Analytics_Report"] = "DHIS2 Analytics Report";
$tableCaptions["English"]["DHIS2_Reports"] = "DHIS2 Reports";
$tableCaptions["English"]["DHIS2_Datasets"] = "DHIS2 Datasets";
$tableCaptions["English"]["DHIS2_Reporting_Rate"] = "DHIS2 Reporting Rate";
$tableCaptions["English"]["DHIS2_Reporting_Rate_Chart"] = "DHIS2 Reporting Rate Chart";
$tableCaptions["English"]["DHIS2_Reporting_Rate_Report"] = "DHIS2 Reporting Rate Report";
$tableCaptions["English"]["DHIS2_Reporting_Rates_Chart"] = "DHIS2 Reporting Rates Chart";
$tableCaptions["English"]["MFR_Facility"] = "MFR Facility";
$tableCaptions["English"]["MFR_Regions"] = "MFR Regions";
$tableCaptions["English"]["MFR_Zones"] = "MFR Zones";
$tableCaptions["English"]["MFR_Woredas"] = "MFR Woredas";
$tableCaptions["English"]["MFR_Facility_Types"] = "MFR Facility Types";
$tableCaptions["English"]["MFR_Operational_Statuses"] = "MFR Operational Statuses";
$tableCaptions["English"]["MFR_Status"] = "MFR Status";
$tableCaptions["English"]["DHIS2_OrgUnit_Country"] = "DHIS2 OrgUnit Country";
$tableCaptions["English"]["DHIS2_OrgUnit_Regions"] = "DHIS2 OrgUnit Regions";
$tableCaptions["English"]["DHIS2_OrgUnit_Zone"] = "DHIS2 OrgUnit Zone";
$tableCaptions["English"]["DHIS2_OrgUnit_Woredas"] = "DHIS2 OrgUnit Woredas";
$tableCaptions["English"]["DHIS2_OrgUnit_Groups"] = "DHIS2 OrgUnit Groups";
$tableCaptions["English"]["DHIS2_OrgUnit_Group_Sets"] = "DHIS2 OrgUnit Group Sets";
$tableCaptions["English"]["DHIS2_AIO_OrgUnit"] = "DHIS2 AIO OrgUnit";
$tableCaptions["English"]["DHIS2_OrgUnit_Distributions"] = "DHIS2 OrgUnit Distributions";
$tableCaptions["English"]["public_ai_data_assistant"] = "Ai Data Assistant";
$tableCaptions["English"]["public_dataquality"] = "Dataquality";
$tableCaptions["English"]["public_datause"] = "Datause";
$tableCaptions["English"]["public_dhis2_periods"] = "DHIS2 Periods";
$tableCaptions["English"]["public_digitalhealth"] = "Digitalhealth";
$tableCaptions["English"]["public_digitalhealthapps"] = "Digitalhealthapps";
$tableCaptions["English"]["public_financialresources"] = "Financialresources";
$tableCaptions["English"]["public_healthfacilities"] = "Healthfacilities";
$tableCaptions["English"]["public_healthunits"] = "Healthunits";
$tableCaptions["English"]["public_hisgovernance"] = "Hisgovernance";
$tableCaptions["English"]["public_hispartners"] = "Hispartners";
$tableCaptions["English"]["public_mfr_dashboard_reports"] = "Mfr Dashboard Reports";
$tableCaptions["English"]["public_mfr_operational_status"] = "Mfr Operational Status";
$tableCaptions["English"]["public_mfr_region"] = "Mfr Region";
$tableCaptions["English"]["public_mfr_woreda"] = "Mfr Woreda";
$tableCaptions["English"]["public_mfr_zone"] = "Mfr Zone";
$tableCaptions["English"]["public_publications"] = "Publications";
$tableCaptions["English"]["public_regions"] = "Regions";
$tableCaptions["English"]["public_research"] = "Research";
$tableCaptions["English"]["public_workforce"] = "Workforce";
$tableCaptions["English"]["MFR_AIO_Dashboard"] = "MFR AIO Dashboard";
$tableCaptions["English"]["public_hispmdusers"] = "Hispmdusers";
$tableCaptions["English"]["mfr_dashboard_reports_chart"] = "Mfr Dashboard Reports Chart";
$tableCaptions["English"]["mfr_operational_status_chart"] = "Mfr Operational Status Chart";
$tableCaptions["English"]["mfr_region_chart"] = "Mfr Region Chart";
$tableCaptions["English"]["public_ethprism_additional_organizational_and_behavioral_assessment"] = "Ethprism Additional Organizational And Behavioral Assessment";
$tableCaptions["English"]["public_ethprism_facility_level_rhis_performance_diagnostic"] = "Ethprism Facility Level Rhis Performance Diagnostic";
$tableCaptions["English"]["public_ethprism_facility_office_checklist"] = "Ethprism Facility Office Checklist";
$tableCaptions["English"]["public_ethprism_healthpost_level_rhis_performance_diagnostic"] = "Ethprism Healthpost Level Rhis Performance Diagnostic";
$tableCaptions["English"]["public_ethprism_national_prism_woreda_level_diagnostic"] = "Ethprism National Prism Woreda Level Diagnostic";
$tableCaptions["English"]["public_ethprism_organizational_and_behavioral_assessment"] = "Ethprism Organizational And Behavioral Assessment";
$tableCaptions["English"]["public_hispmd_prism_settings"] = "Hispmd Prism Settings";
$tableCaptions["English"]["PRISM_Dashboard"] = "PRISM Dashboard";
$tableCaptions["English"]["hispmd_users_audit"] = "Hispmd Users Audit";
$tableCaptions["English"]["hispmd_system_settings"] = "Hispmd System Settings";
$tableCaptions["English"]["hispmd_prism_data_forms"] = "Hispmd Prism Data Forms";
$tableCaptions["English"]["public_moh_administration_units"] = "Moh Administration Units";
$tableCaptions["English"]["public_moh_assessments"] = "Moh Assessments";
$tableCaptions["English"]["public_moh_data_sources"] = "Moh Data Sources";
$tableCaptions["English"]["public_moh_facility_types"] = "Moh Facility Types";
$tableCaptions["English"]["public_moh_health_facilities"] = "Moh Health Facilities";
$tableCaptions["English"]["public_moh_indicator_data"] = "Moh Indicator Data";
$tableCaptions["English"]["public_moh_indicators"] = "Moh Indicators";
$tableCaptions["English"]["public_moh_regions"] = "Moh Regions";
$tableCaptions["English"]["public_moh_indicator_groups"] = "Moh Indicator Groups";
$tableCaptions["English"]["public_timetracker"] = "Timetracker";
$tableCaptions["English"]["public_mfr_facilities_register"] = "Mfr Facilities Register";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Admin Users";
$tableCaptions["English"]["System_Users_Activity_Dashboard"] = "System Users Activity Dashboard";
$tableCaptions["English"]["public_mfr_facilities_register_report"] = "Mfr Facilities Register Report";
$tableCaptions["English"]["public_hispmd_organisations"] = "Hispmd Organisations";
$tableCaptions["English"]["public_hispmd_uggroups"] = "Hispmd Uggroups";
$tableCaptions["English"]["public_mfr_facilities_register_chart"] = "Mfr Facilities Register Chart";
$tableCaptions["English"]["public_moh_data_scope"] = "Moh Data Scope";
$tableCaptions["English"]["MOH_Indicators_Data_Report"] = "MOH Indicators Data Report";
$tableCaptions["English"]["MOH_Indicators_data_Chart"] = "MOH Indicators Data Chart";
$tableCaptions["English"]["DHIS2_OrgUnits_Distribution"] = "DHIS2 OrgUnits Distribution";
$tableCaptions["English"]["public_chat_history"] = "Chat History";
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["kbarticles"] = "Articles";
$tableCaptions["English"]["kbcategories"] = "Categories";
$tableCaptions["English"]["kbcomments"] = "Comments";
$tableCaptions["English"]["kbusers"] = "Users";
$tableCaptions["English"]["main"] = "";
$tableCaptions["English"]["faicons"] = "Faicons";
$tableCaptions["English"]["admin_comments"] = "Admin Comments";
$tableCaptions["English"]["public_hispmd_noti_view"] = "Hispmd Noti View";
$tableCaptions["English"]["public_faicons"] = "Faicons";
$tableCaptions["English"]["MoH_Indicators_Data_Values_Chart"] = "MoH Indicators Data Values Chart";
$tableCaptions["English"]["Indicators_Dashboard"] = "Indicators Dashboard";
$tableCaptions["English"]["hispmd_indicators_data"] = "Hispmd Indicators Data";
$tableCaptions["English"]["public_moh_ir_datasource"] = "Moh Ir Datasource";
$tableCaptions["English"]["public_moh_years"] = "Moh Years";
$tableCaptions["English"]["public_moh_months"] = "Moh Months";
$tableCaptions["English"]["public_moh_quarters"] = "Moh Quarters";
$tableCaptions["English"]["public_moh_period_types"] = "Moh Period Types";
$tableCaptions["English"]["DHIS2_Reporting_Rate_Details"] = "DHIS2 Reporting Rate Details";
$tableCaptions["English"]["DHIS2_Reporting_Rate_Details_Chart"] = "DHIS2 Reporting Rate Details Chart";
$tableCaptions["English"]["DHIS2_ReportingRate"] = "DHIS2 ReportingRate";
$tableCaptions["English"]["DHIS2_Reports_DataSet"] = "DHIS2 Reports DataSet";
$tableCaptions["English"]["DHIS2_ReportingRate_Chart"] = "DHIS2 ReportingRate Chart";
$tableCaptions["English"]["DHIS2_ReportingRates"] = "DHIS2 ReportingRates";
$tableCaptions["English"]["DHIS2_AnalyticsReport"] = "DHIS2 AnalyticsReport";
$tableCaptions["English"]["public_moh_indicators_target"] = "Moh Indicators Target";
$tableCaptions["English"]["public_dhis2_reporting_rates"] = "Dhis2 Reporting Rates";
$tableCaptions["English"]["public_dhis2_reportingrate_settings"] = "Dhis2 Reportingrate Settings";
$tableCaptions["English"]["DHIS2_Reporting_Rates_Report"] = "DHIS2 Reporting Rates Report";
$tableCaptions["English"]["DHIS2_EIDM_HC"] = "DHIS2 EIDM HC";
$tableCaptions["English"]["public_eidm_hc"] = "Eidm Hc";
$tableCaptions["English"]["public_eidm_settings"] = "Eidm Settings";
$tableCaptions["English"]["DHIS2_Data_Elements"] = "DHIS2 Data Elements";
$tableCaptions["English"]["HISPMD_Web_Reports_and_Charts_Builder"] = "HISPMD Web Reports And Charts Builder";
$tableCaptions["English"]["HISPMD_MOH_Indicators_Dashboard"] = "HISPMD MOH Indicators Dashboard";
$tableCaptions["Amharic"] = array();
$tableCaptions["Amharic"]["MFR_Dashboard_Report"] = "የMFR ዳሽቦርድ ሪፖርት";
$tableCaptions["Amharic"]["MFR_Status_Report"] = "MFR ሁኔታ ሪፖርት";
$tableCaptions["Amharic"]["MFR_Facilities"] = "MFR መገልገያዎች";
$tableCaptions["Amharic"]["MFR_Region_Report"] = "MFR ክልል ሪፖርት";
$tableCaptions["Amharic"]["MFR_Zone_Report"] = "MFR ዞን ሪፖርት";
$tableCaptions["Amharic"]["MFR_Woreda_Report"] = "MFR ወረዳ ሪፖርት";
$tableCaptions["Amharic"]["DHIS2_Indicators"] = "የ DHIS2 አመላካቾች";
$tableCaptions["Amharic"]["DHIS2_Organisation_Units"] = "DHIS2 ድርጅት ክፍሎች";
$tableCaptions["Amharic"]["DHIS2_Analytics"] = "DHIS2 ትንታኔ";
$tableCaptions["Amharic"]["DHIS2_Indicator"] = "የ DHIS2 አመልካች";
$tableCaptions["Amharic"]["DHIS2_Organisation_Unit"] = "DHIS2 ድርጅት ክፍል";
$tableCaptions["Amharic"]["DHIS2_Analytics_Chart"] = "DHIS2 ትንታኔ ገበታ";
$tableCaptions["Amharic"]["DHIS2_Analytics_Report"] = "DHIS2 ትንታኔ ሪፖርት";
$tableCaptions["Amharic"]["DHIS2_Reports"] = "DHIS2 ሪፖርቶች";
$tableCaptions["Amharic"]["DHIS2_Datasets"] = "DHIS2 የውሂብ ስብስቦች";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rate"] = "DHIS2 ሪፖርት የማድረግ መጠን";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rate_Chart"] = "DHIS2 የሪፖርት ደረጃ ገበታ";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rate_Report"] = "DHIS2 የሪፖርት ደረጃ ሪፖርት";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rates_Chart"] = "DHIS2 ሪፖርት ማድረጊያ ተመኖች ገበታ";
$tableCaptions["Amharic"]["MFR_AIO_Dashboard"] = "MFR AIO ዳሽቦርድ";
$tableCaptions["Amharic"]["MFR_Facility"] = "MFR ተቋም";
$tableCaptions["Amharic"]["MFR_Regions"] = "MFR ክልሎች";
$tableCaptions["Amharic"]["MFR_Zones"] = "MFR ዞኖች";
$tableCaptions["Amharic"]["MFR_Woredas"] = "MFR ወረዳዎች";
$tableCaptions["Amharic"]["MFR_Facility_Types"] = "የ MFR መገልገያ ዓይነቶች";
$tableCaptions["Amharic"]["MFR_Operational_Statuses"] = "MFR የአሠራር ሁኔታዎች";
$tableCaptions["Amharic"]["MFR_Status"] = "MFR ሁኔታ";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Country"] = "DHIS2 OrgUnit አገር";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Regions"] = "DHIS2 OrgUnit ክልሎች";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Zone"] = "DHIS2 OrgUnit ዞን";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Woredas"] = "DHIS2 OrgUnit ወረዳዎች";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Groups"] = "DHIS2 OrgUnit ቡድኖች";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Group_Sets"] = "DHIS2 OrgUnit ቡድን ስብስቦች";
$tableCaptions["Amharic"]["DHIS2_AIO_OrgUnit"] = "DHIS2 AIO OrgUnit";
$tableCaptions["Amharic"]["DHIS2_OrgUnit_Distributions"] = "DHIS2 OrgUnit ስርጭቶች";
$tableCaptions["Amharic"]["public_ai_data_assistant"] = "Ai የውሂብ ረዳት";
$tableCaptions["Amharic"]["public_dataquality"] = "የውሂብ ጥራት";
$tableCaptions["Amharic"]["public_datause"] = "የውሂብ አጠቃቀም";
$tableCaptions["Amharic"]["public_dhis2_periods"] = "DHIS2 ወቅቶች";
$tableCaptions["Amharic"]["public_digitalhealth"] = "ዲጂታል ጤና";
$tableCaptions["Amharic"]["public_digitalhealthapps"] = "Digitalhealthapps";
$tableCaptions["Amharic"]["public_financialresources"] = "የፋይናንስ ምንጮች";
$tableCaptions["Amharic"]["public_healthfacilities"] = "የጤና ተቋማት";
$tableCaptions["Amharic"]["public_healthunits"] = "የጤና ክፍሎች";
$tableCaptions["Amharic"]["public_hisgovernance"] = "የሱ አስተዳደር";
$tableCaptions["Amharic"]["public_hispartners"] = "የትዳር አጋሮች";
$tableCaptions["Amharic"]["public_mfr_dashboard_reports"] = "Mfr ዳሽቦርድ ሪፖርቶች";
$tableCaptions["Amharic"]["public_mfr_operational_status"] = "Mfr የስራ ሁኔታ";
$tableCaptions["Amharic"]["public_mfr_region"] = "Mfr ክልል";
$tableCaptions["Amharic"]["public_mfr_woreda"] = "ምፍር ወረዳ";
$tableCaptions["Amharic"]["public_mfr_zone"] = "Mfr ዞን";
$tableCaptions["Amharic"]["public_publications"] = "ህትመቶች";
$tableCaptions["Amharic"]["public_regions"] = "ክልሎች";
$tableCaptions["Amharic"]["public_research"] = "ምርምር";
$tableCaptions["Amharic"]["public_workforce"] = "የሰው ኃይል";
$tableCaptions["Amharic"]["public_hispmdusers"] = "Hispmduserer";
$tableCaptions["Amharic"]["mfr_dashboard_reports_chart"] = "Mfr ዳሽቦርድ ሪፖርቶች ገበታ";
$tableCaptions["Amharic"]["mfr_operational_status_chart"] = "Mfr የስራ ሁኔታ ገበታ";
$tableCaptions["Amharic"]["mfr_region_chart"] = "Mfr ክልል ገበታ";
$tableCaptions["Amharic"]["public_ethprism_additional_organizational_and_behavioral_assessment"] = "Ethprism Additional Organizational And Behavioral Assessment";
$tableCaptions["Amharic"]["public_ethprism_facility_level_rhis_performance_diagnostic"] = "Ethprism Facility Level Rhis Performance Diagnostic";
$tableCaptions["Amharic"]["public_ethprism_facility_office_checklist"] = "Ethprism Facility Office Checklist";
$tableCaptions["Amharic"]["public_ethprism_healthpost_level_rhis_performance_diagnostic"] = "Ethprism Healthpost Level Rhis Performance Diagnostic";
$tableCaptions["Amharic"]["public_ethprism_national_prism_woreda_level_diagnostic"] = "Ethprism National Prism Woreda Level Diagnostic";
$tableCaptions["Amharic"]["public_ethprism_organizational_and_behavioral_assessment"] = "Ethprism Organizational And Behavioral Assessment";
$tableCaptions["Amharic"]["public_hispmd_prism_settings"] = "Hispmd Prism Settings";
$tableCaptions["Amharic"]["PRISM_Dashboard"] = "PRISM Dashboard";
$tableCaptions["Amharic"]["hispmd_users_audit"] = "Hispmd Users Audit";
$tableCaptions["Amharic"]["hispmd_system_settings"] = "Hispmd System Settings";
$tableCaptions["Amharic"]["hispmd_prism_data_forms"] = "Hispmd Prism Data Forms";
$tableCaptions["Amharic"]["public_moh_administration_units"] = "MOH አስተዳደር ክፍሎች";
$tableCaptions["Amharic"]["public_moh_assessments"] = "Moh ግምገማዎች";
$tableCaptions["Amharic"]["public_moh_data_sources"] = "Moh የውሂብ ምንጮች";
$tableCaptions["Amharic"]["public_moh_facility_types"] = "Moh ፋሲሊቲ አይነቶች";
$tableCaptions["Amharic"]["public_moh_health_facilities"] = "Moh የጤና ተቋማት";
$tableCaptions["Amharic"]["public_moh_indicator_data"] = "የMOH አመልካች ውሂብ";
$tableCaptions["Amharic"]["public_moh_indicators"] = "MOH አመላካቾች";
$tableCaptions["Amharic"]["public_moh_regions"] = "MOH ክልሎች";
$tableCaptions["Amharic"]["public_moh_indicator_groups"] = "MOH አመላካች ቡድኖች";
$tableCaptions["Amharic"]["public_timetracker"] = "የሰዓት ቆጣሪ";
$tableCaptions["Amharic"]["public_mfr_facilities_register"] = "Mfr መገልገያዎች ይመዝገቡ";
$tableCaptions["Amharic"]["admin_rights"] = "Admin Rights";
$tableCaptions["Amharic"]["admin_members"] = "Admin Members";
$tableCaptions["Amharic"]["admin_users"] = "Admin Users";
$tableCaptions["Amharic"]["System_Users_Activity_Dashboard"] = "System Users Activity Dashboard";
$tableCaptions["Amharic"]["public_mfr_facilities_register_report"] = "Mfr መገልገያዎች ይመዝገቡ ሪፖርት";
$tableCaptions["Amharic"]["public_hispmd_organisations"] = "Hispmd ድርጅቶች";
$tableCaptions["Amharic"]["public_hispmd_uggroups"] = "Hispmd Uggroups";
$tableCaptions["Amharic"]["public_mfr_facilities_register_chart"] = "Mfr መገልገያዎች መመዝገቢያ ገበታ";
$tableCaptions["Amharic"]["public_moh_data_scope"] = "የMoh ውሂብ ወሰን";
$tableCaptions["Amharic"]["MOH_Indicators_Data_Report"] = "MOH ጠቋሚዎች ውሂብ ሪፖርት";
$tableCaptions["Amharic"]["MOH_Indicators_data_Chart"] = "MOH አመልካቾች የውሂብ ገበታ";
$tableCaptions["Amharic"]["DHIS2_OrgUnits_Distribution"] = "DHIS2 OrgUnits ስርጭት";
$tableCaptions["Amharic"]["public_chat_history"] = "Chat History";
$tableCaptions["Amharic"][""] = "";
$tableCaptions["Amharic"]["kbarticles"] = "Articles";
$tableCaptions["Amharic"]["kbcategories"] = "Categories";
$tableCaptions["Amharic"]["kbcomments"] = "Comments";
$tableCaptions["Amharic"]["kbusers"] = "Users";
$tableCaptions["Amharic"]["main"] = "";
$tableCaptions["Amharic"]["faicons"] = "Faicons";
$tableCaptions["Amharic"]["admin_comments"] = "Admin Comments";
$tableCaptions["Amharic"]["public_hispmd_noti_view"] = "Hispmd Noti View";
$tableCaptions["Amharic"]["public_faicons"] = "Faicons";
$tableCaptions["Amharic"]["MoH_Indicators_Data_Values_Chart"] = "MoH Indicators Data Values Chart";
$tableCaptions["Amharic"]["Indicators_Dashboard"] = "Indicators Dashboard";
$tableCaptions["Amharic"]["hispmd_indicators_data"] = "Hispmd Indicators Data";
$tableCaptions["Amharic"]["public_moh_ir_datasource"] = "Moh Ir Datasource";
$tableCaptions["Amharic"]["public_moh_years"] = "Moh Years";
$tableCaptions["Amharic"]["public_moh_months"] = "Moh Months";
$tableCaptions["Amharic"]["public_moh_quarters"] = "Moh Quarters";
$tableCaptions["Amharic"]["public_moh_period_types"] = "Moh Period Types";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rate_Details"] = "DHIS2 Reporting Rate Details";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rate_Details_Chart"] = "DHIS2 Reporting Rate Details Chart";
$tableCaptions["Amharic"]["DHIS2_ReportingRate"] = "DHIS2 ReportingRate";
$tableCaptions["Amharic"]["DHIS2_Reports_DataSet"] = "DHIS2 Reports DataSet";
$tableCaptions["Amharic"]["DHIS2_ReportingRate_Chart"] = "DHIS2 ReportingRate Chart";
$tableCaptions["Amharic"]["DHIS2_ReportingRates"] = "DHIS2 ReportingRates";
$tableCaptions["Amharic"]["DHIS2_AnalyticsReport"] = "DHIS2 AnalyticsReport";
$tableCaptions["Amharic"]["public_moh_indicators_target"] = "Moh Indicators Target";
$tableCaptions["Amharic"]["public_dhis2_reporting_rates"] = "Dhis2 Reporting Rates";
$tableCaptions["Amharic"]["public_dhis2_reportingrate_settings"] = "Dhis2 Reportingrate Settings";
$tableCaptions["Amharic"]["DHIS2_Reporting_Rates_Report"] = "DHIS2 Reporting Rates Report";
$tableCaptions["Amharic"]["DHIS2_EIDM_HC"] = "DHIS2 EIDM HC";
$tableCaptions["Amharic"]["public_eidm_hc"] = "Eidm Hc";
$tableCaptions["Amharic"]["public_eidm_settings"] = "Eidm Settings";
$tableCaptions["Amharic"]["DHIS2_Data_Elements"] = "DHIS2 Data Elements";
$tableCaptions["Amharic"]["HISPMD_Web_Reports_and_Charts_Builder"] = "HISPMD Web Reports And Charts Builder";
$tableCaptions["Amharic"]["HISPMD_MOH_Indicators_Dashboard"] = "HISPMD MOH Indicators Dashboard";


$globalEvents = new class_GlobalEvents;
$dummyEvents = new eventsBase;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

$projectLanguage = "php";

importSecuritySettings();


require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("classes/datasource/httprequest.php") );
require_once( getabspath("connections/ConnectionManager.php") );
require_once( getabspath("connections/apis.php") );
require_once( getabspath('classes/searchclause.php'));
require_once( getabspath('classes/projectsettings.php'));
include_once( getabspath('classes/runnerpage.php'));
include_once( getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once( getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );
require_once( getabspath('classes/datasource/datacontext.php') );
require_once( getabspath("classes/filesystem/filesystem.php") );

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


$projectEntities = array();
$projectEntitiesReverse = array();
$tablesByGoodName = array();
$tablesByUpperCase = array();
$tablesByUpperGoodname = array();


$contextStack = new RunnerContext;

$cman = new ConnectionManager();
$restApis = new RestManager();
$restResultCache = array();

/**
 * substitute for $_SESSION when in REST API (stateless) mode
 */
$restStorage = array();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = $_COOKIE["mediaType"];
$mediaType = $mediaType ? $mediaType : 0;



$page_titles[GLOBAL_PAGES_SHORT] = array();
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="Amharic")
{
}

$globalSettings["showDetailedError"] = true;

$globalSettings["smsCodeLength"] = 6;
$globalSettings["smsMaskLength"] = 4;

$globalSettings["restCreate"] = true;
$globalSettings["restAuth"] = REST_APIKEY;
$globalSettings["APIkey"] = "";
$globalSettings["APIkeyField"] = "apikey";

$globalSettings["mapMarkerCount"] = 50;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();

/**
 * Lazy initialization dictionaries such as mime types for mimeTypeByExt go here
 */
$onDemnadVariables = array();


$auditMaxFieldLength = 300;
$mysqlSupportDates0000 = false;

$csrfProtectionOff = false;
$cacheImages = true;
/**
 * When true, read user permissions and write them into the session.
 */
$gReadPermissions = true;

$resizeImagesOnClient = false;


// here goes EVENT_INIT_APP event
//**********  Insert a record into another table  ************

// here goes EVENT_INIT_APP event
$currentDateTimeForDb = localdatetime2db(runner_date_format("m-d-y H:i:s"));

// receiving AJAX request with the new page URL
// in timetracker table we create a new record 
// and return the TrackerID value of the new record
if (postvalue("pageOpen") != false) {
    $data = array();
    $data["pagename"] = postvalue("pageName");
    $data["timeon"] = $currentDateTimeForDb;
    $data["userid"] = Security::getUserName(); // Changed to userid
    if (postvalue("recordID") != false) {
        $data["recordid"] = postvalue("recordID"); // Changed to recordid
    }
    DB::Insert("timetracker", $data);
    //return TrackerID
    echo DB::LastId();
    exit();
}

// receiving AJAX request that tells us we are still on the same page
// we just update the value of timeoff field for the current TrackerID
if (postvalue("TrackerID") != false) {
    $now_datetime = $currentDateTimeForDb;
    DB::Update("timetracker", array("timeoff" => $now_datetime), array("trackerid" => postvalue("TrackerID")));
    exit();
}

// Place event code here.
// Use "Add Action" button to add code snippets.

if(postvalue("lat") && postvalue("lng")){
    $_SESSION["geoLatitude"] = postvalue("lat");
    $_SESSION["geoLongitude"] = postvalue("lng");
    exit();
}

;


// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	runner_setcookie("username", "", time() - 1, "", "", false, false);
	runner_setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
Security::autoLoginAsGuest();
Security::updateCSRFCookie();


$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;

?>