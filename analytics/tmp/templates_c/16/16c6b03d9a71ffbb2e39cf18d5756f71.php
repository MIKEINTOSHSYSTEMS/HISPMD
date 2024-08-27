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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_69e9493571d5abfedc296668e18ec2de extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "
";
        // line 22
        yield "
";
        return; yield '';
    }

    // line 2
    public function macro_sparklineEvolution($__evolution__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "evolution" => $__evolution__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    ";
            $context["isLowerValueBetter"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["evolution"] ?? null), "isLowerValueBetter", [], "any", true, true, false, 3)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 3, $this->source); })()), "isLowerValueBetter", [], "any", false, false, false, 3)) : (false));
            // line 4
            yield "    ";
            $context["evolutionPretty"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 4, $this->source); })()), "percent", [], "any", false, false, false, 4);
            // line 5
            yield "    ";
            $context["compareValue"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["evolution"] ?? null), "trend", [], "any", true, true, false, 5)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 5, $this->source); })()), "trend", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 5, $this->source); })()), "percent", [], "any", false, false, false, 5)));
            // line 6
            yield "    ";
            if (((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 6, $this->source); })()) < 0)) {
                // line 7
                yield "        ";
                $context["evolutionClass"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 7, $this->source); })())) ? ("positive-evolution") : ("negative-evolution"));
                // line 8
                yield "        ";
                $context["evolutionIcon"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 8, $this->source); })())) ? ("arrow_down_green.png") : ("arrow_down.png"));
                // line 9
                yield "    ";
            } elseif ((((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 9, $this->source); })()) == 0) || ((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 9, $this->source); })()) == "0%"))) {
                // line 10
                yield "        ";
                $context["evolutionClass"] = "neutral-evolution";
                // line 11
                yield "        ";
                $context["evolutionIcon"] = "stop.png";
                // line 12
                yield "    ";
            } else {
                // line 13
                yield "        ";
                $context["evolutionClass"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 13, $this->source); })())) ? ("negative-evolution") : ("positive-evolution"));
                // line 14
                yield "        ";
                $context["evolutionIcon"] = (((isset($context["isLowerValueBetter"]) || array_key_exists("isLowerValueBetter", $context) ? $context["isLowerValueBetter"] : (function () { throw new RuntimeError('Variable "isLowerValueBetter" does not exist.', 14, $this->source); })())) ? ("arrow_up_red.png") : ("arrow_up.png"));
                // line 15
                yield "        ";
                $context["evolutionPretty"] = ("+" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 15, $this->source); })()), "percent", [], "any", false, false, false, 15));
                // line 16
                yield "    ";
            }
            // line 17
            yield "
    <span class=\"metricEvolution\" title=\"";
            // line 18
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 18, $this->source); })()), "tooltip", [], "any", false, false, false, 18)), "html_attr");
            yield "\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
            // line 19
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionIcon"]) || array_key_exists("evolutionIcon", $context) ? $context["evolutionIcon"] : (function () { throw new RuntimeError('Variable "evolutionIcon" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\" alt=\"\" />
    <strong class=\"";
            // line 20
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionClass"]) || array_key_exists("evolutionClass", $context) ? $context["evolutionClass"] : (function () { throw new RuntimeError('Variable "evolutionClass" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\" aria-hidden=\"true\">";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionPretty"]) || array_key_exists("evolutionPretty", $context) ? $context["evolutionPretty"] : (function () { throw new RuntimeError('Variable "evolutionPretty" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "</strong></span>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function macro_singleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "
    <div class=\"sparkline ";
            // line 25
            if ((array_key_exists("areSparklinesLinkable", $context) &&  !(isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 25, $this->source); })()))) {
                yield "notLinkable";
            }
            yield "\"
         ";
            // line 26
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", false, false, false, 26))) : ("")))) {
                yield "data-series-indices=\"";
                yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 26, $this->source); })()), "seriesIndices", [], "any", false, false, false, 26)), "html_attr");
                yield "\"";
            }
            // line 27
            yield "         ";
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", false, false, false, 27))) : ("")))) {
                yield "data-graph-params=\"";
                yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 27, $this->source); })()), "graphParams", [], "any", false, false, false, 27)), "html_attr");
                yield "\"";
            }
            // line 28
            yield "    >
        <div
            ";
            // line 30
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", false, false, false, 30))) : (""))) {
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 30, $this->source); })()), "tooltip", [], "any", false, false, false, 30), "html_attr");
                yield "\"";
            }
            // line 31
            yield "        >
            ";
            // line 32
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", false, false, false, 32))) : ("")))) {
                yield "<h6 class=\"sparkline-title\" title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32)), "html_attr");
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
                yield "</h6>";
            }
            // line 33
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33)) {
                yield $this->env->getFunction('sparkline')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33));
            }
            // line 34
            yield "        </div>
