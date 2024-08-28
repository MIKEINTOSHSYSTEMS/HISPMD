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

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_b16c223f53d78719878e4f4466fbb6a3 extends Template
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
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_MenuGeneralSettings"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
    ";
        // line 7
        $macros["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 7)->unwrap();
        // line 8
        yield "    ";
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 8)->unwrap();
        // line 9
        yield "
    ";
        // line 10
        yield CoreExtension::callMacro($macros["ajax"], "macro_errorDiv", [], 10, $context, $this->getSourceContext());
        yield "
    ";
        // line 11
        yield CoreExtension::callMacro($macros["ajax"], "macro_loadingDiv", [], 11, $context, $this->getSourceContext());
        yield "

    <div class=\"card generalSettingsTOCCard\">
        <div id=\"generalSettingsTOC\" class=\"card-action\">
            ";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_GoTo2"), "html", null, true);
        yield ":
            ";
        // line 16
        if ((isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 16, $this->source); })())) {
            // line 17
            yield "            <a href=\"#/archivingSettings\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ArchivingSettings"), "html", null, true);
            yield "</a>
                ";
            // line 18
            if ( !(isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 18, $this->source); })())) {
                // line 19
                yield "                <a href=\"#/mailSettings\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_EmailServerSettings"), "html", null, true);
                yield "</a>
                ";
            }
            // line 21
            yield "            ";
        }
        // line 22
        yield "            ";
        if ((isset($context["customLogoEnabled"]) || array_key_exists("customLogoEnabled", $context) ? $context["customLogoEnabled"] : (function () { throw new RuntimeError('Variable "customLogoEnabled" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "            <a href=\"#/brandingSettings\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_BrandingSettings"), "html", null, true);
            yield "</a>
            ";
        }
        // line 25
        yield "            ";
        if ((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "            <a href=\"#/deleteDataSettings\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings"), "html", null, true);
            yield "</a>
            ";
        }
        // line 28
        yield "            ";
        yield $this->env->getFunction('postEvent')->getCallable()("Template.endGeneralSettingsPageTableOfContents");
        yield "
        </div>
    </div>

";
        // line 32
        if ((isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 32, $this->source); })())) {
            // line 33
            yield "    <div
        vue-entry=\"CoreAdminHome.ArchivingSettings\"
        enable-browser-trigger-archiving=\"";
            // line 35
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((isset($context["enableBrowserTriggerArchiving"]) || array_key_exists("enableBrowserTriggerArchiving", $context) ? $context["enableBrowserTriggerArchiving"] : (function () { throw new RuntimeError('Variable "enableBrowserTriggerArchiving" does not exist.', 35, $this->source); })()) == 1)), "html", null, true);
            yield "\"
        show-segment-archive-trigger-info=\"";
            // line 36
            yield \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["showSegmentArchiveTriggerInfo"]) || array_key_exists("showSegmentArchiveTriggerInfo", $context) ? $context["showSegmentArchiveTriggerInfo"] : (function () { throw new RuntimeError('Variable "showSegmentArchiveTriggerInfo" does not exist.', 36, $this->source); })())), "html", null, true);
            yield "\"
        is-general-settings-admin-enabled=\"";
            // line 37
            yield \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 37, $this->source); })())), "html", null, true);
            yield "\"
        show-warning-cron=\"";
            // line 38
            yield \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["showWarningCron"]) || array_key_exists("showWarningCron", $context) ? $context["showWarningCron"] : (function () { throw new RuntimeError('Variable "showWarningCron" does not exist.', 38, $this->source); })())), "html", null, true);
            yield "\"
        today-archive-time-to-live=\"";
            // line 39
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLive"]) || array_key_exists("todayArchiveTimeToLive", $context) ? $context["todayArchiveTimeToLive"] : (function () { throw new RuntimeError('Variable "todayArchiveTimeToLive" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "\"
        today-archive-time-to-live-default=\"";
            // line 40
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLiveDefault"]) || array_key_exists("todayArchiveTimeToLiveDefault", $context) ? $context["todayArchiveTimeToLiveDefault"] : (function () { throw new RuntimeError('Variable "todayArchiveTimeToLiveDefault" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\"
    ></div>

    ";
            // line 43
            if ( !(isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 43, $this->source); })())) {
                // line 44
                yield "        <div
            vue-entry=\"CoreAdminHome.SmtpSettings\"
            mail=\"";
                // line 46
                yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 46, $this->source); })())), "html", null, true);
                yield "\"
            mail-types=\"";
                // line 47
                yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mailTypes"]) || array_key_exists("mailTypes", $context) ? $context["mailTypes"] : (function () { throw new RuntimeError('Variable "mailTypes" does not exist.', 47, $this->source); })())), "html", null, true);
                yield "\"
            mail-encryptions=\"";
                // line 48
                yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mailEncryptions"]) || array_key_exists("mailEncryptions", $context) ? $context["mailEncryptions"] : (function () { throw new RuntimeError('Variable "mailEncryptions" does not exist.', 48, $this->source); })())), "html", null, true);
                yield "\"
        ></div>
    ";
            }
        }
        // line 52
        yield "
