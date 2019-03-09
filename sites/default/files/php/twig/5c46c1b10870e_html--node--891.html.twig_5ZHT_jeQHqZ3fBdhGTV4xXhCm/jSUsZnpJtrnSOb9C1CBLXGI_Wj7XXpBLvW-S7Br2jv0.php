<?php

/* themes/custom/korone/templates/html--node--891.html.twig */
class __TwigTemplate_d8639bb24c92eb653f3510299599a1b8eb3ad54668de2ab34d61340e7c1b7ca5 extends Twig_Template
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
        $filters = array("raw" => 38, "safe_join" => 39, "t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
    <head-placeholder token=\"";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
\t<link rel=\"stylesheet\" href=\"themes/custom/korone/css/custom.css\"  />\t
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/style.css\"  />
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/bootstrap.css\"  />
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/bootstrap.new.css\"  />

<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">
<script src=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/new-stlyes/js/custom/custom.js\" ></script> 

<!-- Global site tag (gtag.js) - Google AdWords: 973070435 -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-973070435');
</script>
<!-- Hotjar Tracking Code for https://www.korcomptenz.com -->
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
  </head>
  <body";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 83
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
<script type=\"text/javascript\">
   \$('.carousel-control.right').trigger('click');
        // Child Tab
        \$('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });
    });
</script>
<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
  \$(\".js-form-type-textfield\").click(function(){
\t\t  \$(\".hideonclick\").css('display','block');
  });
});
\t</script>
<script type=\"text/javascript\">var \$animation_elements = \$('.animation-element');
var \$window = \$(window);
function check_if_in_view() {
  var window_height = \$window.height();
  var window_top_position = \$window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  \$.each(\$animation_elements, function() {
    var \$element = \$(this);
    var element_height = \$element.outerHeight();
    var element_top_position = \$element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      \$element.addClass('in-view');
    } else {
      //\$element.removeClass('in-view');
    }
  });
}
\$window.on('scroll resize', check_if_in_view);
\$window.trigger('scroll');</script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/html--node--891.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 84,  139 => 83,  135 => 82,  131 => 81,  126 => 79,  117 => 73,  92 => 51,  88 => 50,  84 => 49,  80 => 48,  70 => 41,  66 => 40,  62 => 39,  58 => 38,  46 => 29,  43 => 28,);
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
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t<link rel=\"stylesheet\" href=\"themes/custom/korone/css/custom.css\"  />\t
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/style.css\"  />
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/bootstrap.css\"  />
<link rel=\"stylesheet\" href=\"themes/custom/korone/css/bootstrap.new.css\"  />

<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700\" rel=\"stylesheet\">
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/jquery-3.2.1.slim.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/jqueryslim/popper.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/bootstrap/bootstrap.min.js\" ></script> 
<script src=\"{{ base_path ~ directory }}/new-stlyes/js/custom/custom.js\" ></script> 

<!-- Global site tag (gtag.js) - Google AdWords: 973070435 -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-973070435\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-973070435');
</script>
<!-- Hotjar Tracking Code for https://www.korcomptenz.com -->
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
  </head>
  <body{{ attributes }}>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KL4BPR6\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
<script type=\"text/javascript\">
   \$('.carousel-control.right').trigger('click');
        // Child Tab
        \$('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });
    });
</script>
<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
  \$(\".js-form-type-textfield\").click(function(){
\t\t  \$(\".hideonclick\").css('display','block');
  });
});
\t</script>
<script type=\"text/javascript\">var \$animation_elements = \$('.animation-element');
var \$window = \$(window);
function check_if_in_view() {
  var window_height = \$window.height();
  var window_top_position = \$window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  \$.each(\$animation_elements, function() {
    var \$element = \$(this);
    var element_height = \$element.outerHeight();
    var element_top_position = \$element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      \$element.addClass('in-view');
    } else {
      //\$element.removeClass('in-view');
    }
  });
}
\$window.on('scroll resize', check_if_in_view);
\$window.trigger('scroll');</script>
  </body>
</html>
";
    }
}
