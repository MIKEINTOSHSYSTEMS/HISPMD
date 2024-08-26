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

/* @SitesManager/_wordpressTabInstructions.twig */
class __TwigTemplate_b3830695b66cf86a69745a406a310ded extends Template
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
        yield "<h2>";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_StepByStepGuide"), "html", null, true);
        yield "</h2>

<p>";
        // line 3
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressIntroductionLine1", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/"), "</a>");
        yield "</p>
<p>";
        // line 4
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressIntroductionLine2", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/start-tracking-with-a-wordpress-com-site-that-cannot-use-plugins/"), "</a>");
        yield "</p>
<br>
<p class=\"steps-to-start-tracking-header\">";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepsIntro"), "html", null, true);
        yield "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps1"), "html", null, true);
        yield "</li>
    <li>";
        // line 9
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps2", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/"), "</a>");
        yield "</li>
    <li>";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps3"), "html", null, true);
        yield "</li>
    <li>";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps4"), "html", null, true);
        yield "</li>
    <li>";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps5"), "html", null, true);
        yield "</li>
    <li>";
        // line 13
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps6");
        yield "</li>
    <li>";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps7"), "html", null, true);
        yield "</li>
    <li>";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps8"), "html", null, true);
        yield "<div><pre style=\"text-indent: 1.2rem;padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</pre></div></li>
    ";
        // line 16
        if ((isset($context["authLink"]) || array_key_exists("authLink", $context) ? $context["authLink"] : (function () { throw new RuntimeError('Variable "authLink" does not exist.', 16, $this->source); })())) {
            // line 17
            yield "        <li>";
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps9", (("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"" . (isset($context["authLink"]) || array_key_exists("authLink", $context) ? $context["authLink"] : (function () { throw new RuntimeError('Variable "authLink" does not exist.', 17, $this->source); })())) . "\">"), "</a>", (("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"" . (isset($context["faqLink"]) || array_key_exists("faqLink", $context) ? $context["faqLink"] : (function () { throw new RuntimeError('Variable "faqLink" does not exist.', 17, $this->source); })())) . "\">"), "</a>");
            yield "</li>
    ";
        } else {
            // line 19
            yield "        <li>";
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps9", "", "", $this->env->getFunction('externallink')->getCallable()((isset($context["faqLink"]) || array_key_exists("faqLink", $context) ? $context["faqLink"] : (function () { throw new RuntimeError('Variable "faqLink" does not exist.', 19, $this->source); })())), "</a>");
            yield "</li>
    ";
        }
        // line 21
        yield "    <li>";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps10"), "html", null, true);
        yield "</li>
    <li>";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps11"), "html", null, true);
        yield "</li>
    <li>";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps12"), "html", null, true);
        yield "</li>
    <li>";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps13"), "html", null, true);
        yield "</li>
    <li>";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps14"), "html", null, true);
        yield "</li>
    <li>";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps15"), "html", null, true);
        yield "</li>
    <li>";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps16"), "html", null, true);
        yield "</li>
    <li>";
        // line 28
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowSteps17"), "html", null, true);
        yield "</li>
";
        // line 29
        if ((((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 29, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)) && (isset($context["isJsTrackerInstallCheckAvailable"]) || array_key_exists("isJsTrackerInstallCheckAvailable", $context) ? $context["isJsTrackerInstallCheckAvailable"] : (function () { throw new RuntimeError('Variable "isJsTrackerInstallCheckAvailable" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "    <li vue-entry=\"JsTrackerInstallCheck.JsTrackerInstallCheck\" site=\"";
            yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })())), "html", null, true);
            yield "\" is-wordpress=\"true\"></li>
</ol>
";
        } else {
            // line 33
            yield "</ol>
<br>
<p>";
            // line 35
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepCompleted", "<strong>", "</strong>");
            yield "</p>
<br>
<p>";
            // line 37
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressFollowStepNote", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://wordpress.org/plugins/wp-piwik/\">WP-Matomo Integration (WP-Piwik)</a>");
            yield "</p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_wordpressTabInstructions.twig";
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
        return array (  157 => 37,  152 => 35,  148 => 33,  141 => 30,  139 => 29,  135 => 28,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  106 => 21,  100 => 19,  94 => 17,  92 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  48 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

<p>{{ 'SitesManager_SiteWithoutDataWordpressIntroductionLine1'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'), '</a>')|raw }}</p>
<p>{{ 'SitesManager_SiteWithoutDataWordpressIntroductionLine2'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/'), '</a>', externallink('https://matomo.org/faq/new-to-piwik/start-tracking-with-a-wordpress-com-site-that-cannot-use-plugins/'), '</a>')|raw }}</p>
<br>
<p class=\"steps-to-start-tracking-header\">{{ 'SitesManager_SiteWithoutDataWordpressFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps1'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps2'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-manually-insert-the-matomo-tracking-code-on-wordpress/'),'</a>')|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps3'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps4'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps5'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps6'|translate|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps7'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps8'|translate }}<div><pre style=\"text-indent: 1.2rem;padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">{{ piwikUrl }}</pre></div></li>
    {% if authLink %}
        <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps9'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"'~authLink~'\">','</a>','<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"'~faqLink~'\">','</a>')|raw }}</li>
    {% else %}
        <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps9'|translate('','',externallink(faqLink),'</a>')|raw }}</li>
    {% endif %}
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps10'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps11'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps12'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps13'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps14'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps15'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps16'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataWordpressFollowSteps17'|translate }}</li>
{% if site and site.id and isJsTrackerInstallCheckAvailable %}
    <li vue-entry=\"JsTrackerInstallCheck.JsTrackerInstallCheck\" site=\"{{ site|json_encode }}\" is-wordpress=\"true\"></li>
</ol>
{% else %}
</ol>
<br>
<p>{{ 'SitesManager_SiteWithoutDataWordpressFollowStepCompleted'|translate('<strong>', '</strong>')|raw }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataWordpressFollowStepNote'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://wordpress.org/plugins/wp-piwik/\">WP-Matomo Integration (WP-Piwik)</a>')|raw }}</p>
{% endif %}
", "@SitesManager/_wordpressTabInstructions.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/_wordpressTabInstructions.twig");
    }
}
