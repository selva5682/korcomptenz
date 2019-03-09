<?php

/* themes/custom/korone/templates/page.html.twig */
class __TwigTemplate_b1a1e6c447d81070a3b20660ac3aadaead239063175284c1465e7968cb6cd0ed extends Twig_Template
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
        $tags = array("include" => 59, "if" => 64, "set" => 87);
        $filters = array();
        $functions = array("path" => 87);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if', 'set'),
                array(),
                array('path')
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
        $this->loadTemplate("@korone/header.html.twig", "themes/custom/korone/templates/page.html.twig", 59)->display($context);
        echo " 



<div class=\"main-container innerpage\">
\t";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array())) {
            // line 65
            echo "\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array()), "html", null, true));
            echo "
\t";
        }
        // line 67
        echo "\t";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
 
  <!-- thank ydou Modal -->
  ";
        // line 70
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array())) {
            // line 71
            echo "  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array()), "html", null, true));
            echo "
      </div>
    </div>
    
  </section>
  ";
        }
        // line 80
        echo "  
  \t";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array())) {
            // line 82
            echo "    
  <section class=\"responsiveContent responsiveTopOut KenticoInnerForm responsive_web\">
    <div class=\"container\">
<div class=\"clearfix\">
 <div class=\"col-md-6\">
 ";
            // line 87
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 88
            if ((is_string($__internal_4a1f6df5cbad3c96dd7c122516bfe187bb30a75ce5c8470d8353c75ea28fad85 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_fbc23e5503b18aade2c6519bb12df463430bcb28eed3682b5a2941beb0d56b90 = "/email-marketing-digital-messaging") && ('' === $__internal_fbc23e5503b18aade2c6519bb12df463430bcb28eed3682b5a2941beb0d56b90 || 0 === strpos($__internal_4a1f6df5cbad3c96dd7c122516bfe187bb30a75ce5c8470d8353c75ea28fad85, $__internal_fbc23e5503b18aade2c6519bb12df463430bcb28eed3682b5a2941beb0d56b90)))) {
                // line 89
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t";
            } elseif ((is_string($__internal_c591c01e933047624b99c1bedbad139c632b5de782959007cf5e2c72cb37b804 =             // line 91
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_e11159a1014cbc47dc9e79efa2c552090835f9d82f0f9701468d67ad64572492 = "/engagement-intelligence") && ('' === $__internal_e11159a1014cbc47dc9e79efa2c552090835f9d82f0f9701468d67ad64572492 || 0 === strpos($__internal_c591c01e933047624b99c1bedbad139c632b5de782959007cf5e2c72cb37b804, $__internal_e11159a1014cbc47dc9e79efa2c552090835f9d82f0f9701468d67ad64572492)))) {
                // line 92
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t\t";
            } elseif ((is_string($__internal_e754c930baae169fa2f13b81d597f957e5836ce262f8a66c9b54de9694931b5f =             // line 94
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_8039cba254d1fd42a2f55332d5e0171e4024ffcbe3ea454adbe7197efc0142d5 = "/staff-augmentation") && ('' === $__internal_8039cba254d1fd42a2f55332d5e0171e4024ffcbe3ea454adbe7197efc0142d5 || 0 === strpos($__internal_e754c930baae169fa2f13b81d597f957e5836ce262f8a66c9b54de9694931b5f, $__internal_8039cba254d1fd42a2f55332d5e0171e4024ffcbe3ea454adbe7197efc0142d5)))) {
                // line 95
                echo "   \t\t<h2>Need Help in Staff Augmentation?</h2>
\t\tDownload our presentation to Know more about our Staffing augmentation services that ensures your project success.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_5947cbc1ca6d186faa4d2ad503b73d420ceb7ec4778436ca9066dd250067b3bb =             // line 98
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_0710fd166096fd649f009604d4bace34a460ee4c831e157d899b4e32b35ecf90 = "/microsoft-dynamics-bi") && ('' === $__internal_0710fd166096fd649f009604d4bace34a460ee4c831e157d899b4e32b35ecf90 || 0 === strpos($__internal_5947cbc1ca6d186faa4d2ad503b73d420ceb7ec4778436ca9066dd250067b3bb, $__internal_0710fd166096fd649f009604d4bace34a460ee4c831e157d899b4e32b35ecf90)))) {
                // line 99
                echo "   \t\t<h2>Retailing Done Right <br>
with Microsoft Dynamics 365?</h2>
\t\tDownload our exclusive whitepaper  for complimentary information on Microsoft Dynamics 365  that helps map customer journey to engage and  enhance customer experience.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_b2dcfc3ec493912c5b64682831b536a973fd67c2495b3ba3fe0c48b56b944f9d =             // line 103
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_775b5eae9be08a3ac1299901b279ff0bd0d2cba06da541ecb9c01d53c51cbcbd = "/industries-served") && ('' === $__internal_775b5eae9be08a3ac1299901b279ff0bd0d2cba06da541ecb9c01d53c51cbcbd || 0 === strpos($__internal_b2dcfc3ec493912c5b64682831b536a973fd67c2495b3ba3fe0c48b56b944f9d, $__internal_775b5eae9be08a3ac1299901b279ff0bd0d2cba06da541ecb9c01d53c51cbcbd)))) {
                // line 104
                echo "   \t\t<h2>Download our eBook to learn More</h2>
\t\tAre your current legacy systems and applications failing to keep pace with your business growth?
        
        ";
            } elseif ((is_string($__internal_5de025fb96a8fe5d7df877083cf75e3632461635be0714ad996d38689e527080 =             // line 107
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_3003fbb91342d721e957135f178311273f56cd902cf924a04322fa4ff561d67e = "/hosting-on-azure") && ('' === $__internal_3003fbb91342d721e957135f178311273f56cd902cf924a04322fa4ff561d67e || 0 === strpos($__internal_5de025fb96a8fe5d7df877083cf75e3632461635be0714ad996d38689e527080, $__internal_3003fbb91342d721e957135f178311273f56cd902cf924a04322fa4ff561d67e)))) {
                // line 108
                echo "   \t\t<h2>Looking for Azure Managed Service Provider</h2>
\t\tWould you like to discuss and have a discovery call or talk about getting technical support, product or pricing information or  information other competitive  Cloud solutions? 
";
            } else {
                // line 111
                echo "   <h2>Need Help <br> Selecting the Ideal CMS? </h2>
  Download your exclusive whitepaper <br> for complimentary information on <br> choosing the ideal solution for<br> your next generation website.
";
            }
            // line 114
            echo "
 </div>
 ";
            // line 116
            if ((is_string($__internal_80577b6886295db1d25278a6ea47805030a3a965655efbf8adec38c1c7d0b6ee = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_0a2bc955d63ddfe4fd51a74d8426d1a6677299cc1114af629e137f0395f31eeb = "/industries-served") && ('' === $__internal_0a2bc955d63ddfe4fd51a74d8426d1a6677299cc1114af629e137f0395f31eeb || 0 === strpos($__internal_80577b6886295db1d25278a6ea47805030a3a965655efbf8adec38c1c7d0b6ee, $__internal_0a2bc955d63ddfe4fd51a74d8426d1a6677299cc1114af629e137f0395f31eeb)))) {
                // line 117
                echo " <div class=\"col-md-4 indu-serv\">
 
";
                // line 119
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "

";
            } else {
                // line 122
                echo " <div class=\"col-md-4 KenticoForm\">
 
";
                // line 124
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "
";
            }
            // line 126
            echo "</div>
 </div>      
