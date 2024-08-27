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

/* @ProfessionalServices/promoServicesWidget.twig */
class __TwigTemplate_7b07ae14be40671f7fcadf81c72b6a4f extends Template
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
        yield "<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) || array_key_exists("ctaLinkUrl", $context) ? $context["ctaLinkUrl"] : (function () { throw new RuntimeError('Variable "ctaLinkUrl" does not exist.', 3, $this->source); })()), "html_attr");
        yield "\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ctaTitle"]) || array_key_exists("ctaTitle", $context) ? $context["ctaTitle"] : (function () { throw new RuntimeError('Variable "ctaTitle" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</h2>
        <p class=\"text\">
            <span>";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ctaText"]) || array_key_exists("ctaText", $context) ? $context["ctaText"] : (function () { throw new RuntimeError('Variable "ctaText" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</span>
            <br /><br />
            <a class=\"btn\" href=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) || array_key_exists("ctaLinkUrl", $context) ? $context["ctaLinkUrl"] : (function () { throw new RuntimeError('Variable "ctaLinkUrl" does not exist.', 8, $this->source); })()), "html_attr");
        yield "\" target=\"_blank\" rel=\"noreferrer noopener\">
                ";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkTitle"]) || array_key_exists("ctaLinkTitle", $context) ? $context["ctaLinkTitle"] : (function () { throw new RuntimeError('Variable "ctaLinkTitle" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "
            </a>
        </p>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ProfessionalServices/promoServicesWidget.twig";
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
        return array (  60 => 9,  56 => 8,  51 => 6,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>{{ ctaTitle }}</h2>
        <p class=\"text\">
            <span>{{ ctaText }}</span>
            <br /><br />
            <a class=\"btn\" href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                {{ ctaLinkTitle }}
            </a>
        </p>
    </div>
</div>
", "@ProfessionalServices/promoServicesWidget.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/ProfessionalServices/templates/promoServicesWidget.twig");
    }
}
