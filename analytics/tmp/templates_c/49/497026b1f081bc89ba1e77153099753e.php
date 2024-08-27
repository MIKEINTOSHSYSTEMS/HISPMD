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

/* @Live/_visitorDetails.twig */
class __TwigTemplate_77e2ce7ce6bffe3cbc56c2be3eabf07b extends Template
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
        yield "<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", ["visitorType"], "method", false, false, false, 1) == "new")) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NewVisitor"), "html", null, true);
        } else {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorsLastVisit", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", ["daysSinceLastVisit"], "method", false, false, false, 1)), "html", null, true);
        }
        yield "\">
    ";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()), "getColumn", ["serverDatePrettyFirstAction"], "method", false, false, false, 2), "html", null, true);
        yield "
    ";
        // line 3
        if ((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 3, $this->source); })())) {
            yield "<br/>";
        } else {
            yield "-";
        }
        yield " ";
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 3, $this->source); })()), "getColumn", ["serverTimePrettyFirstAction"], "method", false, false, false, 3), "html", null, true);
        yield "</strong>
";
        // line 4
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", ["visitIp"], "method", false, false, false, 4))) {
            // line 5
            yield "<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 5, $this->source); })()), "getColumn", ["userId"], "method", false, false, false, 5))) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_UserId"), "html", null, true);
                yield ": ";
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 5, $this->source); })()), "getColumn", ["userId"], "method", false, false, false, 5));
                yield "
";
            }
            // line 6
            if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 6, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", ["visitorId"], "method", false, false, false, 6)))) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitorID"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", ["visitorId"], "method", false, false, false, 6), "html", null, true);
                yield "
";
            }
            // line 7
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 7, $this->source); })()), "getColumn", ["idVisit"], "method", false, false, false, 7))) {
                // line 8
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
                yield " ID: ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 8, $this->source); })()), "getColumn", ["idVisit"], "method", false, false, false, 8), "html", null, true);
                yield "
";
            }
            // line 9
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", ["latitude"], "method", false, false, false, 9) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", ["longitude"], "method", false, false, false, 9))) {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", ["location"], "method", false, false, false, 9), "html", null, true);
                yield "
GPS (lat/long): ";
                // line 10
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", ["latitude"], "method", false, false, false, 10), "html", null, true);
                yield ",";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", ["longitude"], "method", false, false, false, 10), "html", null, true);
                yield "
";
            }
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", ["providerName"], "method", false, false, false, 11)) {
                // line 12
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Provider_ColumnProvider"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 12, $this->source); })()), "getColumn", ["providerName"], "method", false, false, false, 12), "html", null, true);
            }
            yield "\">
    IP: ";
            // line 13
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 13, $this->source); })()), "getColumn", ["visitIp"], "method", false, false, false, 13), "html", null, true);
            yield "
    <br />
    ";
            // line 15
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", ["location"], "method", false, false, false, 15) != $this->env->getFilter('translate')->getCallable()("General_Unknown"))) {
                yield "<span><img width=\"16\" class=\"flag\" src=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", ["countryFlag"], "method", false, false, false, 15), "html", null, true);
                yield "\"/>&nbsp;
    ";
                // line 16
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 16))) {
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 16), "html", null, true);
                } else {
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", ["country"], "method", false, false, false, 16), "html", null, true);
                }
                yield "</span>";
            }
            // line 17
            yield "
    ";
            // line 18
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", ["userId"], "method", false, false, false, 18))) {
                yield "<br/><br/>";
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", ["userId"], "method", false, false, false, 18));
            }
            // line 19
            yield "</span>";
        }
        // line 20
        if ((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "    <br />
    ";
            // line 22
            yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 22, $this->source); })()));
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_visitorDetails.twig";
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
        return array (  145 => 22,  142 => 21,  140 => 20,  137 => 19,  132 => 18,  129 => 17,  121 => 16,  115 => 15,  110 => 13,  103 => 12,  101 => 11,  94 => 10,  89 => 9,  82 => 8,  80 => 7,  72 => 6,  63 => 5,  61 => 4,  51 => 3,  47 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"{% if visitInfo.getColumn('visitorType')=='new' %}{{ 'General_NewVisitor'|translate }}{% else %}{{ 'Live_VisitorsLastVisit'|translate(visitInfo.getColumn('daysSinceLastVisit')) }}{% endif %}\">
    {{ visitInfo.getColumn('serverDatePrettyFirstAction') }}
    {% if isWidget %}<br/>{% else %}-{% endif %} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}</strong>
{% if visitInfo.getColumn('visitIp') is not empty %}
<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"{% if visitInfo.getColumn('userId') is not empty %}{{ 'General_UserId'|translate }}: {{ visitInfo.getColumn('userId')|rawSafeDecoded }}
{% endif %}{% if isProfileEnabled and visitInfo.getColumn('visitorId') is not empty %}{{ 'General_VisitorID'|translate }}: {{ visitInfo.getColumn('visitorId') }}
{% endif %}{% if visitInfo.getColumn('idVisit') is not empty %}
{{ 'General_Visit'|translate }} ID: {{ visitInfo.getColumn('idVisit') }}
{% endif %}{% if visitInfo.getColumn('latitude') or visitInfo.getColumn('longitude') %}{{ visitInfo.getColumn('location') }}
GPS (lat/long): {{ visitInfo.getColumn('latitude') }},{{ visitInfo.getColumn('longitude') }}
{% endif %}{% if visitInfo.getColumn('providerName') %}
{{ 'Provider_ColumnProvider'|translate }}: {{ visitInfo.getColumn('providerName') }}{% endif %}\">
    IP: {{ visitInfo.getColumn('visitIp') }}
    <br />
    {% if visitInfo.getColumn('location') != 'General_Unknown'|translate %}<span><img width=\"16\" class=\"flag\" src=\"{{ visitInfo.getColumn('countryFlag') }}\"/>&nbsp;
    {% if visitInfo.getColumn('city') is not empty %}{{ visitInfo.getColumn('city') }}{% else %}{{ visitInfo.getColumn('country') }}{% endif %}</span>{% endif %}

    {% if visitInfo.getColumn('userId') is not empty %}<br/><br/>{{ visitInfo.getColumn('userId')|rawSafeDecoded }}{% endif %}
</span>{% endif %}
{% if isWidget %}
    <br />
    {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
{% endif %}
", "@Live/_visitorDetails.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_visitorDetails.twig");
    }
}