\t<div>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 36, $this->source); })()), "metrics", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                // line 37
                yield "            ";
                if ( !Twig\Extension\CoreExtension::testEmpty($context["groupName"])) {
                    yield "<span class=\"metric-group-title\">";
                    yield \Piwik\piwik_escape_filter($this->env, $context["groupName"], "html", null, true);
                    yield "</span>";
                }
                // line 38
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["group"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                    // line 39
                    yield "                <span class=\"sparkline-metrics\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["allMetricsDocumentation"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", true, true, false, 39) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 39, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", false, false, false, 39))) {
                        yield "title=\"";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 39, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 39), [], "array", false, false, false, 39), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                ";
                    // line 40
                    if (CoreExtension::inFilter("%s", CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 40))) {
                        // line 41
                        yield $this->env->getFilter('translate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 41), (("<strong>" . $this->env->getFilter('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 41), 2)) . "</strong>"));
                    } else {
                        // line 43
                        yield "                    <strong>";
                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 43), 2), "html", null, true);
                        yield "</strong> ";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 43), "html", null, true);
                    }
                    // line 44
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 44)) {
                        yield ", ";
                    }
                    // line 45
                    yield "                </span>
                ";
                    // line 46
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "evolution", [], "any", true, true, false, 46)) {
                        // line 47
                        yield "                    ";
                        yield CoreExtension::callMacro($macros["_self"], "macro_sparklineEvolution", [CoreExtension::getAttribute($this->env, $this->source, $context["metric"], "evolution", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                        yield "
                ";
                    }
                    // line 49
                    yield "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["sparkline"] ?? null), "evolution", [], "any", true, true, false, 51)) {
                // line 52
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_sparklineEvolution", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 52, $this->source); })()), "evolution", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
                yield "
        ";
            }
            // line 54
            yield "\t</div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
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
        return array (  282 => 54,  276 => 52,  273 => 51,  267 => 50,  253 => 49,  247 => 47,  245 => 46,  242 => 45,  238 => 44,  232 => 43,  229 => 41,  227 => 40,  218 => 39,  200 => 38,  193 => 37,  189 => 36,  185 => 34,  180 => 33,  172 => 32,  169 => 31,  163 => 30,  159 => 28,  152 => 27,  146 => 26,  140 => 25,  137 => 24,  123 => 23,  113 => 20,  109 => 19,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  84 => 11,  81 => 10,  78 => 9,  75 => 8,  72 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  48 => 2,  42 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro sparklineEvolution(evolution) %}
    {% set isLowerValueBetter = evolution.isLowerValueBetter is defined ? evolution.isLowerValueBetter : false %}
    {% set evolutionPretty = evolution.percent %}
    {% set compareValue = evolution.trend is defined ? evolution.trend : evolution.percent %}
    {% if compareValue < 0 %}
        {% set evolutionClass = isLowerValueBetter ? 'positive-evolution' : 'negative-evolution' %}
        {% set evolutionIcon  = isLowerValueBetter ? 'arrow_down_green.png' : 'arrow_down.png' %}
    {% elseif compareValue == 0 or compareValue == '0%' %}
        {% set evolutionClass = 'neutral-evolution' %}
        {% set evolutionIcon  = 'stop.png' %}
    {% else %}
        {% set evolutionClass = isLowerValueBetter ? 'negative-evolution' : 'positive-evolution' %}
        {% set evolutionIcon  = isLowerValueBetter ? 'arrow_up_red.png' : 'arrow_up.png' %}
        {% set evolutionPretty = '+' ~ evolution.percent %}
    {% endif %}

    <span class=\"metricEvolution\" title=\"{{ evolution.tooltip|rawSafeDecoded|e('html_attr') }}\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\" alt=\"\" />
    <strong class=\"{{ evolutionClass }}\" aria-hidden=\"true\">{{ evolutionPretty }}</strong></span>
{% endmacro %}

{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\"
         {% if sparkline.seriesIndices|default is not empty %}data-series-indices=\"{{ sparkline.seriesIndices|json_encode|e('html_attr') }}\"{% endif %}
         {% if sparkline.graphParams|default is not empty %}data-graph-params=\"{{ sparkline.graphParams|json_encode|e('html_attr') }}\"{% endif %}
    >
        <div
            {% if sparkline.tooltip|default %}title=\"{{ sparkline.tooltip|e('html_attr') }}\"{% endif %}
        >
            {% if sparkline.title|default is not empty %}<h6 class=\"sparkline-title\" title=\"{{ sparkline.title|rawSafeDecoded|e('html_attr') }}\">{{ sparkline.title }}</h6>{% endif %}
            {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
        </div>
\t<div>
        {% for groupName, group in sparkline.metrics %}
            {% if groupName is not empty %}<span class=\"metric-group-title\">{{ groupName }}</span>{% endif %}
            {% for metric in group %}
                <span class=\"sparkline-metrics\" {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
                {% if '%s' in metric.description -%}
                    {{ metric.description|translate(\"<strong>\"~metric.value|number(2)~\"</strong>\")|raw }}
                {%- else %}
                    <strong>{{ metric.value|number(2) }}</strong> {{ metric.description }}
                {%- endif %}{% if not loop.last %}, {% endif %}
                </span>
                {% if metric.evolution is defined %}
                    {{ _self.sparklineEvolution(metric.evolution) }}
                {% endif %}
            {% endfor %}
        {% endfor %}
        {% if sparkline.evolution is defined %}
            {{ _self.sparklineEvolution(sparkline.evolution) }}
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreVisualizations/templates/macros.twig");
    }
}
