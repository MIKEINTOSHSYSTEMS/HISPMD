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

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_e70e1e5dd7a574c69736c8b8eb762a3b extends Template
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
        $context["isPiwikDemo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, (((((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "https://demo.matomo.org/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "https://demo.matomo.cloud/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 1, $this->source); })()) == "http://demo.matomo.cloud/")), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        yield "
";
        // line 3
        $context["updateCheck"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
        ";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(((((array_key_exists("lastUpdateCheckFailed", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 6, $this->source); })()), false)) : (false))) ? ("General_ErrorTryAgain") : ("CoreHome_CheckForUpdates"))), "html", null, true);
            yield "
    </span>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "
";
        // line 10
        if ((        // line 11
(isset($context["isAutoUpdateEnabled"]) || array_key_exists("isAutoUpdateEnabled", $context) ? $context["isAutoUpdateEnabled"] : (function () { throw new RuntimeError('Variable "isAutoUpdateEnabled" does not exist.', 11, $this->source); })()) && (((((        // line 12
(isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 12, $this->source); })()) &&  !(isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 12, $this->source); })())) && (isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 12, $this->source); })())) &&  !(isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 12, $this->source); })())) && (isset($context["showUpdateNotificationToUser"]) || array_key_exists("showUpdateNotificationToUser", $context) ? $context["showUpdateNotificationToUser"] : (function () { throw new RuntimeError('Variable "showUpdateNotificationToUser" does not exist.', 12, $this->source); })())) || (        // line 14
(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 14, $this->source); })()) && ((((        // line 16
array_key_exists("isManualUpdateCheck", $context) && (isset($context["isManualUpdateCheck"]) || array_key_exists("isManualUpdateCheck", $context) ? $context["isManualUpdateCheck"] : (function () { throw new RuntimeError('Variable "isManualUpdateCheck" does not exist.', 16, $this->source); })())) && array_key_exists("lastUpdateCheckFailed", $context)) && (isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 16, $this->source); })())) || (        // line 17
array_key_exists("isAdminArea", $context) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 17, $this->source); })()))))))) {
            // line 21
            yield "<div
    vue-entry=\"CoreHome.VersionInfoHeaderMessage\"
    last-update-check-failed=\"";
            // line 23
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("lastUpdateCheckFailed", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["lastUpdateCheckFailed"]) || array_key_exists("lastUpdateCheckFailed", $context) ? $context["lastUpdateCheckFailed"] : (function () { throw new RuntimeError('Variable "lastUpdateCheckFailed" does not exist.', 23, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    latest-version-available=\"";
            // line 24
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("latest_version_available", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 24, $this->source); })()), null)) : (null))), "html", null, true);
            yield "\"
    is-multi-server-environment=\"";
            // line 25
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isMultiServerEnvironment", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 25, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    is-piwik-demo=\"";
            // line 26
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isPiwikDemo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 26, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    is-super-user=\"";
            // line 27
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isSuperUser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 27, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    is-admin-area=\"";
            // line 28
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isAdminArea", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 28, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    is-internet-enabled=\"";
            // line 29
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isInternetEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 29, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    update-check=\"";
            // line 30
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("updateCheck", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["updateCheck"]) || array_key_exists("updateCheck", $context) ? $context["updateCheck"] : (function () { throw new RuntimeError('Variable "updateCheck" does not exist.', 30, $this->source); })()))) : (""))), "html", null, true);
            yield "\"
    has-some-view-access=\"";
            // line 31
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasSomeViewAccess", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 31, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    is-anonymous=\"";
            // line 32
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isUserIsAnonymous", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 32, $this->source); })()), false)) : (false))), "html", null, true);
            yield "\"
    contact-email=\"";
            // line 33
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 33, $this->source); })())), "html", null, true);
            yield "\"
    piwik-version=\"";
            // line 34
            yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("piwik_version", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["piwik_version"]) || array_key_exists("piwik_version", $context) ? $context["piwik_version"] : (function () { throw new RuntimeError('Variable "piwik_version" does not exist.', 34, $this->source); })()), null)) : (null))), "html", null, true);
            yield "\"
    class=\"borderedControl piwikTopControl\"
></div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
";
        } else {
            // line 41
            yield "<span class=\"icon icon-arrowup\"></span>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
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
        return array (  127 => 41,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 21,  67 => 17,  66 => 16,  65 => 14,  64 => 12,  63 => 11,  62 => 10,  59 => 9,  52 => 6,  48 => 4,  46 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.cloud/' or piwikUrl == 'http://demo.matomo.cloud/' }}{% endset %}

{% set updateCheck %}
    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
        {{ (lastUpdateCheckFailed|default(false) ? 'General_ErrorTryAgain' : 'CoreHome_CheckForUpdates')|translate }}
    </span>
{% endset %}

{% if
    isAutoUpdateEnabled and (
        (latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous and showUpdateNotificationToUser)
        or (
            isSuperUser
            and (
                (isManualUpdateCheck is defined and isManualUpdateCheck and lastUpdateCheckFailed is defined and lastUpdateCheckFailed)
                or (isAdminArea is defined and isAdminArea)
            )
        )
    ) %}
<div
    vue-entry=\"CoreHome.VersionInfoHeaderMessage\"
    last-update-check-failed=\"{{ lastUpdateCheckFailed|default(false)|json_encode }}\"
    latest-version-available=\"{{ latest_version_available|default(null)|json_encode }}\"
    is-multi-server-environment=\"{{ isMultiServerEnvironment|default(false)|json_encode }}\"
    is-piwik-demo=\"{{ isPiwikDemo|default(false)|json_encode }}\"
    is-super-user=\"{{ isSuperUser|default(false)|json_encode }}\"
    is-admin-area=\"{{ isAdminArea|default(false)|json_encode }}\"
    is-internet-enabled=\"{{ isInternetEnabled|default(false)|json_encode }}\"
    update-check=\"{{ updateCheck|default|json_encode }}\"
    has-some-view-access=\"{{ hasSomeViewAccess|default(false)|json_encode }}\"
    is-anonymous=\"{{ isUserIsAnonymous|default(false)|json_encode }}\"
    contact-email=\"{{ contactEmail|json_encode }}\"
    piwik-version=\"{{ piwik_version|default(null)|json_encode }}\"
    class=\"borderedControl piwikTopControl\"
></div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
{% else %}
<span class=\"icon icon-arrowup\"></span>
{% endif %}
", "@CoreHome/_headerMessage.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_headerMessage.twig");
    }
}
