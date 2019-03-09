<?php

/* @korone/header.html.twig */
class __TwigTemplate_1ca29c69b275e8772a89c63e6b52d01e8eb220a1d936544c8db00a0ec17b5b15 extends Twig_Template
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
        $tags = array("if" => 15, "include" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 9
        echo "<!--Home Section-->
  ";
        // line 11
        echo "<div id=\"cookies_content_overlay\"></div>
<header>
\t<div class=\"row d-sm-none d-md-block d-none sub-nav\">
\t\t<div class=\"col-12\"> 
\t\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_highlighted_first", array())) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_highlighted_first", array()), "html", null, true));
            echo "
\t\t\t\t";
        }
        // line 17
        echo "\t\t
\t\t\t<div class=\"float-right d-none d-lg-block\">
\t\t\t\t";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_highlighted_second", array())) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_highlighted_second", array()), "html", null, true));
            echo "
\t\t\t\t";
        }
        // line 21
        echo "\t\t
\t\t\t</div>
\t\t</div>
\t</div>                  
    ";
        // line 25
        $this->loadTemplate("@korone/header-primary-menu.html.twig", "@korone/header.html.twig", 25)->display($context);
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "@korone/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  74 => 21,  69 => 20,  65 => 19,  61 => 17,  56 => 16,  52 => 15,  46 => 11,  43 => 9,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Korone's theme implementation to display a single page.
 *
 * Header file
 */
#}
<!--Home Section-->
  {# Header #}
<div id=\"cookies_content_overlay\"></div>
<header>
\t<div class=\"row d-sm-none d-md-block d-none sub-nav\">
\t\t<div class=\"col-12\"> 
\t\t\t\t{% if page.header_top_highlighted_first %}\t\t\t\t\t\t
\t\t\t\t\t{{ page.header_top_highlighted_first }}
\t\t\t\t{% endif %}\t\t
\t\t\t<div class=\"float-right d-none d-lg-block\">
\t\t\t\t{% if page.header_top_highlighted_second %}\t\t\t\t\t\t
\t\t\t\t\t{{ page.header_top_highlighted_second }}
\t\t\t\t{% endif %}\t\t
\t\t\t</div>
\t\t</div>
\t</div>                  
    {% include '@korone/header-primary-menu.html.twig' %}\t
\t";
    }
}
