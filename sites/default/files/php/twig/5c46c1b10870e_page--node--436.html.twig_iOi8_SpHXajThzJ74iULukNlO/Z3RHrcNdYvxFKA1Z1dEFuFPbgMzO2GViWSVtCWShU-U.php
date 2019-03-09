<?php

/* themes/custom/korone/templates/page--node--436.html.twig */
class __TwigTemplate_731556d41a8dccbcf1e823d250996ab875fe70428f69c73697f297dfd306fd3a extends Twig_Template
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
        $tags = array("include" => 60, "if" => 550);
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
        echo "
";
        // line 60
        $this->loadTemplate("@korone/header.html.twig", "themes/custom/korone/templates/page--node--436.html.twig", 60)->display($context);
        echo " 

<!--Content-->
<div class=\"main-container kentico\"> 
  <!--Inner Banner-->
  <section class=\"kntc-banner\"> 
  <a href=\"#homepage_popup\" id=\"myModal\">
  <img src=\"/themes/custom/korone/images/kentio-new/kentico-mainbanner.jpg\" class=\"\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" > </a>
  </section>
<h1 class=\"seo-h1-hidden\">kentico CMS Support</h1>
 <section class=\"body-nav\">
  <div class=\"container-fluid\">
    <div class=\"row body-nav-item py-2 bg-light\">
      <div class=\"col-12 text-center col-lg-2 \">
        <button class=\"quick-nav-btn\"> <img src=\"/themes/custom/korone/images/quick-navigation.png\" width=\"30\" alt=\"Quick Nav\"> Quick Nav </button>
      </div>
      <div class=\" col-lg-10 col-12 \">
        <div class=\"row justify-center\"> <a href=\"#1\"> What is Kentico? <span class=\"nicons\"></span> </a> <a href=\"#2\"> Who uses Kentico? <span class=\"nicons\"></span> </a> <a href=\"#3\"> Why Kentico is the Better Choice <span class=\"nicons\"></span> </a><a href=\"#4\"> Kentico Key Features <span class=\"nicons\"></span> </a> <a href=\"#5\"> Latest Version Kentico 12 <span class=\"nicons\"></span> </a> <a href=\"#6\"> Usage of Kentico <span class=\"nicons\"></span> </a> <a href=\"#7\"> Kentico Managed Services <span class=\"nicons\"></span> </a> <a href=\"#8\"> Case Studies <span class=\"nicons\"></span> </a> <a href=\"#9\"> Testimonials <span class=\"nicons\"></span> </a> <a href=\"#10\"> Why Korcomptenz <span class=\"nicons\"></span> </a><a href=\"#11\"> Download Quick Start Guide <span class=\"nicons\"></span> </a> <a href=\"#12\"> What Makes Kentico Different <span class=\"nicons\"></span> </a> </div>
      </div>
    </div>
  </div>
</section>

<section id=\"1\" class=\"kntc-slider-1\">
<div class=\"container\">
<div class=\"row m-0\">
<div class=\"col-md-6 col-lg-6\">
<h1>Kentico Implementation – What is Kentico?</h1>

<p>Kentico CMS is a leading Content Management and Enterprise Marketing Solution on Microsoft's .NET platform. It has been recognized by Gartner, Microsoft, Deloitte, and Gleanster, and is the only fully integrated, all-in-one solution that allows you to rapidly and effectively improve your customer experience.</p>

<img src=\"/themes/custom/korone/images/kentio-new/goldpartner.png\" class=\"\" alt=\"Kentico Gold Partner\" title=\"Kentico Gold Partner\">

</div>
<div class=\"col-md-6 col-lg-6\">
<div class=\"ken-guide mb30\">
<h2>Download Your Kentico Guide</h2>
<p>Learn everything you need to know about Kentico CMS. See how this best-in-class platform can engage more customers and convert more leads. Receive a free analysis from the experts at KORCOMPTENZ.</p>
";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_banner", array()), "html", null, true));
        echo "
 </div>

</div>
</div>
</div>
</section>
 ";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
 <section id=\"2\" class=\"kntc-whouses second_boxcontainer mt-4\">
  <div class=\"row\">
  \t<h3>Who uses Kentico?</h3>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Countries Using Kentico 
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">USA</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">United Kingdom</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Australia </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Netherlands</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Germany</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Industries Using Kentico 

  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Health/Pharmaceutics </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Education </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Not-for-Profit/Charity  </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Ecommerce </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Building/Construction </div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Competencies of Kentico
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Development + Integration</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">E-commerce</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Microsoft Azure</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Online Marketing</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\"> Quality Expert</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Users of Kentico
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Business Owners + Entrepreneurs</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Marketers</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Content Creators</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Ecommerce Professionals</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Corporate Communicators</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t
  </div>
  </section>
  <section id=\"3\" class=\"ken-cust-demnds second_boxcontainer\">
    <div class=\"container\">
        <div class=\"col-xs-12 kenmidttle\">
          <h3>Why Kentico is the Better Choice for Your Organization?</h3>
        </div>
        <div class=\"row cust-demands-pnts\">
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/kentico-icon.png\" alt=\"Kentico Gold Partner\" title=\"Kentico Gold Partner\">
            <ul class=\"listitem\">
            <li> Kentico has 1,000 partners in 80+ countries, ready to help with projects</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            <li> Kentico licensing has no limitation on page views or number of items</li>
            <li> Kentico has huge pool of resources and developers</li>
            <li> Kentico has fully integrated e-commerce from day one</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-sirecore-icon.png\" alt=\"Sitecore - Kentico CMS Support\" title=\"Sitecore - Kentico CMS Support\">
            <ul class=\"listitem\">
            <li> Kentico truly is an all-in-one platform unlike Sitecore</li>
            <li> Kentico EMS licensing includes all of the features you need like CMS, Online Marketing, Online Communities and E-commerce</li>
            <li> Kentico provides better value for money</li>
            <li> Kentico has wider partner network</li>
            <li> The Kentico team is easy to work with</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/wordpress-icon.png\" alt=\"Wordpress - Kentico CMS Support\" title=\"Wordpress - Kentico CMS Support\">
           <ul class=\"listitem\">
            <li> Kentico makes deep content customization easy</li>
            <li> Kentico is inherently more secure than WordPress</li>
            <li> Kentico offers 24/7 support from multiple locations worldwide</li>
            <li> Kentico was created for large websites</li>
            <li> Kentico offers an easier content editing experience for CMS users</li>
            <li> Kentico helps speed up project delivery</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
        </div>
    </div>
  </section>
  <section id=\"4\" class=\"ken-key second_boxcontainer mt-4\">
    <div class=\"container\">
      <h3>Powerful + Flexible Content and Marketing Features</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Web Content Management</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Web-Content-Management.png\" alt=\"Web Content Management - Kentico CMS Support\" title=\"Web Content Management - Kentico CMS Support\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Design, build, and deliver truly outstanding multichannel content experiences</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>E-commerce</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/E-commerce.png\" alt=\"E-commerce - Kentico CMS Support\" title=\"E-commerce - Kentico CMS Support\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Create immersive online shopping experiences customers love, and sell more globally</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/_Online-Marketing.png\" alt=\"Online Marketing - Kentico CMS Support\" title=\"Online Marketing - Kentico CMS Support\"> </div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Automate and optimize campaigns, nurture leads, and turn your prospects into loyal customers</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Data Protection + GDPR</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Intranet-and-Collaboration.png\" alt=\"Intranet and Collaboration - Kentico Gold Partner\" title=\"Intranet and Collaboration - Kentico Gold Partner\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Give website visitors data-security peace of mind with the power to manage their data easily </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Email Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Online-Communities.png\" alt=\"Online Communities - Kentico Gold Partner\" title=\"Online Communities - Kentico Gold Partner\" ></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Reach your subscribers with impressive emails that are easy to create, A/B test, and evaluate</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Content Personalization</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Platform.png\" align=\"CMS Platform - Kentico Gold Partner\" title=\"CMS Platform - Kentico Gold Partner\" ></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Infuse your content with personalized messaging that truly connects with your visitor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

