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

/* themes/custom/university_pro/templates/layout/page--front.html.twig */
class __TwigTemplate_0f9ba47e8c24e5129fea6c919e6293b6 extends \Twig\Template
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
            $this->loadTemplate("@university_pro/header/header.html.twig", "themes/custom/university_pro/templates/layout/page--front.html.twig", 72)->display($context);
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
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "themes/custom/university_pro/templates/layout/page--front.html.twig", 85)->display($context);
            // line 86
            echo "
";
        } else {
            // line 88
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "themes/custom/university_pro/templates/layout/page--front.html.twig", 88)->display($context);
            // line 89
            echo "  <!-- page tabs -->
  ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
  <!-- End -->
  ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 92) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92))) {
                // line 93
                echo "    ";
                $context["container"] = "container";
                // line 94
                echo "  ";
            } else {
                // line 95
                echo "    ";
                $context["container"] = "container-fluid";
                // line 96
                echo "  ";
            }
            // line 97
            echo "  <!-- Main Content -->
   <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
            // line 99
            $this->displayBlock('content', $context, $blocks);
            // line 126
            echo "    </div>

  <!-- End of Main Content -->
  ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 129)) {
                // line 130
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 134
            echo "
  ";
            // line 135
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "themes/custom/university_pro/templates/layout/page--front.html.twig", 135)->display($context);
            // line 136
            echo "  <a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a>
  ";
        }
    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 100, $this->source), "html", null, true);
        echo "\">
          ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 103, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109)) {
            // line 110
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 110, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 116
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 116)) {
            // line 117
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 117, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 123
        echo "          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 123,  184 => 119,  178 => 117,  175 => 116,  168 => 112,  162 => 110,  160 => 109,  154 => 106,  148 => 103,  143 => 101,  138 => 100,  134 => 99,  128 => 136,  126 => 135,  123 => 134,  117 => 131,  114 => 130,  112 => 129,  107 => 126,  105 => 99,  101 => 97,  98 => 96,  95 => 95,  92 => 94,  89 => 93,  87 => 92,  82 => 90,  79 => 89,  76 => 88,  72 => 86,  70 => 85,  65 => 83,  56 => 77,  50 => 73,  47 => 72,  45 => 71,  43 => 70,  40 => 69,);
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
  {% include '@university_pro/footer/footer.html.twig' %}

{% else %}
  {% include '@university_pro/header/header.html.twig' %}
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
              <main{{ content_attributes }}>
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  {{ page.content }}
                </section>
              </main>
            {% if page.sidebar_first %}
              <div{{ sidebar_first_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_first }}
                </aside>
              </div>
            {% endif %}
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
  {% endif %}", "themes/custom/university_pro/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 71, "include" => 72, "block" => 99);
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
