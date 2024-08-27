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

/* @Live/_actionTooltip.twig */
class __TwigTemplate_3993ff02e04e628a7a3f364d4db09351 extends Template
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
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "serverTimePretty", [], "any", false, false, false, 1), "html", null, true);
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "url", [], "any", true, true, false, 1) && Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "url", [], "any", false, false, false, 1))))) {
            // line 2
            yield "
";
            // line 3
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "url", [], "any", false, false, false, 3), "html", null, true);
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageLoadTime", [], "any", true, true, false, 3)) {
            // line 4
            yield "
";
            // line 5
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PagePerformance_PageLoadTime"), "html", null, true);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "pageLoadTime", [], "any", false, false, false, 5);
        }
        // line 6
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageLoadTime", [], "any", true, true, false, 6) && CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "generationTime", [], "any", true, true, false, 6))) {
            // line 7
            yield "
";
            // line 8
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnGenerationTime"), "html", null, true);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "generationTime", [], "any", false, false, false, 8);
        }
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "timeSpentPretty", [], "any", true, true, false, 10)) {
            // line 11
            yield "
";
            // line 12
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_TimeOnPage"), "html", null, true);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "timeSpentPretty", [], "any", false, false, false, 12);
        }
        // line 13
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCategory", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCategory", [], "any", false, false, false, 13), false)) : (false))) {
            // line 14
            yield "
";
            // line 15
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearchCategory"), "html", null, true);
            yield ": ";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "siteSearchCategory", [], "any", false, false, false, 15));
        }
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCount", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCount", [], "any", false, false, false, 16), false)) : (false))) {
            // line 17
            yield "
";
            // line 18
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearchResultsCount"), "html", null, true);
            yield ": ";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "siteSearchCount", [], "any", false, false, false, 18));
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_actionTooltip.twig";
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
        return array (  91 => 18,  88 => 17,  86 => 16,  81 => 15,  78 => 14,  76 => 13,  71 => 12,  68 => 11,  66 => 10,  61 => 8,  58 => 7,  56 => 6,  51 => 5,  48 => 4,  44 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ action.serverTimePretty }}{% if action.url is defined and action.url|trim|length %}

{{ action.url }}{% endif %}{%- if action.pageLoadTime is defined %}

{{ 'PagePerformance_PageLoadTime'|translate }}: {{ action.pageLoadTime|raw }}{% endif %}
{%- if action.pageLoadTime is not defined and action.generationTime is defined %}

{{ 'General_ColumnGenerationTime'|translate }}: {{ action.generationTime|raw }}{% endif %}

{%- if action.timeSpentPretty is defined %}

{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}{% endif %}
{%- if action.siteSearchCategory|default(false) %}

{{ 'Actions_ColumnSearchCategory'|translate }}: {{ action.siteSearchCategory|rawSafeDecoded }}{% endif %}
{%- if action.siteSearchCount|default(false) %}

{{ 'Actions_ColumnSearchResultsCount'|translate }}: {{ action.siteSearchCount|rawSafeDecoded }}{% endif %}", "@Live/_actionTooltip.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_actionTooltip.twig");
    }
}
