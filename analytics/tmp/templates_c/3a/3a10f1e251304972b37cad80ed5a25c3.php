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

/* @CoreHome/quickLinks.twig */
class __TwigTemplate_4dd9b52aa9c4e9e9b53d518ac8073857 extends Template
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
        yield "<div class=\"widgetBody quickLinks\">
    ";
        // line 2
        if ((isset($context["hasSitesAdmin"]) || array_key_exists("hasSitesAdmin", $context) ? $context["hasSitesAdmin"] : (function () { throw new RuntimeError('Variable "hasSitesAdmin" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"";
            // line 5
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "SitesManager", "action" => "index", "showaddsite" => "1"]), "html", null, true);
            yield "\"
           class=\"itemLabel\">";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_AddSite"));
            yield "</a>
    </div>
    ";
        }
        // line 9
        yield "    ";
        if ((isset($context["hasUsersAdmin"]) || array_key_exists("hasUsersAdmin", $context) ? $context["hasUsersAdmin"] : (function () { throw new RuntimeError('Variable "hasUsersAdmin" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"";
            // line 12
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "UsersManager", "action" => "index", "showadduser" => "1"]), "html", null, true);
            yield "\"
           class=\"itemLabel\">";
            // line 13
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_InviteNewUser"));
            yield "</a>
    </div>
    ";
        }
        // line 16
        yield "    <br />
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/quickLinks.twig";
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
        return array (  74 => 16,  68 => 13,  64 => 12,  60 => 10,  57 => 9,  51 => 6,  47 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody quickLinks\">
    {% if hasSitesAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'SitesManager', 'action': 'index', 'showaddsite': '1'}) }}\"
           class=\"itemLabel\">{{ 'SitesManager_AddSite'|translate|e }}</a>
    </div>
    {% endif %}
    {% if hasUsersAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'index', 'showadduser': '1'}) }}\"
           class=\"itemLabel\">{{ 'UsersManager_InviteNewUser'|translate|e }}</a>
    </div>
    {% endif %}
    <br />
</div>
", "@CoreHome/quickLinks.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/quickLinks.twig");
    }
}
