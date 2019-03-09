<?php

/* themes/custom/korone/templates/page--node--1031.html.twig */
class __TwigTemplate_9c15e443c9d183a28d3f8e0288c60fd2d920c6e8fbfb3c5675e82662f08008c3 extends Twig_Template
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
        $tags = array("include" => 59, "if" => 550);
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
        $this->loadTemplate("@korone/header-cmshome.html.twig", "themes/custom/korone/templates/page--node--1031.html.twig", 59)->display($context);
        echo " 

<!--Content-->
<div class=\"main-container kentico\"> 
  <!--Inner Banner-->
  <section class=\"kntc-banner\"> 
  <img src=\"/themes/custom/korone/images/kentio-new/kentico-mainbanner.jpg\" class=\"\" alt=\"kentico\"> 
  </section>
<h1 class=\"seo-h1-hidden\">kentico CMS Support</h1>
<section class=\"kntc-slider-1\">
<div class=\"container\">
<div class=\"col-md-6\">
<h1>What is Kentico?</h1>

<p>Kentico CMS is a leading Content Management and Enterprise Marketing Solution on Microsoft's .NET platform. It has been recognized by Gartner, Microsoft, Deloitte, and Gleanster, and is the only fully integrated, all-in-one solution that allows you to rapidly and effectively improve your customer experience.</p>

<img src=\"/themes/custom/korone/images/kentio-new/goldpartner.png\" class=\"\" alt=\"goldpartner\">

</div>
<div class=\"col-md-6\">
<div class=\"ken-guide mb30\">
<h2>Download Your Kentico Guide</h2>
<p>Learn everything you need to know about Kentico CMS. See how this best-in-class platform can engage more customers and convert more leads. Receive a free analysis from the experts at KORCOMPTENZ.</p>
";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home_banner", array()), "html", null, true));
        echo "
 </div>

</div>
</div>
</section>
 ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
 <section class=\"kntc-whouses\">
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
  <section class=\"ken-cust-demnds\">
    <div class=\"container\">
        <div class=\"col-xs-12 kenmidttle\">
          <h3>Why Kentico is the Better Choice for Your Organization?</h3>
        </div>
        <div class=\"row cust-demands-pnts\">
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/kentico-icon.png\">
            <ul class=\"listitem\">
            <li> Kentico has 1,000 partners in 80+ countries, ready to help with projects</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            <li> Kentico licensing has no limitation on page views or number of items</li>
            <li> Kentico has huge pool of resources and developers</li>
            <li> Kentico has fully integrated e-commerce from day one</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-sirecore-icon.png\">
            <ul class=\"listitem\">
            <li> Kentico truly is an all-in-one platform unlike Sitecore</li>
            <li> Kentico EMS licensing includes all of the features you need like CMS, Online Marketing, Online Communities and E-commerce</li>
            <li> Kentico provides better value for money</li>
            <li> Kentico has wider partner network</li>
            <li> The Kentico team is easy to work with</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/wordpress-icon.png\">
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
  <section class=\"ken-key\">
    <div class=\"container\">
      <h3>Kentico Key Features</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Web Content Management</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Web-Content-Management.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> With much more out-of-the-box functionality than any other vendor, Kentico's WCM solution lets you deliver a consistent customer experience across multiple channels and devices. Proven to integrate with almost any back-end system, Kentico gives you ultimate flexibility, freeing time and resources so you can accomplish more. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>E-commerce</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/E-commerce.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Kentico's E-commerce solution allows you to keep the design of the site navigation and structure of online stores in line with your vision. Simple integration with external systems, easy ways to pay, and support for multiple languages and currencies means developing a consistent global online retail presence is effortless. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/_Online-Marketing.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Using Kentico's Online Marketing solution gives you a fully integrated 360-degree view of your customers, allowing you to personalize every customer experience. With Web Analytics, Lead Scoring, and Marketing Automation you can nurture leads, and analyze and optimize your campaigns to deliver the right message to the right person at the right time. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Intranet and Collaboration</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Intranet-and-Collaboration.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> The Kentico Intranet and Collaboration solution makes empowering workgroups and project teams a hassle-free process for everybody. With easy-to-use Project Management, seamless SharePoint Integration, advanced workgroup collaboration, and customizable department-specific pages, Kentico is the simpler, faster way to smarter working. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Communities</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Online-Communities.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Kentico CMS's Online Communities solution gives you the tools you need to create, manage, and integrate communities socially to drive qualified traffic, bring unique customer insights, and encourage conversations about your brand. With out-of-the-box support for Forums, Blogs, Groups, and more, Kentico helps you build active communities for even greater brand advocacy. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Platform</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Platform.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> The Kentico all-in-one CMS platform offers rich out-of-the-box functionality, an extensive set of features, and incredible levels of customizability for rapid website development. With Open API, Kentico's ASP.NET CMS is proven to integrate with almost any back-end system, giving you ultimate flexibility across all channels. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

