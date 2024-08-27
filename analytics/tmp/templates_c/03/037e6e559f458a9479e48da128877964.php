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

/* @UserCountry/_profileSummary.twig */
class __TwigTemplate_71283c3a98d6aab7580df759e239cd04 extends Template
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
        yield "<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Location"), "html", null, true);
        yield "</h1>
    <p>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 4, $this->source); })()), "countries", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            $context["entryCity"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 7
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", true, true, false, 7) && (1 == Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 7)))) && Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 7)))) {
                    // line 8
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 8)), "html", null, true);
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 9
$context["entry"], "cities", [], "any", true, true, false, 9) && (1 < Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 9))))) {
                    // line 10
                    yield "<span title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 10), ", "), "html", null, true);
                    yield "\">";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_FromDifferentCities"), "html", null, true);
                    yield "</span>";
                }
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            yield "
            ";
            // line 14
            $context["entryVisits"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "<strong>
                    ";
                // line 16
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "nb_visits", [], "any", false, false, false, 16) == 1)) {
                    // line 17
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OneVisit"), "html", null, true);
                } else {
                    // line 19
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NVisits", CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "nb_visits", [], "any", false, false, false, 19)), "html", null, true);
                }
                // line 21
                yield "</strong>";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "
            ";
            // line 24
            $context["entryCountry"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 25
                if ((isset($context["entryCity"]) || array_key_exists("entryCity", $context) ? $context["entryCity"] : (function () { throw new RuntimeError('Variable "entryCity" does not exist.', 25, $this->source); })())) {
                    // line 26
                    yield $this->env->getFilter('translate')->getCallable()("UserCountry_CityAndCountry", (isset($context["entryCity"]) || array_key_exists("entryCity", $context) ? $context["entryCity"] : (function () { throw new RuntimeError('Variable "entryCity" does not exist.', 26, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 26));
                } else {
                    // line 28
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 28), "html", null, true);
                }
                // line 31
                yield "&nbsp;<img height=\"16px\" src=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "flag", [], "any", false, false, false, 31), "html", null, true);
                yield "\" title=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 31), "html", null, true);
                yield "\"/>";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield $this->env->getFilter('translate')->getCallable()("General_XFromY", (isset($context["entryVisits"]) || array_key_exists("entryVisits", $context) ? $context["entryVisits"] : (function () { throw new RuntimeError('Variable "entryVisits" does not exist.', 34, $this->source); })()), (isset($context["entryCountry"]) || array_key_exists("entryCountry", $context) ? $context["entryCountry"] : (function () { throw new RuntimeError('Variable "entryCountry" does not exist.', 34, $this->source); })()));
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) {
                yield ", ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        <a class=\"visitor-profile-show-map\" href=\"#\" ";
        if (Twig\Extension\CoreExtension::testEmpty(((array_key_exists("userCountryMapUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context) ? $context["userCountryMapUrl"] : (function () { throw new RuntimeError('Variable "userCountryMapUrl" does not exist.', 36, $this->source); })()), "")) : ("")))) {
            yield "style=\"display:none\"";
        }
        yield ">(";
        yield Twig\Extension\CoreExtension::replace($this->env->getFilter('translate')->getCallable()("Live_ShowMap"), [" " => "&nbsp;"]);
        yield ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
        // line 38
        yield \Piwik\piwik_escape_filter($this->env, ((array_key_exists("userCountryMapUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context) ? $context["userCountryMapUrl"] : (function () { throw new RuntimeError('Variable "userCountryMapUrl" does not exist.', 38, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UserCountry/_profileSummary.twig";
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
        return array (  147 => 38,  137 => 36,  120 => 34,  112 => 31,  109 => 28,  106 => 26,  104 => 25,  102 => 24,  99 => 23,  95 => 21,  92 => 19,  89 => 17,  87 => 16,  84 => 15,  82 => 14,  79 => 13,  70 => 10,  68 => 9,  66 => 8,  64 => 7,  62 => 6,  45 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>{{ 'UserCountry_Location'|translate }}</h1>
    <p>
        {%- for entry in visitorData.countries -%}

            {% set entryCity -%}
                {% if entry.cities is defined and 1 == entry.cities|length and entry.cities|join -%}
                    {{ entry.cities|join }}
                {%- elseif entry.cities is defined and 1 < entry.cities|length -%}
                    <span title=\"{{ entry.cities|join(', ') }}\">{{ 'UserCountry_FromDifferentCities'|translate }}</span>
                {%- endif %}
            {%- endset %}

            {% set entryVisits -%}
                <strong>
                    {% if entry.nb_visits == 1 -%}
                        {{ 'General_OneVisit'|translate }}
                    {%- else -%}
                        {{ 'General_NVisits'|translate(entry.nb_visits) }}
                    {%- endif -%}
                </strong>
            {%- endset %}

            {% set entryCountry -%}
                {%- if entryCity -%}
                    {{ 'UserCountry_CityAndCountry'|translate(entryCity, entry.prettyName)|raw }}
                {%- else -%}
                    {{ entry.prettyName }}
                {%- endif -%}

                &nbsp;<img height=\"16px\" src=\"{{ entry.flag }}\" title=\"{{ entry.prettyName }}\"/>
            {%- endset %}

            {{- 'General_XFromY'|translate(entryVisits, entryCountry)|raw -}}{% if not loop.last %}, {% endif %}
        {%- endfor %}
        <a class=\"visitor-profile-show-map\" href=\"#\" {% if userCountryMapUrl|default('') is empty %}style=\"display:none\"{% endif %}>({{ 'Live_ShowMap'|translate|replace({' ': '&nbsp;'})|raw }})</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"{{ userCountryMapUrl|default('') }}\">
    </div>
</div>", "@UserCountry/_profileSummary.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UserCountry/templates/_profileSummary.twig");
    }
}
