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

/* @Live/_profileSummary.twig */
class __TwigTemplate_23467f48db8ef3ed203dd4767c78dab9 extends Template
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
        $context["pageviewDetails"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 2, $this->source); })()), "totalUniquePageViews", [], "any", false, false, false, 2), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnUniquePageviews"), "html", null, true);
            yield ", ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 2, $this->source); })()), "totalRevisitedPages", [], "any", false, false, false, 2), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_RevisitedPages"), "html", null, true);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        yield "
<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Summary"), "html", null, true);
        yield "</h1>
    <div>
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "hasMoreVisits", [], "any", false, false, false, 8)) {
            // line 9
            yield "            <p>";
            yield $this->env->getFilter('translate')->getCallable()("Live_LimitedSummary", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 9, $this->source); })()), "totalVisits", [], "any", false, false, false, 9)) . "</strong>"));
            yield "</p>
        ";
        }
        // line 11
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "totalPageViews", [], "any", false, false, false, 11) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "totalActions", [], "any", false, false, false, 11))) {
            // line 12
            yield "            ";
            $context["actionDetails"] = [];
            // line 13
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 13, $this->source); })()), "totalPageViews", [], "any", false, false, false, 13) > 0)) {
                $context["actionDetails"] = Twig\Extension\CoreExtension::merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 13, $this->source); })()), [(((((("<span title=\"" . (isset($context["pageviewDetails"]) || array_key_exists("pageviewDetails", $context) ? $context["pageviewDetails"] : (function () { throw new RuntimeError('Variable "pageviewDetails" does not exist.', 13, $this->source); })())) . "\">") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 13, $this->source); })()), "totalPageViews", [], "any", false, false, false, 13)) . " ") . $this->env->getFilter('translate')->getCallable()("General_ColumnPageviews")) . "</span>")]);
            }
            // line 14
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalEvents", [], "any", true, true, false, 14) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "totalEvents", [], "any", false, false, false, 14) > 0))) {
                $context["actionDetails"] = Twig\Extension\CoreExtension::merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 14, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "totalEvents", [], "any", false, false, false, 14) . " ") . $this->env->getFilter('translate')->getCallable()("Events_Events"))]);
            }
            // line 15
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 15, $this->source); })()), "totalDownloads", [], "any", false, false, false, 15) > 0)) {
                $context["actionDetails"] = Twig\Extension\CoreExtension::merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 15, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 15, $this->source); })()), "totalDownloads", [], "any", false, false, false, 15) . " ") . $this->env->getFilter('translate')->getCallable()("General_Downloads"))]);
            }
            // line 16
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 16, $this->source); })()), "totalOutlinks", [], "any", false, false, false, 16) > 0)) {
                $context["actionDetails"] = Twig\Extension\CoreExtension::merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 16, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 16, $this->source); })()), "totalOutlinks", [], "any", false, false, false, 16) . " ") . $this->env->getFilter('translate')->getCallable()("General_Outlinks"))]);
            }
            // line 17
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 17, $this->source); })()), "totalSearches", [], "any", false, false, false, 17) > 0)) {
                $context["actionDetails"] = Twig\Extension\CoreExtension::merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 17, $this->source); })()), [((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 17, $this->source); })()), "totalSearches", [], "any", false, false, false, 17) . " ") . $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearches"))]);
            }
            // line 18
            yield "            <p>";
            yield $this->env->getFilter('translate')->getCallable()("Live_VisitSummaryWithActionDetails", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalVisitDurationPretty", [], "any", false, false, false, 18)) . "</strong>"), "", "", ("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalActions", [], "any", false, false, false, 18)), "</strong>", Twig\Extension\CoreExtension::join((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 18, $this->source); })()), ", "), ("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalVisits", [], "any", false, false, false, 18)), "</strong>");
            yield "</p>
        ";
        } else {
            // line 20
            yield "            <p>";
            yield $this->env->getFilter('translate')->getCallable()("Live_VisitSummary", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalVisitDurationPretty", [], "any", false, false, false, 20)) . "</strong>"), "", "", ((("<strong title=\"" . (isset($context["pageviewDetails"]) || array_key_exists("pageviewDetails", $context) ? $context["pageviewDetails"] : (function () { throw new RuntimeError('Variable "pageviewDetails" does not exist.', 20, $this->source); })())) . "\">") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalActions", [], "any", false, false, false, 20)), "</strong>", ("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalVisits", [], "any", false, false, false, 20)), "</strong>");
            yield "</p>
        ";
        }
        // line 22
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalGoalConversions", [], "any", true, true, false, 22)) {
            // line 23
            yield "        <p>";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)) {
                yield "<strong>";
            }
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ConvertedNGoals", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)) {
                yield "</strong>";
            }
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 24)) {
                // line 25
                yield "            ";
                $context["goalList"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "totalConversionsByGoal", [], "any", false, false, false, 26));
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
                    foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                        // line 27
                        $context["idGoal"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["idGoal"], 7, null);
                        // line 28
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["goals"] ?? null), $context["idGoal"], [], "array", true, true, false, 28)) {
                            // line 29
                            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 29)) {
                                yield ", ";
                            }
                            yield \Piwik\piwik_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                            yield " ";
                            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 29, $this->source); })()), $context["idGoal"], [], "array", false, false, false, 29), "name", [], "array", false, false, false, 29), "html", null, true);
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 33
                yield "            ";
                if ((isset($context["goalList"]) || array_key_exists("goalList", $context) ? $context["goalList"] : (function () { throw new RuntimeError('Variable "goalList" does not exist.', 33, $this->source); })())) {
                    yield "(";
                    yield \Piwik\piwik_escape_filter($this->env, (isset($context["goalList"]) || array_key_exists("goalList", $context) ? $context["goalList"] : (function () { throw new RuntimeError('Variable "goalList" does not exist.', 33, $this->source); })()), "html", null, true);
                    yield ")";
                }
            }
            // line 34
            yield ".</p>
        ";
        }
        // line 36
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalSearches", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalSearches", [], "any", false, false, false, 36), 0)) : (0))) {
            // line 37
            yield "        <p>
            ";
            // line 38
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_WidgetSearchKeywords"), "html", null, true);
            yield ":";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 39, $this->source); })()), "searches", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                yield " <strong title=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "searches", [], "any", false, false, false, 39) == 1)) {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_OneSearch"), "html", null, true);
                } else {
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Searches", CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "searches", [], "any", false, false, false, 39)), "html", null, true);
                }
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "keyword", [], "any", false, false, false, 39), "html", null, true);
                yield "</strong>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) {
                    yield ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "        </p>
        ";
        }
        // line 42
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", false, false, false, 42), 0)) : (0)) > 0)) {
            // line 43
            yield "            <p title=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_CalculatedOverNPageViews", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 43, $this->source); })()), "totalPageViewsWithLoadTime", [], "any", false, false, false, 43)), "html", null, true);
            yield "\">
                ";
            // line 44
            yield $this->env->getFilter('translate')->getCallable()("Live_AveragePageGenerationTime", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 44, $this->source); })()), "averagePageLoadTime", [], "any", false, false, false, 44)) . "s</strong>"));
            yield "
            </p>
        ";
        }
        // line 47
        yield "        ";
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", false, false, false, 47), 0)) : (0)) == 0) && CoreExtension::getAttribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageGenerationTime", [], "any", true, true, false, 47))) {
            // line 48
            yield "        <p title=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_CalculatedOverNPageViews", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 48, $this->source); })()), "totalPageViewsWithTiming", [], "any", false, false, false, 48)), "html", null, true);
            yield "\">
            ";
            // line 49
            yield $this->env->getFilter('translate')->getCallable()("Live_AveragePageGenerationTime", (("<strong>" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 49, $this->source); })()), "averagePageGenerationTime", [], "any", false, false, false, 49)) . "s</strong>"));
            yield "
        </p>
        ";
        }
        // line 52
        yield "    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_profileSummary.twig";
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
        return array (  267 => 52,  261 => 49,  256 => 48,  253 => 47,  247 => 44,  242 => 43,  239 => 42,  235 => 40,  194 => 39,  191 => 38,  188 => 37,  185 => 36,  181 => 34,  173 => 33,  151 => 29,  149 => 28,  147 => 27,  130 => 26,  127 => 25,  125 => 24,  116 => 23,  113 => 22,  107 => 20,  101 => 18,  96 => 17,  91 => 16,  86 => 15,  81 => 14,  76 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  57 => 6,  53 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set pageviewDetails %}
    {{ visitorData.totalUniquePageViews }} {{ 'General_ColumnUniquePageviews'|translate }}, {{ visitorData.totalRevisitedPages }} {{ 'Actions_RevisitedPages'|translate }}
{% endset %}

