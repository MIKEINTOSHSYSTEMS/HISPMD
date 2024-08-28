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

/* @CoreHome/_donate.twig */
class __TwigTemplate_7a9e279857570b8d7d1ff7f5199f3b03 extends Template
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
        yield "<div class=\"piwik-donate-call\">
    <div class=\"piwik-donate-message\">
        ";
        // line 3
        if (array_key_exists("msg", $context)) {
            // line 4
            yield "            ";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "
        ";
        } else {
            // line 6
            yield "            <p>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall1"), "html", null, true);
            yield "</p>
            <p><strong>";
            // line 7
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall2"), "html", null, true);
            yield "</strong></p>
            <p>";
            // line 8
            yield $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall3", "<strong>", "</strong>", ($this->env->getFunction('externallink')->getCallable()("https://matomo.org/recommends/premium-plugins/") . "<strong>"), "</strong></a>");
            yield "</p>
        ";
        }
        // line 10
        yield "    </div>

    <span id=\"piwik-worth\">";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_SupportUsOn"), "html", null, true);
        yield "</span>

    <ul class=\"browser-default\">
        <li><a href=\"https://www.patreon.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Patreon</a></li>
        <li><a href=\"https://ko-fi.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Ko-fi</a></li>
        <li><a href=\"https://liberapay.com/Matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Liberapay</a></li>
        <li><a href=\"https://opencollective.com/matomo-analytics\" target=\"_blank\" rel=\"noreferrer noopener\">Open Collective</a></li>
        <li><a href=\"https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=RPL23NJURMTFA\" target=\"_blank\" rel=\"noreferrer noopener\">PayPal</a></li>
    </ul>

    <p style=\"margin-top: 1em;\">
        ";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_YourDonationWillHelp"), "html", null, true);
        yield "
        <br><br>
        <strong>";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThanksFromAllOfUs"), "html", null, true);
        yield "</strong>
    </p>

    ";
        // line 28
        if (array_key_exists("footerMessage", $context)) {
            // line 29
            yield "        <div class=\"form-description\">
            ";
            // line 30
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 33
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_donate.twig";
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
        return array (  104 => 33,  98 => 30,  95 => 29,  93 => 28,  87 => 25,  82 => 23,  68 => 12,  64 => 10,  59 => 8,  55 => 7,  50 => 6,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"piwik-donate-call\">
    <div class=\"piwik-donate-message\">
        {% if msg is defined %}
            {{ msg }}
        {% else %}
            <p>{{ 'CoreHome_DonateCall1'|translate }}</p>
            <p><strong>{{ 'CoreHome_DonateCall2'|translate }}</strong></p>
            <p>{{ 'CoreHome_DonateCall3'|translate('<strong>','</strong>', externallink('https://matomo.org/recommends/premium-plugins/') ~ '<strong>', '</strong></a>')|raw }}</p>
        {% endif %}
    </div>

    <span id=\"piwik-worth\">{{ 'CoreHome_SupportUsOn'|translate }}</span>

    <ul class=\"browser-default\">
        <li><a href=\"https://www.patreon.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Patreon</a></li>
        <li><a href=\"https://ko-fi.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Ko-fi</a></li>
        <li><a href=\"https://liberapay.com/Matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Liberapay</a></li>
        <li><a href=\"https://opencollective.com/matomo-analytics\" target=\"_blank\" rel=\"noreferrer noopener\">Open Collective</a></li>
        <li><a href=\"https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=RPL23NJURMTFA\" target=\"_blank\" rel=\"noreferrer noopener\">PayPal</a></li>
    </ul>

    <p style=\"margin-top: 1em;\">
        {{ 'CoreHome_YourDonationWillHelp'|translate }}
        <br><br>
        <strong>{{ 'CoreHome_ThanksFromAllOfUs'|translate }}</strong>
    </p>

    {% if footerMessage is defined %}
        <div class=\"form-description\">
            {{ footerMessage }}
        </div>
    {% endif %}
</div>
", "@CoreHome/_donate.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_donate.twig");
    }
}
