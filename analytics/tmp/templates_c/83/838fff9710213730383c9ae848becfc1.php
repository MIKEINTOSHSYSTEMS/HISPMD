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

/* @Insights/table_header.twig */
class __TwigTemplate_223d1e602b5dfa649abebab2cf059a4a extends Template
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
        yield "<tr>
    <th class=\"label first\">
        ";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "reportName", [], "any", false, false, false, 3), "html", null, true);
        yield "
    </th>
    <th class=\"orderBy ";
        // line 5
        if (("absolute" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 5, $this->source); })()), "order_by", [], "any", false, false, false, 5))) {
            yield "active";
        }
        yield "\"
        name=\"orderBy\" value=\"absolute\">
        ";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "metricName", [], "any", false, false, false, 7), "html", null, true);
        yield "
    </th>
    <th class=\"last orderBy ";
        // line 9
        if (("relative" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 9, $this->source); })()), "order_by", [], "any", false, false, false, 9))) {
            yield "active";
        }
        yield "\"
        name=\"orderBy\" value=\"relative\">
        ";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("MultiSites_Evolution"), "html", null, true);
        yield "
    </th>
</tr>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Insights/table_header.twig";
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
        return array (  66 => 11,  59 => 9,  54 => 7,  47 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <th class=\"label first\">
        {{ metadata.reportName }}
    </th>
    <th class=\"orderBy {% if 'absolute' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"absolute\">
        {{ metadata.metricName }}
    </th>
    <th class=\"last orderBy {% if 'relative' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"relative\">
        {{ 'MultiSites_Evolution'|translate }}
    </th>
</tr>", "@Insights/table_header.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Insights/templates/table_header.twig");
    }
}
