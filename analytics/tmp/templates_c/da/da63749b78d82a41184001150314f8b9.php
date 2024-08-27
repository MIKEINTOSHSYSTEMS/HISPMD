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

/* @UserCountryMap/visitorMap.twig */
class __TwigTemplate_56c2422029aff586fd7157d0d8e10c3a extends Template
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
        yield "<section class=\"card\">
<div class=\"UserCountryMap card-content\" style=\"position:relative; overflow:hidden;\">
    <div class=\"UserCountryMap_container\">
        <div class=\"UserCountryMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"UserCountryMap-overlay UserCountryMap-title\">
            <div class=\"content\">
                <!--<div class=\"map-title\" style=\"font-weight:bold; color:#9A9386;\"></div>-->
                <div class=\"map-stats\" style=\"color:#565656;\"></div>
            </div>
        </div>
        <div class=\"UserCountryMap-overlay UserCountryMap-legend\">
            <div class=\"content\">
            </div>
        </div>
        <div class=\"UserCountryMap-tooltip UserCountryMap-info\">
            <div class=\"content unlocated-stats\">
            </div>
        </div>
        <div class=\"UserCountryMap-info-btn\" data-tooltip-target=\".UserCountryMap-tooltip\"></div>
    </div>
    <div class=\"mapWidgetStatus\">
        ";
        // line 22
        if ((isset($context["noData"]) || array_key_exists("noData", $context) ? $context["noData"] : (function () { throw new RuntimeError('Variable "noData" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "            ";
            if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 23, $this->source); })())) {
                // line 24
                yield "            <h2>";
                yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_VisitorMap"), "html", null, true);
                yield "</h2>
            ";
            }
            // line 26
            yield "            <div class=\"pk-emptyDataTable\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
            yield "</div>
        ";
        } else {
            // line 28
            yield "            <span class=\"loadingPiwik\">
                <img src=\"plugins/Morpheus/images/loading-blue.gif\" />
                ";
            // line 30
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            yield "...
            </span>
        ";
        }
        // line 33
        yield "    </div>
    ";
        // line 34
        if ( !(isset($context["noData"]) || array_key_exists("noData", $context) ? $context["noData"] : (function () { throw new RuntimeError('Variable "noData" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "    <div class=\"dataTableFeatures\">
        <div class=\"dataTableFooterIcons\">
            <div class=\"dataTableFooterWrap\" var=\"graphVerticalBar\">
                <img class=\"UserCountryMap-activeItem dataTableFooterActiveItem\" src=\"plugins/Morpheus/images/data_table_footer_active_item.png\" style=\"left: 25px;\" />

                <div class=\"tableIconsGroup\">
                    <span class=\"tableAllColumnsSwitch\">
                        <a class=\"UserCountryMap-btn-zoom tableIcon\" format=\"table\">
                            <img src=\"plugins/Morpheus/images/zoom-out.png\" title=\"Zoom to world\" />
                        </a>
                    </span>
                </div>
                <div class=\"tableIconsGroup UserCountryMap-view-mode-buttons\">
                    <span class=\"tableAllColumnsSwitch\">
                        <a class=\"UserCountryMap-btn-region tableIcon activeIcon\"
                           data-region=\"";
            // line 50
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Regions"), "html", null, true);
            yield "\" data-country=\"";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Countries"), "html", null, true);
            yield "\">
                            <img src=\"plugins/UserCountryMap/images/regions.png\" title=\"Show visitors per region/country\" />
                            <span style=\"margin:0;\">";
            // line 52
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Countries"), "html", null, true);
            yield "</span>&nbsp;
                        </a>
                        <a class=\"UserCountryMap-btn-city tableIcon inactiveIcon\" style=\"display: none;\">
                            <img src=\"plugins/UserCountryMap/images/cities.png\" title=\"Show visitors per city\" />
                            <span style=\"margin:0;\">";
            // line 56
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Cities"), "html", null, true);
            yield "</span>&nbsp;
                        </a>
                    </span>
                </div>
            </div>

            <select class=\"userCountryMapSelectMetrics browser-default\" style=\"float:right;margin-right:25px;margin-bottom:10px;max-width: 10em;font-size:10px;height: auto;\">
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                // line 64
                yield "                    <option value=\"";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["metric"], 0, [], "array", false, false, false, 64), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["metric"], 0, [], "array", false, false, false, 64) == (isset($context["defaultMetric"]) || array_key_exists("defaultMetric", $context) ? $context["defaultMetric"] : (function () { throw new RuntimeError('Variable "defaultMetric" does not exist.', 64, $this->source); })()))) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["metric"], 1, [], "array", false, false, false, 64), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "            </select>
            <select class=\"userCountryMapSelectCountry browser-default\" style=\"height: auto;\">
                <option value=\"world\">";
            // line 68
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_WorldWide"), "html", null, true);
            yield "</option>
                <option disabled=\"disabled\">––––––</option>
                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["continents"]) || array_key_exists("continents", $context) ? $context["continents"] : (function () { throw new RuntimeError('Variable "continents" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["code"] => $context["continent"]) {
                // line 71
                yield "                    <option value=\"";
                yield \Piwik\piwik_escape_filter($this->env, $context["code"], "html", null, true);
                yield "\">";
                yield \Piwik\piwik_escape_filter($this->env, $context["continent"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['continent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                <option disabled=\"disabled\">––––––</option>
            </select>
        </div>
    </div>
    ";
        }
        // line 78
        yield "</div>
</section>

";
        // line 81
        if ( !(isset($context["noData"]) || array_key_exists("noData", $context) ? $context["noData"] : (function () { throw new RuntimeError('Variable "noData" does not exist.', 81, $this->source); })())) {
            // line 82
            yield "<!-- configure some piwik vars -->
<script type=\"text/javascript\">
    var visitorMap,
    config = JSON.parse('";
            // line 85
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "js"), "html", null, true);
            yield "');
    config._ = JSON.parse('";
            // line 86
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["localeJSON"]) || array_key_exists("localeJSON", $context) ? $context["localeJSON"] : (function () { throw new RuntimeError('Variable "localeJSON" does not exist.', 86, $this->source); })()), "js"), "html", null, true);
            yield "');
    config.reqParams = JSON.parse('";
            // line 87
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["reqParamsJSON"]) || array_key_exists("reqParamsJSON", $context) ? $context["reqParamsJSON"] : (function () { throw new RuntimeError('Variable "reqParamsJSON" does not exist.', 87, $this->source); })()), "js"), "html", null, true);
            yield "');
    config.countryNames = JSON.parse('";
            // line 88
            yield \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["countriesByIso"]) || array_key_exists("countriesByIso", $context) ? $context["countriesByIso"] : (function () { throw new RuntimeError('Variable "countriesByIso" does not exist.', 88, $this->source); })())), "js"), "html", null, true);
            yield "');

    if (\$('#dashboardWidgetsArea').length) {
        // dashboard mode
        var \$widgetContent = \$('.UserCountryMap').parents('.widgetContent').first();

        \$widgetContent.on('widget:create',function (evt, widget) {
            visitorMap = new UserCountryMap.VisitorMap(config, widget);
        }).on('widget:maximise',function (evt) {
                    visitorMap.resize();
                }).on('widget:minimise',function (evt) {
                    visitorMap.resize();
                }).on('widget:destroy', function (evt) {
                    visitorMap.destroy();
                });
    } else {
        // stand-alone mode
        visitorMap = new UserCountryMap.VisitorMap(config);
    }

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
        return "@UserCountryMap/visitorMap.twig";
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
        return array (  208 => 88,  204 => 87,  200 => 86,  196 => 85,  191 => 82,  189 => 81,  184 => 78,  177 => 73,  166 => 71,  162 => 70,  157 => 68,  153 => 66,  138 => 64,  134 => 63,  124 => 56,  117 => 52,  110 => 50,  93 => 35,  91 => 34,  88 => 33,  82 => 30,  78 => 28,  72 => 26,  66 => 24,  63 => 23,  61 => 22,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"card\">
<div class=\"UserCountryMap card-content\" style=\"position:relative; overflow:hidden;\">
    <div class=\"UserCountryMap_container\">
        <div class=\"UserCountryMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"UserCountryMap-overlay UserCountryMap-title\">
            <div class=\"content\">
                <!--<div class=\"map-title\" style=\"font-weight:bold; color:#9A9386;\"></div>-->
                <div class=\"map-stats\" style=\"color:#565656;\"></div>
            </div>
        </div>
        <div class=\"UserCountryMap-overlay UserCountryMap-legend\">
            <div class=\"content\">
            </div>
        </div>
        <div class=\"UserCountryMap-tooltip UserCountryMap-info\">
            <div class=\"content unlocated-stats\">
            </div>
        </div>
        <div class=\"UserCountryMap-info-btn\" data-tooltip-target=\".UserCountryMap-tooltip\"></div>
    </div>
    <div class=\"mapWidgetStatus\">
        {% if noData %}
            {% if not isWidget %}
            <h2>{{ 'UserCountryMap_VisitorMap'|translate }}</h2>
            {% endif %}
            <div class=\"pk-emptyDataTable\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</div>
        {% else %}
            <span class=\"loadingPiwik\">
                <img src=\"plugins/Morpheus/images/loading-blue.gif\" />
                {{ 'General_LoadingData'|translate }}...
            </span>
        {% endif %}
    </div>
    {% if not noData %}
    <div class=\"dataTableFeatures\">
        <div class=\"dataTableFooterIcons\">
            <div class=\"dataTableFooterWrap\" var=\"graphVerticalBar\">
                <img class=\"UserCountryMap-activeItem dataTableFooterActiveItem\" src=\"plugins/Morpheus/images/data_table_footer_active_item.png\" style=\"left: 25px;\" />

                <div class=\"tableIconsGroup\">
                    <span class=\"tableAllColumnsSwitch\">
                        <a class=\"UserCountryMap-btn-zoom tableIcon\" format=\"table\">
                            <img src=\"plugins/Morpheus/images/zoom-out.png\" title=\"Zoom to world\" />
                        </a>
                    </span>
                </div>
                <div class=\"tableIconsGroup UserCountryMap-view-mode-buttons\">
                    <span class=\"tableAllColumnsSwitch\">
                        <a class=\"UserCountryMap-btn-region tableIcon activeIcon\"
                           data-region=\"{{ 'UserCountryMap_Regions'|translate }}\" data-country=\"{{ 'UserCountryMap_Countries'|translate }}\">
                            <img src=\"plugins/UserCountryMap/images/regions.png\" title=\"Show visitors per region/country\" />
                            <span style=\"margin:0;\">{{ 'UserCountryMap_Countries'|translate }}</span>&nbsp;
                        </a>
                        <a class=\"UserCountryMap-btn-city tableIcon inactiveIcon\" style=\"display: none;\">
                            <img src=\"plugins/UserCountryMap/images/cities.png\" title=\"Show visitors per city\" />
                            <span style=\"margin:0;\">{{ 'UserCountryMap_Cities'|translate }}</span>&nbsp;
                        </a>
                    </span>
                </div>
            </div>

            <select class=\"userCountryMapSelectMetrics browser-default\" style=\"float:right;margin-right:25px;margin-bottom:10px;max-width: 10em;font-size:10px;height: auto;\">
                {% for metric in metrics %}
                    <option value=\"{{ metric[0] }}\" {% if metric[0] == defaultMetric %}selected=\"selected\"{% endif %}>{{ metric[1] }}</option>
                {% endfor %}
            </select>
            <select class=\"userCountryMapSelectCountry browser-default\" style=\"height: auto;\">
                <option value=\"world\">{{ 'UserCountryMap_WorldWide'|translate }}</option>
                <option disabled=\"disabled\">––––––</option>
                {% for code,continent in continents %}
                    <option value=\"{{ code }}\">{{ continent }}</option>
                {% endfor %}
                <option disabled=\"disabled\">––––––</option>
            </select>
        </div>
    </div>
    {% endif %}
</div>
</section>

{% if not noData %}
<!-- configure some piwik vars -->
<script type=\"text/javascript\">
    var visitorMap,
    config = JSON.parse('{{ config|e('js') }}');
    config._ = JSON.parse('{{ localeJSON|e('js') }}');
    config.reqParams = JSON.parse('{{ reqParamsJSON|e('js') }}');
    config.countryNames = JSON.parse('{{ countriesByIso|json_encode|e('js') }}');

    if (\$('#dashboardWidgetsArea').length) {
        // dashboard mode
        var \$widgetContent = \$('.UserCountryMap').parents('.widgetContent').first();

        \$widgetContent.on('widget:create',function (evt, widget) {
            visitorMap = new UserCountryMap.VisitorMap(config, widget);
        }).on('widget:maximise',function (evt) {
                    visitorMap.resize();
                }).on('widget:minimise',function (evt) {
                    visitorMap.resize();
                }).on('widget:destroy', function (evt) {
                    visitorMap.destroy();
                });
    } else {
        // stand-alone mode
        visitorMap = new UserCountryMap.VisitorMap(config);
    }

</script>
{% endif %}
", "@UserCountryMap/visitorMap.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/UserCountryMap/templates/visitorMap.twig");
    }
}
