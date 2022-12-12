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

/* themes/custom/university_pro/templates/paragraph/paragraph--alumni_testimonials.html.twig */
class __TwigTemplate_46f3128b2be5754aedee947a91ff5c2fa8b5f1d399ddbd6cc8bd44f08f5dfe56 extends \Twig\Template
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
        echo "<!-- Alumini Testimonial -->
<section id=\"alumini_testimonial\" class=\"tour_alumini_testimonial\">
  <div class=\"container-fluid\">
  \t<div class=\"row\">
  \t\t<div class=\"alumini_title\" data-aos=\"fade-up\"><h2>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2></div>
\t    <div class=\"testimonial-sec owl-carousel\" data-aos=\"fade-up\">
\t    \t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_testimonial", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
\t    </div> 
  \t</div>
  </div>
</section>
<!-- End of Alumini Testimonial -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--alumni_testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Alumini Testimonial -->
<section id=\"alumini_testimonial\" class=\"tour_alumini_testimonial\">
  <div class=\"container-fluid\">
  \t<div class=\"row\">
  \t\t<div class=\"alumini_title\" data-aos=\"fade-up\"><h2>{{content.field_title.0}}</h2></div>
\t    <div class=\"testimonial-sec owl-carousel\" data-aos=\"fade-up\">
\t    \t{{content.field_testimonial}}
\t    </div> 
  \t</div>
  </div>
</section>
<!-- End of Alumini Testimonial -->", "themes/custom/university_pro/templates/paragraph/paragraph--alumni_testimonials.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--alumni_testimonials.html.twig");
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
