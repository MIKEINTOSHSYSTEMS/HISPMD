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

/* dashboard.twig */
class __TwigTemplate_81561591272af8ef026ddb7492363867 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 7, $this->source); })());
            yield " - ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_WebAnalyticsReports"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["bodyClass"] = $this->env->getFunction('postEvent')->getCallable()("Template.bodyClass", "dashboard");
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "dashboard.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 9
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Web Analytics report for ";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 9, $this->source); })()), "html_attr");
        yield " - Matomo";
        return; yield '';
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield $this->env->getFunction('postEvent')->getCallable()("Template.header", "dashboard");
        yield "
    ";
        // line 15
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    ";
        // line 16
        yield $this->env->getFunction('postEvent')->getCallable()("Template.footer", "dashboard");
        yield "
";
        return; yield '';
    }

    // line 19
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "dashboard.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_topScreen.twig", "dashboard.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>
        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('topcontrols', $context, $blocks);
        // line 27
        yield "
    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 32
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        yield "\"/>
    </div>

    ";
        // line 35
        yield $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "dashboard", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 35, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 35, $this->source); })()));
        yield "

    <div class=\"page\">

        ";
        // line 39
        if ((array_key_exists("showMenu", $context) && (isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div vue-entry=\"CoreHome.ReportingMenu\"></div>
            </div>
        ";
        }
        // line 44
        yield "
        <div class=\"pageWrap\">

            <a name=\"main\"></a>
            ";
        // line 48
        yield from $this->unwrap()->yieldBlock('notification', $context, $blocks);
        // line 51
        yield "
            <div vue-entry=\"CoreHome.Comparisons\"></div>

            ";
        // line 54
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 56
        yield "
            <div class=\"clear\"></div>
        </div>

    </div>

";
        // line 62
        if ((array_key_exists("whatisnewShow", $context) && (isset($context["whatisnewShow"]) || array_key_exists("whatisnewShow", $context) ? $context["whatisnewShow"] : (function () { throw new RuntimeError('Variable "whatisnewShow" does not exist.', 62, $this->source); })()))) {
            // line 63
            yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            const tooltip = '";
            // line 65
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_WhatIsNewTooltip"), "html", null, true);
            yield "';
            window.Piwik_Popover.createPopupAndLoadUrl('module=CoreAdminHome&action=whatIsNew', tooltip.replace(/&#039;/g,\"'\"), 'what-is-new-popup');
        });
    </script>
";
        }
        // line 70
        yield "
";
        return; yield '';
    }

    // line 25
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 48
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "                ";
        yield from         $this->loadTemplate("@CoreHome/_notifications.twig", "dashboard.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "            ";
        return; yield '';
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard.twig";
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
        return array (  213 => 54,  208 => 50,  205 => 49,  201 => 48,  193 => 25,  187 => 70,  179 => 65,  175 => 63,  173 => 62,  165 => 56,  163 => 54,  158 => 51,  156 => 48,  150 => 44,  144 => 40,  142 => 39,  135 => 35,  129 => 32,  122 => 27,  120 => 25,  115 => 22,  112 => 21,  109 => 20,  105 => 19,  98 => 16,  94 => 15,  89 => 14,  85 => 13,  75 => 9,  67 => 4,  63 => 3,  58 => 1,  56 => 11,  49 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ siteName|raw }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}{% endset %}

{% block pageDescription %}Web Analytics report for {{ siteName|escape(\"html_attr\") }} - Matomo{% endblock %}

{% set bodyClass = postEvent('Template.bodyClass', 'dashboard') %}

{% block body %}
    {{ postEvent(\"Template.header\", \"dashboard\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"dashboard\") }}
{% endblock %}

{% block root %}
    {% include \"@CoreHome/_warningInvalidHost.twig\" %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>
        {% block topcontrols %}
        {% endblock %}

    </div>

    <div class=\"ui-confirm\" id=\"alert\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
    </div>

    {{ postEvent(\"Template.beforeContent\", \"dashboard\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is defined and showMenu %}
            <div id=\"secondNavBar\" class=\"Menu--dashboard z-depth-1\">
                <div vue-entry=\"CoreHome.ReportingMenu\"></div>
            </div>
        {% endif %}

        <div class=\"pageWrap\">

            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}

            <div vue-entry=\"CoreHome.Comparisons\"></div>

            {% block content %}
            {% endblock %}

            <div class=\"clear\"></div>
        </div>

    </div>

{% if whatisnewShow is defined and whatisnewShow %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function(event) {
            const tooltip = '{{ 'CoreAdminHome_WhatIsNewTooltip'|translate }}';
            window.Piwik_Popover.createPopupAndLoadUrl('module=CoreAdminHome&action=whatIsNew', tooltip.replace(/&#039;/g,\"'\"), 'what-is-new-popup');
        });
    </script>
{% endif %}

{% endblock %}
", "dashboard.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/dashboard.twig");
    }
}
