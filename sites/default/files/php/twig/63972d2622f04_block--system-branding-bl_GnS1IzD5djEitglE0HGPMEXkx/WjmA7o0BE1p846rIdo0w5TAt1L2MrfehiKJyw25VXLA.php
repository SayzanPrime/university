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

/* themes/custom/university_pro/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_36e5301244990835f3cab69e2d7198a47a51f5534baa78711778994bd0dbf85e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["front_page"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 17
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 17);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/university_pro/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "    <a href=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 20, $this->source), "html", null, true);
            echo " title=\"Home\" rel=\"home\" class=\"navbar-brand\">
      <img src=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), "html", null, true);
            echo "\" alt=\"Home\" class=\"img-fluid\">
    </a>
  ";
        } else {
            // line 24
            echo "    <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 24, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
      <g id=\"Group_211\" data-name=\"Group 211\" transform=\"translate(-970 -3686)\">
        <text id=\"University\" transform=\"translate(1256 3745)\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">University</tspan></text>
        <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
          <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
          <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
        </g>
      </g>
    </svg>
    </a>
  ";
        }
        // line 36
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 37
            echo "    <div class=\"site-branding__text\">
      ";
            // line 38
            if (($context["site_name"] ?? null)) {
                // line 39
                echo "        <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 39, $this->source), "html", null, true);
                echo "</h2>
      ";
            } else {
                // line 41
                echo "        <div class=\"site-branding__name\">
          <a class=\"navbar-brand\" href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 42, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
          <g id=\"Group_211\" data-name=\"Group 211\" transform=\"translate(-970 -3686)\">
            <text id=\"University\" transform=\"translate(1256 3745)\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">Universityy</tspan></text>
            <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
              <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
              <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
            </g>
          </g>
        </svg>
          </a>
        </div>
      ";
            }
            // line 55
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 56
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 56, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 58
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 58,  127 => 56,  124 => 55,  106 => 42,  103 => 41,  97 => 39,  95 => 38,  92 => 37,  89 => 36,  71 => 24,  65 => 21,  60 => 20,  57 => 19,  53 => 18,  48 => 1,  46 => 17,  44 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Bartik's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% set front_page = url('<front>')  %}
{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
  {% if site_logo %}
    <a href={{front_page}} title=\"Home\" rel=\"home\" class=\"navbar-brand\">
      <img src=\"{{ site_logo }}\" alt=\"Home\" class=\"img-fluid\">
    </a>
  {% else %}
    <a class=\"navbar-brand\" href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
      <g id=\"Group_211\" data-name=\"Group 211\" transform=\"translate(-970 -3686)\">
        <text id=\"University\" transform=\"translate(1256 3745)\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">University</tspan></text>
        <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
          <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
          <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
        </g>
      </g>
    </svg>
    </a>
  {% endif %}
  {% if site_name or site_slogan %}
    <div class=\"site-branding__text\">
      {% if site_name %}
        <h2>{{ site_name }}</h2>
      {% else %}
        <div class=\"site-branding__name\">
          <a class=\"navbar-brand\" href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"378.923\" height=\"72\" viewBox=\"0 0 378.923 72\">
          <g id=\"Group_211\" data-name=\"Group 211\" transform=\"translate(-970 -3686)\">
            <text id=\"University\" transform=\"translate(1256 3745)\" font-size=\"60\" font-family=\"Lato-Black, Lato\" font-weight=\"800\"><tspan x=\"-285.54\" y=\"0\">Universityy</tspan></text>
            <g id=\"Group_210\" data-name=\"Group 210\" transform=\"translate(-1066.779 3436.5)\">
              <path id=\"Path_30\" data-name=\"Path 30\" d=\"M14613,275v33h69.058l-12.043-33Z\" transform=\"translate(-12268.5 0)\" stroke-width=\"3\"/>
              <text id=\"Pro\" transform=\"translate(2359 298.5)\" fill=\"#fff\" font-size=\"20\" font-family=\"OpenSans-Bold, Open Sans\" font-weight=\"700\"><tspan x=\"0\" y=\"0\">Pro</tspan></text>
            </g>
          </g>
        </svg>
          </a>
        </div>
      {% endif %}
      {% if site_slogan %}
        <div class=\"site-branding__slogan\">{{ site_slogan }}</div>
      {% endif %}
    </div>
  {% endif %}
{% endblock %}
", "themes/custom/university_pro/templates/block/block--system-branding-block.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 19);
        static $filters = array("escape" => 20, "t" => 24);
        static $functions = array("url" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
