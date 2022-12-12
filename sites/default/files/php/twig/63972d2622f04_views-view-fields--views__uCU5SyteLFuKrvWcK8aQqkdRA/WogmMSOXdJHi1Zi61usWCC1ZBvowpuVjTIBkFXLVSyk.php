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

/* themes/custom/university_pro/templates/views-slide-show/views-view-fields--views_slideshow--block_1.html.twig */
class __TwigTemplate_648fe31ca50b7d699aa6df8089d57c05e437ec9489a7216bd728c4d3009b5237 extends \Twig\Template
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
        echo "
<div class=\"cycle-slideshow-slide slide-";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_type"] ?? null), 2, $this->source), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_background_image", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "');\">
\t<div class=\"overlay ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_position"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"content col-md-8\">
\t\t\t        <span class=\"tagline sliderwow ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "tagline", [], "any", false, false, true, 7), "animation", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" 
\t\t\t        \tdata-wow-duration=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "tagline", [], "any", false, false, true, 8), "duration", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "s\" 
\t\t\t        \tdata-wow-delay=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "tagline", [], "any", false, false, true, 9), "delay", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "s\">
\t\t\t\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_subtitle", [], "any", false, false, true, 10), "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t        <h2 class=\"sliderwow ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "title", [], "any", false, false, true, 12), "animation", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" 
\t\t\t        \tdata-wow-duration=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "title", [], "any", false, false, true, 13), "duration", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "s\" 
\t\t\t        \tdata-wow-delay=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "title", [], "any", false, false, true, 14), "delay", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "s\">
\t\t\t        \t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t\t        </h2>
\t\t\t        <p class=\"sliderwow ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "description", [], "any", false, false, true, 17), "animation", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" 
\t\t\t        \tdata-wow-duration=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "description", [], "any", false, false, true, 18), "duration", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "s\" 
\t\t\t        \tdata-wow-delay=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["animations"] ?? null), "description", [], "any", false, false, true, 19), "delay", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "s\">
\t\t\t\t\t\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_description", [], "any", false, false, true, 20), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/views-slide-show/views-view-fields--views_slideshow--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  97 => 19,  93 => 18,  89 => 17,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  48 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"cycle-slideshow-slide slide-{{menu_type}}\" style=\"background-image: url('{{ fields.field_background_image.content}}');\">
\t<div class=\"overlay {{content_position}}\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"content col-md-8\">
\t\t\t        <span class=\"tagline sliderwow {{animations.tagline.animation}}\" 
\t\t\t        \tdata-wow-duration=\"{{animations.tagline.duration}}s\" 
\t\t\t        \tdata-wow-delay=\"{{animations.tagline.delay}}s\">
\t\t\t\t\t\t{{ fields.field_subtitle.content}}
\t\t\t\t\t</span>
\t\t\t        <h2 class=\"sliderwow {{animations.title.animation}}\" 
\t\t\t        \tdata-wow-duration=\"{{animations.title.duration}}s\" 
\t\t\t        \tdata-wow-delay=\"{{animations.title.delay}}s\">
\t\t\t        \t{{ fields.title.content}}
\t\t\t        </h2>
\t\t\t        <p class=\"sliderwow {{animations.description.animation}}\" 
\t\t\t        \tdata-wow-duration=\"{{animations.description.duration}}s\" 
\t\t\t        \tdata-wow-delay=\"{{animations.description.delay}}s\">
\t\t\t\t\t\t{{ fields.field_description.content}}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "themes/custom/university_pro/templates/views-slide-show/views-view-fields--views_slideshow--block_1.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\views-slide-show\\views-view-fields--views_slideshow--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
