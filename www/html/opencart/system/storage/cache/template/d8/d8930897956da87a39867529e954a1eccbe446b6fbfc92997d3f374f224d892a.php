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

/* default/template/extension/total/shipping.twig */
class __TwigTemplate_cd91957e6fbb60c9322d5ac695e08c64582ebc692b1f3ef608662258989eabee extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-shipping\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-shipping\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <p>";
        // line 7
        echo ($context["text_shipping"] ?? null);
        echo "</p>
      <div class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 10
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
              <option value=\"\">";
        // line 13
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 15
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 15) == ($context["country_id"] ?? null))) {
                // line 16
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 16);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 16);
                echo "</option>
              ";
            } else {
                // line 18
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 18);
                echo "</option>
              ";
            }
            // line 20
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 25
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 32
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 34
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
          </div>
        </div>
        <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 37
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_quote"] ?? null);
        echo "</button>
      </div>
      <script type=\"text/javascript\"><!--
\$('#button-quote').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/quote',
\t\ttype: 'post',
\t\tdata: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-quote').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-quote').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['error']['country']) {
\t\t\t\t\t\$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['zone']) {
\t\t\t\t\t\$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['postcode']) {
\t\t\t\t\t\$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['shipping_method']) {
\t\t\t\t\$('#modal-shipping').remove();

\t\t\t\thtml  = '<div id=\"modal-shipping\" class=\"modal\">';
\t\t\t\thtml += '  <div class=\"modal-dialog\">';
\t\t\t\thtml += '    <div class=\"modal-content\">';
\t\t\t\thtml += '      <div class=\"modal-header\">';
\t\t\t\thtml += '        <h4 class=\"modal-title\">";
        // line 82
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-body\">';

\t\t\t\tfor (i in json['shipping_method']) {
\t\t\t\t\thtml += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\thtml += '<div class=\"radio\">';
\t\t\t\t\t\t\thtml += '  <label>';

\t\t\t\t\t\t\tif (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 94
        echo ($context["shipping_method"] ?? null);
        echo "') {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-footer\">';
\t\t\t\thtml += '        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 109
        echo ($context["button_cancel"] ?? null);
        echo "</button>';

\t\t\t\t";
        // line 111
        if (($context["shipping_method"] ?? null)) {
            // line 112
            echo "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />';
\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" disabled=\"disabled\" />';
\t\t\t\t";
        }
        // line 116
        echo "
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '    </div>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div> ';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#modal-shipping').modal('show');

\t\t\t\t\$('input[name=\\'shipping_method\\']').on('change', function() {
\t\t\t\t\t\$('#button-shipping').prop('disabled', false);
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-shipping', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/shipping',
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 186
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 192
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 199
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 199,  309 => 192,  300 => 186,  228 => 116,  220 => 114,  212 => 112,  210 => 111,  205 => 109,  187 => 94,  172 => 82,  122 => 37,  114 => 34,  109 => 32,  99 => 25,  93 => 21,  87 => 20,  79 => 18,  71 => 16,  68 => 15,  64 => 14,  60 => 13,  54 => 10,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/total/shipping.twig", "");
    }
}
