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

/* default/template/account/tracking.twig */
class __TwigTemplate_401c6155c1633c45247aa98605ea386297c6e30244118bba85aab002222a2ae3 extends \Twig\Template
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
<div id=\"account-tracking\" class=\"container\">
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
      <p>";
        // line 18
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form class=\"form-horizontal\">
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 21
        echo ($context["entry_code"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <textarea cols=\"40\" rows=\"5\" placeholder=\"";
        // line 23
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\">";
        echo ($context["code"] ?? null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-generator\"><span data-toggle=\"tooltip\" title=\"";
        // line 27
        echo ($context["help_generator"] ?? null);
        echo "\">";
        echo ($context["entry_generator"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 29
        echo ($context["entry_generator"] ?? null);
        echo "\" id=\"input-generator\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-link\">";
        // line 33
        echo ($context["entry_link"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <textarea name=\"link\" cols=\"40\" rows=\"5\" placeholder=\"";
        // line 35
        echo ($context["entry_link"] ?? null);
        echo "\" id=\"input-link\" class=\"form-control\"></textarea>
          </div>
        </div>
      </form>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 40
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 43
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=account/tracking/autocomplete&filter_name=' +  encodeURIComponent(request) + '&tracking=' + encodeURIComponent(\$('#input-code').val()),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['link']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('textarea[name=\\'link\\']').val(item['value']);
\t}
});
//--></script>
";
        // line 67
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/tracking.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  154 => 43,  150 => 42,  143 => 40,  135 => 35,  130 => 33,  123 => 29,  116 => 27,  107 => 23,  102 => 21,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/tracking.twig", "");
    }
}
