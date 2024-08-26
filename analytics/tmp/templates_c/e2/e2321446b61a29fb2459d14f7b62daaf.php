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

/* @Morpheus/javascriptCode.twig */
class __TwigTemplate_ff8e84a79b107c83290ce36d177210b7 extends Template
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
        yield "<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    ";
        // line 11
        if ((isset($context["loadAsync"]) || array_key_exists("loadAsync", $context) ? $context["loadAsync"] : (function () { throw new RuntimeError('Variable "loadAsync" does not exist.', 11, $this->source); })())) {
            yield "var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);";
        }
        // line 13
        yield "
  })();
</script>
";
        // line 16
        if ( !(isset($context["loadAsync"]) || array_key_exists("loadAsync", $context) ? $context["loadAsync"] : (function () { throw new RuntimeError('Variable "loadAsync" does not exist.', 16, $this->source); })())) {
            yield "<script src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
";
        }
        // line 18
        if ((isset($context["trackNoScript"]) || array_key_exists("trackNoScript", $context) ? $context["trackNoScript"] : (function () { throw new RuntimeError('Variable "trackNoScript" does not exist.', 18, $this->source); })())) {
            yield "<noscript><p><img referrerpolicy=\"no-referrer-when-downgrade\" src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
";
        }
        // line 20
        yield "<!-- End Matomo Code -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Morpheus/javascriptCode.twig";
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
        return array (  70 => 20,  65 => 18,  60 => 16,  55 => 13,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    {% if loadAsync %}var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);{% endif %}

  })();
</script>
{% if not loadAsync %}<script src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
{% endif %}
{% if trackNoScript %}<noscript><p><img referrerpolicy=\"no-referrer-when-downgrade\" src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
{% endif %}
<!-- End Matomo Code -->
", "@Morpheus/javascriptCode.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/javascriptCode.twig");
    }
}
