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

/* @CoreVisualizations/_dataTableViz_sparklines.twig */
class __TwigTemplate_0abc25942a54f49c8a4384a207e4737a extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@CoreVisualizations/macros.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 3, $this->source); })())) {
            // line 4
            yield "    <div class=\"card\"><div class=\"card-content\">
";
        }
        // line 6
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()))) {
            yield "<h2 class=\"card-title\"
                                    ";
            // line 7
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["titleAttributes"]) || array_key_exists("titleAttributes", $context) ? $context["titleAttributes"] : (function () { throw new RuntimeError('Variable "titleAttributes" does not exist.', 7, $this->source); })()))) {
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["titleAttributes"]) || array_key_exists("titleAttributes", $context) ? $context["titleAttributes"] : (function () { throw new RuntimeError('Variable "titleAttributes" does not exist.', 7, $this->source); })()));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    yield \Piwik\piwik_escape_filter($this->env, $context["attribute"], "html", null, true);
                    yield "=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $context["value"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 8
            yield "                                >";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "</h2>";
        }
        // line 9
        yield "    ";
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "    <div class=\"row\">
        <div class=\"col m6\">
    ";
        }
        // line 13
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 13, $this->source); })())) == 1)) {
            // line 14
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 14, $this->source); })())));
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
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 15
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15) % 2 == 0)) {
                    // line 16
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 16, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
                    yield "
                ";
                }
                // line 18
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            ";
        } else {
            // line 20
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 20, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21) % 2 == 0)) {
                    // line 22
                    yield "                        <div>
                            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 24
                        yield "                                ";
                        yield CoreExtension::callMacro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 24, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    yield "                        </div>
                    ";
                }
                // line 28
                yield "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "            ";
        }
        // line 30
        yield "
    ";
        // line 31
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 31, $this->source); })())) {
            // line 32
            yield "            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    ";
        }
        // line 36
        yield "
            ";
        // line 37
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 37, $this->source); })())) == 1)) {
            // line 38
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 38, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 39
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) % 2 != 0)) {
                    // line 40
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 40, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
                    yield "
                ";
                }
                // line 42
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "            ";
        } else {
            // line 44
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 44, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 45
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 45) % 2 != 0)) {
                    // line 46
                    yield "                        <div>
                            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 48
                        yield "                                ";
                        yield CoreExtension::callMacro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 48, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext());
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    yield "                        </div>
                    ";
                }
                // line 52
                yield "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            ";
        }
        // line 54
        yield "
            <br style=\"clear:left\"/>

    ";
        // line 57
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 57, $this->source); })())) {
            // line 58
            yield "        </div>
    </div>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if ((isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 62, $this->source); })())) {
            // line 63
            yield "        ";
            yield from             $this->loadTemplate("_sparklineFooter.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 63)->unwrap()->yield($context);
            // line 64
            yield "    ";
        }
        // line 65
        yield "
    ";
        // line 66
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "        <div class='datatableFooterMessage'>";
            yield (isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 67, $this->source); })());
            yield "</div>
    ";
        }
        // line 69
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "        </div></div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_sparklines.twig";
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
        return array (  340 => 70,  338 => 69,  332 => 67,  330 => 66,  327 => 65,  324 => 64,  321 => 63,  319 => 62,  316 => 61,  311 => 58,  309 => 57,  304 => 54,  301 => 53,  287 => 52,  283 => 50,  274 => 48,  270 => 47,  267 => 46,  264 => 45,  246 => 44,  243 => 43,  229 => 42,  223 => 40,  220 => 39,  202 => 38,  200 => 37,  197 => 36,  191 => 32,  189 => 31,  186 => 30,  183 => 29,  169 => 28,  165 => 26,  156 => 24,  152 => 23,  149 => 22,  146 => 21,  128 => 20,  125 => 19,  111 => 18,  105 => 16,  102 => 15,  84 => 14,  81 => 13,  76 => 10,  73 => 9,  68 => 8,  54 => 7,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@CoreVisualizations/macros.twig' as macros %}

{% if not isWidget %}
    <div class=\"card\"><div class=\"card-content\">
{% endif %}
    {% if title is not empty %}<h2 class=\"card-title\"
                                    {% if titleAttributes is not empty %}{% for attribute, value in titleAttributes %}{{ attribute }}=\"{{ value }}\"{% endfor %}{% endif %}
                                >{{ title }}</h2>{% endif %}
    {% if not isWidget %}
    <div class=\"row\">
        <div class=\"col m6\">
    {% endif %}
            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines|first %}
                {% if loop.index0 is even %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is even %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

    {% if not isWidget %}
            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    {% endif %}

            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines %}
                {% if loop.index0 is odd %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is odd %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

            <br style=\"clear:left\"/>

    {% if not isWidget %}
        </div>
    </div>
    {% endif %}

    {%  if areSparklinesLinkable %}
        {% include \"_sparklineFooter.twig\" %}
    {% endif %}

    {% if footerMessage is not empty %}
        <div class='datatableFooterMessage'>{{ footerMessage | raw }}</div>
    {% endif %}
{% if not isWidget %}
        </div></div>
{% endif %}", "@CoreVisualizations/_dataTableViz_sparklines.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreVisualizations/templates/_dataTableViz_sparklines.twig");
    }
}