<div class=\"KenticoFormBottom\">
<div class=\"KenticoBottomOut\"><div class=\"KenticoFormIcon\"><img src=\"/themes/custom/korone/images/Kentico-Images/Download-icon.png\" width=\"76\" height=\"76\"></div><p class=\"mt15 clrewt fnt-wht\">Don't need the whitepaper? <a href=\"/request-consultation\">You can still request<br> a consultation and receive a no-cost estimate.</a></p></div>
</div>
    </div>
  </section>
  ";
        }
        // line 134
        echo "  
  ";
        // line 135
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array())) {
            // line 136
            echo "  <section class=\"ken-guide-1\">
    <div class=\"container\"><div class=\"row\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
\t  
\t  ";
            // line 141
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 142
            echo "\t\t";
            if ((is_string($__internal_267d2ff53f30810823870cf5b036b9432b23a4092ccc0ce757509c2682aa1022 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_40a85effe314b7a1ca15ef5e1d057ce78d3b613d66859a131e8ba1431104affd = "/customer-journeys-marketing-automation") && ('' === $__internal_40a85effe314b7a1ca15ef5e1d057ce78d3b613d66859a131e8ba1431104affd || 0 === strpos($__internal_267d2ff53f30810823870cf5b036b9432b23a4092ccc0ce757509c2682aa1022, $__internal_40a85effe314b7a1ca15ef5e1d057ce78d3b613d66859a131e8ba1431104affd)))) {
                // line 143
                echo "        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 146
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_2f34e452d6796580270a5fb0021b694575177dbb123e67aed6ad111cace5f414 =             // line 148
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_4d9778002ec1c86f615252a508386c6247c8902177715b70205030bc9c8a58d3 = "/salesforce") && ('' === $__internal_4d9778002ec1c86f615252a508386c6247c8902177715b70205030bc9c8a58d3 || 0 === strpos($__internal_2f34e452d6796580270a5fb0021b694575177dbb123e67aed6ad111cace5f414, $__internal_4d9778002ec1c86f615252a508386c6247c8902177715b70205030bc9c8a58d3)))) {
                // line 149
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 152
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_17c95f86aec32a39c8719d9fd37939afcf5cf99943b60caa5a12b282b12a645c =             // line 154
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_59c64c8848f51a6a8403dbce85c86a996755cd312367fedc527249a703914a17 = "/salesforce-support") && ('' === $__internal_59c64c8848f51a6a8403dbce85c86a996755cd312367fedc527249a703914a17 || 0 === strpos($__internal_17c95f86aec32a39c8719d9fd37939afcf5cf99943b60caa5a12b282b12a645c, $__internal_59c64c8848f51a6a8403dbce85c86a996755cd312367fedc527249a703914a17)))) {
                // line 155
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 158
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_80218a9d5f8066f640929a669d8f3ef1cbfd983593d6108898b475da5574e41a =             // line 160
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_adb102e15b3cbe54fa02061a8a582ff033263947ee4f98cd34044ca0404f92e1 = "/salesforce-integration") && ('' === $__internal_adb102e15b3cbe54fa02061a8a582ff033263947ee4f98cd34044ca0404f92e1 || 0 === strpos($__internal_80218a9d5f8066f640929a669d8f3ef1cbfd983593d6108898b475da5574e41a, $__internal_adb102e15b3cbe54fa02061a8a582ff033263947ee4f98cd34044ca0404f92e1)))) {
                // line 161
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 164
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_fc56fe9d2878e257b96da6a0d03c380dffd5a367a760eb79a992f723a3d01f91 =             // line 166
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_4da9c684e2d7ebdba146083d17283241ed640e47e77137b40360fe3ac63f4d1e = "/salesforce-consulting") && ('' === $__internal_4da9c684e2d7ebdba146083d17283241ed640e47e77137b40360fe3ac63f4d1e || 0 === strpos($__internal_fc56fe9d2878e257b96da6a0d03c380dffd5a367a760eb79a992f723a3d01f91, $__internal_4da9c684e2d7ebdba146083d17283241ed640e47e77137b40360fe3ac63f4d1e)))) {
                // line 167
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 170
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } else {
                // line 173
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help selecting the ideal Content Management system?  </h3>
        <p>Download our whitepaper and understand the key factors in your decision-making process.</p>
        <div class=\"mb30\">
          ";
                // line 176
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            }
            // line 179
            echo "\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div></div>
  </section>
