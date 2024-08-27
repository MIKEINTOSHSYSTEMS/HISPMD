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

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_0e1a7d6f86a17c88a271876de806e340 extends Template
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
        if ( !(isset($context["isSingleSite"]) || array_key_exists("isSingleSite", $context) ? $context["isSingleSite"] : (function () { throw new RuntimeError('Variable "isSingleSite" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div vue-entry=\"CoreHome.SiteSelector\" show-selected-site=\"true\" show-all-sites-item=\"false\" class=\"sites_autocomplete\"></div>
</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
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
        return array (  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not isSingleSite %}
<div class=\"top_bar_sites_selector piwikTopControl\">
    <div vue-entry=\"CoreHome.SiteSelector\" show-selected-site=\"true\" show-all-sites-item=\"false\" class=\"sites_autocomplete\"></div>
</div>
{% endif %}
", "@CoreHome/_siteSelectHeader.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_siteSelectHeader.twig");
    }
}
