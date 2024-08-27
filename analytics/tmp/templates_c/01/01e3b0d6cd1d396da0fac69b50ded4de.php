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

/* @Live/_visitorLogIcons.twig */
class __TwigTemplate_12eb381f0cf527b4f71bcfbb11bc47fb extends Template
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
        $context["visitHasEcommerceActivity"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 1, $this->source); })()), "getColumn", ["visitEcommerceStatusIcon"], "method", false, false, false, 1);
        // line 2
        $context["breakBeforeVisitorRank"] = ((((isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 2, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 2, $this->source); })()), "getColumn", ["visitorTypeIcon"], "method", false, false, false, 2))) ? (true) : (false));
        // line 3
        yield "
<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 7, $this->source); })()), "getColumn", ["visitorTypeIcon"], "method", false, false, false, 7)) {
            // line 8
            yield "        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"";
            // line 9
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 9, $this->source); })()), "getColumn", ["visitorTypeIcon"], "method", false, false, false, 9), "html", null, true);
            yield "\"/>
            <ul class=\"details\">
                <li>";
            // line 11
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ReturningVisitor"), "html", null, true);
            yield " - ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NVisits", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 11, $this->source); })()), "getColumn", ["visitCount"], "method", false, false, false, 11)), "html", null, true);
            yield "</li>
            </ul>
        </span>
    ";
        }
        // line 15
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 15, $this->source); })()), "getColumn", ["countryFlag"], "method", false, false, false, 15)) {
            // line 16
            yield "        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 16)) {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 16), "html_attr");
            } else {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", ["country"], "method", false, false, false, 16), "html", null, true);
            }
            yield "\">

            <img src=\"";
            // line 18
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 18, $this->source); })()), "getColumn", ["countryFlag"], "method", false, false, false, 18), "html", null, true);
            yield "\"/>
            <ul class=\"details\">
                <li>";
            // line 20
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Country"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 20, $this->source); })()), "getColumn", ["country"], "method", false, false, false, 20), "html", null, true);
            yield "</li>
                ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 21, $this->source); })()), "getColumn", ["region"], "method", false, false, false, 21)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Region"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 21, $this->source); })()), "getColumn", ["region"], "method", false, false, false, 21), "html", null, true);
                yield "</li>";
            }
            // line 22
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 22, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 22)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_City"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 22, $this->source); })()), "getColumn", ["city"], "method", false, false, false, 22), "html", null, true);
                yield "</li>";
            }
            // line 23
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 23, $this->source); })()), "getColumn", ["language"], "method", false, false, false, 23)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserLanguage_BrowserLanguage"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 23, $this->source); })()), "getColumn", ["language"], "method", false, false, false, 23), "html", null, true);
                yield "</li>";
            }
            // line 24
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 24, $this->source); })()), "getColumn", ["providerName"], "method", false, false, false, 24)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Provider_ColumnProvider"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 24, $this->source); })()), "getColumn", ["providerName"], "method", false, false, false, 24), "html", null, true);
                yield "</li>";
            }
            // line 25
            yield "                <li>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_IP"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 25, $this->source); })()), "getColumn", ["visitIp"], "method", false, false, false, 25), "html", null, true);
            yield "</li>
                ";
            // line 26
            if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 26, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 26, $this->source); })()), "getColumn", ["visitorId"], "method", false, false, false, 26)))) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitorID"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 26, $this->source); })()), "getColumn", ["visitorId"], "method", false, false, false, 26), "html", null, true);
                yield "</li>";
            }
            // line 27
            yield "
            </ul>
        </span>
    ";
        }
        // line 31
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 31, $this->source); })()), "getColumn", ["browserIcon"], "method", false, false, false, 31)) {
            // line 32
            yield "        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 32, $this->source); })()), "getColumn", ["browser"], "method", false, false, false, 32), "html_attr");
            yield "\">
            <img src=\"";
            // line 33
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 33, $this->source); })()), "getColumn", ["browserIcon"], "method", false, false, false, 33), "html", null, true);
            yield "\"/>
            <ul class=\"details\">
                <li>";
            // line 35
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_ColumnBrowser"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 35, $this->source); })()), "getColumn", ["browser"], "method", false, false, false, 35), "html", null, true);
            yield "</li>
                <li>";
            // line 36
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_BrowserEngine"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 36, $this->source); })()), "getColumn", ["browserFamily"], "method", false, false, false, 36), "html", null, true);
            yield "</li>
                ";
            // line 37
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 37, $this->source); })()), "getColumn", ["pluginsIcons"], "method", false, false, false, 37)) > 0)) {
                // line 38
                yield "                    <li>
                        ";
                // line 39
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Plugins"), "html", null, true);
                yield ":
                        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 40, $this->source); })()), "getColumn", ["pluginsIcons"], "method", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["pluginIcon"]) {
                    // line 41
                    yield "                            <img width=\"16px\" height=\"16px\" src=\"";
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["pluginIcon"], "pluginIcon", [], "any", false, false, false, 41), "html", null, true);
                    yield "\" alt=\"";
                    yield \Piwik\piwik_escape_filter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pluginIcon"], "pluginName", [], "any", false, false, false, 41), true), "html", null, true);
                    yield "\"/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "                    </li>
                ";
            }
            // line 45
            yield "            </ul>
        </span>
    ";
        }
        // line 48
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 48, $this->source); })()), "getColumn", ["operatingSystemIcon"], "method", false, false, false, 48)) {
            // line 49
            yield "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 49, $this->source); })()), "getColumn", ["operatingSystem"], "method", false, false, false, 49), "html_attr");
            yield "\">
            <img src=\"";
            // line 50
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 50, $this->source); })()), "getColumn", ["operatingSystemIcon"], "method", false, false, false, 50), "html", null, true);
            yield "\"/>
            <ul class=\"details\">
                <li>";
            // line 52
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_ColumnOperatingSystem"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 52, $this->source); })()), "getColumn", ["operatingSystem"], "method", false, false, false, 52), "html", null, true);
            yield "</li>
            </ul>
        </span>
        ";
        }
        // line 56
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 56, $this->source); })()), "getColumn", ["deviceTypeIcon"], "method", false, false, false, 56)) {
            // line 57
            yield "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", ["resolution"], "method", false, false, false, 57)) {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", ["resolution"], "method", false, false, false, 57), "html_attr");
            } else {
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", ["deviceType"], "method", false, false, false, 57), "html", null, true);
            }
            yield "\">
            <img src=\"";
            // line 58
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 58, $this->source); })()), "getColumn", ["deviceTypeIcon"], "method", false, false, false, 58), "html", null, true);
            yield "\"/>
            <ul class=\"details\">
                <li>";
            // line 60
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceType"), "html", null, true);
            yield ": ";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 60, $this->source); })()), "getColumn", ["deviceType"], "method", false, false, false, 60), "html", null, true);
            yield "</li>
                ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 61, $this->source); })()), "getColumn", ["deviceBrand"], "method", false, false, false, 61)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceBrand"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 61, $this->source); })()), "getColumn", ["deviceBrand"], "method", false, false, false, 61), "html", null, true);
                yield "</li>";
            }
            // line 62
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 62, $this->source); })()), "getColumn", ["deviceModel"], "method", false, false, false, 62)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceModel"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 62, $this->source); })()), "getColumn", ["deviceModel"], "method", false, false, false, 62), "html", null, true);
                yield "</li>";
            }
            // line 63
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 63, $this->source); })()), "getColumn", ["resolution"], "method", false, false, false, 63)) {
                yield "<li>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Resolution_ColumnResolution"), "html", null, true);
                yield ": ";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 63, $this->source); })()), "getColumn", ["resolution"], "method", false, false, false, 63), "html", null, true);
                yield "</li>";
            }
            // line 64
            yield "            </ul>
        </span>
        ";
        }
        // line 67
        yield "    </span>

    ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 69, $this->source); })()), "getColumn", ["goalConversions"], "method", false, false, false, 69) || (isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 69, $this->source); })()))) {
            // line 70
            yield "    <span class=\"visitorType\">
        ";
            // line 72
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 72, $this->source); })()), "getColumn", ["goalConversions"], "method", false, false, false, 72)) {
                // line 73
                yield "            <span title=\"";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitConvertedNGoals", CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 73, $this->source); })()), "getColumn", ["goalConversions"], "method", false, false, false, 73)), "html", null, true);
                yield "\" class=\"visitorLogTooltip\">
                <img src=\"";
                // line 74
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 74, $this->source); })()), "getColumn", ["visitConvertedIcon"], "method", false, false, false, 74), "html", null, true);
                yield "\"/>
                <span class=\"conversionCount\">";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 75, $this->source); })()), "getColumn", ["goalConversions"], "method", false, false, false, 75) > 99)) {
                    yield "99+";
                } else {
                    yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 75, $this->source); })()), "getColumn", ["goalConversions"], "method", false, false, false, 75), "html", null, true);
                }
                yield "</span>
            </span>
        ";
            }
            // line 78
            yield "        ";
            // line 79
            yield "        ";
            if ((isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 79, $this->source); })())) {
                // line 80
                yield "            <img class=\"visitorLogTooltip\" src=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 80, $this->source); })()), "getColumn", ["visitEcommerceStatusIcon"], "method", false, false, false, 80), "html", null, true);
                yield "\" title=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 80, $this->source); })()), "getColumn", ["visitEcommerceStatus"], "method", false, false, false, 80), "html", null, true);
                yield "\"/>
        ";
            }
            // line 82
            yield "    </span>
    ";
        }
        // line 84
        yield "</span>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Live/_visitorLogIcons.twig";
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
        return array (  329 => 84,  325 => 82,  317 => 80,  314 => 79,  312 => 78,  302 => 75,  298 => 74,  293 => 73,  290 => 72,  287 => 70,  285 => 69,  281 => 67,  276 => 64,  267 => 63,  258 => 62,  250 => 61,  244 => 60,  239 => 58,  230 => 57,  227 => 56,  218 => 52,  213 => 50,  208 => 49,  205 => 48,  200 => 45,  196 => 43,  185 => 41,  181 => 40,  177 => 39,  174 => 38,  172 => 37,  166 => 36,  160 => 35,  155 => 33,  150 => 32,  147 => 31,  141 => 27,  133 => 26,  126 => 25,  117 => 24,  108 => 23,  99 => 22,  91 => 21,  85 => 20,  80 => 18,  70 => 16,  67 => 15,  58 => 11,  53 => 9,  50 => 8,  48 => 7,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set visitHasEcommerceActivity = visitor.getColumn('visitEcommerceStatusIcon') %}
{% set breakBeforeVisitorRank = (visitHasEcommerceActivity and visitor.getColumn('visitorTypeIcon')) ? true : false %}

