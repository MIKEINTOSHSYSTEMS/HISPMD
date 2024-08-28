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

/* @GeoIp2/configuration.twig */
class __TwigTemplate_2c2e27106ef96dacb8452a6d531b5cf6 extends Template
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
        yield "<div
  vue-entry=\"GeoIp2.GeoIp2Updater\"
  geoip-database-started-installed=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("geoIPDatabasesInstalled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["geoIPDatabasesInstalled"]) || array_key_exists("geoIPDatabasesInstalled", $context) ? $context["geoIPDatabasesInstalled"] : (function () { throw new RuntimeError('Variable "geoIPDatabasesInstalled" does not exist.', 3, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  show-geoip-update-section=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("showGeoIPUpdateSection", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["showGeoIPUpdateSection"]) || array_key_exists("showGeoIPUpdateSection", $context) ? $context["showGeoIPUpdateSection"] : (function () { throw new RuntimeError('Variable "showGeoIPUpdateSection" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  dbip-lite-url=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("dbipLiteUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dbipLiteUrl"]) || array_key_exists("dbipLiteUrl", $context) ? $context["dbipLiteUrl"] : (function () { throw new RuntimeError('Variable "dbipLiteUrl" does not exist.', 5, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  dbip-lite-filename=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("dbipLiteFilename", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dbipLiteFilename"]) || array_key_exists("dbipLiteFilename", $context) ? $context["dbipLiteFilename"] : (function () { throw new RuntimeError('Variable "dbipLiteFilename" does not exist.', 6, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  geoip-loc-url=\"";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("geoIPLocUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["geoIPLocUrl"]) || array_key_exists("geoIPLocUrl", $context) ? $context["geoIPLocUrl"] : (function () { throw new RuntimeError('Variable "geoIPLocUrl" does not exist.', 7, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  is-provider-plugin-active=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isProviderPluginActive", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isProviderPluginActive"]) || array_key_exists("isProviderPluginActive", $context) ? $context["isProviderPluginActive"] : (function () { throw new RuntimeError('Variable "isProviderPluginActive" does not exist.', 8, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  geoip-isp-url=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("geoIPIspUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["geoIPIspUrl"]) || array_key_exists("geoIPIspUrl", $context) ? $context["geoIPIspUrl"] : (function () { throw new RuntimeError('Variable "geoIPIspUrl" does not exist.', 9, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  last-time-updater-run=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("lastTimeUpdaterRun", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["lastTimeUpdaterRun"]) || array_key_exists("lastTimeUpdaterRun", $context) ? $context["lastTimeUpdaterRun"] : (function () { throw new RuntimeError('Variable "lastTimeUpdaterRun" does not exist.', 10, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  geoip-update-period=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("geoIPUpdatePeriod", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["geoIPUpdatePeriod"]) || array_key_exists("geoIPUpdatePeriod", $context) ? $context["geoIPUpdatePeriod"] : (function () { throw new RuntimeError('Variable "geoIPUpdatePeriod" does not exist.', 11, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  update-period-options=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("updatePeriodOptions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["updatePeriodOptions"]) || array_key_exists("updatePeriodOptions", $context) ? $context["updatePeriodOptions"] : (function () { throw new RuntimeError('Variable "updatePeriodOptions" does not exist.', 12, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  is-provider-plugin-active=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isProviderPluginActive", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isProviderPluginActive"]) || array_key_exists("isProviderPluginActive", $context) ? $context["isProviderPluginActive"] : (function () { throw new RuntimeError('Variable "isProviderPluginActive" does not exist.', 13, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
  next-run-time=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode((((isset($context["nextRunTime"]) || array_key_exists("nextRunTime", $context) ? $context["nextRunTime"] : (function () { throw new RuntimeError('Variable "nextRunTime" does not exist.', 14, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["nextRunTime"]) || array_key_exists("nextRunTime", $context) ? $context["nextRunTime"] : (function () { throw new RuntimeError('Variable "nextRunTime" does not exist.', 14, $this->source); })()), "getTimestamp", [], "method", false, false, false, 14)) : (null))), "html", null, true);
        yield "\"
  next-run-time-pretty=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode((((isset($context["nextRunTime"]) || array_key_exists("nextRunTime", $context) ? $context["nextRunTime"] : (function () { throw new RuntimeError('Variable "nextRunTime" does not exist.', 15, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["nextRunTime"]) || array_key_exists("nextRunTime", $context) ? $context["nextRunTime"] : (function () { throw new RuntimeError('Variable "nextRunTime" does not exist.', 15, $this->source); })()), "toString", [], "method", false, false, false, 15)) : (null))), "html", null, true);
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
        return "@GeoIp2/configuration.twig";
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
        return array (  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
  vue-entry=\"GeoIp2.GeoIp2Updater\"
  geoip-database-started-installed=\"{{ geoIPDatabasesInstalled|default(null)|json_encode }}\"
  show-geoip-update-section=\"{{ showGeoIPUpdateSection|default(null)|json_encode }}\"
  dbip-lite-url=\"{{ dbipLiteUrl|default(null)|json_encode }}\"
  dbip-lite-filename=\"{{ dbipLiteFilename|default(null)|json_encode }}\"
  geoip-loc-url=\"{{ geoIPLocUrl|default(null)|json_encode }}\"
  is-provider-plugin-active=\"{{ isProviderPluginActive|default(null)|json_encode }}\"
  geoip-isp-url=\"{{ geoIPIspUrl|default(null)|json_encode }}\"
  last-time-updater-run=\"{{ lastTimeUpdaterRun|default(null)|json_encode }}\"
  geoip-update-period=\"{{ geoIPUpdatePeriod|default(null)|json_encode }}\"
  update-period-options=\"{{ updatePeriodOptions|default(null)|json_encode }}\"
  is-provider-plugin-active=\"{{ isProviderPluginActive|default(null)|json_encode }}\"
  next-run-time=\"{{ (nextRunTime ? nextRunTime.getTimestamp() : null)|json_encode }}\"
  next-run-time-pretty=\"{{ (nextRunTime ? nextRunTime.toString() : null)|json_encode }}\"
>
</div>
", "@GeoIp2/configuration.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/GeoIp2/templates/configuration.twig");
    }
}
