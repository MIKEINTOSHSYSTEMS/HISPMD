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

/* @Marketplace/getNewPluginsAdmin.twig */
class __TwigTemplate_f1225e155248ccc8871f75e32da0f069 extends Template
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
        yield "<div vue-entry=\"Marketplace.GetNewPluginsAdmin\" plugins=\"";
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 1, $this->source); })())), "html", null, true);
        yield "\"></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/getNewPluginsAdmin.twig";
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
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div vue-entry=\"Marketplace.GetNewPluginsAdmin\" plugins=\"{{ plugins|json_encode }}\"></div>
", "@Marketplace/getNewPluginsAdmin.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Marketplace/templates/getNewPluginsAdmin.twig");
    }
}
