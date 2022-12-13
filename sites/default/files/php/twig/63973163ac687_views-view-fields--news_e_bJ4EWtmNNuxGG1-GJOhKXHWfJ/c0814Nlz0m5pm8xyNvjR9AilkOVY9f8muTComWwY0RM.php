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

/* themes/custom/university_pro/templates/views/views-view-fields--news_events--block_2.html.twig */
class __TwigTemplate_fbe6e97313a251f3d6d01f6ac2862a8d extends \Twig\Template
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
        echo "<div class=\"card\" data-aos=\"fade-up\">
\t<div class=\"row\">
\t    <div class=\"col-md-4 event_image\">
\t    \t<a href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 4), "content", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 4), "content", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
\t    \t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
\t    \t</a>
\t    </div>
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p><span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [], "any", false, false, true, 10), "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t<a href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\"><h3>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</h3></a>
\t\t\t\t<p>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</p>
\t\t\t  \t<a href=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" class=\"primary-btn btn\">
\t\t\t\t\t";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nothing", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/views/views-view-fields--news_events--block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  74 => 13,  70 => 12,  62 => 11,  58 => 10,  50 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" data-aos=\"fade-up\">
\t<div class=\"row\">
\t    <div class=\"col-md-4 event_image\">
\t    \t<a href=\"{{fields.view_node.content}}\" title=\"{{fields.title.content}}\">
\t    \t\t{{fields.field_image.content}}
\t    \t</a>
\t    </div>
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<p><span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>{{fields.field_date.content}}</p>
\t\t\t\t<a href=\"{{fields.view_node.content}}\" title=\"{{fields.title.content}}\"><h3>{{fields.title.content}}</h3></a>
\t\t\t\t<p>{{fields.body.content}}</p>
\t\t\t  \t<a href=\"{{fields.view_node.content}}\" class=\"primary-btn btn\">
\t\t\t\t\t{{fields.nothing.content}}
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "themes/custom/university_pro/templates/views/views-view-fields--news_events--block_2.html.twig", "C:\\xampp\\htdocs\\university\\themes\\custom\\university_pro\\templates\\views\\views-view-fields--news_events--block_2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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
