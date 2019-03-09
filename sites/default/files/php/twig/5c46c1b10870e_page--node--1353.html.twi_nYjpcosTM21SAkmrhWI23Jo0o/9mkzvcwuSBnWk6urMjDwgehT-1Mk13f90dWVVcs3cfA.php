<?php

/* themes/custom/korone/templates/page--node--1353.html.twig */
class __TwigTemplate_8862e84e5a8e965f2d336be33defa17c62f8a130d06f49aa92815e1ce20721bf extends Twig_Template
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
        $tags = array("include" => 59, "if" => 62, "set" => 113);
        $filters = array();
        $functions = array("path" => 113);

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
        $this->loadTemplate("@korone/header.html.twig", "themes/custom/korone/templates/page--node--1353.html.twig", 59)->display($context);
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
\t\t";
        // line 71
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) {
            // line 72
            echo "\t\t<div class=\"d-none d-lg-block col-lg-4 mt-3\">
\t\t\t<h2 class=\"csc-firstHeader\">Important topics of interest </h2>
\t\t\t";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t";
            // line 75
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 76
                echo "\t\t\t\t<div class=\"ebookTh pa-eb\">
\t\t\t\t\t<h3 class=\"csc-firstHeader\">Need help selecting the ideal Content Management system?</h3>
\t\t\t\t\t<p>Download our whitepaper and understand the key factors in your decision-making process.</p>
\t\t\t\t\t";
                // line 79
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
\t\t\t\t\t<p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
\t\t\t\t</div>
\t\t\t";
            }
            // line 82
            echo "\t
\t\t</div>
\t\t";
        }
        // line 84
        echo "\t
\t\t\t
\t</div>
</div>\t
";
        // line 88
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array())) {
            // line 89
            echo "\t<section class=\"second_boxcontainer smb-managed-it animation-element slide-left\">
\t\t<div class=\"container py-5\">
\t\t\t";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_content", array()), "html", null, true));
            echo "
