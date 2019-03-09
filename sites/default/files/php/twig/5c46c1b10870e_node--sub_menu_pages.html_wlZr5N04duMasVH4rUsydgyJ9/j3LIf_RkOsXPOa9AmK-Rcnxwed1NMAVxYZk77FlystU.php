<?php

/* themes/custom/korone/templates/node--sub_menu_pages.html.twig */
class __TwigTemplate_2663e4b4e57a27ff614caa71e3ffe63d30ed56fcd5872f84e03fe104ff428cbe extends Twig_Template
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
        $tags = array("set" => 63, "if" => 76);
        $filters = array("clean_class" => 65, "field_value" => 91, "field_target_entity" => 94);
        $functions = array("file_url" => 94, "attach_library" => 108);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'field_value', 'field_target_entity'),
                array('file_url', 'attach_library')
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

        // line 63
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 65
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (( !$this->getAttribute(        // line 66
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 3 => ((        // line 67
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 4 => "image-bg", 5 => "page-title-2", 6 => "innerBanner");
        // line 74
        echo "
<!--Inner Banner-->
\t";
        // line 76
        if (((isset($context["url"]) ? $context["url"] : null) == "/small-midsize-business-solutions")) {
            // line 77
            echo "\t\t<section class=\"mapp-banner second_boxcontainer\">
\t\t\t<img src=\"/themes/custom/korone/images/small_midsize/ios-banner-bg.png\" alt=\"small midsize business solutions\" class=\"mapp-shite-overlay\" title=\"small midsize business solutions\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-xs-12 col-md-12 mapp-sbanner-txt\">
\t\t\t\t\t<div class=\"mapp\">
\t\t\t\t\t\t<h3>You Focus on your CORE, while we focus on your Technology needs </h3>\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<img src=\"/themes/custom/korone/images/small_midsize/small_med_business_banner01.png\" alt=\"small midsize business solutions\" class=\"hidden-xs animation-element slide-left\" width=\"60%\" title=\"small midsize business solutions\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h1 class=\"seo-h1-hidden\">Mobile App Development Service Company</h1>
\t\t</section>
\t";
        } else {
            // line 91
            echo "\t\t";
            if ($this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array()))) {
                // line 92
                echo "\t\t\t<section ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">
\t\t\t\t<div class=\"background-image-holder\">
\t\t\t\t<img class=\"background-image\" src=";
                // line 94
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->env->getExtension('twig_field_value')->getTargetEntity($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_img", array())), "uri", array()), "value", array()))), "html", null, true));
                echo " alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array())), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array())), "html", null, true));
                echo "\" /></div>
\t\t\t\t";
                // line 95
                if (((((((((((twig_in_filter("microsoft-dynamics-business-solutions", (isset($context["url"]) ? $context["url"] : null)) || twig_in_filter("microsoft-dynamics365", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-nav", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-gp", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-ax", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-crm", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-bi", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("e-commerce-interface-with-dynamics-ax-2009", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("leading-manufacturing-company", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("microsoft-dynamics-ax-support", (isset($context["url"]) ? $context["url"] : null))) || twig_in_filter("branch-medical-group", (isset($context["url"]) ? $context["url"] : null)))) {
                    // line 96
                    echo "\t\t\t\t\t<div class=\"bannerIocn\"><img src=\"themes/custom/korone/images/banner-logo.png\" alt=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array())), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array())), "html", null, true));
                    echo "\"/></div>
\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>";
                // line 99
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_title", array())), "html", null, true));
                echo "</h1>
\t\t\t\t\t<p>";
                // line 100
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_smp_banner_sub_title", array())), "html", null, true));
                echo "</p> \t 
\t\t\t\t </div>
\t\t\t</section>
\t\t";
            }
            // line 104
            echo "\t";
        }
        // line 105
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
  
  <!--Inner Banner End-->
  ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("korone/easyresponsivetabs"), "html", null, true));
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/node--sub_menu_pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 108,  114 => 105,  111 => 104,  104 => 100,  100 => 99,  97 => 98,  89 => 96,  87 => 95,  79 => 94,  73 => 92,  70 => 91,  54 => 77,  52 => 76,  48 => 74,  46 => 67,  45 => 66,  44 => 65,  43 => 63,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,   
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,    
\t'image-bg',
\t'page-title-2',
\t'innerBanner',
\t
  ]
%}

<!--Inner Banner-->
\t{% if url == '/small-midsize-business-solutions' %}
\t\t<section class=\"mapp-banner second_boxcontainer\">
\t\t\t<img src=\"/themes/custom/korone/images/small_midsize/ios-banner-bg.png\" alt=\"small midsize business solutions\" class=\"mapp-shite-overlay\" title=\"small midsize business solutions\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-xs-12 col-md-12 mapp-sbanner-txt\">
\t\t\t\t\t<div class=\"mapp\">
\t\t\t\t\t\t<h3>You Focus on your CORE, while we focus on your Technology needs </h3>\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<img src=\"/themes/custom/korone/images/small_midsize/small_med_business_banner01.png\" alt=\"small midsize business solutions\" class=\"hidden-xs animation-element slide-left\" width=\"60%\" title=\"small midsize business solutions\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h1 class=\"seo-h1-hidden\">Mobile App Development Service Company</h1>
\t\t</section>
\t{% else %}
\t\t{% if content.field_smp_banner_title|field_value %}
\t\t\t<section {{ attributes.addClass(classes) }}>
\t\t\t\t<div class=\"background-image-holder\">
\t\t\t\t<img class=\"background-image\" src={{ file_url(content.field_smp_banner_img|field_target_entity.uri.value) }} alt=\"{{ content.field_smp_banner_title|field_value }}\" title=\"{{ content.field_smp_banner_title|field_value }}\" /></div>
\t\t\t\t{% if 'microsoft-dynamics-business-solutions' in url or 'microsoft-dynamics365' in url or 'microsoft-dynamics-nav' in url or 'microsoft-dynamics-gp' in url or 'microsoft-dynamics-ax' in url or 'microsoft-dynamics-crm' in url or 'microsoft-dynamics-bi' in url or 'e-commerce-interface-with-dynamics-ax-2009' in url or 'leading-manufacturing-company' in url  or 'microsoft-dynamics-ax-support' in url  or 'branch-medical-group' in url%}
\t\t\t\t\t<div class=\"bannerIocn\"><img src=\"themes/custom/korone/images/banner-logo.png\" alt=\"{{ content.field_smp_banner_title|field_value }}\" title=\"{{ content.field_smp_banner_title|field_value }}\"/></div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1>{{ content.field_smp_banner_title|field_value }}</h1>
\t\t\t\t\t<p>{{ content.field_smp_banner_sub_title|field_value }}</p> \t 
\t\t\t\t </div>
\t\t\t</section>
\t\t{% endif %}
\t{% endif %}
  {{ content.body }}
  
  <!--Inner Banner End-->
  {{ attach_library('korone/easyresponsivetabs') }}
 ";
    }
}
