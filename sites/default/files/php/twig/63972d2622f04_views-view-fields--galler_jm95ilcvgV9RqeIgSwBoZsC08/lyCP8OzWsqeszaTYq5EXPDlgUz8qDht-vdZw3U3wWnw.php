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

/* themes/custom/university_pro/templates/views/views-view-fields--gallery--block_1.html.twig */
class __TwigTemplate_f6c55fef2f8092d53f0f5c063e7ef5632e6da7410d9acaed05a382aa96b35072 extends \Twig\Template
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
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "counter", [], "any", false, false, true, 32), "content", [], "any", false, false, true, 32) == "1")) {
            // line 33
            echo " <li class=\"col-lg-6 col-md-12 col-sm-12 categories ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "counter", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">
    <div class=\"project-item\" data-aos=\"fade-up\">
      <a class=\"popup-youtube\" href=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_link", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\" class=\"project-popup\">
      <img src=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\">
      <div class=\"project-overlay\">
        <div class=\"project-info row\">
        \t<div class=\"col-md-10 col-8\">
        \t\t<h4>";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</h4>
        \t</div>
        \t<div class=\"col-md-2 col-4\">
        \t\t<i class=\"fas fa-play\"></i>
        \t</div>
        </div>
      </div>
      </a>
    </div>
  </li>

";
        } else {
            // line 52
            echo "
 <li class=\"col-lg-3 col-md-6 col-sm-12 categories category2 ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "counter", [], "any", false, false, true, 53), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">
    <div class=\"project-item\" data-aos=\"fade-up\">
      <a class=\"popup-image\" href=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 55), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\" class=\"project-popup\">
      <img src=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 56), "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 56), "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "\">
      <div class=\"project-overlay\">
        <div class=\"project-info row\">
        \t<div class=\"col-md-10 col-8\">
        \t\t<h4>";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 60), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</h4>
        \t</div>
        \t<div class=\"col-md-2 col-4\">
        \t\t<i class=\"fas fa-search-plus\"></i>
        \t</div>
        </div>
      </div>
      </a>
    </div>
  </li>

";
        }
        // line 72
        echo "

          


";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/views/views-view-fields--gallery--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 72,  96 => 60,  87 => 56,  83 => 55,  78 => 53,  75 => 52,  60 => 40,  51 => 36,  47 => 35,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}
{% if fields.counter.content == \"1\" %}
 <li class=\"col-lg-6 col-md-12 col-sm-12 categories {{fields.counter.content}}\">
    <div class=\"project-item\" data-aos=\"fade-up\">
      <a class=\"popup-youtube\" href=\"{{fields.field_link.content}}\" class=\"project-popup\">
      <img src=\"{{fields.field_image.content}}\" alt=\"{{fields.title.content}}\">
      <div class=\"project-overlay\">
        <div class=\"project-info row\">
        \t<div class=\"col-md-10 col-8\">
        \t\t<h4>{{fields.title.content}}</h4>
        \t</div>
        \t<div class=\"col-md-2 col-4\">
        \t\t<i class=\"fas fa-play\"></i>
        \t</div>
        </div>
      </div>
      </a>
    </div>
  </li>

{% else %}

 <li class=\"col-lg-3 col-md-6 col-sm-12 categories category2 {{fields.counter.content}}\">
    <div class=\"project-item\" data-aos=\"fade-up\">
      <a class=\"popup-image\" href=\"{{fields.field_image.content}}\" class=\"project-popup\">
      <img src=\"{{fields.field_image.content}}\" alt=\"{{fields.title.content}}\">
      <div class=\"project-overlay\">
        <div class=\"project-info row\">
        \t<div class=\"col-md-10 col-8\">
        \t\t<h4>{{fields.title.content}}</h4>
        \t</div>
        \t<div class=\"col-md-2 col-4\">
        \t\t<i class=\"fas fa-search-plus\"></i>
        \t</div>
        </div>
      </div>
      </a>
    </div>
  </li>

{% endif %}


          


", "themes/custom/university_pro/templates/views/views-view-fields--gallery--block_1.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\views\\views-view-fields--gallery--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
