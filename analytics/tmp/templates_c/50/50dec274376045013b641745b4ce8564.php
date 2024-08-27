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

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_e736d0bc1b4bcfcaecfb09775a5c839f extends Template
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
        if ( !(isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    <div class=\"pk-emptyDataTable\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
            yield "</div>
";
        } else {
            // line 4
            yield "    <div class=\"visitor-profile\"
         data-visitor-id=\"";
            // line 5
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 5, $this->source); })()), "lastVisits", [], "any", false, false, false, 5), "getFirstRow", [], "method", false, false, false, 5), "getColumn", ["visitorId"], "method", false, false, false, 5), "html", null, true);
            yield "\"
         data-next-visitor=\"";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "nextVisitorId", [], "any", false, false, false, 6), "html", null, true);
            yield "\"
         data-prev-visitor=\"";
            // line 7
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 7, $this->source); })()), "previousVisitorId", [], "any", false, false, false, 7), "html", null, true);
            yield "\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"";
            // line 10
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Close"), "html", null, true);
            yield " \"></a>
            <a href=\"";
            // line 11
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/docs/user-profile/"), "html", null, true);
            yield "\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"";
            // line 13
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ViewDocumentationFor", ucwords($this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"))), "html", null, true);
            yield "\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"";
            // line 15
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ToggleActions"), "html", null, true);
            yield " \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"";
            // line 21
            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorAvatar", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorAvatar", [], "any", false, false, false, 21), "plugins/Live/images/unknown_avatar.png")) : ("plugins/Live/images/unknown_avatar.png")), "html", null, true);
            yield "\"
                             alt=\"";
            // line 22
            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", false, false, false, 22), "")) : ("")), "html", null, true);
            yield "\"
                             title=\"";
            // line 23
            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", false, false, false, 23), "")) : ("")), "html", null, true);
            yield "\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            ";
            // line 27
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 27, $this->source); })()), "previousVisitorId", [], "any", false, false, false, 27))) {
                yield "<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"";
                // line 29
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_PreviousVisitor"), "html", null, true);
                yield "\">
                                    &larr;</a>";
            }
            // line 31
            yield "                            <h1>";
            // line 32
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 32, $this->source); })()), "userId", [], "any", false, false, false, 32))) {
                // line 33
                yield "                                    ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"), "html", null, true);
            } else {
                // line 35
                yield "                                    <span title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_UserId"), "html", null, true);
                yield ": ";
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35));
                yield "\">";
                yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35));
                yield "</span>
                                ";
            }
            // line 37
            yield "</h1>
                            ";
            // line 38
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 38, $this->source); })()), "nextVisitorId", [], "any", false, false, false, 38))) {
                yield "<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"";
                // line 40
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NextVisitor"), "html", null, true);
                yield "\">
                                    &rarr;</a>";
            }
            // line 42
            yield "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>";
            // line 45
            yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->env->getFilter('translate')->getCallable()("General_Id")), "html", null, true);
            yield "</span>
                                ";
            // line 46
            if (array_key_exists("widgetizedLink", $context)) {
                yield "<a class=\"visitor-profile-widget-link\"
                                                                     href=\"";
                // line 47
                yield \Piwik\piwik_escape_filter($this->env, (isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context) ? $context["widgetizedLink"] : (function () { throw new RuntimeError('Variable "widgetizedLink" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\" target=\"_blank\"
                                                                     title=\"";
                // line 48
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Widgetize_OpenInNewWindow"), "html", null, true);
                yield " - ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->env->getFilter('translate')->getCallable()("General_Id")), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 48, $this->source); })()), "visitorId", [], "any", false, false, false, 48), "html", null, true);
                yield "\">";
            }
            // line 49
            yield "                                    <span>";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 49, $this->source); })()), "visitorId", [], "any", false, false, false, 49), "html", null, true);
            yield "</span>";
            // line 50
            if (array_key_exists("widgetizedLink", $context)) {
                yield "</a>";
            }
            // line 51
            yield "                                <a class=\"visitor-profile-export\" href=\"";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["exportLink"]) || array_key_exists("exportLink", $context) ? $context["exportLink"] : (function () { throw new RuntimeError('Variable "exportLink" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "\" target=\"_blank\"
                                   title=\"";
            // line 52
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ExportThisReport"), "html", null, true);
            yield "\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            ";
            // line 56
            yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 56, $this->source); })()), "lastVisits", [], "any", false, false, false, 56)));
            yield "
                        </div>
                    </div>
                </div>

                ";
            // line 61
            yield (isset($context["profileSummary"]) || array_key_exists("profileSummary", $context) ? $context["profileSummary"] : (function () { throw new RuntimeError('Variable "profileSummary" does not exist.', 61, $this->source); })());
            yield "

                ";
            // line 63
            yield $this->env->getFunction('postEvent')->getCallable()("Template.afterVisitorProfileOverview");
            yield "
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 68
            yield from             $this->loadTemplate("@Live/getVisitList.twig", "@Live/getVisitorProfilePopup.twig", 68)->unwrap()->yield(CoreExtension::merge($context, ["visits" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 68, $this->source); })()), "lastVisits", [], "any", false, false, false, 68), "startCounter" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 68, $this->source); })()), "totalVisits", [], "any", false, false, false, 68)]));
            // line 69
            yield "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 72, $this->source); })()), "lastVisits", [], "any", false, false, false, 72), "getRowsCount", [], "method", false, false, false, 72) >= Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
                // line 73
                yield "                        <a href=\"#\">";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LoadMoreVisits"), "html", null, true);
                yield "</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 77
                yield "                        <span class=\"visitor-profile-no-visits\">
                            ";
                // line 78
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 78, $this->source); })()), "hasMoreVisits", [], "any", false, false, false, 78)) {
                    // line 79
                    yield "                                ";
                    yield $this->env->getFilter('translate')->getCallable()("Live_LimitedVisitsShown", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 79, $this->source); })()), "totalVisits", [], "any", false, false, false, 79)) . "</strong>"));
                    yield "
                            ";
                } else {
                    // line 81
                    yield "                                ";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NoMoreVisits"), "html", null, true);
                    yield "
                            ";
                }
                // line 83
                yield "                        </span>
                    ";
            }
            // line 85
            yield "                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
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
        return array (  248 => 85,  244 => 83,  238 => 81,  232 => 79,  230 => 78,  227 => 77,  219 => 73,  217 => 72,  212 => 69,  210 => 68,  202 => 63,  197 => 61,  189 => 56,  182 => 52,  177 => 51,  173 => 50,  169 => 49,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  142 => 42,  137 => 40,  132 => 38,  129 => 37,  119 => 35,  115 => 33,  113 => 32,  111 => 31,  106 => 29,  101 => 27,  94 => 23,  90 => 22,  86 => 21,  77 => 15,  72 => 13,  67 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 5,  46 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not visitorData %}
    <div class=\"pk-emptyDataTable\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</div>
{% else %}
    <div class=\"visitor-profile\"
         data-visitor-id=\"{{ visitorData.lastVisits.getFirstRow().getColumn('visitorId') }}\"
         data-next-visitor=\"{{ visitorData.nextVisitorId }}\"
         data-prev-visitor=\"{{ visitorData.previousVisitorId }}\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"{{ 'General_Close'|translate }} \"></a>
            <a href=\"{{ 'https://matomo.org/docs/user-profile/'|trackmatomolink }}\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"{{ 'General_ViewDocumentationFor'|translate(\"Live_VisitorProfile\"|translate|ucwords) }}\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"{{ 'Live_ToggleActions'|translate }} \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"{{ visitorData.visitorAvatar|default(\"plugins/Live/images/unknown_avatar.png\") }}\"
                             alt=\"{{ visitorData.visitorDescription|default('') }}\"
                             title=\"{{ visitorData.visitorDescription|default('') }}\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            {% if visitorData.previousVisitorId is not empty %}<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"{{ 'Live_PreviousVisitor'|translate }}\">
                                    &larr;</a>{% endif %}
                            <h1>
                                {%- if visitorData.userId is empty %}
                                    {{ 'Live_VisitorProfile'|translate }}
                                {%- else %}
                                    <span title=\"{{ 'General_UserId'|translate }}: {{ visitorData.userId|rawSafeDecoded }}\">{{ visitorData.userId|rawSafeDecoded }}</span>
                                {% endif -%}
                            </h1>
                            {% if visitorData.nextVisitorId is not empty %}<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"{{ 'Live_NextVisitor'|translate }}\">
                                    &rarr;</a>{% endif %}
                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>{{ 'General_Id'|translate|upper }}</span>
                                {% if widgetizedLink is defined %}<a class=\"visitor-profile-widget-link\"
                                                                     href=\"{{ widgetizedLink }}\" target=\"_blank\"
                                                                     title=\"{{ 'Widgetize_OpenInNewWindow'|translate }} - {{ 'Live_VisitorProfile'|translate }} {{ 'General_Id'|translate|upper }} {{ visitorData.visitorId }}\">{% endif %}
                                    <span>{{ visitorData.visitorId }}</span>
                                    {%- if widgetizedLink is defined %}</a>{% endif %}
                                <a class=\"visitor-profile-export\" href=\"{{ exportLink }}\" target=\"_blank\"
                                   title=\"{{ 'General_ExportThisReport'|translate }}\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            {{ postEvent('Live.renderVisitorIcons', visitorData.lastVisits|first) }}
                        </div>
                    </div>
                </div>

                {{ profileSummary|raw }}

                {{ postEvent('Template.afterVisitorProfileOverview') }}
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        {% include \"@Live/getVisitList.twig\" with {'visits': visitorData.lastVisits, 'startCounter': visitorData.totalVisits} %}
                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    {% if visitorData.lastVisits.getRowsCount() >= constant(\"Piwik\\\\Plugins\\\\Live\\\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW\") %}
                        <a href=\"#\">{{ 'Live_LoadMoreVisits'|translate }}</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    {% else %}
                        <span class=\"visitor-profile-no-visits\">
                            {% if visitorData.hasMoreVisits %}
                                {{ 'Live_LimitedVisitsShown'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}
                            {% else %}
                                {{ 'Live_NoMoreVisits'|translate }}
                            {% endif %}
                        </span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
{% endif %}", "@Live/getVisitorProfilePopup.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/getVisitorProfilePopup.twig");
    }
}