<section id=\"5\" class=\"ken-latest second_boxcontainer\">
<div class=\"container\">
<div class=\"ken-yellowbox\">
<h3 class=\"mt-3 mb-3\">Latest Version: Why Upgrade to Kentico 12?</h3>

<div class=\"ken-latest-content row\" id=\"collapseKenSection\">
<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon4.png\" alt=\"GDPR & Data Protection - Kentico CMS Support\" title=\"GDPR & Data Protection - Kentico CMS Support\" />
<p><strong>True Agile Marketing</strong></p>

<p>Marketers can adjust design and content assets using widgets custom designed by developers for their specific needs and site, enabling more control over pages than ever before.</p>
</div> 

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon5.png\" alt=\"Advanced Email Marketing - Kentico CMS Support\" title=\"Advanced Email Marketing - Kentico CMS Support\" />
<p><strong>Focused + Scalable Web Development</strong></p>

<p>The state-of-the-art MVC web development model separates design and content, allowing developers more freedom and focus to innovate and create.</p>
</div>


<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon6.png\" alt=\"Google Analytics Ecommerce Tracking - Kentico CMS Support\" title=\"Google Analytics Ecommerce Tracking - Kentico CMS Support\" />
<p><strong>Smart Lead Capturing</strong></p>

<p>The new drag-and-drop form builder offers more flexibility and control with smarter, more progressive forms that increase your conversion rate and ability to profile customers.</p>
</div>

</div>
</div>
</div>
</section>

<section id=\"6\" class=\"ken-trouble second_boxcontainer\">
<div class=\"row\">
<div class=\"col-xs-12 col-md-6\"><img src=\"/themes/custom/korone/images/kentio-new/ken-trouble.jpg\" alt=\"Usage of Kentico\" title=\"Usage of Kentico\" /></div>

<div class=\"col-md-6 col-xs-12 ken-trouble-ico\">
<h3>Are you Maximizing Your Usage of Kentico?</h3>

<p>Not all Kentico providers are created equal.  If you are already using Kentico, ask yourself the following questions to maximize your usage and investment.</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/unreliable.png\" alt=\" Kentico\"  title=\"Kentico\" /> 
 <span class=\"mob-view-ke\">Is my Kentico website getting me the right leads?</span>
</p>

<p class=\"mb40\"><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" alt=\" Kentico\"  title=\"Kentico\" /> <span style=\"float: left;margin: -28px 0 0 40px;\">Is my Kentico website engaging with my leads using marketing automation and other next generation strategies?</span></p>

<p><img src=\"/themes/custom/korone/images/kentio-new/struggling-.png\" alt=\" Kentico\"  title=\"Kentico\" /> Is my Kentico website too slow?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/gone-wrong.png\" alt=\" Kentico\"  title=\"Kentico\" /> Do you need integration help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/Slow.png\" alt=\" Kentico\"  title=\"Kentico\" /> Do you need hosting help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\"> Are you happy with your current Kentico service provider? </span></p>

<p>KORCOMPTENZ is a Kentico Gold Partner with proven, experienced teams that can fix tricky integrations, make websites faster, optimize conversions, and rescue bad projects.</p>
</div>
</div>
</section>

<section id=\"7\" class=\"ken-hosting second_boxcontainer\">
<div class=\"row\">
<div class=\"col-md-6 \">
<h3>Kentico Managed Services</h3>

<div class=\"col-xs-12 col-xs-offset-1.5\">
<p><img src=\"/themes/custom/korone/images/kentio-new/website-dev.png\" alt=\" Kentico\"  title=\"Kentico\" /> Kentico Website Development</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/upgrade-q.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\"> Kentico Upgrades (from Kentico 5, 6, 7, 8, 8.1, 8.2, 9, 10 and now 11)</span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/licensing.png\" alt=\" Kentico\"  title=\"Kentico\" /> Kentico Licencing Advice</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/hosting-support.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\">Kentico Hosting, Support and Maintenance </span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/plugins.png\" alt=\" Kentico\"  title=\"Kentico\" /> <span class=\"mob-view-ke\">Plugins, Third-Party Integrations and Mobile Solutions</span></p>
<p> Request a consultation and a KORCOMPTENZ Kentico Specialist will address all of your questions.</p>
</div>
</div>

<div class=\"col-xs-12 col-md-6\"><img class=\"hidden-xs\" src=\"/themes/custom/korone/images/kentio-new/ken-trouble2.jpg\" alt=\"Kentico Managed Services\" title=\"Kentico Managed Services\" /></div>
</div>
</section>

<section id=\"8\" class=\"ken-case second_boxcontainer\">
<div class=\"container\">
<div class=\"col-xs-12 col-md-5 text-center\"><img src=\"/themes/custom/korone/images/kentio-new/ken-bg4.jpg\" alt=\"Kentico CMS Support - Case Studies\"  title=\"Kentico CMS Support - Case Studies\"/></div>

<div class=\"col-xs-12 col-md-7\">
<h3>Case Studies</h3>

<div class=\"ken-cases\">Leverage marketing automation features in Kentico to support a targeted, personalized Customer Journey <a aria-controls=\"kencase1\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase1\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse\" id=\"kencase1\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1a.png\" alt=\"Kentico CMS Support - Case Study 1a\" title=\"Kentico CMS Support - Case Study 1a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1b.png\" alt=\"Kentico CMS Support - Case Study 1b\" title=\"Kentico CMS Support - Case Study 1b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1c.png\" alt=\"Kentico CMS Support - Case Study 1c\" title=\"Kentico CMS Support - Case Study 1c\" /></p>
</div>
</div>

<div class=\"ken-cases\">Identify and deploy a next generation CMS with more flexible features and a lower total cost of ownership than the current system <a aria-controls=\"kencase2\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase2\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase2\">


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2a.png\" alt=\"Kentico CMS Support - Case Study 2a\" title=\"Kentico CMS Support - Case Study 2a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2b.png\" alt=\"Kentico CMS Support - Case Study 2b\" title=\"Kentico CMS Support - Case Study 2b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2c.png\" alt=\"Kentico CMS Support - Case Study 2c\" title=\"Kentico CMS Support - Case Study 2c\" /></p>

</div>
</div>


<div class=\"ken-cases\">Design an internal communication tool that allowed non-technical staff to create new microsites without any programming <a aria-controls=\"kencase3\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase3\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase3\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3a.png\" alt=\"Kentico Gold Partner - Case Study 3a\" title=\"Kentico Gold Partner - Case Study 3a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3b.png\" alt=\"Kentico Gold Partner - Case Study 3b\" title=\"Kentico Gold Partner - Case Study 3b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3c.png\" alt=\"Kentico Gold Partner - Case Study 3c\" title=\"Kentico Gold Partner - Case Study 3c\" /></p>
</div>
</div>
</div>
</div>
</section>

<section id=\"9\" class=\"ken-testimonials second_boxcontainer\">
  \t<div class=\"container\">
  \t\t<h3>Testimonials</h3>
  \t\t<div>
  \t\t\t<div id=\"DemoCarousel\" class=\"carousel slide\" data-interval=\"3000\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <h2>''</h2>
                    <div class=\"carousel-caption\">
                        <p>Korcomptenz has proven themselves to be an extremely intelligent team that not only executes projects on time and on budget, but who also has the insight and knowledge to ask the right questions, avoid pitfalls, and suggest alternate solutions when appropriate. They are also very responsive and pleasant to work with…</p>
  \t\t\t<p><strong>Jaclyn Siegelski </strong></p>
  \t\t\t<p>Account Director, Interactive </p>
                    </div>
                </div>
                <div class=\"item\">
                    <h2>\"</h2>
                    <div class=\"carousel-caption\">
                        <p>The opportunity to work with Korcomptenz has been a wonderfully refreshing experience. Their collaborative guidance and flexibility has given us the ability to move forward in an ever-changing environment, while still delivering a beautiful and consumer friendly platform that fits our constantly evolving needs. Above all, their attention to detail, timeliness and know-how have been invaluable to this project. I am grateful for their support and partnership on this project.</p>
  \t\t\t<p><strong>Sydney Hudson</strong></p>
  \t\t\t<p>Digital Experience Manager, Marketing and Communications</p>
                    </div>
                </div>
                <div class=\"item\">
                    <h2>\"</h2>
                    <div class=\"carousel-caption\">
                       <p>The partnership of Korcomptenz has meant a lot to me over the past year. No matter what the request, they've filled gaps in knowledge, delivery, support, and deployment. I've truly appreciated their capabilities and attitude on each assignment, and in every interaction. </p>
  \t\t\t<p><strong>Dan Nordquist</strong></p>
  \t\t\t<p>Senior Director, Technical Architecture & Development</p>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                <li data-target=\"#DemoCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#DemoCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#DemoCarousel\" data-slide-to=\"2\"></li>
            </ol>
            </div>
        </div>
  \t\t</div>
  \t</div>
  </section>

