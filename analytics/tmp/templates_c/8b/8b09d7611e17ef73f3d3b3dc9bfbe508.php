<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CoreHome/_dataTable.twig */
class __TwigTemplate_c9e6bbe2d8b42be97f77a35ad1ecb0c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 1, $this->source); })()), "show_visualization_only", [], "any", false, false, false, 1)) {
            // line 2
            yield "    ";
            yield from             $this->loadTemplate((isset($context["visualizationTemplate"]) || array_key_exists("visualizationTemplate", $context) ? $context["visualizationTemplate"] : (function () { throw new RuntimeError('Variable "visualizationTemplate" does not exist.', 2, $this->source); })()), "@CoreHome/_dataTable.twig", 2)->unwrap()->yield($context);
        } else {
            // line 5
            $context["isDataTableEmpty"] = (( !array_key_exists("dataTable", $context) || (null === (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 5, $this->source); })()))) || ((array_key_exists("dataTableHasNoData", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dataTableHasNoData"]) || array_key_exists("dataTableHasNoData", $context) ? $context["dataTableHasNoData"] : (function () { throw new RuntimeError('Variable "dataTableHasNoData" does not exist.', 5, $this->source); })()), false)) : (false)));
            // line 6
            yield "
";
            // line 7
            $context["showCardAsContentBlock"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 7, $this->source); })()), "show_as_content_block", [], "any", false, false, false, 7) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 7, $this->source); })()), "show_title", [], "any", false, false, false, 7)) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 7, $this->source); })()));
            // line 8
            $context["showOnlyTitleWithoutCard"] = (( !(isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 8, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 8, $this->source); })()), "show_title", [], "any", false, false, false, 8));
            // line 9
            yield "
";
            // line 10
            if ((isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 10, $this->source); })())) {
                // line 11
                yield "<div class=\"card\">
<div class=\"card-content\">
    ";
                // line 13
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13)) {
                    // line 14
                    yield "        <h2 class=\"card-title\"
            ";
                    // line 15
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 15, $this->source); })()), "title_edit_entity_url", [], "any", false, false, false, 15)) {
                        yield "edit-url=\"";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 15, $this->source); })()), "title_edit_entity_url", [], "any", false, false, false, 15), "html", null, true);
                        yield "\"";
                    }
                    // line 16
                    yield "            report-generated=\"";
                    if (array_key_exists("reportLastUpdatedMessage", $context)) {
                        yield (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 16, $this->source); })());
                    }
                    yield "\"
              vue-entry=\"CoreHome.EnrichedHeadline\"
        >";
                    // line 18
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
                    yield "</h2>
    ";
                }
            } elseif (            // line 20
(isset($context["showOnlyTitleWithoutCard"]) || array_key_exists("showOnlyTitleWithoutCard", $context) ? $context["showOnlyTitleWithoutCard"] : (function () { throw new RuntimeError('Variable "showOnlyTitleWithoutCard" does not exist.', 20, $this->source); })())) {
                // line 21
                yield "    <div>
    <h2>";
                // line 22
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
                yield "</h2>
";
            }
            // line 24
            yield "
";
            // line 25
            $context["showCardTableIsEmpty"] = (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 25, $this->source); })()), "show_as_content_block", [], "any", false, false, false, 25) && (isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 25, $this->source); })())) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 25, $this->source); })()));
            // line 26
            if ((isset($context["showCardTableIsEmpty"]) || array_key_exists("showCardTableIsEmpty", $context) ? $context["showCardTableIsEmpty"] : (function () { throw new RuntimeError('Variable "showCardTableIsEmpty" does not exist.', 26, $this->source); })())) {
                // line 27
                yield "    <div class=\"card\">
    <div class=\"card-content\">
";
            }
            // line 30
            yield "
