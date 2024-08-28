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

/* @GeoIp2/setupguide.twig */
class __TwigTemplate_b0a56e215f074361e6915b774854703b extends Template
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
        yield "<h3 style=\"margin-top:0;\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIP"), "html", null, true);
        yield "</h3>
<p>";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIPIntro"), "html", null, true);
        yield "</p>
<ul style=\"list-style:disc !important;margin-left:2em;\">
    <li style=\"list-style-type: disc !important;\">";
        // line 4
        yield $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIP_Step1", (("<a rel=\"noreferrer noopener\" href=\"" . (isset($context["dbipLiteUrl"]) || array_key_exists("dbipLiteUrl", $context) ? $context["dbipLiteUrl"] : (function () { throw new RuntimeError('Variable "dbipLiteUrl" does not exist.', 4, $this->source); })())) . "\">"), "</a>", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">", "</a>");
        yield "<sup>*</sup></li>
    <li style=\"list-style-type: disc !important;\">";
        // line 5
        yield $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIP_Step2", (("'" . (isset($context["dbipLiteFilename"]) || array_key_exists("dbipLiteFilename", $context) ? $context["dbipLiteFilename"] : (function () { throw new RuntimeError('Variable "dbipLiteFilename" does not exist.', 5, $this->source); })())) . "'"), "<strong>", "</strong>", (("<strong>" . (isset($context["dbipLiteDesiredFilename"]) || array_key_exists("dbipLiteDesiredFilename", $context) ? $context["dbipLiteDesiredFilename"] : (function () { throw new RuntimeError('Variable "dbipLiteDesiredFilename" does not exist.', 5, $this->source); })())) . "</strong>"));
        yield "</li>
    <li style=\"list-style-type: disc !important;\">";
        // line 6
        yield $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIP_Step3", "<strong>", "</strong>", "<span style=\"color:green\"><strong>", "</strong></span>");
        yield "</li>
    <li style=\"list-style-type: disc !important;\">";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("GeoIp2_HowToSetupGeoIP_Step4"), "html", null, true);
        yield "</li>
</ul>
<p>&nbsp;</p>

<div class=\"row\">
    <div class=\"col s12\">
        <p><sup>* <small>";
        // line 13
        yield $this->env->getFilter('translate')->getCallable()("UserCountry_GeoIpDbIpAccuracyNote", "<a href=\"https://dev.maxmind.com/geoip/geoip2/geolite2/?rId=piwik\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        yield ".</small></sup></p>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@GeoIp2/setupguide.twig";
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
        return array (  69 => 13,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 style=\"margin-top:0;\">{{ 'GeoIp2_HowToSetupGeoIP'|translate }}</h3>
<p>{{ 'GeoIp2_HowToSetupGeoIPIntro'|translate }}</p>
<ul style=\"list-style:disc !important;margin-left:2em;\">
    <li style=\"list-style-type: disc !important;\">{{ 'GeoIp2_HowToSetupGeoIP_Step1'|translate('<a rel=\"noreferrer noopener\" href=\"'~dbipLiteUrl~'\">','</a>','<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"http://db-ip.com/?refid=mtm\">','</a>')|raw }}<sup>*</sup></li>
    <li style=\"list-style-type: disc !important;\">{{ 'GeoIp2_HowToSetupGeoIP_Step2'|translate(\"'\"~dbipLiteFilename~\"'\",'<strong>','</strong>','<strong>'~dbipLiteDesiredFilename~'</strong>')|raw }}</li>
    <li style=\"list-style-type: disc !important;\">{{ 'GeoIp2_HowToSetupGeoIP_Step3'|translate('<strong>','</strong>','<span style=\"color:green\"><strong>','</strong></span>')|raw }}</li>
    <li style=\"list-style-type: disc !important;\">{{ 'GeoIp2_HowToSetupGeoIP_Step4'|translate }}</li>
</ul>
<p>&nbsp;</p>

<div class=\"row\">
    <div class=\"col s12\">
        <p><sup>* <small>{{ 'UserCountry_GeoIpDbIpAccuracyNote'|translate('<a href=\"https://dev.maxmind.com/geoip/geoip2/geolite2/?rId=piwik\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}.</small></sup></p>
    </div>
</div>", "@GeoIp2/setupguide.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/GeoIp2/templates/setupguide.twig");
    }
}