";
        // line 53
        if ((isset($context["customLogoEnabled"]) || array_key_exists("customLogoEnabled", $context) ? $context["customLogoEnabled"] : (function () { throw new RuntimeError('Variable "customLogoEnabled" does not exist.', 53, $this->source); })())) {
            // line 54
            yield "<div
    vue-entry=\"CoreAdminHome.BrandingSettings\"
    file-upload-enabled=\"";
            // line 56
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["fileUploadEnabled"]) || array_key_exists("fileUploadEnabled", $context) ? $context["fileUploadEnabled"] : (function () { throw new RuntimeError('Variable "fileUploadEnabled" does not exist.', 56, $this->source); })())), "html", null, true);
            yield "\"
    logos-writeable=\"";
            // line 57
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["logosWriteable"]) || array_key_exists("logosWriteable", $context) ? $context["logosWriteable"] : (function () { throw new RuntimeError('Variable "logosWriteable" does not exist.', 57, $this->source); })())), "html", null, true);
            yield "\"
    use-custom-logo=\"";
            // line 58
            yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["branding"]) || array_key_exists("branding", $context) ? $context["branding"] : (function () { throw new RuntimeError('Variable "branding" does not exist.', 58, $this->source); })()), "use_custom_logo", [], "any", false, false, false, 58)), "html", null, true);
            yield "\"
    path-user-logo-directory=\"";
            // line 59
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoDirectory"]) || array_key_exists("pathUserLogoDirectory", $context) ? $context["pathUserLogoDirectory"] : (function () { throw new RuntimeError('Variable "pathUserLogoDirectory" does not exist.', 59, $this->source); })())), "html", null, true);
            yield "\"
    path-user-logo=\"";
            // line 60
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogo"]) || array_key_exists("pathUserLogo", $context) ? $context["pathUserLogo"] : (function () { throw new RuntimeError('Variable "pathUserLogo" does not exist.', 60, $this->source); })())), "html", null, true);
            yield "\"
    path-user-logo-small=\"";
            // line 61
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoSmall"]) || array_key_exists("pathUserLogoSmall", $context) ? $context["pathUserLogoSmall"] : (function () { throw new RuntimeError('Variable "pathUserLogoSmall" does not exist.', 61, $this->source); })())), "html", null, true);
            yield "\"
    path-user-logo-svg=\"";
            // line 62
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoSVG"]) || array_key_exists("pathUserLogoSVG", $context) ? $context["pathUserLogoSVG"] : (function () { throw new RuntimeError('Variable "pathUserLogoSVG" does not exist.', 62, $this->source); })())), "html", null, true);
            yield "\"
    has-user-logo=\"";
            // line 63
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["hasUserLogo"]) || array_key_exists("hasUserLogo", $context) ? $context["hasUserLogo"] : (function () { throw new RuntimeError('Variable "hasUserLogo" does not exist.', 63, $this->source); })())), "html", null, true);
            yield "\"
    path-user-favicon=\"";
            // line 64
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserFavicon"]) || array_key_exists("pathUserFavicon", $context) ? $context["pathUserFavicon"] : (function () { throw new RuntimeError('Variable "pathUserFavicon" does not exist.', 64, $this->source); })())), "html", null, true);
            yield "\"
    has-user-favicon=\"";
            // line 65
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["hasUserFavicon"]) || array_key_exists("hasUserFavicon", $context) ? $context["hasUserFavicon"] : (function () { throw new RuntimeError('Variable "hasUserFavicon" does not exist.', 65, $this->source); })())), "html", null, true);
            yield "\"
    is-plugins-admin-enabled=\"";
            // line 66
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 66, $this->source); })())), "html", null, true);
            yield "\"
></div>
";
        }
        // line 69
        yield "
";
        // line 70
        if ((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 70, $this->source); })())) {
            // line 71
            yield "    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings"), "html", null, true);
            yield "\"
         anchor=\"deleteDataSettings\">
        <p>";
            // line 73
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataDescription"), "html", null, true);
            yield "</p>
        <p>
            <a href='";
            // line 75
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "PrivacyManager", "action" => "privacySettings"]), "html", null, true);
            yield "#deleteLogsAnchor'>
                ";
            // line 76
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_ClickHereSettings", (("'" . $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings")) . "'")), "html", null, true);
            yield "
            </a>
        </p>
    </div>
";
        }
        // line 81
        yield "
