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

/* @CoreHome/_dataTableCell.twig */
class __TwigTemplate_e4393845b7002f97a0480405936e8ce9 extends Template
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
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            $context["tooltipIndex"] = ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()) . "_tooltip");
            // line 3
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [(isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3)) {
                yield "<span class=\"cell-tooltip\" data-tooltip=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [(isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
                yield "\">";
            }
            // line 4
            if ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 4) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()) == "label")) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getMetadata", ["url"], "method", false, false, false, 4))) {
                // line 5
                yield "    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='";
                // line 7
                if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", ["url"], "method", false, false, false, 7), 0, 4), ["http", "ftp:"])) {
                    yield "http://";
                }
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", ["url"], "method", false, false, false, 7));
                yield "'>
";
            }
            // line 9
            yield "
";
            // line 10
            $context["totals"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 10, $this->source); })()), "getMetadata", ["totals"], "method", false, false, false, 10);
            // line 11
            $context["labelColumn"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["columns_to_display"]) || array_key_exists("columns_to_display", $context) ? $context["columns_to_display"] : (function () { throw new RuntimeError('Variable "columns_to_display" does not exist.', 11, $this->source); })()));
            // line 12
            $context["reportLabel"] = $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('truncate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 12, $this->source); })()), "getColumn", [(isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 12, $this->source); })())], "method", false, false, false, 12), 40));
            // line 13
            yield from             $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "@CoreHome/_dataTableCell.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["label" =>             // line 14
(isset($context["reportLabel"]) || array_key_exists("reportLabel", $context) ? $context["reportLabel"] : (function () { throw new RuntimeError('Variable "reportLabel" does not exist.', 14, $this->source); })()), "labelColumn" =>             // line 15
(isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 15, $this->source); })()), "translations" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 16, $this->source); })()), "translations", [], "any", false, false, false, 16)]));
            // line 18
            yield "
";
            // line 19
            $context["dimensions"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", ["dimensions"], "method", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", ["dimensions"], "method", false, false, false, 19), [])) : ([]));
            // line 20
            if ((((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()) == "label") || CoreExtension::inFilter((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 20, $this->source); })())))) {
                // line 21
                yield "    ";
                $macros["piwik"] = $this->macros["piwik"] = $this->loadTemplate("macros.twig", "@CoreHome/_dataTableCell.twig", 21)->unwrap();
                // line 22
                yield "
    <span class='label";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 23, $this->source); })()), "getMetadata", ["is_aggregate"], "method", false, false, false, 23)) {
                    yield " highlighted";
                }
                yield "'
    ";
                // line 24
                if ((array_key_exists("properties", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 24)))) {
                    yield "title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 24, $this->source); })()), "getMetadata", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 24)], "method", false, false, false, 24), "html", null, true);
                    yield "\"";
                }
                yield ">
        ";
                // line 25
                if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 25, $this->source); })()) == "label")) {
                    // line 26
                    yield "            ";
                    if ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 26) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", ["url"], "method", false, false, false, 26)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", ["logo"], "method", false, false, false, 26))) {
                        // line 27
                        yield "                <span class=\"icon-outlink\"></span>
            ";
                    } else {
                        // line 29
                        yield "                ";
                        yield CoreExtension::callMacro($macros["piwik"], "macro_logoHtml", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getMetadata", [], "method", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getColumn", ["label"], "method", false, false, false, 29)], 29, $context, $this->getSourceContext());
                        yield "
            ";
                    }
                    // line 31
                    yield "        ";
                }
                // line 32
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), "getMetadata", ["html_label_prefix"], "method", false, false, false, 32)) {
                    yield "<span class='label-prefix'>";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), "getMetadata", ["html_label_prefix"], "method", false, false, false, 32);
                    yield "&nbsp;</span>";
                }
            }
            // line 33
            yield "<span class=\"value\">";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) || (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "label") && ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) === "0") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) === 0))))) {
                if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "label")) {
                    yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34));
                } else {
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [(("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_prefix")], "method", false, false, false, 34)) {
                        yield "<span class='column-prefix'>";
                        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [(("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_prefix")], "method", false, false, false, 34);
                        yield "</span>";
                    }
                    yield $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34), 2, 0));
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [(("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_suffix")], "method", false, false, false, 34)) {
                        yield "<span class='column-suffix'>";
                        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [(("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_suffix")], "method", false, false, false, 34);
                        yield "</span>";
                    }
                }
            } else {
                // line 35
                yield "-";
            }
            // line 36
            yield "</span>
