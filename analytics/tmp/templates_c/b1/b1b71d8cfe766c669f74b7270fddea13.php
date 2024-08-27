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

/* @CoreHome/_dataTableActions.twig */
class __TwigTemplate_9b11c4eac34a76011e3011dfe7879dae extends Template
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
        yield "<div
    vue-entry=\"CoreHome.DataTableActions\"
    show-footer=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()), "show_footer", [], "any", false, false, false, 3)), "html", null, true);
        yield "\"
    show-footer-icons=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 4, $this->source); })()), "show_footer_icons", [], "any", false, false, false, 4)), "html", null, true);
        yield "\"
    footer-icons=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["footerIcons"]) || array_key_exists("footerIcons", $context) ? $context["footerIcons"] : (function () { throw new RuntimeError('Variable "footerIcons" does not exist.', 5, $this->source); })())), "html", null, true);
        yield "\"
    report-title=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)), "html", null, true);
        yield "\"
    request-params=\"";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "request_parameters_to_modify", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "request_parameters_to_modify", [], "any", false, false, false, 7), [])) : ([]))), "html", null, true);
        yield "\"
    api-method-to-request-data-table=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 8, $this->source); })()), "apiMethodToRequestDataTable", [], "any", false, false, false, 8)), "html", null, true);
        yield "\"
    max-filter-limit=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 9, $this->source); })()), "max_export_filter_limit", [], "any", false, false, false, 9)), "html", null, true);
        yield "\"
    show-export=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 10, $this->source); })()), "show_export", [], "any", false, false, false, 10)), "html", null, true);
        yield "\"
    show-export-as-image-icon=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 11, $this->source); })()), "show_export_as_image_icon", [], "any", false, false, false, 11)), "html", null, true);
        yield "\"
    show-annotations=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(($this->env->getFunction('isPluginLoaded')->getCallable()("Annotations") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 12, $this->source); })()), "hide_annotations_view", [], "any", false, false, false, 12))), "html", null, true);
        yield "\"
    show-search=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 13, $this->source); })()), "show_search", [], "any", false, false, false, 13)), "html", null, true);
        yield "\"
    report-id=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 14, $this->source); })()), "report_id", [], "any", false, false, false, 14)), "html", null, true);
        yield "\"
    data-table-actions=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", false, false, false, 15), [])) : ([]))), "html", null, true);
        yield "\"
    show-flatten-table=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 16, $this->source); })()), "show_flatten_table", [], "any", false, false, false, 16)), "html", null, true);
        yield "\"
    client-side-parameters=\"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "\"
    has-multiple-dimensions=\"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("hasMultipleDimensions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["hasMultipleDimensions"]) || array_key_exists("hasMultipleDimensions", $context) ? $context["hasMultipleDimensions"] : (function () { throw new RuntimeError('Variable "hasMultipleDimensions" does not exist.', 18, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
    is-data-table-empty=\"";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "\"
    show-totals-row=\"";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", false, false, false, 20), false)) : (false))), "html", null, true);
        yield "\"
    show-exclude-low-population=\"";
        // line 21
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_exclude_low_population", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_exclude_low_population", [], "any", false, false, false, 21), false)) : (false))), "html", null, true);
        yield "\"
    show-pivot-by-subtable=\"";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, json_encode((((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", false, false, false, 22), false)) : (false)) &&  !((array_key_exists("isComparing", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isComparing"]) || array_key_exists("isComparing", $context) ? $context["isComparing"] : (function () { throw new RuntimeError('Variable "isComparing" does not exist.', 22, $this->source); })()), false)) : (false)))), "html", null, true);
        yield "\"
    show-periods=\"";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 23, $this->source); })()), "show_periods", [], "any", false, false, false, 23)), "html", null, true);
        yield "\"
    translations=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "translations", [], "any", false, false, false, 24)), "html", null, true);
        yield "\"
    view-data-table=\"";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 25, $this->source); })()), "viewDataTable", [], "any", false, false, false, 25)), "html", null, true);
        yield "\"
    pivot-dimension-name=\"";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "pivot_dimension_name", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "pivot_dimension_name", [], "any", false, false, false, 26), null)) : (null))), "html", null, true);
        yield "\"
    selectable-periods=\"";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "selectable_periods", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "selectable_periods", [], "any", false, false, false, 27), [])) : ([]))), "html", null, true);
        yield "\"
></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTableActions.twig";
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
        return array (  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    vue-entry=\"CoreHome.DataTableActions\"
    show-footer=\"{{ properties.show_footer|json_encode }}\"
    show-footer-icons=\"{{ properties.show_footer_icons|json_encode }}\"
    footer-icons=\"{{ footerIcons|json_encode }}\"
    report-title=\"{{ properties.title|json_encode }}\"
    request-params=\"{{ properties.request_parameters_to_modify|default({})|json_encode }}\"
    api-method-to-request-data-table=\"{{ properties.apiMethodToRequestDataTable|json_encode }}\"
    max-filter-limit=\"{{ properties.max_export_filter_limit|json_encode }}\"
    show-export=\"{{ properties.show_export|json_encode }}\"
    show-export-as-image-icon=\"{{ properties.show_export_as_image_icon|json_encode }}\"
    show-annotations=\"{{ (isPluginLoaded('Annotations') and not properties.hide_annotations_view)|json_encode }}\"
    show-search=\"{{ properties.show_search|json_encode }}\"
    report-id=\"{{ properties.report_id|json_encode }}\"
    data-table-actions=\"{{ properties.datatable_actions|default([])|json_encode }}\"
    show-flatten-table=\"{{ properties.show_flatten_table|json_encode }}\"
    client-side-parameters=\"{{ clientSideParameters|json_encode }}\"
    has-multiple-dimensions=\"{{ hasMultipleDimensions|default(false)|json_encode }}\"
    is-data-table-empty=\"{{ isDataTableEmpty|json_encode }}\"
    show-totals-row=\"{{ properties.show_totals_row|default(false)|json_encode }}\"
    show-exclude-low-population=\"{{ properties.show_exclude_low_population|default(false)|json_encode }}\"
    show-pivot-by-subtable=\"{{ (properties.show_pivot_by_subtable|default(false) and not isComparing|default(false))|json_encode }}\"
    show-periods=\"{{ properties.show_periods|json_encode }}\"
    translations=\"{{ properties.translations|json_encode }}\"
    view-data-table=\"{{ clientSideParameters.viewDataTable|json_encode }}\"
    pivot-dimension-name=\"{{ properties.pivot_dimension_name|default(null)|json_encode }}\"
    selectable-periods=\"{{ properties.selectable_periods|default([])|json_encode }}\"
></div>
", "@CoreHome/_dataTableActions.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_dataTableActions.twig");
    }
}
