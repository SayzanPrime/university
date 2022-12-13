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

/* modules/custom/university/templates/page/news.html.twig */
class __TwigTemplate_370194e7d976be685996950d0e62f59b extends \Twig\Template
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
        // line 1
        echo "

";
        // line 70
        echo "
";
        // line 71
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 72
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 73
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "modules/custom/university/templates/page/news.html.twig", 73)->display($context);
            // line 74
            echo "  <section id=\"user-tabs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </section>
  <!-- Main Content -->
  ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
  <!-- Main Content end -->
  ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 86)) {
                // line 87
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 91
            echo "  ";
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "modules/custom/university/templates/page/news.html.twig", 91)->display($context);
            // line 92
            echo "
";
        } else {
            // line 94
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "modules/custom/university/templates/page/news.html.twig", 94)->display($context);
            // line 95
            echo "  <!-- Feature Top -->
  ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 96)) {
                // line 97
                echo "    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
        ";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "
      </aside>
    </div>
  ";
            }
            // line 103
            echo "  <!-- End of Feature Top -->
  <!-- page tabs -->
  ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
  <!-- End -->
  ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 107) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 107))) {
                // line 108
                echo "    ";
                $context["container"] = "container";
                // line 109
                echo "  ";
            } else {
                // line 110
                echo "    ";
                $context["container"] = "container-fluid";
                // line 111
                echo "  ";
            }
            // line 112
            echo "  <!-- Main Content -->
   <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
            // line 114
            $this->displayBlock('content', $context, $blocks);
            // line 166
            echo "    </div>

  <!-- End of Main Content -->
  ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 169)) {
                // line 170
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 174
            echo "
  ";
            // line 175
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "modules/custom/university/templates/page/news.html.twig", 175)->display($context);
            // line 176
            echo "  <a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a>
  ";
        }
        // line 178
        echo "Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
university/news.html.twig at master · SayzanPrime/university";
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 115, $this->source), "html", null, true);
        echo "\">
          ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 118)) {
            // line 119
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 119, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 125
        echo "              <main class=\"main-content col order-first\" id=\"content\" role=\"main\">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  <h1>";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 128, $this->source), "html", null, true);
        echo "</h1>
                  
                  
                  
            
             <ul>      
\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 135
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "actu_url", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "</a>
           
            <p>";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "summary", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "</p>
            <a href =\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "actu_url", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "\">Lire la suite</a>
             
            <div>
           <img src=\"";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "\" />
            </div>

           
            
       
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "\t\t\t\t  </ul>
                
               
\t\t\t\t
\t\t\t\t           
                </section>

              </main>
            ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 156)) {
            // line 157
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 157, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 163
        echo "          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "modules/custom/university/templates/page/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 163,  279 => 159,  273 => 157,  271 => 156,  261 => 148,  248 => 141,  242 => 138,  238 => 137,  230 => 135,  226 => 134,  217 => 128,  212 => 125,  205 => 121,  199 => 119,  197 => 118,  192 => 116,  187 => 115,  183 => 114,  165 => 178,  161 => 176,  159 => 175,  156 => 174,  150 => 171,  147 => 170,  145 => 169,  140 => 166,  138 => 114,  134 => 112,  131 => 111,  128 => 110,  125 => 109,  122 => 108,  120 => 107,  115 => 105,  111 => 103,  104 => 99,  100 => 97,  98 => 96,  95 => 95,  92 => 94,  88 => 92,  85 => 91,  79 => 88,  76 => 87,  74 => 86,  69 => 84,  60 => 78,  54 => 74,  51 => 73,  49 => 72,  47 => 71,  44 => 70,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{#
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
                  <h1>{{title}}</h1>
                  
                  
                  
            
             <ul>      
\t\t\t\t\t{% for item in items %}
\t\t\t\t\t<a href=\"{{item.actu_url}}\">{{item.titre}}</a>
           
            <p>{{item.summary}}</p>
            <a href =\"{{item.actu_url}}\">Lire la suite</a>
             
            <div>
           <img src=\"{{item.url}}\" />
            </div>

           
            
       
\t\t\t\t\t{% endfor %}
\t\t\t\t  </ul>
                
               
\t\t\t\t
\t\t\t\t           
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
  {% endif %}
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
university/news.html.twig at master · SayzanPrime/university", "modules/custom/university/templates/page/news.html.twig", "C:\\xampp\\htdocs\\university\\modules\\custom\\university\\templates\\page\\news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "if" => 72, "include" => 73, "block" => 114, "for" => 134);
        static $filters = array("render" => 72, "escape" => 78);
        static $functions = array("url" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block', 'for'],
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
