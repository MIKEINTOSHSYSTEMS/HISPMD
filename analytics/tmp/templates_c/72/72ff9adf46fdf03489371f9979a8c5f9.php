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

/* _jsGlobalVariables.twig */
class __TwigTemplate_ae0438e2ca68778c4dd02e695bb9805d extends Template
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
        yield "<script type=\"text/javascript\">
    var piwik = {};
    piwik.pluginsToLoadOnDemand = ";
        // line 3
        yield json_encode((isset($context["pluginsToLoadOnDemand"]) || array_key_exists("pluginsToLoadOnDemand", $context) ? $context["pluginsToLoadOnDemand"] : (function () { throw new RuntimeError('Variable "pluginsToLoadOnDemand" does not exist.', 3, $this->source); })()));
        yield ";
    piwik.token_auth = \"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) || array_key_exists("token_auth", $context) ? $context["token_auth"] : (function () { throw new RuntimeError('Variable "token_auth" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\";
    piwik.piwik_url = \"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\";
    piwik.cacheBuster = \"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["cacheBuster"]) || array_key_exists("cacheBuster", $context) ? $context["cacheBuster"] : (function () { throw new RuntimeError('Variable "cacheBuster" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\";
    piwik.disableTrackingMatomoAppLinks = ";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["disableTrackingMatomoAppLinks"]) || array_key_exists("disableTrackingMatomoAppLinks", $context) ? $context["disableTrackingMatomoAppLinks"] : (function () { throw new RuntimeError('Variable "disableTrackingMatomoAppLinks" does not exist.', 7, $this->source); })()), "html", null, true);
        yield ";
    ";
        // line 8
        if (array_key_exists("timezoneOffset", $context)) {
            yield "piwik.timezoneOffset = ";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["timezoneOffset"]) || array_key_exists("timezoneOffset", $context) ? $context["timezoneOffset"] : (function () { throw new RuntimeError('Variable "timezoneOffset" does not exist.', 8, $this->source); })()), "html", null, true);
            yield ";";
        }
        // line 9
        yield "
    piwik.numbers = {
        patternNumber: \"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatNumber"), "html", null, true);
        yield "\",
        patternPercent: \"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatPercent"), "html", null, true);
        yield "\",
        patternCurrency: \"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatCurrency"), "html", null, true);
        yield "\",
        symbolPlus: \"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolPlus"), "html", null, true);
        yield "\",
        symbolMinus: \"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolMinus"), "html", null, true);
        yield "\",
        symbolPercent: \"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolPercent"), "html", null, true);
        yield "\",
        symbolGroup: \"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolGroup"), "html", null, true);
        yield "\",
        symbolDecimal: \"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolDecimal"), "html", null, true);
        yield "\"
    };

    piwik.relativePluginWebDirs = ";
        // line 21
        yield json_encode((isset($context["relativePluginWebDirs"]) || array_key_exists("relativePluginWebDirs", $context) ? $context["relativePluginWebDirs"] : (function () { throw new RuntimeError('Variable "relativePluginWebDirs" does not exist.', 21, $this->source); })()));
        yield ";

    ";
        // line 23
        if ((isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 23, $this->source); })())) {
            yield "piwik.userLogin = \"";
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 23, $this->source); })()), "js"), "html", null, true);
            yield "\";";
        }
        // line 24
        yield "
    ";
        // line 25
        if (array_key_exists("idSite", $context)) {
            yield "piwik.idSite = \"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "\";";
        }
        // line 26
        yield "
    piwik.requiresPasswordConfirmation = ";
        // line 27
        yield (((isset($context["userRequiresPasswordConfirmation"]) || array_key_exists("userRequiresPasswordConfirmation", $context) ? $context["userRequiresPasswordConfirmation"] : (function () { throw new RuntimeError('Variable "userRequiresPasswordConfirmation" does not exist.', 27, $this->source); })())) ? ("true") : ("false"));
        yield ";

    ";
        // line 29
        if (array_key_exists("siteName", $context)) {
            // line 30
            yield "    // NOTE: siteName is currently considered deprecated, use piwik.currentSiteName instead, which will not contain HTML entities
    piwik.siteName = \"";
            // line 31
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 31, $this->source); })()), "js"), "html", null, true);
            yield "\";
    ";
            // line 32
            if (array_key_exists("siteNameDecoded", $context)) {
                yield " // just to be safe
    piwik.currentSiteName = ";
                // line 33
                yield json_encode((isset($context["siteNameDecoded"]) || array_key_exists("siteNameDecoded", $context) ? $context["siteNameDecoded"] : (function () { throw new RuntimeError('Variable "siteNameDecoded" does not exist.', 33, $this->source); })()));
                yield ";";
            }
            // line 34
            yield "    ";
        }
        // line 35
        yield "
    ";
        // line 36
        if (array_key_exists("siteMainUrl", $context)) {
            yield "piwik.siteMainUrl = \"";
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["siteMainUrl"]) || array_key_exists("siteMainUrl", $context) ? $context["siteMainUrl"] : (function () { throw new RuntimeError('Variable "siteMainUrl" does not exist.', 36, $this->source); })()), "js"), "html", null, true);
            yield "\";";
        }
        // line 37
        yield "
    ";
        // line 38
        if (array_key_exists("period", $context)) {
            yield "piwik.period = \"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "\";";
        }
        // line 39
        yield "
