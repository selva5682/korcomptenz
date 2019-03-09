<?php

/* @korone/footer.html.twig */
class __TwigTemplate_ec1f45c089e94d4035eea8e425ef540a5446adb4c6ea5a6b4fc40c01991f7bec extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 9
        echo "  <footer>
\t";
        // line 10
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array()))) {
            // line 11
            echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex align-items-center\">
\t\t\t<div class=\"col-12 social pt-4 pb-1\"> 
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t";
            // line 17
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array())) {
                // line 18
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_first", array()), "html", null, true));
                echo "
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-12 col-md-6\">\t
\t\t\t\t\t\t";
            // line 23
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array())) {
                // line 24
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top_second", array()), "html", null, true));
                echo "
\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 31
        echo "\t
\t";
        // line 32
        if (((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sixth", array()))) {
            // line 33
            echo "\t<div class=\" container-fluid pt-5 \">
\t\t<div class=\"row \">
\t\t";
            // line 35
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_eight", array())) {
                // line 36
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_eight", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 39
            echo " 
\t\t\t
\t\t\t";
            // line 41
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 42
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t";
                // line 43
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 45
            echo "\t
\t\t\t\t\t\t
\t\t\t";
            // line 47
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 48
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t";
                // line 49
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 51
            echo "\t

\t\t\t";
            // line 53
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
                // line 54
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4\">\t
\t\t\t\t\t";
                // line 55
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 58
            echo "
\t\t\t";
            // line 59
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sixth", array())) {
                // line 60
                echo "\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4\">
\t\t\t\t\t";
                // line 61
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_sixth", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 64
            echo "\t\t\t
\t\t\t";
            // line 65
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_seventh", array())) {
                // line 66
                echo "\t\t\t\t<div class=\"col-sm-12 col-md-8 col-lg-4 mb-4\">\t
\t\t\t\t\t";
                // line 67
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_seventh", array()), "html", null, true));
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 70
            echo "\t\t\t
\t\t\t 
\t\t\t 
\t\t</div>
\t\t<div class=\"row py-2 bg-white\">
\t\t\t<div class=\"col-12\">
\t\t\t\t";
            // line 76
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_first", array())) {
                // line 77
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_first", array()), "html", null, true));
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_second", array())) {
                // line 80
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sub_footer_second", array()), "html", null, true));
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            // line 82
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 85
        echo "\t
</footer>
";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cookies_consent_footer", array())) {
            // line 88
            echo "<div class=\" container-fluid\">
\t<div class=\"row\">
\t\t";
            // line 90
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cookies_consent_footer", array())) {
                // line 91
                echo "\t\t\t";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cookies_consent_footer", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 92
            echo "\t
\t</div>\t
</div>
";
        }
        // line 96
        echo "<a id=\"buttontop\"></a>
<script>
// Scroll Top Script  
var btn = \$('#buttontop');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  \$('html, body').animate({scrollTop:0}, '300');
});
</script>
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
\$window.trigger('scroll');
</script>
";
    }

    public function getTemplateName()
    {
        return "@korone/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 96,  227 => 92,  221 => 91,  219 => 90,  215 => 88,  213 => 87,  209 => 85,  203 => 82,  197 => 80,  194 => 79,  188 => 77,  186 => 76,  178 => 70,  172 => 67,  169 => 66,  167 => 65,  164 => 64,  158 => 61,  155 => 60,  153 => 59,  150 => 58,  144 => 55,  141 => 54,  139 => 53,  135 => 51,  129 => 49,  126 => 48,  124 => 47,  120 => 45,  114 => 43,  111 => 42,  109 => 41,  105 => 39,  99 => 37,  96 => 36,  94 => 35,  90 => 33,  88 => 32,  85 => 31,  77 => 26,  71 => 24,  69 => 23,  64 => 20,  58 => 18,  56 => 17,  48 => 11,  46 => 10,  43 => 9,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Korone's theme implementation to display a single page.
 *
 * Footer file
 */
#}
  <footer>
\t{% if page.footer_top_first or page.footer_top_second %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex align-items-center\">
\t\t\t<div class=\"col-12 social pt-4 pb-1\"> 
\t\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t{% if page.footer_top_first %}
\t\t\t\t\t\t\t{{ page.footer_top_first }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-12 col-md-6\">\t
\t\t\t\t\t\t{% if page.footer_top_second %}
\t\t\t\t\t\t\t{{ page.footer_top_second }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}\t
\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth or page.footer_sixth %}
\t<div class=\" container-fluid pt-5 \">
\t\t<div class=\"row \">
\t\t{% if page.footer_eight %}
\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t{{ page.footer_eight }}
\t\t\t\t</div>
\t\t\t{% endif %} 
\t\t\t
\t\t\t{% if page.footer_third %}
\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t\t\t\t\t
\t\t\t{% if page.footer_fourth %}
\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4 pl-lg-5\">\t
\t\t\t\t\t{{ page.footer_fourth }}
\t\t\t\t</div>
\t\t\t{% endif %}\t

\t\t\t{% if page.footer_fifth %}
\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4\">\t
\t\t\t\t\t{{ page.footer_fifth }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.footer_sixth %}
\t\t\t\t<div class=\"col-sm-4 col-md-4 col-lg-2 mb-4\">
\t\t\t\t\t{{ page.footer_sixth }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_seventh %}
\t\t\t\t<div class=\"col-sm-12 col-md-8 col-lg-4 mb-4\">\t
\t\t\t\t\t{{ page.footer_seventh }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t 
\t\t\t 
\t\t</div>
\t\t<div class=\"row py-2 bg-white\">
\t\t\t<div class=\"col-12\">
\t\t\t\t{% if page.sub_footer_first %}
\t\t\t\t\t{{ page.sub_footer_first }}\t\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t\t{% if page.sub_footer_second %}
\t\t\t\t\t{{ page.sub_footer_second }}\t\t\t\t\t
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}\t
</footer>
{% if page.cookies_consent_footer %}
<div class=\" container-fluid\">
\t<div class=\"row\">
\t\t{% if page.cookies_consent_footer %}
\t\t\t{{ page.cookies_consent_footer }}
\t\t{% endif %}\t
\t</div>\t
</div>
{% endif %}
<a id=\"buttontop\"></a>
<script>
// Scroll Top Script  
var btn = \$('#buttontop');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  \$('html, body').animate({scrollTop:0}, '300');
});
</script>
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
\$window.trigger('scroll');
</script>
";
    }
}
