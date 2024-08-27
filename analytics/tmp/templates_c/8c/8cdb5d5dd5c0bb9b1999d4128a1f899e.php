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

/* @Live/getVisitList.twig */
class __TwigTemplate_32204d75ff84a6a6ec3141607c3e497f extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visits"]) || array_key_exists("visits", $context) ? $context["visits"] : (function () { throw new RuntimeError('Variable "visits" does not exist.', 1, $this->source); })()), "getRows", [], "method", false, false, false, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitInfo"]) {
            // line 2
            yield "<li data-number=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"";
            // line 4
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["idVisit"], "method", false, false, false, 4), "html", null, true);
            yield "\" title=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ClickToViewMoreAboutVisit"), "html", null, true);
            yield "\">
            ";
            // line 5
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
            yield " #<span class=\"counter\">";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</span>

            <span class=\"visitor-profile-date\" title=\"";
            // line 7
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["serverDatePrettyFirstAction"], "method", false, false, false, 7), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["serverTimePrettyFirstAction"], "method", false, false, false, 7), "html", null, true);
            yield "\">
                ";
            // line 8
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["serverDatePrettyFirstAction"], "method", false, false, false, 8), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["serverTimePrettyFirstAction"], "method", false, false, false, 8), "html", null, true);
            yield "
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            ";
            // line 12
            yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorDetails", $context["visitInfo"]);
            yield "
        </div>
        <div class=\"visitor-profile-visit-details\">
            ";
            // line 15
            yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitInfo"]);
            yield "
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                ";
            // line 17
            $context["actionCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["actionDetails"], "method", false, false, false, 17));
            // line 18
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "truncatedActionsCount", [], "any", true, true, false, 18)) {
                // line 19
                yield "                    ";
                $context["actionCount"] = ((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 19, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "truncatedActionsCount", [], "any", false, false, false, 19));
                // line 20
                yield "                ";
            }
            // line 21
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["visitDuration"], "method", false, false, false, 21) != 0)) {
                // line 22
                yield "                    ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ActionsAndDuration", (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 22, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["visitDurationPretty"], "method", false, false, false, 22)), "html", null, true);
                yield "
                ";
            } else {
                // line 24
                yield "                    ";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 24, $this->source); })()), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                yield "
                ";
            }
            // line 26
            yield "            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            ";
            // line 29
            yield from             $this->loadTemplate("@Live/_actionsList.twig", "@Live/getVisitList.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["actionDetails" => CoreExtension::getAttribute($this->env, $this->source, $context["visitInfo"], "getColumn", ["actionDetails"], "method", false, false, false, 29), "actionGroups" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["visitInfo"], "getColumn", ["actionGroups"], "method", false, false, false, 30), "visitInfo" =>             // line 31
$context["visitInfo"]]));
            // line 32
            yield "        </ol>
    </div>
</li>
";
            // line 35
            $context["startCounter"] = ((isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 35, $this->source); })()) - 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/getVisitList.twig";
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
        return array (  142 => 35,  137 => 32,  135 => 31,  134 => 30,  133 => 29,  128 => 26,  120 => 24,  114 => 22,  111 => 21,  108 => 20,  105 => 19,  102 => 18,  100 => 17,  95 => 15,  89 => 12,  80 => 8,  74 => 7,  67 => 5,  61 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for visitInfo in visits.getRows() %}
<li data-number=\"{{ startCounter }}\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"{{ visitInfo.getColumn('idVisit') }}\" title=\"{{ 'Live_ClickToViewMoreAboutVisit'|translate }}\">
            {{ 'General_Visit'|translate }} #<span class=\"counter\">{{ startCounter }}</span>

            <span class=\"visitor-profile-date\" title=\"{{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}\">
                {{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            {{ postEvent('Live.renderVisitorDetails', visitInfo) }}
        </div>
        <div class=\"visitor-profile-visit-details\">
            {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                {% set actionCount = visitInfo.getColumn('actionDetails')|length %}
                {% if visitInfo.truncatedActionsCount is defined %}
                    {% set actionCount = actionCount + visitInfo.truncatedActionsCount %}
                {% endif %}
                {% if visitInfo.getColumn('visitDuration') != 0 %}
                    {{ 'Live_ActionsAndDuration'|translate(actionCount, visitInfo.getColumn('visitDurationPretty')) }}
                {% else %}
                    {{ actionCount }} {{ 'General_Actions'|translate }}
                {% endif %}
            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            {% include \"@Live/_actionsList.twig\" with {'actionDetails': visitInfo.getColumn('actionDetails'),
                                                       'actionGroups': visitInfo.getColumn('actionGroups'),
                                                       'visitInfo': visitInfo} %}
        </ol>
    </div>
</li>
{% set startCounter = startCounter - 1 %}
{% endfor %}", "@Live/getVisitList.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/getVisitList.twig");
    }
}
