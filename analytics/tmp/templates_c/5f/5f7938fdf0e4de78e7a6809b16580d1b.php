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

/* @Live/_actionCommon.twig */
class __TwigTemplate_043b59744a5af6a1ef69851c5f1a2841 extends Template
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
        yield "<li class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "goalName", [], "any", true, true, false, 1)) {
            yield "goal";
        } else {
            yield "action";
        }
        yield "\"
    title=\"";
        // line 2
        yield $this->env->getFunction('postEvent')->getCallable()("Live.renderActionTooltip", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()));
        yield "\">
    <div>
        ";
        // line 5
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 5), false)) : (false)))) {
            // line 6
            yield "            <span class=\"truncated-text-line\">";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "pageTitle", [], "any", false, false, false, 6));
            yield "</span>
        ";
        }
        // line 8
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchKeyword", [], "any", true, true, false, 8)) {
            // line 9
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9) == "search")) {
                // line 10
                yield "                <img src='";
                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10))), "html", null, true);
                yield "' title='";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_SubmenuSitesearch"), "html", null, true);
                yield "'
                     class=\"action-list-action-icon search\">
            ";
            }
            // line 13
            yield "            <span class=\"truncated-text-line\">";
            yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "siteSearchKeyword", [], "any", false, false, false, 13));
            yield "</span>
        ";
        }
        // line 15
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15))) {
            // line 16
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16))))) {
                // line 17
                yield "                <img src='";
                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "icon", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "icon", [], "any", false, false, false, 17))), "html", null, true);
                yield "' class=\"action-list-action-icon ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), "html", null, true);
                yield "\">
            ";
            }
            // line 19
            yield "            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "action") &&  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 19), false)) : (false))))) {
                yield "<p>";
            }
            // line 20
            yield "            ";
            if ((((is_string($__internal_compile_0 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20)))) && is_string($__internal_compile_1 = "javascript:") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || (is_string($__internal_compile_2 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "url", [], "any", false, false, false, 21)))) && is_string($__internal_compile_3 = "vbscript:") && str_starts_with($__internal_compile_2, $__internal_compile_3))) || (is_string($__internal_compile_4 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "url", [], "any", false, false, false, 22)))) && is_string($__internal_compile_5 = "data:") && str_starts_with($__internal_compile_4, $__internal_compile_5)))) {
                // line 23
                yield "                ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), "html", null, true);
                yield "
            ";
            } else {
                // line 25
                yield "                <a href=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "url", [], "any", false, false, false, 25)), "html_attr");
                yield "\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    ";
                // line 27
                if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["additionalUrls"]) || array_key_exists("additionalUrls", $context) ? $context["additionalUrls"] : (function () { throw new RuntimeError('Variable "additionalUrls" does not exist.', 27, $this->source); })()))) {
                    // line 28
                    yield "                        ";
                    // line 29
                    yield "                        ";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "url", [], "any", false, false, false, 29), [((isset($context["mainUrl"]) || array_key_exists("mainUrl", $context) ? $context["mainUrl"] : (function () { throw new RuntimeError('Variable "mainUrl" does not exist.', 29, $this->source); })()) . "/") => "/", "http://" => "", "https://" => ""]), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 31
                    yield "                        ";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31), ["http://" => "", "https://" => ""]), "html", null, true);
                    yield "
                    ";
                }
                // line 33
                yield "                </a>
            ";
            }
            // line 35
            yield "            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) == "action") &&  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 35), false)) : (false))))) {
                yield "</p>";
            }
            // line 36
            yield "        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36) != "search")) {
            // line 37
            yield "            <p>
                <span>";
            // line 38
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("Actions_ColumnPageURL")), "html", null, true);
            yield "</span>
            </p>
        ";
        }
        // line 41
        yield "    </div>
</li>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_actionCommon.twig";
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
        return array (  155 => 41,  149 => 38,  146 => 37,  143 => 36,  138 => 35,  134 => 33,  128 => 31,  122 => 29,  120 => 28,  118 => 27,  112 => 25,  106 => 23,  104 => 22,  103 => 21,  101 => 20,  96 => 19,  88 => 17,  85 => 16,  82 => 15,  76 => 13,  67 => 10,  64 => 9,  61 => 8,  55 => 6,  52 => 5,  47 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{% if action.goalName is defined %}goal{% else %}action{% endif %}\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Page view / Download / Outlink #}
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.siteSearchKeyword is defined %}
            {% if action.type == 'search' %}
                <img src='{{ action.iconSVG|default(action.icon) }}' title='{{ 'Actions_SubmenuSitesearch'|translate }}'
                     class=\"action-list-action-icon search\">
            {% endif %}
            <span class=\"truncated-text-line\">{{ action.siteSearchKeyword|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.url is not empty %}
            {% if action.iconSVG|default(action.icon) is not empty %}
                <img src='{{ action.iconSVG|default(action.icon) }}' class=\"action-list-action-icon {{ action.type }}\">
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}<p>{% endif %}
            {% if action.url|trim|lower starts with 'javascript:' or
            action.url|trim|lower starts with 'vbscript:' or
            action.url|trim|lower starts with 'data:' %}
                {{ action.url }}
            {% else %}
                <a href=\"{{ action.url|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    {% if not additionalUrls|length %}
                        {# remove main url from urls if site has no additional urls defined #}
                        {{ action.url|replace({(mainUrl~'/'): '/', 'http://': '', 'https://': ''}) }}
                    {% else %}
                        {{ action.url|replace({'http://': '', 'https://': ''}) }}
                    {% endif %}
                </a>
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}</p>{% endif %}
        {% elseif action.type != 'search' %}
            <p>
                <span>{{ 'General_NotDefined'|translate('Actions_ColumnPageURL'|translate) }}</span>
            </p>
        {% endif %}
    </div>
</li>
", "@Live/_actionCommon.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_actionCommon.twig");
    }
}
