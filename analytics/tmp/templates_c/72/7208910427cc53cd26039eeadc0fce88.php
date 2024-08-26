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

/* @SitesManager/_integrationsTab.twig */
class __TwigTemplate_eb87b89e1f22ddffa29b08323dd5c284 extends Template
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
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_CmsAndWebsiteBuilders"), "html", null, true);
        yield "</h2>

";
        // line 3
        if ((isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 3, $this->source); })())) {
            // line 4
            yield "    <p>";
            yield (isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 4, $this->source); })());
            yield "</p>

    ";
            // line 6
            if (CoreExtension::inFilter("GoogleTagManager", (isset($context["trackers"]) || array_key_exists("trackers", $context) ? $context["trackers"] : (function () { throw new RuntimeError('Variable "trackers" does not exist.', 6, $this->source); })()))) {
                // line 7
                yield "        <p>";
                yield $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDetectedGtm", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager"), "</a>");
                yield "</p>
    ";
            }
            // line 9
            yield "
    <p>";
            // line 10
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherIntegrations"), "html", null, true);
            yield ": ";
            yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/integrate/"), "</a>");
            yield "</p>
";
        } else {
            // line 12
            yield "    <p>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuidesIntro"), "html", null, true);
            yield "</p>

    <p>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["instructionUrls"]) || array_key_exists("instructionUrls", $context) ? $context["instructionUrls"] : (function () { throw new RuntimeError('Variable "instructionUrls" does not exist.', 15, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["instructionUrl"]) {
                // line 16
                yield "        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 16)) {
                    yield " | ";
                }
                yield "<a target=\"_blank\" rel=\"noreferrer noopener\" href='";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructionUrl"], "instructionUrl", [], "any", false, false, false, 16), "html", null, true);
                yield "'>";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["instructionUrl"], "name", [], "any", false, false, false, 16), "html", null, true);
                yield "</a>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructionUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "    </p>

    <p>";
            // line 20
            yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/integrate/"), "</a>");
            yield "</p>
    <p>";
            // line 21
            yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
            yield "</p>
    <br>
    <p>";
            // line 23
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ExtraInformationNeeded"), "html", null, true);
            yield "</p>
    <p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">";
            // line 24
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["matomoUrl"]) || array_key_exists("matomoUrl", $context) ? $context["matomoUrl"] : (function () { throw new RuntimeError('Variable "matomoUrl" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "</code></p>
    <p>";
            // line 25
            yield $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 25, $this->source); })())) . "</code>"));
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
        return "@SitesManager/_integrationsTab.twig";
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
        return array (  138 => 25,  134 => 24,  130 => 23,  125 => 21,  121 => 20,  117 => 18,  94 => 16,  77 => 15,  70 => 12,  63 => 10,  60 => 9,  54 => 7,  52 => 6,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ 'SitesManager_CmsAndWebsiteBuilders'|translate }}</h2>

{% if instruction %}
    <p>{{ instruction|raw }}</p>

    {% if 'GoogleTagManager' in trackers %}
        <p>{{ 'SitesManager_SiteWithoutDataDetectedGtm'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager'),'</a>')|raw }}</p>
    {% endif %}

    <p>{{ 'SitesManager_SiteWithoutDataOtherIntegrations'|translate }}: {{ 'CoreAdminHome_JSTrackingIntro3a'|translate(externallink('https://matomo.org/integrate/'),'</a>')|raw }}</p>
{% else %}
    <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}</p>

    <p>
    {% for instructionUrl in instructionUrls %}
        {% if not loop.first %} | {% endif %}<a target=\"_blank\" rel=\"noreferrer noopener\" href='{{ instructionUrl.instructionUrl }}'>{{ instructionUrl.name }}</a>
    {% endfor %}
    </p>

    <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate(externallink('https://matomo.org/integrate/'),'</a>')|raw }}</p>
    <p>{{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>
    <br>
    <p>{{ 'SitesManager_ExtraInformationNeeded'|translate }}</p>
    <p>Matomo URL: <code vue-directive=\"CoreHome.CopyToClipboard\">{{ matomoUrl }}</code></p>
    <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</p>
{% endif %}", "@SitesManager/_integrationsTab.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/SitesManager/templates/_integrationsTab.twig");
    }
}
