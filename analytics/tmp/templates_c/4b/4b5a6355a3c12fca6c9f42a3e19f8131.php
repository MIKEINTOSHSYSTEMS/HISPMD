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

/* @Dashboard/embeddedIndex.twig */
class __TwigTemplate_6d6a1aadf3ed46eb3d84d5eeab8c0c29 extends Template
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
        yield "<div id=\"dashboard\" vue-directive=\"Dashboard.Dashboard\" vue-directive-value=\"";
        yield \Piwik\piwik_escape_filter($this->env, json_encode(["idDashboard" => (isset($context["dashboardId"]) || array_key_exists("dashboardId", $context) ? $context["dashboardId"] : (function () { throw new RuntimeError('Variable "dashboardId" does not exist.', 1, $this->source); })())]), "html", null, true);
        yield "\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DeleteWidgetConfirm"), "html", null, true);
        yield "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        yield "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SetAsDefaultWidgetsConfirm"), "html", null, true);
        yield "</h2>
        ";
        // line 10
        $context["resetDashboard"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboard"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        yield "        <div class=\"popoverSubMessage\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SetAsDefaultWidgetsConfirmHelp", (isset($context["resetDashboard"]) || array_key_exists("resetDashboard", $context) ? $context["resetDashboard"] : (function () { throw new RuntimeError('Variable "resetDashboard" does not exist.', 11, $this->source); })())), "html", null, true);
        yield "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        yield "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboardConfirm"), "html", null, true);
        yield "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 18
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        yield "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 19
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardEmptyNotification"), "html", null, true);
        yield "</h2>
        <input role=\"addWidget\" type=\"button\" value=\"";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_AddAWidget"), "html", null, true);
        yield "\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboard"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>";
        // line 29
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SelectDashboardLayout"), "html", null, true);
        yield "</h2>

        <div id=\"columnPreview\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableLayouts"]) || array_key_exists("availableLayouts", $context) ? $context["availableLayouts"] : (function () { throw new RuntimeError('Variable "availableLayouts" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 33
            yield "            <div>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["layout"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 35
                yield "                <div class=\"width-";
                yield \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
                yield "\"><span></span></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 41
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Save"), "html", null, true);
        yield "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 42
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>";
        // line 46
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_RenameDashboard"), "html", null, true);
        yield "</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">";
        // line 49
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
        yield " </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 52
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Save"), "html", null, true);
        yield "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 53
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        yield "\"/>
    </div>

    ";
        // line 56
        if ((isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 56, $this->source); })())) {
            // line 57
            yield "        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>";
            // line 58
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_CopyDashboardToUser"), "html", null, true);
            yield "</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">";
            // line 62
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
            yield " </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">";
            // line 66
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Username"), "html", null, true);
            yield " </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>";
            // line 68
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            yield "</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"";
            // line 72
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
            yield "\"/>
            <input role=\"cancel\" type=\"button\" value=\"";
            // line 73
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
            yield "\"/>
        </div>
    ";
        }
        // line 76
        yield "
    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>";
        // line 78
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_CreateNewDashboard"), "html", null, true);
        yield "</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>";
        // line 82
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
        yield " </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <label>
                    <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                    <span>";
        // line 88
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DefaultDashboard"), "html", null, true);
        yield "</span>
                </label>
            </p>
            <p>
                <label>
                    <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                    <span>";
        // line 94
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_EmptyDashboard"), "html", null, true);
        yield "</span>
                </label>
            </p>
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 98
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        yield "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 99
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        yield "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>";
        // line 103
        yield $this->env->getFilter('translate')->getCallable()("Dashboard_RemoveDashboardConfirm", "<span></span>");
        yield "</h2>

        <div class=\"popoverSubMessage\">";
        // line 105
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_NotUndo", (isset($context["resetDashboard"]) || array_key_exists("resetDashboard", $context) ? $context["resetDashboard"] : (function () { throw new RuntimeError('Variable "resetDashboard" does not exist.', 105, $this->source); })())), "html", null, true);
        yield "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 106
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        yield "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 107
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        yield "\"/>
    </div>

    ";
        // line 110
        yield from         $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Dashboard/embeddedIndex.twig", 110)->unwrap()->yield($context);
        // line 111
        yield "
    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Dashboard/embeddedIndex.twig";
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
        return array (  293 => 111,  291 => 110,  285 => 107,  281 => 106,  277 => 105,  272 => 103,  265 => 99,  261 => 98,  254 => 94,  245 => 88,  236 => 82,  229 => 78,  225 => 76,  219 => 73,  215 => 72,  208 => 68,  203 => 66,  196 => 62,  189 => 58,  186 => 57,  184 => 56,  178 => 53,  174 => 52,  168 => 49,  162 => 46,  155 => 42,  151 => 41,  147 => 39,  140 => 37,  131 => 35,  127 => 34,  124 => 33,  120 => 32,  114 => 29,  107 => 25,  103 => 24,  99 => 23,  92 => 19,  88 => 18,  84 => 17,  77 => 13,  73 => 12,  68 => 11,  63 => 10,  59 => 9,  52 => 5,  48 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"dashboard\" vue-directive=\"Dashboard.Dashboard\" vue-directive-value=\"{{ {idDashboard: dashboardId}|json_encode }}\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>{{ 'Dashboard_DeleteWidgetConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>{{ 'Dashboard_SetAsDefaultWidgetsConfirm'|translate }}</h2>
        {% set resetDashboard %}{{ 'Dashboard_ResetDashboard'|translate }}{% endset %}
        <div class=\"popoverSubMessage\">{{ 'Dashboard_SetAsDefaultWidgetsConfirmHelp'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>{{ 'Dashboard_ResetDashboardConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>{{ 'Dashboard_DashboardEmptyNotification'|translate }}</h2>
        <input role=\"addWidget\" type=\"button\" value=\"{{ 'Dashboard_AddAWidget'|translate }}\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"{{ 'Dashboard_ResetDashboard'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>{{ 'Dashboard_SelectDashboardLayout'|translate }}</h2>

        <div id=\"columnPreview\">
            {% for layout in availableLayouts %}
            <div>
                {% for column in layout %}
                <div class=\"width-{{ column }}\"><span></span></div>
                {% endfor %}
            </div>
            {% endfor %}
            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>{{ 'Dashboard_RenameDashboard'|translate }}</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    {% if hasSomeAdminAccess %}
        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>{{ 'Dashboard_CopyDashboardToUser'|translate }}</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">{{ 'General_Username'|translate }} </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>{{ 'General_LoadingData'|translate }}</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
            <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
        </div>
    {% endif %}

    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>{{ 'Dashboard_CreateNewDashboard'|translate }}</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>{{ 'Dashboard_DashboardName'|translate }} </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <label>
                    <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                    <span>{{ 'Dashboard_DefaultDashboard'|translate }}</span>
                </label>
            </p>
            <p>
                <label>
                    <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                    <span>{{ 'Dashboard_EmptyDashboard'|translate }}</span>
                </label>
            </p>
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>{{ 'Dashboard_RemoveDashboardConfirm'|translate('<span></span>')|raw }}</h2>

        <div class=\"popoverSubMessage\">{{ 'Dashboard_NotUndo'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    {% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
", "@Dashboard/embeddedIndex.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Dashboard/templates/embeddedIndex.twig");
    }
}
