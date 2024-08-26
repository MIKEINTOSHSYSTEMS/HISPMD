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

/* _iframeBuster.twig */
class __TwigTemplate_e6b1f6f627ec29d997a2a361a81b02ac extends Template
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
        if ((array_key_exists("enableFrames", $context) && ((isset($context["enableFrames"]) || array_key_exists("enableFrames", $context) ? $context["enableFrames"] : (function () { throw new RuntimeError('Variable "enableFrames" does not exist.', 1, $this->source); })()) == false))) {
            // line 2
            yield "    <script type=\"text/javascript\">
        if (self !== top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'none';

            top.location = self.location;
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
        return "_iframeBuster.twig";
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
        return array (  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (enableFrames is defined and enableFrames == false) %}
    <script type=\"text/javascript\">
        if (self !== top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'none';

            top.location = self.location;
        }
    </script>
{% endif %}
", "_iframeBuster.twig", "/home/hispmd.merqconsultancy.org/public_html/analytics/plugins/Morpheus/templates/_iframeBuster.twig");
    }
}
