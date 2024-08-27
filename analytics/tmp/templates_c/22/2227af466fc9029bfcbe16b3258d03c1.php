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

/* @Insights/overviewWidget.twig */
class __TwigTemplate_3f351fc28478fbb0039eb2afc2d49c49 extends Template
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
        yield "<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    ";
        // line 4
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 4, $this->source); })()), "getColumns", [], "any", false, false, false, 4)) > 0)) {
            // line 5
            yield "        <div class=\"dataTableScroller\">
        <table class=\"dataTable\"
               title=\"";
            // line 7
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["consideredGrowth"]) || array_key_exists("consideredGrowth", $context) ? $context["consideredGrowth"] : (function () { throw new RuntimeError('Variable "consideredGrowth" does not exist.', 7, $this->source); })()), "html_attr");
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["consideredChanges"]) || array_key_exists("consideredChanges", $context) ? $context["consideredChanges"] : (function () { throw new RuntimeError('Variable "consideredChanges" does not exist.', 7, $this->source); })()), "html_attr");
            yield "\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 8, $this->source); })()), "getDataTables", [], "method", false, false, false, 8), function ($__dataTable__) use ($context, $macros) { $context["dataTable"] = $__dataTable__; return (CoreExtension::getAttribute($this->env, $this->source, $context["dataTable"], "getRowsCount", [], "any", false, false, false, 8) > 0); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dataTable"]) {
                // line 9
                yield "                ";
                $context["metadata"] = CoreExtension::getAttribute($this->env, $this->source, $context["dataTable"], "getAllTableMetadata", [], "any", false, false, false, 9);
                // line 10
                yield "
                <thead>
                    ";
                // line 12
                yield from                 $this->loadTemplate("@Insights/table_header.twig", "@Insights/overviewWidget.twig", 12)->unwrap()->yield($context);
                // line 13
                yield "                </thead>

                <tbody>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dataTable"], "getRows", [], "any", false, false, false, 16));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 17
                    yield "                        ";
                    yield from                     $this->loadTemplate("@Insights/table_row.twig", "@Insights/overviewWidget.twig", 17)->unwrap()->yield($context);
                    // line 18
                    yield "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "                </tbody>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataTable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        </table>
        </div>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    ";
        } else {
            // line 31
            yield "
        <div class=\"pk-emptyDataTable\"
             title=\"";
            // line 33
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["consideredGrowth"]) || array_key_exists("consideredGrowth", $context) ? $context["consideredGrowth"] : (function () { throw new RuntimeError('Variable "consideredGrowth" does not exist.', 33, $this->source); })()), "html_attr");
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["consideredChanges"]) || array_key_exists("consideredChanges", $context) ? $context["consideredChanges"] : (function () { throw new RuntimeError('Variable "consideredChanges" does not exist.', 33, $this->source); })()), "html_attr");
            yield "\">
            ";
            // line 34
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Insights_NoResultMatchesCriteria"), "html", null, true);
            yield "
        </div>

    ";
        }
        // line 38
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Insights/overviewWidget.twig";
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
        return array (  164 => 38,  157 => 34,  151 => 33,  147 => 31,  135 => 21,  120 => 19,  106 => 18,  103 => 17,  86 => 16,  81 => 13,  79 => 12,  75 => 10,  72 => 9,  55 => 8,  49 => 7,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    {% if reports.getColumns|length > 0 %}
        <div class=\"dataTableScroller\">
        <table class=\"dataTable\"
               title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {% for dataTable in reports.getDataTables()|filter(dataTable => dataTable.getRowsCount > 0) %}
                {% set metadata = dataTable.getAllTableMetadata %}

                <thead>
                    {% include \"@Insights/table_header.twig\" %}
                </thead>

                <tbody>
                    {% for row in dataTable.getRows %}
                        {% include \"@Insights/table_row.twig\" %}
                    {% endfor %}
                </tbody>
            {% endfor %}
        </table>
        </div>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    {% else %}

        <div class=\"pk-emptyDataTable\"
             title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {{ 'Insights_NoResultMatchesCriteria'|translate }}
        </div>

    {% endif %}
</div>", "@Insights/overviewWidget.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Insights/templates/overviewWidget.twig");
    }
}
