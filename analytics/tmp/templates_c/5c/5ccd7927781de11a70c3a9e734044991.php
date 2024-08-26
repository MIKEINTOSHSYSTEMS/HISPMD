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

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_789b8ed4eb6330c01163cc7e47b54a2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notification' => [$this, 'block_notification'],
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
        // line 7
        $context["bodyId"] = "site-without-data";
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_notifications.twig", "@SitesManager/siteWithoutData.twig", 4)->unwrap()->yield($context);
        return; yield '';
    }

    // line 9
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        if ( !(isset($context["isSingleSite"]) || array_key_exists("isSingleSite", $context) ? $context["isSingleSite"] : (function () { throw new RuntimeError('Variable "isSingleSite" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "    ";
            yield from             $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "    ";
        }
        return; yield '';
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        $context["ctaEventContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "        <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["inviteUserLink"]) || array_key_exists("inviteUserLink", $context) ? $context["inviteUserLink"] : (function () { throw new RuntimeError('Variable "inviteUserLink" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "\">
            <span class=\"icon-user-add\"></span>
            ";
            // line 19
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_InviteTeamMember"), "html", null, true);
            yield "
        </a>
        ";
            // line 21
            yield $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.additionalCta");
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield "
    <div
        vue-entry=\"SitesManager.SiteWithoutData\"
        cta-content=\"";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["ctaEventContent"]) || array_key_exists("ctaEventContent", $context) ? $context["ctaEventContent"] : (function () { throw new RuntimeError('Variable "ctaEventContent" does not exist.', 26, $this->source); })())), "html", null, true);
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
        return "@SitesManager/siteWithoutData.twig";
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
        return array (  107 => 26,  102 => 23,  96 => 21,  91 => 19,  85 => 17,  82 => 16,  78 => 15,  72 => 12,  69 => 11,  66 => 10,  62 => 9,  56 => 4,  52 => 3,  47 => 1,  45 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}

{% block notification %}
    {% include \"@CoreHome/_notifications.twig\" %}
{% endblock %}

{% set bodyId = 'site-without-data' %}

{% block topcontrols %}
    {% if not isSingleSite %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% endif %}
{% endblock %}

{% block content %}
    {% set ctaEventContent %}
        <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ inviteUserLink }}\">
            <span class=\"icon-user-add\"></span>
            {{ 'UsersManager_InviteTeamMember'|translate }}
        </a>
        {{ postEvent('Template.siteWithoutData.additionalCta') }}
    {% endset %}

    <div
        vue-entry=\"SitesManager.SiteWithoutData\"
        cta-content=\"{{ ctaEventContent|json_encode }}\"
    ></div>

{% endblock %}
", "@SitesManager/siteWithoutData.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/siteWithoutData.twig");
    }
}
