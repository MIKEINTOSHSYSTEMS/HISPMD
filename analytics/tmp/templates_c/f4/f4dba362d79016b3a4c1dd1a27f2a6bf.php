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

/* macros.twig */
class __TwigTemplate_aa7f677cf5218c795d1469f4bfd6f9e4 extends Template
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
        // line 18
        yield "
";
        return; yield '';
    }

    // line 1
    public function macro_logoHtml($__metadata__ = null, $__alt__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "metadata" => $__metadata__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "logo", [], "array", true, true, false, 2)) {
                // line 3
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "logoWidth", [], "array", true, true, false, 3)) {
                    // line 4
                    yield "            ";
                    $context["width"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield "width=\"";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "logoWidth", [], "array", false, false, false, 4), "html", null, true);
                        yield "\"";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 5
                    yield "        ";
                }
                // line 6
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "logoHeight", [], "array", true, true, false, 6)) {
                    // line 7
                    yield "            ";
                    $context["height"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield "height=\"";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "logoHeight", [], "array", false, false, false, 7), "html", null, true);
                        yield "\"";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 8
                    yield "        ";
                }
                // line 9
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "logoWidth", [], "array", true, true, false, 9)) {
                    // line 10
                    yield "            ";
                    $context["width"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield "width=\"";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 10, $this->source); })()), "logoWidth", [], "array", false, false, false, 10), "html", null, true);
                        yield "\"";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 11
                    yield "        ";
                }
                // line 12
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 12, $this->source); })()))) {
                    // line 13
                    yield "            ";
                    $context["alt"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield "title='";
                        yield \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 13, $this->source); })()), "html", null, true);
                        yield "' alt='";
                        yield \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 13, $this->source); })()), "html", null, true);
                        yield "'";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 14
                    yield "        ";
                }
                // line 15
                yield "        <img ";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 15, $this->source); })()), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 15, $this->source); })()), "")) : ("")), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("height", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 15, $this->source); })()), "")) : ("")), "html", null, true);
                yield " src='";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 15, $this->source); })()), "logo", [], "array", false, false, false, 15), "html", null, true);
                yield "' />
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function macro_inlineHelp($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 21
            yield "    <div class=\"ui-inline-help\" >
        ";
            // line 22
            yield (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 22, $this->source); })());
            yield "
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
        return "macros.twig";
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
        return array (  149 => 22,  146 => 21,  134 => 20,  118 => 15,  115 => 14,  105 => 13,  102 => 12,  99 => 11,  91 => 10,  88 => 9,  85 => 8,  77 => 7,  74 => 6,  71 => 5,  63 => 4,  60 => 3,  57 => 2,  44 => 1,  38 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro logoHtml(metadata, alt='') %}
    {% if metadata['logo'] is defined %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoHeight'] is defined %}
            {% set height %}height=\"{{ metadata['logoHeight'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if alt is not empty %}
            {% set alt %}title='{{ alt }}' alt='{{ alt }}'{% endset %}
        {% endif %}
        <img {{ alt }} {{ width|default('') }} {{ height|default('') }} src='{{ metadata['logo'] }}' />
    {% endif %}
{% endmacro %}

{# Deprecated: use form-group and form-help DIVs instead #}
{% macro inlineHelp(text) %}
    <div class=\"ui-inline-help\" >
        {{ text|raw }}
    </div>
{% endmacro %}", "macros.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/macros.twig");
    }
}
