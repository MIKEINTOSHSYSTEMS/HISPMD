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

/* @Insights/table_row.twig */
class __TwigTemplate_47026a7562125d307a96144b6cdef4e7 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 1, $this->source); })()), "getColumn", ["isDisappeared"], "method", false, false, false, 1)) {
            // line 2
            yield "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowDisappearedDetails", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "getColumn", ["label"], "method", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "getColumn", ["value_old"], "method", false, false, false, 2), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "date", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "period", [], "any", false, false, false, 2)), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "lastDate", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "period", [], "any", false, false, false, 2)));
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 3
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getColumn", ["isNew"], "method", false, false, false, 3)) {
            // line 4
            yield "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowNewDetails", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getColumn", ["label"], "method", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getColumn", ["value_new"], "method", false, false, false, 4), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "lastDate", [], "any", false, false, false, 4), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "period", [], "any", false, false, false, 4)));
        } else {
            // line 6
            yield "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowChangeDetails", CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", ["label"], "method", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", ["value_old"], "method", false, false, false, 6), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "lastDate", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "period", [], "any", false, false, false, 6)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", ["value_new"], "method", false, false, false, 6), $this->env->getFilter('prettyDate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "period", [], "any", false, false, false, 6)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "metricName", [], "any", false, false, false, 6));
        }
        // line 8
        yield "
";
        // line 9
        $context["rowTitleShaker"] = "";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 10, $this->source); })()), "getColumn", ["isMoverAndShaker"], "method", false, false, false, 10)) {
            // line 11
            yield "    ";
            $context["rowTitleShaker"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowMoverAndShaker");
        }
        // line 13
        yield "
<tr title=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["rowTitle"]) || array_key_exists("rowTitle", $context) ? $context["rowTitle"] : (function () { throw new RuntimeError('Variable "rowTitle" does not exist.', 14, $this->source); })()), "html_attr");
        yield " ";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["rowTitleShaker"]) || array_key_exists("rowTitleShaker", $context) ? $context["rowTitleShaker"] : (function () { throw new RuntimeError('Variable "rowTitleShaker" does not exist.', 14, $this->source); })()), "html_attr");
        yield "\"
    class=\"";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 15, $this->source); })()), "getColumn", ["isMoverAndShaker"], "method", false, false, false, 15)) {
            yield "isMoverAndShaker";
        }
        yield "\">
    <td class=\"label\">
        <span class=\"title\">
            ";
        // line 18
        yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 18, $this->source); })()), "getColumn", ["label"], "method", false, false, false, 18));
        yield "
        </span>
    </td>

    ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 22, $this->source); })()), "getColumn", ["grown"], "method", false, false, false, 22)) {
            // line 23
            yield "        <td class=\"column\">+";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 23, $this->source); })()), "getColumn", ["difference"], "method", false, false, false, 23), "html", null, true);
            yield "</td>
        <td class=\"column grown\">+";
            // line 24
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 24, $this->source); })()), "getColumn", ["growth_percent"], "method", false, false, false, 24), "html", null, true);
            yield "</td>
    ";
        } else {
            // line 26
            yield "        <td class=\"column\">";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getColumn", ["difference"], "method", false, false, false, 26), "html", null, true);
            yield "</td>
        <td class=\"column notGrown\">";
            // line 27
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 27, $this->source); })()), "getColumn", ["growth_percent"], "method", false, false, false, 27), "html", null, true);
            yield "</td>
    ";
        }
        // line 29
        yield "</tr>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Insights/table_row.twig";
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
        return array (  110 => 29,  105 => 27,  100 => 26,  95 => 24,  90 => 23,  88 => 22,  81 => 18,  73 => 15,  67 => 14,  64 => 13,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if row.getColumn('isDisappeared') %}
    {% set rowTitle = 'Insights_TitleRowDisappearedDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.date|prettyDate(metadata.period), metadata.lastDate|prettyDate(metadata.period)) %}
{% elseif row.getColumn('isNew') %}
    {% set rowTitle = 'Insights_TitleRowNewDetails'|translate(row.getColumn('label'), row.getColumn('value_new'), metadata.lastDate|prettyDate(metadata.period)) %}
{% else %}
    {% set rowTitle = 'Insights_TitleRowChangeDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.lastDate|prettyDate(metadata.period), row.getColumn('value_new'), metadata.date|prettyDate(metadata.period), metadata.metricName) %}
{% endif %}

{% set rowTitleShaker = '' %}
{% if row.getColumn('isMoverAndShaker') %}
    {% set rowTitleShaker = 'Insights_TitleRowMoverAndShaker'|translate %}
{% endif %}

<tr title=\"{{ rowTitle|e('html_attr') }} {{ rowTitleShaker|e('html_attr') }}\"
    class=\"{% if row.getColumn('isMoverAndShaker') %}isMoverAndShaker{% endif %}\">
    <td class=\"label\">
        <span class=\"title\">
            {{ row.getColumn('label')|rawSafeDecoded }}
        </span>
    </td>

    {% if row.getColumn('grown') %}
        <td class=\"column\">+{{ row.getColumn('difference') }}</td>
        <td class=\"column grown\">+{{ row.getColumn('growth_percent') }}</td>
    {% else %}
        <td class=\"column\">{{ row.getColumn('difference') }}</td>
        <td class=\"column notGrown\">{{ row.getColumn('growth_percent') }}</td>
    {% endif %}
</tr>", "@Insights/table_row.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Insights/templates/table_row.twig");
    }
}
