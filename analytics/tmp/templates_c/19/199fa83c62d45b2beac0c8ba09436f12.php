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

/* @Dashboard/_header.twig */
class __TwigTemplate_87260313d90b852ee6a1430b85eb5fb0 extends Template
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
        // line 2
        yield "<!DOCTYPE html>
<html id=\"ng-app\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Dashboard"), "html", null, true);
        yield " - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_WebAnalyticsReports"), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
";
        // line 11
        yield from         $this->loadTemplate("_jsGlobalVariables.twig", "@Dashboard/_header.twig", 11)->unwrap()->yield($context);
        // line 12
        yield from         $this->loadTemplate("_jsCssIncludes.twig", "@Dashboard/_header.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "</head>
<body id=\"standalone\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Dashboard/_header.twig";
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
        return array (  58 => 13,  56 => 12,  54 => 11,  47 => 9,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# This header is for loading the dashboard in stand alone mode #}
<!DOCTYPE html>
<html id=\"ng-app\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>{{ 'Dashboard_Dashboard'|translate }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
{% include \"_jsGlobalVariables.twig\" %}
{% include \"_jsCssIncludes.twig\" %}
</head>
<body id=\"standalone\">
", "@Dashboard/_header.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Dashboard/templates/_header.twig");
    }
}
