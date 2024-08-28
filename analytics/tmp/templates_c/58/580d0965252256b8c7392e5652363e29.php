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

/* @Login/confirmPassword.twig */
class __TwigTemplate_f12bfd18e66a7e7e089102cd5ae76852 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Login/loginLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_ConfirmPasswordToContinue"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@Login/loginLayout.twig", "@Login/confirmPassword.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"contentForm loginForm confirmPasswordForm\">
        ";
        // line 7
        yield from         $this->loadTemplate("@Login/confirmPassword.twig", "@Login/confirmPassword.twig", 7, "517490587")->unwrap()->yield(CoreExtension::merge($context, ["title" => $this->env->getFilter('translate')->getCallable()("Login_ConfirmPasswordToContinue")]));
        // line 44
        yield "    </div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/confirmPassword.twig";
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
        return array (  62 => 44,  60 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Login/loginLayout.twig' %}

{% set title %}{{ 'Login_ConfirmPasswordToContinue'|translate }}{% endset %}

{% block loginContent %}
    <div class=\"contentForm loginForm confirmPasswordForm\">
        {% embed 'contentBlock.twig' with {'title': ('Login_ConfirmPasswordToContinue'|translate)} %}
        {% block content %}

            {{ postEvent(\"Template.confirmPasswordContent\", \"top\") }}
            <div class=\"message_container\">
                {% if AccessErrorString %}
                    <div vue-entry=\"CoreHome.Notification\"
                         noclear=\"true\"
                         context=\"error\">
                        <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                    </div>
                {% endif %}
            </div>

            <form action=\"{{ linkTo({'module': loginPlugin, 'action': 'confirmPassword'}) }}\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'General_Confirm'|translate }}\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            {{ postEvent(\"Template.confirmPasswordContent\", \"bottom\") }}

        {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/confirmPassword.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Login/templates/confirmPassword.twig");
    }
}


/* @Login/confirmPassword.twig */
class __TwigTemplate_f12bfd18e66a7e7e089102cd5ae76852___517490587 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "contentBlock.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("contentBlock.twig", "@Login/confirmPassword.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "
            ";
        // line 10
        yield $this->env->getFunction('postEvent')->getCallable()("Template.confirmPasswordContent", "top");
        yield "
            <div class=\"message_container\">
                ";
        // line 12
        if ((isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "                    <div vue-entry=\"CoreHome.Notification\"
                         noclear=\"true\"
                         context=\"error\">
                        <strong>";
            // line 16
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Error"), "html", null, true);
            yield "</strong>: ";
            yield (isset($context["AccessErrorString"]) || array_key_exists("AccessErrorString", $context) ? $context["AccessErrorString"] : (function () { throw new RuntimeError('Variable "AccessErrorString" does not exist.', 16, $this->source); })());
            yield "<br/>
                    </div>
                ";
        }
        // line 19
        yield "            </div>

            <form action=\"";
        // line 21
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => (isset($context["loginPlugin"]) || array_key_exists("loginPlugin", $context) ? $context["loginPlugin"] : (function () { throw new RuntimeError('Variable "loginPlugin" does not exist.', 21, $this->source); })()), "action" => "confirmPassword"]), "html", null, true);
        yield "\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> ";
        // line 28
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Password"), "html", null, true);
        yield "</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"";
        // line 34
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Confirm"), "html", null, true);
        yield "\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            ";
        // line 40
        yield $this->env->getFunction('postEvent')->getCallable()("Template.confirmPasswordContent", "bottom");
        yield "

        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/confirmPassword.twig";
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
        return array (  237 => 40,  228 => 34,  219 => 28,  212 => 24,  206 => 21,  202 => 19,  194 => 16,  189 => 13,  187 => 12,  182 => 10,  179 => 9,  175 => 8,  164 => 7,  62 => 44,  60 => 7,  57 => 6,  53 => 5,  48 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Login/loginLayout.twig' %}

{% set title %}{{ 'Login_ConfirmPasswordToContinue'|translate }}{% endset %}

{% block loginContent %}
    <div class=\"contentForm loginForm confirmPasswordForm\">
        {% embed 'contentBlock.twig' with {'title': ('Login_ConfirmPasswordToContinue'|translate)} %}
        {% block content %}

            {{ postEvent(\"Template.confirmPasswordContent\", \"top\") }}
            <div class=\"message_container\">
                {% if AccessErrorString %}
                    <div vue-entry=\"CoreHome.Notification\"
                         noclear=\"true\"
                         context=\"error\">
                        <strong>{{ 'General_Error'|translate }}</strong>: {{ AccessErrorString|raw }}<br/>
                    </div>
                {% endif %}
            </div>

            <form action=\"{{ linkTo({'module': loginPlugin, 'action': 'confirmPassword'}) }}\" ng-non-bindable method=\"post\">
                <div class=\"row\">
                    <div class=\"col s12 input-field\">
                        <input type=\"hidden\" name=\"nonce\" id=\"login_form_nonce\" value=\"{{ nonce }}\"/>
                        <input type=\"password\" placeholder=\"\" name=\"password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                               autocorrect=\"off\" autocapitalize=\"none\" spellcheck=\"false\"
                               tabindex=\"20\" />
                        <label for=\"login_form_password\"><i class=\"icon-locked icon\"></i> {{ 'General_Password'|translate }}</label>
                    </div>
                </div>

                <div class=\"row actions\">
                    <div class=\"col s12\">
                        <input class=\"submit btn\" id='login_form_submit' type=\"submit\" value=\"{{ 'General_Confirm'|translate }}\"
                               tabindex=\"100\"/>
                    </div>
                </div>

            </form>
            {{ postEvent(\"Template.confirmPasswordContent\", \"bottom\") }}

        {% endblock %}
        {% endembed %}
    </div>

{% endblock %}", "@Login/confirmPassword.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Login/templates/confirmPassword.twig");
    }
}
