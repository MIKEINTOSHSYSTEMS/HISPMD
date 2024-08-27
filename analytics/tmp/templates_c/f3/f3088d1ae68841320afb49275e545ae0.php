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

/* admin.twig */
class __TwigTemplate_033cde0848a620931ab3c3798119e915 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["categoryTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_Administration"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        $context["bodyClass"] = $this->env->getFunction('postEvent')->getCallable()("Template.bodyClass", "admin");
        // line 6
        $context["isAdminArea"] = true;
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        $context["topMenuModule"] = "CoreAdminHome";
        // line 10
        yield "    ";
        $context["topMenuAction"] = "home";
        // line 11
        yield "    ";
        yield $this->env->getFunction('postEvent')->getCallable()("Template.header", "admin");
        yield "
    ";
        // line 12
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    ";
        // line 13
        yield $this->env->getFunction('postEvent')->getCallable()("Template.footer", "admin");
        yield "
";
        return; yield '';
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        yield from         $this->loadTemplate("@CoreHome/_topScreen.twig", "admin.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>

        ";
        // line 23
        yield from $this->unwrap()->yieldBlock('topcontrols', $context, $blocks);
        // line 25
        yield "
        ";
        // line 26
        yield from         $this->loadTemplate("@CoreHome/_headerMessage.twig", "admin.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "    </div>

    ";
        // line 29
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "admin.twig", 29)->unwrap();
        // line 30
        yield "    ";
        yield CoreExtension::callMacro($macros["ajax"], "macro_requestErrorDiv", [((array_key_exists("contactEmail", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 30, $this->source); })()), "")) : ("")), (isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 30, $this->source); })()), (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 30, $this->source); })()), (isset($context["showMoreFaqInfo"]) || array_key_exists("showMoreFaqInfo", $context) ? $context["showMoreFaqInfo"] : (function () { throw new RuntimeError('Variable "showMoreFaqInfo" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
        yield "
    ";
        // line 31
        yield $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 31, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 31, $this->source); })()));
        yield "

    <div class=\"page\">

        ";
        // line 35
        if (( !array_key_exists("showMenu", $context) || (isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 35, $this->source); })()))) {
            // line 36
            yield "            ";
            $macros["menu"] = $this->loadTemplate("@CoreHome/_menu.twig", "admin.twig", 36)->unwrap();
            // line 37
            yield "            ";
            yield CoreExtension::callMacro($macros["menu"], "macro_menu", [(isset($context["adminMenu"]) || array_key_exists("adminMenu", $context) ? $context["adminMenu"] : (function () { throw new RuntimeError('Variable "adminMenu" does not exist.', 37, $this->source); })()), false, "Menu--admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 37, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 37, $this->source); })()), (isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
            yield "
        ";
        }
        // line 39
        yield "

        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            ";
        // line 43
        yield from $this->unwrap()->yieldBlock('notification', $context, $blocks);
        // line 46
        yield "            ";
        yield from         $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "admin.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "
            <div class=\"admin\" id=\"content\">

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"";
        // line 52
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        yield "\"/>
                </div>

                ";
        // line 55
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 57
        yield "

            </div>
        </div>
    </div>


";
        return; yield '';
    }

    // line 23
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 43
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "                ";
        yield from         $this->loadTemplate("@CoreHome/_notifications.twig", "admin.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "            ";
        return; yield '';
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin.twig";
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
        return array (  194 => 55,  189 => 45,  186 => 44,  182 => 43,  174 => 23,  162 => 57,  160 => 55,  154 => 52,  147 => 47,  144 => 46,  142 => 43,  136 => 39,  130 => 37,  127 => 36,  125 => 35,  118 => 31,  113 => 30,  111 => 29,  107 => 27,  105 => 26,  102 => 25,  100 => 23,  94 => 19,  91 => 18,  87 => 17,  80 => 13,  76 => 12,  71 => 11,  68 => 10,  65 => 9,  61 => 8,  56 => 1,  54 => 6,  52 => 5,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% set categoryTitle %}{{ 'CoreAdminHome_Administration'|translate }}{% endset %}

{% set bodyClass = postEvent('Template.bodyClass', 'admin') %}
{% set isAdminArea = true %}

{% block body %}
    {% set topMenuModule = 'CoreAdminHome' %}
    {% set topMenuAction = 'home' %}
    {{ postEvent(\"Template.header\", \"admin\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"admin\") }}
{% endblock %}


{% block root %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div vue-entry=\"CoreHome.QuickAccess\" class=\"piwikTopControl borderedControl\"></div>

        {% block topcontrols %}
        {% endblock %}

        {% include \"@CoreHome/_headerMessage.twig\" %}
    </div>

    {% import 'ajaxMacros.twig' as ajax %}
    {{ ajax.requestErrorDiv(contactEmail|default(''), areAdsForProfessionalServicesEnabled, currentModule, showMoreFaqInfo) }}
    {{ postEvent(\"Template.beforeContent\", \"admin\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is not defined or showMenu %}
            {% import '@CoreHome/_menu.twig' as menu %}
            {{ menu.menu(adminMenu, false, 'Menu--admin', currentModule, currentAction, hasSomeAdminAccess) }}
        {% endif %}


        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}
            {% include \"@CoreHome/_warningInvalidHost.twig\" %}

            <div class=\"admin\" id=\"content\">

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
                </div>

                {% block content %}
                {% endblock %}


            </div>
        </div>
    </div>


{% endblock %}
", "admin.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/admin.twig");
    }
}
