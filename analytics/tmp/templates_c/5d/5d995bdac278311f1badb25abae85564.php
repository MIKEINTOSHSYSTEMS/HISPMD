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

/* @TwoFactorAuth/userSettings.twig */
class __TwigTemplate_3eb13c6b9420de9d7249bba3cdb0d4fa extends Template
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
    vue-entry=\"TwoFactorAuth.UserSettings\"
    is-enabled=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isEnabled"]) || array_key_exists("isEnabled", $context) ? $context["isEnabled"] : (function () { throw new RuntimeError('Variable "isEnabled" does not exist.', 3, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    is-forced=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isForced", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isForced"]) || array_key_exists("isForced", $context) ? $context["isForced"] : (function () { throw new RuntimeError('Variable "isForced" does not exist.', 4, $this->source); })()), null)) : (null))), "html", null, true);
        yield "\"
    disable-nonce=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["disableNonce"]) || array_key_exists("disableNonce", $context) ? $context["disableNonce"] : (function () { throw new RuntimeError('Variable "disableNonce" does not exist.', 5, $this->source); })())), "html", null, true);
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
        return "@TwoFactorAuth/userSettings.twig";
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
        return array (  50 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    vue-entry=\"TwoFactorAuth.UserSettings\"
    is-enabled=\"{{ isEnabled|default(null)|json_encode }}\"
    is-forced=\"{{ isForced|default(null)|json_encode }}\"
    disable-nonce=\"{{ disableNonce|json_encode }}\"
></div>
", "@TwoFactorAuth/userSettings.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/TwoFactorAuth/templates/userSettings.twig");
    }
}
