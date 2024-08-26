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

/* @SitesManager/_othersTab.twig */
class __TwigTemplate_03f71b57c4d87ab78f1b3d78330ba15a extends Template
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
        yield "<h2>";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MoreMethods"), "html", null, true);
        yield "</h2>

<p>";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_OtherWaysTabDescription"), "html", null, true);
        yield "</p>
<p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["matomoUrl"]) || array_key_exists("matomoUrl", $context) ? $context["matomoUrl"] : (function () { throw new RuntimeError('Variable "matomoUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</code></p>
<p>";
        // line 5
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 5, $this->source); })())) . "</code>"));
        yield "</p>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["othersInstructions"]) || array_key_exists("othersInstructions", $context) ? $context["othersInstructions"] : (function () { throw new RuntimeError('Variable "othersInstructions" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["othersInstruction"]) {
            // line 8
            yield "    <h3>";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["othersInstruction"], "name", [], "any", false, false, false, 8), "html", null, true);
            yield "</h3>
    <p>";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["othersInstruction"], "othersInstruction", [], "any", false, false, false, 9);
            yield "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['othersInstruction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_othersTab.twig";
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
        return array (  66 => 9,  61 => 8,  57 => 7,  52 => 5,  48 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_MoreMethods'|translate }}</h2>

<p>{{ 'SitesManager_OtherWaysTabDescription'|translate }}</p>
<p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">{{ matomoUrl }}</code></p>
<p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</p>

{% for othersInstruction in othersInstructions %}
    <h3>{{ othersInstruction.name }}</h3>
    <p>{{ othersInstruction.othersInstruction|raw }}</p>
{% endfor %}", "@SitesManager/_othersTab.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/_othersTab.twig");
    }
}