";
            // line 31
            $context["summaryRowId"] = Twig\Extension\CoreExtension::constant("Piwik\\DataTable::ID_SUMMARY_ROW");
            // line 32
            $context["isSubtable"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["javascriptVariablesToSet"] ?? null), "idSubtable", [], "any", true, true, false, 32) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["javascriptVariablesToSet"]) || array_key_exists("javascriptVariablesToSet", $context) ? $context["javascriptVariablesToSet"] : (function () { throw new RuntimeError('Variable "javascriptVariablesToSet" does not exist.', 32, $this->source); })()), "idSubtable", [], "any", false, false, false, 32) != 0));
            // line 33
            yield "<div class=\"dataTable ";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["visualizationCssClass"]) || array_key_exists("visualizationCssClass", $context) ? $context["visualizationCssClass"] : (function () { throw new RuntimeError('Variable "visualizationCssClass" does not exist.', 33, $this->source); })()), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_css_class", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_css_class", [], "any", false, false, false, 33), "")) : ("")), "html", null, true);
            yield " ";
            if ((isset($context["isSubtable"]) || array_key_exists("isSubtable", $context) ? $context["isSubtable"] : (function () { throw new RuntimeError('Variable "isSubtable" does not exist.', 33, $this->source); })())) {
                yield "subDataTable";
            }
            yield " ";
            if (((array_key_exists("isComparing", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isComparing"]) || array_key_exists("isComparing", $context) ? $context["isComparing"] : (function () { throw new RuntimeError('Variable "isComparing" does not exist.', 33, $this->source); })()), false)) : (false))) {
                yield "isComparing";
            }
            yield "\"
     data-table-type=\"";
            // line 34
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 34, $this->source); })()), "datatable_js_type", [], "any", false, false, false, 34), "html", null, true);
            yield "\"
     data-report=\"";
            // line 35
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 35, $this->source); })()), "report_id", [], "any", false, false, false, 35), "html", null, true);
            yield "\"
     data-report-metadata=\"";
            // line 36
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["reportMetdadata"]) || array_key_exists("reportMetdadata", $context) ? $context["reportMetdadata"] : (function () { throw new RuntimeError('Variable "reportMetdadata" does not exist.', 36, $this->source); })())), "html_attr");
            yield "\"
     data-props=\"";
            // line 37
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 37, $this->source); })()))) {
                yield "{}";
            } else {
                yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 37, $this->source); })())), "html", null, true);
            }
            yield "\"
     data-params=\"";
            // line 38
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 38, $this->source); })()))) {
                yield "{}";
            } else {
                yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 38, $this->source); })())), "html", null, true);
            }
            yield "\">

    ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40)) {
                // line 41
                yield "        <div class=\"card-description\">";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
                yield "</div>
    ";
            }
            // line 43
            yield "
    <div class=\"reportDocumentation\" data-content=\"";
            // line 44
            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", false, false, false, 44))) : ("")), "html_attr");
            yield "\">
        ";
            // line 45
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "onlineGuideUrl", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "onlineGuideUrl", [], "any", false, false, false, 45))) : ("")))) {
                yield "<a href=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 45, $this->source); })()), "onlineGuideUrl", [], "any", false, false, false, 45)), "html_attr");
                yield "\" target=\"_blank\" rel=\"noreferrer noopener\" class=\"onlineGuide\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ReadMoreOnlineGuide"), "html", null, true);
                yield "</a>";
            }
            // line 46
            yield "        ";
            if ((array_key_exists("reportLastUpdatedMessage", $context) && (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 46, $this->source); })()))) {
                yield "<span class=\"helpDate\">";
                yield (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 46, $this->source); })());
                yield "</span>";
            }
            // line 47
            yield "    </div>

    <div class=\"dataTableWrapper\">
        ";
            // line 50
            if (array_key_exists("error", $context)) {
                // line 51
                yield "            <div vue-entry=\"CoreHome.Alert\" severity=\"danger\">";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })()), "message", [], "any", false, false, false, 51), "html", null, true);
                yield "</div>
        ";
            } else {
                // line 53
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_header_message", [], "any", true, true, false, 53) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 53, $this->source); })()), "show_header_message", [], "any", false, false, false, 53)))) {
                    // line 54
                    yield "                <div class='datatableHeaderMessage'>";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 54, $this->source); })()), "show_header_message", [], "any", false, false, false, 54);
                    yield "</div>
            ";
                }
                // line 56
                yield "
            ";
                // line 57
                if ((isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 57, $this->source); })())) {
                    // line 58
                    yield "                <div class=\"pk-emptyDataTable\">
                ";
                    // line 59
                    if ((array_key_exists("showReportDataWasPurgedMessage", $context) && (isset($context["showReportDataWasPurgedMessage"]) || array_key_exists("showReportDataWasPurgedMessage", $context) ? $context["showReportDataWasPurgedMessage"] : (function () { throw new RuntimeError('Variable "showReportDataWasPurgedMessage" does not exist.', 59, $this->source); })()))) {
                        // line 60
                        yield "                    ";
                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DataForThisReportHasBeenPurged", (isset($context["deleteReportsOlderThan"]) || array_key_exists("deleteReportsOlderThan", $context) ? $context["deleteReportsOlderThan"] : (function () { throw new RuntimeError('Variable "deleteReportsOlderThan" does not exist.', 60, $this->source); })())), "html", null, true);
                        yield "
                ";
                    } elseif ((                    // line 61
array_key_exists("showPluginArchiveDisabled", $context) && (isset($context["showPluginArchiveDisabled"]) || array_key_exists("showPluginArchiveDisabled", $context) ? $context["showPluginArchiveDisabled"] : (function () { throw new RuntimeError('Variable "showPluginArchiveDisabled" does not exist.', 61, $this->source); })()))) {
                        // line 62
                        yield "                    ";
                        yield $this->env->getFilter('translate')->getCallable()("CoreHome_DataForThisReportHasBeenDisabled", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/how-to-disable-archiving-the-segment-reports-for-specific-plugins"), "</a>");
                        yield "
                ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source,                     // line 63
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 63, $this->source); })()), "no_data_message", [], "any", false, false, false, 63)) {
                        // line 64
                        yield "                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 64, $this->source); })()), "no_data_message", [], "any", false, false, false, 64);
                        yield "
                ";
                    } else {
                        // line 66
                        yield "                    ";
                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
                        yield "
                ";
                    }
                    // line 68
                    yield "                </div>
            ";
                } else {
                    // line 70
                    yield "                ";
                    yield from                     $this->loadTemplate((isset($context["visualizationTemplate"]) || array_key_exists("visualizationTemplate", $context) ? $context["visualizationTemplate"] : (function () { throw new RuntimeError('Variable "visualizationTemplate" does not exist.', 70, $this->source); })()), "@CoreHome/_dataTable.twig", 70)->unwrap()->yield($context);
                    // line 71
                    yield "            ";
                }
                // line 72
                yield "
            ";
                // line 73
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 73, $this->source); })()), "show_footer", [], "any", false, false, false, 73)) {
                    // line 74
                    yield "                ";
                    yield from                     $this->loadTemplate("@CoreHome/_dataTableFooter.twig", "@CoreHome/_dataTable.twig", 74)->unwrap()->yield($context);
                    // line 75
                    yield "            ";
                }
                // line 76
                yield "
            ";
                // line 77
                yield from                 $this->loadTemplate("@CoreHome/_dataTableJS.twig", "@CoreHome/_dataTable.twig", 77)->unwrap()->yield(CoreExtension::merge($context, ["reportId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 77, $this->source); })()), "report_id", [], "any", false, false, false, 77)]));
                // line 78
                yield "        ";
            }
            // line 79
            yield "    </div>
</div>

";
            // line 82
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 82, $this->source); })())) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 82, $this->source); })())))) {
                // line 83
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 83, $this->source); })()));
                foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                    // line 84
                    yield "
        ";
                    // line 85
                    yield $this->env->getFilter('notification')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 85), ["id" => $context["notificationId"], "type" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 85), "title" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "title", [], "any", false, false, false, 85), "noclear" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "hasNoClear", [], "any", false, false, false, 85), "context" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "context", [], "any", false, false, false, 85), "raw" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "raw", [], "any", false, false, false, 85)], false);
                    yield "

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 89
            yield "
