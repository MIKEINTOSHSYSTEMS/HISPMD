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

/* _jsCssIncludes.twig */
class __TwigTemplate_1b131c59f504d8b0274c82a56e9e1205 extends Template
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
        yield "    ";
        yield $this->env->getFunction('includeAssets')->getCallable()(["type" => "css"]);
        yield "
    ";
        // line 3
        yield $this->env->getFunction('includeAssets')->getCallable()(["type" => "js", "defer" => ((array_key_exists("deferjs", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["deferjs"]) || array_key_exists("deferjs", $context) ? $context["deferjs"] : (function () { throw new RuntimeError('Variable "deferjs" does not exist.', 3, $this->source); })()), false)) : (false))]);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_jsCssIncludes.twig";
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
        return array (  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
    {{ includeAssets({\"type\": \"css\"}) }}
    {{ includeAssets({\"type\": \"js\", \"defer\": deferjs|default(false) }) }}
{% endautoescape %}
", "_jsCssIncludes.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/_jsCssIncludes.twig");
    }
}
