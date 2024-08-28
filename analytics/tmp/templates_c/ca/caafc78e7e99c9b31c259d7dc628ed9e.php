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

/* @CoreHome/_htmlEmailHeader.twig */
class __TwigTemplate_a31dbf4c7e7242011f402652b07e3858 extends Template
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
        yield "<html style=\"background-color:#edecec\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"generator\" content=\"Matomo Analytics\">
</head>

<body style=\"";
        // line 9
        yield (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 9, $this->source); })());
        yield " line-height: 24px; margin:0 auto; max-width:1000px; background-color:rgb(255, 255, 255);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);\">

<a name=\"reportTop\"></a>

<table style=\"width:100%; background-color: ";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 13, $this->source); })()), "colorHeaderBackground", [], "any", false, false, false, 13), "html_attr");
        yield "; color: ";
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 13, $this->source); })()), "colorHeaderText", [], "any", false, false, false, 13), "html_attr");
        yield "; padding:10px 0; margin: 0 0 25px 0; height:64px;\">
    <tr>
        <td>
            <a style=\"";
        // line 16
        yield (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 16, $this->source); })());
        yield "; font-size:16px;padding:0 15px;";
        if (( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 16, $this->source); })()) ||  !(isset($context["logoHeader"]) || array_key_exists("logoHeader", $context) ? $context["logoHeader"] : (function () { throw new RuntimeError('Variable "logoHeader" does not exist.', 16, $this->source); })()))) {
            yield "padding-bottom: 8px;";
        }
        yield "color: ";
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 16, $this->source); })()), "colorHeaderText", [], "any", false, false, false, 16), "html_attr");
        yield ";height: 22px;display: inline-block;vertical-align: inherit;\" rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 17
        if (((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 17, $this->source); })()) && (isset($context["logoHeader"]) || array_key_exists("logoHeader", $context) ? $context["logoHeader"] : (function () { throw new RuntimeError('Variable "logoHeader" does not exist.', 17, $this->source); })()))) {
            // line 18
            yield "                    <img src=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) || array_key_exists("logoHeader", $context) ? $context["logoHeader"] : (function () { throw new RuntimeError('Variable "logoHeader" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\" height=\"20px\" width=\"auto\" />
                ";
        } else {
            // line 20
            yield "                    <img src=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "/plugins/Morpheus/images/logo-email.png\" height=\"30px\" width=\"auto\" alt=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStyles"]) || array_key_exists("emailStyles", $context) ? $context["emailStyles"] : (function () { throw new RuntimeError('Variable "emailStyles" does not exist.', 20, $this->source); })()), "brandNameLong", [], "any", false, false, false, 20), "html_attr");
            yield "\" />
                ";
        }
        // line 22
        yield "            </a>
        </td>
        <td align=\"right\">
            ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("idSite", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 25, $this->source); })()))) : ("")))) {
            // line 26
            yield "            <a style=\"";
            yield (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 26, $this->source); })());
            yield "; font-size:16px; padding:0 15px; color: ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 26, $this->source); })()), "colorHeaderText", [], "any", false, false, false, 26), "html_attr");
            yield "\" ";
            if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("websiteName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["websiteName"]) || array_key_exists("websiteName", $context) ? $context["websiteName"] : (function () { throw new RuntimeError('Variable "websiteName" does not exist.', 26, $this->source); })()))) : ("")))) {
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_TopLinkTooltip", (isset($context["websiteName"]) || array_key_exists("websiteName", $context) ? $context["websiteName"] : (function () { throw new RuntimeError('Variable "websiteName" does not exist.', 26, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield " target=\"_blank\" href=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 26, $this->source); })()), "html", null, true);
            yield $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreHome", "action" => "redirectToCoreHomeIndex", "idSite" => (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 26, $this->source); })()), "period" => ((array_key_exists("period", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 26, $this->source); })()))) : ("")), "date" => ((array_key_exists("date", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 26, $this->source); })()))) : ("")), "token_auth" => null, "method" => null, "idReport" => null, "outputType" => null, "format" => null]);
            yield "\">
                ";
            // line 27
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Dashboard"), "html", null, true);
            yield "
            </a>
            ";
        }
        // line 30
        yield "        </td>
    </tr>
</table>

<div style=\"margin:0 20px 25px 20px;\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_htmlEmailHeader.twig";
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
        return array (  120 => 30,  114 => 27,  98 => 26,  96 => 25,  91 => 22,  83 => 20,  77 => 18,  75 => 17,  63 => 16,  55 => 13,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html style=\"background-color:#edecec\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"generator\" content=\"Matomo Analytics\">
</head>

<body style=\"{{fontStyle|raw}} line-height: 24px; margin:0 auto; max-width:1000px; background-color:rgb(255, 255, 255);box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);\">

<a name=\"reportTop\"></a>

<table style=\"width:100%; background-color: {{ themeStyles.colorHeaderBackground|e('html_attr') }}; color: {{ themeStyles.colorHeaderText|e('html_attr') }}; padding:10px 0; margin: 0 0 25px 0; height:64px;\">
    <tr>
        <td>
            <a style=\"{{ fontStyle|raw }}; font-size:16px;padding:0 15px;{% if not isCustomLogo or not logoHeader %}padding-bottom: 8px;{% endif %}color: {{ themeStyles.colorHeaderText|e('html_attr') }};height: 22px;display: inline-block;vertical-align: inherit;\" rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ piwikUrl }}\">
                {% if isCustomLogo and logoHeader %}
                    <img src=\"{{ logoHeader }}\" height=\"20px\" width=\"auto\" />
                {% else %}
                    <img src=\"{{ piwikUrl }}/plugins/Morpheus/images/logo-email.png\" height=\"30px\" width=\"auto\" alt=\"{{ emailStyles.brandNameLong|e('html_attr') }}\" />
                {% endif %}
            </a>
        </td>
        <td align=\"right\">
            {% if idSite|default is not empty %}
            <a style=\"{{ fontStyle|raw }}; font-size:16px; padding:0 15px; color: {{ themeStyles.colorHeaderText|e('html_attr') }}\" {% if websiteName|default is not empty %}title=\"{{'Dashboard_TopLinkTooltip'|translate(websiteName)}}\"{% endif %} target=\"_blank\" href=\"{{ piwikUrl }}{{ linkTo({'module': 'CoreHome', 'action': 'redirectToCoreHomeIndex', 'idSite': idSite, 'period': period|default, 'date': date|default, 'token_auth': null, 'method': null, 'idReport': null, 'outputType': null, 'format': null})|raw }}\">
                {{ 'Dashboard_Dashboard'|translate }}
            </a>
            {% endif %}
        </td>
    </tr>
</table>

<div style=\"margin:0 20px 25px 20px;\">
", "@CoreHome/_htmlEmailHeader.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_htmlEmailHeader.twig");
    }
}
