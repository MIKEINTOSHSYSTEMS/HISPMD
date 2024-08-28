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

/* @UserCountryMap/realtimeMap.twig */
class __TwigTemplate_d95b733fd3e4e9022b95b584a08979c0 extends Template
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
        yield "<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("mapIsStandaloneNotWidget", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mapIsStandaloneNotWidget"]) || array_key_exists("mapIsStandaloneNotWidget", $context) ? $context["mapIsStandaloneNotWidget"] : (function () { throw new RuntimeError('Variable "mapIsStandaloneNotWidget" does not exist.', 2, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "\"
     data-config=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })())), "html", null, true);
        yield "\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            ";
        // line 8
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "showFooterMessage", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "showFooterMessage", [], "any", false, false, false, 8), true)) : (true))) {
            // line 9
            yield "            <span class=\"showing_visits_of\" style=\"display:none;\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_ShowingVisits"), "html", null, true);
            yield "
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            ";
        }
        // line 13
        yield "            <span class=\"no_data\" style=\"display:none;\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
        yield "</span>
            <span class=\"loading_data\">";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
        yield "...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        ";
        // line 17
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "showDateTime", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "showDateTime", [], "any", false, false, false, 17), true)) : (true))) {
            // line 18
            yield "        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        ";
        }
        // line 20
        yield "    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> ";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
        yield "...
        </span>
    </div>

    ";
        // line 27
        if ((isset($context["userIsSuperUser"]) || array_key_exists("userIsSuperUser", $context) ? $context["userIsSuperUser"] : (function () { throw new RuntimeError('Variable "userIsSuperUser" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>";
            // line 29
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_NoVisitsInfo"), "html", null, true);
            yield "</p>
            <p>";
            // line 30
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_NoVisitsInfo2"), "html", null, true);
            yield "</p>
        </div>
    ";
        }
        // line 33
        yield "    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UserCountryMap/realtimeMap.twig";
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
        return array (  107 => 33,  101 => 30,  97 => 29,  94 => 28,  92 => 27,  85 => 23,  80 => 20,  76 => 18,  74 => 17,  68 => 14,  63 => 13,  55 => 9,  53 => 8,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"{{ mapIsStandaloneNotWidget|default(0) }}\"
     data-config=\"{{ config|json_encode }}\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            {% if config.showFooterMessage|default(true) %}
            <span class=\"showing_visits_of\" style=\"display:none;\">{{ 'UserCountryMap_ShowingVisits'|translate }}
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            {% endif %}
            <span class=\"no_data\" style=\"display:none;\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</span>
            <span class=\"loading_data\">{{ 'General_LoadingData'|translate }}...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        {% if config.showDateTime|default(true) %}
        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        {% endif %}
    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> {{ 'General_LoadingData'|translate }}...
        </span>
    </div>

    {% if userIsSuperUser %}
        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>{{ 'UserCountryMap_NoVisitsInfo'|translate }}</p>
            <p>{{ 'UserCountryMap_NoVisitsInfo2'|translate }}</p>
        </div>
    {% endif %}
    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>", "@UserCountryMap/realtimeMap.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UserCountryMap/templates/realtimeMap.twig");
    }
}
