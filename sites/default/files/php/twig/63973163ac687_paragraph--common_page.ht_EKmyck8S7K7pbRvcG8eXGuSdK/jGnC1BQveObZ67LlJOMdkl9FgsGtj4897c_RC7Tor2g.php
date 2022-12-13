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

/* themes/custom/university_pro/templates/paragraph/paragraph--common_page.html.twig */
class __TwigTemplate_e5d3b6480feaed032633650701246c0a extends \Twig\Template
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
        echo "<!-- Page Not Found / Access Denied -->
  <section id=\"access-denied\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 col-sm-12 col-xs-12 mx-auto text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 col-sm-12 col-xs-12 mx-auto\" data-aos=\"fade-up\">
              <div class=\"title-section\">
                 <h2>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</h2>
                 <h3>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h3>
              </div>
            </div>
            <div class=\"col-lg-12 col-md-10 col-sm-12 col-xs-12 mx-auto\" data-aos=\"fade-up\">
              <p>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
               <div class=\"btn-row mx-auto\">
                <a href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 16, $this->source), "html", null, true);
        echo "\" class=\"btn secondary-btn\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 16), 0, [], "any", false, false, true, 16)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 16, $this->source), "html", null, true);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Page Not Found / Access Denied End -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/paragraph/paragraph--common_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  60 => 14,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page Not Found / Access Denied -->
  <section id=\"access-denied\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 col-sm-12 col-xs-12 mx-auto text-center\">
          <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 col-sm-12 col-xs-12 mx-auto\" data-aos=\"fade-up\">
              <div class=\"title-section\">
                 <h2>{{content.field_title.0}}</h2>
                 <h3>{{content.field_subtitle.0}}</h3>
              </div>
            </div>
            <div class=\"col-lg-12 col-md-10 col-sm-12 col-xs-12 mx-auto\" data-aos=\"fade-up\">
              <p>{{content.field_content.0}}</p>
               <div class=\"btn-row mx-auto\">
                <a href=\"{{content.field_link.0['#url']}}\" class=\"btn secondary-btn\">{{content.field_link.0['#title']}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Page Not Found / Access Denied End -->
", "themes/custom/university_pro/templates/paragraph/paragraph--common_page.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\paragraph\\paragraph--common_page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
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
