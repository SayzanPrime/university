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

/* themes/custom/university_pro/templates/paragraph/paragraph--news_events.html.twig */
class __TwigTemplate_f0f50eea10e3c30d85fc95b925be2a01 extends \Twig\Template
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
        echo "<section id=\"news_events\" class=\"tour_news_events\">
\t<div class=\"container\">
\t    <div class=\"row title_row\">
\t\t\t<div class=\"col-md-6 left\" data-aos=\"fade-up\">
\t\t\t\t<h2>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 mt-auto right\" data-aos=\"fade-up\">
\t\t\t\t<a class=\"pt-action\" href=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 8, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 8, $this->source), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 9, $this->source), "html", null, true);
        echo " <i class=\"fa fa-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 blog_left\" data-aos=\"fade-up\">
\t\t\t\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_news_events_view1", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 blog_right\">
\t\t\t\t";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_news_events_view2", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--news_events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 15,  57 => 9,  51 => 8,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"news_events\" class=\"tour_news_events\">
\t<div class=\"container\">
\t    <div class=\"row title_row\">
\t\t\t<div class=\"col-md-6 left\" data-aos=\"fade-up\">
\t\t\t\t<h2>{{content.field_title.0}}</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 mt-auto right\" data-aos=\"fade-up\">
\t\t\t\t<a class=\"pt-action\" href=\"{{content.field_link.0['#url']}}\" title=\"{{content.field_link.0['#title']}}\">
\t\t\t\t\t{{content.field_link.0['#title']}} <i class=\"fa fa-angle-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 blog_left\" data-aos=\"fade-up\">
\t\t\t\t{{content.field_news_events_view1}}
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 blog_right\">
\t\t\t\t{{content.field_news_events_view2}}
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/university_pro/templates/paragraph/paragraph--news_events.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--news_events.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
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
