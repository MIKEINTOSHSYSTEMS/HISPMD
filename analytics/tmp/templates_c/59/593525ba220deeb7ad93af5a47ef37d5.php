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

/* contentBlock.twig */
class __TwigTemplate_493c0008592553816ac5609de21b4a05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'helpText' => [$this, 'block_helpText'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"card\">
    <div class=\"card-content\">
        ";
        // line 3
        if ((array_key_exists("title", $context) && (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "            <h2 class=\"card-title\"
                  ";
            // line 5
            if ((array_key_exists("rate", $context) && (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 5, $this->source); })()))) {
                yield "vue-entry=\"CoreHome.EnrichedHeadline\"";
            }
            // line 6
            yield "            >";
            yield from $this->unwrap()->yieldBlock('helpText', $context, $blocks);
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "</h2>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 11
        yield "    </div>
</div>";
        return; yield '';
    }

    // line 6
    public function block_helpText($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contentBlock.twig";
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
        return array (  78 => 9,  71 => 6,  65 => 11,  63 => 9,  60 => 8,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-content\">
        {% if title is defined and title %}
            <h2 class=\"card-title\"
                  {% if rate is defined and rate %}vue-entry=\"CoreHome.EnrichedHeadline\"{% endif %}
            >{% block helpText %}{% endblock %}{{ title }}</h2>
        {% endif %}

        {% block content %}
        {% endblock %}
    </div>
</div>", "contentBlock.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/contentBlock.twig");
    }
}
