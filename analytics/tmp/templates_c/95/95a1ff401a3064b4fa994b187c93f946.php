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

/* @CoreHome\_uiControl.twig */
class __TwigTemplate_7c5682253bee06a6e0bb9b1bc2277854 extends Template
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
        yield "<div class=\"";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["cssIdentifier"]) || array_key_exists("cssIdentifier", $context) ? $context["cssIdentifier"] : (function () { throw new RuntimeError('Variable "cssIdentifier" does not exist.', 1, $this->source); })()), "html", null, true);
        yield " ";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\"
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["htmlAttributes"]) || array_key_exists("htmlAttributes", $context) ? $context["htmlAttributes"] : (function () { throw new RuntimeError('Variable "htmlAttributes" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 3
            yield "         ";
            yield \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
            yield "=\"";
            yield \Piwik\piwik_escape_filter($this->env, $context["value"], "html_attr");
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "    data-props=\"";
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 5, $this->source); })())), "html", null, true);
        yield "\"
    data-params=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 6, $this->source); })())), "html", null, true);
        yield "\">
";
        // line 7
        yield from         $this->loadTemplate($context["implView"]->getTemplateFile(), "@CoreHome\\_uiControl.twig", 7)->unwrap()->yield(CoreExtension::merge($context, $context["implView"]->getTemplateVars((isset($context["implOverride"]) || array_key_exists("implOverride", $context) ? $context["implOverride"] : (function () { throw new RuntimeError('Variable "implOverride" does not exist.', 7, $this->source); })()))));
        // line 8
        yield "</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        \$(document).ready(function () { require('";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["jsNamespace"]) || array_key_exists("jsNamespace", $context) ? $context["jsNamespace"] : (function () { throw new RuntimeError('Variable "jsNamespace" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "').";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new RuntimeError('Variable "jsClass" does not exist.', 11, $this->source); })()), "html", null, true);
        yield ".initElements(); });
    }, false);
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome\\_uiControl.twig";
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
        return array (  76 => 11,  71 => 8,  69 => 7,  65 => 6,  60 => 5,  49 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ cssIdentifier }} {{ cssClass }}\"
    {% for name,value in htmlAttributes %}
         {{ name }}=\"{{ value|e('html_attr') }}\"
    {% endfor %}
    data-props=\"{{ clientSideProperties|json_encode }}\"
    data-params=\"{{ clientSideParameters|json_encode }}\">
{% render implView with implOverride %}
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        \$(document).ready(function () { require('{{ jsNamespace }}').{{ jsClass }}.initElements(); });
    }, false);
</script>
", "@CoreHome\\_uiControl.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_uiControl.twig");
    }
}
