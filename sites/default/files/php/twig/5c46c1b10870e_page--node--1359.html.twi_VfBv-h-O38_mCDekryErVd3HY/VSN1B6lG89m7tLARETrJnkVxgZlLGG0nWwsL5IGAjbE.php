<?php

/* themes/custom/korone/templates/page--node--1359.html.twig */
class __TwigTemplate_7aee7ee38cffdcec16a1481f78203ff1fda37f40f031c3808f5604bae2965a77 extends Twig_Template
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
        $tags = array("include" => 59, "if" => 62, "set" => 115);
        $filters = array();
        $functions = array("path" => 115);

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
        $this->loadTemplate("@korone/header.html.twig", "themes/custom/korone/templates/page--node--1359.html.twig", 59)->display($context);
        echo " 

<div class=\"main-container innerpage mapp\">
";
        // line 62
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array())) {
            // line 63
            echo "\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "inner_page_banner", array()), "html", null, true));
            echo "
";
        }
        // line 65
        echo "  
<div class=\"container p-md-2 p-lg-0\">
\t<div class=\"row\">\t\t
\t\t<div class=\"col-12 col-lg-8\">
\t\t\t";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t\t</div>\t

\t\t<div class=\"d-none d-lg-block col-lg-4 mt-3\">
\t\t\t<h2 class=\"csc-firstHeader\">Important topics of interest </h2>
\t\t\t";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 75
            echo "\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t";
        }
        // line 76
        echo "\t
\t\t\t";
        // line 77
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 78
            echo "\t\t\t\t<div class=\"ebookTh pa-eb\">
\t\t\t\t\t<h3 class=\"csc-firstHeader\">Need help selecting the ideal Content Management system?</h3>
\t\t\t\t\t<p>Download our whitepaper and understand the key factors in your decision-making process.</p>
\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
\t\t\t\t\t<p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
\t\t\t\t</div>
\t\t\t";
        }
        // line 84
        echo "\t
\t\t</div>

\t\t\t
\t</div>
</div>\t
";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array())) {
            // line 91
            echo "\t<section class=\"second_boxcontainer smb-managed-it animation-element slide-left\">
\t\t<div class=\"container py-5\">
\t\t\t";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array()), "html", null, true));
            echo "
\t\t</div>
\t</section>
";
        }
        // line 97
        echo "  <!-- thank ydou Modal -->
  ";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array())) {
            // line 99
            echo "  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array()), "html", null, true));
            echo "
      </div>
    </div>
    
  </section>
  ";
        }
        // line 108
        echo "  
  \t";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array())) {
            // line 110
            echo "    
  <section class=\"responsiveContent responsiveTopOut KenticoInnerForm responsive_web\">
    <div class=\"container\">