<section id=\"10\" class=\"ken-aboutus second_boxcontainer mt-4\">
<div class=\"container\">
<h3>Why Korcomptenz?</h3>

<p><img src=\"/themes/custom/korone/images/kentio-new/ken-bg6.jpg\" alt=\"Why Korcomptenz Kentico CMS Support\" title=\"Why Korcomptenz Kentico CMS Support\" /></p>
</div>
</section>
<section id=\"11\" class=\"ken-guide-1 second_boxcontainer\">
    <div class=\"container\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\" alt=\"Contact Kentico Gold Partner\" title=\"Contact Kentico Gold Partner\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Congratulations, you've decided on Kentico!</h3>
        <p>Learn everything you need to kick off Kentico projects with our exclusive Quick Start Guide and receive a free analysis.</p>
        <div class=\"mb30\">
          ";
        // line 491
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_simple_news_letter", array()), "html", null, true));
        echo "
        </div>
\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div>
  </section>
<section id=\"12\" class=\"ken-added-ftr second_boxcontainer\">
<div class=\"container\">
<div class=\"col-xs-12 col-sm-12 col-md-8\">
<h3>What Makes Kentico Different?</h3>

<div class=\"col-xs-12 col-sm-12 col-md-12 mb30\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Highly-secure-.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Complete solution covering content management, online marketing, e-commerce, and social networking removes the hassle of integrating additional technologies while offering an extensible API whenever you need to</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Feature-rich-.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Highly flexible development platform with Visual Studio integration and an open application programming interface (API) for .NET developers</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/techsupport.png\" alt=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">High value at an affordable price with unlimited users and no-cost preproduction</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/security-flaws.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\"  /></div>

<div class=\"col-xs-10 col-sm-11\">Robust multisite management, allowing you to run hundreds or even thousands of websites in a single installation and easily share content</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/full-source-soce.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Unique portal engine development model delivers more out of the box features than any competitor and allows you to develop in half the time</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/ownership.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Responsive 24/7 support and detailed documentation for developers backed by an industry leading 7-day bug fix policy</div>
</div>
</div>
<div class=\"col-xs-12 col-sm-12 col-md-4 knt-sinup\">
<div class=\"bi-banner-form\">
<h2>Sign up for a Free Consultation</h2>
\t<div class=\"col-md-12\">
\t";
        // line 543
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "kentico_supercharged", array()), "html", null, true));
        echo "
\t</div>
     </div>
</div>
</div>
</section>
  <!-- thank ydou Modal -->
  ";
        // line 550
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array())) {
            // line 551
            echo "  <section class=\"responsiveBottomOut\">
    <div class=\"container\">
      <div class=\"responsiveBottom\">
        ";
            // line 554
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_features", array()), "html", null, true));
            echo "
      </div>
    </div>
    
  </section>
  ";
        }
        // line 560
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array())) {
            // line 561
            echo " <section class=\"responsiveContent \">    
    <div class=\"videoPresentation\">
\t ";
            // line 563
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_video", array()), "html", null, true));
            echo "      
    </div>
  </section> 
  ";
        }
        // line 567
        echo " 
 ";
        // line 568
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array())) {
            // line 569
            echo " <section class=\"ProductBottom ServicesTxt\">
\t ";
            // line 570
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_services", array()), "html", null, true));
            echo "
</section> \t 
  ";
        }
        // line 573
        echo "  
  ";
        // line 574
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 575
            echo "  <section class=\"blueband\">
  <div class=\"fullwidth \">
  ";
            // line 577
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
  </div>
  </section>
  ";
        }
        // line 581
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 582
            echo "  <section class=\"greybandOut\">
    <div class=\"container\">
\t";
            // line 584
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "      
    </div>
  </section>
  ";
        }
        // line 588
        echo "</div>
<a id=\"buttontop\" class=\"show\"></a>
<script>
// Scroll Top Script  
var btn = \$('#buttontop');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 50) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  \$('body').animate({scrollTop:0}, '300');
});
</script>
<!--Content End-->
";
        // line 607
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page--node--436.html.twig", 607)->display($context);
        // line 608
        echo "<script>
// smooth scroll
// Select all links with hashes
\$(\".body-nav a\").on('click', function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = \$(this.hash);
      target = target.length ? target : \$('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        \$('html').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var \$target = \$(target);
          \$target.focus();
          if (\$target.is(\":focus\")) { // Checking if the target was focused
            return false;
          } else {
            \$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            \$target.focus(); // Set focus again
          };
        });
      }
    }
  });
  // smooth scroll
</script>

<div class=\"modal fade in\" id=\"homepage_popup\" role=\"dialog\">
<div class=\"modal-dialog\" id=\"homepage_popupid\"><!-- Modal content-->
<div class=\"modal-content\" id=\"homepage_popupcontent\">
<div class=\"modal-body\">
<!--<button class=\"close\" data-dismiss=\"modal\" type=\"button\"></button>-->
<span class=\"close\">×</span>
<script type=\"text/javascript\">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://korcomptenz.mautic.net/mautic/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://korcomptenz.mautic.net';
        var MauticLang   = {
            'submittingMessage': \"Please wait...\"
        }
    }
