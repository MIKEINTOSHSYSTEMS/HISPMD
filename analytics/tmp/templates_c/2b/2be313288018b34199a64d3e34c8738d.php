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

/* @UsersManager/userSecurity.twig */
class __TwigTemplate_2e2921adbcbcd2df3c5e4e5141c901e0 extends Template
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
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/userSecurity.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["afterPasswordEventContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->env->getFunction('postEvent')->getCallable()("Template.userSecurity.afterPassword");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield "
<div
    vue-entry=\"UsersManager.UserSecurity\"
    delete-token-nonce=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteTokenNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["deleteTokenNonce"]) || array_key_exists("deleteTokenNonce", $context) ? $context["deleteTokenNonce"] : (function () { throw new RuntimeError('Variable "deleteTokenNonce" does not exist.', 10, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    tokens=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("tokens", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 11, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    has-tokens-with-expire-date=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasTokensWithExpireDate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hasTokensWithExpireDate"]) || array_key_exists("hasTokensWithExpireDate", $context) ? $context["hasTokensWithExpireDate"] : (function () { throw new RuntimeError('Variable "hasTokensWithExpireDate" does not exist.', 12, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    is-users-admin-enabled=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isUsersAdminEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isUsersAdminEnabled"]) || array_key_exists("isUsersAdminEnabled", $context) ? $context["isUsersAdminEnabled"] : (function () { throw new RuntimeError('Variable "isUsersAdminEnabled" does not exist.', 13, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    change-password-nonce=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("changePasswordNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["changePasswordNonce"]) || array_key_exists("changePasswordNonce", $context) ? $context["changePasswordNonce"] : (function () { throw new RuntimeError('Variable "changePasswordNonce" does not exist.', 14, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    is-valid-host=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isValidHost", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 15, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    is-super-user=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isSuperUser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 16, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    invalid-host=\"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("invalidHost", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["invalidHost"]) || array_key_exists("invalidHost", $context) ? $context["invalidHost"] : (function () { throw new RuntimeError('Variable "invalidHost" does not exist.', 17, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    after-password-event-content=\"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("afterPasswordEventContent", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["afterPasswordEventContent"]) || array_key_exists("afterPasswordEventContent", $context) ? $context["afterPasswordEventContent"] : (function () { throw new RuntimeError('Variable "afterPasswordEventContent" does not exist.', 18, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    invalid-host-mail-link-start=\"";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("invalidHostMailLinkStart", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["invalidHostMailLinkStart"]) || array_key_exists("invalidHostMailLinkStart", $context) ? $context["invalidHostMailLinkStart"] : (function () { throw new RuntimeError('Variable "invalidHostMailLinkStart" does not exist.', 19, $this->source); })()), null)) : (null))), "html", null, true);
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
        return "@UsersManager/userSecurity.twig";
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
        return array (  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  62 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Security'|translate }}{% endset %}

{% block content %}
{% set afterPasswordEventContent %}{{ postEvent('Template.userSecurity.afterPassword') }}{% endset %}

<div
    vue-entry=\"UsersManager.UserSecurity\"
    delete-token-nonce=\"{{ deleteTokenNonce|default(null)|json_encode }}\"
    tokens=\"{{ tokens|default(null)|json_encode }}\"
    has-tokens-with-expire-date=\"{{ hasTokensWithExpireDate|default(null)|json_encode }}\"
    is-users-admin-enabled=\"{{ isUsersAdminEnabled|default(null)|json_encode }}\"
    change-password-nonce=\"{{ changePasswordNonce|default(null)|json_encode }}\"
    is-valid-host=\"{{ isValidHost|default(null)|json_encode }}\"
    is-super-user=\"{{ isSuperUser|default(null)|json_encode }}\"
    invalid-host=\"{{ invalidHost|default(null)|json_encode }}\"
    after-password-event-content=\"{{ afterPasswordEventContent|default(null)|json_encode }}\"
    invalid-host-mail-link-start=\"{{ invalidHostMailLinkStart|default(null)|json_encode }}\"
></div>

{% endblock %}
", "@UsersManager/userSecurity.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UsersManager/templates/userSecurity.twig");
    }
}