<div class=\"clearfix\">
 <div class=\"col-md-6\">
 ";
            // line 115
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 116
            if ((is_string($__internal_fb301d4ac59f230ce2ae4ac6516883c5cf9c3c9b92337093c543a1de2bc1074d = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_6afe919b4ed6beb64323a87042e6b42c62269f64cf9b3e00c2c894e43e47efdb = "/email-marketing-digital-messaging") && ('' === $__internal_6afe919b4ed6beb64323a87042e6b42c62269f64cf9b3e00c2c894e43e47efdb || 0 === strpos($__internal_fb301d4ac59f230ce2ae4ac6516883c5cf9c3c9b92337093c543a1de2bc1074d, $__internal_6afe919b4ed6beb64323a87042e6b42c62269f64cf9b3e00c2c894e43e47efdb)))) {
                // line 117
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t";
            } elseif ((is_string($__internal_2d9ff250230842acbf3fd4d71c547b1661fcefc2b0d313815a1ecba1911625c8 =             // line 119
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_27f0936769712c76ee27ee130dffd050fd5e9eeaf17e2f88d5ffec994dd5c607 = "/engagement-intelligence") && ('' === $__internal_27f0936769712c76ee27ee130dffd050fd5e9eeaf17e2f88d5ffec994dd5c607 || 0 === strpos($__internal_2d9ff250230842acbf3fd4d71c547b1661fcefc2b0d313815a1ecba1911625c8, $__internal_27f0936769712c76ee27ee130dffd050fd5e9eeaf17e2f88d5ffec994dd5c607)))) {
                // line 120
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t\t";
            } elseif ((is_string($__internal_3a8dd3bcc98a2a28a17e8950ec649580b7a553b444948650f91f36ddacb25793 =             // line 122
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_c9ccb2a9224a38c411cce14e126f3df90f38e986866643cb550efc3ad3d1b01a = "/staff-augmentation") && ('' === $__internal_c9ccb2a9224a38c411cce14e126f3df90f38e986866643cb550efc3ad3d1b01a || 0 === strpos($__internal_3a8dd3bcc98a2a28a17e8950ec649580b7a553b444948650f91f36ddacb25793, $__internal_c9ccb2a9224a38c411cce14e126f3df90f38e986866643cb550efc3ad3d1b01a)))) {
                // line 123
                echo "   \t\t<h2>Need Help in Staff Augmentation?</h2>
\t\tDownload our presentation to Know more about our Staffing augmentation services that ensures your project success.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_347897670f4acd6b3bfa3a3ec00dc115ef7988482fb611f911fd14f3b0340977 =             // line 126
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_b6fcb0c2f3d12c23c4996ade78fe866e3ced7eec93a685171485c99f4f12cbae = "/microsoft-dynamics-bi") && ('' === $__internal_b6fcb0c2f3d12c23c4996ade78fe866e3ced7eec93a685171485c99f4f12cbae || 0 === strpos($__internal_347897670f4acd6b3bfa3a3ec00dc115ef7988482fb611f911fd14f3b0340977, $__internal_b6fcb0c2f3d12c23c4996ade78fe866e3ced7eec93a685171485c99f4f12cbae)))) {
                // line 127
                echo "   \t\t<h2>Retailing Done Right <br>
with Microsoft Dynamics 365?</h2>
\t\tDownload our exclusive whitepaper  for complimentary information on Microsoft Dynamics 365  that helps map customer journey to engage and  enhance customer experience.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_88a46f66a08cf8dac98c281e93deb4b78e29795578f3bed43cdc759562b7efd8 =             // line 131
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_1d1fca47549bcc61271509c2702187b7342659fc0536dffedcfbee6250583b33 = "/industries-served") && ('' === $__internal_1d1fca47549bcc61271509c2702187b7342659fc0536dffedcfbee6250583b33 || 0 === strpos($__internal_88a46f66a08cf8dac98c281e93deb4b78e29795578f3bed43cdc759562b7efd8, $__internal_1d1fca47549bcc61271509c2702187b7342659fc0536dffedcfbee6250583b33)))) {
                // line 132
                echo "   \t\t<h2>Download our eBook to learn More</h2>
\t\tAre your current legacy systems and applications failing to keep pace with your business growth?
        
        ";
            } elseif ((is_string($__internal_b5125a9b47ee560b7b459821f79ca64e88f64f0c417f341868268073dff0c1bb =             // line 135
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_2694a3200bd784c91c3ffc09b0985cd73371fe0cdcc925c3e1c6e1f4fc2af404 = "/hosting-on-azure") && ('' === $__internal_2694a3200bd784c91c3ffc09b0985cd73371fe0cdcc925c3e1c6e1f4fc2af404 || 0 === strpos($__internal_b5125a9b47ee560b7b459821f79ca64e88f64f0c417f341868268073dff0c1bb, $__internal_2694a3200bd784c91c3ffc09b0985cd73371fe0cdcc925c3e1c6e1f4fc2af404)))) {
                // line 136
                echo "   \t\t<h2>Looking for Azure Managed Service Provider</h2>
\t\tWould you like to discuss and have a discovery call or talk about getting technical support, product or pricing information or  information other competitive  Cloud solutions? 
";
            } else {
                // line 139
                echo "   <h2>Need Help <br> Selecting the Ideal CMS? </h2>
  Download your exclusive whitepaper <br> for complimentary information on <br> choosing the ideal solution for<br> your next generation website.
";
            }
            // line 142
            echo "
 </div>
 ";
            // line 144
            if ((is_string($__internal_6215b71c56e396165da32770558448c80050244c007d197eabd5d09c92721071 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_2cb11d1e5538576079e992636d008334c78decbc584f8aac0c0b3dc4b3819162 = "/industries-served") && ('' === $__internal_2cb11d1e5538576079e992636d008334c78decbc584f8aac0c0b3dc4b3819162 || 0 === strpos($__internal_6215b71c56e396165da32770558448c80050244c007d197eabd5d09c92721071, $__internal_2cb11d1e5538576079e992636d008334c78decbc584f8aac0c0b3dc4b3819162)))) {
                // line 145
                echo " <div class=\"col-md-4 indu-serv\">
 
";
                // line 147
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "

";
            } else {
                // line 150
                echo " <div class=\"col-md-4 KenticoForm\">
 
";
                // line 152
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "
";
            }
            // line 154
            echo "</div>
 </div>      