<div vue-entry=\"CorePluginsAdmin.PluginSettings\" mode=\"admin\"></div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
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
        return array (  263 => 81,  255 => 76,  251 => 75,  246 => 73,  240 => 71,  238 => 70,  235 => 69,  229 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  197 => 58,  193 => 57,  189 => 56,  185 => 54,  183 => 53,  180 => 52,  173 => 48,  169 => 47,  165 => 46,  161 => 44,  159 => 43,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 33,  127 => 32,  119 => 28,  113 => 26,  110 => 25,  104 => 23,  101 => 22,  98 => 21,  92 => 19,  90 => 18,  85 => 17,  83 => 16,  79 => 15,  72 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}

    {% import 'macros.twig' as piwik %}
    {% import 'ajaxMacros.twig' as ajax %}

    {{ ajax.errorDiv() }}
    {{ ajax.loadingDiv() }}

    <div class=\"card generalSettingsTOCCard\">
        <div id=\"generalSettingsTOC\" class=\"card-action\">
            {{ 'General_GoTo2'|translate }}:
            {% if isGeneralSettingsAdminEnabled %}
            <a href=\"#/archivingSettings\">{{ 'CoreAdminHome_ArchivingSettings'|translate  }}</a>
                {% if not isMultiServerEnvironment %}
                <a href=\"#/mailSettings\">{{ 'CoreAdminHome_EmailServerSettings'|translate }}</a>
                {% endif %}
            {% endif %}
            {% if customLogoEnabled %}
            <a href=\"#/brandingSettings\">{{ 'CoreAdminHome_BrandingSettings'|translate }}</a>
            {% endif %}
            {% if isDataPurgeSettingsEnabled %}
            <a href=\"#/deleteDataSettings\">{{ 'PrivacyManager_DeleteDataSettings'|translate }}</a>
            {% endif %}
            {{ postEvent('Template.endGeneralSettingsPageTableOfContents') }}
        </div>
    </div>

{% if isGeneralSettingsAdminEnabled %}
    <div
        vue-entry=\"CoreAdminHome.ArchivingSettings\"
        enable-browser-trigger-archiving=\"{{ (enableBrowserTriggerArchiving==1)|json_encode }}\"
        show-segment-archive-trigger-info=\"{{ (not not showSegmentArchiveTriggerInfo)|json_encode }}\"
        is-general-settings-admin-enabled=\"{{ (not not isGeneralSettingsAdminEnabled)|json_encode }}\"
        show-warning-cron=\"{{ (not not showWarningCron)|json_encode }}\"
        today-archive-time-to-live=\"{{ todayArchiveTimeToLive }}\"
        today-archive-time-to-live-default=\"{{ todayArchiveTimeToLiveDefault }}\"
    ></div>

    {% if not isMultiServerEnvironment %}
        <div
            vue-entry=\"CoreAdminHome.SmtpSettings\"
            mail=\"{{ mail|json_encode }}\"
            mail-types=\"{{ mailTypes|json_encode }}\"
            mail-encryptions=\"{{ mailEncryptions|json_encode }}\"
        ></div>
    {% endif %}
{% endif %}

{% if customLogoEnabled %}
<div
    vue-entry=\"CoreAdminHome.BrandingSettings\"
    file-upload-enabled=\"{{ fileUploadEnabled|json_encode }}\"
    logos-writeable=\"{{ logosWriteable|json_encode }}\"
    use-custom-logo=\"{{ branding.use_custom_logo|json_encode }}\"
    path-user-logo-directory=\"{{ pathUserLogoDirectory|json_encode }}\"
    path-user-logo=\"{{ pathUserLogo|json_encode }}\"
    path-user-logo-small=\"{{ pathUserLogoSmall|json_encode }}\"
    path-user-logo-svg=\"{{ pathUserLogoSVG|json_encode }}\"
    has-user-logo=\"{{ hasUserLogo|json_encode }}\"
    path-user-favicon=\"{{ pathUserFavicon|json_encode }}\"
    has-user-favicon=\"{{ hasUserFavicon|json_encode }}\"
    is-plugins-admin-enabled=\"{{ isPluginsAdminEnabled|json_encode }}\"
></div>
{% endif %}

{% if isDataPurgeSettingsEnabled %}
    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'PrivacyManager_DeleteDataSettings'|translate }}\"
         anchor=\"deleteDataSettings\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }}</p>
        <p>
            <a href='{{ linkTo({'module':\"PrivacyManager\", 'action':\"privacySettings\"}) }}#deleteLogsAnchor'>
                {{ 'PrivacyManager_ClickHereSettings'|translate(\"'\" ~ 'PrivacyManager_DeleteDataSettings'|translate ~ \"'\") }}
            </a>
        </p>
    </div>
{% endif %}

<div vue-entry=\"CorePluginsAdmin.PluginSettings\" mode=\"admin\"></div>

{% endblock %}
", "@CoreAdminHome/generalSettings.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreAdminHome/templates/generalSettings.twig");
    }
}
