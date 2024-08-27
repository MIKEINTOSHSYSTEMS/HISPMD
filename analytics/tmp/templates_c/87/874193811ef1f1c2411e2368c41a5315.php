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

/* @Referrers/_visitorDetails.twig */
class __TwigTemplate_4e8170e25429d5d50873a780934bbce0 extends Template
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
        yield "<div class=\"visitorReferrer ";
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 1), "html", null, true);
        yield "\">
    ";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 2) == "website")) {
            // line 3
            yield "        <span>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnWebsite"), "html", null, true);
            yield ":</span>
        <a href=\"";
            // line 4
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", ["referrerUrl"], "method", false, false, false, 4)), "html_attr");
            yield "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", ["referrerUrl"], "method", false, false, false, 4), "html", null, true);
            yield "\"
           style=\"text-decoration:underline;\">
            ";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 6), "html", null, true);
            yield "
        </a>
    ";
        }
        // line 9
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 9) == "campaign")) {
            // line 10
            yield "        <span>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnCampaign"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 10), "html", null, true);
            yield "
            ";
            // line 11
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 11))) {
                yield " - ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 11), "html", null, true);
            }
            yield "</span>
    ";
        }
        // line 13
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 13, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 13) == "social")) {
            // line 14
            yield "        <span>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnSocial"), "html", null, true);
            yield ":</span>
        ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", ["referrerSearchEngineIcon"], "method", false, false, false, 15)) {
                // line 16
                yield "            <img width=\"16\" src=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", ["referrerSocialNetworkIcon"], "method", false, false, false, 16), "html", null, true);
                yield "\" alt=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 16), "html", null, true);
                yield "\"/>
        ";
            }
            // line 18
            yield "        <a href=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", ["referrerUrl"], "method", false, false, false, 18)), "html_attr");
            yield "\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", ["referrerUrl"], "method", false, false, false, 18), "html", null, true);
            yield "\"
           style=\"text-decoration:underline;\">
            ";
            // line 20
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 20, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 20), "html", null, true);
            yield "
        </a>
    ";
        }
        // line 23
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 23, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 23) == "search")) {
            // line 24
            $context["keywordNotDefined"] = $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("General_ColumnKeyword"));
            // line 25
            $context["showKeyword"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 25, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 25)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 25, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 25) != (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 25, $this->source); })())));
            // line 26
            yield "<span ";
            if ( !(isset($context["showKeyword"]) || array_key_exists("showKeyword", $context) ? $context["showKeyword"] : (function () { throw new RuntimeError('Variable "showKeyword" does not exist.', 26, $this->source); })())) {
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 26, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">
        ";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 27, $this->source); })()), "getColumn", ["referrerSearchEngineIcon"], "method", false, false, false, 27)) {
                // line 28
                yield "            <img width=\"16\" src=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 28, $this->source); })()), "getColumn", ["referrerSearchEngineIcon"], "method", false, false, false, 28), "html", null, true);
                yield "\" alt=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 28, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 28), "html", null, true);
                yield "\"/>
        ";
            }
            // line 30
            yield "            <span>";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 30, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 30), "html", null, true);
            yield "</span>";
            // line 31
            if ((isset($context["showKeyword"]) || array_key_exists("showKeyword", $context) ? $context["showKeyword"] : (function () { throw new RuntimeError('Variable "showKeyword" does not exist.', 31, $this->source); })())) {
                yield "<span>, ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_Keywords"), "html", null, true);
                yield ":</span>
            <a href=\"";
                // line 32
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 32, $this->source); })()), "getColumn", ["referrerUrl"], "method", false, false, false, 32)), "html_attr");
                yield "\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"";
                // line 33
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 33, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 33), "html", null, true);
                yield "\"</a>
        ";
            }
            // line 35
            yield "        ";
            $context["keyword"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 35, $this->source); })()), "getColumn", ["referrerKeyword"], "method", false, false, false, 35), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            yield "        ";
            $context["searchName"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 36, $this->source); })()), "getColumn", ["referrerName"], "method", false, false, false, 36), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            yield "        ";
            $context["position"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "#";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 37, $this->source); })()), "getColumn", ["referrerKeywordPosition"], "method", false, false, false, 37), "html", null, true);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 38, $this->source); })()), "getColumn", ["referrerKeywordPosition"], "method", false, false, false, 38)) {
                // line 39
                yield "            <span title='";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_KeywordRankedOnSearchResultForThisVisitor", (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 39, $this->source); })()), (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 39, $this->source); })()), (isset($context["searchName"]) || array_key_exists("searchName", $context) ? $context["searchName"] : (function () { throw new RuntimeError('Variable "searchName" does not exist.', 39, $this->source); })())), "html", null, true);
                yield "' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                ";
                // line 41
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 41, $this->source); })()), "getColumn", ["referrerKeywordPosition"], "method", false, false, false, 41), "html", null, true);
                yield "
                        </span>
        ";
            }
            // line 44
            yield "        </span>
    ";
        }
        // line 46
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 46, $this->source); })()), "getColumn", ["referrerType"], "method", false, false, false, 46) == "direct")) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_DirectEntry"), "html", null, true);
        }
        // line 47
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Referrers/_visitorDetails.twig";
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
        return array (  201 => 47,  196 => 46,  192 => 44,  186 => 41,  180 => 39,  177 => 38,  170 => 37,  164 => 36,  158 => 35,  153 => 33,  149 => 32,  143 => 31,  139 => 30,  131 => 28,  129 => 27,  120 => 26,  118 => 25,  116 => 24,  113 => 23,  107 => 20,  99 => 18,  91 => 16,  89 => 15,  84 => 14,  81 => 13,  73 => 11,  66 => 10,  63 => 9,  57 => 6,  50 => 4,  45 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitorReferrer {{ visitInfo.getColumn('referrerType') }}\">
    {% if visitInfo.getColumn('referrerType') == 'website' %}
        <span>{{ 'Referrers_ColumnWebsite'|translate }}:</span>
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'campaign' %}
        <span>{{ 'Referrers_ColumnCampaign'|translate }}: {{ visitInfo.getColumn('referrerName') }}
            {% if visitInfo.getColumn('referrerKeyword') is not empty %} - {{ visitInfo.getColumn('referrerKeyword') }}{% endif %}</span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'social' %}
        <span>{{ 'Referrers_ColumnSocial'|translate }}:</span>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSocialNetworkIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'search' %}
        {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
        {%- set showKeyword = visitInfo.getColumn('referrerKeyword') is not empty and visitInfo.getColumn('referrerKeyword') != keywordNotDefined -%}
        <span {% if not showKeyword %}title=\"{{ keywordNotDefined }}\"{% endif %}>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSearchEngineIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
            <span>{{ visitInfo.getColumn('referrerName') }}</span>
        {%- if showKeyword %}<span>, {{ 'Referrers_Keywords'|translate }}:</span>
            <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"{{ visitInfo.getColumn('referrerKeyword') }}\"</a>
        {% endif %}
        {% set keyword %}{{ visitInfo.getColumn('referrerKeyword') }}{% endset %}
        {% set searchName %}{{ visitInfo.getColumn('referrerName') }}{% endset %}
        {% set position %}#{{ visitInfo.getColumn('referrerKeywordPosition') }}{% endset %}
        {% if visitInfo.getColumn('referrerKeywordPosition') %}
            <span title='{{ 'Live_KeywordRankedOnSearchResultForThisVisitor'|translate(keyword,position,searchName) }}' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                {{ visitInfo.getColumn('referrerKeywordPosition') }}
                        </span>
        {% endif %}
        </span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'direct' %}{{ 'Referrers_DirectEntry'|translate }}{% endif %}
</div>
", "@Referrers/_visitorDetails.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Referrers/templates/_visitorDetails.twig");
    }
}
