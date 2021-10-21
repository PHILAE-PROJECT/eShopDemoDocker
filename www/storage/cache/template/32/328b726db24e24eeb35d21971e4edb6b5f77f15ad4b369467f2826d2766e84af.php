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

/* default/template/account/voucher.twig */
class __TwigTemplate_e47418b39b872aaf3756998cc1e038020cfaffeb036d13fff68ce2dc14de78ac extends \Twig\Template
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
<div id=\"account-voucher\" class=\"container\">
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
  ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 21
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 24
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 26
        echo ($context["to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 27
        if (($context["error_to_name"] ?? null)) {
            // line 28
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_name"] ?? null);
            echo "</div>
            ";
        }
        // line 30
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 33
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 35
        echo ($context["to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 36
        if (($context["error_to_email"] ?? null)) {
            // line 37
            echo "            <div class=\"text-danger\">";
            echo ($context["error_to_email"] ?? null);
            echo "</div>
            ";
        }
        // line 39
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 42
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 44
        echo ($context["from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 45
        if (($context["error_from_name"] ?? null)) {
            // line 46
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_name"] ?? null);
            echo "</div>
            ";
        }
        // line 48
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 51
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 53
        echo ($context["from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 54
        if (($context["error_from_email"] ?? null)) {
            // line 55
            echo "            <div class=\"text-danger\">";
            echo ($context["error_from_email"] ?? null);
            echo "</div>
            ";
        }
        // line 57
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 60
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 63
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 63) == ($context["voucher_theme_id"] ?? null))) {
                // line 64
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 66);
                echo "\" checked=\"checked\" />
                ";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 67);
                echo "</label>
            </div>
            ";
            } else {
                // line 70
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 72);
                echo "\" />
                ";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 73);
                echo "</label>
            </div>
            ";
            }
            // line 76
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            ";
        if (($context["error_theme"] ?? null)) {
            // line 78
            echo "            <div class=\"text-danger\">";
            echo ($context["error_theme"] ?? null);
            echo "</div>
            ";
        }
        // line 80
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo ($context["help_message"] ?? null);
        echo "\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 85
        echo ($context["message"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 91
        echo ($context["amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 92
        if (($context["error_amount"] ?? null)) {
            // line 93
            echo "            <div class=\"text-danger\">";
            echo ($context["error_amount"] ?? null);
            echo "</div>
            ";
        }
        // line 95
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 98
        echo ($context["text_agree"] ?? null);
        echo "
            ";
        // line 99
        if (($context["agree"] ?? null)) {
            // line 100
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 102
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 104
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 105
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 109
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 110
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 112
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 112,  328 => 110,  324 => 109,  317 => 105,  314 => 104,  310 => 102,  306 => 100,  304 => 99,  300 => 98,  295 => 95,  289 => 93,  287 => 92,  283 => 91,  276 => 89,  269 => 85,  262 => 83,  257 => 80,  251 => 78,  248 => 77,  242 => 76,  236 => 73,  232 => 72,  228 => 70,  222 => 67,  218 => 66,  214 => 64,  211 => 63,  207 => 62,  202 => 60,  197 => 57,  191 => 55,  189 => 54,  185 => 53,  180 => 51,  175 => 48,  169 => 46,  167 => 45,  163 => 44,  158 => 42,  153 => 39,  147 => 37,  145 => 36,  141 => 35,  136 => 33,  131 => 30,  125 => 28,  123 => 27,  119 => 26,  114 => 24,  109 => 22,  105 => 21,  101 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/voucher.twig", "");
    }
}
