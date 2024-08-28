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

/* @MultiSites/getSitesInfo.twig */
class __TwigTemplate_d888c3af75103a3a2ed917642956b5ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 1, $this->source); })())) ? ("empty.twig") : ("dashboard.twig")), "@MultiSites/getSitesInfo.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ( !(isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "        ";
            yield from             $this->loadTemplate("@CoreHome/_periodSelect.twig", "@MultiSites/getSitesInfo.twig", 5)->unwrap()->yield($context);
            // line 6
            yield "        ";
            yield from             $this->loadTemplate("@CoreHome/_headerMessage.twig", "@MultiSites/getSitesInfo.twig", 6)->unwrap()->yield($context);
            // line 7
            yield "    ";
        }
        return; yield '';
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "<div class=\"row\" id=\"multisites\">
    <div class=\"col s12 m12 l10 offset-l1\">
        ";
        // line 13
        if ((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "            <div id=\"main\">
        ";
        } else {
            // line 16
            yield "            <div id=\"main\" class=\"card\">
                <div class=\"card-content\">
        ";
        }
        // line 19
        yield "                <div
                    vue-entry=\"MultiSites.Dashboard\"
                    display-revenue-column=\"";
        // line 21
        if ((isset($context["displayRevenueColumn"]) || array_key_exists("displayRevenueColumn", $context) ? $context["displayRevenueColumn"] : (function () { throw new RuntimeError('Variable "displayRevenueColumn" does not exist.', 21, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\"
                    page-size=\"";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "\"
                    show-sparklines=\"";
        // line 23
        if ((isset($context["show_sparklines"]) || array_key_exists("show_sparklines", $context) ? $context["show_sparklines"] : (function () { throw new RuntimeError('Variable "show_sparklines" does not exist.', 23, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\"
                    date-sparkline=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["dateSparkline"]) || array_key_exists("dateSparkline", $context) ? $context["dateSparkline"] : (function () { throw new RuntimeError('Variable "dateSparkline" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "\"
                    auto-refresh-today-report=\"";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["autoRefreshTodayReport"]) || array_key_exists("autoRefreshTodayReport", $context) ? $context["autoRefreshTodayReport"] : (function () { throw new RuntimeError('Variable "autoRefreshTodayReport" does not exist.', 25, $this->source); })())), "html", null, true);
        yield "\"
                ></div>
        ";
        // line 27
        if ((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "            </div>
        ";
        } else {
            // line 30
            yield "            </div></div>
        ";
        }
        // line 32
        yield "    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MultiSites/getSitesInfo.twig";
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
        return array (  128 => 32,  124 => 30,  120 => 28,  118 => 27,  113 => 25,  109 => 24,  101 => 23,  97 => 22,  89 => 21,  85 => 19,  80 => 16,  76 => 14,  74 => 13,  70 => 11,  66 => 10,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends isWidgetized ? 'empty.twig' : 'dashboard.twig' %}

{% block topcontrols %}
    {% if not isWidgetized %}
        {% include \"@CoreHome/_periodSelect.twig\" %}
        {% include \"@CoreHome/_headerMessage.twig\" %}
    {% endif %}
{% endblock %}

{% block content %}
<div class=\"row\" id=\"multisites\">
    <div class=\"col s12 m12 l10 offset-l1\">
        {% if isWidgetized %}
            <div id=\"main\">
        {% else %}
            <div id=\"main\" class=\"card\">
                <div class=\"card-content\">
        {% endif %}
                <div
                    vue-entry=\"MultiSites.Dashboard\"
                    display-revenue-column=\"{% if displayRevenueColumn %}true{% else %}false{%endif%}\"
                    page-size=\"{{ limit|json_encode }}\"
                    show-sparklines=\"{% if show_sparklines %}true{% else %}false{%endif%}\"
                    date-sparkline=\"{{ dateSparkline|json_encode }}\"
                    auto-refresh-today-report=\"{{ autoRefreshTodayReport|json_encode }}\"
                ></div>
        {% if isWidgetized %}
            </div>
        {% else %}
            </div></div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "@MultiSites/getSitesInfo.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/MultiSites/templates/getSitesInfo.twig");
    }
}
