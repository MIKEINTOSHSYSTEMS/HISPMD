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

/* @Login/loginLayout.twig */
class __TwigTemplate_e1b3d26781c998f64329487a92c3f345 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 12, $this->source); })()), $this->env->getFilter('translate')->getCallable()("Login_LogIn"))) : ($this->env->getFilter('translate')->getCallable()("Login_LogIn"))), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["bodyId"] = "loginPage";
        // line 18
        $context["colClass"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("colClassOverride", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["colClassOverride"]) || array_key_exists("colClassOverride", $context) ? $context["colClassOverride"] : (function () { throw new RuntimeError('Variable "colClassOverride" does not exist.', 18, $this->source); })()), "col s12 m6 push-m3 l4 push-l4")) : ("col s12 m6 push-m3 l4 push-l4")), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/loginLayout.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <meta name=\"robots\" content=\"noindex,nofollow\">
";
        return; yield '';
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        $context["deferjs"] = true;
        // line 9
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 14
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
        return; yield '';
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "
    ";
        // line 22
        yield $this->env->getFunction('postEvent')->getCallable()("Template.beforeTopBar", "login");
        yield "
    ";
        // line 23
        yield $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "login");
        yield "

    ";
        // line 25
        yield from         $this->loadTemplate("_iframeBuster.twig", "@Login/loginLayout.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            ";
        // line 31
        yield from         $this->loadTemplate("@CoreHome/_logo.twig", "@Login/loginLayout.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["logoLink" => "https://matomo.org", "centeredLogo" => (($context["isCenteredLogo"]) ?? (true)), "useLargeLogo" => false]));
        // line 32
        yield "        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"";
        // line 36
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["colClass"]) || array_key_exists("colClass", $context) ? $context["colClass"] : (function () { throw new RuntimeError('Variable "colClass" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\">

        ";
        // line 39
        yield "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 39, $this->source); })()) == false))) {
            // line 40
            yield "            ";
            yield from             $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/loginLayout.twig", 40)->unwrap()->yield($context);
            // line 41
            yield "        ";
        } else {
            // line 42
            yield "            ";
            yield from $this->unwrap()->yieldBlock('loginContent', $context, $blocks);
            // line 44
            yield "        ";
        }
        // line 45
        yield "
        </div>

        ";
        // line 48
        if ((array_key_exists("showImageDiv", $context) && array_key_exists("imageToShow", $context))) {
            // line 49
            yield "        <div class=\"col l4 hide-on-med-and-down onboardingImage\">
            <img class=\"responsive-img\" src=\"";
            // line 50
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["imageToShow"]) || array_key_exists("imageToShow", $context) ? $context["imageToShow"] : (function () { throw new RuntimeError('Variable "imageToShow" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "\">
        </div>
        ";
        }
        // line 53
        yield "    </section>

";
        return; yield '';
    }

    // line 42
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/loginLayout.twig";
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
        return array (  172 => 42,  165 => 53,  159 => 50,  156 => 49,  154 => 48,  149 => 45,  146 => 44,  143 => 42,  140 => 41,  137 => 40,  134 => 39,  129 => 36,  123 => 32,  121 => 31,  114 => 26,  112 => 25,  107 => 23,  103 => 22,  100 => 21,  96 => 20,  88 => 14,  80 => 9,  77 => 8,  73 => 7,  64 => 3,  59 => 1,  54 => 18,  52 => 16,  47 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"noindex,nofollow\">
{% endblock %}

{% block head %}
    {% set deferjs = true %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ pageTitle|default('Login_LogIn'|translate) }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% set colClass %}{{ colClassOverride|default('col s12 m6 push-m3 l4 push-l4') }}{% endset %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            {% include \"@CoreHome/_logo.twig\" with { 'logoLink': 'https://matomo.org', 'centeredLogo': (isCenteredLogo ?? true), 'useLargeLogo': false } %}
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"{{ colClass }}\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            {% block loginContent %}
            {% endblock %}
        {% endif %}

        </div>

        {% if showImageDiv is defined and imageToShow is defined %}
        <div class=\"col l4 hide-on-med-and-down onboardingImage\">
            <img class=\"responsive-img\" src=\"{{ imageToShow }}\">
        </div>
        {% endif %}
    </section>

{% endblock %}
", "@Login/loginLayout.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Login/templates/loginLayout.twig");
    }
}
