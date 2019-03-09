<?php

/* themes/custom/korone/templates/page--front.html.twig */
class __TwigTemplate_83374266ca51d64f814d4162a967973f57b0f54cc440557f44417a4c247b5868 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 5, "set" => 78);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if', 'set'),
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
        echo "<!--Header-->
  ";
        // line 2
        $this->loadTemplate("@korone/header-front.html.twig", "themes/custom/korone/templates/page--front.html.twig", 2)->display($context);
        // line 3
        echo "<!--Header End--> 
\t";
        // line 5
        echo "\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 6
            echo "\t\t\t<div id=\"home-slider-banner\" class=\"carousel slide home-slider\" data-ride=\"carousel\">
\t\t\t\t";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#home-slider-banner\" data-slide=\"prev\"> 
\t\t\t\t\t<span class=\"carousel-control-prev-icon\"></span> 
\t\t\t\t</a> 
\t\t\t\t<a class=\"carousel-control-next\" href=\"#home-slider-banner\" data-slide=\"next\"> 
\t\t\t\t\t<span class=\"carousel-control-next-icon\"></span> 
\t\t\t\t</a> 
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "\t";
        // line 17
        echo "</header>
";
        // line 19
        echo "<!--Home Section End-->
";
        // line 21
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array())) {
            // line 22
            echo "\t\t<section class=\"static-banner\">
\t\t\t";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 25
        echo "\t
";
        // line 27
        echo "
";
        // line 29
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 30
            echo "\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 33
        echo "\t
";
        // line 35
        echo "
";
        // line 37
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array())) {
            // line 38
            echo "\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top_highlighted", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 43
        echo "
";
        // line 45
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media_background_first", array())) {
            // line 46
            echo "\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media_background_first", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 51
        echo "
";
        // line 53
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media_background_second", array())) {
            // line 54
            echo "\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t<div class=\"container py-5\">
\t\t\t\t<div class=\"row py-5\">
\t\t\t\t\t<div class=\"col-12 carousel-inner\">
\t\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media_background_second", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img src=\"";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
            echo "/images/white-overlay.png\" width=\"100%\" alt=\"\"> 
\t\t</section>
\t";
        }
        // line 67
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_first", array())) {
            // line 68
            echo "\t\t<section class=\"consultation bg-white\">
\t\t  <div class=\"container py-5\">
\t\t\t  ";
            // line 70
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom_first", array()), "html", null, true));
            echo "\t
\t\t  </div>
\t\t</section>
\t";
        }
        // line 75
        echo "
";
        // line 77
        echo "\t";
        // line 78
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 79
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("content col-12 col-lg-6") : ("")), 1 => ((($this->getAttribute(        // line 80
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("content col-12 col-lg-8") : ("")), 2 => ((($this->getAttribute(        // line 81
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("content col-12 col-lg-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 82
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("content col-12 col-lg-12") : ("")));
        // line 84
        echo " 
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 88
            echo "\t\t\t\t<div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
            echo ">
\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t";
        }
        // line 96
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 97
            echo "\t\t\t\t<div class=\"col-12 col-xl-4 sidebar \">
\t\t\t\t\t";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 100
        echo "\t
\t\t\t";
        // line 101
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 102
            echo "\t\t\t\t<div class=\"col-12 col-xl-4 sidebar \">
\t\t\t\t\t<div class=\"col-12 bg-light\">
\t\t\t\t\t\t";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 107
        echo "\t
\t\t</div>
\t</div>
";
        // line 111
        echo "
";
        // line 112
        if ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_fourth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_full", array()))) {
            // line 113
            echo "\t<section class=\"tech-solutions\">
\t\t<div class=\"rocket\"> <img src=\"";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
            echo "/images/jet.png\"> </div>
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row pb-5\">
\t\t\t\t<div class=\"col-8\"> <span class=\"light-blue\" >KORCOMPTENZ</span>
\t\t\t\t\t<h3 class=\"text-white\"><span class=\"light\">Case Studies</span></h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t";
            // line 122
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_first", array())) {
                // line 123
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t";
                // line 124
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_first", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t
\t\t\t\t";
            // line 128
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_second", array())) {
                // line 129
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_second", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>\t
\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t
\t\t\t\t";
            // line 134
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_third", array())) {
                // line 135
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t";
                // line 136
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_third", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t
\t\t\t\t";
            // line 140
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_fourth", array())) {
                // line 141
                echo "\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t";
                // line 142
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_fourth", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 144
            echo "\t\t
\t\t\t</div>\t
\t\t\t";
            // line 146
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_full", array())) {
                // line 147
                echo "\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "case_studies_full", array()), "html", null, true));
                echo "
\t\t\t";
            }
            // line 148
            echo "\t\t\t
\t\t\t<div class=\"row py-3\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"/resources?types=All&category=66\" class=\"btn btn-primary  w-25\">More Case Studies</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        }
        // line 157
        echo "
";
        // line 158
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions_img", array()))) {
            // line 159
            echo "\t<section class=\"industries py-5\">
\t\t<div class=\"container py-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-7\"> <span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">Business </span> <strong>Solutions</strong> </h3>
\t\t\t\t</div>
\t\t\t\t";
            // line 165
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions", array())) {
                // line 166
                echo "\t\t\t\t\t<div class=\"col-12 col-lg-7 text-center mt-5\">
\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t";
                // line 168
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions", array()), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions_img", array())) {
                // line 173
                echo "\t\t\t\t\t<div class=\"col-12 col-lg-5 text-center mt-5\">
\t\t\t\t\t\t";
                // line 174
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "business_solutions_img", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 177
            echo "\t\t\t</div>
\t\t</div>
\t</section>
";
        }
        // line 180
        echo "\t

";
        // line 183
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "testimonials", array())) {
            // line 184
            echo "\t<section class=\"testimonials\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row py-4\">\t\t\t
\t\t\t\t";
            // line 187
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "testimonials", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t</div>
\t</section>
";
        }
        // line 191
        echo "\t
