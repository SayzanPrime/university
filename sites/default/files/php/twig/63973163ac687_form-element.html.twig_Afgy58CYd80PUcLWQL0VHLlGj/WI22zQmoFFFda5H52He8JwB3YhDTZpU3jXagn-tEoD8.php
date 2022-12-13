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

/* themes/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_e2e1fe9595eab729cf07fc303450c396 extends \Twig\Template
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
        // line 47
        echo "
";
        // line 48
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 49
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 50
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-checkbox";
                // line 51
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 52
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 53
                echo "  ";
            } elseif ((($context["customtype"] ?? null) == "switch")) {
                // line 54
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-switch";
                // line 55
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 56
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 57
                echo "  ";
            } else {
                // line 58
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 59
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 60
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 61
                echo "  ";
            }
        }
        // line 63
        echo "
";
        // line 64
        if ((($context["type"] ?? null) == "radio")) {
            // line 65
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 66
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-radio";
                // line 67
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 68
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 69
                echo "  ";
            } else {
                // line 70
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 71
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 72
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 73
                echo "  ";
            }
        }
        // line 75
        echo "
";
        // line 77
        $context["classes"] = [0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 79
($context["type"] ?? null), 79, $this->source))), 2 => ((twig_in_filter(        // line 80
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 80, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 80, $this->source))))), 3 => ((twig_in_filter(        // line 81
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 82
($context["name"] ?? null), 82, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 83
($context["name"] ?? null), 83, $this->source))), 6 => ((!twig_in_filter(        // line 84
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 85
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 86
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 90
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 93
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 96
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 97
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
    ";
            // line 98
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 99
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 99, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 101
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101))) {
                // line 102
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo ">
        ";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 106
            echo "    ";
            if ((($context["label_display"] ?? null) == "before")) {
                // line 107
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 107), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 107)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
                echo ">
        ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 108, $this->source));
                echo "
      </label>
    ";
            }
            // line 111
            echo "    <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
            echo ">
    ";
            // line 112
            if ((($context["label_display"] ?? null) == "after")) {
                // line 113
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 113), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 113)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                echo ">
        ";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 114, $this->source));
                echo "
      </label>
    ";
            }
            // line 117
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 118
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 118, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 120
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 121
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 122, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 125
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 125))) {
                // line 126
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 126), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true);
                echo ">
        ";
                // line 127
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 130
            echo "  </div>
";
        } else {
            // line 132
            echo "  <fieldset";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "form-group"], "method", false, false, true, 132), 132, $this->source), "html", null, true);
            echo ">
    ";
            // line 133
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 134
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 134, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 136
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 137
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 137, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 139
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 139))) {
                // line 140
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo ">
        ";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 144
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 144, $this->source), "html", null, true);
            echo "
    ";
            // line 145
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 146
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 146, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 148
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 149
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 149, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 151
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 152
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 153
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 153, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 156
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 156))) {
                // line 157
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 157), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 157), 157, $this->source), "html", null, true);
                echo ">
        ";
                // line 158
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 161
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 161,  311 => 158,  306 => 157,  303 => 156,  297 => 153,  294 => 152,  291 => 151,  285 => 149,  282 => 148,  276 => 146,  274 => 145,  269 => 144,  263 => 141,  258 => 140,  255 => 139,  249 => 137,  246 => 136,  240 => 134,  238 => 133,  233 => 132,  229 => 130,  223 => 127,  218 => 126,  215 => 125,  209 => 122,  206 => 121,  203 => 120,  197 => 118,  194 => 117,  188 => 114,  183 => 113,  181 => 112,  176 => 111,  170 => 108,  165 => 107,  162 => 106,  156 => 103,  151 => 102,  148 => 101,  142 => 99,  140 => 98,  135 => 97,  133 => 96,  131 => 93,  130 => 90,  128 => 86,  127 => 85,  126 => 84,  125 => 83,  124 => 82,  123 => 81,  122 => 80,  121 => 79,  120 => 77,  117 => 75,  113 => 73,  110 => 72,  107 => 71,  104 => 70,  101 => 69,  98 => 68,  95 => 67,  92 => 66,  89 => 65,  87 => 64,  84 => 63,  80 => 61,  77 => 60,  74 => 59,  71 => 58,  68 => 57,  65 => 56,  62 => 55,  59 => 54,  56 => 53,  53 => 52,  50 => 51,  47 => 50,  44 => 49,  42 => 48,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}

{% if type == 'checkbox' %}
  {% if customtype == 'custom' %}
    {% set wrapperclass = \"custom-control custom-checkbox\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% elseif customtype == 'switch' %}
    {% set wrapperclass = \"custom-control custom-switch\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% else %}
    {% set wrapperclass = \"form-check\" %}
    {% set labelclass = \"form-check-label\" %}
    {% set inputclass = \"form-check-input\" %}
  {% endif %}
{% endif %}

{% if type == 'radio' %}
  {% if customtype == 'custom' %}
    {% set wrapperclass = \"custom-control custom-radio\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% else %}
    {% set wrapperclass = \"form-check\" %}
    {% set labelclass = \"form-check-label\" %}
    {% set inputclass = \"form-check-input\" %}
  {% endif %}
{% endif %}

{%
  set classes = [
    'js-form-item',
    'js-form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? type|clean_class : 'form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? wrapperclass,
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'disabled',
    errors ? 'has-error',
  ]
%}
{%
  set description_classes = [
    'description',
\t  'text-muted',
    description_display == 'invisible' ? 'sr-only',
  ]
%}
{% if type in ['checkbox', 'radio'] %}
  <div{{ attributes.addClass(classes) }}>
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {% if label_display == 'before' %}
      <label {{ attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    <input{{ input_attributes.addClass(inputclass) }}>
    {% if label_display == 'after' %}
      <label {{ attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% else %}
  <fieldset{{ attributes.addClass(classes, 'form-group') }}>
    {% if label_display in ['before', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if label_display == 'after' %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </fieldset>
{% endif %}
", "themes/bootstrap_barrio/templates/form/form-element.html.twig", "C:\\xampp\\htdocs\\university\\themes\\bootstrap_barrio\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 48, "set" => 50);
        static $filters = array("clean_class" => 79, "escape" => 97, "raw" => 108);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['clean_class', 'escape', 'raw'],
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
