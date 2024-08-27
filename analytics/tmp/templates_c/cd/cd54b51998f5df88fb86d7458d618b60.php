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

/* @ProfessionalServices/promoSessionRecordings.twig */
class __TwigTemplate_04b18f2360211245780248936e73ceda extends Template
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
        yield "<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/heatmap-session-recording-learn-more/"), "html", null, true);
        yield "\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSessionRecordings.twig";
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
        return array (  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/recommends/heatmap-session-recording-learn-more/'|trackmatomolink }}\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
", "@ProfessionalServices/promoSessionRecordings.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/ProfessionalServices/templates/promoSessionRecordings.twig");
    }
}
