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

/* themes/custom/university_pro/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_d777d07d5a2f68ee9137d7fca8aac60dc2515a709bf7d771769c2cd399122e5c extends \Twig\Template
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
        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            echo "<!-- Breadcrumb -->
<div id=\"breadcrumb\">
  <div class=\"row\">
    <div class=\"col-12\">
      <ul>
        <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "          <li class=\"links\">
            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 22
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 24
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </ul>
    </div>
  </div>
</div>

<!-- End of Breadcrumb -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  72 => 24,  66 => 22,  58 => 20,  56 => 19,  53 => 18,  49 => 17,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a breadcrumb trail.
 *
 * Available variables:
 * - breadcrumb: Breadcrumb trail items.
 */
#}
{% if breadcrumb %}
<!-- Breadcrumb -->
<div id=\"breadcrumb\">
  <div class=\"row\">
    <div class=\"col-12\">
      <ul>
        <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
        {% for item in breadcrumb %}
          <li class=\"links\">
            {% if item.url %}
              <a href=\"{{ item.url }}\">{{ item.text }}</a>
            {% else %}
              {{ item.text }}
            {% endif %}
          </li>
        {% endfor %}
      </ul>
    </div>
  </div>
</div>

<!-- End of Breadcrumb -->
{% endif %}
", "themes/custom/university_pro/templates/navigation/breadcrumb.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\navigation\\breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 17);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