<section class=\"ken-latest\">
<div class=\"container\">
<div class=\"ken-yellowbox row\">
<h3><a aria-controls=\"collapseKenSection\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#collapseKenSection\" role=\"button\">Latest in Kentico : Why Upgrade to Kentico 11 <i class=\"arrow down\"></i></a></h3>

<div class=\"ken-latest-content row collapse in\" id=\"collapseKenSection\">
<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon1.png\" />
<p><strong>GDPR and Data Protection</strong></p>

<p>Give your website users the data security they want. Manage consents, access or forget subjects' data, or even export it in machine-readable format, all from one point.</p>
</div> 

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon2.png\" />
<p><strong>Advanced Email Marketing</strong></p>

<p>Connect with your customers easily. With drag-and-drop functionality, and enhanced insights, crafting and executing effective emails and campaigns is faster than ever.</p>
</div>


<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon3.png\" />
<p><strong>Google Analytics E‑commerce Tracking</strong></p>

<p>Get to know your visitors' online behavior in order to boost your website's e-commerce journey. Track exact purchasing details and design the ultimate buying experience.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon4.png\" />
<p><strong>Faceted Search</strong></p>

<p>Let visitors find the content they want quickly. Multiple levels, multiple facets—no matter how you classify your content, searching for it just got a whole lot easier.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon5.png\" />
<p><strong>Enhanced E-commerce</strong></p>

<p>Offer your customers a straightforward buying experience with advanced discount scenarios, easy-to-redeem gift cards or coupons, and the security of delayed payments.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon6.png\" />
<p><strong>Marketo, Salesforce, and Ucommerce Integrations</strong></p>

<p>Look forward to synchronizing your data bidirectionally with Salesforce, utilizing Marketo segments, or creating your e-shop with Ucommerce.</p>
</div>
</div>
</div>
</div>
</section>

<section class=\"ken-trouble\">
<div class=\"row\">
<div class=\"col-xs-12 col-md-6\"><img src=\"/themes/custom/korone/images/kentio-new/ken-trouble.jpg\" /></div>

<div class=\"col-md-6 col-xs-12 ken-trouble-ico\">
<h3>Are you Maximizing Your Usage of Kentico?</h3>

<p>Not all Kentico providers are created equal.  If you are already using Kentico, ask yourself the following questions to maximize your usage and investment.</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/unreliable.png\" /> 
 <span class=\"mob-view-ke\">Is my Kentico website getting me the right leads?</span>
</p>

<p class=\"mb40\"><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" /> <span style=\"float: left;margin: -28px 0 0 40px;\">Is my Kentico website engaging with my leads using marketing automation and other next generation strategies?</span></p>

<p><img src=\"/themes/custom/korone/images/kentio-new/struggling-.png\" /> Is my Kentico website too slow?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/gone-wrong.png\" /> Do you need integration help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/Slow.png\" /> Do you need hosting help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" />  <span class=\"mob-view-ke\"> Are you happy with your current Kentico service provider? </span></p>

<p>KORCOMPTENZ is a Kentico Gold Partner with proven, experienced teams that can fix tricky integrations, make websites faster, optimize conversions, and rescue bad projects.</p>
</div>
</div>
</section>

<section class=\"ken-hosting\">
<div class=\"row\">
<div class=\"col-md-6 \">
<h3>Kentico Managed Services</h3>

<div class=\"col-xs-12 col-xs-offset-1.5\">
<p><img src=\"/themes/custom/korone/images/kentio-new/website-dev.png\" /> Kentico Website Development</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/upgrade-q.png\" />  <span class=\"mob-view-ke\"> Kentico Upgrades (from Kentico 5, 6, 7, 8, 8.1, 8.2, 9, 10 and now 11)</span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/licensing.png\" /> Kentico Licencing Advice</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/hosting-support.png\" />  <span class=\"mob-view-ke\">Kentico Hosting, Support and Maintenance </span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/plugins.png\" /> <span class=\"mob-view-ke\">Plugins, Third-Party Integrations and Mobile Solutions</span></p>
<p> Request a consultation and a KORCOMPTENZ Kentico Specialist will address all of your questions.</p>
</div>
</div>

