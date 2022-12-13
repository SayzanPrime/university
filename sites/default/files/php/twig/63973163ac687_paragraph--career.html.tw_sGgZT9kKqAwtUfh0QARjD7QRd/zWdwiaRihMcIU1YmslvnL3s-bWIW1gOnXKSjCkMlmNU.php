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

/* themes/custom/university_pro/templates/paragraph/paragraph--career.html.twig */
class __TwigTemplate_43681f7423ce27e901d7fe3b090278e8 extends \Twig\Template
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
        echo "<section id=\"career_features\" class=\"tour_career_features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 my-auto\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"career_features_left\">
\t\t\t\t\t<h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
\t                <p>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"career_features_right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t   </div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--career.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"career_features\" class=\"tour_career_features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 my-auto\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"career_features_left\">
\t\t\t\t\t<h2>{{content.field_title.0}}</h2>
\t                <p>{{content.field_description.0}}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\" data-aos=\"fade-up\">
\t\t\t\t<div class=\"career_features_right\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{{content.field_feature}}
\t\t\t\t\t</div>
\t\t\t   </div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "themes/custom/university_pro/templates/paragraph/paragraph--career.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--career.html.twig");
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
