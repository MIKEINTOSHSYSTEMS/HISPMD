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

/* @CoreHome/getSystemSummary.twig */
class __TwigTemplate_7f0384cb8fe26e929c11a17852b17c3e extends Template
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
        yield "<div class=\"widgetBody systemSummary\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty($context["item"])) {
                // line 4
                yield "            <div class=\"systemSummaryItem ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getKey", [], "any", false, false, false, 4)) {
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getKey", [], "any", false, false, false, 4), "html", null, true);
                }
                yield "\">
                ";
                // line 5
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getIcon", [], "any", false, false, false, 5)) {
                    yield "<span class=\"icon ";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getIcon", [], "any", false, false, false, 5), "html", null, true);
                    yield "\"></span>";
                }
                // line 7
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 7)) {
                    // line 8
                    yield "<a href=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 8)), "html", null, true);
                    yield "\" class=\"itemLabel\">";
                } else {
                    // line 10
                    yield "<span class=\"itemLabel\">";
                }
                // line 13
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getLabel", [], "any", false, false, false, 13), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 13)) {
                    yield ": ";
                }
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 15)) {
                    // line 16
                    yield "</a>";
                } else {
                    // line 18
                    yield "</span>";
                }
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 21)) {
                    yield "<span class=\"itemValue\">";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 21), "html", null, true);
                    yield "</span>";
                }
                // line 22
                yield "            </div>
        ";
            }
            // line 24
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    <br />
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/getSystemSummary.twig";
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
        return array (  100 => 25,  94 => 24,  90 => 22,  84 => 21,  81 => 18,  78 => 16,  76 => 15,  71 => 13,  68 => 10,  63 => 8,  61 => 7,  55 => 5,  48 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody systemSummary\">
    {% for item in items %}
        {% if item is not empty %}
            <div class=\"systemSummaryItem {% if item.getKey %}{{ item.getKey }}{% endif %}\">
                {% if item.getIcon %}<span class=\"icon {{ item.getIcon }}\"></span>{% endif %}

                {%- if item.getUrlParams -%}
                    <a href=\"{{ linkTo(item.getUrlParams) }}\" class=\"itemLabel\">
                {%- else -%}
                    <span class=\"itemLabel\">
                {%- endif -%}

                {{ item.getLabel }}{% if item.getValue %}: {% endif %}

                {%- if item.getUrlParams -%}
                    </a>
                {%- else -%}
                    </span>
                {%- endif -%}

                {% if item.getValue %}<span class=\"itemValue\">{{ item.getValue }}</span>{% endif %}
            </div>
        {% endif %}
    {% endfor %}
    <br />
</div>", "@CoreHome/getSystemSummary.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/getSystemSummary.twig");
    }
}
