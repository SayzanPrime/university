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

/* themes/custom/university_pro/templates/layout/page.html.twig */
class __TwigTemplate_66097b98afbdc454a87d4b02cf1578ab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "
";
        // line 70
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 71
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 72
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "themes/custom/university_pro/templates/layout/page.html.twig", 72)->display($context);
            // line 73
            echo "  <section id=\"user-tabs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </section>
  <!-- Main Content -->
  ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
  <!-- Main Content end -->
  ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 85)) {
                // line 86
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 90
            echo "  ";
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "themes/custom/university_pro/templates/layout/page.html.twig", 90)->display($context);
            // line 91
            echo "
";
        } else {
            // line 93
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "themes/custom/university_pro/templates/layout/page.html.twig", 93)->display($context);
            // line 94
            echo "  <!-- Feature Top -->
  ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 95)) {
                // line 96
                echo "    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
        ";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "
      </aside>
    </div>
  ";
            }
            // line 102
            echo "  <!-- End of Feature Top -->
  <!-- page tabs -->
  ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
  <!-- End -->
  ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106))) {
                // line 107
                echo "    ";
                $context["container"] = "container";
                // line 108
                echo "  ";
            } else {
                // line 109
                echo "    ";
                $context["container"] = "container-fluid";
                // line 110
                echo "  ";
            }
            // line 111
            echo "  <!-- Main Content -->
   <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
            // line 113
            $this->displayBlock('content', $context, $blocks);
            // line 140
            echo "    </div>

  <!-- End of Main Content -->
  ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 143)) {
                // line 144
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 148
            echo "
  ";
            // line 149
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "themes/custom/university_pro/templates/layout/page.html.twig", 149)->display($context);
            // line 150
            echo "  <a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a>
  ";
        }
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 114, $this->source), "html", null, true);
        echo "\">
          ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117)) {
            // line 118
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 118, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 124
        echo "              <main class=\"main-content col order-first\" id=\"content\" role=\"main\">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130)) {
            // line 131
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 131, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 137
        echo "          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 137,  211 => 133,  205 => 131,  203 => 130,  197 => 127,  192 => 124,  185 => 120,  179 => 118,  177 => 117,  172 => 115,  167 => 114,  163 => 113,  157 => 150,  155 => 149,  152 => 148,  146 => 145,  143 => 144,  141 => 143,  136 => 140,  134 => 113,  130 => 111,  127 => 110,  124 => 109,  121 => 108,  118 => 107,  116 => 106,  111 => 104,  107 => 102,  100 => 98,  96 => 96,  94 => 95,  91 => 94,  88 => 93,  84 => 91,  81 => 90,  75 => 87,  72 => 86,  70 => 85,  65 => 83,  56 => 77,  50 => 73,  47 => 72,  45 => 71,  43 => 70,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}

{% set url = url('<current>') %}
{% if 'user' in url|render|render %}
  {% include '@university_pro/header/header.html.twig' %}
  <section id=\"user-tabs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          {{ page.tabs }}
        </div>
      </div>
    </div>
  </section>
  <!-- Main Content -->
  {{ page.content }}
  <!-- Main Content end -->
  {% if page.featured_bottom %}
    <!-- Feature Top (Call To Action)-->
    {{ page.featured_bottom }}
    <!-- End of Feature top -->
  {% endif %}
  {% include '@university_pro/footer/footer.html.twig' %}

{% else %}
  {% include '@university_pro/header/header.html.twig' %}
  <!-- Feature Top -->
  {% if page.featured_top %}
    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
        {{ page.featured_top }}
      </aside>
    </div>
  {% endif %}
  <!-- End of Feature Top -->
  <!-- page tabs -->
  {{ page.tabs }}
  <!-- End -->
  {% if  page.sidebar_first or page.sidebar_second%}
    {% set container = 'container' %}
  {% else %}
    {% set container = 'container-fluid' %}
  {% endif %}
  <!-- Main Content -->
   <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      {% block content %}
        <div id=\"main\" class=\"{{ container }}\">
          {{ page.breadcrumb }}
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              {% if page.sidebar_first %}
                <div{{ sidebar_first_attributes }}>
                  <aside class=\"section\" role=\"complementary\">
                    {{ page.sidebar_first }}
                  </aside>
                </div>
              {% endif %}
              <main class=\"main-content col order-first\" id=\"content\" role=\"main\">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  {{ page.content }}
                </section>
              </main>
            {% if page.sidebar_second %}
              <div{{ sidebar_second_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_second }}
                </aside>
              </div>
            {% endif %}
          </div>
        </div>
      {% endblock %}
    </div>

  <!-- End of Main Content -->
  {% if page.featured_bottom %}
    <!-- Feature Top (Call To Action)-->
    {{ page.featured_bottom }}
    <!-- End of Feature top -->
  {% endif %}

  {% include '@university_pro/footer/footer.html.twig' %}
  <a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a>
  {% endif %}", "themes/custom/university_pro/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 71, "include" => 72, "block" => 113);
        static $filters = array("render" => 71, "escape" => 77);
        static $functions = array("url" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['render', 'escape'],
                ['url']
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
