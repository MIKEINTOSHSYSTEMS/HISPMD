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

/* @Live/_dataTableViz_visitorLog.twig */
class __TwigTemplate_3e53e710dc6065694dd414573fbbd0da extends Template
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
        $context["displayVisitorsInOwnColumn"] = (((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 1, $this->source); })())) ? (false) : (true));
        // line 2
        yield "
";
        // line 3
        $context["cycleIndex"] = 0;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 4, $this->source); })()), "getRows", [], "method", false, false, false, 4));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 5
            yield "    ";
            $context["visitorRow"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "        <div class=\"card row hoverable\">

            ";
                // line 8
                if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitorId"], "method", false, false, false, 8)) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 8, $this->source); })()), "hideProfileLink", [], "any", false, false, false, 8))) {
                    // line 9
                    yield "                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitorId"], "method", false, false, false, 9), "html", null, true);
                    yield "\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>";
                    // line 10
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                    // line 11
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 11))) {
                        yield ": ";
                        yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 11));
                    }
                    yield "</span>
                </a>
            ";
                }
                // line 14
                yield "
        ";
                // line 15
                $context["cycleIndex"] = ((isset($context["cycleIndex"]) || array_key_exists("cycleIndex", $context) ? $context["cycleIndex"] : (function () { throw new RuntimeError('Variable "cycleIndex" does not exist.', 15, $this->source); })()) + 1);
                // line 16
                yield "            <div class=\"col s12 m";
                if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 16, $this->source); })())) {
                    yield "3";
                } else {
                    yield "4";
                }
                yield "\">
                ";
                // line 17
                yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorDetails", $context["visitor"]);
                yield "
            </div>

            ";
                // line 20
                if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 20, $this->source); })())) {
                    // line 21
                    yield "                <div class=\"col s12 m2 own-visitor-column\">
                    ";
                    // line 22
                    yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitor"]);
                    yield "
                </div>
            ";
                }
                // line 25
                yield "
            <div class=\"col s12 m";
                // line 26
                if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 26, $this->source); })())) {
                    yield "7";
                } else {
                    yield "8";
                }
                yield " column ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitConverted"], "method", false, false, false, 26) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 26, $this->source); })()))) {
                    yield "highlightField";
                }
                yield "\">
                ";
                // line 27
                yield $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogViewBeforeActionsInfo", $context["visitor"]);
                yield "

                <strong>
                    ";
                // line 30
                $context["actionCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionDetails"], "method", false, false, false, 30));
                // line 31
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "truncatedActionsCount", [], "any", true, true, false, 31)) {
                    // line 32
                    yield "                        ";
                    $context["actionCount"] = ((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 32, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "truncatedActionsCount", [], "any", false, false, false, 32));
                    // line 33
                    yield "                    ";
                }
                // line 34
                yield "                    ";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 34, $this->source); })()), "html", null, true);
                yield "
                    ";
                // line 35
                if (((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 35, $this->source); })()) <= 1)) {
                    // line 36
                    yield "                        ";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Action"), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 38
                    yield "                        ";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                    yield "
                    ";
                }
                // line 40
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitDuration"], "method", false, false, false, 40) > 0)) {
                    yield "- ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitDurationPretty"], "method", false, false, false, 40);
                }
                // line 41
                yield "                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        ";
                // line 45
                yield from                 $this->loadTemplate("@Live/_actionsList.twig", "@Live/_dataTableViz_visitorLog.twig", 45)->unwrap()->yield(CoreExtension::merge($context, ["actionGroups" => CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionGroups"], "method", false, false, false, 45), "visitInfo" => $context["visitor"]]));
                // line 46
                yield "                    </ol>
                </div>
                ";
                // line 48
                yield $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogViewAfterActionsInfo", $context["visitor"]);
                yield "
            </div>
        </div>
    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            yield "
    ";
            // line 53
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["visitorRow"]) || array_key_exists("visitorRow", $context) ? $context["visitorRow"] : (function () { throw new RuntimeError('Variable "visitorRow" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_dataTableViz_visitorLog.twig";
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
        return array (  198 => 53,  195 => 52,  187 => 48,  183 => 46,  181 => 45,  175 => 41,  169 => 40,  163 => 38,  157 => 36,  155 => 35,  150 => 34,  147 => 33,  144 => 32,  141 => 31,  139 => 30,  133 => 27,  121 => 26,  118 => 25,  112 => 22,  109 => 21,  107 => 20,  101 => 17,  92 => 16,  90 => 15,  87 => 14,  78 => 11,  76 => 10,  71 => 9,  69 => 8,  65 => 6,  62 => 5,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set displayVisitorsInOwnColumn = (isWidget ? false : true) %}

{% set cycleIndex=0 %}
{% for visitor in dataTable.getRows() %}
    {% set visitorRow %}
        <div class=\"card row hoverable\">

            {% if visitor.getColumn('visitorId') is not empty and not clientSideParameters.hideProfileLink %}
                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"{{ visitor.getColumn(\"visitorId\") }}\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>{{ 'Live_ViewVisitorProfile'|translate }}
                        {%- if visitor.getColumn('userId') is not empty %}: {{ visitor.getColumn('userId')|rawSafeDecoded }}{% endif %}</span>
                </a>
            {% endif %}

        {% set cycleIndex=cycleIndex+1 %}
            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}3{% else %}4{% endif %}\">
                {{ postEvent('Live.renderVisitorDetails', visitor) }}
            </div>

            {% if displayVisitorsInOwnColumn %}
                <div class=\"col s12 m2 own-visitor-column\">
                    {{ postEvent('Live.renderVisitorIcons', visitor) }}
                </div>
            {% endif %}

            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}7{% else %}8{% endif %} column {% if visitor.getColumn('visitConverted') and not isWidget %}highlightField{% endif %}\">
                {{ postEvent('Live.visitorLogViewBeforeActionsInfo', visitor) }}

                <strong>
                    {% set actionCount = visitor.getColumn('actionDetails')|length %}
                    {% if visitor.truncatedActionsCount is defined %}
                        {% set actionCount = actionCount + visitor.truncatedActionsCount %}
                    {% endif %}
                    {{ actionCount }}
                    {% if actionCount <= 1 %}
                        {{ 'General_Action'|translate }}
                    {% else %}
                        {{ 'General_Actions'|translate }}
                    {% endif %}
                    {% if visitor.getColumn('visitDuration') > 0 %}- {{ visitor.getColumn('visitDurationPretty')|raw }}{% endif %}
                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        {% include \"@Live/_actionsList.twig\" with {'actionGroups': visitor.getColumn('actionGroups'), 'visitInfo': visitor} %}
                    </ol>
                </div>
                {{ postEvent('Live.visitorLogViewAfterActionsInfo', visitor) }}
            </div>
        </div>
    {% endset %}

    {{ visitorRow }}
{% endfor %}
", "@Live/_dataTableViz_visitorLog.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_dataTableViz_visitorLog.twig");
    }
}
