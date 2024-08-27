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

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_248156c528f19f97a1c5410b4f65e435 extends Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        yield "
";
        // line 4
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "<div vue-entry=\"CoreHome.Alert\" severity=\"danger\">";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</div>
";
        } else {
            // line 7
            yield "<ul id=\"visitsLive\" vue-directive=\"Live.LastVisits\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 8, $this->source); })()), "getRows", [], "method", false, false, false, 8));
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
            foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
                // line 9
                yield "        <li id=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["idVisit"], "method", false, false, false, 9), "html", null, true);
                yield "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
                // line 10
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "idVisit", [], "any", false, false, false, 10), "html", null, true);
                yield "</div>
            <div title=\"";
                // line 11
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionDetails"], "method", false, false, false, 11)), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                yield "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["serverTimestamp"], "method", false, false, false, 12);
                yield "</span>
                ";
                // line 13
                yield $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogWidgetViewBeforeVisitInfo", $context["visitor"]);
                yield "
                ";
                // line 14
                $context["year"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["serverTimestamp"], "method", false, false, false, 14), "Y");
                // line 15
                yield "                <span class=\"realTimeWidget_datetime\">";
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["serverDatePretty"], "method", false, false, false, 15), [(isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 15, $this->source); })()) => " "]), "html", null, true);
                yield " - ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["serverTimePretty"], "method", false, false, false, 15), "html", null, true);
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitDuration"], "method", false, false, false, 15) > 0)) {
                    yield "(";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitDurationPretty"], "method", false, false, false, 15);
                    yield ")";
                }
                yield "</span>
                ";
                // line 16
                if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 16), false)) : (false)))) {
                    // line 17
                    yield "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                    yield " ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 17))) {
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 17), "html", null, true);
                    }
                    yield "\" data-visitor-id=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitorId"], "method", false, false, false, 17), "html", null, true);
                    yield "\">
                        <span>";
                    // line 18
                    yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 18));
                    yield "</span>
                    </a>
                ";
                }
                // line 21
                yield "
                ";
                // line 22
                yield $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitor"]);
                yield "
                ";
                // line 23
                if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 23, $this->source); })()) &&  !(isset($context["userIsAnonymous"]) || array_key_exists("userIsAnonymous", $context) ? $context["userIsAnonymous"] : (function () { throw new RuntimeError('Variable "userIsAnonymous" does not exist.', 23, $this->source); })()))) {
                    // line 24
                    yield "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                    yield " ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 24))) {
                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["userId"], "method", false, false, false, 24), "html", null, true);
                    }
                    yield "\" data-visitor-id=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["visitorId"], "method", false, false, false, 24), "html", null, true);
                    yield "\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                ";
                }
                // line 28
                yield "
                <span class=\"referrer\">
                    ";
                // line 30
                yield from                 $this->loadTemplate("@Referrers/_visitorDetails.twig", "@Live/getLastVisitsStart.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["visitInfo" => $context["visitor"]]));
                // line 31
                yield "                 </span>
            </div>
            <div id=\"";
                // line 33
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["idVisit"], "method", false, false, false, 33), "html", null, true);
                yield "_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"";
                // line 35
                yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionDetails"], "method", false, false, false, 35)), "html", null, true);
                yield " ";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                yield "\"
                      >";
                // line 36
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                yield ":</span>&nbsp;
                ";
                // line 37
                $context["col"] = 0;
                // line 38
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionDetails"], "method", false, false, false, 38));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 39
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39) <= (isset($context["maxPagesDisplayedByVisitor"]) || array_key_exists("maxPagesDisplayedByVisitor", $context) ? $context["maxPagesDisplayedByVisitor"] : (function () { throw new RuntimeError('Variable "maxPagesDisplayedByVisitor" does not exist.', 39, $this->source); })()))) {
                        // line 40
                        yield "
                        ";
                        // line 41
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 41) == "ecommerceOrder") || (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 41) == "ecommerceAbandonedCart"))) {
                            // line 42
                            yield "                            ";
                            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                // line 43
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 43) == "ecommerceOrder")) {
                                    // line 44
                                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_EcommerceOrder"), "html", null, true);
                                } else {
                                    // line 46
                                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_AbandonedCart"), "html", null, true);
                                }
                                // line 48
                                yield "
 - ";
                                // line 49
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 49) == "ecommerceOrder")) {
                                    // line 50
                                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                    yield ":";
                                } else {
                                    // line 52
                                    $context["revenueLeft"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                        // line 53
                                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                        return; yield '';
                                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                                    // line 55
                                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_LeftInCart", (isset($context["revenueLeft"]) || array_key_exists("revenueLeft", $context) ? $context["revenueLeft"] : (function () { throw new RuntimeError('Variable "revenueLeft" does not exist.', 55, $this->source); })())), "html", null, true);
                                    yield ":";
                                }
                                // line 56
                                yield " ";
                                yield $this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 56), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 56, $this->source); })()));
                                // line 58
                                yield "
 - ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 58), "html", null, true);
                                // line 59
                                yield "
