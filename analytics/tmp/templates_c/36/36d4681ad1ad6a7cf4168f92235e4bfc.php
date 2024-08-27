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

/* @Live/_profileSummaryVisits.twig */
class __TwigTemplate_0dae72b106bd09e19628a867a8596f6c extends Template
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
        yield "<div class=\"visitor-profile-summary visitor-profile-important-visits\">";
        // line 2
        $context["keywordNotDefined"] = $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("General_ColumnKeyword"));
        // line 3
        yield "<div>
        <h1>";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 4, $this->source); })()), "visitsAggregated", [], "any", false, false, false, 4) == 100)) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
            yield "# 100";
        } else {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_FirstVisit"), "html", null, true);
        }
        yield "</h1>
        <div>
            <p><strong>";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "firstVisit", [], "any", false, false, false, 6), "prettyDate", [], "any", false, false, false, 6), "html", null, true);
        yield "</strong>&nbsp;- ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_DaysAgo", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "firstVisit", [], "any", false, false, false, 6), "daysAgo", [], "any", false, false, false, 6)), "html", null, true);
        yield "</p>
            <p>
                ";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_FromReferrer"), "html", null, true);
        yield " <strong ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "firstVisit", [], "any", false, false, false, 8), "referrerType", [], "any", false, false, false, 8) == "search") && !CoreExtension::inFilter("(", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "firstVisit", [], "any", false, false, false, 8), "referralSummary", [], "any", false, false, false, 8)))) {
            yield "title=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 9, $this->source); })()), "firstVisit", [], "any", false, false, false, 9), "referrerType", [], "any", false, false, false, 9) == "website")) {
            // line 10
            yield "                        <a href=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 10, $this->source); })()), "firstVisit", [], "any", false, false, false, 10), "referrerUrl", [], "any", false, false, false, 10)), "html_attr");
            yield "\" target=\"_blank\" rel=\"noreferrer noopener\">
                            ";
            // line 11
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "firstVisit", [], "any", false, false, false, 11), "referralSummary", [], "any", false, false, false, 11), "html", null, true);
            yield "
                        </a>
                    ";
        } else {
            // line 14
            yield "                        ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "firstVisit", [], "any", false, false, false, 14), "referralSummary", [], "any", false, false, false, 14), "html", null, true);
            yield "
                    ";
        }
        // line 16
        yield "                </strong>
            </p>
        </div>
    </div>
    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "lastVisits", [], "any", false, false, false, 20), "getRowsCount", [], "method", false, false, false, 20) != 1)) {
            // line 21
            yield "        <div>
            <h1>";
            // line 22
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LastVisit"), "html", null, true);
            yield "</h1>
            <div>
                <p><strong>";
            // line 24
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "lastVisit", [], "any", false, false, false, 24), "prettyDate", [], "any", false, false, false, 24), "html", null, true);
            yield "</strong>&nbsp;- ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_DaysAgo", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "lastVisit", [], "any", false, false, false, 24), "daysAgo", [], "any", false, false, false, 24)), "html", null, true);
            yield "</p>
                <p>
                    ";
            // line 26
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_FromReferrer"), "html", null, true);
            yield " <strong ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "lastVisit", [], "any", false, false, false, 26), "referrerType", [], "any", false, false, false, 26) == "search") && !CoreExtension::inFilter("(", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "lastVisit", [], "any", false, false, false, 26), "referralSummary", [], "any", false, false, false, 26)))) {
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 26, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 27, $this->source); })()), "lastVisit", [], "any", false, false, false, 27), "referrerType", [], "any", false, false, false, 27) == "website")) {
                // line 28
                yield "                            <a href=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 28, $this->source); })()), "lastVisit", [], "any", false, false, false, 28), "referrerUrl", [], "any", false, false, false, 28)), "html_attr");
                yield "\" target=\"_blank\" rel=\"noreferrer noopener\">
                                ";
                // line 29
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 29, $this->source); })()), "lastVisit", [], "any", false, false, false, 29), "referralSummary", [], "any", false, false, false, 29), "html", null, true);
                yield "
                            </a>
                        ";
            } else {
                // line 32
                yield "                            ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 32, $this->source); })()), "lastVisit", [], "any", false, false, false, 32), "referralSummary", [], "any", false, false, false, 32), "html", null, true);
                yield "
                        ";
            }
            // line 34
            yield "                    </strong>
                </p>
            </div>
        </div>
    ";
        }
        // line 39
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_profileSummaryVisits.twig";
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
        return array (  148 => 39,  141 => 34,  135 => 32,  129 => 29,  124 => 28,  122 => 27,  113 => 26,  106 => 24,  101 => 22,  98 => 21,  96 => 20,  90 => 16,  84 => 14,  78 => 11,  73 => 10,  71 => 9,  62 => 8,  55 => 6,  45 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-important-visits\">
    {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
    <div>
        <h1>{% if visitorData.visitsAggregated == 100 %}{{ 'General_Visit'|translate }}# 100{% else %}{{ 'Live_FirstVisit'|translate }}{% endif %}</h1>
        <div>
            <p><strong>{{ visitorData.firstVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.firstVisit.daysAgo) }}</p>
            <p>
                {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.firstVisit.referrerType == 'search' and '(' not in visitorData.firstVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                    {%- if visitorData.firstVisit.referrerType == 'website' %}
                        <a href=\"{{ visitorData.firstVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                            {{ visitorData.firstVisit.referralSummary }}
                        </a>
                    {% else %}
                        {{ visitorData.firstVisit.referralSummary }}
                    {% endif %}
                </strong>
            </p>
        </div>
    </div>
    {% if visitorData.lastVisits.getRowsCount() != 1 %}
        <div>
            <h1>{{ 'Live_LastVisit'|translate }}</h1>
            <div>
                <p><strong>{{ visitorData.lastVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.lastVisit.daysAgo) }}</p>
                <p>
                    {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.lastVisit.referrerType == 'search' and '(' not in visitorData.lastVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                        {%- if visitorData.lastVisit.referrerType == 'website' %}
                            <a href=\"{{ visitorData.lastVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                                {{ visitorData.lastVisit.referralSummary }}
                            </a>
                        {% else %}
                            {{ visitorData.lastVisit.referralSummary }}
                        {% endif %}
                    </strong>
                </p>
            </div>
        </div>
    {% endif %}
</div>", "@Live/_profileSummaryVisits.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_profileSummaryVisits.twig");
    }
}
