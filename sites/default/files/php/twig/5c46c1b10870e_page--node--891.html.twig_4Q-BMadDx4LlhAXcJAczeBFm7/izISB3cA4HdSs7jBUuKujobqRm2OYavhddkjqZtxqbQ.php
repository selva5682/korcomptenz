<?php

/* themes/custom/korone/templates/page--node--891.html.twig */
class __TwigTemplate_a01cde12c8f90b65a83a9ba9964cd4b4fba947e8593332c8753d26435ff2acc1 extends Twig_Template
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
        $tags = array("include" => 59, "if" => 164);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 59
        $this->loadTemplate("@korone/header.html.twig", "themes/custom/korone/templates/page--node--891.html.twig", 59)->display($context);
        echo " 
<!--Content-->
<div class=\"main-container innerpage\"> 
  <!--Inner Banner-->
  
  <section class=\"image-bg azure-bg-banner-new PatientJourneyBannerNew\">
\t<div class=\"PatientJourneyBannerNewIn\">
       <div class=\"PatientJourneyBannerRight\">
\t\t   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t   <h3>Are You Getting the Most out of Azure?</h3>
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <div class=\"carousel-caption\">
\t\t\t<h2 class=\"banner_headingsecond\">Rediscover <span title=\"Microsoft Dynamics\" class=\"span_heading\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Achieve the ROI faster than ever. </h3>
\t\t  </div>
      </div>

      <!--<div class=\"item\">
       <div class=\"carousel-caption\">
\t\t\t<h2>Manage <span title=\"Dynamics AX\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Maintenance module is a challenge with AX? Not anymore. Korcomptenz offer a complete maintenance suite for Ax customers</h3>
\t\t  </div>
      </div>-->
    
      <!--<div class=\"item\">
       <div class=\"carousel-caption\">
\t\t\t<h2>Monitor <span title=\"Dynamics 365\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Experience a tailor made add-ons for Ax with Korcomptenz ranging from IoT to Analytics</h3>
\t\t  </div>
      </div>-->
    </div>
  </div>
\t   </div>
\t\t
\t  <div class=\"bi-banner-form\">
     <h2>Sign up for a free Consultation</h2>
<div class=\"col-md-12\">
  <div>
    <div id=\"block-webform-4\" data-block-plugin-id=\"webform_block\" class=\"block block-webform block-webform-block\">
      <div class=\"content\">
      ";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
        echo "
    </div>
  </div>
  </div>
</div>
     </div>
\t\t
\t\t</div>
\t<div class=\"white-overlay\"><img alt=\"azure\" src=\"/themes/custom/korone/images/azure/wrapper-bg.png\"></div>
</section>
\t<section class=\"ban-img-azure\">
\t\t<div class=\"container animation-element slide-left\">
\t\t<div class=\"row m-0\">\t\t\t
\t\t\t<div class=\"col-xs-12 col-md-6 ms-partner\">
<h2 class=\" text-left\">Korcomptenz Azure Managed Services: What we do</h2>
<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Monitor your performance - Azure Cloud hosting</div>

<p>Are the right server configurations implemented for your applications? Are the required monitoring services enabled on all your servers and services?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Remain in compliance</div>

<p>Are your corporate IT standards implemented and audited properly on your Azure infrasctructure?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Keep your data safe and secure - Azure Support Services</div>

<p>Is your data being backed up and protected with the latest security practices and settings?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Optimize your cost and ROI</div>

<p>Are you getting the most out of your current IT investment? Are you paying extra for things that you do not need?</p>
</div>

\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 tabview\">
\t\t\t<img src=\"/themes/custom/korone/images/azure/tabview.png\" alt=\"Azure\" title=\"Azure\">
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t</section>
  
  
  <!--Inner Banner End-->
  ";
        // line 161
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
</div>
  <!-- thank ydou Modal -->
  ";
        // line 164
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array())) {
            // line 165
            echo "  <div class=\"container-fluid coldbl1\">
\t<div class=\"container\">
\t\t<div class=\"row form2\">
\t\t<div class=\"col-sm-12\"><h3 class=\"text-center\">SUGGESTED READS</h3></div>
\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"suggsld col-md-10\">
       \t\t\t ";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
    </div>    
  </div>
  ";
        }
        // line 178
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array())) {
            // line 179
            echo "  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        ";
            // line 182
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array()), "html", null, true));
            echo "
      </div>
    </div>
  </section>
  ";
        }
        // line 187
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array())) {
            // line 188
            echo " <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array()), "html", null, true));
            echo "      
    </div>
  </section> 
  ";
        }
        // line 194
        echo " ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array())) {
            // line 195
            echo " <section class=\"ProductBottom ServicesTxt\">
\t ";
            // line 196
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array()), "html", null, true));
            echo "
</section> \t 
  ";
        }
        // line 199
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 200
            echo "  <section class=\"blueband\">
  <div class=\"fullwidth \">
  ";
            // line 202
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
  </div>
  </section>
  ";
        }
        // line 206
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 207
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 209
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
        // line 213
        echo "</div>
<!--Content End-->
";
        // line 215
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page--node--891.html.twig", 215)->display($context);
        // line 216
        echo "<style type=\"text/css\">
