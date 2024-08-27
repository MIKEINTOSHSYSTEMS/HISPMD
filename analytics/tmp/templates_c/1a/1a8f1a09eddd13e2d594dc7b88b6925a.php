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

/* @Insights/moversAndShakersOverviewWidget.twig */
class __TwigTemplate_9b8cb002222df8d37a48c34d080fac29 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 1, $this->source); })()), "getRowsCount", [], "any", false, false, false, 1)) {
            // line 2
            yield "    ";
            $context["allMetadata"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 2, $this->source); })()), "getFirstRow", [], "any", false, false, false, 2), "getAllTableMetadata", [], "any", false, false, false, 2);
            // line 3
            yield "
    ";
            // line 4
            $context["consideredGrowth"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleConsideredMoversAndShakersGrowth", CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "metricName", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "lastTotalValue", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "totalValue", [], "any", false, false, false, 4), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "lastDate", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "period", [], "any", false, false, false, 4)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 4, $this->source); })()), "evolutionTotal", [], "any", false, false, false, 4));
            // line 5
            yield "    ";
            $context["consideredChanges"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleConsideredMoversAndShakersChanges", CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minGrowthPercentPositive", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minGrowthPercentNegative", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minNewPercent", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minIncreaseNew", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minDisappearedPercent", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "minDecreaseDisappeared", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 5, $this->source); })()), "totalValue", [], "any", false, false, false, 5));
        } else {
            // line 7
            yield "    ";
            $context["allMetadata"] = [];
            // line 8
            yield "
    ";
            // line 9
            $context["consideredGrowth"] = "";
            // line 10
            yield "    ";
            $context["consideredChanges"] = "";
        }
        // line 12
        yield "
";
        // line 13
        yield from         $this->loadTemplate("@Insights/overviewWidget.twig", "@Insights/moversAndShakersOverviewWidget.twig", 13)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Insights/moversAndShakersOverviewWidget.twig";
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
        return array (  67 => 13,  64 => 12,  60 => 10,  58 => 9,  55 => 8,  52 => 7,  48 => 5,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reports.getRowsCount %}
    {% set allMetadata = reports.getFirstRow.getAllTableMetadata %}

    {% set consideredGrowth = 'Insights_TitleConsideredMoversAndShakersGrowth'|translate(allMetadata.metricName, allMetadata.lastTotalValue, allMetadata.totalValue, allMetadata.lastDate|prettyDate(allMetadata.period), allMetadata.evolutionTotal) %}
    {% set consideredChanges = 'Insights_TitleConsideredMoversAndShakersChanges'|translate(allMetadata.minGrowthPercentPositive, allMetadata.minGrowthPercentNegative, allMetadata.minNewPercent, allMetadata.minIncreaseNew, allMetadata.minDisappearedPercent, allMetadata.minDecreaseDisappeared, allMetadata.totalValue) %}
{% else %}
    {% set allMetadata = {} %}

    {% set consideredGrowth = '' %}
    {% set consideredChanges = '' %}
{% endif %}

{% include \"@Insights/overviewWidget.twig\" %}", "@Insights/moversAndShakersOverviewWidget.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Insights/templates/moversAndShakersOverviewWidget.twig");
    }
}