<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>{{ 'General_Summary'|translate }}</h1>
    <div>
        {% if visitorData.hasMoreVisits %}
            <p>{{ 'Live_LimitedSummary'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalPageViews != visitorData.totalActions %}
            {% set actionDetails = [] %}
            {% if visitorData.totalPageViews > 0 %}{% set actionDetails = actionDetails|merge(['<span title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalPageViews ~ ' ' ~ 'General_ColumnPageviews'|translate ~ '</span>']) %}{% endif %}
            {% if visitorData.totalEvents is defined and visitorData.totalEvents > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalEvents ~ ' ' ~ 'Events_Events'|translate]) %}{% endif %}
            {% if visitorData.totalDownloads > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalDownloads ~ ' ' ~ 'General_Downloads'|translate]) %}{% endif %}
            {% if visitorData.totalOutlinks > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalOutlinks ~ ' ' ~ 'General_Outlinks'|translate]) %}{% endif %}
            {% if visitorData.totalSearches > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalSearches ~ ' ' ~ 'Actions_ColumnSearches'|translate]) %}{% endif %}
            <p>{{ 'Live_VisitSummaryWithActionDetails'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions, '</strong>', actionDetails|join(', ') , '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% else %}
            <p>{{ 'Live_VisitSummary'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalActions,  '</strong>', '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalGoalConversions is defined %}
        <p>{% if visitorData.totalGoalConversions %}<strong>{% endif %}{{ 'Live_ConvertedNGoals'|translate(visitorData.totalGoalConversions) }}{% if visitorData.totalGoalConversions %}</strong>{% endif %}
        {%- if visitorData.totalGoalConversions %}
            {% set goalList %}
            {%- for idGoal, totalConversions in visitorData.totalConversionsByGoal -%}
                {%- set idGoal = idGoal[7:] -%}
                {% if goals[idGoal] is defined %}
                    {%- if not loop.first %}, {% endif -%}{{- totalConversions }} {{ goals[idGoal]['name'] -}}
                {% endif %}
            {%- endfor -%}
            {% endset %}
            {% if goalList %}({{ goalList }}){% endif %}
        {%- endif %}.</p>
        {% endif %}
        {% if visitorData.totalSearches|default(0) %}
        <p>
            {{ 'Actions_WidgetSearchKeywords'|translate }}:
            {%- for entry in visitorData.searches %} <strong title=\"{% if entry.searches == 1 %}{{ 'Actions_OneSearch'|translate }}{% else %}{{ 'UserCountryMap_Searches'|translate(entry.searches) }}{% endif %}\">{{ entry.keyword }}</strong>{% if not loop.last %},{% endif %}{% endfor %}
        </p>
        {% endif %}
        {% if visitorData.averagePageLoadTime|default(0) > 0 %}
            <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithLoadTime) }}\">
                {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageLoadTime ~ 's</strong>')|raw }}
            </p>
        {% endif %}
        {% if visitorData.averagePageLoadTime|default(0) == 0 and visitorData.averagePageGenerationTime is defined %}
        <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithTiming) }}\">
            {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageGenerationTime ~ 's</strong>')|raw }}
        </p>
        {% endif %}
    </div>
</div>", "@Live/_profileSummary.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_profileSummary.twig");
    }
}
