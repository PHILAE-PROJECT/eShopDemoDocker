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

/* default/template/account/return_list.twig */
class __TwigTemplate_8e758795515e41e6ebed55cb1da97f3cc6c9081ae577f2d550d03a22fc38c0a0 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 18
        if (($context["returns"] ?? null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            echo ($context["column_return_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 25
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 26
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 27
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 34
                echo "          <tr>
            <td class=\"text-right\">#";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 35);
                echo "</td>
            <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 36);
                echo "</td>
            <td class=\"text-left\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 37);
                echo "</td>
            <td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 38);
                echo "</td>
            <td class=\"text-left\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["return"], "name", [], "any", false, false, false, 39);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["return"], "href", [], "any", false, false, false, 40);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 48
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 49
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 52
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 54
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 55
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 58
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 60
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 60,  204 => 58,  200 => 57,  193 => 55,  190 => 54,  184 => 52,  178 => 49,  174 => 48,  167 => 43,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  133 => 34,  129 => 33,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_list.twig", "");
    }
}
