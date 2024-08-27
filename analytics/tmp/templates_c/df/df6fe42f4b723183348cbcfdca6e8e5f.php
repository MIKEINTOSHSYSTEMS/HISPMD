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

/* @Installation/cannotConnectToDb.twig */
class __TwigTemplate_b1ec2ba5195daac45351ca671f477dd2 extends Template
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
        yield "<p>";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_CannotConnectToDb"), "html", null, true);
        yield ":</p>

<p><strong>";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</strong></p>

<p>";
        // line 5
        yield $this->env->getFilter('translate')->getCallable()("Installation_CannotConnectToDbResolvingExplanation", "<a href=\"javascript:window.location.reload()\">", "</a>");
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Installation/cannotConnectToDb.twig";
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
        return array (  49 => 5,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'Installation_CannotConnectToDb'|translate }}:</p>

<p><strong>{{ exceptionMessage }}</strong></p>

<p>{{ 'Installation_CannotConnectToDbResolvingExplanation'|translate('<a href=\"javascript:window.location.reload()\">', '</a>')|raw }}</p>", "@Installation/cannotConnectToDb.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Installation/templates/cannotConnectToDb.twig");
    }
}
