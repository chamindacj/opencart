<?php

/* extension/shipping/auspost.twig */
class __TwigTemplate_07ce0050a810eb454bd0da26d77839c78a8a65aae89803021f3015be1c4a8b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 29
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_auspost_api\" value=\"";
        // line 31
        echo (isset($context["shipping_auspost_api"]) ? $context["shipping_auspost_api"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api"]) ? $context["entry_api"] : null);
        echo "\" id=\"input-api\"class=\"form-control\" maxlength=\"40\" />
              ";
        // line 32
        if ((isset($context["error_api"]) ? $context["error_api"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_api"]) ? $context["error_api"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 38
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_auspost_postcode\" value=\"";
        // line 40
        echo (isset($context["shipping_auspost_postcode"]) ? $context["shipping_auspost_postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" maxlength=\"4\" />
              ";
        // line 41
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_weight_class"]) ? $context["help_weight_class"] : null);
        echo "\">";
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_auspost_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 51
            echo "                ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["shipping_auspost_weight_class_id"]) ? $context["shipping_auspost_weight_class_id"] : null))) {
                // line 52
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 54
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            }
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 61
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_auspost_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 64
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 66
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_auspost_tax_class_id"]) ? $context["shipping_auspost_tax_class_id"] : null))) {
                // line 67
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 69
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 76
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_auspost_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 79
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 81
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_auspost_geo_zone_id"]) ? $context["shipping_auspost_geo_zone_id"] : null))) {
                // line 82
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 84
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 86
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 91
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_auspost_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 94
        if ((isset($context["shipping_auspost_status"]) ? $context["shipping_auspost_status"] : null)) {
            // line 95
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 96
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 98
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 99
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 101
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 105
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_auspost_sort_order\" value=\"";
        // line 107
        echo (isset($context["shipping_auspost_sort_order"]) ? $context["shipping_auspost_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 115
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/auspost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 115,  309 => 107,  304 => 105,  298 => 101,  293 => 99,  288 => 98,  283 => 96,  278 => 95,  276 => 94,  270 => 91,  264 => 87,  258 => 86,  250 => 84,  242 => 82,  239 => 81,  235 => 80,  231 => 79,  225 => 76,  219 => 72,  213 => 71,  205 => 69,  197 => 67,  194 => 66,  190 => 65,  186 => 64,  180 => 61,  174 => 57,  168 => 56,  160 => 54,  152 => 52,  149 => 51,  145 => 50,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-postcode">{{ entry_api }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_auspost_api" value="{{ shipping_auspost_api }}" placeholder="{{ entry_api }}" id="input-api"class="form-control" maxlength="40" />*/
/*               {% if error_api %}*/
/*               <div class="text-danger">{{ error_api }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-postcode">{{ entry_postcode }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_auspost_postcode" value="{{ shipping_auspost_postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" maxlength="4" />*/
/*               {% if error_postcode %}*/
/*               <div class="text-danger">{{ error_postcode }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-weight-class"><span data-toggle="tooltip" title="{{ help_weight_class }}">{{ entry_weight_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_auspost_weight_class_id" id="input-weight-class" class="form-control">*/
/*                 {% for weight_class in weight_classes %}*/
/*                 {% if weight_class.weight_class_id == shipping_auspost_weight_class_id %}*/
/*                 <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_auspost_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_auspost_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_auspost_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_auspost_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_auspost_status" id="input-status" class="form-control">*/
/*                 {% if shipping_auspost_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_auspost_sort_order" value="{{ shipping_auspost_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