";
        // line 193
        echo "
";
        // line 195
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_testimonials", array())) {
            // line 196
            echo "\t\t<section class=\"testimonials-footer mt-5\">
\t\t\t";
            // line 197
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_testimonials", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 199
        echo "\t
";
        // line 201
        echo "
";
        // line 202
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "total_transformation_blog", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news_events", array()))) {
            // line 203
            echo "<section class=\"blogs py-5\">
\t<div class=\"container py-4\">
\t\t<div class=\"row\">
\t\t\t";
            // line 206
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "total_transformation_blog", array())) {
                // line 207
                echo "\t\t\t\t<div class=\"col-12 col-lg-7\">
\t\t\t\t\t<span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">Thought Leadership</h3>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t";
                // line 211
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "total_transformation_blog", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 215
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news_events", array())) {
                // line 216
                echo "\t\t\t\t<div class=\"col-12 col-lg-4 offset-lg-1 mt-5 mt-lg-0 \">
\t\t\t\t\t<span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">News & Events</h3>
\t\t\t\t\t";
                // line 219
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "news_events", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 222
            echo "\t\t</div>
\t</div>
</section>
";
        }
        // line 225
        echo "\t

";
        // line 227
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "microsoft_partner_logo", array())) {
            // line 228
            echo "\t<section class=\"ms-footer p-4\">
\t\t<div class=\"row\">
\t\t\t";
            // line 230
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "microsoft_partner_logo", array()), "html", null, true));
            echo "
\t\t</div>
\t</section>
";
        }
        // line 234
        echo "
";
        // line 235
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array())) {
            // line 236
            echo "\t<section class=\"ms-footer p-4\">
\t\t<div class=\"row\">
\t\t\t";
            // line 238
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array()), "html", null, true));
            echo "
\t\t</div>
\t</section>
";
        }
        // line 242
        echo "<!--Content-->
";
        // line 243
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
<!--footer Section-->
";
        // line 245
        $this->loadTemplate("@korone/footer-front.html.twig", "themes/custom/korone/templates/page--front.html.twig", 245)->display($context);
        // line 246
        echo "<!--footer Section end-->


