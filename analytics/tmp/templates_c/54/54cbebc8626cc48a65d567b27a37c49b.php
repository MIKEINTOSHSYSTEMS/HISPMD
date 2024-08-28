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

/* @UserCountry/adminIndex.twig */
class __TwigTemplate_65b7aea6b383565ce22edc0b41fd29d2 extends Template
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
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Geolocation"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UserCountry/adminIndex.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $macros["piwik"] = $this->loadTemplate("macros.twig", "@UserCountry/adminIndex.twig", 6)->unwrap();
        // line 7
        yield "
<div
    vue-entry=\"UserCountry.AdminPage\"
    current-provider-id=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["currentProviderId"]) || array_key_exists("currentProviderId", $context) ? $context["currentProviderId"] : (function () { throw new RuntimeError('Variable "currentProviderId" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "\"
    is-there-working-provider=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isThereWorkingProvider", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isThereWorkingProvider"]) || array_key_exists("isThereWorkingProvider", $context) ? $context["isThereWorkingProvider"] : (function () { throw new RuntimeError('Variable "isThereWorkingProvider" does not exist.', 11, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    set-up-guides=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("setUpGuides", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["setUpGuides"]) || array_key_exists("setUpGuides", $context) ? $context["setUpGuides"] : (function () { throw new RuntimeError('Variable "setUpGuides" does not exist.', 12, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    this-ip=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("thisIP", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["thisIP"]) || array_key_exists("thisIP", $context) ? $context["thisIP"] : (function () { throw new RuntimeError('Variable "thisIP" does not exist.', 13, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    location-providers=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("locationProviders", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["locationProviders"]) || array_key_exists("locationProviders", $context) ? $context["locationProviders"] : (function () { throw new RuntimeError('Variable "locationProviders" does not exist.', 14, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    default-provider-id=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\UserCountry\\LocationProvider\\DefaultProvider::ID"), null)), "html", null, true);
        yield "\"
    disabled-provider-id=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\UserCountry\\LocationProvider\\DisabledProvider::ID"), null)), "html", null, true);
        yield "\"
></div>

";
        // line 19
        yield (isset($context["configurations"]) || array_key_exists("configurations", $context) ? $context["configurations"] : (function () { throw new RuntimeError('Variable "configurations" does not exist.', 19, $this->source); })());
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UserCountry/adminIndex.twig";
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
        return array (  94 => 19,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  59 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UserCountry_Geolocation'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}

<div
    vue-entry=\"UserCountry.AdminPage\"
    current-provider-id=\"{{ currentProviderId|json_encode }}\"
    is-there-working-provider=\"{{ isThereWorkingProvider|default(null)|json_encode }}\"
    set-up-guides=\"{{ setUpGuides|default(null)|json_encode }}\"
    this-ip=\"{{ thisIP|default(null)|json_encode }}\"
    location-providers=\"{{ locationProviders|default(null)|json_encode }}\"
    default-provider-id=\"{{ constant(\"Piwik\\\\Plugins\\\\UserCountry\\\\LocationProvider\\\\DefaultProvider::ID\")|default(null)|json_encode }}\"
    disabled-provider-id=\"{{ constant(\"Piwik\\\\Plugins\\\\UserCountry\\\\LocationProvider\\\\DisabledProvider::ID\")|default(null)|json_encode }}\"
></div>

{{ configurations|raw }}

{% endblock %}

", "@UserCountry/adminIndex.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UserCountry/templates/adminIndex.twig");
    }
}
