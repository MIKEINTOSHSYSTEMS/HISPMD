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

/* @Live/getSimpleLastVisitCount.twig */
class __TwigTemplate_387e372bd238841f4ea8bdf445335abc extends Template
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
        yield "<div class='simple-realtime-visitor-widget' data-refreshAfterXSecs=\"";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["refreshAfterXSecs"]) || array_key_exists("refreshAfterXSecs", $context) ? $context["refreshAfterXSecs"] : (function () { throw new RuntimeError('Variable "refreshAfterXSecs" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-last-minutes=\"";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["lastMinutes"]) || array_key_exists("lastMinutes", $context) ? $context["lastMinutes"] : (function () { throw new RuntimeError('Variable "lastMinutes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-translations=\"";
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 1, $this->source); })())), "html", null, true);
        yield "\">
    <div class='simple-realtime-visitor-counter' title=\"";
        // line 2
        if (((isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 2, $this->source); })()) == 1)) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NbVisitor"), "html", null, true);
        } else {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NbVisitors", (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 2, $this->source); })())), "html", null, true);
        }
        yield "\">
        <div>";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</div>
    </div>
    <br/>
    ";
        // line 6
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()))) {
            yield "<div class=\"alert alert-danger\">";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "</div>";
        }
        // line 7
        yield "
    <div class='simple-realtime-elaboration'>
        ";
        // line 9
        $context["visitsMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "            <span class=\"simple-realtime-metric\" data-metric=\"visits\">";
            if (((isset($context["visits"]) || array_key_exists("visits", $context) ? $context["visits"] : (function () { throw new RuntimeError('Variable "visits" does not exist.', 10, $this->source); })()) == 1)) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OneVisit"), "html", null, true);
            } else {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NVisits", (isset($context["visits"]) || array_key_exists("visits", $context) ? $context["visits"] : (function () { throw new RuntimeError('Variable "visits" does not exist.', 10, $this->source); })())), "html", null, true);
            }
            yield "</span>
        ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield "        ";
        $context["actionsMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "            <span class=\"simple-realtime-metric\" data-metric=\"actions\">";
            if (((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 13, $this->source); })()) == 1)) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OneAction"), "html", null, true);
            } else {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("VisitsSummary_NbActionsDescription", (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 13, $this->source); })())), "html", null, true);
            }
            yield "</span>
        ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "        ";
        $context["minutesMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "            <span class=\"simple-realtime-metric\" data-metric=\"minutes\">";
            if (((isset($context["lastMinutes"]) || array_key_exists("lastMinutes", $context) ? $context["lastMinutes"] : (function () { throw new RuntimeError('Variable "lastMinutes" does not exist.', 16, $this->source); })()) == 1)) {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_OneMinute"), "html", null, true);
            } else {
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NMinutes", (isset($context["lastMinutes"]) || array_key_exists("lastMinutes", $context) ? $context["lastMinutes"] : (function () { throw new RuntimeError('Variable "lastMinutes" does not exist.', 16, $this->source); })())), "html", null, true);
            }
            yield "</span>
        ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        yield "
        ";
        // line 19
        yield $this->env->getFilter('translate')->getCallable()("Live_SimpleRealTimeWidget_Message", (isset($context["visitsMessage"]) || array_key_exists("visitsMessage", $context) ? $context["visitsMessage"] : (function () { throw new RuntimeError('Variable "visitsMessage" does not exist.', 19, $this->source); })()), (isset($context["actionsMessage"]) || array_key_exists("actionsMessage", $context) ? $context["actionsMessage"] : (function () { throw new RuntimeError('Variable "actionsMessage" does not exist.', 19, $this->source); })()), (isset($context["minutesMessage"]) || array_key_exists("minutesMessage", $context) ? $context["minutesMessage"] : (function () { throw new RuntimeError('Variable "minutesMessage" does not exist.', 19, $this->source); })()));
        yield "
    </div>
</div>
<script type=\"text/javascript\">\$(document).ready(function () {require('piwik/Live').initSimpleRealtimeVisitorWidget();});</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/getSimpleLastVisitCount.twig";
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
        return array (  115 => 19,  112 => 18,  101 => 16,  98 => 15,  87 => 13,  84 => 12,  73 => 10,  71 => 9,  67 => 7,  61 => 6,  55 => 3,  47 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='simple-realtime-visitor-widget' data-refreshAfterXSecs=\"{{ refreshAfterXSecs }}\" data-last-minutes=\"{{ lastMinutes }}\" data-translations=\"{{ translations|json_encode }}\">
    <div class='simple-realtime-visitor-counter' title=\"{% if visitors == 1 %}{{ 'Live_NbVisitor'|translate }}{% else %}{{ 'Live_NbVisitors'|translate(visitors) }}{% endif %}\">
        <div>{{ visitors }}</div>
    </div>
    <br/>
    {% if error is not empty %}<div class=\"alert alert-danger\">{{ error }}</div>{% endif %}

    <div class='simple-realtime-elaboration'>
        {% set visitsMessage %}
            <span class=\"simple-realtime-metric\" data-metric=\"visits\">{% if visits == 1 %}{{ 'General_OneVisit'|translate }}{% else %}{{ 'General_NVisits'|translate(visits) }}{% endif %}</span>
        {% endset %}
        {% set actionsMessage %}
            <span class=\"simple-realtime-metric\" data-metric=\"actions\">{% if actions == 1 %}{{ 'General_OneAction'|translate }}{% else %}{{ 'VisitsSummary_NbActionsDescription'|translate(actions) }}{% endif %}</span>
        {% endset %}
        {% set minutesMessage %}
            <span class=\"simple-realtime-metric\" data-metric=\"minutes\">{% if lastMinutes == 1 %}{{ 'Intl_OneMinute'|translate }}{% else %}{{ 'Intl_NMinutes'|translate(lastMinutes) }}{% endif %}</span>
        {% endset %}

        {{ 'Live_SimpleRealTimeWidget_Message'|translate(visitsMessage,actionsMessage,minutesMessage) | raw }}
    </div>
</div>
<script type=\"text/javascript\">\$(document).ready(function () {require('piwik/Live').initSimpleRealtimeVisitorWidget();});</script>
", "@Live/getSimpleLastVisitCount.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/getSimpleLastVisitCount.twig");
    }
}
