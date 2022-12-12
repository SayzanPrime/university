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

/* themes/custom/university_pro/templates/navigation/menu--main.html.twig */
class __TwigTemplate_bea3985501a0d46bbc63dbd1fa97de892f63dc69718724f296055ee8731b4608 extends \Twig\Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 6, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 7
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "  ";
            $macros["menus"] = $this;
            // line 9
            echo "    ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 10
                echo "      <ul class=\"navbar-nav pt-site-menu js-clone-nav ml-auto\">
          ";
                // line 11
                if (($context["items"] ?? null)) {
                    // line 12
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 13
                        echo "              ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 13)) {
                            // line 14
                            echo "                ";
                            // line 15
                            $context["classes"] = [0 => "nav-link angle-down drop-toggle pt-nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                             // line 17
$context["item"], "in_active_trail", [], "any", false, false, true, 17)) ? ("active") : (""))];
                            // line 20
                            echo "                <li class=\"nav-item has-children dropdown\">
                  <a ";
                            // line 21
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 21), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                            echo " href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                            echo "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   ";
                            // line 22
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                            echo "
                  </a>
                  <ul class=\"dropdown-menu arrow-top menu_level_";
                            // line 24
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 24, $this->source), "html", null, true);
                            echo "\" aria-labelledby=\"navbarDropdown\">
                    ";
                            // line 25
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 25, $context, $this->getSourceContext()));
                            echo "
                  </ul>
                </li>
              ";
                        } else {
                            // line 29
                            echo "                ";
                            // line 30
                            $context["classes"] = [0 => "nav-link pt-nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                             // line 32
$context["item"], "in_active_trail", [], "any", false, false, true, 32)) ? ("active") : (""))];
                            // line 35
                            echo "                <li class=\"nav-item\">
                  <a ";
                            // line 36
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 36), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                            echo " href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                            echo "</a>
                </li>
              ";
                        }
                        // line 39
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "          ";
                }
                // line 41
                echo "        </ul>
    ";
            } else {
                // line 43
                echo "      ";
                if (($context["items"] ?? null)) {
                    // line 44
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 45
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45)) {
                            // line 46
                            echo "              <li class=\"has-children dropdown\">
              <a class=\"dropdown-item angle-right drop-toggle\" href=\"";
                            // line 47
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            echo "\" id=\"navbarDropdown-2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
                            // line 48
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                            echo "
              </a>
                    <ul class=\"dropdown-menu menu_level_";
                            // line 50
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 50, $this->source), "html", null, true);
                            echo "\" aria-labelledby=\"navbarDropdown-2\">
                      ";
                            // line 51
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 51, $context, $this->getSourceContext()));
                            echo "
                    </ul>
              </li>
            ";
                        } else {
                            // line 55
                            echo "            <li><a class=\"dropdown-item\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 57
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "      ";
                }
                // line 59
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  190 => 58,  184 => 57,  176 => 55,  169 => 51,  165 => 50,  160 => 48,  156 => 47,  153 => 46,  150 => 45,  145 => 44,  142 => 43,  138 => 41,  135 => 40,  129 => 39,  119 => 36,  116 => 35,  114 => 32,  113 => 30,  111 => 29,  104 => 25,  100 => 24,  95 => 22,  89 => 21,  86 => 20,  84 => 17,  83 => 15,  81 => 14,  78 => 13,  73 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  47 => 7,  41 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as menus %}
{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}
{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
    {% if menu_level == 0 %}
      <ul class=\"navbar-nav pt-site-menu js-clone-nav ml-auto\">
          {% if items %}
            {% for item in items %}
              {% if item.below %}
                {%
                    set classes = [
                      'nav-link angle-down drop-toggle pt-nav-link' ,
                      item.in_active_trail ? 'active',
                    ]
                  %}
                <li class=\"nav-item has-children dropdown\">
                  <a {{ item.attributes.addClass(classes)}} href=\"{{ item.url }}\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                   {{ item.title }}
                  </a>
                  <ul class=\"dropdown-menu arrow-top menu_level_{{menu_level}}\" aria-labelledby=\"navbarDropdown\">
                    {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                  </ul>
                </li>
              {% else %}
                {%
                    set classes = [
                      'nav-link pt-nav-link' ,
                      item.in_active_trail ? 'active',
                    ]
                  %}
                <li class=\"nav-item\">
                  <a {{ item.attributes.addClass(classes)}} href=\"{{ item.url }}\">{{ item.title }}</a>
                </li>
              {% endif %}
            {% endfor %}
          {% endif %}
        </ul>
    {% else %}
      {% if items %}
          {% for item in items %}
            {% if item.below %}
              <li class=\"has-children dropdown\">
              <a class=\"dropdown-item angle-right drop-toggle\" href=\"{{ item.url }}\" id=\"navbarDropdown-2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                {{ item.title }}
              </a>
                    <ul class=\"dropdown-menu menu_level_{{menu_level}}\" aria-labelledby=\"navbarDropdown-2\">
                      {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                    </ul>
              </li>
            {% else %}
            <li><a class=\"dropdown-item\" href=\"{{ item.url }}\">{{ item.title }}</a></li>
            {% endif %}
          {% endfor %}
      {% endif %}
    {% endif %}
{% endmacro %}", "themes/custom/university_pro/templates/navigation/menu--main.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "macro" => 7, "if" => 9, "for" => 12, "set" => 15);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
