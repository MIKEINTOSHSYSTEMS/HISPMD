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

/* @UsersManager/addNewTokenSuccess.twig */
class __TwigTemplate_087b55f958fea59f4d12ee27e2dc3571 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Security"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/addNewTokenSuccess.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div
        vue-entry=\"UsersManager.AddNewTokenSuccess\"
        generated-token=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["generatedToken"]) || array_key_exists("generatedToken", $context) ? $context["generatedToken"] : (function () { throw new RuntimeError('Variable "generatedToken" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "\"
    ></div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UsersManager/addNewTokenSuccess.twig";
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
        return array (  62 => 9,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Security'|translate }}{% endset %}

{% block content %}

    <div
        vue-entry=\"UsersManager.AddNewTokenSuccess\"
        generated-token=\"{{ generatedToken|json_encode }}\"
    ></div>

{% endblock %}
", "@UsersManager/addNewTokenSuccess.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UsersManager/templates/addNewTokenSuccess.twig");
    }
}
