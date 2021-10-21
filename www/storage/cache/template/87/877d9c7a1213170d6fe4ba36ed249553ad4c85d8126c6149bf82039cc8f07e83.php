<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* common/footer.twig */
class __TwigTemplate_66738667149f78898435a6287c415dfb5beef15270ef53e2db9c76aee80ca6bd extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <a href=\"https://www.opencart.com\" target=\"_blank\">";
        // line 3
        echo ($context["text_project"] ?? null);
        echo "</a>|<a href=\"http://docs.opencart.com/en-gb/introduction/\" target=\"_blank\">";
        echo ($context["text_documentation"] ?? null);
        echo "</a>|<a href=\"https://forum.opencart.com\" target=\"_blank\">";
        echo ($context["text_support"] ?? null);
        echo "</a><br />
  </div>
</footer>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.twig", "");
    }
}
