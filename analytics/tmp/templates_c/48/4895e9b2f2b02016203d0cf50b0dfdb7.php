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

/* @CoreHome/_menu.twig */
class __TwigTemplate_50a59d27f0165cf2e3d667cc46e259e7 extends Template
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
        return; yield '';
    }

    // line 1
    public function macro_menu($__menu__ = null, $__anchorlink__ = null, $__cssClass__ = null, $__currentModule__ = null, $__currentAction__ = null, $__collapsible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "anchorlink" => $__anchorlink__,
            "cssClass" => $__cssClass__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "collapsible" => $__collapsible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    <div id=\"secondNavBar\" class=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 2, $this->source); })()), "html", null, true);
            yield " z-depth-1\">
        <ul class=\"navbar ";
            // line 3
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 3, $this->source); })())) {
                yield "collapsible collapsible-accordion";
            }
            yield " hide-on-med-and-down\" aria-label=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_MainNavigation"), "html_attr");
            yield "\" role=\"menu\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
                // line 5
                yield "
                ";
                // line 6
                $context["hasSubmenuItem"] = false;
                // line 7
                yield "                ";
                $context["hasActive"] = false;
                // line 8
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["level2"]);
                foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                    // line 9
                    yield "                    ";
                    if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["name"], 0, 1) != "_")) {
                        // line 10
                        yield "                        ";
                        $context["hasSubmenuItem"] = true;
                        // line 11
                        yield "                    ";
                    }
                    // line 12
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                yield "
                ";
                // line 14
                if ((isset($context["hasSubmenuItem"]) || array_key_exists("hasSubmenuItem", $context) ? $context["hasSubmenuItem"] : (function () { throw new RuntimeError('Variable "hasSubmenuItem" does not exist.', 14, $this->source); })())) {
                    // line 15
                    yield "                    ";
                    $context["subMenu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 16
                        yield "                        <a class=\"item ";
                        if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 16, $this->source); })())) {
                            yield "collapsible-header";
                        }
                        yield "\" tabindex=\"5\">
                            <span class=\"menu-icon ";
                        // line 17
                        yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "_icon", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "_icon", [], "any", false, false, false, 17), "icon-chevron-down")) : ("icon-chevron-down")), "html", null, true);
                        yield "\"></span>";
                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["level1"]), "html", null, true);
                        yield "
                            <span class=\"hidden\">
                             ";
                        // line 19
                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_Menu"), "html", null, true);
                        yield "
                           </span>
                        </a>
                        <ul role=\"menu\" ";
                        // line 22
                        if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 22, $this->source); })())) {
                            yield "class=\"collapsible-body\"";
                        }
                        yield ">
                            ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["level2"]);
                        foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                            // line 24
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["name"], 0, 1) != "_")) {
                                // line 25
                                yield "                                    ";
                                $context["isActive"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, true, false, 25), "module", [], "any", true, true, false, 25) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 25), "module", [], "any", false, false, false, 25) == (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 25, $this->source); })()))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, true, false, 25), "action", [], "any", true, true, false, 25)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 25), "action", [], "any", false, false, false, 25) == (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 25, $this->source); })())));
                                // line 26
                                yield "                                    ";
                                $context["hasActive"] = ((isset($context["hasActive"]) || array_key_exists("hasActive", $context) ? $context["hasActive"] : (function () { throw new RuntimeError('Variable "hasActive" does not exist.', 26, $this->source); })()) || (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 26, $this->source); })()));
                                // line 27
                                yield "                                    <li ";
                                if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 27, $this->source); })())) {
                                    yield "class=\"active\"";
                                }
                                // line 28
                                yield "                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"";
                                // line 31
                                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", false, false, false, 31), "")) : (""))), "html_attr");
                                yield "\"
                                            ";
                                // line 32
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", true, true, false, 32) && CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", false, false, false, 32))) {
                                    // line 33
                                    yield "                                                onclick=\"";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", false, false, false, 33), "html_attr");
                                    yield ";return false;\"
                                            ";
                                }
                                // line 35
                                yield "                                            ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 35)) {
                                    // line 36
                                    yield "                                                href=\"index.php?";
                                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->env->getFilter('urlRewriteWithParameters')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 36)), 1), "html", null, true);
                                    yield "\"
                                            ";
                                }
                                // line 37
                                yield ">
                                            ";
                                // line 38
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", false, false, false, 38))) {
                                    yield "<span class=\"icon ";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", false, false, false, 38), "html_attr");
                                    yield "\" style=\"margin-right: 5px;\"></span>";
                                }
                                // line 39
                                yield "                                            ";
                                yield $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('translate')->getCallable()($context["name"]));
                                yield "
                                        </a>
                                        ";
                                // line 41
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_help", [], "any", false, false, false, 41)) {
                                    // line 42
                                    yield "                                            <div vue-entry=\"CoreHome.ShowHelpLink\" name=\"";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_name", [], "any", false, false, false, 42), "html", null, true);
                                    yield "\" message=\"";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["urlParameters"], "_help", [], "any", false, false, false, 42), "html_attr");
                                    yield "\"></div>
                                        ";
                                }
                                // line 44
                                yield "                                    </li>
                                ";
                            }
                            // line 46
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        yield "                        </ul>
                    ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 49
                    yield "                    <li class=\"menuTab ";
                    if ((isset($context["hasActive"]) || array_key_exists("hasActive", $context) ? $context["hasActive"] : (function () { throw new RuntimeError('Variable "hasActive" does not exist.', 49, $this->source); })())) {
                        yield "active";
                    }
                    yield "\" role=\"menuitem\">
                        ";
                    // line 50
                    yield \Piwik\piwik_escape_filter($this->env, (isset($context["subMenu"]) || array_key_exists("subMenu", $context) ? $context["subMenu"] : (function () { throw new RuntimeError('Variable "subMenu" does not exist.', 50, $this->source); })()), "html", null, true);
                    yield "
                    </li>
                ";
                }
                // line 53
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "        </ul>
        <div vue-entry=\"CoreHome.MobileLeftMenu\" menu=\"";
            // line 55
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 55, $this->source); })())), "html", null, true);
            yield "\"></div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
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
        return array (  243 => 55,  240 => 54,  234 => 53,  228 => 50,  221 => 49,  216 => 47,  210 => 46,  206 => 44,  198 => 42,  196 => 41,  190 => 39,  184 => 38,  181 => 37,  175 => 36,  172 => 35,  166 => 33,  164 => 32,  160 => 31,  155 => 28,  150 => 27,  147 => 26,  144 => 25,  141 => 24,  137 => 23,  131 => 22,  125 => 19,  118 => 17,  111 => 16,  108 => 15,  106 => 14,  103 => 13,  97 => 12,  94 => 11,  91 => 10,  88 => 9,  83 => 8,  80 => 7,  78 => 6,  75 => 5,  71 => 4,  63 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu(menu, anchorlink, cssClass, currentModule, currentAction, collapsible) %}
    <div id=\"secondNavBar\" class=\"{{ cssClass }} z-depth-1\">
        <ul class=\"navbar {% if collapsible %}collapsible collapsible-accordion{% endif %} hide-on-med-and-down\" aria-label=\"{{ 'CoreHome_MainNavigation'|translate|e('html_attr') }}\" role=\"menu\">
            {% for level1,level2 in menu %}

                {% set hasSubmenuItem = false %}
                {% set hasActive = false %}
                {% for name,urlParameters in level2 %}
                    {% if name|slice(0,1) != '_' %}
                        {% set hasSubmenuItem = true %}
                    {% endif %}
                {% endfor %}

                {% if hasSubmenuItem %}
                    {% set subMenu %}
                        <a class=\"item {% if collapsible %}collapsible-header{% endif %}\" tabindex=\"5\">
                            <span class=\"menu-icon {{ level2._icon|default('icon-chevron-down') }}\"></span>{{ level1|translate }}
                            <span class=\"hidden\">
                             {{ 'CoreHome_Menu'|translate }}
                           </span>
                        </a>
                        <ul role=\"menu\" {% if collapsible %}class=\"collapsible-body\"{% endif %}>
                            {% for name,urlParameters in level2 %}
                                {% if name|slice(0,1) != '_' %}
                                    {% set isActive = urlParameters._url.module is defined and urlParameters._url.module == currentModule and urlParameters._url.action is defined and urlParameters._url.action == currentAction %}
                                    {% set hasActive = hasActive or isActive %}
                                    <li {% if isActive %}class=\"active\"{% endif %}
                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"{{ urlParameters._tooltip|default('')|translate|e('html_attr') }}\"
                                            {% if urlParameters._onclick is defined and urlParameters._onclick %}
                                                onclick=\"{{ urlParameters._onclick|e('html_attr') }};return false;\"
                                            {% endif %}
                                            {% if urlParameters._url %}
                                                href=\"index.php?{{ urlParameters._url|urlRewriteWithParameters|slice(1) }}\"
                                            {% endif %}>
                                            {% if urlParameters._icon is defined and urlParameters._icon %}<span class=\"icon {{ urlParameters._icon|e('html_attr') }}\" style=\"margin-right: 5px;\"></span>{% endif %}
                                            {{ name|translate|rawSafeDecoded }}
                                        </a>
                                        {% if urlParameters._help %}
                                            <div vue-entry=\"CoreHome.ShowHelpLink\" name=\"{{ urlParameters._name }}\" message=\"{{ urlParameters._help|e('html_attr') }}\"></div>
                                        {% endif %}
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endset %}
                    <li class=\"menuTab {% if hasActive %}active{% endif %}\" role=\"menuitem\">
                        {{ subMenu }}
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
        <div vue-entry=\"CoreHome.MobileLeftMenu\" menu=\"{{ menu|json_encode }}\"></div>
    </div>
{% endmacro %}
", "@CoreHome/_menu.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_menu.twig");
    }
}
