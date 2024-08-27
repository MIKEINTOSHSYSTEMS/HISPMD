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

/* @Live/_actionsList.twig */
class __TwigTemplate_8003e281a2e89c5cb3fef0305f722203 extends Template
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
        $context["previousAction"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actionGroups"]) || array_key_exists("actionGroups", $context) ? $context["actionGroups"] : (function () { throw new RuntimeError('Variable "actionGroups" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actionGroup"]) {
            // line 3
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 3))) {
                // line 4
                yield "    ";
                yield $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 4), (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 4, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()));
                yield "

    ";
                // line 6
                $context["previousAction"] = CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 6);
                // line 7
                yield "    ";
            }
            // line 8
            yield "
    ";
            // line 9
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 9)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 9)))) {
                // line 10
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 10))) {
                    // line 11
                    yield "    <li class=\"pageviewActions\" data-view-count=\"";
                    yield \Piwik\piwik_escape_filter($this->env, (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 11)) + 1), "html", null, true);
                    yield "\" data-actions-on-page=\"";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 11)), "html", null, true);
                    yield "\">
        <ol class=\"actionList\">
    ";
                }
                // line 14
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 15
                    yield "
            ";
                    // line 16
                    yield $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", $context["action"], (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 16, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()));
                    yield "

            ";
                    // line 18
                    $context["previousAction"] = $context["action"];
                    // line 19
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "        <li class=\"refresh-divider\"></li>
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 22
                    yield "
            ";
                    // line 23
                    yield $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", $context["action"], (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 23, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 23, $this->source); })()));
                    yield "

        ";
                    // line 25
                    $context["previousAction"] = $context["action"];
                    // line 26
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 27))) {
                    // line 28
                    yield "        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    ";
                }
                // line 37
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["visitInfo"] ?? null), "truncatedActionsCount", [], "any", true, true, false, 40)) {
            // line 41
            yield "    <li class=\"more\">
        <span class=\"icon-info\"></span>
        ";
            // line 43
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_MorePagesNotDisplayed"), "html", null, true);
            yield "
    </li>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
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
        return array (  149 => 43,  145 => 41,  143 => 40,  140 => 39,  133 => 37,  122 => 28,  119 => 27,  113 => 26,  111 => 25,  106 => 23,  103 => 22,  99 => 21,  96 => 20,  90 => 19,  88 => 18,  83 => 16,  80 => 15,  75 => 14,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  53 => 6,  47 => 4,  44 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set previousAction = false %}
{% for actionGroup in actionGroups %}
    {% if actionGroup.pageviewAction is not empty %}
    {{ postEvent('Live.renderAction', actionGroup.pageviewAction, previousAction, visitInfo) }}

    {% set previousAction = actionGroup.pageviewAction %}
    {% endif %}

    {% if actionGroup.actionsOnPage is not empty or actionGroup.refreshActions is not empty %}
    {% if actionGroup.pageviewAction is not empty %}
    <li class=\"pageviewActions\" data-view-count=\"{{ actionGroup.refreshActions|length + 1 }}\" data-actions-on-page=\"{{ actionGroup.actionsOnPage|length }}\">
        <ol class=\"actionList\">
    {% endif %}
        {% for action in actionGroup.refreshActions %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

            {% set previousAction = action %}
        {% endfor %}
        <li class=\"refresh-divider\"></li>
        {% for action in actionGroup.actionsOnPage %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

        {% set previousAction = action %}
        {% endfor %}
    {% if actionGroup.pageviewAction is not empty %}
        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    {% endif %}
    {% endif %}
{% endfor %}

{% if visitInfo.truncatedActionsCount is defined %}
    <li class=\"more\">
        <span class=\"icon-info\"></span>
        {{ 'Live_MorePagesNotDisplayed'|translate }}
    </li>
{% endif %}", "@Live/_actionsList.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_actionsList.twig");
    }
}