";
        // line 44
        yield "    piwik.currentDateString = \"";
        yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("date", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 44, $this->source); })()), ((array_key_exists("endDate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 44, $this->source); })()), "")) : ("")))) : (((array_key_exists("endDate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 44, $this->source); })()), "")) : ("")))), "html", null, true);
        yield "\";
";
        // line 45
        if (array_key_exists("startDate", $context)) {
            // line 46
            yield "    piwik.startDateString = \"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "\";
    piwik.endDateString = \"";
            // line 47
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\";
    piwik.minDateYear = ";
            // line 48
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["minDateYear"]) || array_key_exists("minDateYear", $context) ? $context["minDateYear"] : (function () { throw new RuntimeError('Variable "minDateYear" does not exist.', 48, $this->source); })()), "html", null, true);
            yield ";
    piwik.minDateMonth = parseInt(\"";
            // line 49
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["minDateMonth"]) || array_key_exists("minDateMonth", $context) ? $context["minDateMonth"] : (function () { throw new RuntimeError('Variable "minDateMonth" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "\", 10);
    piwik.minDateDay = parseInt(\"";
            // line 50
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["minDateDay"]) || array_key_exists("minDateDay", $context) ? $context["minDateDay"] : (function () { throw new RuntimeError('Variable "minDateDay" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "\", 10);
    piwik.maxDateYear = ";
            // line 51
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateYear"]) || array_key_exists("maxDateYear", $context) ? $context["maxDateYear"] : (function () { throw new RuntimeError('Variable "maxDateYear" does not exist.', 51, $this->source); })()), "html", null, true);
            yield ";
    piwik.maxDateMonth = parseInt(\"";
            // line 52
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateMonth"]) || array_key_exists("maxDateMonth", $context) ? $context["maxDateMonth"] : (function () { throw new RuntimeError('Variable "maxDateMonth" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "\", 10);
    piwik.maxDateDay = parseInt(\"";
            // line 53
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateDay"]) || array_key_exists("maxDateDay", $context) ? $context["maxDateDay"] : (function () { throw new RuntimeError('Variable "maxDateDay" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\", 10);
";
        }
        // line 55
        yield "    ";
        if (array_key_exists("language", $context)) {
            yield "piwik.language = \"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\";";
        }
        // line 56
        yield "
    piwik.hasSuperUserAccess = ";
        // line 57
        yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ((array_key_exists("hasSuperUserAccess", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hasSuperUserAccess"]) || array_key_exists("hasSuperUserAccess", $context) ? $context["hasSuperUserAccess"] : (function () { throw new RuntimeError('Variable "hasSuperUserAccess" does not exist.', 57, $this->source); })()), 0)) : (0)), "js"), "html", null, true);
        yield ";
    piwik.userHasSomeAdminAccess = ";
        // line 58
        yield json_encode((isset($context["userHasSomeAdminAccess"]) || array_key_exists("userHasSomeAdminAccess", $context) ? $context["userHasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "userHasSomeAdminAccess" does not exist.', 58, $this->source); })()));
        yield ";
    piwik.userCapabilities = ";
        // line 59
        yield json_encode(((array_key_exists("userCapabilities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userCapabilities"]) || array_key_exists("userCapabilities", $context) ? $context["userCapabilities"] : (function () { throw new RuntimeError('Variable "userCapabilities" does not exist.', 59, $this->source); })()), [])) : ([])));
        yield ";
    piwik.config = {};
";
        // line 61
        if (array_key_exists("clientSideConfig", $context)) {
            // line 62
            yield "    piwik.config = ";
            yield json_encode((isset($context["clientSideConfig"]) || array_key_exists("clientSideConfig", $context) ? $context["clientSideConfig"] : (function () { throw new RuntimeError('Variable "clientSideConfig" does not exist.', 62, $this->source); })()));
            yield ";
";
        }
        // line 64
        yield "    Object.freeze(piwik.config); // disallow accidental changes
    piwik.shouldPropagateTokenAuth = ";
        // line 65
        yield json_encode((isset($context["shouldPropagateTokenAuth"]) || array_key_exists("shouldPropagateTokenAuth", $context) ? $context["shouldPropagateTokenAuth"] : (function () { throw new RuntimeError('Variable "shouldPropagateTokenAuth" does not exist.', 65, $this->source); })()));
        yield ";
    ";
        // line 66
        yield $this->env->getFunction('postEvent')->getCallable()("Template.jsGlobalVariables");
        yield "
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_jsGlobalVariables.twig";
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
        return array (  254 => 66,  250 => 65,  247 => 64,  241 => 62,  239 => 61,  234 => 59,  230 => 58,  226 => 57,  223 => 56,  216 => 55,  211 => 53,  207 => 52,  203 => 51,  199 => 50,  195 => 49,  191 => 48,  187 => 47,  182 => 46,  180 => 45,  175 => 44,  172 => 39,  166 => 38,  163 => 37,  157 => 36,  154 => 35,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  136 => 30,  134 => 29,  129 => 27,  126 => 26,  120 => 25,  117 => 24,  111 => 23,  106 => 21,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    var piwik = {};
    piwik.pluginsToLoadOnDemand = {{ pluginsToLoadOnDemand|json_encode|raw }};
    piwik.token_auth = \"{{ token_auth }}\";
    piwik.piwik_url = \"{{ piwikUrl }}\";
    piwik.cacheBuster = \"{{ cacheBuster }}\";
    piwik.disableTrackingMatomoAppLinks = {{ disableTrackingMatomoAppLinks }};
    {% if timezoneOffset is defined %}piwik.timezoneOffset = {{ timezoneOffset }};{% endif %}

    piwik.numbers = {
        patternNumber: \"{{ 'Intl_NumberFormatNumber'|translate }}\",
        patternPercent: \"{{ 'Intl_NumberFormatPercent'|translate }}\",
        patternCurrency: \"{{ 'Intl_NumberFormatCurrency'|translate }}\",
        symbolPlus: \"{{ 'Intl_NumberSymbolPlus'|translate }}\",
        symbolMinus: \"{{ 'Intl_NumberSymbolMinus'|translate }}\",
        symbolPercent: \"{{ 'Intl_NumberSymbolPercent'|translate }}\",
        symbolGroup: \"{{ 'Intl_NumberSymbolGroup'|translate }}\",
        symbolDecimal: \"{{ 'Intl_NumberSymbolDecimal'|translate }}\"
    };

    piwik.relativePluginWebDirs = {{ relativePluginWebDirs|json_encode|raw }};

    {% if userLogin %}piwik.userLogin = \"{{ userLogin|e('js')}}\";{% endif %}

    {% if idSite is defined %}piwik.idSite = \"{{ idSite }}\";{% endif %}

    piwik.requiresPasswordConfirmation = {{ userRequiresPasswordConfirmation ? 'true' : 'false' }};

    {% if siteName is defined %}
    // NOTE: siteName is currently considered deprecated, use piwik.currentSiteName instead, which will not contain HTML entities
    piwik.siteName = \"{{ siteName|e('js') }}\";
    {% if siteNameDecoded is defined %} // just to be safe
    piwik.currentSiteName = {{ siteNameDecoded|json_encode|raw }};{% endif %}
    {% endif %}

    {% if siteMainUrl is defined %}piwik.siteMainUrl = \"{{ siteMainUrl|e('js') }}\";{% endif %}

    {% if period is defined %}piwik.period = \"{{ period }}\";{% endif %}

{# piwik.currentDateString should not be used other than by the calendar Javascript
            (it is not set to the expected value when period=range)
        Use broadcast.getValueFromUrl('date') instead
#}
    piwik.currentDateString = \"{{ date|default(endDate|default('')) }}\";
{% if startDate is defined %}
    piwik.startDateString = \"{{ startDate }}\";
    piwik.endDateString = \"{{ endDate }}\";
    piwik.minDateYear = {{ minDateYear }};
    piwik.minDateMonth = parseInt(\"{{ minDateMonth }}\", 10);
    piwik.minDateDay = parseInt(\"{{ minDateDay }}\", 10);
    piwik.maxDateYear = {{ maxDateYear }};
    piwik.maxDateMonth = parseInt(\"{{ maxDateMonth }}\", 10);
    piwik.maxDateDay = parseInt(\"{{ maxDateDay }}\", 10);
{% endif %}
    {% if language is defined %}piwik.language = \"{{ language }}\";{% endif %}

    piwik.hasSuperUserAccess = {{ hasSuperUserAccess|default(0)|e('js')}};
    piwik.userHasSomeAdminAccess = {{ userHasSomeAdminAccess|json_encode|raw }};
    piwik.userCapabilities = {{ userCapabilities|default([])|json_encode|raw }};
    piwik.config = {};
{% if clientSideConfig is defined %}
    piwik.config = {{ clientSideConfig|json_encode|raw }};
{% endif %}
    Object.freeze(piwik.config); // disallow accidental changes
    piwik.shouldPropagateTokenAuth = {{ shouldPropagateTokenAuth|json_encode|raw }};
    {{ postEvent(\"Template.jsGlobalVariables\") }}
</script>

", "_jsGlobalVariables.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/_jsGlobalVariables.twig");
    }
}