";
        }
        // line 184
        echo " 

  ";
        // line 186
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array())) {
            // line 187
            echo "  <div class=\"container-fluid coldbl1 mt40\">
\t<div class=\"container\">
\t\t<div class=\"row form2\">
\t\t<div class=\"col-sm-12\"><h3 class=\"text-center\">SUGGESTED READS</h3></div>
\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"suggsld col-md-10\">
       \t\t\t ";
            // line 194
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
    </div>    
  </div>
  ";
        }
        // line 200
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array())) {
            // line 201
            echo " <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t ";
            // line 203
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array()), "html", null, true));
            echo "      
    </div>
  </section> 
  ";
        }
        // line 207
        echo " 
 ";
        // line 208
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array())) {
            // line 209
            echo " <section class=\"ProductBottom ServicesTxt\">
\t ";
            // line 210
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array()), "html", null, true));
            echo "
</section> \t 
  ";
        }
        // line 213
        echo "  
  ";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 215
            echo "  <section class=\"blueband\">
  <div class=\"fullwidth \">
  ";
            // line 217
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
  </div>
  </section>
  ";
        }
        // line 221
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 222
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 224
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
        // line 228
        echo "</div>
<!--Content End-->
<!-- Salesforce Webform Start -->
";
        // line 231
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "salesforce_webform", array())) {
            // line 232
            echo "\t<section class=\"cp-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>Download our exclusive Agile Customer Journey whitepaper and learn how you can get started quickly, easily, and cost-effectively with our unique approach.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 form_align fvpm-white-box-01\">
\t\t\t\t";
            // line 238
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "salesforce_webform", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<style>
\t\t\t.form_align { text-align:left; } 
\t\t\t#edit-email {
\t\t\t\tpadding: 5px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 3px;
\t\t\t\tmargin-top: 10px;
\t\t\t}
\t\t\t#edit-name {
\t\t\t\tpadding: 5px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 3px;
\t\t\t\tmargin-top: 10px;
\t\t\t}
\t\t\t.js-form-required.form-required {
\t\t\t\tmargin-top: 10px;
\t\t\t}\t
\t\t\t#edit-submit {
\t\t\t\tbackground: #007ee2 !important;
\t\t\t\tcolor: #fff !important;
\t\t\t\twidth: 200px !important;
\t\t\t\tdisplay: inline-block;
\t\t\t\tpadding: 7px;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tfont-size: 20px;
\t\t\t\tfont-weight: 400;
\t\t\t\tline-height: 1.42857143;
\t\t\t\ttext-align: center;
\t\t\t\twhite-space: nowrap;
\t\t\t\tvertical-align: middle;
\t\t\t\tmargin-top: 15px;
\t\t\t\theight: auto;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t\t</style>\t
\t\t</div>
\t</section>\t
";
        }
        // line 279
        echo "<!-- Salesforce Webform End -->

