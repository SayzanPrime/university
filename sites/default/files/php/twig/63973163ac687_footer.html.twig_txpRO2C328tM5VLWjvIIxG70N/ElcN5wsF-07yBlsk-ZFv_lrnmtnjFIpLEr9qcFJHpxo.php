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

/* @university_pro/footer/footer.html.twig */
class __TwigTemplate_68192813e4f13443e1a395aff2900c08 extends \Twig\Template
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
        // line 1
        $context["front_page"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 2
        echo "<!-- Footer -->
  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"footer_top\">
        <div class=\"row\">
          <div class=\"footer_logo col-lg-8 col-md-8\" data-aos=\"fade-up\">
            <!-- demo code -->
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 9)) {
            // line 10
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
            ";
        } else {
            // line 12
            echo "              <a class=\"navbar-brand\" href=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 12, $this->source), "html", null, true);
            echo " title=\"home\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
                  <g id=\"Group_212\" data-name=\"Group 212\" transform=\"translate(-970 -3686)\">
                    <text id=\"University\" transform=\"translate(1256 3745)\" fill=\"#fff\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">University</tspan></text>
                    <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
                      <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
                      <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
                    </g>
                  </g>
                </svg>
              </a>
            ";
        }
        // line 24
        echo "            <!-- end of demo code -->
          </div>
          <div class=\"footer_subscribe col-lg-4 col-md-4\" data-aos=\"fade-up\">
              ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div><!--- End of Footer top -->
      <div class=\"footer_center\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3\">
            ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
          </div> 
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
          </div> 
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <div class=\"footer_social\">
              <h2 class=\"social_title\">Follow Us</h2>
              <div class=\"social_link\">
                ";
        // line 46
        if (($context["facebook"] ?? null)) {
            // line 47
            echo "                  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 47, $this->source), "html", null, true);
            echo "\"><i class=\"fab fa-facebook-square\"></i></a>
                ";
        }
        // line 49
        echo "                ";
        if (($context["twitter"] ?? null)) {
            // line 50
            echo "                  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 50, $this->source), "html", null, true);
            echo "\"><i class=\"fab fa-twitter-square\"></i></a>
                ";
        }
        // line 52
        echo "                ";
        if (($context["linkedin"] ?? null)) {
            // line 53
            echo "                  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 53, $this->source), "html", null, true);
            echo "\"><i class=\"fab fa-linkedin\"></i></a>
                ";
        }
        // line 55
        echo "                ";
        if (($context["instagram"] ?? null)) {
            // line 56
            echo "                  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 56, $this->source), "html", null, true);
            echo "\"><i class=\"fab fa-instagram\"></i></a>
                ";
        }
        // line 58
        echo "              </div>
            </div>
          </div>
        </div><!--- End of row -->
      </div><!--- End of Footer center -->
      <div class=\"footer_bottom\">
          <div class=\"row\">
            <div class=\"col-lg-9 col-md-6 p-0 c-order\">
              ";
        // line 66
        if (($context["copyright"] ?? null)) {
            // line 67
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 67, $this->source), "<b>,<strong>,<p>,<a>,<pre>"));
            echo "
              ";
        }
        // line 69
        echo "            </div>
            <div class=\"col-lg-3 col-md-6\">
              ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 71)) {
            // line 72
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 74
        echo "            </div>
          </div>
      </div><!--- end of footer_bottom-->
    </div> <!--- Container end -->
  </footer>
  <!-- End of Footer -->";
    }

    public function getTemplateName()
    {
        return "@university_pro/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  169 => 72,  167 => 71,  163 => 69,  157 => 67,  155 => 66,  145 => 58,  139 => 56,  136 => 55,  130 => 53,  127 => 52,  121 => 50,  118 => 49,  112 => 47,  110 => 46,  101 => 40,  95 => 37,  89 => 34,  79 => 27,  74 => 24,  58 => 12,  52 => 10,  50 => 9,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set front_page = url('<front>')  %}
<!-- Footer -->
  <footer class=\"footer\">
    <div class=\"container\">
      <div class=\"footer_top\">
        <div class=\"row\">
          <div class=\"footer_logo col-lg-8 col-md-8\" data-aos=\"fade-up\">
            <!-- demo code -->
            {% if page.footer_logo %}
              {{ page.footer_logo }}
            {% else %}
              <a class=\"navbar-brand\" href={{front_page}} title=\"home\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
                  <g id=\"Group_212\" data-name=\"Group 212\" transform=\"translate(-970 -3686)\">
                    <text id=\"University\" transform=\"translate(1256 3745)\" fill=\"#fff\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">University</tspan></text>
                    <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
                      <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
                      <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
                    </g>
                  </g>
                </svg>
              </a>
            {% endif %}
            <!-- end of demo code -->
          </div>
          <div class=\"footer_subscribe col-lg-4 col-md-4\" data-aos=\"fade-up\">
              {{page.footer_four}}
          </div>
        </div>
      </div><!--- End of Footer top -->
      <div class=\"footer_center\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3\">
            {{page.footer_first}}
          </div> 
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            {{page.footer_second}}
          </div> 
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            {{page.footer_third}}
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <div class=\"footer_social\">
              <h2 class=\"social_title\">Follow Us</h2>
              <div class=\"social_link\">
                {% if facebook %}
                  <a href=\"{{facebook}}\"><i class=\"fab fa-facebook-square\"></i></a>
                {% endif %}
                {% if twitter %}
                  <a href=\"{{twitter}}\"><i class=\"fab fa-twitter-square\"></i></a>
                {% endif %}
                {% if linkedin %}
                  <a href=\"{{linkedin}}\"><i class=\"fab fa-linkedin\"></i></a>
                {% endif %}
                {% if instagram %}
                  <a href=\"{{instagram}}\"><i class=\"fab fa-instagram\"></i></a>
                {% endif %}
              </div>
            </div>
          </div>
        </div><!--- End of row -->
      </div><!--- End of Footer center -->
      <div class=\"footer_bottom\">
          <div class=\"row\">
            <div class=\"col-lg-9 col-md-6 p-0 c-order\">
              {% if copyright %}
                {{copyright|striptags('<b>,<strong>,<p>,<a>,<pre>')|raw}}
              {% endif %}
            </div>
            <div class=\"col-lg-3 col-md-6\">
              {% if page.footer_menu %}
                {{page.footer_menu}}
              {% endif %}
            </div>
          </div>
      </div><!--- end of footer_bottom-->
    </div> <!--- Container end -->
  </footer>
  <!-- End of Footer -->", "@university_pro/footer/footer.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\footer\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 9);
        static $filters = array("escape" => 10, "raw" => 67, "striptags" => 67);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'striptags'],
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
