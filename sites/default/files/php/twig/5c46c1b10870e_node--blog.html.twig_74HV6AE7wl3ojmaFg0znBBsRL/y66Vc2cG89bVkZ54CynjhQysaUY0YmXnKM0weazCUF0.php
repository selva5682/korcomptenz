<?php

/* themes/custom/korone/templates/node--blog.html.twig */
class __TwigTemplate_b1c30649c553facd65906c8ee7325113c5856f7fe2e003f31363a1f116b70a9a extends Twig_Template
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
        $tags = array("set" => 67, "if" => 79);
        $filters = array("field_target_entity" => 64, "field_value" => 66, "date" => 67);
        $functions = array("file_url" => 64);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('field_target_entity', 'field_value', 'date'),
                array('file_url')
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

        // line 62
        echo "<!--Inner Banner-->
<section class=\"image-bg   page-title-2  innerBanner\">
<div class=\"background-image-holder\"><img alt=\"Background Image\" class=\"background-image\" src=";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->env->getExtension('twig_field_value')->getTargetEntity($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_default_banner", array())), "uri", array()), "value", array()))), "html", null, true));
        echo " /></div>
<div class=\"container\">
  <h1>";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_sub_title", array())), "html", null, true));
        echo "</h1>
  ";
        // line 67
        $context["blog_date"] = twig_date_format_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "getCreatedTime", array()), "F d, Y");
        // line 68
        echo "  <p><a href=\"/\" title=\"Korcomptenz\">Korcomptenz</a> - <a href=\"/blog\" title=\"Total Transformation Blog\">Total Transformation Blog</a> - ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_sub_title", array())), "html", null, true));
        echo "</p>
</div>
</section>
<!--Inner Banner End-->
  <section class=\"blogDetailsPage\">
\t<div class=\"container\">
\t<div class=\"date-2\"><span class=\"date-3\">Posted on </span> ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["blog_date"]) ? $context["blog_date"] : null), "html", null, true));
        echo " <!--<span class=\"date-3\"> by </span> --></div>
\t";
        // line 75
        ob_start();
        // line 76
        echo "     ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
";
        $context["conBody"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "\t
 ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
 ";
        // line 79
        if (($this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_tags", array())) != "")) {
            // line 80
            echo " <div class=\"name\" style=\"margin-bottom: 0px;\">
 \t<div class=\"col-sm-12 tags_links\">
\t\tTags: ";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_tags", array())), "html", null, true));
            echo "
\t</div>
 </div>
 ";
        }
        // line 86
        echo "   <div class=\"name\">
  <div class=\"col-sm-8\">
  ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_author", array())), "html", null, true));
        echo "
</div>
<div class=\"col-sm-4 mt50\">

</div>

  </div>
  <div class=\"shareThis\">
\t<h4><span>share This </span></h4>
\t<div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
\t<ul>
\t\t<li><a class=\"a2a_button_facebook\"></a></li>
\t\t<li><a class=\"a2a_button_twitter\"></a></li>
\t\t<li><a class=\"a2a_button_google_plus\"></a></li>
\t\t<li><a class=\"a2a_button_pinterest\"></a></li>
\t\t<li><a class=\"a2a_button_linkedin\"></a></li>
\t\t<li><a class=\"a2a_button_email\"></a></li>
\t</ul>
\t</div>  

</div>
  <!-- <div class=\"shareThis\">
 <h4><span>share This </span></h4>
 <ul>
 <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a></li>
 </ul>
 </div>  -->
  
<div class=\"blogDetailsBottom\">
\t";
        // line 122
        if ($this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_related_articles", array()))) {
            // line 123
            echo "\t<div class=\"relatedArticles\">
\t\t<div class=\"relatedArticlesTh\">
\t\t\t<h4><span>RELATED ARTICLES</span></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('twig_field_value')->getFieldValue($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_related_articles", array())), "html", null, true));
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 132
        echo "
<div class=\"comments\">
\t<div class=\"commentsTh\">
\t\t<h4><span>comments</span></h4> 
\t</div> 
\t";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_comments", array()), "html", null, true));
        echo " 
