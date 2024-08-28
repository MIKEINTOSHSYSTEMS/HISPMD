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

/* @CoreHome/widgetContainer.twig */
class __TwigTemplate_e5f1a33200c6df86e3c16e88af2a3d9d extends Template
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
        yield "<div>
    <div
        vue-entry=\"CoreHome.Widget\"
        containerid=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 4, $this->source); })())), "html", null, true);
        yield "\"
        widgetized=\"";
        // line 5
        if ((isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 5, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\"
    ></div>

    <script type=\"text/javascript\">
        \$(function () {

            var piwikWidget = \$('[vue-entry=\"CoreHome.Widget\"][containerid=";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 11, $this->source); })()), "js"), "html", null, true);
        yield "]');
            var isExportedAsWidget = \$('body > .widget').length;

            if (!isExportedAsWidget) {
                piwikHelper.compileVueEntryComponents(piwikWidget);
            }

        });
    </script>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/widgetContainer.twig";
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
        return array (  60 => 11,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div
        vue-entry=\"CoreHome.Widget\"
        containerid=\"{{ containerId|json_encode }}\"
        widgetized=\"{% if isWidgetized %}true{% else %}false{% endif %}\"
    ></div>

    <script type=\"text/javascript\">
        \$(function () {

            var piwikWidget = \$('[vue-entry=\"CoreHome.Widget\"][containerid={{ containerId|e('js') }}]');
            var isExportedAsWidget = \$('body > .widget').length;

            if (!isExportedAsWidget) {
                piwikHelper.compileVueEntryComponents(piwikWidget);
            }

        });
    </script>
</div>", "@CoreHome/widgetContainer.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/widgetContainer.twig");
    }
}
