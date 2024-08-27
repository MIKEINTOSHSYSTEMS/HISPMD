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

/* @Marketplace/overview.twig */
class __TwigTemplate_bf5c0b3dde2f9fbc30efa019c45df775 extends Template
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
        return $this->loadTemplate((((isset($context["inReportingMenu"]) || array_key_exists("inReportingMenu", $context) ? $context["inReportingMenu"] : (function () { throw new RuntimeError('Variable "inReportingMenu" does not exist.', 1, $this->source); })())) ? ("empty.twig") : ("admin.twig")), "@Marketplace/overview.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Marketplace"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div class=\"marketplace\">
        <div
            vue-entry=\"Marketplace.OverviewIntro\"
            current-user-email=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("currentUserEmail", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentUserEmail"]) || array_key_exists("currentUserEmail", $context) ? $context["currentUserEmail"] : (function () { throw new RuntimeError('Variable "currentUserEmail" does not exist.', 10, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            in-reporting-menu=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("inReportingMenu", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inReportingMenu"]) || array_key_exists("inReportingMenu", $context) ? $context["inReportingMenu"] : (function () { throw new RuntimeError('Variable "inReportingMenu" does not exist.', 11, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            is-valid-consumer=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isValidConsumer", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isValidConsumer"]) || array_key_exists("isValidConsumer", $context) ? $context["isValidConsumer"] : (function () { throw new RuntimeError('Variable "isValidConsumer" does not exist.', 12, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            is-super-user=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isSuperUser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 13, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            is-auto-update-possible=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isAutoUpdatePossible", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 14, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            is-multi-server-environment=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isMultiServerEnvironment", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 15, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            is-plugins-admin-enabled=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginsAdminEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 16, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            has-some-admin-access=\"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasSomeAdminAccess", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 17, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
            paid-plugins-to-install-at-once=\"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("paidPluginsToInstallAtOnce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["paidPluginsToInstallAtOnce"]) || array_key_exists("paidPluginsToInstallAtOnce", $context) ? $context["paidPluginsToInstallAtOnce"] : (function () { throw new RuntimeError('Variable "paidPluginsToInstallAtOnce" does not exist.', 18, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\"
            install-nonce=\"";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("installNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["installNonce"]) || array_key_exists("installNonce", $context) ? $context["installNonce"] : (function () { throw new RuntimeError('Variable "installNonce" does not exist.', 19, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            activate-nonce=\"";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("activateNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["activateNonce"]) || array_key_exists("activateNonce", $context) ? $context["activateNonce"] : (function () { throw new RuntimeError('Variable "activateNonce" does not exist.', 20, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            deactivate-nonce=\"";
        // line 21
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deactivateNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["deactivateNonce"]) || array_key_exists("deactivateNonce", $context) ? $context["deactivateNonce"] : (function () { throw new RuntimeError('Variable "deactivateNonce" does not exist.', 21, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            update-nonce=\"";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("updateNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["updateNonce"]) || array_key_exists("updateNonce", $context) ? $context["updateNonce"] : (function () { throw new RuntimeError('Variable "updateNonce" does not exist.', 22, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            is-plugin-upload-enabled=\"";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginUploadEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginUploadEnabled"]) || array_key_exists("isPluginUploadEnabled", $context) ? $context["isPluginUploadEnabled"] : (function () { throw new RuntimeError('Variable "isPluginUploadEnabled" does not exist.', 23, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            upload-limit=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("uploadLimit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["uploadLimit"]) || array_key_exists("uploadLimit", $context) ? $context["uploadLimit"] : (function () { throw new RuntimeError('Variable "uploadLimit" does not exist.', 24, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
            plugin-type-options=\"";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pluginTypeOptions"]) || array_key_exists("pluginTypeOptions", $context) ? $context["pluginTypeOptions"] : (function () { throw new RuntimeError('Variable "pluginTypeOptions" does not exist.', 25, $this->source); })())), "html", null, true);
        yield "\"
            default-sort=\"";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSort"]) || array_key_exists("defaultSort", $context) ? $context["defaultSort"] : (function () { throw new RuntimeError('Variable "defaultSort" does not exist.', 26, $this->source); })())), "html", null, true);
        yield "\"
            plugin-sort-options=\"";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pluginSortOptions"]) || array_key_exists("pluginSortOptions", $context) ? $context["pluginSortOptions"] : (function () { throw new RuntimeError('Variable "pluginSortOptions" does not exist.', 27, $this->source); })())), "html", null, true);
        yield "\"
            num-available-plugins-by-type=\"";
        // line 28
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["numAvailablePluginsByType"]) || array_key_exists("numAvailablePluginsByType", $context) ? $context["numAvailablePluginsByType"] : (function () { throw new RuntimeError('Variable "numAvailablePluginsByType" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "\"
            num-users=\"";
        // line 29
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["numUsers"]) || array_key_exists("numUsers", $context) ? $context["numUsers"] : (function () { throw new RuntimeError('Variable "numUsers" does not exist.', 29, $this->source); })())), "html", null, true);
        yield "\"
        ></div>

        <div class=\"footer-message center\">
            ";
        // line 33
        yield $this->env->getFilter('translate')->getCallable()("Marketplace_DevelopersLearnHowToDevelopPlugins", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/develop"), "</a>");
        yield "
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"";
        // line 37
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://shop.matomo.org/faq/"), "html", null, true);
        yield "\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 38
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://shop.matomo.org/terms-conditions/"), "html", null, true);
        yield "\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 39
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/privacy-policy/"), "html", null, true);
        yield "\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"";
        // line 40
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/contact/"), "html", null, true);
        yield "\" target=\"_blank\">Contact</a>
        </div>

    </div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/overview.twig";
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
        return array (  164 => 40,  160 => 39,  156 => 38,  152 => 37,  145 => 33,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  56 => 6,  52 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends inReportingMenu ? \"empty.twig\" : \"admin.twig\" %}

{% set title %}{{ 'Marketplace_Marketplace'|translate }}{% endset %}

{% block content %}

    <div class=\"marketplace\">
        <div
            vue-entry=\"Marketplace.OverviewIntro\"
            current-user-email=\"{{ currentUserEmail|default(false)|json_encode }}\"
            in-reporting-menu=\"{{ inReportingMenu|default(false)|json_encode }}\"
            is-valid-consumer=\"{{ isValidConsumer|default(false)|json_encode }}\"
            is-super-user=\"{{ isSuperUser|default(false)|json_encode }}\"
            is-auto-update-possible=\"{{ isAutoUpdatePossible|default(false)|json_encode }}\"
            is-multi-server-environment=\"{{ isMultiServerEnvironment|default(false)|json_encode }}\"
            is-plugins-admin-enabled=\"{{ isPluginsAdminEnabled|default(false)|json_encode }}\"
            has-some-admin-access=\"{{  hasSomeAdminAccess|default(false)|json_encode }}\"
            paid-plugins-to-install-at-once=\"{{ paidPluginsToInstallAtOnce|default([])|json_encode }}\"
            install-nonce=\"{{ installNonce|default(null)|json_encode }}\"
            activate-nonce=\"{{ activateNonce|default(null)|json_encode }}\"
            deactivate-nonce=\"{{ deactivateNonce|default(null)|json_encode }}\"
            update-nonce=\"{{ updateNonce|default(null)|json_encode }}\"
            is-plugin-upload-enabled=\"{{ isPluginUploadEnabled|default(null)|json_encode }}\"
            upload-limit=\"{{ uploadLimit|default(null)|json_encode }}\"
            plugin-type-options=\"{{ pluginTypeOptions|json_encode }}\"
            default-sort=\"{{ defaultSort|json_encode }}\"
            plugin-sort-options=\"{{ pluginSortOptions|json_encode }}\"
            num-available-plugins-by-type=\"{{ numAvailablePluginsByType|json_encode }}\"
            num-users=\"{{ numUsers|json_encode }}\"
        ></div>

        <div class=\"footer-message center\">
            {{ 'Marketplace_DevelopersLearnHowToDevelopPlugins'|translate(externallink('https://developer.matomo.org/develop'), '</a>')|raw }}
            <br />
            <br />
            <br />
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://shop.matomo.org/faq/'|trackmatomolink }}\" target=\"_blank\">FAQ</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://shop.matomo.org/terms-conditions/'|trackmatomolink }}\" target=\"_blank\">Terms</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/privacy-policy/'|trackmatomolink }}\" target=\"_blank\">Privacy</a> |
            <a rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/contact/'|trackmatomolink }}\" target=\"_blank\">Contact</a>
        </div>

    </div>

{% endblock %}
", "@Marketplace/overview.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Marketplace/templates/overview.twig");
    }
}
