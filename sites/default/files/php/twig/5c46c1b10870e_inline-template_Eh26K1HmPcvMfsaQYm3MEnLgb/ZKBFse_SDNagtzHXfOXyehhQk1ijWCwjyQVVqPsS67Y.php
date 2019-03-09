<?php

/* {# inline_template_start #}{% if field_media_banner_link %}
{{ field_media_banner_link }}
{% endif %} */
class __TwigTemplate_c06e6400a24aa2166975e884ddc5da50c27ae8764495ad3834ed3679adf0dea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        if ((isset($context["field_media_banner_link"]) ? $context["field_media_banner_link"] : null)) {
            // line 2
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_media_banner_link"]) ? $context["field_media_banner_link"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% if field_media_banner_link %}
{{ field_media_banner_link }}
{% endif %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 2,  45 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{% if field_media_banner_link %}
{{ field_media_banner_link }}
{% endif %}";
    }
}
