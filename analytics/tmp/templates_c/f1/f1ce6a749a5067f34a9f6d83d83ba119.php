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

/* @API/listAllAPI.twig */
class __TwigTemplate_74f4852550916f7488d7a65229ebdbf3 extends Template
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
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("API_ReportingApiReference"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@API/listAllAPI.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@API/listAllAPI.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_periodSelect.twig", "@API/listAllAPI.twig", 7)->unwrap()->yield($context);
        return; yield '';
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "
<div class=\"api-list\">
    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" rate=\"true\">
        <p>";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("API_PluginDescription"), "html", null, true);
        yield "</p>

        <p>
            ";
        // line 17
        yield $this->env->getFilter('translate')->getCallable()("API_MoreInformation", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/docs/analytics-api"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/api-reference/reporting-api"), "</a>");
        yield "
        </p>
    </div>
    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("API_UserAuthentication"), "html", null, true);
        yield "\">
        <p>
            ";
        // line 22
        yield $this->env->getFilter('translate')->getCallable()("API_UsingTokenAuth", "", "", "<code>token_auth</code>");
        yield " <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://developer.matomo.org/api-reference/reporting-api#authenticate-to-the-api-via-token_auth-parameter"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_LearnMore"), "html", null, true);
        yield "</a><br/>
            <br/>
            <a href=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "UsersManager", "action" => "userSecurity"]), "html", null, true);
        // line 27
        yield "#/#authtokens\">You can manage your authentication tokens on your security page.</a>
        </p>
    </div>
    ";
        // line 30
        yield (isset($context["list_api_methods_with_links"]) || array_key_exists("list_api_methods_with_links", $context) ? $context["list_api_methods_with_links"] : (function () { throw new RuntimeError('Variable "list_api_methods_with_links" does not exist.', 30, $this->source); })());
        yield "
    <br/>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@API/listAllAPI.twig";
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
        return array (  112 => 30,  107 => 27,  105 => 24,  96 => 22,  91 => 20,  85 => 17,  79 => 14,  75 => 13,  71 => 11,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  49 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'API_ReportingApiReference'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div class=\"api-list\">
    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ title }}\" rate=\"true\">
        <p>{{ 'API_PluginDescription'|translate }}</p>

        <p>
            {{ 'API_MoreInformation'|translate(externallink(\"https://matomo.org/docs/analytics-api\"),\"</a>\", externallink(\"https://developer.matomo.org/api-reference/reporting-api\"),\"</a>\")|raw }}
        </p>
    </div>
    <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'API_UserAuthentication'|translate }}\">
        <p>
            {{ 'API_UsingTokenAuth'|translate('','',\"<code>token_auth</code>\")|raw }} <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://developer.matomo.org/api-reference/reporting-api#authenticate-to-the-api-via-token_auth-parameter'|trackmatomolink }}\">{{ 'CoreAdminHome_LearnMore'|translate }}</a><br/>
            <br/>
            <a href=\"{{ linkTo({
                'module': 'UsersManager',
                'action': 'userSecurity',
            }) }}#/#authtokens\">You can manage your authentication tokens on your security page.</a>
        </p>
    </div>
    {{ list_api_methods_with_links|raw }}
    <br/>
</div>
{% endblock %}
", "@API/listAllAPI.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/API/templates/listAllAPI.twig");
    }
}
