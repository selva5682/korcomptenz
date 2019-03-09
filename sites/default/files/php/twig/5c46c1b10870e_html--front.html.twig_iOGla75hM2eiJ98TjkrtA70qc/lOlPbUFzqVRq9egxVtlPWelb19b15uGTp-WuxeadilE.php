<?php

/* themes/custom/korone/templates/html--front.html.twig */
class __TwigTemplate_c4ffaf16915a9a32e53132cd8fb6807dcf3913719e63d8364006eb29629f0cb2 extends Twig_Template
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
        $filters = array("raw" => 63, "t" => 109);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw', 't'),
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

        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KL4BPR6');</script>
<!-- End Google Tag Manager -->
  <script>
  window.addEventListener('load', function() {
    /*Kentico Download Form*/
    jQuery('.btn.download-now').click(function() {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/GVMwCKXCjIEBEOPA_88D'
      });
    });

    /*Microsoft Dynamics Download Form*/
    if (window.location.pathname.indexOf('/microsoft-dynamics/thankyou') > -1) {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/N_mXCP67o4EBEOPA_88D'
      });
    }

    /*Microsoft Office365 Download Form*/
    if (window.location.pathname.indexOf('/office365-migration/thankyou') > -1) {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/r0nTCMK-jIEBEOPA_88D'
      });
    }
  });

</script>
    <head-placeholder token=\"";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>ERP Solutions, Managed IT services, Kentico, Mobile Apps development </title>
    <css-placeholder token=\"";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t<meta name=\"google-site-verification\" content=\"rNUVb24fDVFYxFZuFBq__dtHhE7IDg5yfFpJ_De0I4Q\" />
\t<meta property=\"og:title\" content=\"ERP Solutions, Managed IT services, Kentico, Mobile Apps development \"/>
<meta property=\"og:type\" content=\"article\"/>
<meta property=\"og:url\" content=\"https://www.korcomptenz.com/\"/>
<meta property=\"og:image\" content=\"https://www.korcomptenz.com/sites/default/files/logo.jpg\"/>
<meta property=\"og:site_name\" content=\"Korcomptenz\"/>
<meta property=\"og:description\" content=\":Korcomptenz offers services for Microsoft Dynamics Suite, Infrastructure, Cloud Solutions, Web Marketing Automation, Mobile Application Development, Kentico Development and Office 365 Migration\"/>
<meta name=\"twitter:card\" content=\"summary\">
<meta name=\"twitter:site\" content=\"https://www.korcomptenz.com/\">
<meta name=\"twitter:title\" content=\"ERP Solutions, Managed IT services, Kentico, Mobile Apps development \">
<meta name=\"twitter:description\" content=\" Korcomptenz offers services for Microsoft Dynamics Suite, Infrastructure, Cloud Solutions, Web Marketing Automation, Mobile Application Development, Kentico Development and Office 365 Migration\">
<meta name=\"robots\" content=\"noindex\" />
<!-- Global site tag (gtag.js) - Google AdWords: 973070435
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-973070435');
</script> -->
<!-- Hotjar Tracking Code for https://www.korcomptenz.com 
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:630394,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>-->
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/bootstrap.new.css\"  />
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/custom.css\"  />
<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">
  </head>
  <body";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
   <!-- Google Tag Manager (noscript)
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
End Google Tag Manager (noscript) -->
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 109
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 114
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
<!--scrollify-->
<!--Request Consultation End--> 
<script src=\"";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"";
        // line 120
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/custom/custom.js\" ></script> 

 
<!-- Mega Menu End --> 

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/html--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 120,  172 => 119,  168 => 118,  164 => 117,  158 => 114,  154 => 113,  150 => 112,  146 => 111,  141 => 109,  132 => 103,  92 => 66,  88 => 65,  83 => 63,  46 => 29,  43 => 28,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KL4BPR6');</script>
<!-- End Google Tag Manager -->
  <script>
  window.addEventListener('load', function() {
    /*Kentico Download Form*/
    jQuery('.btn.download-now').click(function() {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/GVMwCKXCjIEBEOPA_88D'
      });
    });

    /*Microsoft Dynamics Download Form*/
    if (window.location.pathname.indexOf('/microsoft-dynamics/thankyou') > -1) {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/N_mXCP67o4EBEOPA_88D'
      });
    }

    /*Microsoft Office365 Download Form*/
    if (window.location.pathname.indexOf('/office365-migration/thankyou') > -1) {
      gtag('event', 'conversion', {
        'send_to': 'AW-973070435/r0nTCMK-jIEBEOPA_88D'
      });
    }
  });

</script>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>ERP Solutions, Managed IT services, Kentico, Mobile Apps development </title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t<meta name=\"google-site-verification\" content=\"rNUVb24fDVFYxFZuFBq__dtHhE7IDg5yfFpJ_De0I4Q\" />
\t<meta property=\"og:title\" content=\"ERP Solutions, Managed IT services, Kentico, Mobile Apps development \"/>
<meta property=\"og:type\" content=\"article\"/>
<meta property=\"og:url\" content=\"https://www.korcomptenz.com/\"/>
<meta property=\"og:image\" content=\"https://www.korcomptenz.com/sites/default/files/logo.jpg\"/>
<meta property=\"og:site_name\" content=\"Korcomptenz\"/>
<meta property=\"og:description\" content=\":Korcomptenz offers services for Microsoft Dynamics Suite, Infrastructure, Cloud Solutions, Web Marketing Automation, Mobile Application Development, Kentico Development and Office 365 Migration\"/>
<meta name=\"twitter:card\" content=\"summary\">
<meta name=\"twitter:site\" content=\"https://www.korcomptenz.com/\">
<meta name=\"twitter:title\" content=\"ERP Solutions, Managed IT services, Kentico, Mobile Apps development \">
<meta name=\"twitter:description\" content=\" Korcomptenz offers services for Microsoft Dynamics Suite, Infrastructure, Cloud Solutions, Web Marketing Automation, Mobile Application Development, Kentico Development and Office 365 Migration\">
<meta name=\"robots\" content=\"noindex\" />
<!-- Global site tag (gtag.js) - Google AdWords: 973070435
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-973070435');
</script> -->
<!-- Hotjar Tracking Code for https://www.korcomptenz.com 
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:630394,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>-->
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/bootstrap.new.css\"  />
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/custom.css\"  />
<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">
  </head>
  <body{{ attributes }}>
   <!-- Google Tag Manager (noscript)
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
End Google Tag Manager (noscript) -->
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
<!--scrollify-->
<!--Request Consultation End--> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/custom/custom.js\" ></script> 

 
<!-- Mega Menu End --> 

</body>
</html>
";
    }
}
