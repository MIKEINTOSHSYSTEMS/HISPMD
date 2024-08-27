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

/* @Annotations/getEvolutionIcons.twig */
class __TwigTemplate_465d09745f6b0616ca418e479e3d1b44 extends Template
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
        yield "<div class=\"evolution-annotations\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annotationCounts"]) || array_key_exists("annotationCounts", $context) ? $context["annotationCounts"] : (function () { throw new RuntimeError('Variable "annotationCounts" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateCountPair"]) {
            // line 3
            yield "        ";
            $context["date"] = CoreExtension::getAttribute($this->env, $this->source, $context["dateCountPair"], 0, [], "array", false, false, false, 3);
            // line 4
            yield "        ";
            $context["counts"] = CoreExtension::getAttribute($this->env, $this->source, $context["dateCountPair"], 1, [], "array", false, false, false, 4);
            // line 5
            yield "        <span data-date=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\" data-count=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 5, $this->source); })()), "count", [], "any", false, false, false, 5), "html", null, true);
            yield "\" data-starred=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 5, $this->source); })()), "starred", [], "any", false, false, false, 5), "html", null, true);
            yield "\"
              ";
            // line 6
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 6, $this->source); })()), "count", [], "any", false, false, false, 6) == 0)) {
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_AddAnnotationsFor", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 6, $this->source); })())), "html", null, true);
                yield "\"
              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 7
(isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 7, $this->source); })()), "count", [], "any", false, false, false, 7) == 1)) {
                yield "title=\"";
                yield $this->env->getFilter('translate')->getCallable()("Annotations_AnnotationOnDate", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 7, $this->source); })()), \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source,                 // line 8
(isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 8, $this->source); })()), "note", [], "any", false, false, false, 8), "html_attr"));
                yield "
";
                // line 9
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_ClickToEditOrAdd"), "html", null, true);
                yield "\"
              ";
            } else {
                // line 10
                yield "title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_ViewAndAddAnnotations", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 10, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield ">
            <span class=\"icon-annotation ";
            // line 11
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 11, $this->source); })()), "starred", [], "any", false, false, false, 11) > 0)) {
                yield "starred";
            }
            yield "\"></span>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateCountPair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Annotations/getEvolutionIcons.twig";
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
        return array (  96 => 14,  85 => 11,  78 => 10,  73 => 9,  69 => 8,  66 => 7,  60 => 6,  51 => 5,  48 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"evolution-annotations\">
    {% for dateCountPair in annotationCounts %}
        {% set date=dateCountPair[0] %}
        {% set counts=dateCountPair[1] %}
        <span data-date=\"{{ date }}\" data-count=\"{{ counts.count }}\" data-starred=\"{{ counts.starred }}\"
              {% if counts.count == 0 %}title=\"{{ 'Annotations_AddAnnotationsFor'|translate(date) }}\"
              {% elseif counts.count == 1 %}title=\"{{ 'Annotations_AnnotationOnDate'|translate(date,
                  (counts.note|e('html_attr')))|raw }}
{{ 'Annotations_ClickToEditOrAdd'|translate }}\"
              {% else %}title=\"{{ 'Annotations_ViewAndAddAnnotations'|translate(date) }}\"{% endif %}>
            <span class=\"icon-annotation {% if counts.starred > 0 %}starred{% endif %}\"></span>
        </span>
    {% endfor %}
</div>
", "@Annotations/getEvolutionIcons.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Annotations/templates/getEvolutionIcons.twig");
    }
}
