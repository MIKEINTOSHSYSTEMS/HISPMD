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

/* ajaxMacros.twig */
class __TwigTemplate_739f089a5f9686145065f8452ed49b95 extends Template
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
        // line 4
        yield "
";
        // line 15
        yield "
";
        return; yield '';
    }

    // line 1
    public function macro_errorDiv($__id__ = "ajaxError", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    <div id=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\" style=\"display:none\"></div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function macro_loadingDiv($__id__ = "ajaxLoadingDiv", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "<div id=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"";
            // line 8
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            yield "\" />";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            yield "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_LoadingSegmentedDataMayTakeSomeTime"), "html", null, true);
            yield "
    </div>
</div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function macro_requestErrorDiv($__contactEmail__ = null, $__areAdsForProfessionalServicesEnabled__ = false, $__currentModule__ = "", $__showMoreHelp__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "contactEmail" => $__contactEmail__,
            "areAdsForProfessionalServicesEnabled" => $__areAdsForProfessionalServicesEnabled__,
            "currentModule" => $__currentModule__,
            "showMoreHelp" => $__showMoreHelp__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">
            ";
            // line 19
            if ((array_key_exists("contactEmail", $context) && (isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 19, $this->source); })()))) {
                // line 20
                yield "                ";
                yield $this->env->getFilter('translate')->getCallable()("General_ErrorRequest", (("<a href=\"mailto:" . \Piwik\piwik_escape_filter($this->env, (isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 20, $this->source); })()), "url")) . "\">"), "</a>");
                yield "
            ";
            } else {
                // line 22
                yield "                ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ErrorRequest", "", ""), "html", null, true);
                yield "
            ";
            }
            // line 24
            yield "
            <br /><br />
            ";
            // line 26
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NeedMoreHelp"), "html", null, true);
            yield "

            ";
            // line 28
            if ((isset($context["showMoreHelp"]) || array_key_exists("showMoreHelp", $context) ? $context["showMoreHelp"] : (function () { throw new RuntimeError('Variable "showMoreHelp" does not exist.', 28, $this->source); })())) {
                // line 29
                yield "            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/faq/troubleshooting/faq_19489/"), "html", null, true);
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Faq"), "html", null, true);
                yield "</a> –
            ";
            }
            // line 31
            yield "            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://forum.matomo.org/"), "html", null, true);
            yield "\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityHelp"), "html", null, true);
            yield "</a>";
            // line 33
            if ((isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 33, $this->source); })())) {
                // line 34
                yield "                –
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                // line 35
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/support-plans", null, null, "AjaxError"), "html", null, true);
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalHelp"), "html", null, true);
                yield "</a>";
            }
            // line 36
            yield ".
        </div>
    </div>
    <div id=\"loadingRateLimitError\" style=\"display: none\">
        <div class=\"alert alert-danger\">
            ";
            // line 41
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ErrorRateLimit"), "html", null, true);
            yield "

            <br /><br />
            ";
            // line 44
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NeedMoreHelp"), "html", null, true);
            yield "

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            // line 46
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://forum.matomo.org/"), "html", null, true);
            yield "\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityHelp"), "html", null, true);
            yield "</a>";
            // line 48
            if ((isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 48, $this->source); })())) {
                // line 49
                yield "            –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                // line 50
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/support-plans", null, null, "AjaxError"), "html", null, true);
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalHelp"), "html", null, true);
                yield "</a>";
            }
            // line 51
            yield ".
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ajaxMacros.twig";
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
        return array (  207 => 51,  201 => 50,  198 => 49,  196 => 48,  191 => 46,  186 => 44,  180 => 41,  173 => 36,  167 => 35,  164 => 34,  162 => 33,  156 => 31,  148 => 29,  146 => 28,  141 => 26,  137 => 24,  131 => 22,  125 => 20,  123 => 19,  119 => 17,  104 => 16,  94 => 11,  86 => 8,  80 => 6,  68 => 5,  59 => 2,  47 => 1,  41 => 15,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorDiv(id='ajaxError') %}
    <div id=\"{{ id }}\" style=\"display:none\"></div>
{% endmacro %}

{% macro loadingDiv(id='ajaxLoadingDiv') %}
<div id=\"{{ id }}\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"{{ 'General_LoadingData'|translate }}\" />{{ 'General_LoadingData'|translate }}
    </div>
    <div class=\"loadingSegment\">
        {{ 'SegmentEditor_LoadingSegmentedDataMayTakeSomeTime'|translate }}
    </div>
</div>
{% endmacro %}

{% macro requestErrorDiv(contactEmail, areAdsForProfessionalServicesEnabled = false, currentModule = '', showMoreHelp = false) %}
    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">
            {% if contactEmail is defined and contactEmail %}
                {{ 'General_ErrorRequest'|translate('<a href=\"mailto:' ~ contactEmail|e('url') ~ '\">', '</a>')|raw }}
            {% else %}
                {{ 'General_ErrorRequest'|translate('', '') }}
            {% endif %}

            <br /><br />
            {{ 'General_NeedMoreHelp'|translate }}

            {% if showMoreHelp %}
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ 'https://matomo.org/faq/troubleshooting/faq_19489/'|trackmatomolink }}\">{{ 'General_Faq'|translate }}</a> –
            {% endif %}
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ 'https://forum.matomo.org/'|trackmatomolink }}\">{{ 'Feedback_CommunityHelp'|translate }}</a>

            {%- if areAdsForProfessionalServicesEnabled %}
                –
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ 'https://matomo.org/support-plans'|trackmatomolink(null, null, 'AjaxError')}}\">{{ 'Feedback_ProfessionalHelp'|translate }}</a>
            {%- endif %}.
        </div>
    </div>
    <div id=\"loadingRateLimitError\" style=\"display: none\">
        <div class=\"alert alert-danger\">
            {{ 'General_ErrorRateLimit'|translate }}

            <br /><br />
            {{ 'General_NeedMoreHelp'|translate }}

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ 'https://forum.matomo.org/'|trackmatomolink }}\">{{ 'Feedback_CommunityHelp'|translate }}</a>

            {%- if areAdsForProfessionalServicesEnabled %}
            –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ 'https://matomo.org/support-plans'|trackmatomolink(null, null, 'AjaxError')}}\">{{ 'Feedback_ProfessionalHelp'|translate }}</a>
            {%- endif %}.
        </div>
    </div>
{% endmacro %}
", "ajaxMacros.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/ajaxMacros.twig");
    }
}
