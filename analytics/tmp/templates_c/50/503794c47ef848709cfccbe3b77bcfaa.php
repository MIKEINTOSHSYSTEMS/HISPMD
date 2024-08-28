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

/* @Insights/insightsOverviewWidget.twig */
class __TwigTemplate_080c33f76f086e9eeb6b9ccea1bd8b9b extends Template
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
            yield "    ";
            $context["consideredGrowth"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleConsideredInsightsGrowth", CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 3, $this->source); })()), "minGrowthPercentPositive", [], "any", false, false, false, 3), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 3, $this->source); })()), "lastDate", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetadata"]) || array_key_exists("allMetadata", $context) ? $context["allMetadata"] : (function () { throw new RuntimeError('Variable "allMetadata" does not exist.', 3, $this->source); })()), "period", [], "any", false, false, false, 3)));
            // line 4
            yield "
";
        } else {
            // line 6
            yield "    ";
            $context["allMetadata"] = [];
            // line 7
            yield "    ";
            $context["consideredGrowth"] = "";
        }
        // line 9
        yield "
";
        // line 10
        $context["consideredChanges"] = "";
        // line 11
        yield "
";
        // line 12
        yield from         $this->loadTemplate("@Insights/overviewWidget.twig", "@Insights/insightsOverviewWidget.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Insights/insightsOverviewWidget.twig";
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
        return array (  67 => 13,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  53 => 7,  50 => 6,  46 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if reports.getRowsCount %}
    {% set allMetadata = reports.getFirstRow.getAllTableMetadata %}
    {% set consideredGrowth  = 'Insights_TitleConsideredInsightsGrowth'|translate(allMetadata.minGrowthPercentPositive, allMetadata.lastDate|prettyDate(allMetadata.period)) %}

{% else %}
    {% set allMetadata = {} %}
    {% set consideredGrowth = '' %}
{% endif %}

{% set consideredChanges = '' %}

{% include \"@Insights/overviewWidget.twig\" %}


", "@Insights/insightsOverviewWidget.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Insights/templates/insightsOverviewWidget.twig");
    }
}
