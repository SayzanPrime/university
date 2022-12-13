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
        echo "Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@maryammary99 
SayzanPrime
/
university
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
university/modules/custom/university/templates/page/news.html.twig
@maryammary99
maryammary99 secodn test
Latest commit f359bf9 4 hours ago
 History
 1 contributor
178 lines (161 sloc)  6.38 KB

";
        // line 97
        echo "
";
        // line 98
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 99
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 100
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "modules/custom/university/templates/page/news.html.twig", 100)->display($context);
            // line 101
            echo "  <section id=\"user-tabs\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </section>
  <!-- Main Content -->
  ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
  <!-- Main Content end -->
  ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 113)) {
                // line 114
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 118
            echo "  ";
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "modules/custom/university/templates/page/news.html.twig", 118)->display($context);
            // line 119
            echo "
";
        } else {
            // line 121
            echo "  ";
            $this->loadTemplate("@university_pro/header/header.html.twig", "modules/custom/university/templates/page/news.html.twig", 121)->display($context);
            // line 122
            echo "  <!-- Feature Top -->
  ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 123)) {
                // line 124
                echo "    <div class=\"featured-top\">
      <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
        ";
                // line 126
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "
      </aside>
    </div>
  ";
            }
            // line 130
            echo "  <!-- End of Feature Top -->
  <!-- page tabs -->
  ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
  <!-- End -->
  ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 134) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134))) {
                // line 135
                echo "    ";
                $context["container"] = "container";
                // line 136
                echo "  ";
            } else {
                // line 137
                echo "    ";
                $context["container"] = "container-fluid";
                // line 138
                echo "  ";
            }
            // line 139
            echo "  <!-- Main Content -->
   <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
            // line 141
            $this->displayBlock('content', $context, $blocks);
            // line 192
            echo "    </div>

  <!-- End of Main Content -->
  ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 195)) {
                // line 196
                echo "    <!-- Feature Top (Call To Action)-->
    ";
                // line 197
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
                echo "
    <!-- End of Feature top -->
  ";
            }
            // line 200
            echo "
  ";
            // line 201
            $this->loadTemplate("@university_pro/footer/footer.html.twig", "modules/custom/university/templates/page/news.html.twig", 201)->display($context);
            // line 202
            echo "  <a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a>
  ";
        }
        // line 204
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

    // line 141
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 142, $this->source), "html", null, true);
        echo "\">
          ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 145)) {
            // line 146
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 146, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 152
        echo "              <main class=\"main-content col order-first\" id=\"content\" role=\"main\">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  <h1>";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 155, $this->source), "html", null, true);
        echo "</h1>
                  
                  
                  
            
             <ul>      
\t\t\t\t\t";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 162
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "actu_url", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "</a>
           <p>";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "corps", [], "any", false, false, true, 163), 163, $this->source)), "html", null, true);
            echo "<p>
          ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "summary", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
             
            <div>
           <img src=\"";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "\" />
            </div>

           
            
       
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t  </ul>
                
               
\t\t\t\t
\t\t\t\t           
                </section>

              </main>
            ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 182)) {
            // line 183
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 183, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 189
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
        return array (  312 => 189,  305 => 185,  299 => 183,  297 => 182,  287 => 174,  274 => 167,  268 => 164,  264 => 163,  257 => 162,  253 => 161,  244 => 155,  239 => 152,  232 => 148,  226 => 146,  224 => 145,  219 => 143,  214 => 142,  210 => 141,  192 => 204,  188 => 202,  186 => 201,  183 => 200,  177 => 197,  174 => 196,  172 => 195,  167 => 192,  165 => 141,  161 => 139,  158 => 138,  155 => 137,  152 => 136,  149 => 135,  147 => 134,  142 => 132,  138 => 130,  131 => 126,  127 => 124,  125 => 123,  122 => 122,  119 => 121,  115 => 119,  112 => 118,  106 => 115,  103 => 114,  101 => 113,  96 => 111,  87 => 105,  81 => 101,  78 => 100,  76 => 99,  74 => 98,  71 => 97,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@maryammary99 
SayzanPrime
/
university
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
university/modules/custom/university/templates/page/news.html.twig
@maryammary99
maryammary99 secodn test
Latest commit f359bf9 4 hours ago
 History
 1 contributor
178 lines (161 sloc)  6.38 KB

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
           <p>{{item.corps |striptags}}<p>
          {{item.summary}}
             
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
        static $tags = array("set" => 98, "if" => 99, "include" => 100, "block" => 141, "for" => 161);
        static $filters = array("render" => 99, "escape" => 105, "striptags" => 163);
        static $functions = array("url" => 98);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block', 'for'],
                ['render', 'escape', 'striptags'],
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
