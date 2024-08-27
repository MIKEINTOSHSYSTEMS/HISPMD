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

/* @CoreHome/_dataTableHead.twig */
class __TwigTemplate_98471ee40652bd4a4b907dec3906ee4d extends Template
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
        $context["dimensions"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", ["dimensions"], "method", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", ["dimensions"], "method", false, false, false, 1), [])) : ([]));
        // line 2
        yield "<thead>
   <tr>
       ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 4, $this->source); })()), "columns_to_display", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 5
            yield "           <th class=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 5, $this->source); })()), "enable_sort", [], "any", false, false, false, 5)) {
                yield "sortable";
            }
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                yield "first";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                yield "last";
            }
            yield " ";
            if ((($context["column"] == "label") || CoreExtension::inFilter($context["column"], (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 5, $this->source); })())))) {
                yield "label";
            }
            yield "\" id=\"";
            yield \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
            yield "\">
               ";
            // line 6
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "metrics_documentation", [], "any", false, true, false, 6), $context["column"], [], "array", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "metrics_documentation", [], "any", false, true, false, 6), $context["column"], [], "array", false, false, false, 6))) : ("")))) {
                // line 7
                yield "                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           ";
                // line 10
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 10), $context["column"], [], "array", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 10), $context["column"], [], "array", false, false, false, 10), $context["column"])) : ($context["column"])));
                yield "
                       </div>
                       ";
                // line 12
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 12, $this->source); })()), "metrics_documentation", [], "any", false, false, false, 12), $context["column"], [], "array", false, false, false, 12));
                yield "
                   </div>
               ";
            }
            // line 15
            yield "               <div id=\"thDIV\" class=\"thDIV\">";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 15), $context["column"], [], "array", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 15), $context["column"], [], "array", false, false, false, 15), $context["column"])) : ($context["column"])));
            yield "</div>
           </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "   </tr>
</thead>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTableHead.twig";
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
        return array (  116 => 18,  98 => 15,  92 => 12,  87 => 10,  82 => 7,  80 => 6,  61 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
<thead>
   <tr>
       {% for column in properties.columns_to_display %}
           <th class=\"{% if properties.enable_sort %}sortable{% endif %} {% if loop.first %}first{% elseif loop.last %}last{% endif %} {% if column == 'label' or column in dimensions %}label{% endif %}\" id=\"{{ column }}\">
               {% if properties.metrics_documentation[column]|default is not empty %}
                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           {{ properties.translations[column]|default(column)|rawSafeDecoded }}
                       </div>
                       {{ properties.metrics_documentation[column]|rawSafeDecoded|raw }}
                   </div>
               {% endif %}
               <div id=\"thDIV\" class=\"thDIV\">{{ properties.translations[column]|default(column)|rawSafeDecoded }}</div>
           </th>
       {% endfor %}
   </tr>
</thead>
", "@CoreHome/_dataTableHead.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_dataTableHead.twig");
    }
}