<div class=\"KenticoFormBottom\">
<div class=\"KenticoBottomOut\"><div class=\"KenticoFormIcon\"><img src=\"/themes/custom/korone/images/Kentico-Images/Download-icon.png\" width=\"76\" height=\"76\"></div><p class=\"mt15 clrewt fnt-wht\">Don't need the whitepaper? <a href=\"/request-consultation\">You can still request<br> a consultation and receive a no-cost estimate.</a></p></div>
</div>
    </div>
  </section>
  ";
        }
        // line 162
        echo "  
  ";
        // line 163
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array())) {
            // line 164
            echo "  <section class=\"ken-guide-1\">
    <div class=\"container\"><div class=\"row\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
\t  
\t  ";
            // line 169
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 170
            echo "\t\t";
            if ((is_string($__internal_49739e99b8f49e717ccc09bb97a080545d253973c9514b60230c58cda8d7079d = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_debaf828fee13f6a95758b8c247039373d9966125b23a5eb08461062b551fec0 = "/customer-journeys-marketing-automation") && ('' === $__internal_debaf828fee13f6a95758b8c247039373d9966125b23a5eb08461062b551fec0 || 0 === strpos($__internal_49739e99b8f49e717ccc09bb97a080545d253973c9514b60230c58cda8d7079d, $__internal_debaf828fee13f6a95758b8c247039373d9966125b23a5eb08461062b551fec0)))) {
                // line 171
                echo "        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 174
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_01db69865ef597e12419495ad8e17596f2e4be0a2de52d1b0d1bfdf8642bc499 =             // line 176
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_7deffa316070af4885574a5e6a58289753b5377295cc179f9e9d1f3624c07188 = "/salesforce") && ('' === $__internal_7deffa316070af4885574a5e6a58289753b5377295cc179f9e9d1f3624c07188 || 0 === strpos($__internal_01db69865ef597e12419495ad8e17596f2e4be0a2de52d1b0d1bfdf8642bc499, $__internal_7deffa316070af4885574a5e6a58289753b5377295cc179f9e9d1f3624c07188)))) {
                // line 177
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 180
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_24dc0edd97c8559ca1ca18e7a8a9251381c9c5360f2db2e11fbce1e290432917 =             // line 182
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_63fa0863e7cf65fbc9c4a84d2040bfbb4fbf1f17039fb9ec804c33d623b6f66d = "/salesforce-support") && ('' === $__internal_63fa0863e7cf65fbc9c4a84d2040bfbb4fbf1f17039fb9ec804c33d623b6f66d || 0 === strpos($__internal_24dc0edd97c8559ca1ca18e7a8a9251381c9c5360f2db2e11fbce1e290432917, $__internal_63fa0863e7cf65fbc9c4a84d2040bfbb4fbf1f17039fb9ec804c33d623b6f66d)))) {
                // line 183
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 186
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_0238f80cc9f902d7359f3964bba1e7167337443797e267d201bf844bdd91e67d =             // line 188
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_afd9f5c82fdc17bb9a469d8548b24f797bb2c84b943f0b10f5c6706942fbcf70 = "/salesforce-integration") && ('' === $__internal_afd9f5c82fdc17bb9a469d8548b24f797bb2c84b943f0b10f5c6706942fbcf70 || 0 === strpos($__internal_0238f80cc9f902d7359f3964bba1e7167337443797e267d201bf844bdd91e67d, $__internal_afd9f5c82fdc17bb9a469d8548b24f797bb2c84b943f0b10f5c6706942fbcf70)))) {
                // line 189
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 192
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_9ba0b5003486a8680fcad7825d3d4ccccd73e357d910b1b62a6394b10e5563d1 =             // line 194
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_a220750d9bacacf0dd57876d5f6c92e34cc0d9346a8503ad7a0a172464aa1cb9 = "/salesforce-consulting") && ('' === $__internal_a220750d9bacacf0dd57876d5f6c92e34cc0d9346a8503ad7a0a172464aa1cb9 || 0 === strpos($__internal_9ba0b5003486a8680fcad7825d3d4ccccd73e357d910b1b62a6394b10e5563d1, $__internal_a220750d9bacacf0dd57876d5f6c92e34cc0d9346a8503ad7a0a172464aa1cb9)))) {
                // line 195
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 198
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } else {
                // line 201
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help selecting the ideal Content Management system?  </h3>
        <p>Download our whitepaper and understand the key factors in your decision-making process.</p>
        <div class=\"mb30\">
          ";
                // line 204
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            }
            // line 207
            echo "\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div></div>
  </section>
";
        }
        // line 212
        echo " 

  ";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array())) {
            // line 215
            echo "  <div class=\"container-fluid coldbl1 mt40\">
