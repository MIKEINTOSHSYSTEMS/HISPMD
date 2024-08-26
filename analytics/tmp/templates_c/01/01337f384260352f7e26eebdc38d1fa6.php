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

/* @SitesManager/_gtmTabInstructions.twig */
class __TwigTemplate_28bf46b4e80462a87fd06b86947814ed extends Template
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

";
        // line 3
        if ((isset($context["wasDetected"]) || array_key_exists("wasDetected", $context) ? $context["wasDetected"] : (function () { throw new RuntimeError('Variable "wasDetected" does not exist.', 3, $this->source); })())) {
            // line 4
            yield "<div class=\"system notification notification-info\">
    ";
            // line 5
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_GTMDetected", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/"), "</a>");
            yield "
</div>
";
        }
        // line 8
        yield "
<p>";
        // line 9
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerIntro", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/"), "</a>");
        yield "</p>
<br>
<p>";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerFollowStepsIntro"), "html", null, true);
        yield "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 13
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep1", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://tagmanager.google.com/\">", "</a>");
        yield "</li>
    <li>";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep2"), "html", null, true);
        yield "</li>
    <li>";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep3"), "html", null, true);
        yield "</li>
    <li>";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep4"), "html", null, true);
        yield "</li>
    <li>";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep5"), "html", null, true);
        yield "</li>
    <li>";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep6"), "html", null, true);
        yield "<br><div><pre vue-directive=\"CoreHome.CopyToClipboard\">";
        yield (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 18, $this->source); })());
        yield "</pre></div></li>
    <li>";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep7"), "html", null, true);
        yield "</li>
    <li>";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep8"), "html", null, true);
        yield "</li>
    <li>";
        // line 21
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep9"), "html", null, true);
        yield "</li>
    <li>";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep10"), "html", null, true);
        yield "</li>
    <li>";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGTMFollowStep11"), "html", null, true);
        yield "</li>
</ol>
<br>
<p>";
        // line 26
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerFollowStepCompleted", "<strong>", "</strong>");
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_gtmTabInstructions.twig";
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
        return array (  116 => 26,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  63 => 11,  58 => 9,  55 => 8,  49 => 5,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if wasDetected %}
<div class=\"system notification notification-info\">
    {{ 'SitesManager_GTMDetected'|translate(externallink('https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/'), '</a>')|raw }}
</div>
{% endif %}

<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerIntro'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'),'</a>')|raw }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep1'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://tagmanager.google.com/\">','</a>')|raw }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep2'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep3'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep4'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep5'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep6'|translate }}<br><div><pre vue-directive=\"CoreHome.CopyToClipboard\">{{ jsTag|raw }}</pre></div></li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep7'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep8'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep9'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep10'|translate }}</li>
    <li>{{ 'SitesManager_SiteWithoutDataGTMFollowStep11'|translate }}</li>
</ol>
<br>
<p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerFollowStepCompleted'|translate('<strong>','</strong>')|raw }}</p>
", "@SitesManager/_gtmTabInstructions.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/_gtmTabInstructions.twig");
    }
}
