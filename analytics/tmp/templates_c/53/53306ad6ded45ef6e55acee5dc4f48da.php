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

/* @CoreHome/_htmlEmailFooter.twig */
class __TwigTemplate_c2ec70234557b1756b25f597484bde20 extends Template
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
        $context["fontStyle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield "color:";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 1, $this->source); })()), "colorText", [], "any", false, false, false, 1), "html_attr");
            yield ";font-family:";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 1, $this->source); })()), "fontFamilyBase", [], "any", false, false, false, 1), "html_attr");
            yield ";";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        $context["styleParagraph"] = "font-size:15px;line-height:24px;margin:0 0 16px;";
        // line 3
        $context["footerParagraphStyle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["styleParagraph"]) || array_key_exists("styleParagraph", $context) ? $context["styleParagraph"] : (function () { throw new RuntimeError('Variable "styleParagraph" does not exist.', 3, $this->source); })()), "html", null, true);
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "text-align:center;font-size:13px; color:#666;";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        $context["hasHorizontalRule"] = ( !(isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 4, $this->source); })()) ||  !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("unsubscribeLink", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 4, $this->source); })()))) : (""))));
        // line 5
        yield "
";
        // line 6
        if ((isset($context["hasHorizontalRule"]) || array_key_exists("hasHorizontalRule", $context) ? $context["hasHorizontalRule"] : (function () { throw new RuntimeError('Variable "hasHorizontalRule" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "    <hr style=\" border: 0; margin-top: 50px;  height: 1px; background-image: linear-gradient(to right, rgba(231, 231, 231, 0), rgba(231, 231, 231, 1), rgba(2311, 2311, 231, 0));\">
";
        } else {
            // line 9
            yield "    <br/>
";
        }
        // line 11
        yield "
";
        // line 12
        if ( !(isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "    <p style='";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["footerParagraphStyle"]) || array_key_exists("footerParagraphStyle", $context) ? $context["footerParagraphStyle"] : (function () { throw new RuntimeError('Variable "footerParagraphStyle" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "padding-top:30px;margin-bottom:0;'>
        ";
            // line 14
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
            yield "
        <a style=\"color:#439fe0;\" rel=\"noreferrer\" href=\"https://matomo.org/\" title=\"Matomo Analytics\">Matomo Analytics</a>
        <br />
        ";
            // line 17
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_LeadingAnalyticsPlatformRespectsYourPrivacy"), "html", null, true);
            yield "
    </p>
";
        }
        // line 20
        yield "
";
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("unsubscribeLink", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 21, $this->source); })()))) : ("")))) {
            // line 22
            yield "    ";
            $context["unsubLink"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a style=\"color:#439fe0;\" href=\"";
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 22, $this->source); })()), "html_attr");
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ScheduledReports_Unsubscribe"), "html", null, true);
                yield "</a>";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "    <p style='";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["footerParagraphStyle"]) || array_key_exists("footerParagraphStyle", $context) ? $context["footerParagraphStyle"] : (function () { throw new RuntimeError('Variable "footerParagraphStyle" does not exist.', 23, $this->source); })()), "html", null, true);
            if ((isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 23, $this->source); })())) {
                yield "padding-top:30px;";
            }
            yield "'>";
            yield $this->env->getFilter('translate')->getCallable()("ScheduledReports_UnsubscribeFooter", (isset($context["unsubLink"]) || array_key_exists("unsubLink", $context) ? $context["unsubLink"] : (function () { throw new RuntimeError('Variable "unsubLink" does not exist.', 23, $this->source); })()));
            yield ".</p>
";
        }
        // line 25
        yield "
</div>
</body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_htmlEmailFooter.twig";
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
        return array (  119 => 25,  108 => 23,  98 => 22,  96 => 21,  93 => 20,  87 => 17,  81 => 14,  76 => 13,  74 => 12,  71 => 11,  67 => 9,  63 => 7,  61 => 6,  58 => 5,  56 => 4,  49 => 3,  47 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set fontStyle %}color:{{ themeStyles.colorText|e('html_attr') }};font-family:{{ themeStyles.fontFamilyBase|e('html_attr') }};{% endset %}
{% set styleParagraph = 'font-size:15px;line-height:24px;margin:0 0 16px;' %}
{% set footerParagraphStyle %}{{styleParagraph}}{{fontStyle}}text-align:center;font-size:13px; color:#666;{% endset %}
{% set hasHorizontalRule = not hasWhiteLabel or unsubscribeLink|default is not empty  %}

{% if hasHorizontalRule %}
    <hr style=\" border: 0; margin-top: 50px;  height: 1px; background-image: linear-gradient(to right, rgba(231, 231, 231, 0), rgba(231, 231, 231, 1), rgba(2311, 2311, 231, 0));\">
{% else %}
    <br/>
{% endif %}

{% if not hasWhiteLabel %}
    <p style='{{ footerParagraphStyle }}padding-top:30px;margin-bottom:0;'>
        {{'General_PoweredBy'|translate}}
        <a style=\"color:#439fe0;\" rel=\"noreferrer\" href=\"https://matomo.org/\" title=\"Matomo Analytics\">Matomo Analytics</a>
        <br />
        {{ 'CoreHome_LeadingAnalyticsPlatformRespectsYourPrivacy'|translate }}
    </p>
{% endif %}

{% if unsubscribeLink|default is not empty %}
    {% set unsubLink %}<a style=\"color:#439fe0;\" href=\"{{ unsubscribeLink|e('html_attr') }}\">{{ 'ScheduledReports_Unsubscribe'|translate }}</a>{% endset %}
    <p style='{{ footerParagraphStyle }}{% if hasWhiteLabel %}padding-top:30px;{% endif %}'>{{ 'ScheduledReports_UnsubscribeFooter'|translate(unsubLink)|raw }}.</p>
{% endif %}

</div>
</body>
</html>
", "@CoreHome/_htmlEmailFooter.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_htmlEmailFooter.twig");
    }
}