";
        // line 281
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page.html.twig", 281)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 281,  413 => 279,  369 => 238,  361 => 232,  359 => 231,  354 => 228,  347 => 224,  343 => 222,  340 => 221,  333 => 217,  329 => 215,  327 => 214,  324 => 213,  318 => 210,  315 => 209,  313 => 208,  310 => 207,  303 => 203,  299 => 201,  296 => 200,  287 => 194,  278 => 187,  276 => 186,  272 => 184,  264 => 179,  258 => 176,  253 => 173,  247 => 170,  242 => 167,  240 => 166,  235 => 164,  230 => 161,  228 => 160,  223 => 158,  218 => 155,  216 => 154,  211 => 152,  206 => 149,  204 => 148,  199 => 146,  194 => 143,  191 => 142,  189 => 141,  182 => 136,  180 => 135,  177 => 134,  167 => 126,  162 => 124,  158 => 122,  152 => 119,  148 => 117,  146 => 116,  142 => 114,  137 => 111,  132 => 108,  130 => 107,  125 => 104,  123 => 103,  117 => 99,  115 => 98,  110 => 95,  108 => 94,  104 => 92,  102 => 91,  98 => 89,  96 => 88,  94 => 87,  87 => 82,  85 => 81,  82 => 80,  73 => 74,  68 => 71,  66 => 70,  59 => 67,  53 => 65,  51 => 64,  43 => 59,);
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



<div class=\"main-container innerpage\">
\t{% if page.inner_page_banner %}
\t\t{{ page.inner_page_banner }}
\t{% endif %}
\t{{ page.content }}
 
  <!-- thank ydou Modal -->
  {% if page.footer_features %}
  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        {{ page.footer_features }}
      </div>
    </div>
    
  </section>
  {% endif %}
  
  \t{% if page.kentico_supercharged %}
    
  <section class=\"responsiveContent responsiveTopOut KenticoInnerForm responsive_web\">
    <div class=\"container\">
<div class=\"clearfix\">
 <div class=\"col-md-6\">
 {% set uri = path('entity.node.canonical', {'node': node.id}) %}
{% if uri starts with '/email-marketing-digital-messaging' %}
   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t{% elseif uri starts with '/engagement-intelligence' %}
   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t\t{% elseif uri starts with '/staff-augmentation' %}
   \t\t<h2>Need Help in Staff Augmentation?</h2>
\t\tDownload our presentation to Know more about our Staffing augmentation services that ensures your project success.\t
\t\t
\t\t{% elseif uri starts with '/microsoft-dynamics-bi' %}
   \t\t<h2>Retailing Done Right <br>