\t<div class=\"container\">
\t\t<div class=\"row form2\">
\t\t<div class=\"col-sm-12\"><h3 class=\"text-center\">SUGGESTED READS</h3></div>
\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"suggsld col-md-10\">
       \t\t\t ";
            // line 222
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
    </div>    
  </div>
  ";
        }
        // line 228
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array())) {
            // line 229
            echo " <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t ";
            // line 231
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array()), "html", null, true));
            echo "      
    </div>
  </section> 
  ";
        }
        // line 235
        echo " 
 ";
        // line 236
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array())) {
            // line 237
            echo " <section class=\"ProductBottom ServicesTxt\">
\t ";
            // line 238
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array()), "html", null, true));
            echo "
</section> \t 
  ";
        }
        // line 241
        echo "  
  ";
        // line 242
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 243
            echo "  <section class=\"blueband\">
  <div class=\"fullwidth \">
  ";
            // line 245
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
  </div>
  </section>
  ";
        }
        // line 249
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 250
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 252
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
        // line 256
        echo "</div>
<!--Content End-->
<!-- Salesforce Webform Start -->
";
        // line 259
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "salesforce_webform", array())) {
            // line 260
            echo "\t<section class=\"cp-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>Download our exclusive Agile Customer Journey whitepaper and learn how you can get started quickly, easily, and cost-effectively with our unique approach.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 form_align fvpm-white-box-01\">
\t\t\t\t";
            // line 266
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
        // line 307
        echo "<!-- Salesforce Webform End -->

";
        // line 309
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page--node--1359.html.twig", 309)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--node--1359.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 309,  467 => 307,  423 => 266,  415 => 260,  413 => 259,  408 => 256,  401 => 252,  397 => 250,  394 => 249,  387 => 245,  383 => 243,  381 => 242,  378 => 241,  372 => 238,  369 => 237,  367 => 236,  364 => 235,  357 => 231,  353 => 229,  350 => 228,  341 => 222,  332 => 215,  330 => 214,  326 => 212,  318 => 207,  312 => 204,  307 => 201,  301 => 198,  296 => 195,  294 => 194,  289 => 192,  284 => 189,  282 => 188,  277 => 186,  272 => 183,  270 => 182,  265 => 180,  260 => 177,  258 => 176,  253 => 174,  248 => 171,  245 => 170,  243 => 169,  236 => 164,  234 => 163,  231 => 162,  221 => 154,  216 => 152,  212 => 150,  206 => 147,  202 => 145,  200 => 144,  196 => 142,  191 => 139,  186 => 136,  184 => 135,  179 => 132,  177 => 131,  171 => 127,  169 => 126,  164 => 123,  162 => 122,  158 => 120,  156 => 119,  152 => 117,  150 => 116,  148 => 115,  141 => 110,  139 => 109,  136 => 108,  127 => 102,  122 => 99,  120 => 98,  117 => 97,  110 => 93,  106 => 91,  104 => 90,  96 => 84,  89 => 81,  84 => 78,  82 => 77,  79 => 76,  73 => 75,  71 => 74,  63 => 69,  57 => 65,  51 => 63,  49 => 62,  43 => 59,);
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

<div class=\"main-container innerpage mapp\">
{% if page.inner_page_banner %}
\t{{ page.inner_page_banner }}
{% endif %}
  
<div class=\"container p-md-2 p-lg-0\">
\t<div class=\"row\">\t\t
\t\t<div class=\"col-12 col-lg-8\">
\t\t\t{{ page.content }}
\t\t</div>\t

\t\t<div class=\"d-none d-lg-block col-lg-4 mt-3\">
\t\t\t<h2 class=\"csc-firstHeader\">Important topics of interest </h2>
\t\t\t{% if page.sidebar_first %}
\t\t\t\t{{ page.sidebar_first }}
\t\t\t{% endif %}\t
\t\t\t{% if page.sidebar_second %}
\t\t\t\t<div class=\"ebookTh pa-eb\">
\t\t\t\t\t<h3 class=\"csc-firstHeader\">Need help selecting the ideal Content Management system?</h3>
\t\t\t\t\t<p>Download our whitepaper and understand the key factors in your decision-making process.</p>
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t\t<p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t</div>

\t\t\t
\t</div>
</div>\t
{% if page.footer_top_content %}
\t<section class=\"second_boxcontainer smb-managed-it animation-element slide-left\">
\t\t<div class=\"container py-5\">
\t\t\t{{ page.footer_top_content }}
\t\t</div>
\t</section>
{% endif %}
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
