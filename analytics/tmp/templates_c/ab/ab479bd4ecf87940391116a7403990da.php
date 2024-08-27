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

/* @CoreHome/getPromoVideo.twig */
class __TwigTemplate_6c91dccd0117a8fed1a8aebed8174df7 extends Template
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
        yield "<div id=\"piwik-promo\">
    <a id=\"piwik-promo-videos-link\" href=\"";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 2, $this->source); })()), "html_attr");
        yield "\" rel=\"noreferrer noopener\" target=\"_blank\">
        <div id=\"piwik-promo-video\">
            <div id=\"piwik-promo-thumbnail\">
                <img src=\"plugins/CoreHome/images/promo_video_splash.jpg\"/>
            </div>
        </div>

        <span>";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ViewAllPiwikVideoTutorials"), "html", null, true);
        yield "</span>
    </a>

    <div id=\"piwik-promo-share\">
        <span>";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ShareThis"), "html", null, true);
        yield ":</span>

        ";
        // line 16
        yield "        <a href=\"https://www.facebook.com/sharer.php?u=";
        yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::urlencode((isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 21
        yield "        <a href=\"https://twitter.com/share?text=";
        yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::urlencode((isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "&url=";
        yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::urlencode((isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 26
        yield "        <a href=\"mailto:?body=";
        yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::urlencode((isset($context["shareTextLong"]) || array_key_exists("shareTextLong", $context) ? $context["shareTextLong"] : (function () { throw new RuntimeError('Variable "shareTextLong" does not exist.', 26, $this->source); })()), true), "html", null, true);
        yield "&subject=";
        yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::urlencode((isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 26, $this->source); })()), true), "html", null, true);
        yield "\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">";
        // line 33
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CloseWidgetDirections"), "html", null, true);
        yield "</div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/getPromoVideo.twig";
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
        return array (  94 => 33,  81 => 26,  71 => 21,  63 => 16,  58 => 13,  51 => 9,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"piwik-promo\">
    <a id=\"piwik-promo-videos-link\" href=\"{{ promoVideoUrl|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\">
        <div id=\"piwik-promo-video\">
            <div id=\"piwik-promo-thumbnail\">
                <img src=\"plugins/CoreHome/images/promo_video_splash.jpg\"/>
            </div>
        </div>

        <span>{{ 'CoreHome_ViewAllPiwikVideoTutorials'|translate }}</span>
    </a>

    <div id=\"piwik-promo-share\">
        <span>{{ 'CoreHome_ShareThis'|translate }}:</span>

        {# facebook #}
        <a href=\"https://www.facebook.com/sharer.php?u={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# twitter #}
        <a href=\"https://twitter.com/share?text={{ shareText|url_encode }}&url={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# email #}
        <a href=\"mailto:?body={{ shareTextLong|url_encode(true) }}&subject={{ shareText|url_encode(true) }}\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">{{ 'CoreHome_CloseWidgetDirections'|translate }}</div>
</div>
", "@CoreHome/getPromoVideo.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/getPromoVideo.twig");
    }
}