\t\t</div>
\t</section>
";
        }
        // line 95
        echo "  <!-- thank ydou Modal -->
  ";
        // line 96
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array())) {
            // line 97
            echo "  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        ";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array()), "html", null, true));
            echo "
      </div>
    </div>
    
  </section>
  ";
        }
        // line 106
        echo "  
  \t";
        // line 107
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array())) {
            // line 108
            echo "    
  <section class=\"responsiveContent responsiveTopOut KenticoInnerForm responsive_web\">
    <div class=\"container\">
<div class=\"clearfix\">
 <div class=\"col-md-6\">
 ";
            // line 113
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 114
            if ((is_string($__internal_1066b4c646be883501c35ad88a73d0acefb9fb28e6e094d3f0a3453838022665 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_e8b89d2e7358c56e0ebe7078738c69834031da47d27e6be2705208adfc25ebec = "/email-marketing-digital-messaging") && ('' === $__internal_e8b89d2e7358c56e0ebe7078738c69834031da47d27e6be2705208adfc25ebec || 0 === strpos($__internal_1066b4c646be883501c35ad88a73d0acefb9fb28e6e094d3f0a3453838022665, $__internal_e8b89d2e7358c56e0ebe7078738c69834031da47d27e6be2705208adfc25ebec)))) {
                // line 115
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t";
            } elseif ((is_string($__internal_67e23c20735b4b1506546fa9abeeb349772060ce9ac822eb2cc15d4a92c3a417 =             // line 117
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_3bea6f92403d37cadd4afc1be2a2545dcd26b444fd98cf092369afcd4aa10081 = "/engagement-intelligence") && ('' === $__internal_3bea6f92403d37cadd4afc1be2a2545dcd26b444fd98cf092369afcd4aa10081 || 0 === strpos($__internal_67e23c20735b4b1506546fa9abeeb349772060ce9ac822eb2cc15d4a92c3a417, $__internal_3bea6f92403d37cadd4afc1be2a2545dcd26b444fd98cf092369afcd4aa10081)))) {
                // line 118
                echo "   \t\t<h2>Need help with your customer journey?</h2>
\t\tDownload our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily.
\t\t";
            } elseif ((is_string($__internal_4a6f3cdba4126b04f5298b7bd0761e9df761f70050b42cba56aaa78150d1e0d1 =             // line 120
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_167cc6288fbffbca3a88cfa1a27e7cf7e5e22ec4e12cc2679161c0480190a73c = "/staff-augmentation") && ('' === $__internal_167cc6288fbffbca3a88cfa1a27e7cf7e5e22ec4e12cc2679161c0480190a73c || 0 === strpos($__internal_4a6f3cdba4126b04f5298b7bd0761e9df761f70050b42cba56aaa78150d1e0d1, $__internal_167cc6288fbffbca3a88cfa1a27e7cf7e5e22ec4e12cc2679161c0480190a73c)))) {
                // line 121
                echo "   \t\t<h2>Need Help in Staff Augmentation?</h2>
\t\tDownload our presentation to Know more about our Staffing augmentation services that ensures your project success.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_5e0f0a8a10316801089493017fe60ffba4eae58b1b287f4cae008e4e22c2fed5 =             // line 124
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_c325c4cffdf15d99719a4c46a005f43148c494b56be0776d1f906f4359f4eb3f = "/microsoft-dynamics-bi") && ('' === $__internal_c325c4cffdf15d99719a4c46a005f43148c494b56be0776d1f906f4359f4eb3f || 0 === strpos($__internal_5e0f0a8a10316801089493017fe60ffba4eae58b1b287f4cae008e4e22c2fed5, $__internal_c325c4cffdf15d99719a4c46a005f43148c494b56be0776d1f906f4359f4eb3f)))) {
                // line 125
                echo "   \t\t<h2>Retailing Done Right <br>
with Microsoft Dynamics 365?</h2>
\t\tDownload our exclusive whitepaper  for complimentary information on Microsoft Dynamics 365  that helps map customer journey to engage and  enhance customer experience.\t
\t\t
\t\t";
            } elseif ((is_string($__internal_3bd826a636fb3c4c5e099308996d946c9c61b10b6e29e037e74c8eb47b148ab7 =             // line 129
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_85703788d6673c315cc8dbc6c09e23ea601e28d00c14877d60f7763d2e79df23 = "/industries-served") && ('' === $__internal_85703788d6673c315cc8dbc6c09e23ea601e28d00c14877d60f7763d2e79df23 || 0 === strpos($__internal_3bd826a636fb3c4c5e099308996d946c9c61b10b6e29e037e74c8eb47b148ab7, $__internal_85703788d6673c315cc8dbc6c09e23ea601e28d00c14877d60f7763d2e79df23)))) {
                // line 130
                echo "   \t\t<h2>Download our eBook to learn More</h2>
\t\tAre your current legacy systems and applications failing to keep pace with your business growth?
        
        ";
            } elseif ((is_string($__internal_aadb22f0db55a999a3c4ecc27a5429a791454541c2a6e2ed0691af0082001180 =             // line 133
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_8f553358c6c7775b1c7711778abd0abf525a49c4fdda0ee4170e6a5a789287c8 = "/hosting-on-azure") && ('' === $__internal_8f553358c6c7775b1c7711778abd0abf525a49c4fdda0ee4170e6a5a789287c8 || 0 === strpos($__internal_aadb22f0db55a999a3c4ecc27a5429a791454541c2a6e2ed0691af0082001180, $__internal_8f553358c6c7775b1c7711778abd0abf525a49c4fdda0ee4170e6a5a789287c8)))) {
                // line 134
                echo "   \t\t<h2>Looking for Azure Managed Service Provider</h2>
\t\tWould you like to discuss and have a discovery call or talk about getting technical support, product or pricing information or  information other competitive  Cloud solutions? 
";
            } else {
                // line 137
                echo "   <h2>Need Help <br> Selecting the Ideal CMS? </h2>
  Download your exclusive whitepaper <br> for complimentary information on <br> choosing the ideal solution for<br> your next generation website.
";
            }
            // line 140
            echo "
 </div>
 ";
            // line 142
            if ((is_string($__internal_8f90a3b35c1469dbe7495975e360f285bbbd7bcc7e3f909e912607ac5cfa4075 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_c10aed7f457cb508211632ad8df35d147ed3c8f4229ff323dc1e4016467f6d44 = "/industries-served") && ('' === $__internal_c10aed7f457cb508211632ad8df35d147ed3c8f4229ff323dc1e4016467f6d44 || 0 === strpos($__internal_8f90a3b35c1469dbe7495975e360f285bbbd7bcc7e3f909e912607ac5cfa4075, $__internal_c10aed7f457cb508211632ad8df35d147ed3c8f4229ff323dc1e4016467f6d44)))) {
                // line 143
                echo " <div class=\"col-md-4 indu-serv\">
 
";
                // line 145
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "

";
            } else {
                // line 148
                echo " <div class=\"col-md-4 KenticoForm\">
 
";
                // line 150
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
                echo "
";
            }
            // line 152
            echo "</div>
 </div>      
