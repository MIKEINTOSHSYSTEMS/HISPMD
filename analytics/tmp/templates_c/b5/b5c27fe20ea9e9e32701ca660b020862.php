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

/* @CoreHome/_topBar.twig */
class __TwigTemplate_84b538ed783d8c277ee59eec69ebec10 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->env->getFunction('postEvent')->getCallable()("Template.beforeTopBar", (isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 1, $this->source); })()), (isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 1, $this->source); })()));
        yield "
<ul class=\"right hide-on-med-and-down\" role=\"menu\">
    ";
        // line 10
        yield "
    ";
        // line 44
        yield "
    ";
        // line 46
        yield "
    ";
        // line 47
        if ( !array_key_exists("topMenuModule", $context)) {
            // line 48
            yield "        ";
            $context["topMenuModule"] = (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 48, $this->source); })());
            // line 49
            yield "        ";
            $context["topMenuAction"] = (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 49, $this->source); })());
            // line 50
            yield "    ";
        }
        // line 51
        yield "
    ";
        // line 52
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
                // line 54
                yield "            <li role=\"menuitem\" class=\"";
                yield CoreExtension::callMacro($macros["_self"], "macro_isActiveItem", [$context["menu"], (isset($context["topMenuModule"]) || array_key_exists("topMenuModule", $context) ? $context["topMenuModule"] : (function () { throw new RuntimeError('Variable "topMenuModule" does not exist.', 54, $this->source); })()), (isset($context["topMenuAction"]) || array_key_exists("topMenuAction", $context) ? $context["topMenuAction"] : (function () { throw new RuntimeError('Variable "topMenuAction" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
                yield "\">";
                yield CoreExtension::callMacro($macros["_self"], "macro_topMenuItem", [$context["label"], CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "_icon", [], "any", false, false, false, 54), $context["menu"]], 54, $context, $this->getSourceContext());
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_0_);
        // line 57
        yield "</ul>
<ul class=\"sidenav hide-on-large-only\" id=\"mobile-top-menu\" role=\"menu\">
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 60
            yield "        <li role=\"menuitem\" class=\"";
            yield CoreExtension::callMacro($macros["_self"], "macro_isActiveItem", [$context["menu"], (isset($context["topMenuModule"]) || array_key_exists("topMenuModule", $context) ? $context["topMenuModule"] : (function () { throw new RuntimeError('Variable "topMenuModule" does not exist.', 60, $this->source); })()), (isset($context["topMenuAction"]) || array_key_exists("topMenuAction", $context) ? $context["topMenuAction"] : (function () { throw new RuntimeError('Variable "topMenuAction" does not exist.', 60, $this->source); })())], 60, $context, $this->getSourceContext());
            yield "\"
            >";
            // line 61
            yield CoreExtension::callMacro($macros["_self"], "macro_topMenuItem", [$context["label"], "", $context["menu"]], 61, $context, $this->getSourceContext());
            yield "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "</ul>
<a href=\"javascript:;\" data-target=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse sidenav-trigger\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-target=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse sidenav-trigger\"><span class=\"icon-more-verti\"></span></a>
";
        return; yield '';
    }

    // line 3
    public function macro_menuItemLabel($__label__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "        ";
            if (((array_key_exists("icon", $context) && (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })())) && (is_string($__internal_compile_0 = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })())) && is_string($__internal_compile_1 = "icon-") && str_starts_with($__internal_compile_0, $__internal_compile_1)))) {
                // line 5
                yield "            <span class=\"navbar-icon ";
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::striptags((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })())), "html", null, true);
                yield "\" aria-label=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })())), "html_attr");
                yield "\"></span>
        ";
            } else {
                // line 7
                yield "            ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })())), "html", null, true);
                yield "
        ";
            }
            // line 9
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function macro_topMenuItem($__label__ = null, $__icon__ = null, $__menu__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_html", [], "any", true, true, false, 12)) {
                // line 13
                yield "            ";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "_html", [], "any", false, false, false, 13);
                yield "
        ";
            } else {
                // line 15
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 15, $this->source); })()), "_badgecount", [], "any", false, false, false, 15) > 0)) {
                    // line 16
                    yield "            <div class=\"badge-menu-item-container\">
            ";
                }
                // line 18
                yield "            <a ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_tooltip", [], "any", true, true, false, 18)) {
                    yield "title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 18, $this->source); })()), "_tooltip", [], "any", false, false, false, 18), "html", null, true);
                    yield "\"";
                }
                // line 19
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_attribute", [], "any", true, true, false, 19)) {
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()), "_attribute", [], "any", false, false, false, 19), "html", null, true);
                }
                // line 20
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_onclick", [], "any", true, true, false, 20)) {
                    yield "onClick=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 20, $this->source); })()), "_onclick", [], "any", false, false, false, 20), "html", null, true);
                    yield "\"";
                }
                // line 21
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_url", [], "any", false, true, false, 21), "module", [], "any", true, true, false, 21)) {
                    // line 22
                    yield "                  id=\"topmenu-";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 22, $this->source); })()), "_url", [], "any", false, false, false, 22), "module", [], "any", false, false, false, 22)), "html", null, true);
                    yield "\"
                  href=\"index.php";
                    // line 23
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('urlRewriteWithParameters')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 23, $this->source); })()), "_url", [], "any", false, false, false, 23)), "html", null, true);
                    yield "\"
               ";
                } else {
                    // line 25
                    yield "                  href=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 25, $this->source); })()), "_url", [], "any", false, false, false, 25), "html", null, true);
                    yield "\" rel=\"noreferrer noopener\"
               ";
                }
                // line 27
                yield "               target=\"_self\" tabindex=\"3\">
                 ";
                // line 28
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "_badgecount", [], "any", false, false, false, 28) > 0)) {
                    // line 29
                    yield "                   <span class=\"badge-menu-item\">
                     ";
                    // line 30
                    if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 30, $this->source); })()), "_badgecount", [], "any", false, false, false, 30) > 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 30, $this->source); })()), "_badgecount", [], "any", false, false, false, 30) < 10))) {
                        // line 31
                        yield "                       ";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 31, $this->source); })()), "_badgecount", [], "any", false, false, false, 31), "html", null, true);
                        yield "
                     ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 32
(isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 32, $this->source); })()), "_badgecount", [], "any", false, false, false, 32) > 9)) {
                        // line 33
                        yield "                       9+
                     ";
                    }
                    // line 35
                    yield "                   </span>
                 ";
                }
                // line 37
                yield "                 ";
                yield CoreExtension::callMacro($macros["_self"], "macro_menuItemLabel", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 37, $this->source); })()), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
                yield "
            </a>
            ";
                // line 39
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()), "_badgecount", [], "any", false, false, false, 39) > 0)) {
                    // line 40
                    yield "            </div>
            ";
                }
                // line 42
                yield "        ";
            }
            // line 43
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function macro_isActiveItem($__menu__ = null, $__currentModule__ = null, $__currentAction__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            if ((((((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "_url", [], "any", false, false, false, 45)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "_url", [], "any", false, true, false, 45), "module", [], "any", true, true, false, 45)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "_url", [], "any", false, false, false, 45), "module", [], "any", false, false, false, 45) == (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 45, $this->source); })()))) && (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "_url", [], "any", false, false, false, 45), "action", [], "any", false, false, false, 45)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), "_url", [], "any", false, false, false, 45), "action", [], "any", false, false, false, 45) == (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 45, $this->source); })()))))) {
                yield "active";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_topBar.twig";
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
        return array (  270 => 45,  264 => 43,  261 => 42,  257 => 40,  255 => 39,  249 => 37,  245 => 35,  241 => 33,  239 => 32,  234 => 31,  232 => 30,  229 => 29,  227 => 28,  224 => 27,  218 => 25,  213 => 23,  208 => 22,  205 => 21,  198 => 20,  193 => 19,  186 => 18,  182 => 16,  179 => 15,  173 => 13,  170 => 12,  156 => 11,  150 => 9,  144 => 7,  136 => 5,  133 => 4,  120 => 3,  112 => 63,  104 => 61,  99 => 60,  95 => 59,  91 => 57,  89 => 52,  85 => 56,  74 => 54,  69 => 53,  67 => 52,  64 => 51,  61 => 50,  58 => 49,  55 => 48,  53 => 47,  50 => 46,  47 => 44,  44 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ postEvent(\"Template.beforeTopBar\", userLogin, topMenu) }}
<ul class=\"right hide-on-med-and-down\" role=\"menu\">
    {% macro menuItemLabel(label, icon) %}
        {% if icon is defined and icon and icon starts with 'icon-' %}
            <span class=\"navbar-icon {{ icon|striptags }}\" aria-label=\"{{ label|translate|e('html_attr') }}\"></span>
        {% else %}
            {{ label|translate }}
        {% endif %}
    {% endmacro %}

    {% macro topMenuItem(label, icon, menu) %}
        {% if menu._html is defined %}
            {{ menu._html|raw }}
        {% else %}
            {% if menu._badgecount > 0 %}
            <div class=\"badge-menu-item-container\">
            {%  endif %}
            <a {% if menu._tooltip is defined %}title=\"{{ menu._tooltip }}\"{% endif %}
               {% if menu._attribute is defined %}{{ menu._attribute }}{% endif %}
               {% if menu._onclick is defined %}onClick=\"{{ menu._onclick }}\"{% endif %}
               {% if menu._url.module is defined %}
                  id=\"topmenu-{{ menu._url.module|lower }}\"
                  href=\"index.php{{ menu._url|urlRewriteWithParameters }}\"
               {% else %}
                  href=\"{{ menu._url }}\" rel=\"noreferrer noopener\"
               {% endif %}
               target=\"_self\" tabindex=\"3\">
                 {% if menu._badgecount > 0 %}
                   <span class=\"badge-menu-item\">
                     {% if menu._badgecount > 0 and menu._badgecount < 10 %}
                       {{ menu._badgecount }}
                     {% elseif menu._badgecount > 9 %}
                       9+
                     {% endif %}
                   </span>
                 {%  endif %}
                 {{ _self.menuItemLabel(label, icon) }}
            </a>
            {% if menu._badgecount > 0 %}
            </div>
            {% endif %}
        {% endif %}
    {% endmacro %}

    {% macro isActiveItem(menu, currentModule, currentAction) %}{% if (menu and menu._url and menu._url.module is defined and menu._url.module == currentModule and (menu._url.action is empty or menu._url.action == currentAction)) %}active{% endif %}{% endmacro %}

    {% if topMenuModule is not defined %}
        {% set topMenuModule = currentModule %}
        {% set topMenuAction = currentAction %}
    {% endif %}

    {% apply spaceless %}
        {% for label,menu in topMenu %}
            <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\">{{ _self.topMenuItem(label, menu._icon, menu) }}</li>
        {% endfor %}
    {% endapply %}
</ul>
<ul class=\"sidenav hide-on-large-only\" id=\"mobile-top-menu\" role=\"menu\">
    {% for label,menu in topMenu %}
        <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\"
            >{{ _self.topMenuItem(label, '', menu) }}</li>
    {% endfor %}
</ul>
<a href=\"javascript:;\" data-target=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse sidenav-trigger\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-target=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse sidenav-trigger\"><span class=\"icon-more-verti\"></span></a>
", "@CoreHome/_topBar.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_topBar.twig");
    }
}
