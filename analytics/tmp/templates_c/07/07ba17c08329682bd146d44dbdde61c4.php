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

/* @Widgetize/index.twig */
class __TwigTemplate_07d664e026475ad72508d498f8168c7c extends Template
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
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Widgets"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Widgetize/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@Widgetize/index.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Widgetize/index.twig", 7)->unwrap()->yield($context);
        return; yield '';
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "
<div>

<div
  vue-entry=\"Widgetize.ExportWidget\"
  title=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 16, $this->source); })()), null)) : (null))), "html_attr");
        yield "\"
></div>
</div>

";
        // line 20
        yield from         $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Widgetize/index.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Widgetize/index.twig";
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
        return array (  87 => 21,  85 => 20,  78 => 16,  71 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  49 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Widgets'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div>

<div
  vue-entry=\"Widgetize.ExportWidget\"
  title=\"{{ title|default(null)|json_encode|e('html_attr') }}\"
></div>
</div>

{% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

{% endblock %}
", "@Widgetize/index.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Widgetize/templates/index.twig");
    }
}
