<?php

/* themes/custom/korone/templates/html.html.twig */
class __TwigTemplate_7f597d84c74dff89023ed2a655bf428c6d184f5c4b924a60c8b6a60ca1dbadfc extends Twig_Template
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
        $tags = array("if" => 66);
        $filters = array("raw" => 64, "safe_join" => 66, "t" => 133);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join', 't'),
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
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
   
\t";
        // line 66
        if (($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null)) == "Blog | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation")) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
            echo "  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
";
        } elseif (($this->env->getExtension('drupal_core')->safeJoin($this->env,         // line 70
(isset($context["head_title"]) ? $context["head_title"] : null)) == "Categories | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation")) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
            echo "  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
";
        } elseif (($this->env->getExtension('drupal_core')->safeJoin($this->env,         // line 74
(isset($context["head_title"]) ? $context["head_title"] : null)) == "Archives | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation")) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
            echo "  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
";
        } elseif (($this->env->getExtension('drupal_core')->safeJoin($this->env,         // line 78
(isset($context["head_title"]) ? $context["head_title"] : null)) == "Resources | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation")) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
            echo "  
\t<title>Korcomptenz D365 Implementation, Kentico, Azure, Mobile App</title>
\t<meta name=\"description\" content=\"KORCOMPTENZ is a technology transformation solutions integrator.  Download Case studies, Whitepapers, Ebooks, Webinars, for free  on web and marketing technology, mobile, ERP-CRM, data analytics, infrastructure and cloud\" />\t
<meta name=\"keywords\" content=\"Microsoft ERP Solutions, Microsoft ERP Services, ERP Implementation Services, ERP Solution Providers, ERP Consultant, Microsoft Dynamics Partners, Microsoft Consulting Services, Microsoft Dynamics 365 implementation, Managed IT Services provider in NJ and NYC, Managed Service Provider NYC, IT Support New York, Office 365 Upgrade, Kentico partners, Kentico development, Kentico CMS Development, Drupal development, Wordpress development, Mobile app development\" />

";
        } elseif (($this->env->getExtension('drupal_core')->safeJoin($this->env,         // line 83
(isset($context["head_title"]) ? $context["head_title"] : null)) == "Resource Detail | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation")) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true));
            echo "  
\t<title>Korcomptenz D365 Implementation, Kentico, Azure, Mobile App</title>
\t<meta name=\"description\" content=\"KORCOMPTENZ is a technology transformation solutions integrator.  Download Case studies, Whitepapers, Ebooks, Webinars, for free  on web and marketing technology, mobile, ERP-CRM, data analytics, infrastructure and cloud\" />\t
<meta name=\"keywords\" content=\"Microsoft ERP Solutions, Microsoft ERP Services, ERP Implementation Services, ERP Solution Providers, ERP Consultant, Microsoft Dynamics Partners, Microsoft Consulting Services, Microsoft Dynamics 365 implementation, Managed IT Services provider in NJ and NYC, Managed Service Provider NYC, IT Support New York, Office 365 Upgrade, Kentico partners, Kentico development, Kentico CMS Development, Drupal development, Wordpress development, Mobile app development\" />
\t";
        } else {
            // line 87
            echo "<title> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null))));
            echo " </title>";
        }
        // line 88
        echo "\t
    <css-placeholder token=\"";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t<meta name=\"robots\" content=\"noindex\" />
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/custom.css\"  />\t
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/bootstrap.new.css\"  />


<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">

<script src=\"";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/custom/custom.js\" ></script> 

<!-- Global site tag (gtag.js) - Google AdWords: 973070435 
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-973070435');
</script>
-->
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
</script>
-->
  </head>
  <body";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>\t
    ";
        // line 135
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 136
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "

    <js-bottom-placeholder token=\"";
        // line 139
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 139,  222 => 137,  218 => 136,  214 => 135,  209 => 133,  199 => 126,  171 => 101,  167 => 100,  163 => 99,  159 => 98,  148 => 90,  144 => 89,  141 => 88,  136 => 87,  126 => 83,  116 => 78,  107 => 74,  98 => 70,  89 => 66,  84 => 64,  46 => 29,  43 => 28,);
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
   
\t{% if head_title|safe_join == 'Blog | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation' %} {{ head_title }}  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
{% elseif head_title|safe_join == 'Categories | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation' %} {{ head_title }}  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
{% elseif head_title|safe_join == 'Archives | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation' %} {{ head_title }}  
\t<title>Blogs and Important Trends in Digital Transformation Technology </title>
\t<meta name=\"description\" content=\"Korcomptenz  Team presents blogs on Microsoft Dynamics, Infrastructure, Cloud Solutions, Web marketing Automation , Mobile App Development and latest Technology trends\" />
<meta name=\"keywords\" content=\"android app development, website development services, Microsoft Dynamics AX, Microsoft dynamics ERP, Microsoft Dynamics 365, Microsoft 365 pricing, Azure Cloud hosting, Office 365 migration, hosting on Azure, Managed IT Service Provider \" />
{% elseif head_title|safe_join == 'Resources | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation' %} {{ head_title }}  
\t<title>Korcomptenz D365 Implementation, Kentico, Azure, Mobile App</title>
\t<meta name=\"description\" content=\"KORCOMPTENZ is a technology transformation solutions integrator.  Download Case studies, Whitepapers, Ebooks, Webinars, for free  on web and marketing technology, mobile, ERP-CRM, data analytics, infrastructure and cloud\" />\t
<meta name=\"keywords\" content=\"Microsoft ERP Solutions, Microsoft ERP Services, ERP Implementation Services, ERP Solution Providers, ERP Consultant, Microsoft Dynamics Partners, Microsoft Consulting Services, Microsoft Dynamics 365 implementation, Managed IT Services provider in NJ and NYC, Managed Service Provider NYC, IT Support New York, Office 365 Upgrade, Kentico partners, Kentico development, Kentico CMS Development, Drupal development, Wordpress development, Mobile app development\" />

{% elseif head_title|safe_join == 'Resource Detail | Korcomptenz | IT Services &amp; Consulting , Total Technology Transformation' %} {{ head_title }}  
\t<title>Korcomptenz D365 Implementation, Kentico, Azure, Mobile App</title>
\t<meta name=\"description\" content=\"KORCOMPTENZ is a technology transformation solutions integrator.  Download Case studies, Whitepapers, Ebooks, Webinars, for free  on web and marketing technology, mobile, ERP-CRM, data analytics, infrastructure and cloud\" />\t
<meta name=\"keywords\" content=\"Microsoft ERP Solutions, Microsoft ERP Services, ERP Implementation Services, ERP Solution Providers, ERP Consultant, Microsoft Dynamics Partners, Microsoft Consulting Services, Microsoft Dynamics 365 implementation, Managed IT Services provider in NJ and NYC, Managed Service Provider NYC, IT Support New York, Office 365 Upgrade, Kentico partners, Kentico development, Kentico CMS Development, Drupal development, Wordpress development, Mobile app development\" />
\t{% else %}<title> {{ head_title|safe_join }} </title>{% endif %}
\t
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t<meta name=\"robots\" content=\"noindex\" />
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/custom.css\"  />\t
<link rel=\"stylesheet\" href=\"/themes/custom/korone/css/bootstrap.new.css\"  />


<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">

<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/custom/custom.js\" ></script> 

<!-- Global site tag (gtag.js) - Google AdWords: 973070435 
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-973070435');
</script>
-->
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
</script>
-->
  </head>
  <body{{ attributes }}>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>\t
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}

    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
\t
  </body>
</html>
";
    }
}
