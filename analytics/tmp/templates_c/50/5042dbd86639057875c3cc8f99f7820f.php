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

/* @CoreHome/_notifications.twig */
class __TwigTemplate_fd91e5c9625d6b0ad9282e4d4b8ecdb3 extends Template
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
        yield "<div id=\"notificationContainer\">
    ";
        // line 2
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                yield "
            ";
                // line 5
                yield $this->env->getFilter('notification')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 5), ["id" => $context["notificationId"], "type" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 5), "title" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "title", [], "any", false, false, false, 5), "noclear" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "hasNoClear", [], "any", false, false, false, 5), "context" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "context", [], "any", false, false, false, 5), "raw" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "raw", [], "any", false, false, false, 5)], false);
                yield "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "    ";
        }
        // line 9
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
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
        return array (  63 => 9,  60 => 8,  51 => 5,  48 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"notificationContainer\">
    {% if notifications|length %}
        {% for notificationId, n in notifications %}

            {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

        {% endfor %}
    {% endif %}
</div>
", "@CoreHome/_notifications.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/CoreHome/templates/_notifications.twig");
    }
}