";
            // line 90
            if ((isset($context["showCardTableIsEmpty"]) || array_key_exists("showCardTableIsEmpty", $context) ? $context["showCardTableIsEmpty"] : (function () { throw new RuntimeError('Variable "showCardTableIsEmpty" does not exist.', 90, $this->source); })())) {
                // line 91
                yield "    </div></div>
";
            }
            // line 93
            yield "
";
            // line 94
            if ((isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 94, $this->source); })())) {
                // line 95
                yield "    </div></div>
";
            } elseif (            // line 96
(isset($context["showOnlyTitleWithoutCard"]) || array_key_exists("showOnlyTitleWithoutCard", $context) ? $context["showOnlyTitleWithoutCard"] : (function () { throw new RuntimeError('Variable "showOnlyTitleWithoutCard" does not exist.', 96, $this->source); })())) {
                // line 97
                yield "    </div>
";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTable.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  320 => 97,  318 => 96,  315 => 95,  313 => 94,  310 => 93,  306 => 91,  304 => 90,  301 => 89,  291 => 85,  288 => 84,  283 => 83,  281 => 82,  276 => 79,  273 => 78,  271 => 77,  268 => 76,  265 => 75,  262 => 74,  260 => 73,  257 => 72,  254 => 71,  251 => 70,  247 => 68,  241 => 66,  235 => 64,  233 => 63,  228 => 62,  226 => 61,  221 => 60,  219 => 59,  216 => 58,  214 => 57,  211 => 56,  205 => 54,  202 => 53,  196 => 51,  194 => 50,  189 => 47,  182 => 46,  174 => 45,  170 => 44,  167 => 43,  161 => 41,  159 => 40,  150 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  115 => 33,  113 => 32,  111 => 31,  108 => 30,  103 => 27,  101 => 26,  99 => 25,  96 => 24,  91 => 22,  88 => 21,  86 => 20,  81 => 18,  73 => 16,  67 => 15,  64 => 14,  62 => 13,  58 => 11,  56 => 10,  53 => 9,  51 => 8,  49 => 7,  46 => 6,  44 => 5,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if properties.show_visualization_only %}
    {% include visualizationTemplate %}
{%- else -%}

{% set isDataTableEmpty = (dataTable is not defined or dataTable is null or dataTableHasNoData|default(false)) %}

{% set showCardAsContentBlock = (properties.show_as_content_block and properties.show_title and not isWidget) %}
{% set showOnlyTitleWithoutCard = not showCardAsContentBlock and properties.title and properties.show_title %}

{% if showCardAsContentBlock  %}
<div class=\"card\">
<div class=\"card-content\">
    {% if properties.title %}
        <h2 class=\"card-title\"
            {% if properties.title_edit_entity_url %}edit-url=\"{{ properties.title_edit_entity_url }}\"{% endif %}
            report-generated=\"{% if reportLastUpdatedMessage is defined %}{{ reportLastUpdatedMessage|raw }}{% endif %}\"
              vue-entry=\"CoreHome.EnrichedHeadline\"
        >{{ properties.title }}</h2>
    {% endif %}
{% elseif showOnlyTitleWithoutCard %}
    <div>
    <h2>{{ properties.title }}</h2>
{% endif %}

{% set showCardTableIsEmpty = not properties.show_as_content_block and isDataTableEmpty and not isWidget %}
{% if showCardTableIsEmpty %}
    <div class=\"card\">
    <div class=\"card-content\">
{% endif %}

{% set summaryRowId = constant('Piwik\\\\DataTable::ID_SUMMARY_ROW') %}{# ID_SUMMARY_ROW #}
{% set isSubtable = javascriptVariablesToSet.idSubtable is defined and javascriptVariablesToSet.idSubtable != 0 %}
<div class=\"dataTable {{ visualizationCssClass }} {{ properties.datatable_css_class|default('') }} {% if isSubtable %}subDataTable{% endif %} {% if isComparing|default(false) %}isComparing{% endif %}\"
     data-table-type=\"{{ properties.datatable_js_type }}\"
     data-report=\"{{ properties.report_id }}\"
     data-report-metadata=\"{{ reportMetdadata|json_encode|e('html_attr') }}\"
     data-props=\"{% if clientSideProperties is empty %}{}{% else %}{{ clientSideProperties|json_encode }}{% endif %}\"
     data-params=\"{% if clientSideParameters is empty %}{}{% else %}{{ clientSideParameters|json_encode }}{% endif %}\">

    {% if properties.description %}
        <div class=\"card-description\">{{ properties.description }}</div>
    {% endif %}

    <div class=\"reportDocumentation\" data-content=\"{{ properties.documentation|default|e('html_attr') }}\">
        {% if properties.onlineGuideUrl|default is not empty %}<a href=\"{{ properties.onlineGuideUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\" class=\"onlineGuide\">{{ 'CoreHome_ReadMoreOnlineGuide'|translate }}</a>{% endif %}
        {% if reportLastUpdatedMessage is defined and reportLastUpdatedMessage %}<span class=\"helpDate\">{{ reportLastUpdatedMessage|raw }}</span>{% endif %}
    </div>

    <div class=\"dataTableWrapper\">
        {% if error is defined %}
            <div vue-entry=\"CoreHome.Alert\" severity=\"danger\">{{ error.message }}</div>
        {% else %}
            {% if properties.show_header_message is defined and properties.show_header_message is not empty %}
                <div class='datatableHeaderMessage'>{{ properties.show_header_message | raw }}</div>
            {% endif %}

            {% if isDataTableEmpty %}
                <div class=\"pk-emptyDataTable\">
                {% if showReportDataWasPurgedMessage is defined and showReportDataWasPurgedMessage %}
                    {{ 'CoreHome_DataForThisReportHasBeenPurged'|translate(deleteReportsOlderThan) }}
                {% elseif showPluginArchiveDisabled is defined and showPluginArchiveDisabled%}
                    {{ 'CoreHome_DataForThisReportHasBeenDisabled'|translate(externallink('https://matomo.org/faq/how-to-disable-archiving-the-segment-reports-for-specific-plugins'), '</a>')|raw }}
                {% elseif properties.no_data_message %}
                    {{ properties.no_data_message|raw }}
                {% else %}
                    {{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}
                {% endif %}
                </div>
            {% else %}
                {% include visualizationTemplate %}
            {% endif %}

            {% if properties.show_footer %}
                {% include \"@CoreHome/_dataTableFooter.twig\" %}
            {% endif %}

            {% include \"@CoreHome/_dataTableJS.twig\" with { reportId: properties.report_id } %}
        {% endif %}
    </div>
</div>

{% if notifications is not empty and notifications|length %}
    {% for notificationId, n in notifications %}

        {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

    {% endfor %}
{% endif %}

{% if showCardTableIsEmpty %}
    </div></div>
{% endif %}

{% if showCardAsContentBlock %}
    </div></div>
{% elseif showOnlyTitleWithoutCard %}
    </div>
{% endif %}

{%- endif %}
", "@CoreHome/_dataTable.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_dataTable.twig");
    }
}
