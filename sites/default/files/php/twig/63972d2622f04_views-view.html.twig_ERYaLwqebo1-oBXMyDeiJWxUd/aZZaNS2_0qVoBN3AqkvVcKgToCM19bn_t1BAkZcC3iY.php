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

/* themes/custom/university_pro/templates/views/views-view.html.twig */
class __TwigTemplate_0ec4d43b31b67ce27e10e8667d7791de91d5bf891fb48283f58a41eea786635f extends \Twig\Template
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
        // line 34
        $context["classes"] = [0 => (($this->sandbox->ensureToStringAllowed(        // line 35
($context["id"] ?? null), 35, $this->source) . "-") . $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null), 35, $this->source)), 1 => ((        // line 36
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 36, $this->source))) : (""))];
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        if (($context["title"] ?? null)) {
            // line 42
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 42, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 44
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["header"] ?? null)) {
            // line 46
            echo "    <div class=\"view-header\">
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 47, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 50
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 51
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if (($context["rows"] ?? null)) {
            // line 57
            echo "    <div class=\"view-content\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 58, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 60
($context["empty"] ?? null)) {
            // line 61
            echo "    <div class=\"view-empty\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["pager"] ?? null)) {
            // line 67
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 67, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 69
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 70
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 71, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 75
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 75, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 77
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 78
            echo "    <div class=\"view-footer\">
      ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 79, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 83
            echo "    <div class=\"feed-icons\">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 84, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 87
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/university_pro/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 87,  162 => 84,  159 => 83,  156 => 82,  150 => 79,  147 => 78,  144 => 77,  138 => 75,  135 => 74,  129 => 71,  126 => 70,  123 => 69,  117 => 67,  115 => 66,  112 => 65,  106 => 62,  103 => 61,  101 => 60,  96 => 58,  93 => 57,  91 => 56,  88 => 55,  82 => 52,  79 => 51,  76 => 50,  70 => 47,  67 => 46,  65 => 45,  60 => 44,  54 => 42,  52 => 41,  48 => 40,  43 => 39,  41 => 36,  40 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    id ~ '-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if title %}
    {{ title }}
  {% endif %}
  {{ title_suffix }}
  {% if header %}
    <div class=\"view-header\">
      {{ header }}
    </div>
  {% endif %}
  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"view-content\">
      {{ rows }}
    </div>
  {% elseif empty %}
    <div class=\"view-empty\">
      {{ empty }}
    </div>
  {% endif %}

  {% if pager %}
    {{ pager }}
  {% endif %}
  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}
  {% if more %}
    {{ more }}
  {% endif %}
  {% if footer %}
    <div class=\"view-footer\">
      {{ footer }}
    </div>
  {% endif %}
  {% if feed_icons %}
    <div class=\"feed-icons\">
      {{ feed_icons }}
    </div>
  {% endif %}
</div>", "themes/custom/university_pro/templates/views/views-view.html.twig", "C:\\wamp64\\www\\university\\university\\themes\\custom\\university_pro\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 41);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