<div class=\"col-xs-12 col-md-6\"><img class=\"hidden-xs\" src=\"/themes/custom/korone/images/kentio-new/ken-trouble2.jpg\" /></div>
</div>
</section>

<section class=\"ken-case\">
<div class=\"container\">
<div class=\"col-xs-12 col-md-5 text-center\"><img src=\"/themes/custom/korone/images/kentio-new/ken-bg4.jpg\" /></div>

<div class=\"col-xs-12 col-md-7\">
<h3>Case Studies</h3>

<div class=\"ken-cases\">Leverage marketing automation features in Kentico to support a targeted, personalized Customer Journey <a aria-controls=\"kencase1\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase1\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse\" id=\"kencase1\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1c.png\" /></p>
</div>
</div>

<div class=\"ken-cases\">Identify and deploy a next generation CMS with more flexible features and a lower total cost of ownership than the current system <a aria-controls=\"kencase2\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase2\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase2\">


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2c.png\" /></p>

</div>
</div>


<div class=\"ken-cases\">Design an internal communication tool that allowed non-technical staff to create new microsites without any programming <a aria-controls=\"kencase3\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase3\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase3\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3c.png\" /></p>
</div>
</div>
</div>
</div>
</section>

<section class=\"ken-testimonials\">
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

<section class=\"ken-aboutus\">
<div class=\"container\">
<h3>Why Korcomptenz?</h3>

<p><img src=\"/themes/custom/korone/images/kentio-new/ken-bg6.jpg\" /></p>
</div>
</section>
<section class=\"ken-guide-1\">
    <div class=\"container\">
      <div class=\"col-sm-3\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-sm-9\">
        <h3>Congratulations, you've decided on Kentico!</h3>
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
<section class=\"ken-added-ftr\">
<div class=\"container\">
<div class=\"col-xs-12 col-sm-12 col-md-8\">
<h3>What Makes Kentico Different?</h3>

<div class=\"col-xs-12 col-sm-12 col-md-12 mb30\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Highly-secure-.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Complete solution covering content management, online marketing, e-commerce, and social networking removes the hassle of integrating additional technologies while offering an extensible API whenever you need to</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Feature-rich-.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Highly flexible development platform with Visual Studio integration and an open application programming interface (API) for .NET developers</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/techsupport.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">High value at an affordable price with unlimited users and no-cost preproduction</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/security-flaws.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Robust multisite management, allowing you to run hundreds or even thousands of websites in a single installation and easily share content</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/full-source-soce.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Unique portal engine development model delivers more out of the box features than any competitor and allows you to develop in half the time</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/ownership.png\" /></div>

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
<!--Content End-->

";
        // line 591
        $this->loadTemplate("@korone/footer.html.twig", "themes/custom/korone/templates/page--node--1031.html.twig", 591)->display($context);
        // line 592
        echo "<style type=\"text/css\">.cust-demands-pnts li { color:#fff; text-align:left;}
