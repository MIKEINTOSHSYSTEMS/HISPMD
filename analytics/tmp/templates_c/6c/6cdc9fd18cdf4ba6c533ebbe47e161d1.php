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

/* @CoreVisualizations/_dataTableViz_jqplotGraph.twig */
class __TwigTemplate_1605f7ad5ff05c04f1c1d0f63bf08a3b extends Template
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
        yield "<div alt=\"";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Mobile_StaticGraph"), "html", null, true);
        yield "\"  class=\"jqplot-graph\">
    <div class=\"piwik-graph\" data-data=\"";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visualization"]) || array_key_exists("visualization", $context) ? $context["visualization"] : (function () { throw new RuntimeError('Variable "visualization" does not exist.', 2, $this->source); })()), "getGraphData", [(isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 2, $this->source); })()), (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 2, $this->source); })())], "method", false, false, false, 2)), "html", null, true);
        yield "\"></div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_jqplotGraph.twig";
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
        return array (  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div alt=\"{{ 'Mobile_StaticGraph'|translate }}\"  class=\"jqplot-graph\">
    <div class=\"piwik-graph\" data-data=\"{{ visualization.getGraphData(dataTable, properties)|json_encode }}\"></div>
</div>
", "@CoreVisualizations/_dataTableViz_jqplotGraph.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreVisualizations/templates/_dataTableViz_jqplotGraph.twig");
    }
}
