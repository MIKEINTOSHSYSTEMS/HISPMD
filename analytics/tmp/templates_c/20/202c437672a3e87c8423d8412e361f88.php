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

/* @Widgetize/iframe.twig */
class __TwigTemplate_7a246b5993e21e59319ad37966b9a17d extends Template
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
        yield "<!DOCTYPE html>
<html id=\"ng-app\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        ";
        // line 7
        yield from         $this->loadTemplate("_jsGlobalVariables.twig", "@Widgetize/iframe.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "        ";
        yield from         $this->loadTemplate("_jsCssIncludes.twig", "@Widgetize/iframe.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "    </head>
    <body class=\"widgetized\">
        <div class=\"widget\">
            ";
        // line 12
        yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })());
        yield "
        </div>
        <div id=\"pageFooter\">
            ";
        // line 15
        yield $this->env->getFunction('postEvent')->getCallable()("Template.pageFooter");
        yield "
        </div>
    </body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Widgetize/iframe.twig";
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
        return array (  62 => 15,  56 => 12,  51 => 9,  48 => 8,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        {% include \"_jsGlobalVariables.twig\" %}
        {% include \"_jsCssIncludes.twig\" %}
    </head>
    <body class=\"widgetized\">
        <div class=\"widget\">
            {{ content|raw }}
        </div>
        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>
    </body>
</html>
", "@Widgetize/iframe.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Widgetize/templates/iframe.twig");
    }
}