</script>
<script type=\"text/javascript\">
    function verifyCallback_160e429cfea088de03471fb5f32dfaf2( response ) {
        document.getElementById(\"mauticform_input_interactivequiz_recaptcha\").value = response;
    }
</script>


<style type=\"text/css\" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px;color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: \" *\"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
    .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
</style>
<div id=\"mauticform_wrapper_interactivequiz\" class=\"mauticform_wrapper\">
    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"https://korcomptenz.mautic.net/form/submit?formId=4\" id=\"mauticform_interactivequiz\" data-mautic-form=\"interactivequiz\" enctype=\"multipart/form-data\">
        <div class=\"mauticform-error\" id=\"mauticform_interactivequiz_error\"></div>
        <div class=\"mauticform-message\" id=\"mauticform_interactivequiz_message\"></div>
        <div class=\"mauticform-innerform\">

            
          <div class=\"mauticform-page-wrapper mauticform-page-1\" data-mautic-form-page=\"1\">

            <div id=\"mauticform_interactivequiz_question_1\" class=\"mauticform-row mauticform-freehtml mauticform-field-1\">
                <div id=\"mauticform_input_interactivequiz_question_1\" name=\"mauticform[question_1]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 1</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_what_are_you_hoping_to_ac\" data-validate=\"what_are_you_hoping_to_ac\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-2 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience1\">What are you hoping to achieve with your next generation website?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_BetterExperience0\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience0\" type=\"radio\" value=\"Better Experience\">
                        Better Experience
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_MoreTraffic1\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_MoreTraffic1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_MoreTraffic1\" type=\"radio\" value=\"More Traffic\">
                        More Traffic
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_IncreasedConversions2\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_IncreasedConversions2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_IncreasedConversions2\" type=\"radio\" value=\"Increased Conversions\">
                        Increased Conversions
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_AlloftheAbove3\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_AlloftheAbove3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_AlloftheAbove3\" type=\"radio\" value=\"All of the Above\">
                        All of the Above
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-3\" data-mautic-form-pagebreak=\"1\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next\" name=\"mauticform[next]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" style=\"display: none;\" data-mautic-form-pagebreak-button=\"prev\"></button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next\" name=\"mauticform[next]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-2\" data-mautic-form-page=\"2\">

            <div id=\"mauticform_interactivequiz_question_2\" class=\"mauticform-row mauticform-freehtml mauticform-field-4\">
                <div id=\"mauticform_input_interactivequiz_question_2\" name=\"mauticform[question_2]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 2</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_how_familiar_are_you_with\" data-validate=\"how_familiar_are_you_with\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-5 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar1\">How familiar are you with Customer Journeys and Marketing Automation?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_VeryFamiliar0\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar0\" type=\"radio\" value=\"Very Familiar\">
                        Very Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_SomewhatFamiliar1\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_SomewhatFamiliar1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_SomewhatFamiliar1\" type=\"radio\" value=\"Somewhat Familiar\">
                        Somewhat Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_BarelyFamiliar2\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_BarelyFamiliar2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_BarelyFamiliar2\" type=\"radio\" value=\"Barely Familiar\">
                        Barely Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_NotallFamiliar3\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_NotallFamiliar3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_NotallFamiliar3\" type=\"radio\" value=\"Not all Familiar\">
                        Not all Familiar
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next1\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-6\" data-mautic-form-pagebreak=\"2\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next1\" name=\"mauticform[next1]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next1\" name=\"mauticform[next1]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-3\" data-mautic-form-page=\"3\">

            <div id=\"mauticform_interactivequiz_question_3\" class=\"mauticform-row mauticform-freehtml mauticform-field-7\">
                <div id=\"mauticform_input_interactivequiz_question_3\" name=\"mauticform[question_3]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 3</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_how_long_has_it_been_sinc\" data-validate=\"how_long_has_it_been_sinc\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-8 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years1\">How long has it been since your last website redesign?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_LessThan2Years0\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years0\" type=\"radio\" value=\"Less Than 2 Years\">
                        Less Than 2 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_Between2and3Years1\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between2and3Years1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between2and3Years1\" type=\"radio\" value=\"Between 2 and 3 Years\">
                        Between 2 and 3 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_Between3and4Years2\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between3and4Years2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between3and4Years2\" type=\"radio\" value=\"Between 3 and 4 Years\">
                        Between 3 and 4 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_OverFourYears3\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_OverFourYears3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_OverFourYears3\" type=\"radio\" value=\"Over Four Years\">
                        Over Four Years
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next2\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-9\" data-mautic-form-pagebreak=\"3\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next2\" name=\"mauticform[next2]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next2\" name=\"mauticform[next2]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-4\" data-mautic-form-page=\"4\">

            <div id=\"mauticform_interactivequiz_question_4\" class=\"mauticform-row mauticform-freehtml mauticform-field-10\">
                <div id=\"mauticform_input_interactivequiz_question_4\" name=\"mauticform[question_4]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 4</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_have_you_already_chosen_k\" data-validate=\"have_you_already_chosen_k\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-11 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_IveChosenKentico1\">Have you already chosen Kentico CMS or are you evaluating other platforms?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_have_you_already_chosen_k_Kentico0\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_Kentico0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[have_you_already_chosen_k]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_have_you_already_chosen_k_Kentico0\" type=\"radio\" value=\"Kentico\">
                        I've Chosen Kentico
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_have_you_already_chosen_k_OtherPlatforms1\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_OtherPlatforms1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[have_you_already_chosen_k]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_have_you_already_chosen_k_OtherPlatforms1\" type=\"radio\" value=\"Other Platforms\">
                        I'm Evaluating Other Platforms
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next3\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-12\" data-mautic-form-pagebreak=\"4\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next3\" name=\"mauticform[next3]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next3\" name=\"mauticform[next3]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>



          <div class=\"mauticform-page-wrapper mauticform-page-5\" data-mautic-form-page=\"5\">

            <div id=\"mauticform_interactivequiz_question_5\" class=\"mauticform-row mauticform-freehtml mauticform-field-13\">
                <div id=\"mauticform_input_interactivequiz_question_5\" name=\"mauticform[question_5]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Almost Finished!  Enter Your Details Below:</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_f_name\" class=\"mauticform-row mauticform-text mauticform-field-14 mauticform-required col-md-6\" data-validate=\"f_name\" data-validation-type=\"text\">
                <label id=\"mauticform_label_interactivequiz_f_name\" for=\"mauticform_input_interactivequiz_f_name\" class=\"mauticform-label\">Name</label>
                <input id=\"mauticform_input_interactivequiz_f_name\" name=\"mauticform[f_name]\" value=\"\" class=\"mauticform-input form-text\" type=\"text\">
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please enter your name</span>
            </div>

            <div id=\"mauticform_interactivequiz_email\" class=\"mauticform-row mauticform-email mauticform-field-15 mauticform-required col-md-6\" data-validate=\"email\" data-validation-type=\"email\">
                <label id=\"mauticform_label_interactivequiz_email\" for=\"mauticform_input_interactivequiz_email\" class=\"mauticform-label\">Email</label>
                <input id=\"mauticform_input_interactivequiz_email\" name=\"mauticform[email]\" value=\"\" class=\"mauticform-input form-text\" type=\"email\">
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please enter your email</span>
            </div>

                <input id=\"mauticform_input_interactivequiz_nav\" name=\"mauticform[nav]\" value=\"No\" class=\"mauticform-hidden\" type=\"hidden\">


    \t

\t<div id=\"mauticform_interactivequiz_recaptcha\" class=\"mauticform-row mauticform-div-wrapper mauticform-field-17\">
        
\t    <div class=\"g-recaptcha\" data-sitekey=\"6LciDowUAAAAALQ01e6PgKm8i1HZw_Msl9a_7Ckw\" data-callback=\"verifyCallback_160e429cfea088de03471fb5f32dfaf2\"></div>
        <input id=\"mauticform_input_interactivequiz_recaptcha\" name=\"mauticform[recaptcha]\" value=\"\" class=\"mauticform-input\" type=\"hidden\">
        <span class=\"mauticform-errormsg\" style=\"display: none;\"></span>
    </div>

            <div id=\"mauticform_interactivequiz_submit\" class=\"mauticform-row mauticform-button-wrapper mauticform-field-18\">
                <button type=\"submit\" name=\"mauticform[submit]\" id=\"mauticform_input_interactivequiz_submit\" value=\"\" class=\"mauticform-button btn btn-default mt-3\">Submit</button>
            </div>
            </div>
        </div>


        <input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform_interactivequiz_id\" value=\"4\">
        <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform_interactivequiz_return\" value=\"\">
        <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform_interactivequiz_name\" value=\"interactivequiz\">

        </form>
</div>
</div>
</div>
</div>
</div>

<style type=\"text/css\">.cust-demands-pnts li { color:#fff; text-align:left;}
.PatientJourneyBannerRight .kentico h3 { font-weight:normal !important;}
.mb40 { margin-bottom: 40px !important;}.modal { background-color: rgba(0, 0, 0, 0.4);} #homepage_popupid {top: 150px;}
/* New CSS start 04-02-19 */
@media (min-width: 667px) and (max-width:992px) {
\t#homepage_popupid {top: 80px;}
\t.mauticform-radiogrp-row { margin-bottom: 0px; }
\t#mauticform_interactivequiz_what_are_you_hoping_to_ac .mauticform-label {
\t\tmargin-bottom: 10px;
\t}
\t.mauticform-row {
\t\tdisplay: block;
\t\tmargin-bottom: 20px;
\t}
\t.kentico .hidden-xs {
\t\tdisplay: block;
\t}
}
@media (min-width: 768px) and (max-width:992px) {
\t.kentico .hidden-xs {
\t\tdisplay: block;
\t}
}
/* New CSS end 04-02-19 */
</style>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--node--436.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 608,  646 => 607,  625 => 588,  618 => 584,  614 => 582,  611 => 581,  604 => 577,  600 => 575,  598 => 574,  595 => 573,  589 => 570,  586 => 569,  584 => 568,  581 => 567,  574 => 563,  570 => 561,  567 => 560,  558 => 554,  553 => 551,  551 => 550,  541 => 543,  486 => 491,  97 => 105,  87 => 98,  46 => 60,  43 => 59,);
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
<div class=\"main-container kentico\"> 
  <!--Inner Banner-->
  <section class=\"kntc-banner\"> 
  <a href=\"#homepage_popup\" id=\"myModal\">
  <img src=\"/themes/custom/korone/images/kentio-new/kentico-mainbanner.jpg\" class=\"\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" > </a>
  </section>
