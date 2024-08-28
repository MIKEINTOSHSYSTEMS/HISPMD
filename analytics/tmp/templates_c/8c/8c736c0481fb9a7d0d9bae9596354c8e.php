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

/* @Installation/getSystemCheckWidget.twig */
class __TwigTemplate_43d532e68f8e89da0b04b29083aad70d extends Template
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
        yield "<div class=\"widgetBody system-check\" vue-directive=\"CoreHome.Tooltips\" vue-directive-value=\"{&quot;show&quot;: {&quot;delay&quot;: 200, &quot;duration&quot;: 100}}\">
    ";
        // line 2
        if (( !(isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 2, $this->source); })()) &&  !(isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SystemCheckNoErrorsOrWarnings"), "html", null, true);
            yield "</p>
    ";
        }
        // line 5
        yield "
    ";
        // line 6
        if ((isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "        <ul>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thisResult"]) {
                // line 9
                yield "                ";
                $context["checkItemMessages"] = "";
                // line 10
                yield "                ";
                if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 10)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 10)) > 1))) {
                    // line 11
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["checkItem"]) {
                        // line 12
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["checkItem"], "getStatus", [], "any", false, false, false, 12) === "warning")) {
                            // line 13
                            yield "                            ";
                            $context["checkItemMessages"] = (((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 13, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["checkItem"], "getComment", [], "method", false, false, false, 13)) . "
");
                            // line 14
                            yield "                        ";
                        }
                        // line 15
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    yield "                ";
                }
                // line 17
                yield "                <li title=\"";
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::striptags($this->env->getFilter('preg_replace')->getCallable()(Twig\Extension\CoreExtension::default(((array_key_exists("checkItemMessages", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 17, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 17))), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 17), 0, [], "array", false, false, false, 17), "getComment", [], "method", false, false, false, 17)), "/<br.*?>/", "
")), "html", null, true);
                yield "\" class=\"system-check-widget-error\"><span class=\"icon-error\"></span> ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLabel", [], "any", false, false, false, 17), "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        </ul>
    ";
        }
        // line 21
        yield "
    ";
        // line 22
        if ((isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["warnings"]) || array_key_exists("warnings", $context) ? $context["warnings"] : (function () { throw new RuntimeError('Variable "warnings" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thisResult"]) {
                // line 25
                yield "                ";
                $context["checkItemMessages"] = "";
                // line 26
                yield "                ";
                if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 26)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 26)) > 1))) {
                    // line 27
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["checkItem"]) {
                        // line 28
                        yield "                        ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["checkItem"], "getStatus", [], "any", false, false, false, 28) === "warning")) {
                            // line 29
                            yield "                            ";
                            $context["checkItemMessages"] = (((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 29, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["checkItem"], "getComment", [], "method", false, false, false, 29)) . "
");
                            // line 30
                            yield "                        ";
                        }
                        // line 31
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    yield "                ";
                }
                // line 33
                yield "                <li title=\"";
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::striptags($this->env->getFilter('preg_replace')->getCallable()(Twig\Extension\CoreExtension::default(((array_key_exists("checkItemMessages", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["checkItemMessages"]) || array_key_exists("checkItemMessages", $context) ? $context["checkItemMessages"] : (function () { throw new RuntimeError('Variable "checkItemMessages" does not exist.', 33, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 33))) : (CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLongErrorMessage", [], "any", false, false, false, 33))), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getItems", [], "method", false, false, false, 33), 0, [], "array", false, false, false, 33), "getComment", [], "method", false, false, false, 33)), "/<br.*?>/", "
")), "html", null, true);
                yield "\" class=\"system-check-widget-warning\"><span class=\"icon-warning\"></span> ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thisResult"], "getLabel", [], "any", false, false, false, 33), "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "        </ul>
    ";
        }
        // line 37
        yield "
    ";
        // line 38
        if (((isset($context["numErrors"]) || array_key_exists("numErrors", $context) ? $context["numErrors"] : (function () { throw new RuntimeError('Variable "numErrors" does not exist.', 38, $this->source); })()) || (isset($context["numWarnings"]) || array_key_exists("numWarnings", $context) ? $context["numWarnings"] : (function () { throw new RuntimeError('Variable "numWarnings" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "        <p>
            <br />
            <a href=\"";
            // line 41
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Installation", "action" => "systemCheckPage"]), "html", null, true);
            yield "\"
               >";
            // line 42
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SystemCheckViewFullSystemCheck"), "html", null, true);
            yield "</a>
        </p>
    ";
        }
        // line 45
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Installation/getSystemCheckWidget.twig";
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
        return array (  184 => 45,  178 => 42,  174 => 41,  170 => 39,  168 => 38,  165 => 37,  161 => 35,  149 => 33,  146 => 32,  140 => 31,  137 => 30,  133 => 29,  130 => 28,  125 => 27,  122 => 26,  119 => 25,  115 => 24,  112 => 23,  110 => 22,  107 => 21,  103 => 19,  91 => 17,  88 => 16,  82 => 15,  79 => 14,  75 => 13,  72 => 12,  67 => 11,  64 => 10,  61 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody system-check\" vue-directive=\"CoreHome.Tooltips\" vue-directive-value=\"{&quot;show&quot;: {&quot;delay&quot;: 200, &quot;duration&quot;: 100}}\">
    {% if not numErrors and not numWarnings %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'Installation_SystemCheckNoErrorsOrWarnings'|translate }}</p>
    {% endif %}

    {% if numErrors %}
        <ul>
            {% for thisResult in errors %}
                {% set checkItemMessages = '' %}
                {% if thisResult.getLongErrorMessage is empty and thisResult.getItems()|length > 1 %}
                    {% for checkItem in thisResult.getItems() %}
                        {% if checkItem.getStatus is same as('warning') %}
                            {% set checkItemMessages = checkItemMessages ~ checkItem.getComment() ~ \"\\n\" %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                <li title=\"{{ checkItemMessages|default(thisResult.getLongErrorMessage)|default(thisResult.getItems()[0].getComment())|preg_replace('/<br.*?>/', \"\\n\")|striptags }}\" class=\"system-check-widget-error\"><span class=\"icon-error\"></span> {{ thisResult.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numWarnings %}
        <ul>
            {% for thisResult in warnings %}
                {% set checkItemMessages = '' %}
                {% if thisResult.getLongErrorMessage is empty and thisResult.getItems()|length > 1 %}
                    {% for checkItem in thisResult.getItems() %}
                        {% if checkItem.getStatus is same as('warning') %}
                            {% set checkItemMessages = checkItemMessages ~ checkItem.getComment() ~ \"\\n\" %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                <li title=\"{{ checkItemMessages|default(thisResult.getLongErrorMessage)|default(thisResult.getItems()[0].getComment())|preg_replace('/<br.*?>/', \"\\n\")|striptags }}\" class=\"system-check-widget-warning\"><span class=\"icon-warning\"></span> {{ thisResult.getLabel }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% if numErrors or numWarnings %}
        <p>
            <br />
            <a href=\"{{ linkTo({'module': 'Installation', 'action': 'systemCheckPage'}) }}\"
               >{{ 'Installation_SystemCheckViewFullSystemCheck'|translate }}</a>
        </p>
    {% endif %}
</div>", "@Installation/getSystemCheckWidget.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Installation/templates/getSystemCheckWidget.twig");
    }
}