<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    {% if visitor.getColumn('visitorTypeIcon') %}
        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"{{ visitor.getColumn('visitorTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'General_ReturningVisitor'|translate }} - {{ 'General_NVisits'|translate(visitor.getColumn('visitCount')) }}</li>
            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('countryFlag') %}
        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"{% if visitor.getColumn('city') %}{{ visitor.getColumn('city')|e('html_attr') }}{% else %}{{ visitor.getColumn('country') }}{% endif %}\">

            <img src=\"{{ visitor.getColumn('countryFlag') }}\"/>
            <ul class=\"details\">
                <li>{{ 'UserCountry_Country'|translate }}: {{ visitor.getColumn('country') }}</li>
                {% if visitor.getColumn('region') %}<li>{{ 'UserCountry_Region'|translate }}: {{ visitor.getColumn('region') }}</li>{% endif %}
                {% if visitor.getColumn('city') %}<li>{{ 'UserCountry_City'|translate }}: {{ visitor.getColumn('city') }}</li>{% endif %}
                {% if visitor.getColumn('language') %}<li>{{ 'UserLanguage_BrowserLanguage'|translate }}: {{ visitor.getColumn('language') }}</li>{% endif %}
                {% if visitor.getColumn('providerName') %}<li>{{ 'Provider_ColumnProvider'|translate }}: {{ visitor.getColumn('providerName') }}</li>{% endif %}
                <li>{{ 'General_IP'|translate }}: {{ visitor.getColumn('visitIp') }}</li>
                {% if isProfileEnabled and visitor.getColumn('visitorId') is not empty %}<li>{{ 'General_VisitorID'|translate }}: {{ visitor.getColumn('visitorId') }}</li>{% endif %}

            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('browserIcon') %}
        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('browser')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('browserIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnBrowser'|translate }}: {{ visitor.getColumn('browser') }}</li>
                <li>{{ 'DevicesDetection_BrowserEngine'|translate }}: {{ visitor.getColumn('browserFamily') }}</li>
                {% if visitor.getColumn('pluginsIcons')|length > 0 %}
                    <li>
                        {{ 'General_Plugins'|translate }}:
                        {% for pluginIcon in visitor.getColumn('pluginsIcons') %}
                            <img width=\"16px\" height=\"16px\" src=\"{{ pluginIcon.pluginIcon }}\" alt=\"{{ pluginIcon.pluginName|capitalize(true) }}\"/>
                        {% endfor %}
                    </li>
                {% endif %}
            </ul>
        </span>
    {% endif %}
        {% if visitor.getColumn('operatingSystemIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('operatingSystem')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('operatingSystemIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnOperatingSystem'|translate }}: {{ visitor.getColumn('operatingSystem') }}</li>
            </ul>
        </span>
        {% endif %}
        {% if visitor.getColumn('deviceTypeIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{% if visitor.getColumn('resolution') %}{{ visitor.getColumn('resolution')|e('html_attr') }}{% else %}{{ visitor.getColumn('deviceType') }}{% endif %}\">
            <img src=\"{{ visitor.getColumn('deviceTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_DeviceType'|translate }}: {{ visitor.getColumn('deviceType') }}</li>
                {% if visitor.getColumn('deviceBrand') %}<li>{{ 'DevicesDetection_DeviceBrand'|translate }}: {{ visitor.getColumn('deviceBrand') }}</li>{% endif %}
                {% if visitor.getColumn('deviceModel') %}<li>{{ 'DevicesDetection_DeviceModel'|translate }}: {{ visitor.getColumn('deviceModel') }}</li>{% endif %}
                {% if visitor.getColumn('resolution') %}<li>{{ 'Resolution_ColumnResolution'|translate }}: {{ visitor.getColumn('resolution') }}</li>{% endif %}
            </ul>
        </span>
        {% endif %}
    </span>

    {% if visitor.getColumn('goalConversions') or visitHasEcommerceActivity %}
    <span class=\"visitorType\">
        {# Goals, and/or Ecommerce activity #}
        {% if visitor.getColumn('goalConversions') %}
            <span title=\"{{ 'General_VisitConvertedNGoals'|translate(visitor.getColumn('goalConversions')) }}\" class=\"visitorLogTooltip\">
                <img src=\"{{ visitor.getColumn('visitConvertedIcon') }}\"/>
                <span class=\"conversionCount\">{% if visitor.getColumn('goalConversions') > 99 %}99+{% else %}{{ visitor.getColumn('goalConversions') }}{% endif %}</span>
            </span>
        {% endif %}
        {# Ecommerce activity #}
        {% if visitHasEcommerceActivity %}
            <img class=\"visitorLogTooltip\" src=\"{{ visitor.getColumn('visitEcommerceStatusIcon') }}\" title=\"{{ visitor.getColumn('visitEcommerceStatus') }}\"/>
        {% endif %}
    </span>
    {% endif %}
</span>
", "@Live/_visitorLogIcons.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Live/templates/_visitorLogIcons.twig");
    }
}
