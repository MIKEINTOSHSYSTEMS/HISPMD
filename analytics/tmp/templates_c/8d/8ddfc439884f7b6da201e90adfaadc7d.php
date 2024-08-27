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

/* @Feedback/feedbackQuestionBanner.twig */
class __TwigTemplate_f7345b59c2df595c401a18b828cd577e extends Template
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
        yield "<div vue-entry=\"Feedback.FeedbackQuestion\" show-question-banner=\"";
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((isset($context["showQuestionBanner"]) || array_key_exists("showQuestionBanner", $context) ? $context["showQuestionBanner"] : (function () { throw new RuntimeError('Variable "showQuestionBanner" does not exist.', 1, $this->source); })()) == 1)), "html", null, true);
        yield "\"></div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Feedback/feedbackQuestionBanner.twig";
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
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div vue-entry=\"Feedback.FeedbackQuestion\" show-question-banner=\"{{ (showQuestionBanner == 1)|json_encode }}\"></div>", "@Feedback/feedbackQuestionBanner.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Feedback/templates/feedbackQuestionBanner.twig");
    }
}