</div>
</div>
  
    </div>
\t</section>
\t";
        // line 143
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 144
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/node--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 146,  175 => 144,  173 => 143,  164 => 137,  157 => 132,  150 => 128,  143 => 123,  141 => 122,  104 => 88,  100 => 86,  93 => 82,  89 => 80,  87 => 79,  83 => 78,  80 => 77,  74 => 76,  72 => 75,  68 => 74,  58 => 68,  56 => 67,  52 => 66,  47 => 64,  43 => 62,);
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
<!--Inner Banner-->
<section class=\"image-bg   page-title-2  innerBanner\">
<div class=\"background-image-holder\"><img alt=\"Background Image\" class=\"background-image\" src={{ file_url(content.field_default_banner|field_target_entity.uri.value) }} /></div>
<div class=\"container\">
  <h1>{{ content.field_blog_sub_title|field_value }}</h1>
  {% set blog_date = node.getCreatedTime|date('F d, Y') %}
  <p><a href=\"/\" title=\"Korcomptenz\">Korcomptenz</a> - <a href=\"/blog\" title=\"Total Transformation Blog\">Total Transformation Blog</a> - {{ content.field_blog_sub_title|field_value }}</p>
</div>
</section>
<!--Inner Banner End-->
  <section class=\"blogDetailsPage\">
\t<div class=\"container\">
\t<div class=\"date-2\"><span class=\"date-3\">Posted on </span> {{ blog_date }} <!--<span class=\"date-3\"> by </span> --></div>
\t{% set conBody %}
     {{ content.body }}
{% endset %}\t
 {{ content.body }}
 {% if content.field_blog_tags|field_value !='' %}
 <div class=\"name\" style=\"margin-bottom: 0px;\">
 \t<div class=\"col-sm-12 tags_links\">
\t\tTags: {{ content.field_blog_tags|field_value }}
\t</div>
 </div>
 {% endif %}
   <div class=\"name\">
  <div class=\"col-sm-8\">
  {{ content.field_blog_author|field_value }}
</div>
<div class=\"col-sm-4 mt50\">

</div>

  </div>
  <div class=\"shareThis\">
\t<h4><span>share This </span></h4>
\t<div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
\t<ul>
\t\t<li><a class=\"a2a_button_facebook\"></a></li>
\t\t<li><a class=\"a2a_button_twitter\"></a></li>
\t\t<li><a class=\"a2a_button_google_plus\"></a></li>
\t\t<li><a class=\"a2a_button_pinterest\"></a></li>
\t\t<li><a class=\"a2a_button_linkedin\"></a></li>
\t\t<li><a class=\"a2a_button_email\"></a></li>
\t</ul>
\t</div>  

</div>
  <!-- <div class=\"shareThis\">
 <h4><span>share This </span></h4>
 <ul>
 <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
 <li><a href=\"#\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a></li>
 </ul>
 </div>  -->
  
<div class=\"blogDetailsBottom\">
\t{% if content.field_blog_related_articles|field_value %}
\t<div class=\"relatedArticles\">
\t\t<div class=\"relatedArticlesTh\">
\t\t\t<h4><span>RELATED ARTICLES</span></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t{{ content.field_blog_related_articles|field_value }}
\t\t</div>
\t</div>
\t{% endif %}

<div class=\"comments\">
\t<div class=\"commentsTh\">
\t\t<h4><span>comments</span></h4> 
\t</div> 
\t{{ content.field_blog_comments }} 
</div>
</div>
  
    </div>
\t</section>
\t{% if page.footer_second %}
  <section class=\"greybandOut\">
    <div class=\"container\">
\t{{ page.footer_second }}      
    </div>
  </section>
  {% endif %}";
    }
}