<h1 class=\"seo-h1-hidden\">kentico CMS Support</h1>
 <section class=\"body-nav\">
  <div class=\"container-fluid\">
    <div class=\"row body-nav-item py-2 bg-light\">
      <div class=\"col-12 text-center col-lg-2 \">
        <button class=\"quick-nav-btn\"> <img src=\"/themes/custom/korone/images/quick-navigation.png\" width=\"30\" alt=\"Quick Nav\"> Quick Nav </button>
      </div>
      <div class=\" col-lg-10 col-12 \">
        <div class=\"row justify-center\"> <a href=\"#1\"> What is Kentico? <span class=\"nicons\"></span> </a> <a href=\"#2\"> Who uses Kentico? <span class=\"nicons\"></span> </a> <a href=\"#3\"> Why Kentico is the Better Choice <span class=\"nicons\"></span> </a><a href=\"#4\"> Kentico Key Features <span class=\"nicons\"></span> </a> <a href=\"#5\"> Latest Version Kentico 12 <span class=\"nicons\"></span> </a> <a href=\"#6\"> Usage of Kentico <span class=\"nicons\"></span> </a> <a href=\"#7\"> Kentico Managed Services <span class=\"nicons\"></span> </a> <a href=\"#8\"> Case Studies <span class=\"nicons\"></span> </a> <a href=\"#9\"> Testimonials <span class=\"nicons\"></span> </a> <a href=\"#10\"> Why Korcomptenz <span class=\"nicons\"></span> </a><a href=\"#11\"> Download Quick Start Guide <span class=\"nicons\"></span> </a> <a href=\"#12\"> What Makes Kentico Different <span class=\"nicons\"></span> </a> </div>
      </div>
    </div>
  </div>
</section>

<section id=\"1\" class=\"kntc-slider-1\">
<div class=\"container\">
<div class=\"row m-0\">
<div class=\"col-md-6 col-lg-6\">
<h1>Kentico Implementation – What is Kentico?</h1>

<p>Kentico CMS is a leading Content Management and Enterprise Marketing Solution on Microsoft's .NET platform. It has been recognized by Gartner, Microsoft, Deloitte, and Gleanster, and is the only fully integrated, all-in-one solution that allows you to rapidly and effectively improve your customer experience.</p>

<img src=\"/themes/custom/korone/images/kentio-new/goldpartner.png\" class=\"\" alt=\"Kentico Gold Partner\" title=\"Kentico Gold Partner\">

</div>
<div class=\"col-md-6 col-lg-6\">
<div class=\"ken-guide mb30\">
<h2>Download Your Kentico Guide</h2>
<p>Learn everything you need to know about Kentico CMS. See how this best-in-class platform can engage more customers and convert more leads. Receive a free analysis from the experts at KORCOMPTENZ.</p>
{{ page.home_banner }}
 </div>

</div>
</div>
</div>
</section>
 {{ page.content }}
 <section id=\"2\" class=\"kntc-whouses second_boxcontainer mt-4\">
  <div class=\"row\">
  \t<h3>Who uses Kentico?</h3>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Countries Using Kentico 
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">USA</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">United Kingdom</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Australia </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Netherlands</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Germany</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Industries Using Kentico 

  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Health/Pharmaceutics </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Education </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Not-for-Profit/Charity  </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Ecommerce </div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Building/Construction </div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Competencies of Kentico
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Development + Integration</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">E-commerce</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Microsoft Azure</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Online Marketing</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\"> Quality Expert</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3\">
  \t\t<ul>
  \t\t\t<li class=\"\">
  \t\t\t\tTop Users of Kentico
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Business Owners + Entrepreneurs</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Marketers</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Content Creators</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Ecommerce Professionals</div>
  \t\t\t</li>
  \t\t\t<li class=\"\">
  \t\t\t\t<div class=\"col-xs-12\">Corporate Communicators</div>
  \t\t\t</li>
  \t\t</ul>
  \t</div>
  \t
  </div>
  </section>
  <section id=\"3\" class=\"ken-cust-demnds second_boxcontainer\">
    <div class=\"container\">
        <div class=\"col-xs-12 kenmidttle\">
          <h3>Why Kentico is the Better Choice for Your Organization?</h3>
        </div>
        <div class=\"row cust-demands-pnts\">
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/kentico-icon.png\" alt=\"Kentico Gold Partner\" title=\"Kentico Gold Partner\">
            <ul class=\"listitem\">
            <li> Kentico has 1,000 partners in 80+ countries, ready to help with projects</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            <li> Kentico licensing has no limitation on page views or number of items</li>
            <li> Kentico has huge pool of resources and developers</li>
            <li> Kentico has fully integrated e-commerce from day one</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-sirecore-icon.png\" alt=\"Sitecore - Kentico CMS Support\" title=\"Sitecore - Kentico CMS Support\">
            <ul class=\"listitem\">
            <li> Kentico truly is an all-in-one platform unlike Sitecore</li>
            <li> Kentico EMS licensing includes all of the features you need like CMS, Online Marketing, Online Communities and E-commerce</li>
            <li> Kentico provides better value for money</li>
            <li> Kentico has wider partner network</li>
            <li> The Kentico team is easy to work with</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/wordpress-icon.png\" alt=\"Wordpress - Kentico CMS Support\" title=\"Wordpress - Kentico CMS Support\">
           <ul class=\"listitem\">
            <li> Kentico makes deep content customization easy</li>
            <li> Kentico is inherently more secure than WordPress</li>
            <li> Kentico offers 24/7 support from multiple locations worldwide</li>
            <li> Kentico was created for large websites</li>
            <li> Kentico offers an easier content editing experience for CMS users</li>
            <li> Kentico helps speed up project delivery</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
        </div>
    </div>
  </section>
  <section id=\"4\" class=\"ken-key second_boxcontainer mt-4\">
    <div class=\"container\">
      <h3>Powerful + Flexible Content and Marketing Features</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Web Content Management</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Web-Content-Management.png\" alt=\"Web Content Management - Kentico CMS Support\" title=\"Web Content Management - Kentico CMS Support\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Design, build, and deliver truly outstanding multichannel content experiences</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>E-commerce</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/E-commerce.png\" alt=\"E-commerce - Kentico CMS Support\" title=\"E-commerce - Kentico CMS Support\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Create immersive online shopping experiences customers love, and sell more globally</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/_Online-Marketing.png\" alt=\"Online Marketing - Kentico CMS Support\" title=\"Online Marketing - Kentico CMS Support\"> </div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Automate and optimize campaigns, nurture leads, and turn your prospects into loyal customers</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Data Protection + GDPR</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Intranet-and-Collaboration.png\" alt=\"Intranet and Collaboration - Kentico Gold Partner\" title=\"Intranet and Collaboration - Kentico Gold Partner\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Give website visitors data-security peace of mind with the power to manage their data easily </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Email Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Online-Communities.png\" alt=\"Online Communities - Kentico Gold Partner\" title=\"Online Communities - Kentico Gold Partner\" ></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p>Reach your subscribers with impressive emails that are easy to create, A/B test, and evaluate</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Content Personalization</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Platform.png\" align=\"CMS Platform - Kentico Gold Partner\" title=\"CMS Platform - Kentico Gold Partner\" ></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Infuse your content with personalized messaging that truly connects with your visitor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

<section id=\"5\" class=\"ken-latest second_boxcontainer\">
<div class=\"container\">
<div class=\"ken-yellowbox\">
<h3 class=\"mt-3 mb-3\">Latest Version: Why Upgrade to Kentico 12?</h3>

<div class=\"ken-latest-content row\" id=\"collapseKenSection\">
<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon4.png\" alt=\"GDPR & Data Protection - Kentico CMS Support\" title=\"GDPR & Data Protection - Kentico CMS Support\" />
<p><strong>True Agile Marketing</strong></p>