with Microsoft Dynamics 365?</h2>
\t\tDownload our exclusive whitepaper  for complimentary information on Microsoft Dynamics 365  that helps map customer journey to engage and  enhance customer experience.\t
\t\t
\t\t{% elseif uri starts with '/industries-served' %}
   \t\t<h2>Download our eBook to learn More</h2>
\t\tAre your current legacy systems and applications failing to keep pace with your business growth?
        
        {% elseif uri starts with '/hosting-on-azure' %}
   \t\t<h2>Looking for Azure Managed Service Provider</h2>
\t\tWould you like to discuss and have a discovery call or talk about getting technical support, product or pricing information or  information other competitive  Cloud solutions? 
{% else %}
   <h2>Need Help <br> Selecting the Ideal CMS? </h2>
  Download your exclusive whitepaper <br> for complimentary information on <br> choosing the ideal solution for<br> your next generation website.
{% endif %}

 </div>
 {% if uri starts with '/industries-served' %}
 <div class=\"col-md-4 indu-serv\">
 
{{ page.kentico_supercharged }}

{% else %}
 <div class=\"col-md-4 KenticoForm\">
 
{{ page.kentico_supercharged }}
{% endif %}
</div>
 </div>      
<div class=\"KenticoFormBottom\">
<div class=\"KenticoBottomOut\"><div class=\"KenticoFormIcon\"><img src=\"/themes/custom/korone/images/Kentico-Images/Download-icon.png\" width=\"76\" height=\"76\"></div><p class=\"mt15 clrewt fnt-wht\">Don't need the whitepaper? <a href=\"/request-consultation\">You can still request<br> a consultation and receive a no-cost estimate.</a></p></div>
</div>
    </div>
  </section>
  {% endif %}
  
  {% if page.footer_simple_news_letter %}
  <section class=\"ken-guide-1\">
    <div class=\"container\"><div class=\"row\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
\t  
\t  {% set uri = path('entity.node.canonical', {'node': node.id}) %}
\t\t{% if uri starts with '/customer-journeys-marketing-automation' %}
        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% elseif uri starts with '/salesforce' %}
\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% elseif uri starts with '/salesforce-support' %}
\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% elseif uri starts with '/salesforce-integration' %}
\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% elseif uri starts with '/salesforce-consulting' %}
\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% else %}
\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help selecting the ideal Content Management system?  </h3>
        <p>Download our whitepaper and understand the key factors in your decision-making process.</p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t{% endif %}
\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div></div>
  </section>
{% endif %} 

  {% if page.footer_total_transformation_blog %}
  <div class=\"container-fluid coldbl1 mt40\">
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
<!-- Salesforce Webform Start -->
{% if page.salesforce_webform %}
\t<section class=\"cp-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>Download our exclusive Agile Customer Journey whitepaper and learn how you can get started quickly, easily, and cost-effectively with our unique approach.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 form_align fvpm-white-box-01\">
\t\t\t\t{{ page.salesforce_webform }}
\t\t\t</div>
\t\t\t<style>
\t\t\t.form_align { text-align:left; } 
\t\t\t#edit-email {
\t\t\t\tpadding: 5px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 3px;
\t\t\t\tmargin-top: 10px;
\t\t\t}
\t\t\t#edit-name {
\t\t\t\tpadding: 5px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 3px;
\t\t\t\tmargin-top: 10px;
\t\t\t}
\t\t\t.js-form-required.form-required {
\t\t\t\tmargin-top: 10px;
\t\t\t}\t
\t\t\t#edit-submit {
\t\t\t\tbackground: #007ee2 !important;
\t\t\t\tcolor: #fff !important;
\t\t\t\twidth: 200px !important;
\t\t\t\tdisplay: inline-block;
\t\t\t\tpadding: 7px;
\t\t\t\tmargin-bottom: 0;
\t\t\t\tfont-size: 20px;
\t\t\t\tfont-weight: 400;
\t\t\t\tline-height: 1.42857143;
\t\t\t\ttext-align: center;
\t\t\t\twhite-space: nowrap;
\t\t\t\tvertical-align: middle;
\t\t\t\tmargin-top: 15px;
\t\t\t\theight: auto;
\t\t\t\tborder: none;
\t\t\t\tborder-radius: 10px;
\t\t\t}
\t\t\t</style>\t
\t\t</div>
\t</section>\t
{% endif %}
<!-- Salesforce Webform End -->

{% include '@korone/footer.html.twig' %}";
    }
}
