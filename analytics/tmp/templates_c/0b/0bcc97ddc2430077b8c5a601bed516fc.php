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

/* @CoreHome/_shortcuts.twig */
class __TwigTemplate_b8c37c3948e033a7fda0a5333f757d7f extends Template
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
        yield "<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ShortcutsAvailable"), "html", null, true);
        yield "</h2>
    <dl></dl>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_shortcuts.twig";
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
        return array (  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>{{ 'CoreHome_ShortcutsAvailable'|translate }}</h2>
    <dl></dl>
</div>", "@CoreHome/_shortcuts.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_shortcuts.twig");
    }
}
