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

/* @CorePluginsAdmin/plugins.twig */
class __TwigTemplate_9b261e69c5af5e911f045e5393abefd7 extends Template
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
        // line 2
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_PluginsManagement"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        $this->parent = $this->loadTemplate("admin.twig", "@CorePluginsAdmin/plugins.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
    <div
        vue-entry=\"CorePluginsAdmin.UploadPluginDialog\"
        is-plugin-upload-enabled=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginUploadEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginUploadEnabled"]) || array_key_exists("isPluginUploadEnabled", $context) ? $context["isPluginUploadEnabled"] : (function () { throw new RuntimeError('Variable "isPluginUploadEnabled" does not exist.', 10, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        upload-limit=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("uploadLimit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["uploadLimit"]) || array_key_exists("uploadLimit", $context) ? $context["uploadLimit"] : (function () { throw new RuntimeError('Variable "uploadLimit" does not exist.', 11, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        install-nonce=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("installNonce", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["installNonce"]) || array_key_exists("installNonce", $context) ? $context["installNonce"] : (function () { throw new RuntimeError('Variable "installNonce" does not exist.', 12, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsIntro\"
        is-marketplace-enabled=\"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isMarketplaceEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 17, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        is-plugin-upload-enabled=\"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginUploadEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginUploadEnabled"]) || array_key_exists("isPluginUploadEnabled", $context) ? $context["isPluginUploadEnabled"] : (function () { throw new RuntimeError('Variable "isPluginUploadEnabled" does not exist.', 18, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        is-plugins-admin-enabled=\"";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginsAdminEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 19, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsTableWithUpdates\"
        plugins-having-update=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginsHavingUpdate", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pluginsHavingUpdate"]) || array_key_exists("pluginsHavingUpdate", $context) ? $context["pluginsHavingUpdate"] : (function () { throw new RuntimeError('Variable "pluginsHavingUpdate" does not exist.', 24, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\"
        plugin-update-nonces=\"";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginUpdateNonces", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pluginUpdateNonces"]) || array_key_exists("pluginUpdateNonces", $context) ? $context["pluginUpdateNonces"] : (function () { throw new RuntimeError('Variable "pluginUpdateNonces" does not exist.', 25, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\"
        update-nonce=\"";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["updateNonce"]) || array_key_exists("updateNonce", $context) ? $context["updateNonce"] : (function () { throw new RuntimeError('Variable "updateNonce" does not exist.', 26, $this->source); })())), "html", null, true);
        yield "\"
        is-multi-server-environment=\"";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isMultiServerEnvironment", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 27, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsTable\"
        title=\"";
        // line 32
        yield \Piwik\piwik_escape_filter($this->env, json_encode($this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_InstalledPlugins")), "html", null, true);
        yield "\"
        is-theme=\"false\"
        display-admin-links=\"";
        // line 34
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPluginsAdminEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 34, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
        plugins-info=\"";
        // line 35
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginsInfo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pluginsInfo"]) || array_key_exists("pluginsInfo", $context) ? $context["pluginsInfo"] : (function () { throw new RuntimeError('Variable "pluginsInfo" does not exist.', 35, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\"
        uninstall-nonce=\"";
        // line 36
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["uninstallNonce"]) || array_key_exists("uninstallNonce", $context) ? $context["uninstallNonce"] : (function () { throw new RuntimeError('Variable "uninstallNonce" does not exist.', 36, $this->source); })())), "html", null, true);
        yield "\"
        deactivate-nonce=\"";
        // line 37
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["deactivateNonce"]) || array_key_exists("deactivateNonce", $context) ? $context["deactivateNonce"] : (function () { throw new RuntimeError('Variable "deactivateNonce" does not exist.', 37, $this->source); })())), "html", null, true);
        yield "\"
        activate-nonce=\"";
        // line 38
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["activateNonce"]) || array_key_exists("activateNonce", $context) ? $context["activateNonce"] : (function () { throw new RuntimeError('Variable "activateNonce" does not exist.', 38, $this->source); })())), "html", null, true);
        yield "\"
        marketplace-plugin-names=\"";
        // line 39
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("marketplacePluginNames", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["marketplacePluginNames"]) || array_key_exists("marketplacePluginNames", $context) ? $context["marketplacePluginNames"] : (function () { throw new RuntimeError('Variable "marketplacePluginNames" does not exist.', 39, $this->source); })()), [])) : ([]))), "html", null, true);
        yield "\"
        plugin-names-having-settings=\"";
        // line 40
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("pluginNamesHavingSettings", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pluginNamesHavingSettings"]) || array_key_exists("pluginNamesHavingSettings", $context) ? $context["pluginNamesHavingSettings"] : (function () { throw new RuntimeError('Variable "pluginNamesHavingSettings" does not exist.', 40, $this->source); })()), [])) : ([]))), "html", null, true);
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
        return "@CorePluginsAdmin/plugins.twig";
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
        return array (  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  114 => 32,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  86 => 19,  82 => 18,  78 => 17,  70 => 12,  66 => 11,  62 => 10,  57 => 7,  53 => 6,  48 => 2,  43 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'admin.twig' %}

{% set title %}{{ 'CorePluginsAdmin_PluginsManagement'|translate }}{% endset %}

{% block content %}

    <div
        vue-entry=\"CorePluginsAdmin.UploadPluginDialog\"
        is-plugin-upload-enabled=\"{{ isPluginUploadEnabled|default(null)|json_encode }}\"
        upload-limit=\"{{ uploadLimit|default(null)|json_encode }}\"
        install-nonce=\"{{ installNonce|default(null)|json_encode }}\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsIntro\"
        is-marketplace-enabled=\"{{ isMarketplaceEnabled|default(null)|json_encode }}\"
        is-plugin-upload-enabled=\"{{ isPluginUploadEnabled|default(null)|json_encode }}\"
        is-plugins-admin-enabled=\"{{ isPluginsAdminEnabled|default(null)|json_encode }}\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsTableWithUpdates\"
        plugins-having-update=\"{{ pluginsHavingUpdate|default({})|json_encode }}\"
        plugin-update-nonces=\"{{ pluginUpdateNonces|default({})|json_encode }}\"
        update-nonce=\"{{ updateNonce|json_encode }}\"
        is-multi-server-environment=\"{{ isMultiServerEnvironment|default(false)|json_encode }}\"
    ></div>

    <div
        vue-entry=\"CorePluginsAdmin.PluginsTable\"
        title=\"{{ 'CorePluginsAdmin_InstalledPlugins'|translate|json_encode }}\"
        is-theme=\"false\"
        display-admin-links=\"{{ isPluginsAdminEnabled|default(null)|json_encode }}\"
        plugins-info=\"{{ pluginsInfo|default({})|json_encode }}\"
        uninstall-nonce=\"{{ uninstallNonce|json_encode }}\"
        deactivate-nonce=\"{{ deactivateNonce|json_encode }}\"
        activate-nonce=\"{{ activateNonce|json_encode }}\"
        marketplace-plugin-names=\"{{ marketplacePluginNames|default([])|json_encode }}\"
        plugin-names-having-settings=\"{{ pluginNamesHavingSettings|default([])|json_encode }}\"
    ></div>

{% endblock %}
", "@CorePluginsAdmin/plugins.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CorePluginsAdmin/templates/plugins.twig");
    }
}