";
            // line 37
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 37, $this->source); })()) == "label")) {
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 37, $this->source); })()), "getMetadata", ["html_label_suffix"], "method", false, false, false, 37)) {
                    yield "<span class='label-suffix'>";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 37, $this->source); })()), "getMetadata", ["html_label_suffix"], "method", false, false, false, 37);
                    yield "</span>";
                }
                yield "</span>";
            }
            // line 38
            if ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 38, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 38) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 38, $this->source); })()) == "label")) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 38, $this->source); })()), "getMetadata", ["url"], "method", false, false, false, 38))) {
                // line 39
                yield "    </a>
";
            }
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 41, $this->source); })()), "getMetadata", [(isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 41, $this->source); })())], "method", false, false, false, 41)) {
                yield "</span>";
            }
            // line 42
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTableCell.twig";
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
        return array (  179 => 1,  174 => 42,  170 => 41,  166 => 39,  164 => 38,  155 => 37,  152 => 36,  149 => 35,  131 => 34,  129 => 33,  121 => 32,  118 => 31,  112 => 29,  108 => 27,  105 => 26,  103 => 25,  95 => 24,  89 => 23,  86 => 22,  83 => 21,  81 => 20,  79 => 19,  76 => 18,  74 => 16,  73 => 15,  72 => 14,  71 => 13,  69 => 12,  67 => 11,  65 => 10,  62 => 9,  54 => 7,  50 => 5,  48 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set tooltipIndex = column ~ '_tooltip' %}
{% if row.getMetadata(tooltipIndex) %}<span class=\"cell-tooltip\" data-tooltip=\"{{ row.getMetadata(tooltipIndex) }}\">{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='{% if row.getMetadata('url')|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ row.getMetadata('url')|rawSafeDecoded }}'>
{% endif %}

{% set totals = dataTable.getMetadata('totals') %}
{% set labelColumn   = columns_to_display|first %}
{% set reportLabel   = row.getColumn(labelColumn)|truncate(40)|rawSafeDecoded %}
{% include \"@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig\" with {
    'label': reportLabel,
    'labelColumn': labelColumn,
    'translations': properties.translations
} %}

{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
{% if column=='label' or column in dimensions %}
    {% import 'macros.twig' as piwik %}

    <span class='label{% if row.getMetadata('is_aggregate') %} highlighted{% endif %}'
    {% if properties is defined and properties.tooltip_metadata_name is not empty %}title=\"{{ row.getMetadata(properties.tooltip_metadata_name) }}\"{% endif %}>
        {% if column=='label' %}
            {% if not row.getIdSubDataTable() and row.getMetadata('url') and not row.getMetadata('logo') %}
                <span class=\"icon-outlink\"></span>
            {% else %}
                {{ piwik.logoHtml(row.getMetadata(), row.getColumn('label')) }}
            {% endif %}
        {% endif %}
        {% if row.getMetadata('html_label_prefix') %}<span class='label-prefix'>{{ row.getMetadata('html_label_prefix') | raw }}&nbsp;</span>{% endif -%}
{% endif %}<span class=\"value\">
    {%- if row.getColumn(column) or (column=='label' and (row.getColumn(column) is same as(\"0\") or row.getColumn(column) is same as(0))) %}{% if column=='label' %}{{- row.getColumn(column)|rawSafeDecoded -}}{% else %}{% if row.getMetadata('html_column_' ~ column ~ '_prefix') %}<span class='column-prefix'>{{ row.getMetadata('html_column_' ~ column ~ '_prefix') | raw }}</span>{% endif -%}{{- row.getColumn(column)|number(2,0)|rawSafeDecoded -}}{% if row.getMetadata('html_column_' ~ column ~ '_suffix') %}<span class='column-suffix'>{{ row.getMetadata('html_column_' ~ column ~ '_suffix') | raw }}</span>{% endif -%}{% endif %}
    {%- else -%}-
    {%- endif -%}</span>
{% if column=='label' %}{%- if row.getMetadata('html_label_suffix') %}<span class='label-suffix'>{{ row.getMetadata('html_label_suffix') | raw }}</span>{% endif -%}</span>{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    </a>
{% endif %}
{% if row.getMetadata(tooltipIndex) %}</span>{% endif %}

{% endapply %}
", "@CoreHome/_dataTableCell.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_dataTableCell.twig");
    }
}