";
                                // line 60
                                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "itemDetails", [], "any", false, false, false, 60))) {
                                    // line 61
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "itemDetails", [], "any", false, false, false, 61));
                                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                        // line 62
                                        yield "
# ";
                                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "itemSKU", [], "any", false, false, false, 62), "html", null, true);
                                        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "itemName", [], "any", false, false, false, 62))) {
                                            yield ": ";
                                            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "itemName", [], "any", false, false, false, 62), "html", null, true);
                                        }
                                        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "itemCategory", [], "any", false, false, false, 62))) {
                                            yield " (";
                                            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "itemCategory", [], "any", false, false, false, 62), "html", null, true);
                                            yield ")";
                                        }
                                        yield ", ";
                                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Quantity"), "html", null, true);
                                        yield ": ";
                                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 62), "html", null, true);
                                        yield ", ";
                                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Price"), "html", null, true);
                                        yield ": ";
                                        yield $this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 62, $this->source); })()));
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                }
                                // line 65
                                yield "                            ";
                                return; yield '';
                            })())) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 66
                            yield "                            <span title=\"";
                            yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 66, $this->source); })()), "html", null, true);
                            yield "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                            // line 67
                            yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 67), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 67))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 67))), "html", null, true);
                            yield "\"/>
                                ";
                            // line 68
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 68) == "ecommerceOrder")) {
                                // line 69
                                yield "                                    ";
                                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                yield ": ";
                                yield $this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 69), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 69, $this->source); })()));
                                yield "
                                ";
                            }
                            // line 71
                            yield "                            </span>

                        ";
                        } else {
                            // line 74
                            yield "
                            ";
                            // line 75
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 75) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 75)))) {
                                // line 76
                                yield "                            <a href=\"";
                                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 76)), "html", null, true);
                                yield "\" target=\"_blank\" rel=\"noreferrer noopener\">
                            ";
                            }
                            // line 78
                            yield "                                ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 78) == "action")) {
                                // line 80
                                $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                    // line 81
                                    if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 81)))) {
                                        yield "<span class='tooltip-action-url'>";
                                        yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 81), "html", null, true);
                                        yield "</span>";
                                    }
                                    // line 82
                                    yield "
";
                                    // line 83
                                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "pageTitle", [], "any", false, false, false, 83))) {
                                        yield "<span class='tooltip-action-page-title'>";
                                        yield $this->env->getFilter('rawSafeDecoded')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "pageTitle", [], "any", false, false, false, 83));
                                        yield "</span>";
                                    }
                                    // line 84
                                    yield "
<span class=\"tooltip-action-server-time\">";
                                    // line 85
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 85), "html", null, true);
                                    yield "</span>
    ";
                                    // line 86
                                    if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "timeSpentPretty", [], "any", true, true, false, 86)) {
                                        yield "<span class='tooltip-time-on-page'>";
                                        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_TimeOnPage"), "html", null, true);
                                        yield ": ";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["action"], "timeSpentPretty", [], "any", false, false, false, 86);
                                        yield "</span>";
                                    }
                                    return; yield '';
                                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 88
                                yield "                                    <img class='iconPadding' src=\"";
                                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 88), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88))), "html", null, true);
                                yield "\" title=\"";
                                yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 88, $this->source); })()), "html");
                                yield "\"/>
                                ";
                            } elseif (((CoreExtension::getAttribute($this->env, $this->source,                             // line 89
$context["action"], "type", [], "any", false, false, false, 89) == "outlink") || (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 89) == "download"))) {
                                // line 90
                                yield "                                    <img class='iconPadding' src=\"";
                                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 90), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 90))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 90))), "html", null, true);
                                yield "\"
                                         title=\"";
                                // line 91
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 91)) {
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 91), "html", null, true);
                                    yield " - ";
                                }
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 91), "html", null, true);
                                yield "\"/>
                                ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 92
$context["action"], "type", [], "any", false, false, false, 92) == "search")) {
                                // line 93
                                yield "                                    <img class='iconPadding' src=\"";
                                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 93))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 93))), "html", null, true);
                                yield "\"
                                         title=\"";
                                // line 94
                                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_SubmenuSitesearch"), "html", null, true);
                                yield ": ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "siteSearchKeyword", [], "any", false, false, false, 94), "html", null, true);
                                yield " - ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 94), "html", null, true);
                                yield "\"/>
                                ";
                            } elseif ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source,                             // line 95