";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 246,  511 => 245,  506 => 243,  503 => 242,  496 => 238,  492 => 236,  490 => 235,  487 => 234,  480 => 230,  476 => 228,  474 => 227,  470 => 225,  464 => 222,  458 => 219,  453 => 216,  450 => 215,  443 => 211,  437 => 207,  435 => 206,  430 => 203,  428 => 202,  425 => 201,  422 => 199,  416 => 197,  413 => 196,  410 => 195,  407 => 193,  404 => 191,  396 => 187,  391 => 184,  388 => 183,  384 => 180,  378 => 177,  372 => 174,  369 => 173,  366 => 172,  359 => 168,  355 => 166,  353 => 165,  345 => 159,  343 => 158,  340 => 157,  329 => 148,  323 => 147,  321 => 146,  317 => 144,  311 => 142,  308 => 141,  306 => 140,  303 => 139,  297 => 136,  294 => 135,  292 => 134,  289 => 133,  283 => 130,  280 => 129,  278 => 128,  275 => 127,  269 => 124,  266 => 123,  264 => 122,  253 => 114,  250 => 113,  248 => 112,  245 => 111,  240 => 107,  233 => 104,  229 => 102,  227 => 101,  224 => 100,  218 => 98,  215 => 97,  212 => 96,  204 => 91,  197 => 88,  195 => 87,  190 => 84,  188 => 82,  187 => 81,  186 => 80,  185 => 79,  184 => 78,  182 => 77,  179 => 75,  172 => 70,  168 => 68,  165 => 67,  159 => 62,  152 => 58,  146 => 54,  143 => 53,  140 => 51,  134 => 47,  131 => 46,  128 => 45,  125 => 43,  119 => 39,  116 => 38,  113 => 37,  110 => 35,  107 => 33,  101 => 31,  98 => 30,  95 => 29,  92 => 27,  89 => 25,  83 => 23,  80 => 22,  77 => 21,  74 => 19,  71 => 17,  69 => 16,  57 => 7,  54 => 6,  51 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<!--Header-->
  {% include '@korone/header-front.html.twig' %}