<p>Marketers can adjust design and content assets using widgets custom designed by developers for their specific needs and site, enabling more control over pages than ever before.</p>
</div> 

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon5.png\" alt=\"Advanced Email Marketing - Kentico CMS Support\" title=\"Advanced Email Marketing - Kentico CMS Support\" />
<p><strong>Focused + Scalable Web Development</strong></p>

<p>The state-of-the-art MVC web development model separates design and content, allowing developers more freedom and focus to innovate and create.</p>
</div>


<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon6.png\" alt=\"Google Analytics Ecommerce Tracking - Kentico CMS Support\" title=\"Google Analytics Ecommerce Tracking - Kentico CMS Support\" />
<p><strong>Smart Lead Capturing</strong></p>

<p>The new drag-and-drop form builder offers more flexibility and control with smarter, more progressive forms that increase your conversion rate and ability to profile customers.</p>
</div>

</div>
</div>
</div>
</section>

<section id=\"6\" class=\"ken-trouble second_boxcontainer\">
<div class=\"row\">
<div class=\"col-xs-12 col-md-6\"><img src=\"/themes/custom/korone/images/kentio-new/ken-trouble.jpg\" alt=\"Usage of Kentico\" title=\"Usage of Kentico\" /></div>

<div class=\"col-md-6 col-xs-12 ken-trouble-ico\">
<h3>Are you Maximizing Your Usage of Kentico?</h3>

<p>Not all Kentico providers are created equal.  If you are already using Kentico, ask yourself the following questions to maximize your usage and investment.</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/unreliable.png\" alt=\" Kentico\"  title=\"Kentico\" /> 
 <span class=\"mob-view-ke\">Is my Kentico website getting me the right leads?</span>
</p>

<p class=\"mb40\"><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" alt=\" Kentico\"  title=\"Kentico\" /> <span style=\"float: left;margin: -28px 0 0 40px;\">Is my Kentico website engaging with my leads using marketing automation and other next generation strategies?</span></p>

<p><img src=\"/themes/custom/korone/images/kentio-new/struggling-.png\" alt=\" Kentico\"  title=\"Kentico\" /> Is my Kentico website too slow?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/gone-wrong.png\" alt=\" Kentico\"  title=\"Kentico\" /> Do you need integration help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/Slow.png\" alt=\" Kentico\"  title=\"Kentico\" /> Do you need hosting help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\"> Are you happy with your current Kentico service provider? </span></p>

<p>KORCOMPTENZ is a Kentico Gold Partner with proven, experienced teams that can fix tricky integrations, make websites faster, optimize conversions, and rescue bad projects.</p>
</div>
</div>
</section>

<section id=\"7\" class=\"ken-hosting second_boxcontainer\">
<div class=\"row\">
<div class=\"col-md-6 \">
<h3>Kentico Managed Services</h3>

<div class=\"col-xs-12 col-xs-offset-1.5\">
<p><img src=\"/themes/custom/korone/images/kentio-new/website-dev.png\" alt=\" Kentico\"  title=\"Kentico\" /> Kentico Website Development</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/upgrade-q.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\"> Kentico Upgrades (from Kentico 5, 6, 7, 8, 8.1, 8.2, 9, 10 and now 11)</span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/licensing.png\" alt=\" Kentico\"  title=\"Kentico\" /> Kentico Licencing Advice</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/hosting-support.png\" alt=\" Kentico\"  title=\"Kentico\" />  <span class=\"mob-view-ke\">Kentico Hosting, Support and Maintenance </span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/plugins.png\" alt=\" Kentico\"  title=\"Kentico\" /> <span class=\"mob-view-ke\">Plugins, Third-Party Integrations and Mobile Solutions</span></p>
<p> Request a consultation and a KORCOMPTENZ Kentico Specialist will address all of your questions.</p>
</div>
</div>

<div class=\"col-xs-12 col-md-6\"><img class=\"hidden-xs\" src=\"/themes/custom/korone/images/kentio-new/ken-trouble2.jpg\" alt=\"Kentico Managed Services\" title=\"Kentico Managed Services\" /></div>
</div>
</section>

<section id=\"8\" class=\"ken-case second_boxcontainer\">
<div class=\"container\">
<div class=\"col-xs-12 col-md-5 text-center\"><img src=\"/themes/custom/korone/images/kentio-new/ken-bg4.jpg\" alt=\"Kentico CMS Support - Case Studies\"  title=\"Kentico CMS Support - Case Studies\"/></div>

<div class=\"col-xs-12 col-md-7\">
<h3>Case Studies</h3>

<div class=\"ken-cases\">Leverage marketing automation features in Kentico to support a targeted, personalized Customer Journey <a aria-controls=\"kencase1\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase1\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse\" id=\"kencase1\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1a.png\" alt=\"Kentico CMS Support - Case Study 1a\" title=\"Kentico CMS Support - Case Study 1a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1b.png\" alt=\"Kentico CMS Support - Case Study 1b\" title=\"Kentico CMS Support - Case Study 1b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1c.png\" alt=\"Kentico CMS Support - Case Study 1c\" title=\"Kentico CMS Support - Case Study 1c\" /></p>
</div>
</div>

<div class=\"ken-cases\">Identify and deploy a next generation CMS with more flexible features and a lower total cost of ownership than the current system <a aria-controls=\"kencase2\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase2\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase2\">


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2a.png\" alt=\"Kentico CMS Support - Case Study 2a\" title=\"Kentico CMS Support - Case Study 2a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2b.png\" alt=\"Kentico CMS Support - Case Study 2b\" title=\"Kentico CMS Support - Case Study 2b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2c.png\" alt=\"Kentico CMS Support - Case Study 2c\" title=\"Kentico CMS Support - Case Study 2c\" /></p>

</div>
</div>


<div class=\"ken-cases\">Design an internal communication tool that allowed non-technical staff to create new microsites without any programming <a aria-controls=\"kencase3\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase3\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase3\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3a.png\" alt=\"Kentico Gold Partner - Case Study 3a\" title=\"Kentico Gold Partner - Case Study 3a\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3b.png\" alt=\"Kentico Gold Partner - Case Study 3b\" title=\"Kentico Gold Partner - Case Study 3b\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3c.png\" alt=\"Kentico Gold Partner - Case Study 3c\" title=\"Kentico Gold Partner - Case Study 3c\" /></p>
</div>
</div>
</div>
</div>
</section>

<section id=\"9\" class=\"ken-testimonials second_boxcontainer\">
  \t<div class=\"container\">
  \t\t<h3>Testimonials</h3>
  \t\t<div>
  \t\t\t<div id=\"DemoCarousel\" class=\"carousel slide\" data-interval=\"3000\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <h2>''</h2>
                    <div class=\"carousel-caption\">
                        <p>Korcomptenz has proven themselves to be an extremely intelligent team that not only executes projects on time and on budget, but who also has the insight and knowledge to ask the right questions, avoid pitfalls, and suggest alternate solutions when appropriate. They are also very responsive and pleasant to work with…</p>
  \t\t\t<p><strong>Jaclyn Siegelski </strong></p>
  \t\t\t<p>Account Director, Interactive </p>
                    </div>
                </div>
                <div class=\"item\">
                    <h2>\"</h2>
                    <div class=\"carousel-caption\">
                        <p>The opportunity to work with Korcomptenz has been a wonderfully refreshing experience. Their collaborative guidance and flexibility has given us the ability to move forward in an ever-changing environment, while still delivering a beautiful and consumer friendly platform that fits our constantly evolving needs. Above all, their attention to detail, timeliness and know-how have been invaluable to this project. I am grateful for their support and partnership on this project.</p>
  \t\t\t<p><strong>Sydney Hudson</strong></p>
  \t\t\t<p>Digital Experience Manager, Marketing and Communications</p>
                    </div>
                </div>
                <div class=\"item\">
                    <h2>\"</h2>
                    <div class=\"carousel-caption\">
                       <p>The partnership of Korcomptenz has meant a lot to me over the past year. No matter what the request, they've filled gaps in knowledge, delivery, support, and deployment. I've truly appreciated their capabilities and attitude on each assignment, and in every interaction. </p>
  \t\t\t<p><strong>Dan Nordquist</strong></p>
  \t\t\t<p>Senior Director, Technical Architecture & Development</p>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                <li data-target=\"#DemoCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#DemoCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#DemoCarousel\" data-slide-to=\"2\"></li>
            </ol>
            </div>
        </div>
  \t\t</div>
  \t</div>
  </section>