<div class=\"KenticoFormBottom\">
<div class=\"KenticoBottomOut\"><div class=\"KenticoFormIcon\"><img src=\"/themes/custom/korone/images/Kentico-Images/Download-icon.png\" width=\"76\" height=\"76\"></div><p class=\"mt15 clrewt fnt-wht\">Don't need the whitepaper? <a href=\"/request-consultation\">You can still request<br> a consultation and receive a no-cost estimate.</a></p></div>
</div>
    </div>
  </section>
  ";
        }
        // line 160
        echo "  
  ";
        // line 161
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array())) {
            // line 162
            echo "  <section class=\"ken-guide-1\">
    <div class=\"container\"><div class=\"row\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
\t  
\t  ";
            // line 167
            $context["uri"] = $this->env->getExtension('drupal_core')->getPath("entity.node.canonical", array("node" => $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array())));
            // line 168
            echo "\t\t";
            if ((is_string($__internal_0116913ba45ecb9b5e87c18ff305a13e0a29f8a759ee9e92d783f14e2669e2e0 = (isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_55a7a64f56712f4e478fd67621b11a5b404d3ae7838aab20bc6528cae7d0bd34 = "/customer-journeys-marketing-automation") && ('' === $__internal_55a7a64f56712f4e478fd67621b11a5b404d3ae7838aab20bc6528cae7d0bd34 || 0 === strpos($__internal_0116913ba45ecb9b5e87c18ff305a13e0a29f8a759ee9e92d783f14e2669e2e0, $__internal_55a7a64f56712f4e478fd67621b11a5b404d3ae7838aab20bc6528cae7d0bd34)))) {
                // line 169
                echo "        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 172
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_957bc5c6d96abe9cfea15be47658d71c2c01e287053c7b2e2a7f9ae1f45385b0 =             // line 174
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_732662514b7ac85fe9b17020370e790988af20d598771faa9b07c6ae30adcea2 = "/salesforce") && ('' === $__internal_732662514b7ac85fe9b17020370e790988af20d598771faa9b07c6ae30adcea2 || 0 === strpos($__internal_957bc5c6d96abe9cfea15be47658d71c2c01e287053c7b2e2a7f9ae1f45385b0, $__internal_732662514b7ac85fe9b17020370e790988af20d598771faa9b07c6ae30adcea2)))) {
                // line 175
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 178
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_0adf23a43c195b67cd067a785a790023944af813118345380086c7087554d60e =             // line 180
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_718ed4257fec326162099df011631dd08a6ed325b07309632e12931eac0f8270 = "/salesforce-support") && ('' === $__internal_718ed4257fec326162099df011631dd08a6ed325b07309632e12931eac0f8270 || 0 === strpos($__internal_0adf23a43c195b67cd067a785a790023944af813118345380086c7087554d60e, $__internal_718ed4257fec326162099df011631dd08a6ed325b07309632e12931eac0f8270)))) {
                // line 181
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 184
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_f7be46dde26ef517a5e096551aa6eaf82466a7971bce63051ac2d9721d31a802 =             // line 186
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_c1189f61ebe8d3e9178f1ae6b256037755551f0d8ed6d8d5310e75eb7abe5021 = "/salesforce-integration") && ('' === $__internal_c1189f61ebe8d3e9178f1ae6b256037755551f0d8ed6d8d5310e75eb7abe5021 || 0 === strpos($__internal_f7be46dde26ef517a5e096551aa6eaf82466a7971bce63051ac2d9721d31a802, $__internal_c1189f61ebe8d3e9178f1ae6b256037755551f0d8ed6d8d5310e75eb7abe5021)))) {
                // line 187
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 190
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } elseif ((is_string($__internal_c498d10060a13c31432bce570d858c397d911ade68070a8057060daed2316776 =             // line 192
(isset($context["uri"]) ? $context["uri"] : null)) && is_string($__internal_41eaaf2ec3942192bb2cfa336b5c5bbe7767b94a40b063b0b89afe84d319930a = "/salesforce-consulting") && ('' === $__internal_41eaaf2ec3942192bb2cfa336b5c5bbe7767b94a40b063b0b89afe84d319930a || 0 === strpos($__internal_c498d10060a13c31432bce570d858c397d911ade68070a8057060daed2316776, $__internal_41eaaf2ec3942192bb2cfa336b5c5bbe7767b94a40b063b0b89afe84d319930a)))) {
                // line 193
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help with your customer journey</h3>
        <p>Download our exclusive whitepaper and learn about a new agile approach that helps you get started quickly and easily. </p>
        <div class=\"mb30\">
          ";
                // line 196
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            } else {
                // line 199
                echo "\t\t<h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Need help selecting the ideal Content Management system?  </h3>
        <p>Download our whitepaper and understand the key factors in your decision-making process.</p>
        <div class=\"mb30\">
          ";
                // line 202
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
                echo "
        </div>
\t\t";
            }
            // line 205
            echo "\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div></div>
  </section>
