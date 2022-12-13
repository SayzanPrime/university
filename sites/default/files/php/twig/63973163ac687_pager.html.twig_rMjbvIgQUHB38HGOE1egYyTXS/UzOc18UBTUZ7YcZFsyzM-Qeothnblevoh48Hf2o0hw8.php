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

/* themes/bootstrap_barrio/templates/navigation/pager.html.twig */
class __TwigTemplate_9c96df67a7eccd9ff41e198a43717845 extends \Twig\Template
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  <nav aria-label=\"Page navigation\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">
      ";
            // line 37
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 37)) {
                // line 38
                echo "        <li class=\"page-item\">
          <a href=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39), "href", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39), "attributes", [], "any", false, false, true, 39), 39, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span aria-hidden=\"true\">«</span>
            <span class=\"sr-only\">";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 41), "text", [], "any", true, true, true, 41)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 41), "text", [], "any", false, false, true, 41), 41, $this->source), t("First"))) : (t("First"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 45
            echo "      ";
            // line 46
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 46)) {
                // line 47
                echo "        <li class=\"page-item\">
          <a href=\"";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48), "href", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 48), "attributes", [], "any", false, false, true, 48), 48, $this->source), "href", "title", "rel"), "html", null, true);
                echo " class=\"page-link\">
            <span aria-hidden=\"true\">‹</span>
            <span class=\"sr-only\">";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 50), "text", [], "any", true, true, true, 50)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 50), "text", [], "any", false, false, true, 50), 50, $this->source), t("Previous"))) : (t("Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 54
            echo "      ";
            // line 55
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 55)) {
                // line 56
                echo "        <li class=\"page-item\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 58
            echo "      ";
            // line 59
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 59));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 60
                echo "        <li class=\"page-item ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? ("active") : ("")));
                echo "\">
          ";
                // line 61
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 62
                    echo "            <span class=\"page-link\">";
                    // line 63
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 63, $this->source), "html", null, true);
                    // line 64
                    echo "</span>
          ";
                } else {
                    // line 66
                    echo "            <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 66, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), 66, $this->source), "href", "title"), "html", null, true);
                    echo " class=\"page-link\">";
                    // line 67
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 67, $this->source), "html", null, true);
                    // line 68
                    echo "</a>
          ";
                }
                // line 70
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "      ";
            // line 73
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 73)) {
                // line 74
                echo "        <li class=\"page-item\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 76
            echo "      ";
            // line 77
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 77)) {
                // line 78
                echo "        <li class=\"pager__item--next\">
          <a href=\"";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79), "href", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79), "attributes", [], "any", false, false, true, 79), 79, $this->source), "href", "title", "rel"), "html", null, true);
                echo " class=\"page-link\">
            <span aria-hidden=\"true\">›</span>
            <span class=\"sr-only\">";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 81), "text", [], "any", true, true, true, 81)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 81), "text", [], "any", false, false, true, 81), 81, $this->source), t("Next"))) : (t("Next"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 85
            echo "      ";
            // line 86
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 86)) {
                // line 87
                echo "        <li class=\"page-item\">
          <a href=\"";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 88), "href", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 88), "attributes", [], "any", false, false, true, 88), 88, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span aria-hidden=\"true\">»</span>
            <span class=\"sr-only\">";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 90), "text", [], "any", true, true, true, 90)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 90), "text", [], "any", false, false, true, 90), 90, $this->source), t("Last"))) : (t("Last"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 94
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 94,  197 => 90,  188 => 88,  185 => 87,  182 => 86,  180 => 85,  173 => 81,  164 => 79,  161 => 78,  158 => 77,  156 => 76,  152 => 74,  149 => 73,  147 => 72,  140 => 70,  136 => 68,  134 => 67,  126 => 66,  122 => 64,  120 => 63,  118 => 62,  116 => 61,  111 => 60,  106 => 59,  104 => 58,  100 => 56,  97 => 55,  95 => 54,  88 => 50,  79 => 48,  76 => 47,  73 => 46,  71 => 45,  64 => 41,  55 => 39,  52 => 38,  49 => 37,  44 => 34,  41 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
  <nav aria-label=\"Page navigation\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pagination js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        <li class=\"page-item\">
          <a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }} class=\"page-link\">
            <span aria-hidden=\"true\">«</span>
            <span class=\"sr-only\">{{ items.first.text|default('First'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        <li class=\"page-item\">
          <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }} class=\"page-link\">
            <span aria-hidden=\"true\">‹</span>
            <span class=\"sr-only\">{{ items.previous.text|default('Previous'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"page-item\" role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        <li class=\"page-item {{ current == key ? 'active' : '' }}\">
          {% if current == key %}
            <span class=\"page-link\">
              {{- key -}}
            </span>
          {% else %}
            <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }} class=\"page-link\">
              {{- key -}}
            </a>
          {% endif %}
        </li>
      {% endfor %}
      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"page-item\" role=\"presentation\">&hellip;</li>
      {% endif %}
      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        <li class=\"pager__item--next\">
          <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }} class=\"page-link\">
            <span aria-hidden=\"true\">›</span>
            <span class=\"sr-only\">{{ items.next.text|default('Next'|t) }}</span>
          </a>
        </li>
      {% endif %}
      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        <li class=\"page-item\">
          <a href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }} class=\"page-link\">
            <span aria-hidden=\"true\">»</span>
            <span class=\"sr-only\">{{ items.last.text|default('Last'|t) }}</span>
          </a>
        </li>
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "themes/bootstrap_barrio/templates/navigation/pager.html.twig", "C:\\xampp\\htdocs\\university\\themes\\bootstrap_barrio\\templates\\navigation\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 32, "for" => 59);
        static $filters = array("t" => 34, "escape" => 39, "without" => 39, "default" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape', 'without', 'default'],
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