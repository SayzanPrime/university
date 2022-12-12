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

/* themes/custom/university_pro/templates/paragraph/paragraph--about_university.html.twig */
class __TwigTemplate_8f1c56fca9ce591232969cbb4bbe83fcfc8262c72888e8a3bbc33f73e2ffcc57 extends \Twig\Template
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
        echo "<section id=\"about_university_cover\">
\t<div class=\"container\">
\t\t<div class=\"pt-cover-caption col-12 col-sm-12 col-md-12 col-lg-12\" data-aos=\"fade-up\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 cover_left\">
\t\t\t\t\t<h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<div class=\"btn-row\">
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 9, $this->source), "html", null, true);
        echo "\" class=\"primary-btn btn\">
\t\t\t\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 10, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 cover_right\">
\t\t\t\t\t<img src=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "entity", [], "any", false, false, true, 15), "uri", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 16)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null), "alt", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" 
\t\t\t\t\ttitle=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 17)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--about_university.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  71 => 16,  67 => 15,  59 => 10,  55 => 9,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about_university_cover\">
\t<div class=\"container\">
\t\t<div class=\"pt-cover-caption col-12 col-sm-12 col-md-12 col-lg-12\" data-aos=\"fade-up\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 cover_left\">
\t\t\t\t\t<h2>{{content.field_title.0}}</h2>
\t\t\t\t\t<p>{{content.field_content.0}}</p>
\t\t\t\t\t<div class=\"btn-row\">
\t\t\t\t\t\t<a href=\"{{content.field_link.0['#url']}}\" class=\"primary-btn btn\">
\t\t\t\t\t\t{{content.field_link.0['#title']}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5 cover_right\">
\t\t\t\t\t<img src=\"{{ file_url(content.field_image['#items'].entity.uri.value)}}\"
\t\t\t\t\talt=\"{{ content.field_image['#items'].alt }}\" 
\t\t\t\t\ttitle=\"{{ content.field_image['#items'].title }}\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/university_pro/templates/paragraph/paragraph--about_university.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--about_university.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array("file_url" => 15);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
