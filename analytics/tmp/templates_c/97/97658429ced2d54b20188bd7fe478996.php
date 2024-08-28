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

/* @Dashboard/index.twig */
class __TwigTemplate_00fa1420aea8dae1a3a41dfc4b9d40b9 extends Template
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
        yield from         $this->loadTemplate("@Dashboard/_header.twig", "@Dashboard/index.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div class=\"top_controls\">
    ";
        // line 3
        yield from         $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Dashboard/index.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    ";
        yield $this->env->getFunction('postEvent')->getCallable()("Template.nextToCalendar");
        yield "
    <div vue-entry=\"Dashboard.DashboardSettings\"></div>
    ";
        // line 6
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "    <div id=\"Dashboard\" class=\"piwikTopControl borderedControl piwikSelector\">
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard"]) {
                // line 10
                yield "                <li id=\"Dashboard_embeddedIndex_";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dashboard"], "iddashboard", [], "any", false, false, false, 10), "html", null, true);
                yield "\">
                    <a href=\"#\" onclick=\"\$('#dashboardWidgetsArea').dashboard('loadDashboard', ";
                // line 11
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dashboard"], "iddashboard", [], "any", false, false, false, 11), "html", null, true);
                yield ");\"
                       class=\"item\">";
                // line 12
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dashboard"], "name", [], "any", false, false, false, 12));
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </ul>
    </div>
    ";
        }
        // line 18
        yield "</div>
";
        // line 19
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Dashboard/index.twig", 19)->unwrap();
        // line 20
        yield CoreExtension::callMacro($macros["ajax"], "macro_loadingDiv", [], 20, $context, $this->getSourceContext());
        yield "
";
        // line 21
        yield from         $this->loadTemplate("@Dashboard/embeddedIndex.twig", "@Dashboard/index.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "</body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Dashboard/index.twig";
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
        return array (  95 => 22,  93 => 21,  89 => 20,  87 => 19,  84 => 18,  79 => 15,  70 => 12,  66 => 11,  61 => 10,  57 => 9,  53 => 7,  51 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@Dashboard/_header.twig\" %}
<div class=\"top_controls\">
    {% include \"@CoreHome/_periodSelect.twig\" %}
    {{ postEvent(\"Template.nextToCalendar\") }}
    <div vue-entry=\"Dashboard.DashboardSettings\"></div>
    {% if dashboards|length %}
    <div id=\"Dashboard\" class=\"piwikTopControl borderedControl piwikSelector\">
        <ul>
            {% for dashboard in dashboards %}
                <li id=\"Dashboard_embeddedIndex_{{ dashboard.iddashboard }}\">
                    <a href=\"#\" onclick=\"\$('#dashboardWidgetsArea').dashboard('loadDashboard', {{ dashboard.iddashboard }});\"
                       class=\"item\">{{ dashboard.name|escape }}</a>
                </li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
</div>
{% import 'ajaxMacros.twig' as ajax %}
{{ ajax.loadingDiv }}
{% include \"@Dashboard/embeddedIndex.twig\" %}
</body>
</html>", "@Dashboard/index.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Dashboard/templates/index.twig");
    }
}