.PatientJourneyBannerRight .kentico h3 { font-weight:normal !important;}
.mb40 { margin-bottom: 40px !important;}
</style>";
    }

    public function getTemplateName()
    {
        return "themes/custom/korone/templates/page--node--1031.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 592,  628 => 591,  623 => 588,  616 => 584,  612 => 582,  609 => 581,  602 => 577,  598 => 575,  596 => 574,  593 => 573,  587 => 570,  584 => 569,  582 => 568,  579 => 567,  572 => 563,  568 => 561,  565 => 560,  556 => 554,  551 => 551,  549 => 550,  539 => 543,  484 => 491,  78 => 88,  69 => 82,  43 => 59,);
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
{% include '@korone/header-cmshome.html.twig' %} 

<!--Content-->
<div class=\"main-container kentico\"> 
  <!--Inner Banner-->
  <section class=\"kntc-banner\"> 
  <img src=\"/themes/custom/korone/images/kentio-new/kentico-mainbanner.jpg\" class=\"\" alt=\"kentico\"> 
  </section>
<h1 class=\"seo-h1-hidden\">kentico CMS Support</h1>
<section class=\"kntc-slider-1\">
<div class=\"container\">
<div class=\"col-md-6\">
<h1>What is Kentico?</h1>

<p>Kentico CMS is a leading Content Management and Enterprise Marketing Solution on Microsoft's .NET platform. It has been recognized by Gartner, Microsoft, Deloitte, and Gleanster, and is the only fully integrated, all-in-one solution that allows you to rapidly and effectively improve your customer experience.</p>

<img src=\"/themes/custom/korone/images/kentio-new/goldpartner.png\" class=\"\" alt=\"goldpartner\">

</div>
<div class=\"col-md-6\">
<div class=\"ken-guide mb30\">
<h2>Download Your Kentico Guide</h2>
<p>Learn everything you need to know about Kentico CMS. See how this best-in-class platform can engage more customers and convert more leads. Receive a free analysis from the experts at KORCOMPTENZ.</p>
{{ page.home_banner }}
 </div>

</div>
</div>
</section>
 {{ page.content }}
 <section class=\"kntc-whouses\">
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
  <section class=\"ken-cust-demnds\">
    <div class=\"container\">
        <div class=\"col-xs-12 kenmidttle\">
          <h3>Why Kentico is the Better Choice for Your Organization?</h3>
        </div>
        <div class=\"row cust-demands-pnts\">
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/kentico-icon.png\">
            <ul class=\"listitem\">
            <li> Kentico has 1,000 partners in 80+ countries, ready to help with projects</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            <li> Kentico licensing has no limitation on page views or number of items</li>
            <li> Kentico has huge pool of resources and developers</li>
            <li> Kentico has fully integrated e-commerce from day one</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-sirecore-icon.png\">
            <ul class=\"listitem\">
            <li> Kentico truly is an all-in-one platform unlike Sitecore</li>
            <li> Kentico EMS licensing includes all of the features you need like CMS, Online Marketing, Online Communities and E-commerce</li>
            <li> Kentico provides better value for money</li>
            <li> Kentico has wider partner network</li>
            <li> The Kentico team is easy to work with</li>
            <li> Kentico has an industry-leading 7-day bug fix policy</li>
            </ul>
          </div>
          <div class=\"col-sm-12 col-md-4\"> <img src=\"/themes/custom/korone/images/kentio-new/wordpress-icon.png\">
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
  <section class=\"ken-key\">
    <div class=\"container\">
      <h3>Kentico Key Features</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Web Content Management</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Web-Content-Management.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> With much more out-of-the-box functionality than any other vendor, Kentico's WCM solution lets you deliver a consistent customer experience across multiple channels and devices. Proven to integrate with almost any back-end system, Kentico gives you ultimate flexibility, freeing time and resources so you can accomplish more. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>E-commerce</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/E-commerce.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Kentico's E-commerce solution allows you to keep the design of the site navigation and structure of online stores in line with your vision. Simple integration with external systems, easy ways to pay, and support for multiple languages and currencies means developing a consistent global online retail presence is effortless. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Marketing</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/_Online-Marketing.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Using Kentico's Online Marketing solution gives you a fully integrated 360-degree view of your customers, allowing you to personalize every customer experience. With Web Analytics, Lead Scoring, and Marketing Automation you can nurture leads, and analyze and optimize your campaigns to deliver the right message to the right person at the right time. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Intranet and Collaboration</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Intranet-and-Collaboration.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> The Kentico Intranet and Collaboration solution makes empowering workgroups and project teams a hassle-free process for everybody. With easy-to-use Project Management, seamless SharePoint Integration, advanced workgroup collaboration, and customizable department-specific pages, Kentico is the simpler, faster way to smarter working. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Online Communities</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Online-Communities.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> Kentico CMS's Online Communities solution gives you the tools you need to create, manage, and integrate communities socially to drive qualified traffic, bring unique customer insights, and encourage conversations about your brand. With out-of-the-box support for Forums, Blogs, Groups, and more, Kentico helps you build active communities for even greater brand advocacy. </p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-12 col-md-6 col-xs-12 \">
          <div class=\"ken-key-box\">
            <h4>Platform</h4>
            <div class=\"col-xs-4\"><img src=\"/themes/custom/korone/images/kentio-new/Platform.png\"></div>
            <div class=\"col-sm-8 col-xs-12 \">
              <p> The Kentico all-in-one CMS platform offers rich out-of-the-box functionality, an extensive set of features, and incredible levels of customizability for rapid website development. With Open API, Kentico's ASP.NET CMS is proven to integrate with almost any back-end system, giving you ultimate flexibility across all channels. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

<section class=\"ken-latest\">
<div class=\"container\">
<div class=\"ken-yellowbox row\">
<h3><a aria-controls=\"collapseKenSection\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#collapseKenSection\" role=\"button\">Latest in Kentico : Why Upgrade to Kentico 11 <i class=\"arrow down\"></i></a></h3>

<div class=\"ken-latest-content row collapse in\" id=\"collapseKenSection\">
<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon1.png\" />
<p><strong>GDPR and Data Protection</strong></p>

<p>Give your website users the data security they want. Manage consents, access or forget subjects' data, or even export it in machine-readable format, all from one point.</p>
</div> 

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon2.png\" />
<p><strong>Advanced Email Marketing</strong></p>

<p>Connect with your customers easily. With drag-and-drop functionality, and enhanced insights, crafting and executing effective emails and campaigns is faster than ever.</p>
</div>


<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon3.png\" />
<p><strong>Google Analytics E‑commerce Tracking</strong></p>

<p>Get to know your visitors' online behavior in order to boost your website's e-commerce journey. Track exact purchasing details and design the ultimate buying experience.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon4.png\" />
<p><strong>Faceted Search</strong></p>

<p>Let visitors find the content they want quickly. Multiple levels, multiple facets—no matter how you classify your content, searching for it just got a whole lot easier.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon5.png\" />
<p><strong>Enhanced E-commerce</strong></p>

<p>Offer your customers a straightforward buying experience with advanced discount scenarios, easy-to-redeem gift cards or coupons, and the security of delayed payments.</p>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-4\"><img src=\"/themes/custom/korone/images/kentio-new/ken-color-icon6.png\" />
<p><strong>Marketo, Salesforce, and Ucommerce Integrations</strong></p>

<p>Look forward to synchronizing your data bidirectionally with Salesforce, utilizing Marketo segments, or creating your e-shop with Ucommerce.</p>
</div>
</div>
</div>
</div>
</section>

<section class=\"ken-trouble\">
<div class=\"row\">
<div class=\"col-xs-12 col-md-6\"><img src=\"/themes/custom/korone/images/kentio-new/ken-trouble.jpg\" /></div>

<div class=\"col-md-6 col-xs-12 ken-trouble-ico\">
<h3>Are you Maximizing Your Usage of Kentico?</h3>

<p>Not all Kentico providers are created equal.  If you are already using Kentico, ask yourself the following questions to maximize your usage and investment.</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/unreliable.png\" /> 
 <span class=\"mob-view-ke\">Is my Kentico website getting me the right leads?</span>
</p>

<p class=\"mb40\"><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" /> <span style=\"float: left;margin: -28px 0 0 40px;\">Is my Kentico website engaging with my leads using marketing automation and other next generation strategies?</span></p>

<p><img src=\"/themes/custom/korone/images/kentio-new/struggling-.png\" /> Is my Kentico website too slow?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/gone-wrong.png\" /> Do you need integration help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/Slow.png\" /> Do you need hosting help?</p>

<p><img src=\"/themes/custom/korone/images/kentio-new/userfriendly.png\" />  <span class=\"mob-view-ke\"> Are you happy with your current Kentico service provider? </span></p>

<p>KORCOMPTENZ is a Kentico Gold Partner with proven, experienced teams that can fix tricky integrations, make websites faster, optimize conversions, and rescue bad projects.</p>
</div>
</div>
</section>

<section class=\"ken-hosting\">
<div class=\"row\">
<div class=\"col-md-6 \">
<h3>Kentico Managed Services</h3>

<div class=\"col-xs-12 col-xs-offset-1.5\">
<p><img src=\"/themes/custom/korone/images/kentio-new/website-dev.png\" /> Kentico Website Development</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/upgrade-q.png\" />  <span class=\"mob-view-ke\"> Kentico Upgrades (from Kentico 5, 6, 7, 8, 8.1, 8.2, 9, 10 and now 11)</span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/licensing.png\" /> Kentico Licencing Advice</p>
<p><img src=\"/themes/custom/korone/images/kentio-new/hosting-support.png\" />  <span class=\"mob-view-ke\">Kentico Hosting, Support and Maintenance </span></p>
<p><img src=\"/themes/custom/korone/images/kentio-new/plugins.png\" /> <span class=\"mob-view-ke\">Plugins, Third-Party Integrations and Mobile Solutions</span></p>
<p> Request a consultation and a KORCOMPTENZ Kentico Specialist will address all of your questions.</p>
</div>
</div>

<div class=\"col-xs-12 col-md-6\"><img class=\"hidden-xs\" src=\"/themes/custom/korone/images/kentio-new/ken-trouble2.jpg\" /></div>
</div>
</section>

<section class=\"ken-case\">
<div class=\"container\">
<div class=\"col-xs-12 col-md-5 text-center\"><img src=\"/themes/custom/korone/images/kentio-new/ken-bg4.jpg\" /></div>

<div class=\"col-xs-12 col-md-7\">
<h3>Case Studies</h3>

<div class=\"ken-cases\">Leverage marketing automation features in Kentico to support a targeted, personalized Customer Journey <a aria-controls=\"kencase1\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase1\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse\" id=\"kencase1\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study1c.png\" /></p>
</div>
</div>

<div class=\"ken-cases\">Identify and deploy a next generation CMS with more flexible features and a lower total cost of ownership than the current system <a aria-controls=\"kencase2\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase2\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase2\">


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study2c.png\" /></p>

</div>
</div>


<div class=\"ken-cases\">Design an internal communication tool that allowed non-technical staff to create new microsites without any programming <a aria-controls=\"kencase3\" aria-expanded=\"false\" class=\"collapsed\" data-toggle=\"collapse\" href=\"#kencase3\" role=\"button\"><span>More <i class=\"arrow down\"></i></span></a>

<div class=\"collapse \" id=\"kencase3\">

<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3a.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3b.png\" /></p>


<p class=\"mt40\"><img src=\"/themes/custom/korone/images/kentio-new/case-study3c.png\" /></p>
</div>
</div>
</div>
</div>
</section>

<section class=\"ken-testimonials\">
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

<section class=\"ken-aboutus\">
<div class=\"container\">
<h3>Why Korcomptenz?</h3>

<p><img src=\"/themes/custom/korone/images/kentio-new/ken-bg6.jpg\" /></p>
</div>
</section>
<section class=\"ken-guide-1\">
    <div class=\"container\">
      <div class=\"col-sm-3\"> <img src=\"/themes/custom/korone/images/kentio-new/ken-contact.jpg\"> </div>
      <div class=\"col-sm-9\">
        <h3>Congratulations, you've decided on Kentico!</h3>
        <p>Learn everything you need to kick off Kentico projects with our exclusive Quick Start Guide and receive a free analysis.</p>
        <div class=\"mb30\">
          {{ page.footer_simple_news_letter }}
        </div>
\t\t
        <p>Don't need the guide? You can still <a href=\"/request-consultation\" title=\"request a consultation\">request a consultation</a> and receive a no-cost estimate.</p>
      </div>
    </div>
  </section>
<section class=\"ken-added-ftr\">
<div class=\"container\">
<div class=\"col-xs-12 col-sm-12 col-md-8\">
<h3>What Makes Kentico Different?</h3>

<div class=\"col-xs-12 col-sm-12 col-md-12 mb30\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Highly-secure-.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Complete solution covering content management, online marketing, e-commerce, and social networking removes the hassle of integrating additional technologies while offering an extensible API whenever you need to</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/Feature-rich-.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Highly flexible development platform with Visual Studio integration and an open application programming interface (API) for .NET developers</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/techsupport.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">High value at an affordable price with unlimited users and no-cost preproduction</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/security-flaws.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Robust multisite management, allowing you to run hundreds or even thousands of websites in a single installation and easily share content</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/full-source-soce.png\" /></div>

<div class=\"col-xs-10 col-sm-11\">Unique portal engine development model delivers more out of the box features than any competitor and allows you to develop in half the time</div>
</div>

<div class=\"col-xs-12 col-sm-12 col-md-12 mo-bo-sp\">
<div class=\"col-xs-2 col-sm-1\"><img src=\"/themes/custom/korone/images/kentio-new/ownership.png\" /></div>

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
<!--Content End-->

{% include '@korone/footer.html.twig' %}
<style type=\"text/css\">.cust-demands-pnts li { color:#fff; text-align:left;}
.PatientJourneyBannerRight .kentico h3 { font-weight:normal !important;}
.mb40 { margin-bottom: 40px !important;}
</style>";
    }
}
