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

/* themes/custom/university_pro/templates/paragraph/paragraph--testimonial.html.twig */
class __TwigTemplate_ee84867811fc0f9e476c994cb4173ad3afee2333f7344ad5d017d9901287f93a extends \Twig\Template
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
        echo "<div class=\"item\" data-aos=\"fade-up\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"section-image\">
\t\t\t\t<img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 5), "uri", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "\"
\t\t \t  alt=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 6)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "alt", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" 
\t\t \t  title=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 7)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"section-content mx-auto\">
\t\t\t    <div class=\"testimonial-content\">
\t\t\t        <p class=\"description\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</p>
\t\t\t        <div class=\"subtext\"><p>- ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_name", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>
\t\t\t       </div>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"item\" data-aos=\"fade-up\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"section-image\">
\t\t\t\t<img src=\"{{ file_url(content.field_image['#items'].entity.uri.value)}}\"
\t\t \t  alt=\"{{ content.field_image['#items'].alt }}\" 
\t\t \t  title=\"{{ content.field_image['#items'].title }}\">
\t\t\t</div>
\t\t\t<div class=\"section-content mx-auto\">
\t\t\t    <div class=\"testimonial-content\">
\t\t\t        <p class=\"description\">{{content.field_description.0}}</p>
\t\t\t        <div class=\"subtext\"><p>- {{content.field_name.0}}</p>
\t\t\t       </div>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
    ", "themes/custom/university_pro/templates/paragraph/paragraph--testimonial.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--testimonial.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("file_url" => 5);

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