<!--Header End--> 
\t{# Banners #}
\t\t{% if page.banner %}
\t\t\t<div id=\"home-slider-banner\" class=\"carousel slide home-slider\" data-ride=\"carousel\">
\t\t\t\t{{ page.banner }}
\t\t\t\t<a class=\"carousel-control-prev\" href=\"#home-slider-banner\" data-slide=\"prev\"> 
\t\t\t\t\t<span class=\"carousel-control-prev-icon\"></span> 
\t\t\t\t</a> 
\t\t\t\t<a class=\"carousel-control-next\" href=\"#home-slider-banner\" data-slide=\"next\"> 
\t\t\t\t\t<span class=\"carousel-control-next-icon\"></span> 
\t\t\t\t</a> 
\t\t\t</div>
\t\t{% endif %}
\t{# Banners #}
</header>
{# Header #}
<!--Home Section End-->
{# Inner Page Banners #}
\t{% if page.inner_page_banner %}
\t\t<section class=\"static-banner\">
\t\t\t{{ page.inner_page_banner }}
\t\t</section>
\t{% endif %}\t
{# Inner Page Banners #}

{# Content Top #}
\t{% if page.content_top %}
\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t{{ page.content_top }}
\t\t</section>
\t{% endif %}\t
{# Content Top #}

{# Content Top Highlighted #}
\t{% if page.content_top_highlighted %}
\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t{{ page.content_top_highlighted }}
\t\t</section>
\t{% endif %}
{# Content Top Highlighted #}

{# Media background first #}
\t{% if page.media_background_first %}
\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t{{ page.media_background_first }}
\t\t</section>
\t{% endif %}
{# Media background first #}

{# Media background Second #}
\t{% if page.media_background_second %}
\t\t<section id=\"partners\" class=\"partner carousel slide \" data-ride=\"carousel\">
\t\t\t<div class=\"container py-5\">
\t\t\t\t<div class=\"row py-5\">
\t\t\t\t\t<div class=\"col-12 carousel-inner\">
\t\t\t\t\t\t{{ page.media_background_second }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img src=\"{{ base_path ~ directory }}/images/white-overlay.png\" width=\"100%\" alt=\"\"> 
\t\t</section>
\t{% endif %}
{# Media background Second #}
{# Content Bottom First #}
\t{% if page.content_bottom_first %}
\t\t<section class=\"consultation bg-white\">
\t\t  <div class=\"container py-5\">
\t\t\t  {{ page.content_bottom_first }}\t
\t\t  </div>
\t\t</section>
\t{% endif %}
{# Content Bottom First #}

{# Main Content and Sidebar #}
\t{%
\t\tset content_classes = [
\t\t  page.sidebar_first and page.sidebar_second ? 'content col-12 col-lg-6',
\t\t  page.sidebar_first and page.sidebar_second is empty ? 'content col-12 col-lg-8',
\t\t  page.sidebar_second and page.sidebar_first is empty ? 'content col-12 col-lg-8',
\t\t  page.sidebar_first is empty and page.sidebar_second is empty ? 'content col-12 col-lg-12'
\t\t]
\t%} 
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t{% if page.content %}
\t\t\t\t<div {{ content_attributes.addClass(content_classes) }}>
\t\t\t\t\t<section class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if page.sidebar_first %}
\t\t\t\t<div class=\"col-12 col-xl-4 sidebar \">
\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t\t{% if page.sidebar_second %}
\t\t\t\t<div class=\"col-12 col-xl-4 sidebar \">
\t\t\t\t\t<div class=\"col-12 bg-light\">
\t\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t</div>
\t</div>
{# Main Content and Sidebar #}

{% if page.case_studies_first or page.case_studies_second or page.case_studies_third or page.case_studies_fourth or page.case_studies_full %}
\t<section class=\"tech-solutions\">
\t\t<div class=\"rocket\"> <img src=\"{{ base_path ~ directory }}/images/jet.png\"> </div>
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row pb-5\">
\t\t\t\t<div class=\"col-8\"> <span class=\"light-blue\" >KORCOMPTENZ</span>
\t\t\t\t\t<h3 class=\"text-white\"><span class=\"light\">Case Studies</span></h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t{% if page.case_studies_first %}
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t{{ page.case_studies_first }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if page.case_studies_second %}
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t{{ page.case_studies_second }}
\t\t\t\t\t</div>\t
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if page.case_studies_third %}
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t{{ page.case_studies_third }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if page.case_studies_fourth %}
\t\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 tech-section mr-md-0 mr-lg-5\">
\t\t\t\t\t\t{{ page.case_studies_fourth }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}\t\t
\t\t\t</div>\t
\t\t\t{% if page.case_studies_full %}
\t\t\t\t{{ page.case_studies_full }}
\t\t\t{% endif %}\t\t\t
\t\t\t<div class=\"row py-3\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"/resources?types=All&category=66\" class=\"btn btn-primary  w-25\">More Case Studies</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endif %}

{% if page.business_solutions or page.business_solutions_img %}
\t<section class=\"industries py-5\">
\t\t<div class=\"container py-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-7\"> <span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">Business </span> <strong>Solutions</strong> </h3>
\t\t\t\t</div>
\t\t\t\t{% if page.business_solutions %}
\t\t\t\t\t<div class=\"col-12 col-lg-7 text-center mt-5\">
\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t{{ page.business_solutions }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.business_solutions_img %}
\t\t\t\t\t<div class=\"col-12 col-lg-5 text-center mt-5\">
\t\t\t\t\t\t{{ page.business_solutions_img }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</section>
{% endif %}\t

{# Testimonials #}
\t{% if page.testimonials %}
\t<section class=\"testimonials\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row py-4\">\t\t\t
\t\t\t\t{{ page.testimonials }}
\t\t\t</div>
\t\t</div>
\t</section>
{% endif %}\t
{# Testimonials #}

{# Inner Page Testimonials #}
\t{% if page.inner_page_testimonials %}
\t\t<section class=\"testimonials-footer mt-5\">
\t\t\t{{ page.inner_page_testimonials }}
\t\t</section>
\t{% endif %}\t
{# Inner Page Testimonials #}

{% if page.total_transformation_blog or page.news_events %}
<section class=\"blogs py-5\">
\t<div class=\"container py-4\">
\t\t<div class=\"row\">
\t\t\t{% if page.total_transformation_blog %}
\t\t\t\t<div class=\"col-12 col-lg-7\">
\t\t\t\t\t<span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">Thought Leadership</h3>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t{{ page.total_transformation_blog }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if page.news_events %}
\t\t\t\t<div class=\"col-12 col-lg-4 offset-lg-1 mt-5 mt-lg-0 \">
\t\t\t\t\t<span class=\"blue\">KORCOMPTENZ</span>
\t\t\t\t\t<h3><span class=\"light\">News & Events</h3>
\t\t\t\t\t{{ page.news_events }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</section>
{% endif %}\t

{% if page.microsoft_partner_logo %}
\t<section class=\"ms-footer p-4\">
\t\t<div class=\"row\">
\t\t\t{{ page.microsoft_partner_logo }}
\t\t</div>
\t</section>
{% endif %}

{% if page.footer_top_content %}
\t<section class=\"ms-footer p-4\">
\t\t<div class=\"row\">
\t\t\t{{ page.footer_top_content }}
\t\t</div>
\t</section>
{% endif %}
<!--Content-->
{{ page.content }}
<!--footer Section-->
{% include '@korone/footer-front.html.twig' %}
<!--footer Section end-->


";
    }
}