$context["action"], "eventCategory", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventCategory", [], "any", false, false, false, 95), false)) : (false)))) {
                                // line 96
                                yield "                                    <img  class=\"iconPadding\" src='";
                                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 96))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 96))), "html", null, true);
                                yield "'
                                        title=\"";
                                // line 97
                                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Events_Event"), "html", null, true);
                                yield " ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventCategory", [], "any", false, false, false, 97), "html", null, true);
                                yield " - ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventAction", [], "any", false, false, false, 97), "html", null, true);
                                yield " ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventName", [], "any", true, true, false, 97)) {
                                    yield "- ";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventName", [], "any", false, false, false, 97), "html", null, true);
                                }
                                yield " ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventValue", [], "any", true, true, false, 97)) {
                                    yield "- ";
                                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "eventValue", [], "any", false, false, false, 97), "html", null, true);
                                }
                                yield "\"/>
                                ";
                            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,                             // line 98
$context["action"], "type", [], "any", false, false, false, 98) == "goal") || (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 98) == Twig\Extension\CoreExtension::constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER"))) || (CoreExtension::getAttribute($this->env, $this->source,                             // line 99
$context["action"], "type", [], "any", false, false, false, 99) == Twig\Extension\CoreExtension::constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART")))) {
                                // line 100
                                yield "                                    <img class='iconPadding' src=\"";
                                yield \Piwik\piwik_escape_filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 100))) : (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 100))), "html", null, true);
                                yield "\"
                                         title=\"";
                                // line 101
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "goalName", [], "any", false, false, false, 101), "html", null, true);
                                yield " - ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 101) > 0)) {
                                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                    yield ": ";
                                    yield $this->env->getFilter('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 101), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 101, $this->source); })()));
                                    yield " - ";
                                }
                                yield " ";
                                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 101), "html", null, true);
                                yield "\"/>
                                ";
                            }
                            // line 103
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 103) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 103)))) {
                                // line 104
                                yield "                            </a>
                            ";
                            }
                            // line 106
                            yield "                        ";
                        }
                        // line 107
                        yield "                    ";
                    }
                    // line 108
                    yield "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "
                ";
                // line 110
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["visitor"], "getColumn", ["actionDetails"], "method", false, false, false, 110)) > (isset($context["maxPagesDisplayedByVisitor"]) || array_key_exists("maxPagesDisplayedByVisitor", $context) ? $context["maxPagesDisplayedByVisitor"] : (function () { throw new RuntimeError('Variable "maxPagesDisplayedByVisitor" does not exist.', 110, $this->source); })()))) {
                    // line 111
                    yield "                    (";
                    yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_MorePagesNotDisplayed"), "html", null, true);
                    yield ")
                ";
                }
                // line 113
                yield "            </div>
        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "</ul>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
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
        return array (  490 => 116,  474 => 113,  468 => 111,  466 => 110,  463 => 109,  449 => 108,  446 => 107,  443 => 106,  439 => 104,  436 => 103,  422 => 101,  417 => 100,  415 => 99,  414 => 98,  396 => 97,  391 => 96,  389 => 95,  381 => 94,  376 => 93,  374 => 92,  366 => 91,  361 => 90,  359 => 89,  352 => 88,  342 => 86,  338 => 85,  335 => 84,  329 => 83,  326 => 82,  320 => 81,  318 => 80,  315 => 78,  309 => 76,  307 => 75,  304 => 74,  299 => 71,  291 => 69,  289 => 68,  285 => 67,  280 => 66,  276 => 65,  250 => 62,  246 => 61,  244 => 60,  241 => 59,  237 => 58,  234 => 56,  230 => 55,  226 => 53,  224 => 52,  220 => 50,  218 => 49,  215 => 48,  212 => 46,  209 => 44,  207 => 43,  204 => 42,  202 => 41,  199 => 40,  196 => 39,  178 => 38,  176 => 37,  172 => 36,  166 => 35,  161 => 33,  157 => 31,  155 => 30,  151 => 28,  137 => 24,  135 => 23,  131 => 22,  128 => 21,  122 => 18,  111 => 17,  109 => 16,  96 => 15,  94 => 14,  90 => 13,  86 => 12,  80 => 11,  76 => 10,  71 => 9,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# some users view thousands of pages which can crash the browser viewing Live! #}
{% set maxPagesDisplayedByVisitor=100 %}

{% if error is not empty %}
<div vue-entry=\"CoreHome.Alert\" severity=\"danger\">{{ error }}</div>
{% else %}
<ul id=\"visitsLive\" vue-directive=\"Live.LastVisits\">
    {% for visitor in visitors.getRows() %}
        <li id=\"{{ visitor.getColumn('idVisit') }}\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">{{ visitor.idVisit }}</div>
            <div title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">{{ visitor.getColumn('serverTimestamp')|raw }}</span>
                {{ postEvent('Live.visitorLogWidgetViewBeforeVisitInfo', visitor) }}
                {% set year = visitor.getColumn('serverTimestamp')|date('Y') %}
                <span class=\"realTimeWidget_datetime\">{{ visitor.getColumn('serverDatePretty')|replace({(year): ' '}) }} - {{ visitor.getColumn('serverTimePretty') }} {% if visitor.getColumn('visitDuration') > 0 %}({{ visitor.getColumn('visitDurationPretty')|raw }}){% endif %}</span>
                {% if visitor.getColumn('userId')|default(false) is not empty %}
                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                        <span>{{ visitor.getColumn('userId')|rawSafeDecoded}}</span>
                    </a>
                {% endif %}

                {{ postEvent('Live.renderVisitorIcons', visitor) }}
                {% if isProfileEnabled and not userIsAnonymous %}
                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                {% endif %}

                <span class=\"referrer\">
                    {% include \"@Referrers/_visitorDetails.twig\" with {'visitInfo': visitor} %}
                 </span>
            </div>
            <div id=\"{{ visitor.getColumn('idVisit') }}_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\"
                      >{{ 'General_Actions'|translate }}:</span>&nbsp;
                {% set col = 0 %}
                {% for action in visitor.getColumn('actionDetails') %}
                    {% if loop.index <= maxPagesDisplayedByVisitor %}

                        {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}
                            {% set title %}
                                {%- if action.type == 'ecommerceOrder' %}
                                    {{- 'Goals_EcommerceOrder'|translate -}}
                                {% else %}
                                    {{- 'Goals_AbandonedCart'|translate -}}
                                {% endif %}
                                {{- \"\\n - \" -}}
                                {%- if action.type == 'ecommerceOrder' -%}
                                    {{- 'General_ColumnRevenue'|translate -}}:
                                  {%- else -%}
                                    {%- set revenueLeft -%}
                                        {{- 'General_ColumnRevenue'|translate -}}
                                    {%- endset -%}
                                    {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:
                                {%- endif %} {{ action.revenue|money(idSite)|raw -}}

                                {{- \"\\n - \" -}}{{- action.serverTimePretty -}}
                                {{- \"\\n\" -}}
                                {% if action.itemDetails is not empty -%}
                                    {% for product in action.itemDetails -%}
                                        {{- \"\\n# \" -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}
                                    {%- endfor %}
                                {%- endif %}
                            {% endset %}
                            <span title=\"{{- title -}}\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"/>
                                {% if action.type == 'ecommerceOrder' %}
                                    {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}
                                {% endif %}
                            </span>

                        {% else %}

                            {% if action.url is defined and action.url is not empty %}
                            <a href=\"{{ action.url|safelink }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                            {% endif %}
                                {% if action.type == 'action' %}
{# white spacing matters as Chrome tooltip display whitespaces #}
{% set title %}
{% if action.url|trim is not empty %}<span class='tooltip-action-url'>{{ action.url }}</span>{% endif %}

{% if action.pageTitle is not empty %}<span class='tooltip-action-page-title'>{{ action.pageTitle|rawSafeDecoded }}</span>{% endif %}

<span class=\"tooltip-action-server-time\">{{ action.serverTimePretty }}</span>
    {% if action.timeSpentPretty is defined %}<span class='tooltip-time-on-page'>{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}</span>{% endif %}
{%- endset %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\" title=\"{{- title|e('html') -}}\"/>
                                {% elseif action.type == 'outlink' or action.type == 'download' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{% if action.url is defined %}{{ action.url }} - {% endif %}{{ action.serverTimePretty }}\"/>
                                {% elseif action.type == 'search' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}\"/>
                                {% elseif action.eventCategory|default(false) is not empty %}
                                    <img  class=\"iconPadding\" src='{{ action.iconSVG|default(action.icon) }}'
                                        title=\"{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}\"/>
                                {% elseif action.type == 'goal' or action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER') or
                                          action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART') %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}\"/>
                                {% endif %}
                            {% if action.url is defined and action.url is not empty %}
                            </a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if visitor.getColumn('actionDetails')|length > maxPagesDisplayedByVisitor %}
                    ({{ 'Live_MorePagesNotDisplayed'|translate }})
                {% endif %}
            </div>
        </li>
    {% endfor %}
</ul>
{% endif %}
", "@Live/getLastVisitsStart.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/getLastVisitsStart.twig");
    }
}
