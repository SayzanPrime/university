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

/* themes/custom/university_pro/templates/user-login-form.html.twig */
class __TwigTemplate_d6f3a255988632b60be73a5a413b4990 extends \Twig\Template
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
        $context["base_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>");
        // line 2
        echo "<!-- Login -->
  <section id=\"login\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          <div class=\"login-form\">
            <h2>User Login</h2>
            <form>
              <div class=\"col-md-12 form-group\">
                ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
              </div>
              <div class=\"col-md-12 form-group\">
                ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pass", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
              </div>
              <div class=\"col-md-12 form-group req-pass\">
                <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 17, $this->source), "html", null, true);
        echo "user/password\" alt=\"Request new password via email\">Forgot password?</a>
              </div>
              <div class=\"login-button text-center\">
                ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
                ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
              </div>
            </form>
          </div>  
        </div>
      </div>    
    </div>
  </section>
<!-- Login End -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  70 => 20,  64 => 17,  58 => 14,  52 => 11,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set base_url = url('<front>')  %}
<!-- Login -->
  <section id=\"login\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-md-8 col-sm-9 col-xs-12 mx-auto\" data-aos=\"fade-up\">
          <div class=\"login-form\">
            <h2>User Login</h2>
            <form>
              <div class=\"col-md-12 form-group\">
                {{ form.name }}
              </div>
              <div class=\"col-md-12 form-group\">
                {{ form.pass }}
              </div>
              <div class=\"col-md-12 form-group req-pass\">
                <a href=\"{{ base_url }}user/password\" alt=\"Request new password via email\">Forgot password?</a>
              </div>
              <div class=\"login-button text-center\">
                {{ form.form_build_id }}
                {{ form.form_id }}
                {{ form.actions }}
              </div>
            </form>
          </div>  
        </div>
      </div>    
    </div>
  </section>
<!-- Login End -->
", "themes/custom/university_pro/templates/user-login-form.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\user-login-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 11);
        static $functions = array("url" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['url']
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