";
        }
        // line 210
        echo " 

  ";
        // line 212
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array())) {
            // line 213
            echo "  <div class=\"container-fluid coldbl1 mt40\">
\t<div class=\"container\">
\t\t<div class=\"row form2\">
\t\t<div class=\"col-sm-12\"><h3 class=\"text-center\">SUGGESTED READS</h3></div>
\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"col-md-1\"></div>
\t\t\t<div class=\"suggsld col-md-10\">
       \t\t\t ";
            // line 220
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_total_transformation_blog", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-1\"></div>
    </div>    
  </div>
  ";
        }
        // line 226
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array())) {
            // line 227
            echo " <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t ";
            // line 229
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array()), "html", null, true));
            echo "      
    </div>
  </section> 
  ";
        }
        // line 233
        echo " 
 ";
        // line 234
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array())) {
            // line 235
            echo " <section class=\"ProductBottom ServicesTxt\">
\t ";
            // line 236
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array()), "html", null, true));
            echo "
</section> \t 
  ";
        }
        // line 239
        echo "  
  ";
        // line 240
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 241
            echo "  <section class=\"blueband\">
  <div class=\"fullwidth \">
  ";
            // line 243
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
  </div>
  </section>
  ";
        }
        // line 247
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 248
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 250
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
        // line 254
        echo "</div>
<!--Content End-->
<!-- Salesforce Webform Start -->
";
        // line 257
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "salesforce_webform", array())) {
            // line 258
            echo "\t<section class=\"cp-features\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p>Download our exclusive Agile Customer Journey whitepaper and learn how you can get started quickly, easily, and cost-effectively with our unique approach.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 form_align fvpm-white-box-01\">
\t\t\t\t";
            // line 264
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
        // line 305
        echo "<!-- Salesforce Webform End -->

";
        // line 307
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page--node--1353.html.twig", 307)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--node--1353.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 307,  466 => 305,  422 => 264,  414 => 258,  412 => 257,  407 => 254,  400 => 250,  396 => 248,  393 => 247,  386 => 243,  382 => 241,  380 => 240,  377 => 239,  371 => 236,  368 => 235,  366 => 234,  363 => 233,  356 => 229,  352 => 227,  349 => 226,  340 => 220,  331 => 213,  329 => 212,  325 => 210,  317 => 205,  311 => 202,  306 => 199,  300 => 196,  295 => 193,  293 => 192,  288 => 190,  283 => 187,  281 => 186,  276 => 184,  271 => 181,  269 => 180,  264 => 178,  259 => 175,  257 => 174,  252 => 172,  247 => 169,  244 => 168,  242 => 167,  235 => 162,  233 => 161,  230 => 160,  220 => 152,  215 => 150,  211 => 148,  205 => 145,  201 => 143,  199 => 142,  195 => 140,  190 => 137,  185 => 134,  183 => 133,  178 => 130,  176 => 129,  170 => 125,  168 => 124,  163 => 121,  161 => 120,  157 => 118,  155 => 117,  151 => 115,  149 => 114,  147 => 113,  140 => 108,  138 => 107,  135 => 106,  126 => 100,  121 => 97,  119 => 96,  116 => 95,  109 => 91,  105 => 89,  103 => 88,  97 => 84,  92 => 82,  85 => 79,  80 => 76,  78 => 75,  74 => 74,  70 => 72,  68 => 71,  63 => 69,  57 => 65,  51 => 63,  49 => 62,  43 => 59,);
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
\t\t{% if page.sidebar_first or page.sidebar_second%}
\t\t<div class=\"d-none d-lg-block col-lg-4 mt-3\">
\t\t\t<h2 class=\"csc-firstHeader\">Important topics of interest </h2>
\t\t\t{{ page.sidebar_first }}
\t\t\t{% if page.sidebar_second %}
\t\t\t\t<div class=\"ebookTh pa-eb\">
\t\t\t\t\t<h3 class=\"csc-firstHeader\">Need help selecting the ideal Content Management system?</h3>
\t\t\t\t\t<p>Download our whitepaper and understand the key factors in your decision-making process.</p>
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t\t<p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t</div>
\t\t{% endif %}\t
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
