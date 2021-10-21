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

/* default/template/account/order_list.twig */
class __TwigTemplate_1974e94105d32f71249eb3de329f48a2e57c470d5ca7de4c8150fca2ac501681 extends \Twig\Template
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
<div id=\"account-order\" class=\"container\">
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
        if (($context["orders"] ?? null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 23
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 25
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 27
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 28
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 34
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 35);
                echo "</td>
              <td class=\"text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 36);
                echo "</td>
              <td class=\"text-right\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 37);
                echo "</td>
              <td class=\"text-left\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 38);
                echo "</td>
              <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 39);
                echo "</td>
              <td class=\"text-left\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 40);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 41);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </tbody>
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
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 60,  210 => 58,  206 => 57,  199 => 55,  196 => 54,  190 => 52,  184 => 49,  180 => 48,  174 => 44,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  136 => 34,  132 => 33,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/order_list.twig", "");
    }
}
