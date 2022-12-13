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

/* themes/custom/university_pro/templates/paragraph/paragraph--gallery.html.twig */
class __TwigTemplate_79dbaabb5476459f5471678c9bccc8b6 extends \Twig\Template
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
        echo "<!-- Gallery -->
<section id=\"gallery\" class=\"tour_gallery\">
\t<div class=\"container\">
\t\t<div class=\"row title_row\">
\t\t\t<div class=\"col-md-6 col-6 left\" data-aos=\"fade-up\">
\t\t\t\t<h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-6 my-auto right\" data-aos=\"fade-up\">
\t\t\t\t<a class=\"pt-action\" href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 9, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 10, $this->source), "html", null, true);
        echo " <i class=\"fa fa-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div><!-- End of Gallery Title-->
\t\t<div class=\"gallery_grid\">
\t\t\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gallery_view", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t</div><!-- End of Gallery Grid -->
     </div><!-- End of Container -->
</section>
<!-- End of Gallery -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  56 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Gallery -->
<section id=\"gallery\" class=\"tour_gallery\">
\t<div class=\"container\">
\t\t<div class=\"row title_row\">
\t\t\t<div class=\"col-md-6 col-6 left\" data-aos=\"fade-up\">
\t\t\t\t<h2>{{content.field_title.0}}</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-6 my-auto right\" data-aos=\"fade-up\">
\t\t\t\t<a class=\"pt-action\" href=\"{{content.field_link.0['#url']}}\">
\t\t\t\t\t{{content.field_link.0['#title']}} <i class=\"fa fa-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div><!-- End of Gallery Title-->
\t\t<div class=\"gallery_grid\">
\t\t\t{{content.field_gallery_view}}
\t\t</div><!-- End of Gallery Grid -->
     </div><!-- End of Container -->
</section>
<!-- End of Gallery -->", "themes/custom/university_pro/templates/paragraph/paragraph--gallery.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--gallery.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
