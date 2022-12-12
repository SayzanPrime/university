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

/* themes/custom/university_pro/templates/layout/html.html.twig */
class __TwigTemplate_b71c910821a277e3e9b7aa429c541c475f724515e99830e218015d3aab68bdb6 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 34
        echo "<!DOCTYPE html>
<html";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 38, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source), "html", null, true);
        echo "\">
    <!-- custom css -->
    <style type=\"text/css\">
      ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["styles"] ?? null), 42, $this->source), "html", null, true);
        echo "
    </style>
    <!-- end of custom css -->
    <js-placeholder token=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source), "html", null, true);
        echo "\">
  </head>  
  <body";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">
   <!-- page preloader -->
  ";
        // line 49
        if ((($context["loader"] ?? null) == 1)) {
            // line 50
            echo "  <div id=\"page-loader\" class=\"page-loader active\">
      <div class=\"loading\"></div>
  </div>
  ";
        } else {
            // line 54
            echo "  <div id=\"page-loader\">
      <div class=\"loading\"></div>
  </div>
  ";
        }
        // line 58
        echo "   <!-- end of page preloader -->
    <div id=\"page_content\">
    ";
        // line 64
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 67, $this->source), "html", null, true);
        echo "
    ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 68, $this->source), "html", null, true);
        echo "
    ";
        // line 70
        echo "      <div class=\"pt-skins-panel pt-skin-demo d-none\">
        <div class=\"control-panel\"><i class=\"fa fa-cog fa-spin\"></i></div>
        <div class=\"panel-skins-content\">
          <div class=\"title\">Header Style</div>
          <div class=\"text-center\">
            <select class=\"form-control\" id=\"item_list\">
              ";
        // line 76
        if (($context["header_variation"] ?? null)) {
            // line 77
            echo "                ";
            if (twig_in_filter("1", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 78
                echo "                  <option value=\"header-1\" selected=\"true\">Header Style 1</option>
                  ";
            } else {
                // line 80
                echo "                  <option value=\"header-1\">Header Style 1</option>
                ";
            }
            // line 82
            echo "                ";
            if (twig_in_filter("2", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 83
                echo "                  <option value=\"header-2\" selected=\"true\">Header Style 2</option>
                  ";
            } else {
                // line 85
                echo "                  <option value=\"header-2\">Header Style 2</option>
                ";
            }
            // line 87
            echo "                ";
            if (twig_in_filter("3", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 88
                echo "                  <option value=\"header-3\" selected=\"true\">Header Style 3</option>
                  ";
            } else {
                // line 90
                echo "                  <option value=\"header-3\">Header Style 3</option>
                ";
            }
            // line 92
            echo "                ";
            if (twig_in_filter("4", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["header_variation"] ?? null))))) {
                // line 93
                echo "                  <option value=\"header-4\" selected=\"true\">Header Style 4</option>
                  ";
            } else {
                // line 95
                echo "                  <option value=\"header-4\">Header Style 4</option>
                ";
            }
            // line 97
            echo "              ";
        }
        // line 98
        echo "            </select>
          </div>
          <div class=\"title\">Sticky Menu</div>
            <div class=\"form-check\">
                ";
        // line 102
        if ((($context["stricky"] ?? null) == 1)) {
            // line 103
            echo "                  <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\" checked=\"checked\">
                  <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
                ";
        } else {
            // line 106
            echo "                  <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\">
                  <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
                ";
        }
        // line 109
        echo "            </div>
          <div class=\"clearfix\"></div>
          <div class=\"title\">";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Color skins"));
        echo "</div>
          <button id=\"pt-reset-color\" class=\"btn btn-dark\">Reset Colors</button>
          ";
        // line 113
        if (($context["color_set"] ?? null)) {
            // line 114
            echo "            <div class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("COLOR SCHEMES "));
            echo "</div>
            <div class=\"text-center row\">
              ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["color_set"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 117
                echo "                <a class=\"item-color p-0 mb-2 col-md-6\" 
                  data-primary_color=\"";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 118), "primary_color", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "\" 
                  data-secondary_color=\"";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 119), "secondary_color", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "\" 
                  data-category='";
                // line 120
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                echo "'>
                  <div class=\"row h-100\">
                    <div class=\"col-md-4 p-0\">
                      <div class=\"primary_bar\" style=\"background-color: ";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 123), "primary_color", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "\"></div>
                      <div class=\"secondary_bar\" style=\"background-color: ";
                // line 124
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "colors", [], "any", false, false, true, 124), "secondary_color", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "\"></div>
                    </div>
                    <div class=\"col-md-8 p-0 my-auto\">
                      <span class=\"color_set_title\">";
                // line 127
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </div>
            <div class=\"clearfix\"></div>
          ";
        }
        // line 135
        echo "          <!--";
        if (($context["secondary_colors"] ?? null)) {
            // line 136
            echo "            <div class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary Color"));
            echo "</div>
            <div class=\"text-center\">
              ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["secondary_colors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 139
                echo "                <a class=\"item-color\" 
                    style=\"background-color:";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 140, $this->source), "html", null, true);
                echo "\"
                    data-color=\"";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 141, $this->source), "html", null, true);
                echo "\" 
                    data-category='secondary'></a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "            </div>
          ";
        }
        // line 145
        echo "-->
          
            <!-- <div class=\"form-check\">
              ";
        // line 148
        if ((($context["loader"] ?? null) == 1)) {
            // line 149
            echo "              <input type=\"checkbox\" class=\"form-check-input\" id=\"Check2\" checked=\"checked\">
              <label class=\"form-check-label\" for=\"Check2\">Pre-loader</label>
              ";
        } else {
            // line 152
            echo "              <input type=\"checkbox\" class=\"form-check-input\" id=\"Check2\">
              <label class=\"form-check-label\" for=\"Check2\">Pre-loader</label>
              ";
        }
        // line 155
        echo "            </div> -->
        </div>
      </div>
    ";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 158, $this->source), "html", null, true);
        echo "
    </div>
    <div id=\"loader\">
      <div class=\"loading\"></div>
    </div>
    ";
        // line 164
        echo "    <js-bottom-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 164, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 164,  311 => 158,  306 => 155,  301 => 152,  296 => 149,  294 => 148,  289 => 145,  285 => 144,  276 => 141,  272 => 140,  269 => 139,  265 => 138,  259 => 136,  256 => 135,  251 => 132,  240 => 127,  234 => 124,  230 => 123,  224 => 120,  220 => 119,  216 => 118,  213 => 117,  209 => 116,  203 => 114,  201 => 113,  196 => 111,  192 => 109,  187 => 106,  182 => 103,  180 => 102,  174 => 98,  171 => 97,  167 => 95,  163 => 93,  160 => 92,  156 => 90,  152 => 88,  149 => 87,  145 => 85,  141 => 83,  138 => 82,  134 => 80,  130 => 78,  127 => 77,  125 => 76,  117 => 70,  113 => 68,  109 => 67,  104 => 65,  101 => 64,  97 => 58,  91 => 54,  85 => 50,  83 => 49,  78 => 47,  73 => 45,  67 => 42,  61 => 39,  57 => 38,  53 => 37,  48 => 35,  45 => 34,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <!-- custom css -->
    <style type=\"text/css\">
      {{ styles }}
    </style>
    <!-- end of custom css -->
    <js-placeholder token=\"{{ placeholder_token }}\">
  </head>  
  <body{{ attributes.addClass(body_classes) }}>
   <!-- page preloader -->
  {% if loader == 1 %}
  <div id=\"page-loader\" class=\"page-loader active\">
      <div class=\"loading\"></div>
  </div>
  {% else %}
  <div id=\"page-loader\">
      <div class=\"loading\"></div>
  </div>
  {% endif %}
   <!-- end of page preloader -->
    <div id=\"page_content\">
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {# Demo Code #}
      <div class=\"pt-skins-panel pt-skin-demo d-none\">
        <div class=\"control-panel\"><i class=\"fa fa-cog fa-spin\"></i></div>
        <div class=\"panel-skins-content\">
          <div class=\"title\">Header Style</div>
          <div class=\"text-center\">
            <select class=\"form-control\" id=\"item_list\">
              {% if header_variation %}
                {% if '1' in header_variation|render|render %}
                  <option value=\"header-1\" selected=\"true\">Header Style 1</option>
                  {% else %}
                  <option value=\"header-1\">Header Style 1</option>
                {% endif %}
                {% if '2' in header_variation|render|render %}
                  <option value=\"header-2\" selected=\"true\">Header Style 2</option>
                  {% else %}
                  <option value=\"header-2\">Header Style 2</option>
                {% endif %}
                {% if '3' in header_variation|render|render %}
                  <option value=\"header-3\" selected=\"true\">Header Style 3</option>
                  {% else %}
                  <option value=\"header-3\">Header Style 3</option>
                {% endif %}
                {% if '4' in header_variation|render|render %}
                  <option value=\"header-4\" selected=\"true\">Header Style 4</option>
                  {% else %}
                  <option value=\"header-4\">Header Style 4</option>
                {% endif %}
              {% endif %}
            </select>
          </div>
          <div class=\"title\">Sticky Menu</div>
            <div class=\"form-check\">
                {% if stricky == 1 %}
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\" checked=\"checked\">
                  <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
                {% else %}
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"Check1\">
                  <label class=\"form-check-label\" for=\"Check1\">Sticky Menu</label>
                {% endif %}
            </div>
          <div class=\"clearfix\"></div>
          <div class=\"title\">{{ 'Color skins'|t }}</div>
          <button id=\"pt-reset-color\" class=\"btn btn-dark\">Reset Colors</button>
          {% if color_set %}
            <div class=\"title\">{{ 'COLOR SCHEMES '|t }}</div>
            <div class=\"text-center row\">
              {% for item in color_set %}
                <a class=\"item-color p-0 mb-2 col-md-6\" 
                  data-primary_color=\"{{item.colors.primary_color}}\" 
                  data-secondary_color=\"{{item.colors.secondary_color}}\" 
                  data-category='{{item.title}}'>
                  <div class=\"row h-100\">
                    <div class=\"col-md-4 p-0\">
                      <div class=\"primary_bar\" style=\"background-color: {{item.colors.primary_color}}\"></div>
                      <div class=\"secondary_bar\" style=\"background-color: {{item.colors.secondary_color}}\"></div>
                    </div>
                    <div class=\"col-md-8 p-0 my-auto\">
                      <span class=\"color_set_title\">{{item.name}}</span>
                    </div>
                  </div>
                </a>
              {% endfor %}
            </div>
            <div class=\"clearfix\"></div>
          {% endif %}
          <!--{% if secondary_colors %}
            <div class=\"title\">{{ 'Secondary Color'|t }}</div>
            <div class=\"text-center\">
              {% for item in secondary_colors %}
                <a class=\"item-color\" 
                    style=\"background-color:{{item}}\"
                    data-color=\"{{item}}\" 
                    data-category='secondary'></a>
              {% endfor %}
            </div>
          {% endif %}-->
          
            <!-- <div class=\"form-check\">
              {% if loader == 1 %}
              <input type=\"checkbox\" class=\"form-check-input\" id=\"Check2\" checked=\"checked\">
              <label class=\"form-check-label\" for=\"Check2\">Pre-loader</label>
              {% else %}
              <input type=\"checkbox\" class=\"form-check-input\" id=\"Check2\">
              <label class=\"form-check-label\" for=\"Check2\">Pre-loader</label>
              {% endif %}
            </div> -->
        </div>
      </div>
    {{ page_bottom }}
    </div>
    <div id=\"loader\">
      <div class=\"loading\"></div>
    </div>
    {# Demo Code #}
    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
  </body>
</html>
", "themes/custom/university_pro/templates/layout/html.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 49, "for" => 116);
        static $filters = array("clean_class" => 29, "escape" => 35, "safe_join" => 38, "t" => 65, "render" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'safe_join', 't', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
