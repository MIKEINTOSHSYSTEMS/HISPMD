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

/* @CoreHome/getDefaultIndexView.twig */
class __TwigTemplate_eb2b4ce6d9e2dc9477f77bdaae2965d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreHome/getDefaultIndexView.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@CoreHome/getDefaultIndexView.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@CoreHome/getDefaultIndexView.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_periodSelect.twig", "@CoreHome/getDefaultIndexView.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield $this->env->getFunction('postEvent')->getCallable()("Template.nextToCalendar");
        yield "
    <div vue-entry=\"Dashboard.DashboardSettings\"></div>
    ";
        // line 9
        yield from         $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/getDefaultIndexView.twig", 9)->unwrap()->yield($context);
        return; yield '';
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield CoreExtension::callMacro($macros["ajax"], "macro_requestErrorDiv", [((array_key_exists("contactEmail", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 13, $this->source); })()), "")) : ("")), (isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 13, $this->source); })()), (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 13, $this->source); })()), (isset($context["showMoreFaqInfo"]) || array_key_exists("showMoreFaqInfo", $context) ? $context["showMoreFaqInfo"] : (function () { throw new RuntimeError('Variable "showMoreFaqInfo" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        yield "
    ";
        // line 14
        yield CoreExtension::callMacro($macros["ajax"], "macro_loadingDiv", [], 14, $context, $this->getSourceContext());
        yield "

    <div id=\"content\" class=\"home\">
        ";
        // line 17
        if ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })())) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        // line 18
        yield "        <div vue-entry=\"CoreHome.ReportingPage\"></div>
    </div>
    <div class=\"clear\"></div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/getDefaultIndexView.twig";
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
        return array (  91 => 18,  87 => 17,  81 => 14,  76 => 13,  72 => 12,  67 => 9,  61 => 7,  58 => 6,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}
{% import 'ajaxMacros.twig' as ajax %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
    {{ postEvent(\"Template.nextToCalendar\") }}
    <div vue-entry=\"Dashboard.DashboardSettings\"></div>
    {% include \"@CoreHome/_headerMessage.twig\" %}
{% endblock %}

{% block content %}
    {{ ajax.requestErrorDiv(contactEmail|default(''), areAdsForProfessionalServicesEnabled, currentModule, showMoreFaqInfo) }}
    {{ ajax.loadingDiv() }}

    <div id=\"content\" class=\"home\">
        {% if content %}{{ content }}{% endif %}
        <div vue-entry=\"CoreHome.ReportingPage\"></div>
    </div>
    <div class=\"clear\"></div>

{% endblock %}

", "@CoreHome/getDefaultIndexView.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/getDefaultIndexView.twig");
    }
}
