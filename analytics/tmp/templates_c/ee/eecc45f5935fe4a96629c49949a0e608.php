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

/* @SitesManager/_vueTabInstructions.twig */
class __TwigTemplate_88c541657a6c242ffe4655198d936231 extends Template
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
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_VueDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js"), "</a>");
            yield "
</div>
";
        }
        // line 8
        yield "
<p>";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueIntro"), "html", null, true);
        yield "</p>
<br>
<p>";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepsIntro"), "html", null, true);
        yield "</p>
<ol class=\"list-style-decimal\">
    <li>";
        // line 13
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep1", "<strong>vue-matomo</strong>");
        yield "<div><pre style=\"text-indent: 1.2rem; padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">npm install --save vue-matomo</pre></div></li>
    <li>
        ";
        // line 15
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2", "<strong>VueMatomo</strong>", "<strong>main.js</strong>");
        yield "
        <br><br>
        ";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2ExampleCode", "Vue.js 3"), "html", null, true);
        yield ":
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["vue3Code"]) || array_key_exists("vue3Code", $context) ? $context["vue3Code"] : (function () { throw new RuntimeError('Variable "vue3Code" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</pre></div>
        ";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStep2ExampleCode", "Vue.js 2"), "html", null, true);
        yield ":
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["vue2Code"]) || array_key_exists("vue2Code", $context) ? $context["vue2Code"] : (function () { throw new RuntimeError('Variable "vue2Code" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</pre></div>
    </li>
</ol>
<br>

<p>";
        // line 25
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStepCompleted", "<strong>", "</strong>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>");
        yield "</p>
<br>
<strong>";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Note"), "html", null, true);
        yield ":</strong><ol class=\"list-style-decimal\">
    <li>";
        // line 28
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueFollowStepNote1", "<code vue-directive=\"CoreHome.CopyToClipboard\">window._paq.push</code>");
        yield "</li>
    <li>";
        // line 29
        yield $this->env->getFilter('translate')->getCallable()((isset($context["SiteWithoutDataVueFollowStepNote2Key"]) || array_key_exists("SiteWithoutDataVueFollowStepNote2Key", $context) ? $context["SiteWithoutDataVueFollowStepNote2Key"] : (function () { throw new RuntimeError('Variable "SiteWithoutDataVueFollowStepNote2Key" does not exist.', 29, $this->source); })()), $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/spa-tracking"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/spa-tracking#using-matomo-tag-manager-to-track-single-page-application"), "</a>");
        yield "</li>
</ol>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SitesManager/_vueTabInstructions.twig";
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
        return array (  111 => 29,  107 => 28,  103 => 27,  98 => 25,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  68 => 13,  63 => 11,  58 => 9,  55 => 8,  49 => 5,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_StepByStepGuide'|translate }}</h2>

{% if wasDetected %}
<div class=\"system notification notification-info\">
    {{ 'SitesManager_VueDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>',externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js'),'</a>')|raw }}
</div>
{% endif %}

<p>{{ 'SitesManager_SiteWithoutDataVueIntro'|translate }}</p>
<br>
<p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepsIntro'|translate }}</p>
<ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataVueFollowStep1'|translate('<strong>vue-matomo</strong>')|raw }}<div><pre style=\"text-indent: 1.2rem; padding-top:2em;padding-bottom:2em\" vue-directive=\"CoreHome.CopyToClipboard\">npm install --save vue-matomo</pre></div></li>
    <li>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2'|translate('<strong>VueMatomo</strong>', '<strong>main.js</strong>')|raw }}
        <br><br>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2ExampleCode'|translate('Vue.js 3') }}:
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">{{ vue3Code }}</pre></div>
        {{ 'SitesManager_SiteWithoutDataVueFollowStep2ExampleCode'|translate('Vue.js 2') }}:
        <div><pre class=\"codeblock\" vue-directive=\"CoreHome.CopyToClipboard\">{{ vue2Code }}</pre></div>
    </li>
</ol>
<br>

<p>{{ 'SitesManager_SiteWithoutDataVueFollowStepCompleted'|translate('<strong>', '</strong>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>')|raw }}</p>
<br>
<strong>{{ 'General_Note'|translate }}:</strong><ol class=\"list-style-decimal\">
    <li>{{ 'SitesManager_SiteWithoutDataVueFollowStepNote1'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">window._paq.push</code>')|raw }}</li>
    <li>{{ SiteWithoutDataVueFollowStepNote2Key|translate(externallink('https://developer.matomo.org/guides/spa-tracking'),'</a>', externallink('https://developer.matomo.org/guides/spa-tracking#using-matomo-tag-manager-to-track-single-page-application'),'</a>')|raw }}</li>
</ol>", "@SitesManager/_vueTabInstructions.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/_vueTabInstructions.twig");
    }
}
