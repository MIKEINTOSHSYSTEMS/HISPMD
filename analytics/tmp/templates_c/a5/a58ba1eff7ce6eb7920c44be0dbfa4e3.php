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

/* layout.twig */
class __TwigTemplate_c03f7d3d5217c845f75bf37e64b16ec1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if (array_key_exists("language", $context)) {
            yield "lang=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
    <head>
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 32
        yield "    </head>
    <body id=\"";
        // line 33
        yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["bodyId"]) || array_key_exists("bodyId", $context) ? $context["bodyId"] : (function () { throw new RuntimeError('Variable "bodyId" does not exist.', 33, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"";
        yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 33, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
        ";
        // line 34
        yield $this->env->getFunction('postEvent')->getCallable()("Template.bodyTop");
        yield "

    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 48
        yield "
        <div id=\"pageFooter\">
            ";
        // line 50
        yield $this->env->getFunction('postEvent')->getCallable()("Template.pageFooter");
        yield "
        </div>

        ";
        // line 53
        yield from         $this->loadTemplate("@CoreHome/_adblockDetect.twig", "layout.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "
        ";
        // line 55
        yield $this->env->getFunction('postEvent')->getCallable()("Template.bodyBottom");
        yield "
    </body>
</html>
";
        return; yield '';
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 12
        yield "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 16
        yield from $this->unwrap()->yieldBlock('pageDescription', $context, $blocks);
        yield "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            ";
        // line 19
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 22
        yield "
            ";
        // line 23
        yield from         $this->loadTemplate("@CoreHome/_favicon.twig", "layout.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "            ";
        yield from         $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "layout.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "            <meta name=\"theme-color\" content=\"";
        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 25, $this->source); })()), "colorHeaderBackground", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
            ";
        // line 26
        yield from         $this->loadTemplate("_jsGlobalVariables.twig", "layout.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "            ";
        yield from         $this->loadTemplate("_jsCssIncludes.twig", "layout.twig", 27)->unwrap()->yield($context);
        // line 29
        if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 29, $this->source); })())) {
            yield "<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\" crossorigin=\"use-credentials\">";
        }
        // line 30
        yield "
        ";
        return; yield '';
    }

    // line 7
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (array_key_exists("title", $context)) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
            yield " - ";
        }
        // line 9
        if (array_key_exists("categoryTitle", $context)) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["categoryTitle"]) || array_key_exists("categoryTitle", $context) ? $context["categoryTitle"] : (function () { throw new RuntimeError('Variable "categoryTitle" does not exist.', 9, $this->source); })()), "html", null, true);
            yield " - ";
        }
        // line 10
        yield "Matomo";
        return; yield '';
    }

    // line 16
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 19
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
        return; yield '';
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "        ";
        yield from         $this->loadTemplate("_iframeBuster.twig", "layout.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "        ";
        yield from         $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "layout.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "
        <div id=\"root\">
            ";
        // line 41
        yield from $this->unwrap()->yieldBlock('root', $context, $blocks);
        // line 43
        yield "        </div>

        ";
        // line 45
        yield from         $this->loadTemplate("@CoreHome/_shortcuts.twig", "layout.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "
    ";
        return; yield '';
    }

    // line 41
    public function block_root($context, array $blocks = [])
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
        return "layout.twig";
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
        return array (  212 => 41,  206 => 46,  204 => 45,  200 => 43,  198 => 41,  194 => 39,  191 => 38,  188 => 37,  184 => 36,  175 => 19,  168 => 16,  163 => 10,  158 => 9,  153 => 8,  149 => 7,  143 => 30,  139 => 29,  136 => 27,  134 => 26,  129 => 25,  126 => 24,  124 => 23,  121 => 22,  119 => 19,  113 => 16,  107 => 12,  105 => 7,  102 => 5,  98 => 4,  89 => 55,  86 => 54,  84 => 53,  78 => 50,  74 => 48,  72 => 36,  67 => 34,  61 => 33,  58 => 32,  56 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\" {% if language is defined %}lang=\"{{ language }}\"{% endif %}>
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>
                {%- block pageTitle %}
                    {%- if title is defined -%}{{ title }} - {% endif -%}
                    {%- if categoryTitle is defined -%}{{ categoryTitle }} - {% endif -%}
                    Matomo
                {%- endblock -%}
            </title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"{% block pageDescription %}{% endblock %}\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            {% block meta %}
                <meta name=\"robots\" content=\"noindex,nofollow\">
            {% endblock %}

            {% include \"@CoreHome/_favicon.twig\" %}
            {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
            <meta name=\"theme-color\" content=\"{{ themeStyles.colorHeaderBackground }}\">
            {% include \"_jsGlobalVariables.twig\" %}
            {% include \"_jsCssIncludes.twig\" %}

            {%- if not isCustomLogo %}<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\" crossorigin=\"use-credentials\">{% endif %}

        {% endblock %}
    </head>
    <body id=\"{{ bodyId|default('') }}\" class=\"{{ bodyClass|default('') }}\">
        {{ postEvent('Template.bodyTop' ) }}

    {% block body %}
        {% include \"_iframeBuster.twig\" %}
        {% include \"@CoreHome/_javaScriptDisabled.twig\" %}

        <div id=\"root\">
            {% block root %}
            {% endblock %}
        </div>

        {% include \"@CoreHome/_shortcuts.twig\" %}

    {% endblock %}

        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>

        {% include \"@CoreHome/_adblockDetect.twig\" %}

        {{ postEvent('Template.bodyBottom' ) }}
    </body>
</html>
", "layout.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/layout.twig");
    }
}