.banner_headingsecond { font-size:55px;} .span_heading { display: inline-block !important; }
h1 { font-size:45px !important; font-weight: 700;} .red-mo { font-size:18px;} .KenticoFormBottom { display:none;}.node.node--type-sub-menu-pages.node--view-mode-full.image-bg.page-title-2.innerBanner {display: none;} .logoStyle a img { width: 23.5%; }
</style>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--node--891.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 216,  251 => 215,  247 => 213,  240 => 209,  236 => 207,  233 => 206,  226 => 202,  222 => 200,  219 => 199,  213 => 196,  210 => 195,  207 => 194,  200 => 190,  196 => 188,  193 => 187,  185 => 182,  180 => 179,  177 => 178,  168 => 172,  159 => 165,  157 => 164,  151 => 161,  93 => 106,  43 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see bartik_preprocess_page()
 * @see html.html.twig
 */
#}
{% include '@korone/header.html.twig' %} 
<!--Content-->
<div class=\"main-container innerpage\"> 
  <!--Inner Banner-->
  
  <section class=\"image-bg azure-bg-banner-new PatientJourneyBannerNew\">
\t<div class=\"PatientJourneyBannerNewIn\">
       <div class=\"PatientJourneyBannerRight\">
\t\t   <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t   <h3>Are You Getting the Most out of Azure?</h3>
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <div class=\"carousel-caption\">
\t\t\t<h2 class=\"banner_headingsecond\">Rediscover <span title=\"Microsoft Dynamics\" class=\"span_heading\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Achieve the ROI faster than ever. </h3>
\t\t  </div>
      </div>

      <!--<div class=\"item\">
       <div class=\"carousel-caption\">
\t\t\t<h2>Manage <span title=\"Dynamics AX\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Maintenance module is a challenge with AX? Not anymore. Korcomptenz offer a complete maintenance suite for Ax customers</h3>
\t\t  </div>
      </div>-->
    
      <!--<div class=\"item\">
       <div class=\"carousel-caption\">
\t\t\t<h2>Monitor <span title=\"Dynamics 365\">Microsoft Azure</span> with Korcomptenz </h2>
\t\t <h3>Experience a tailor made add-ons for Ax with Korcomptenz ranging from IoT to Analytics</h3>
\t\t  </div>
      </div>-->
    </div>
  </div>
\t   </div>
\t\t
\t  <div class=\"bi-banner-form\">
     <h2>Sign up for a free Consultation</h2>
<div class=\"col-md-12\">
  <div>
    <div id=\"block-webform-4\" data-block-plugin-id=\"webform_block\" class=\"block block-webform block-webform-block\">
      <div class=\"content\">
      {{ page.kentico_supercharged }}
    </div>
  </div>
  </div>
</div>
     </div>
\t\t
\t\t</div>
\t<div class=\"white-overlay\"><img alt=\"azure\" src=\"/themes/custom/korone/images/azure/wrapper-bg.png\"></div>
</section>
\t<section class=\"ban-img-azure\">
\t\t<div class=\"container animation-element slide-left\">
\t\t<div class=\"row m-0\">\t\t\t
\t\t\t<div class=\"col-xs-12 col-md-6 ms-partner\">
<h2 class=\" text-left\">Korcomptenz Azure Managed Services: What we do</h2>
<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Monitor your performance - Azure Cloud hosting</div>

<p>Are the right server configurations implemented for your applications? Are the required monitoring services enabled on all your servers and services?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Remain in compliance</div>

<p>Are your corporate IT standards implemented and audited properly on your Azure infrasctructure?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Keep your data safe and secure - Azure Support Services</div>

<p>Is your data being backed up and protected with the latest security practices and settings?</p>
</div>

<div class=\"col-xs-12 col-md-6 text-left\">

<div class=\"h4\">Optimize your cost and ROI</div>

<p>Are you getting the most out of your current IT investment? Are you paying extra for things that you do not need?</p>
</div>

\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 tabview\">
\t\t\t<img src=\"/themes/custom/korone/images/azure/tabview.png\" alt=\"Azure\" title=\"Azure\">
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t</section>
  
  
  <!--Inner Banner End-->
  {{ page.content }}
</div>
  <!-- thank ydou Modal -->
  {% if page.footer_total_transformation_blog %}
  <div class=\"container-fluid coldbl1\">
\t<div class=\"container\">
\t\t<div class=\"row form2\">
\t\t<div class=\"col-sm-12\"><h3 class=\"text-center\">SUGGESTED READS</h3></div>
\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"suggsld col-md-10\">
       \t\t\t {{ page.footer_total_transformation_blog }}
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
    </div>    
  </div>
  {% endif %}
  {% if page.footer_features %}
  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        {{ page.footer_features }}
      </div>
    </div>
  </section>
  {% endif %}
  {% if page.footer_video %}
 <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t {{ page.footer_video }}      
    </div>
  </section> 
  {% endif %}
 {% if page.footer_services %}
 <section class=\"ProductBottom ServicesTxt\">
\t {{ page.footer_services }}
</section> \t 
  {% endif %}
  {% if page.footer_first %}
  <section class=\"blueband\">
  <div class=\"fullwidth \">
  {{ page.footer_first }}
  </div>
  </section>
  {% endif %}
  {% if page.footer_second %}
  <section class=\"greybandOut\">
    <div class=\"container\">
\t{{ page.footer_second }}      
    </div>
  </section>
  {% endif %}
</div>
<!--Content End-->
{% include '@korone/footer.html.twig' %}
<style type=\"text/css\">
.banner_headingsecond { font-size:55px;} .span_heading { display: inline-block !important; }
h1 { font-size:45px !important; font-weight: 700;} .red-mo { font-size:18px;} .KenticoFormBottom { display:none;}.node.node--type-sub-menu-pages.node--view-mode-full.image-bg.page-title-2.innerBanner {display: none;} .logoStyle a img { width: 23.5%; }
</style>
";
    }
}
