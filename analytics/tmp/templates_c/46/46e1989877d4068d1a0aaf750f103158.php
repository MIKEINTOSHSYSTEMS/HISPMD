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

/* @Tour/engagement.twig */
class __TwigTemplate_ccb3aba9134f04dbd4c27db41ac1aadc extends Template
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
        yield "<div class=\"widgetBody tourEngagement\">
    <p aria-hidden=\"true\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 3, $this->source); })()), "numLevelsTotal", [], "any", false, false, false, 3)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            yield "        <span class=\"icon-star ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 4, $this->source); })()), "currentLevel", [], "any", false, false, false, 4) >= $context["i"])) {
                yield "successStar";
            } else {
                yield "upgradeStar";
            }
            yield "\"></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "    </p>

    ";
        // line 8
        if ((isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 8, $this->source); })())) {
            // line 9
            yield "       <p><strong class=\"completed\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_CompletionTitle"), "html", null, true);
            yield "</strong>
           ";
            // line 10
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_CompletionMessage"), "html", null, true);
            yield "
            <br />
            <br />
           ";
            // line 13
            yield $this->env->getFilter('translate')->getCallable()("Tour_YouCanCallYourselfExpert", "<strong class=\"successStar\">", "</strong>");
            yield "<br /><br />
           ";
            // line 14
            yield $this->env->getFilter('translate')->getCallable()("Tour_ShareYourAchievementOn", (((("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text=" . \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_ShareAllChallengesCompleted", CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 14, $this->source); })()), "currentLevelName", [], "any", false, false, false, 14)), "url")) . "&url=") . \Piwik\piwik_escape_filter($this->env, "https://matomo.org", "url")) . "\">Twitter</a>"));
            yield "
       </p>
    ";
        } else {
            // line 17
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17)) {
                yield "<p>";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
                yield "</p>";
            }
            // line 18
            yield "
        <p>
            ";
            // line 20
            yield $this->env->getFilter('translate')->getCallable()("Tour_StatusLevel", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "currentLevelName", [], "any", false, false, false, 20)) . "</strong>"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "challengesNeededForNextLevel", [], "any", false, false, false, 20), (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "nextLevelName", [], "any", false, false, false, 20)) . "</strong>"));
            yield "
        </p>

        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 25
                yield "                <li class=\"tourChallenge ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 25), "html_attr");
                yield "\" title=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "description", [], "any", false, false, false, 25), "html_attr");
                yield "\">";
                // line 26
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "isCompleted", [], "any", false, false, false, 26) || CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "isSkipped", [], "any", false, false, false, 26))) {
                    // line 27
                    yield "                        <span class=\"icon-ok\" title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_ChallengeCompleted"), "html_attr");
                    yield "\"></span>
                    ";
                } else {
                    // line 29
                    yield "                        <a href=\"javascript:void 0;\" class=\"skip-challenge\" onclick=\"tourEngagement.skipChallenge('";
                    yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 29), "js"), "html", null, true);
                    yield "')\" title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_SkipThisChallenge"), "html_attr");
                    yield "\"><span class=\"icon-hide\"></span></a>
                    ";
                }
                // line 31
                yield "                    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "url", [], "any", false, false, false, 31))) {
                    // line 32
                    yield "                        <a href=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "url", [], "any", false, false, false, 32)), "html_attr");
                    yield "\" target=\"_blank\" rel=\"noreferrer noopener\">";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "name", [], "any", false, false, false, 32), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 34
                    yield "                        ";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["challenge"], "name", [], "any", false, false, false, 34), "html", null, true);
                    yield "
                    ";
                }
                // line 36
                yield "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        ";
            // line 41
            if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 41, $this->source); })()))) {
                // line 42
                yield "            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage(";
                yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 42, $this->source); })()), "js"), "html", null, true);
                yield ")\">&lsaquo; ";
                if ((isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 42, $this->source); })())) {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Previous"), "html", null, true);
                } else {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_PreviousChallenges"), "html", null, true);
                }
                yield "</a>
        ";
            }
            // line 44
            yield "        ";
            if ((isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 44, $this->source); })())) {
                // line 45
                yield "            ";
                if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 45, $this->source); })()))) {
                    yield " | ";
                }
                // line 46
                yield "            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage(";
                yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 46, $this->source); })()), "js"), "html", null, true);
                yield ")\">";
                if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 46, $this->source); })()))) {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Next"), "html", null, true);
                } else {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_NextChallenges"), "html", null, true);
                }
                yield " &rsaquo;</a>
        ";
            }
            // line 48
            yield "        </p>
        <hr />
        <p class=\"tourSuperUserNote\">";
            // line 50
            yield $this->env->getFilter('translate')->getCallable()("Tour_OnlyVisibleToSuperUser", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/general/faq_35/"), "</a>");
            yield "</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').length) {
                    tourEngagement.goToPage(";
            // line 54
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 54, $this->source); })()), "js"), "html", null, true);
            yield ");
                }
            });
        </script>
    ";
        }
        // line 59
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Tour/engagement.twig";
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
        return array (  212 => 59,  204 => 54,  197 => 50,  193 => 48,  181 => 46,  176 => 45,  173 => 44,  161 => 42,  159 => 41,  154 => 38,  147 => 36,  141 => 34,  133 => 32,  130 => 31,  122 => 29,  116 => 27,  114 => 26,  108 => 25,  104 => 24,  97 => 20,  93 => 18,  86 => 17,  80 => 14,  76 => 13,  70 => 10,  65 => 9,  63 => 8,  59 => 6,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody tourEngagement\">
    <p aria-hidden=\"true\">
    {% for i in 1..level.numLevelsTotal %}
        <span class=\"icon-star {% if level.currentLevel >= i %}successStar{% else %}upgradeStar{% endif %}\"></span>
    {% endfor %}
    </p>

    {% if isCompleted %}
       <p><strong class=\"completed\">{{ 'Tour_CompletionTitle'|translate }}</strong>
           {{ 'Tour_CompletionMessage'|translate }}
            <br />
            <br />
           {{ 'Tour_YouCanCallYourselfExpert'|translate('<strong class=\"successStar\">', '</strong>')|raw }}<br /><br />
           {{ 'Tour_ShareYourAchievementOn'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text='~ \"Tour_ShareAllChallengesCompleted\"|translate(level.currentLevelName)|e('url') ~ '&url=' ~ \"https://matomo.org\"|e('url') ~ '\">Twitter</a>')|raw }}
       </p>
    {% else %}
        {% if level.description %}<p>{{ level.description }}</p>{% endif %}

        <p>
            {{ 'Tour_StatusLevel'|translate('<strong>'~ level.currentLevelName ~'</strong>', level.challengesNeededForNextLevel, '<strong>'~ level.nextLevelName ~'</strong>')|raw }}
        </p>

        <ul>
            {% for challenge in challenges %}
                <li class=\"tourChallenge {{ challenge.id|e('html_attr') }}\" title=\"{{ challenge.description|e('html_attr') }}\">
                    {%- if challenge.isCompleted or challenge.isSkipped %}
                        <span class=\"icon-ok\" title=\"{{ 'Tour_ChallengeCompleted'|translate|e('html_attr') }}\"></span>
                    {% else %}
                        <a href=\"javascript:void 0;\" class=\"skip-challenge\" onclick=\"tourEngagement.skipChallenge('{{ challenge.id|e('js') }}')\" title=\"{{ 'Tour_SkipThisChallenge'|translate|e('html_attr') }}\"><span class=\"icon-hide\"></span></a>
                    {% endif %}
                    {% if challenge.url is not empty %}
                        <a href=\"{{ challenge.url|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">{{ challenge.name }}</a>
                    {% else %}
                        {{ challenge.name }}
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        {% if previousPage is not null %}
            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage({{ previousPage|e('js') }})\">&lsaquo; {% if nextPage %}{{ 'General_Previous'|translate }}{% else %}{{ 'Tour_PreviousChallenges'|translate }}{% endif %}</a>
        {% endif %}
        {% if nextPage %}
            {% if previousPage is not null %} | {% endif %}
            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage({{ nextPage|e('js') }})\">{% if previousPage is not null %}{{ 'General_Next'|translate }}{% else %}{{ 'Tour_NextChallenges'|translate }}{% endif %} &rsaquo;</a>
        {% endif %}
        </p>
        <hr />
        <p class=\"tourSuperUserNote\">{{ 'Tour_OnlyVisibleToSuperUser'|translate(externallink('https://matomo.org/faq/general/faq_35/'), '</a>')|raw }}</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').length) {
                    tourEngagement.goToPage({{ currentPage|e('js') }});
                }
            });
        </script>
    {% endif %}

</div>
", "@Tour/engagement.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Tour/templates/engagement.twig");
    }
}
