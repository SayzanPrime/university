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

/* themes/custom/university_pro/templates/views/views-view-fields--news_events--block_1.html.twig */
class __TwigTemplate_bcbce540bb8e2f381640431f4423568fe0fc4f05f7326470706689329bfeb818 extends \Twig\Template
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
\t<a href=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
\t";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 3), "content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    </a>
\t<div class=\"card-body\">
\t\t<p><span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "<p>
\t\t<a href=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\"><h3>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h3></a>
\t\t<p>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
\t    <div class=\"pt-cover-button-row\">
\t  \t<a href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 10), "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\" class=\"primary-btn btn\">
\t\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nothing", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
\t\t</a>
\t  </div>
\t</div> 
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/views/views-view-fields--news_events--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  71 => 10,  66 => 8,  58 => 7,  54 => 6,  48 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" data-aos=\"fade-up\">
\t<a href=\"{{fields.view_node.content}}\" title=\"{{fields.title.content}}\">
\t{{fields.field_image.content}}
    </a>
\t<div class=\"card-body\">
\t\t<p><span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>{{fields.field_date.content}}<p>
\t\t<a href=\"{{fields.view_node.content}}\" title=\"{{fields.title.content}}\"><h3>{{fields.title.content}}</h3></a>
\t\t<p>{{fields.body.content}}</p>
\t    <div class=\"pt-cover-button-row\">
\t  \t<a href=\"{{fields.view_node.content}}\" class=\"primary-btn btn\">
\t\t\t{{fields.nothing.content}}
\t\t</a>
\t  </div>
\t</div> 
</div>", "themes/custom/university_pro/templates/views/views-view-fields--news_events--block_1.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\views\\views-view-fields--news_events--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
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