<section id=\"10\" class=\"ken-aboutus second_boxcontainer mt-4\">
<div class=\"container\">
<h3>Why Korcomptenz?</h3>

<p><img src=\"/themes/custom/korone/images/kentio-new/ken-bg6.jpg\" alt=\"Why Korcomptenz Kentico CMS Support\" title=\"Why Korcomptenz Kentico CMS Support\" /></p>
</div>
</section>
<section id=\"11\" class=\"ken-guide-1 second_boxcontainer\">
    <div class=\"container\">
      <div class=\"col-lg-3 col-12 text-center text-lg-left\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\" alt=\"Contact Kentico Gold Partner\" title=\"Contact Kentico Gold Partner\"> </div>
      <div class=\"col-lg-9 text-center text-lg-left\">
        <h3 class=\"mt-3 text-center text-lg-left mt-lg-0\">Congratulations, you've decided on Kentico!</h3>
        <p>Learn everything you need to kick off Kentico projects with our exclusive Quick Start Guide and receive a free analysis.</p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div>
  </section>
<section id=\"12\" class=\"ken-added-ftr second_boxcontainer\">
<div class=\"container\">
<div class=\"col-xs-12 col-sm-12 col-md-8\">
<h3>What Makes Kentico Different?</h3>

<div class=\"col-xs-12 col-sm-12 col-md-12 mb30\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Highly-secure-.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Complete solution covering content management, online marketing, e-commerce, and social networking removes the hassle of integrating additional technologies while offering an extensible API whenever you need to</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Feature-rich-.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Highly flexible development platform with Visual Studio integration and an open application programming interface (API) for .NET developers</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/techsupport.png\" alt=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">High value at an affordable price with unlimited users and no-cost preproduction</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/security-flaws.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\"  /></div>

<div class=\"col-xs-10 col-sm-11\">Robust multisite management, allowing you to run hundreds or even thousands of websites in a single installation and easily share content</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/full-source-soce.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Unique portal engine development model delivers more out of the box features than any competitor and allows you to develop in half the time</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/ownership.png\" alt=\"Kentico CMS Support\" title=\"Kentico CMS Support\" /></div>

<div class=\"col-xs-10 col-sm-11\">Responsive 24/7 support and detailed documentation for developers backed by an industry leading 7-day bug fix policy</div>
</div>
</div>
<div class=\"col-xs-12 col-sm-12 col-md-4 knt-sinup\">
<div class=\"bi-banner-form\">
<h2>Sign up for a Free Consultation</h2>
\t<div class=\"col-md-12\">
\t{{ page.kentico_supercharged }}
\t</div>
     </div>
</div>
</div>
</section>
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
<a id=\"buttontop\" class=\"show\"></a>
<script>
// Scroll Top Script  
var btn = \$('#buttontop');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 50) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  \$('body').animate({scrollTop:0}, '300');
});
</script>
<!--Content End-->
{% include '@korone/footer.html.twig' %}
<script>
// smooth scroll
// Select all links with hashes
\$(\".body-nav a\").on('click', function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = \$(this.hash);
      target = target.length ? target : \$('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        \$('html').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var \$target = \$(target);
          \$target.focus();
          if (\$target.is(\":focus\")) { // Checking if the target was focused
            return false;
          } else {
            \$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            \$target.focus(); // Set focus again
          };
        });
      }
    }
  });
  // smooth scroll
</script>

<div class=\"modal fade in\" id=\"homepage_popup\" role=\"dialog\">
<div class=\"modal-dialog\" id=\"homepage_popupid\"><!-- Modal content-->
<div class=\"modal-content\" id=\"homepage_popupcontent\">
<div class=\"modal-body\">
<!--<button class=\"close\" data-dismiss=\"modal\" type=\"button\"></button>-->
<span class=\"close\">×</span>
<script type=\"text/javascript\">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://korcomptenz.mautic.net/mautic/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://korcomptenz.mautic.net';
        var MauticLang   = {
            'submittingMessage': \"Please wait...\"
        }
    }
