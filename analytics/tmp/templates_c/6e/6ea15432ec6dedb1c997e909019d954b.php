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

/* @DevicesDetection/_profileSummary.twig */
class __TwigTemplate_c3eaf7e336b8eec16575a2199efd20fa extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "devices", [], "any", true, true, false, 1)) {
            // line 2
            yield "    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>";
            // line 3
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_Devices"), "html", null, true);
            yield "</h1>
        <div>";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 5, $this->source); })()), "devices", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                yield "<p>
                    <img height=\"16\" src=\"";
                // line 7
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "icon", [], "any", false, false, false, 7), "html", null, true);
                yield "\" />
                    ";
                // line 8
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 8)) == 1) && CoreExtension::inFilter($this->env->getFilter('translate')->getCallable()("General_Unknown"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 8), 0, [], "array", false, false, false, 8), "name", [], "any", false, false, false, 8)))) {
                    // line 9
                    yield "                        <span>";
                    yield $this->env->getFilter('translate')->getCallable()("DevicesDetection_XVisitsFromDevices", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "count", [], "any", false, false, false, 9)) . "</strong>"), (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 9)) . "</strong>"));
                    yield "
                    ";
                } else {
                    // line 11
                    yield "                    <span>";
                    yield $this->env->getFilter('translate')->getCallable()("DevicesDetection_XVisitsFromDevices", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "count", [], "any", false, false, false, 11)) . "</strong>"), (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 11)) . "</strong>"));
                    yield ":
                        ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 12));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                        // line 13
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["device"], "name", [], "any", false, false, false, 13), "html", null, true);
                        yield " (";
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["device"], "count", [], "any", false, false, false, 13), "html", null, true);
                        yield "x)";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    yield "</span>
                    ";
                }
                // line 17
                yield "                </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "</div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@DevicesDetection/_profileSummary.twig";
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
        return array (  118 => 19,  112 => 17,  108 => 15,  88 => 13,  71 => 12,  66 => 11,  60 => 9,  58 => 8,  54 => 7,  51 => 6,  47 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if visitorData.devices is defined %}
    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>{{ 'DevicesDetection_Devices'|translate }}</h1>
        <div>
            {%- for entry in visitorData.devices -%}
                <p>
                    <img height=\"16\" src=\"{{ entry.icon }}\" />
                    {% if entry.devices|length == 1 and 'General_Unknown'|translate in entry.devices[0].name %}
                        <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}
                    {% else %}
                    <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}:
                        {% for device in entry.devices -%}
                            {{ device.name }} ({{ device.count }}x){% if not loop.last %}, {% endif %}
                        {%- endfor -%}
                    </span>
                    {% endif %}
                </p>
            {%- endfor -%}
        </div>
    </div>
{% endif %}", "@DevicesDetection/_profileSummary.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/DevicesDetection/templates/_profileSummary.twig");
    }
}
