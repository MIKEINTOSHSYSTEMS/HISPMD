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

/* @CoreAdminHome/getTrackingFailures.twig */
class __TwigTemplate_19754024399e2bb8cfd1d539be62589e extends Template
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
        yield "<div class=\"widgetBody system-check\">
    ";
        // line 2
        if (((isset($context["numFailures"]) || array_key_exists("numFailures", $context) ? $context["numFailures"] : (function () { throw new RuntimeError('Variable "numFailures" does not exist.', 2, $this->source); })()) == 0)) {
            // line 3
            yield "        <p class=\"system-success\"><span class=\"icon-ok\"></span> ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NoKnownFailures"), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 5
            yield "        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> ";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NTrackingFailures", (isset($context["numFailures"]) || array_key_exists("numFailures", $context) ? $context["numFailures"] : (function () { throw new RuntimeError('Variable "numFailures" does not exist.', 6, $this->source); })())), "html", null, true);
            yield "</span>
        </p>
        <p>
            <a href=\"";
            // line 9
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingFailures"]), "html", null, true);
            yield "\"
            >";
            // line 10
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ViewAllTrackingFailures"), "html", null, true);
            yield "</a>
        </p>
    ";
        }
        // line 13
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreAdminHome/getTrackingFailures.twig";
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
        return array (  68 => 13,  62 => 10,  58 => 9,  52 => 6,  49 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody system-check\">
    {% if numFailures == 0 %}
        <p class=\"system-success\"><span class=\"icon-ok\"></span> {{ 'CoreAdminHome_NoKnownFailures'|translate }}</p>
    {% else %}
        <p class=\"system-errors\">
            <span style=\"font-size: 16px;\"><span class=\"icon-error\"></span> {{ 'CoreAdminHome_NTrackingFailures'|translate(numFailures) }}</span>
        </p>
        <p>
            <a href=\"{{ linkTo({'module': 'CoreAdminHome', 'action': 'trackingFailures'}) }}\"
            >{{ 'CoreAdminHome_ViewAllTrackingFailures'|translate }}</a>
        </p>
    {% endif %}
</div>", "@CoreAdminHome/getTrackingFailures.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreAdminHome/templates/getTrackingFailures.twig");
    }
}
