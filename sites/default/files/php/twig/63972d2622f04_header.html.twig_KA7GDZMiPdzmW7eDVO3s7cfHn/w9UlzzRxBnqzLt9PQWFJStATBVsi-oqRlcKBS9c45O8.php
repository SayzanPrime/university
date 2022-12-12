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

/* @university_pro/header/header.html.twig */
class __TwigTemplate_4d03a9fb26b1a669038fd9f1f5b3aef169f5950e23c95edf61a4777e42abf935 extends \Twig\Template
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
        echo " <!-- Navigation bar -->
  <section id=\"pt-header\">
    <!-- Event Page -->
      ";
        // line 4
        if ((($context["header_variation"] ?? null) == "header-1")) {
            // line 5
            echo "        ";
            $context["active_1"] = "active";
            // line 6
            echo "      ";
        } elseif ((($context["header_variation"] ?? null) == "header-2")) {
            // line 7
            echo "        ";
            $context["active_2"] = "active";
            // line 8
            echo "      ";
        } elseif ((($context["header_variation"] ?? null) == "header-3")) {
            // line 9
            echo "        ";
            $context["active_3"] = "active";
            // line 10
            echo "      ";
        } elseif ((($context["header_variation"] ?? null) == "header-4")) {
            // line 11
            echo "        ";
            $context["active_4"] = "active";
            // line 12
            echo "      ";
        }
        // line 13
        echo "    <!-- Check for header style -->
    <div id=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_variation"] ?? null), 14, $this->source), "html", null, true);
        echo "\" class=\"pt_nav_header\">
      <!-- Header Style 1 -->
      <div class=\"pt_header_type header-1 ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_1"] ?? null), 16, $this->source), "html", null, true);
        echo "\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 23, $this->source), "html", null, true);
        echo "\"><i class=\"fas fa-phone-alt\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 23, $this->source), "html", null, true);
        echo "</a></li>
                  <li><a href=\"mailto:";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 24, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 24, $this->source), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  ";
        // line 29
        if (($context["logged_in"] ?? null)) {
            // line 30
            echo "                  <li> <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 30, $this->source), "html", null, true);
            echo "/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  ";
        } else {
            // line 32
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 32, $this->source), "html", null, true);
            echo "/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  ";
        }
        // line 34
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_1", [], "any", false, false, true, 34)) {
            // line 35
            echo "                    <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_1", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</li>
                  ";
        }
        // line 37
        echo "                  <li class=\"social_link\"><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 37, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 38, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar\">
                  <div class=\"container\">
                    ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
                    <!-- Mobile Menu Toggle Button -->
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler fas fa-bars\"></span>
                    </button>
                    <!-- end of mobile menu toggle button -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_header_1", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 1 -->
      <!-- Header Style 2 -->
      <div class=\"pt_header_type header-2 ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_2"] ?? null), 76, $this->source), "html", null, true);
        echo "\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 83, $this->source), "html", null, true);
        echo "\"><i class=\"fas fa-phone-alt\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 83, $this->source), "html", null, true);
        echo "</a></li>
                  <li><a href=\"mailto:";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 84, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 84, $this->source), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_2", [], "any", false, false, true, 89)) {
            // line 90
            echo "                    <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_2", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</li>
                  ";
        }
        // line 92
        echo "                  <li class=\"social_link\"><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 92, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 93, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation position-relative text-right text-md-right\" role=\"navigation\">
                  <div class=\"container\">
                    ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
                    <!-- Burger menu toggle btn -->
                    <div class=\"d-inline-block ml-md-0 ml-auto py-3\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle\"><span class=\"fas fa-bars\"></span></a></div>
                    <!-- End -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\">
                      ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
                      <ul class=\"login_text\">
                        ";
        // line 115
        if (($context["logged_in"] ?? null)) {
            // line 116
            echo "                        <li> <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 116, $this->source), "html", null, true);
            echo "/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                        ";
        } else {
            // line 118
            echo "                        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 118, $this->source), "html", null, true);
            echo "/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                        ";
        }
        // line 120
        echo "                      </ul>
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_header_2", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
              </div>
              <!-- Admission Button -->
                <a type=\"button\" class=\"btn secondary-btn\" title=\"";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_title"] ?? null), 130, $this->source), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 130, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_link"] ?? null), 130, $this->source), "html", null, true);
        echo "\" >
                  ";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_title"] ?? null), 131, $this->source), "html", null, true);
        echo "
                </a>
              <!-- End OF Request button -->
            </div><!-- Row End -->
          </div> <!-- Container End --> 
                  <!-- Buger menu on mobile -->
        <div class=\"pt-site-mobile-menu\">
          <div class=\"pt-site-mobile-menu-header\">
            <div class=\"pt-site-mobile-menu-close mt-3\">
              <span class=\"js-menu-toggle\"><i class=\"far fa-window-close\"></i></span>
            </div>
          </div>
          <div class=\"pt-site-mobile-menu-body\">
            <div class=\"pt-site-mobile-menu-links\"></div>
            <div class=\"pt-site-mobile-submenu\">
              <ul class=\"login_text\">
                ";
        // line 147
        if (($context["logged_in"] ?? null)) {
            // line 148
            echo "                <li> <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 148, $this->source), "html", null, true);
            echo "/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                ";
        } else {
            // line 150
            echo "                <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 150, $this->source), "html", null, true);
            echo "/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                ";
        }
        // line 152
        echo "              </ul>
           <!-- Admission Button -->
              <a type=\"button\" class=\"btn secondary-btn\" title=\"";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_title"] ?? null), 154, $this->source), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 154, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_link"] ?? null), 154, $this->source), "html", null, true);
        echo "\" >
                ";
        // line 155
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_title"] ?? null), 155, $this->source), "html", null, true);
        echo "
              </a>
            <!-- End OF Request button -->
            </div>
          </div>
        </div>
        <!-- end -->
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 2 -->
      <!-- Header Style 3 -->
      <div class=\"pt_header_type header-3 ";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_3"] ?? null), 167, $this->source), "html", null, true);
        echo "\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 174, $this->source), "html", null, true);
        echo "\"><i class=\"fas fa-phone-alt\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 174, $this->source), "html", null, true);
        echo "</a></li>
                  <li><a href=\"mailto:";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 175, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 175, $this->source), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  ";
        // line 180
        if (($context["logged_in"] ?? null)) {
            // line 181
            echo "                  <li> <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 181, $this->source), "html", null, true);
            echo "/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  ";
        } else {
            // line 183
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 183, $this->source), "html", null, true);
            echo "/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  ";
        }
        // line 185
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_3", [], "any", false, false, true, 185)) {
            // line 186
            echo "                    <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_3", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "</li>
                  ";
        }
        // line 188
        echo "                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <div class=\"pt-table\">
                  <div class=\"pt-table-left pt_logo\">
                    ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 201)) {
            // line 202
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "
                    ";
        } else {
            // line 204
            echo "                      <a class=\"navbar-brand\" href=\"/\" title=\"home\">
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
        // line 216
        echo "                  </div>
                  <div class=\"pt-table-left pt_search\">
                    ";
        // line 218
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_header_3", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
        echo "
                  </div>
                  <!-- Burger menu toggle btn -->
                    <div class=\"site-menu-toggle\"><a href=\"#\" class=\"js-menu-toggle\"><span class=\"fas fa-bars\"></span></a></div>
                  <!-- End -->
                </div>
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation position-relative text-right text-md-right\" role=\"navigation\">
                  <div class=\"container\">
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      ";
        // line 228
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
        echo "
                    </div>        
                    <!-- End of Menus-->
                    <ul class=\"social_header\">
                      <li class=\"social_link\"><a href=\"";
        // line 232
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 232, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li class=\"social_link\"><a href=\"";
        // line 233
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 233, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a></li>
                    </ul>
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
                  <!-- Buger menu on mobile -->
        <div class=\"pt-site-mobile-menu\">
          <div class=\"pt-site-mobile-menu-header\">
            <div class=\"pt-site-mobile-menu-close mt-3\">
              <span class=\"js-menu-toggle\"><i class=\"far fa-window-close\"></i></span>
            </div>
          </div>
          <div class=\"pt-site-mobile-menu-body\">
            <div class=\"pt-site-mobile-menu-links\"></div>
            <div class=\"pt-site-mobile-submenu\">
              <ul class=\"login_text\">
                <li class=\"social_link\"><a href=\"";
        // line 251
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 251, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                <li class=\"social_link\"><a href=\"";
        // line 252
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 252, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end -->
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 3 -->
      <!-- Header Style 4 -->
      <div class=\"pt_header_type header-4 ";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_4"] ?? null), 263, $this->source), "html", null, true);
        echo "\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:";
        // line 270
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 270, $this->source), "html", null, true);
        echo "\"><i class=\"fas fa-phone-alt\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 270, $this->source), "html", null, true);
        echo "</a></li>
                  <li><a href=\"mailto:";
        // line 271
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 271, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 271, $this->source), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  ";
        // line 276
        if (($context["logged_in"] ?? null)) {
            // line 277
            echo "                  <li> <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 277, $this->source), "html", null, true);
            echo "/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  ";
        } else {
            // line 279
            echo "                  <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 279, $this->source), "html", null, true);
            echo "/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  ";
        }
        // line 281
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_4", [], "any", false, false, true, 281)) {
            // line 282
            echo "                    <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "multilingual_header_4", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "</li>
                  ";
        }
        // line 284
        echo "                  <li class=\"social_link\"><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 284, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"";
        // line 285
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 285, $this->source), "html", null, true);
        echo "\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation\">
                  <div class=\"container\">
                    ";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 299)) {
            // line 300
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
            echo "
                    ";
        } else {
            // line 302
            echo "                      <a class=\"navbar-brand\" href=\"/\" title=\"home\">
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
        // line 314
        echo "                    <!-- Mobile Menu Toggle Button -->
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler fas fa-bars\"></span>
                    </button>
                    <!-- end of mobile menu toggle button -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      ";
        // line 321
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
        echo "
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                ";
        // line 328
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_header_4", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
        echo "
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 4 -->
    </div>
  </section>
  <!-- End of Navigation bar -->";
    }

    public function getTemplateName()
    {
        return "@university_pro/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 328,  602 => 321,  593 => 314,  579 => 302,  573 => 300,  571 => 299,  554 => 285,  549 => 284,  543 => 282,  540 => 281,  534 => 279,  528 => 277,  526 => 276,  516 => 271,  510 => 270,  500 => 263,  486 => 252,  482 => 251,  461 => 233,  457 => 232,  450 => 228,  437 => 218,  433 => 216,  419 => 204,  413 => 202,  411 => 201,  396 => 188,  390 => 186,  387 => 185,  381 => 183,  375 => 181,  373 => 180,  363 => 175,  357 => 174,  347 => 167,  332 => 155,  325 => 154,  321 => 152,  315 => 150,  309 => 148,  307 => 147,  288 => 131,  281 => 130,  275 => 127,  266 => 120,  260 => 118,  254 => 116,  252 => 115,  247 => 113,  238 => 107,  221 => 93,  216 => 92,  210 => 90,  208 => 89,  198 => 84,  192 => 83,  182 => 76,  170 => 67,  160 => 60,  149 => 52,  132 => 38,  127 => 37,  121 => 35,  118 => 34,  112 => 32,  106 => 30,  104 => 29,  94 => 24,  88 => 23,  78 => 16,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Navigation bar -->
  <section id=\"pt-header\">
    <!-- Event Page -->
      {% if header_variation == 'header-1' %}
        {% set active_1 = 'active' %}
      {% elseif header_variation == 'header-2' %}
        {% set active_2 = 'active' %}
      {% elseif header_variation == 'header-3' %}
        {% set active_3 = 'active' %}
      {% elseif header_variation == 'header-4' %}
        {% set active_4 = 'active' %}
      {% endif %}
    <!-- Check for header style -->
    <div id=\"{{header_variation}}\" class=\"pt_nav_header\">
      <!-- Header Style 1 -->
      <div class=\"pt_header_type header-1 {{active_1}}\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:{{phone}}\"><i class=\"fas fa-phone-alt\"></i> {{phone}}</a></li>
                  <li><a href=\"mailto:{{email}}\"><i class=\"fa fa-envelope\"></i>{{mail}}</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  {% if logged_in %}
                  <li> <a href=\"{{base_url}}/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  {% else %}
                  <li><a href=\"{{base_url}}/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  {% endif %}
                  {% if page.multilingual_header_1 %}
                    <li>{{ page.multilingual_header_1 }}</li>
                  {% endif %}
                  <li class=\"social_link\"><a href=\"{{facebook}}\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"{{twitter}}\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar\">
                  <div class=\"container\">
                    {{ page.logo }}
                    <!-- Mobile Menu Toggle Button -->
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler fas fa-bars\"></span>
                    </button>
                    <!-- end of mobile menu toggle button -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      {{ page.primary_menu }}
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                {{page.search_header_1}}
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 1 -->
      <!-- Header Style 2 -->
      <div class=\"pt_header_type header-2 {{active_2}}\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:{{phone}}\"><i class=\"fas fa-phone-alt\"></i> {{phone}}</a></li>
                  <li><a href=\"mailto:{{email}}\"><i class=\"fa fa-envelope\"></i>{{mail}}</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  {% if page.multilingual_header_2 %}
                    <li>{{ page.multilingual_header_2 }}</li>
                  {% endif %}
                  <li class=\"social_link\"><a href=\"{{facebook}}\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"{{twitter}}\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation position-relative text-right text-md-right\" role=\"navigation\">
                  <div class=\"container\">
                    {{ page.logo }}
                    <!-- Burger menu toggle btn -->
                    <div class=\"d-inline-block ml-md-0 ml-auto py-3\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle\"><span class=\"fas fa-bars\"></span></a></div>
                    <!-- End -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\">
                      {{ page.primary_menu }}
                      <ul class=\"login_text\">
                        {% if logged_in %}
                        <li> <a href=\"{{base_url}}/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                        {% else %}
                        <li><a href=\"{{base_url}}/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                        {% endif %}
                      </ul>
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                {{page.search_header_2}}
              </div>
              <!-- Admission Button -->
                <a type=\"button\" class=\"btn secondary-btn\" title=\"{{btn_title}}\" href=\"{{base_url}}{{btn_link}}\" >
                  {{btn_title}}
                </a>
              <!-- End OF Request button -->
            </div><!-- Row End -->
          </div> <!-- Container End --> 
                  <!-- Buger menu on mobile -->
        <div class=\"pt-site-mobile-menu\">
          <div class=\"pt-site-mobile-menu-header\">
            <div class=\"pt-site-mobile-menu-close mt-3\">
              <span class=\"js-menu-toggle\"><i class=\"far fa-window-close\"></i></span>
            </div>
          </div>
          <div class=\"pt-site-mobile-menu-body\">
            <div class=\"pt-site-mobile-menu-links\"></div>
            <div class=\"pt-site-mobile-submenu\">
              <ul class=\"login_text\">
                {% if logged_in %}
                <li> <a href=\"{{base_url}}/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                {% else %}
                <li><a href=\"{{base_url}}/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                {% endif %}
              </ul>
           <!-- Admission Button -->
              <a type=\"button\" class=\"btn secondary-btn\" title=\"{{btn_title}}\" href=\"{{base_url}}{{btn_link}}\" >
                {{btn_title}}
              </a>
            <!-- End OF Request button -->
            </div>
          </div>
        </div>
        <!-- end -->
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 2 -->
      <!-- Header Style 3 -->
      <div class=\"pt_header_type header-3 {{active_3}}\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:{{phone}}\"><i class=\"fas fa-phone-alt\"></i> {{phone}}</a></li>
                  <li><a href=\"mailto:{{email}}\"><i class=\"fa fa-envelope\"></i>{{mail}}</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  {% if logged_in %}
                  <li> <a href=\"{{base_url}}/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  {% else %}
                  <li><a href=\"{{base_url}}/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  {% endif %}
                  {% if page.multilingual_header_3 %}
                    <li>{{ page.multilingual_header_3 }}</li>
                  {% endif %}
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <div class=\"pt-table\">
                  <div class=\"pt-table-left pt_logo\">
                    {% if page.footer_logo %}
                      {{ page.footer_logo }}
                    {% else %}
                      <a class=\"navbar-brand\" href=\"/\" title=\"home\">
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
                  </div>
                  <div class=\"pt-table-left pt_search\">
                    {{page.search_header_3}}
                  </div>
                  <!-- Burger menu toggle btn -->
                    <div class=\"site-menu-toggle\"><a href=\"#\" class=\"js-menu-toggle\"><span class=\"fas fa-bars\"></span></a></div>
                  <!-- End -->
                </div>
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation position-relative text-right text-md-right\" role=\"navigation\">
                  <div class=\"container\">
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      {{ page.primary_menu }}
                    </div>        
                    <!-- End of Menus-->
                    <ul class=\"social_header\">
                      <li class=\"social_link\"><a href=\"{{facebook}}\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li class=\"social_link\"><a href=\"{{twitter}}\"><i class=\"fab fa-twitter\"></i></a></li>
                    </ul>
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
                  <!-- Buger menu on mobile -->
        <div class=\"pt-site-mobile-menu\">
          <div class=\"pt-site-mobile-menu-header\">
            <div class=\"pt-site-mobile-menu-close mt-3\">
              <span class=\"js-menu-toggle\"><i class=\"far fa-window-close\"></i></span>
            </div>
          </div>
          <div class=\"pt-site-mobile-menu-body\">
            <div class=\"pt-site-mobile-menu-links\"></div>
            <div class=\"pt-site-mobile-submenu\">
              <ul class=\"login_text\">
                <li class=\"social_link\"><a href=\"{{facebook}}\"><i class=\"fab fa-facebook-f\"></i></a></li>
                <li class=\"social_link\"><a href=\"{{twitter}}\"><i class=\"fab fa-twitter\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end -->
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 3 -->
      <!-- Header Style 4 -->
      <div class=\"pt_header_type header-4 {{active_4}}\">
        <!-- Top bar -->
        <div class=\"topbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_left my-auto\">
                <ul>
                  <li><a href=\"tel:{{phone}}\"><i class=\"fas fa-phone-alt\"></i> {{phone}}</a></li>
                  <li><a href=\"mailto:{{email}}\"><i class=\"fa fa-envelope\"></i>{{mail}}</a></li>
                </ul>
              </div>
              <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 topbar_right my-auto\">
                <ul>
                  {% if logged_in %}
                  <li> <a href=\"{{base_url}}/user/logout\"><i class=\"fa fa-user\"></i> Logout</a></li>
                  {% else %}
                  <li><a href=\"{{base_url}}/user\"><i class=\"fa fa-user\"></i> Login</a></li>
                  {% endif %}
                  {% if page.multilingual_header_4 %}
                    <li>{{ page.multilingual_header_4 }}</li>
                  {% endif %}
                  <li class=\"social_link\"><a href=\"{{facebook}}\"><i class=\"fab fa-facebook-f\"></i></a></li>
                  <li class=\"social_link\"><a href=\"{{twitter}}\"><i class=\"fab fa-twitter\"></i></a></li>
                </ul>
              </div>
            </div><!-- end row -->
          </div> <!-- end container -->
        </div>
        <!-- Top Bar End -->
        <!-- Main Header -->
        <header class=\"pt-site-navbar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"menu_bar\">
                <nav id=\"pt-navbar\" class=\"navbar navbar-expand-lg custom-navbar pt-site-navigation\">
                  <div class=\"container\">
                    {% if page.footer_logo %}
                      {{ page.footer_logo }}
                    {% else %}
                      <a class=\"navbar-brand\" href=\"/\" title=\"home\">
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
                    <!-- Mobile Menu Toggle Button -->
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler fas fa-bars\"></span>
                    </button>
                    <!-- end of mobile menu toggle button -->
                    <!-- menus -->
                    <div class=\"collapse navbar-collapse justify-content-end navbarsExampleDefault\" id=\"navbarsExampleDefault\">
                      {{ page.primary_menu }}
                    </div>        
                    <!-- End of Menus-->
                  </div><!-- End of Container-->
                </nav> <!-- End of Nav-->
              </div>
              <div class=\"search\">
                {{page.search_header_4}}
              </div>
            </div><!-- Row End -->
          </div> <!-- Container End --> 
        </header>
        <!-- Main Haeder End -->
      </div>
      <!-- End of Header Style 4 -->
    </div>
  </section>
  <!-- End of Navigation bar -->", "@university_pro/header/header.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\header\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
