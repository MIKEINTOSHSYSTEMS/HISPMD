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

/* @CoreAdminHome/home.twig */
class __TwigTemplate_0fb271948dc25e40ef53b26799db59ae extends Template
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
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_MenuGeneralSettings"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        $context["feedbackHelp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 7
            yield "        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NeedHelp"), "html", null, true);
            yield "\">
            <div>
                ";
            // line 9
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HowToGetHelp"), "html", null, true);
            yield "
                <br />
                <br />
                <a href=\"";
            // line 12
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Feedback", "action" => "index"]), "html", null, true);
            yield "\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_LearnMore"), "html", null, true);
            yield "</a>
            </div>
        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "
    ";
        // line 17
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 17, $this->source); })())) {
            // line 18
            yield "        <div class=\"row\">
            ";
            // line 19
            if (((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 19, $this->source); })()) || (isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 19, $this->source); })()))) {
                // line 20
                yield "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 20, $this->source); })())) {
                    yield "m4";
                } else {
                    yield "m6";
                }
                yield "\">
                    ";
                // line 21
                if ((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 21, $this->source); })())) {
                    yield "<div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;quickLinks&quot;}\"></div>";
                }
                // line 22
                yield "                    ";
                if ((isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 22, $this->source); })())) {
                    yield "<div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;getSystemSummary&quot;}\"></div>";
                }
                // line 23
                yield "                </div>
            ";
            }
            // line 25
            yield "            ";
            if (((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 25, $this->source); })()) || (isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 25, $this->source); })()))) {
                // line 26
                yield "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 26, $this->source); })())) {
                    yield "m4";
                } else {
                    yield "m6";
                }
                yield "\">
                    ";
                // line 27
                if ((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 27, $this->source); })())) {
                    // line 28
                    yield "                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Installation&quot;,&quot;action&quot;:&quot;getSystemCheck&quot;}\"></div>
                    ";
                }
                // line 30
                yield "                    ";
                if ((isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 30, $this->source); })())) {
                    // line 31
                    yield "                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreAdminHome&quot;,&quot;action&quot;:&quot;getTrackingFailures&quot;}\"></div>
                    ";
                }
                // line 33
                yield "                </div>
            ";
            }
            // line 35
            yield "            <div class=\"col s12 m4\">
            ";
            // line 36
            if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 36, $this->source); })())) {
                // line 37
                yield "                ";
                yield (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 37, $this->source); })());
                yield "
            ";
            }
            // line 39
            yield "            </div>
        </div>
    ";
        } elseif (        // line 41
(isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "        ";
            yield (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 42, $this->source); })());
            yield "
    ";
        }
        // line 44
        yield "
    ";
        // line 45
        if ((((isset($context["hasPremiumFeatures"]) || array_key_exists("hasPremiumFeatures", $context) ? $context["hasPremiumFeatures"] : (function () { throw new RuntimeError('Variable "hasPremiumFeatures" does not exist.', 45, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 45, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 45, $this->source); })()))) {
            // line 46
            yield "        <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Marketplace&quot;,&quot;action&quot;:&quot;getPremiumFeatures&quot;}\"></div>
    ";
        }
        // line 48
        yield "    ";
        if ((((isset($context["hasNewPlugins"]) || array_key_exists("hasNewPlugins", $context) ? $context["hasNewPlugins"] : (function () { throw new RuntimeError('Variable "hasNewPlugins" does not exist.', 48, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 48, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 48, $this->source); })()))) {
            // line 49
            yield "        <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Marketplace&quot;,&quot;action&quot;:&quot;getNewPlugins&quot;,&quot;isAdminPage&quot;: &quot;1&quot;}\"></div>
    ";
        }
        // line 51
        yield "
    ";
        // line 52
        yield $this->env->getFunction('postEvent')->getCallable()("Template.adminHome");
        yield "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 65
        if (((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 65, $this->source); })()) || (isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "        <div class=\"row\">
            ";
            // line 67
            if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 67, $this->source); })())) {
                // line 68
                yield "                <div class=\"col s12 ";
                if ((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 68, $this->source); })())) {
                    yield "m6";
                }
                yield "\">
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;getDonateForm&quot;,&quot;widget&quot;: &quot;0&quot;}\"></div>
                </div>
            ";
            }
            // line 72
            yield "            ";
            if (((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 72, $this->source); })()) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 72, $this->source); })()))) {
                // line 73
                yield "                <div class=\"col s12 ";
                if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 73, $this->source); })())) {
                    yield "m6";
                }
                yield "\">
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;RssWidget&quot;,&quot;action&quot;:&quot;rssPiwik&quot;}\"></div>
                </div>
            ";
            }
            // line 77
            yield "        </div>
    ";
        }
        // line 79
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
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
        return array (  235 => 79,  231 => 77,  221 => 73,  218 => 72,  208 => 68,  206 => 67,  203 => 66,  201 => 65,  185 => 52,  182 => 51,  178 => 49,  175 => 48,  171 => 46,  169 => 45,  166 => 44,  160 => 42,  158 => 41,  154 => 39,  148 => 37,  146 => 36,  143 => 35,  139 => 33,  135 => 31,  132 => 30,  128 => 28,  126 => 27,  117 => 26,  114 => 25,  110 => 23,  105 => 22,  101 => 21,  92 => 20,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  72 => 12,  66 => 9,  60 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'CoreAdminHome_NeedHelp'|translate }}\">
            <div>
                {{ 'CoreAdminHome_HowToGetHelp'|translate }}
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">{{ 'CoreAdminHome_LearnMore'|translate }}</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            {% if hasQuickLinks or hasSystemSummary %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasQuickLinks %}<div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;quickLinks&quot;}\"></div>{% endif %}
                    {% if hasSystemSummary %}<div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;getSystemSummary&quot;}\"></div>{% endif %}
                </div>
            {% endif %}
            {% if hasDiagnostics or hasTrackingFailures %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasDiagnostics %}
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Installation&quot;,&quot;action&quot;:&quot;getSystemCheck&quot;}\"></div>
                    {% endif %}
                    {% if hasTrackingFailures %}
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreAdminHome&quot;,&quot;action&quot;:&quot;getTrackingFailures&quot;}\"></div>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"col s12 m4\">
            {% if isFeedbackEnabled %}
                {{ feedbackHelp|raw }}
            {% endif %}
            </div>
        </div>
    {% elseif isFeedbackEnabled %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if hasPremiumFeatures and isMarketplaceEnabled and isInternetEnabled %}
        <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Marketplace&quot;,&quot;action&quot;:&quot;getPremiumFeatures&quot;}\"></div>
    {% endif %}
    {% if hasNewPlugins and isMarketplaceEnabled and isInternetEnabled %}
        <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;Marketplace&quot;,&quot;action&quot;:&quot;getNewPlugins&quot;,&quot;isAdminPage&quot;: &quot;1&quot;}\"></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;CoreHome&quot;,&quot;action&quot;:&quot;getDonateForm&quot;,&quot;widget&quot;: &quot;0&quot;}\"></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog and isInternetEnabled %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div vue-entry=\"CoreHome.WidgetLoader\" widget-params=\"{&quot;module&quot;:&quot;RssWidget&quot;,&quot;action&quot;:&quot;rssPiwik&quot;}\"></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
", "@CoreAdminHome/home.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreAdminHome/templates/home.twig");
    }
}
