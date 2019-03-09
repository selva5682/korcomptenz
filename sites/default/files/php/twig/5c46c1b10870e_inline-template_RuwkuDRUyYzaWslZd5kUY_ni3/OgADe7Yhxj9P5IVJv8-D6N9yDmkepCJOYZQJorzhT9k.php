<?php

/* {# inline_template_start #}{{ field_blog_banner }} 
<strong class="d-block py-2" >{{ title }}</strong>
{{ body }}
<a href="{{ path }}" class="btn-more ">Learn More</a> */
class __TwigTemplate_f681a1d65219920e5286a2f6202b991effde267c1b6aaf1fdcbeda8ba5d27b20 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_blog_banner"]) ? $context["field_blog_banner"] : null), "html", null, true));
        echo " 
<strong class=\"d-block py-2\" >";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</strong>
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
<a href=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\" class=\"btn-more \">Learn More</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_blog_banner }} 
<strong class=\"d-block py-2\" >{{ title }}</strong>
{{ body }}
<a href=\"{{ path }}\" class=\"btn-more \">Learn More</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{{ field_blog_banner }} 
<strong class=\"d-block py-2\" >{{ title }}</strong>
{{ body }}
<a href=\"{{ path }}\" class=\"btn-more \">Learn More</a>";
    }
}
