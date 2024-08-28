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

/* @UsersManager/index.twig */
class __TwigTemplate_5e06b9347bce00432b96cd1a12609dac extends Template
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
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_ManageAccess"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div
    vue-entry=\"UsersManager.UsersManager\"
    initial-site-id=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["idSiteSelected"]) || array_key_exists("idSiteSelected", $context) ? $context["idSiteSelected"] : (function () { throw new RuntimeError('Variable "idSiteSelected" does not exist.', 8, $this->source); })())), "html", null, true);
        yield "\"
    invite-token-expiry-days=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["inviteTokenExpiryDays"]) || array_key_exists("inviteTokenExpiryDays", $context) ? $context["inviteTokenExpiryDays"] : (function () { throw new RuntimeError('Variable "inviteTokenExpiryDays" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\"
    initial-site-name=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultReportSiteName"]) || array_key_exists("defaultReportSiteName", $context) ? $context["defaultReportSiteName"] : (function () { throw new RuntimeError('Variable "defaultReportSiteName" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "\"
    current-user-role=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["currentUserRole"]) || array_key_exists("currentUserRole", $context) ? $context["currentUserRole"] : (function () { throw new RuntimeError('Variable "currentUserRole" does not exist.', 11, $this->source); })())), "html", null, true);
        yield "\"
    access-levels=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["accessLevels"]) || array_key_exists("accessLevels", $context) ? $context["accessLevels"] : (function () { throw new RuntimeError('Variable "accessLevels" does not exist.', 12, $this->source); })())), "html", null, true);
        yield "\"
    filter-access-levels=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["filterAccessLevels"]) || array_key_exists("filterAccessLevels", $context) ? $context["filterAccessLevels"] : (function () { throw new RuntimeError('Variable "filterAccessLevels" does not exist.', 13, $this->source); })())), "html", null, true);
        yield "\"
    filter-status-levels=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["statusAccessLevels"]) || array_key_exists("statusAccessLevels", $context) ? $context["statusAccessLevels"] : (function () { throw new RuntimeError('Variable "statusAccessLevels" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "\"
>
</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
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
        return array (  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_ManageAccess'|translate }}{% endset %}

{% block content %}
<div
    vue-entry=\"UsersManager.UsersManager\"
    initial-site-id=\"{{ idSiteSelected|json_encode }}\"
    invite-token-expiry-days=\"{{ inviteTokenExpiryDays }}\"
    initial-site-name=\"{{ defaultReportSiteName|json_encode }}\"
    current-user-role=\"{{ currentUserRole|json_encode }}\"
    access-levels=\"{{ accessLevels|json_encode }}\"
    filter-access-levels=\"{{ filterAccessLevels|json_encode }}\"
    filter-status-levels=\"{{ statusAccessLevels|json_encode }}\"
>
</div>

{% endblock %}
", "@UsersManager/index.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UsersManager/templates/index.twig");
    }
}
