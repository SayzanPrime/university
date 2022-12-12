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

/* themes/custom/university_pro/templates/paragraph/paragraph--university_video.html.twig */
class __TwigTemplate_7a0295462fe407310d6ab28141724d99e30484e925dff8410331e9236e6f8a4e extends \Twig\Template
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
        echo "<!-- University Video -->
<section id=\"university_video\" class=\"tour_university_video\" style=\"background-image: url(";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_image", [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
        echo ")\">
\t<div class=\"overlay\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 mx-auto\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"video_content galleryContainer\">
\t\t\t\t\t<h2>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h2>
\t                <p>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
\t                <a class=\"popup-youtube\" href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#url"] ?? null) : null), 10, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 10, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-play\"></i><span>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 11, $this->source), "html", null, true);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- End of row -->
\t</div><!-- End of container -->
</section>
<!-- End Of University Video -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--university_video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 10,  55 => 9,  51 => 8,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- University Video -->
<section id=\"university_video\" class=\"tour_university_video\" style=\"background-image: url({{ file_url(content.field_background_image['#items'].entity.uri.value)}})\">
\t<div class=\"overlay\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 mx-auto\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"video_content galleryContainer\">
\t\t\t\t\t<h2>{{content.field_title.0}}</h2>
\t                <p>{{content.field_description.0}}</p>
\t                <a class=\"popup-youtube\" href=\"{{content.field_link.0['#url']}}\" title=\"{{content.field_link.0['#title']}}\">
\t\t\t\t\t\t<i class=\"fas fa-play\"></i><span>{{content.field_link.0['#title']}}</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!-- End of row -->
\t</div><!-- End of container -->
</section>
<!-- End Of University Video -->", "themes/custom/university_pro/templates/paragraph/paragraph--university_video.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--university_video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array("file_url" => 2);

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