</script>
<script type=\"text/javascript\">
    function verifyCallback_160e429cfea088de03471fb5f32dfaf2( response ) {
        document.getElementById(\"mauticform_input_interactivequiz_recaptcha\").value = response;
    }
</script>


<style type=\"text/css\" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px;color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: \" *\"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
    .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
</style>
<div id=\"mauticform_wrapper_interactivequiz\" class=\"mauticform_wrapper\">
    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"https://korcomptenz.mautic.net/form/submit?formId=4\" id=\"mauticform_interactivequiz\" data-mautic-form=\"interactivequiz\" enctype=\"multipart/form-data\">
        <div class=\"mauticform-error\" id=\"mauticform_interactivequiz_error\"></div>
        <div class=\"mauticform-message\" id=\"mauticform_interactivequiz_message\"></div>
        <div class=\"mauticform-innerform\">

            
          <div class=\"mauticform-page-wrapper mauticform-page-1\" data-mautic-form-page=\"1\">

            <div id=\"mauticform_interactivequiz_question_1\" class=\"mauticform-row mauticform-freehtml mauticform-field-1\">
                <div id=\"mauticform_input_interactivequiz_question_1\" name=\"mauticform[question_1]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 1</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_what_are_you_hoping_to_ac\" data-validate=\"what_are_you_hoping_to_ac\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-2 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience1\">What are you hoping to achieve with your next generation website?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_BetterExperience0\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_BetterExperience0\" type=\"radio\" value=\"Better Experience\">
                        Better Experience
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_MoreTraffic1\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_MoreTraffic1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_MoreTraffic1\" type=\"radio\" value=\"More Traffic\">
                        More Traffic
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_IncreasedConversions2\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_IncreasedConversions2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_IncreasedConversions2\" type=\"radio\" value=\"Increased Conversions\">
                        Increased Conversions
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_what_are_you_hoping_to_ac_AlloftheAbove3\" for=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_AlloftheAbove3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[what_are_you_hoping_to_ac]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_what_are_you_hoping_to_ac_AlloftheAbove3\" type=\"radio\" value=\"All of the Above\">
                        All of the Above
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-3\" data-mautic-form-pagebreak=\"1\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next\" name=\"mauticform[next]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" style=\"display: none;\" data-mautic-form-pagebreak-button=\"prev\"></button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next\" name=\"mauticform[next]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-2\" data-mautic-form-page=\"2\">

            <div id=\"mauticform_interactivequiz_question_2\" class=\"mauticform-row mauticform-freehtml mauticform-field-4\">
                <div id=\"mauticform_input_interactivequiz_question_2\" name=\"mauticform[question_2]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 2</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_how_familiar_are_you_with\" data-validate=\"how_familiar_are_you_with\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-5 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar1\">How familiar are you with Customer Journeys and Marketing Automation?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_VeryFamiliar0\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_VeryFamiliar0\" type=\"radio\" value=\"Very Familiar\">
                        Very Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_SomewhatFamiliar1\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_SomewhatFamiliar1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_SomewhatFamiliar1\" type=\"radio\" value=\"Somewhat Familiar\">
                        Somewhat Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_BarelyFamiliar2\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_BarelyFamiliar2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_BarelyFamiliar2\" type=\"radio\" value=\"Barely Familiar\">
                        Barely Familiar
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_familiar_are_you_with_NotallFamiliar3\" for=\"mauticform_radiogrp_radio_how_familiar_are_you_with_NotallFamiliar3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_familiar_are_you_with]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_familiar_are_you_with_NotallFamiliar3\" type=\"radio\" value=\"Not all Familiar\">
                        Not all Familiar
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next1\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-6\" data-mautic-form-pagebreak=\"2\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next1\" name=\"mauticform[next1]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next1\" name=\"mauticform[next1]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-3\" data-mautic-form-page=\"3\">

            <div id=\"mauticform_interactivequiz_question_3\" class=\"mauticform-row mauticform-freehtml mauticform-field-7\">
                <div id=\"mauticform_input_interactivequiz_question_3\" name=\"mauticform[question_3]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 3</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_how_long_has_it_been_sinc\" data-validate=\"how_long_has_it_been_sinc\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-8 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years1\">How long has it been since your last website redesign?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_LessThan2Years0\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_LessThan2Years0\" type=\"radio\" value=\"Less Than 2 Years\">
                        Less Than 2 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_Between2and3Years1\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between2and3Years1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between2and3Years1\" type=\"radio\" value=\"Between 2 and 3 Years\">
                        Between 2 and 3 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_Between3and4Years2\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between3and4Years2\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_Between3and4Years2\" type=\"radio\" value=\"Between 3 and 4 Years\">
                        Between 3 and 4 Years
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_how_long_has_it_been_sinc_OverFourYears3\" for=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_OverFourYears3\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[how_long_has_it_been_sinc]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_how_long_has_it_been_sinc_OverFourYears3\" type=\"radio\" value=\"Over Four Years\">
                        Over Four Years
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next2\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-9\" data-mautic-form-pagebreak=\"3\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next2\" name=\"mauticform[next2]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next2\" name=\"mauticform[next2]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>

          <div class=\"mauticform-page-wrapper mauticform-page-4\" data-mautic-form-page=\"4\">

            <div id=\"mauticform_interactivequiz_question_4\" class=\"mauticform-row mauticform-freehtml mauticform-field-10\">
                <div id=\"mauticform_input_interactivequiz_question_4\" name=\"mauticform[question_4]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Question 4</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_have_you_already_chosen_k\" data-validate=\"have_you_already_chosen_k\" data-validation-type=\"radiogrp\" class=\"mauticform-row mauticform-radiogrp mauticform-field-11 mauticform-required\">
                <label class=\"mauticform-label\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_IveChosenKentico1\">Have you already chosen Kentico CMS or are you evaluating other platforms?</label>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_have_you_already_chosen_k_Kentico0\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_Kentico0\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[have_you_already_chosen_k]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_have_you_already_chosen_k_Kentico0\" type=\"radio\" value=\"Kentico\">
                        I've Chosen Kentico
                    </label>
                </div>
                <div class=\"mauticform-radiogrp-row\">
                    <label id=\"mauticform_radiogrp_label_have_you_already_chosen_k_OtherPlatforms1\" for=\"mauticform_radiogrp_radio_have_you_already_chosen_k_OtherPlatforms1\" class=\"mauticform-radiogrp-label\">
                        <input name=\"mauticform[have_you_already_chosen_k]\" class=\"mauticform-radiogrp-radio\" id=\"mauticform_radiogrp_radio_have_you_already_chosen_k_OtherPlatforms1\" type=\"radio\" value=\"Other Platforms\">
                        I'm Evaluating Other Platforms
                    </label>
                </div>
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please select a field</span>
            </div>

            </div>

            <div id=\"mauticform_interactivequiz_next3\" class=\"mauticform-row mauticform-pagebreak-wrapper mauticform-field-12\" data-mautic-form-pagebreak=\"4\" style=\"display: none;\">
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next3\" name=\"mauticform[next3]\" value=\"\" class=\"btn btn-default mautic-pagebreak-back mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"prev\">Previous</button>
                <button type=\"button\" id=\"mauticform_input_interactivequiz_next3\" name=\"mauticform[next3]\" value=\"\" class=\"btn btn-default mautic-pagebreak-next mauticform-pagebreak\" data-mautic-form-pagebreak-button=\"next\">Next</button>
            </div>



          <div class=\"mauticform-page-wrapper mauticform-page-5\" data-mautic-form-page=\"5\">

            <div id=\"mauticform_interactivequiz_question_5\" class=\"mauticform-row mauticform-freehtml mauticform-field-13\">
                <div id=\"mauticform_input_interactivequiz_question_5\" name=\"mauticform[question_5]\" value=\"\" class=\"mauticform-freehtml\">
                    <div class=\"webform-progress-bar__page webform-progress-bar__page--done\">
<b>Almost Finished!  Enter Your Details Below:</b>
</div>
                </div>
            </div>

            <div id=\"mauticform_interactivequiz_f_name\" class=\"mauticform-row mauticform-text mauticform-field-14 mauticform-required col-md-6\" data-validate=\"f_name\" data-validation-type=\"text\">
                <label id=\"mauticform_label_interactivequiz_f_name\" for=\"mauticform_input_interactivequiz_f_name\" class=\"mauticform-label\">Name</label>
                <input id=\"mauticform_input_interactivequiz_f_name\" name=\"mauticform[f_name]\" value=\"\" class=\"mauticform-input form-text\" type=\"text\">
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please enter your name</span>
            </div>

            <div id=\"mauticform_interactivequiz_email\" class=\"mauticform-row mauticform-email mauticform-field-15 mauticform-required col-md-6\" data-validate=\"email\" data-validation-type=\"email\">
                <label id=\"mauticform_label_interactivequiz_email\" for=\"mauticform_input_interactivequiz_email\" class=\"mauticform-label\">Email</label>
                <input id=\"mauticform_input_interactivequiz_email\" name=\"mauticform[email]\" value=\"\" class=\"mauticform-input form-text\" type=\"email\">
                <span class=\"mauticform-errormsg\" style=\"display: none;\">Please enter your email</span>
            </div>

                <input id=\"mauticform_input_interactivequiz_nav\" name=\"mauticform[nav]\" value=\"No\" class=\"mauticform-hidden\" type=\"hidden\">


    \t

\t<div id=\"mauticform_interactivequiz_recaptcha\" class=\"mauticform-row mauticform-div-wrapper mauticform-field-17\">
        
\t    <div class=\"g-recaptcha\" data-sitekey=\"6LciDowUAAAAALQ01e6PgKm8i1HZw_Msl9a_7Ckw\" data-callback=\"verifyCallback_160e429cfea088de03471fb5f32dfaf2\"></div>
        <input id=\"mauticform_input_interactivequiz_recaptcha\" name=\"mauticform[recaptcha]\" value=\"\" class=\"mauticform-input\" type=\"hidden\">
        <span class=\"mauticform-errormsg\" style=\"display: none;\"></span>
    </div>

            <div id=\"mauticform_interactivequiz_submit\" class=\"mauticform-row mauticform-button-wrapper mauticform-field-18\">
                <button type=\"submit\" name=\"mauticform[submit]\" id=\"mauticform_input_interactivequiz_submit\" value=\"\" class=\"mauticform-button btn btn-default mt-3\">Submit</button>
            </div>
            </div>
        </div>


        <input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform_interactivequiz_id\" value=\"4\">
        <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform_interactivequiz_return\" value=\"\">
        <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform_interactivequiz_name\" value=\"interactivequiz\">

        </form>
</div>
</div>
</div>
</div>
</div>

<style type=\"text/css\">.cust-demands-pnts li { color:#fff; text-align:left;}
.PatientJourneyBannerRight .kentico h3 { font-weight:normal !important;}
.mb40 { margin-bottom: 40px !important;}.modal { background-color: rgba(0, 0, 0, 0.4);} #homepage_popupid {top: 150px;}
/* New CSS start 04-02-19 */
@media (min-width: 667px) and (max-width:992px) {
\t#homepage_popupid {top: 80px;}
\t.mauticform-radiogrp-row { margin-bottom: 0px; }
\t#mauticform_interactivequiz_what_are_you_hoping_to_ac .mauticform-label {
\t\tmargin-bottom: 10px;
\t}
\t.mauticform-row {
\t\tdisplay: block;
\t\tmargin-bottom: 20px;
\t}
\t.kentico .hidden-xs {
\t\tdisplay: block;
\t}
}
@media (min-width: 768px) and (max-width:992px) {
\t.kentico .hidden-xs {
\t\tdisplay: block;
\t}
}
/* New CSS end 04-02-19 */
</style>
";
    }
}
