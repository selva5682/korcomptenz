<?php

/* @korone/header-primary-menu.html.twig */
class __TwigTemplate_dcc62488f414e08e4759b37f103c210de3994884d8b29427f6233cbac2ddeff0 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 8
        echo "\t<nav class=\"navbar navbar-expand-lg \">
\t\t\t<div class=\"col-12\"> 
\t\t\t\t<a class=\"navbar-brand mt-2 mt-lg-0\" href=\"/\">
\t\t\t\t\t<img src=\"";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/korcomptenz-logo.png\" alt=\"Korcomptenz\" class=\"mt-2\" />
\t\t\t\t</a> 
\t\t\t\t<!--<span class=\"floater\">Creating Lasting Value. Providing Competitive Advantage</span>--> 
\t\t\t\t<button style=\"font-size:30px;cursor:pointer\" class=\"navbar-toggler\" onclick=\"openNav()\"> 
\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t  <div class=\"collapse navbar-collapse float-right \" id=\"navbarSupportedContent\"> 
\t\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
\t\t\t\t<ul class=\"navbar-nav sidenav \" id=\"mySidenav\">
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/about-us\">About</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/request-consultation\">Contact</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/careers\">Careers</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/why-korcomptenz\">Why Korcomptenz?</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/resources\">Resources</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/blog\">Blog</a></li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t\t<a class=\"nav-link dropdown-toggle mobilmenu openmenu1 d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our </span> <br> SOLUTIONS </a> 
\t\t\t\t\t<a class=\"nav-link dropdown-toggle mobilmenu openmenu1 d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our </span> <br> SOLUTIONS </a> 
\t\t\t\t\t\t<strong class=\"openmenu1\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu1\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t  <div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 offset-lg-1 box-menu\"> <a href=\"/web-mobile-technology\"><span style=\"font-size: 1rem; font-weight: normal;\">WEB + MOBILE </span>
\t\t\t\t\t\t  <p>Technology</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#web_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"web_solutions\">Web Solutions</a>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"web_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/website-development\" class=\"btn-menu\" title=\"Website Development\"> Website Development</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/website-design\" class=\"btn-menu\" title=\"Website Development\"> Website Design</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/web-support-and-hosting\" class=\"btn-menu\" title=\"Web Support and Hosting\"> Web Support and Hosting</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/web-integration\" class=\"btn-menu\" title=\"Web Integration\"> Web Integration</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#mobile_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"mobile_solutions\">Mobile Solutions</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"mobile_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"Android\"> Android</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"IOS\"> IOS</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"Enterprise Mobility Applications\"> Enterprise Mobility Applications</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#engagement_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"engagement_solutions\">Engagement Solution</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"engagement_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/magento\" class=\"btn-menu\" title=\"Magento\"> Magento</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce\" class=\"btn-menu\" title=\"Salesforce\"> Salesforce</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"MS CRM\"> MS CRM</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mautic\" class=\"btn-menu\" title=\"Mautic\"> Mautic</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#consulting_stratgey\" role=\"button\" aria-expanded=\"false\" aria-controls=\"consulting_stratgey\">Consulting & Stratgey</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"consulting_stratgey\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/small-midsize-business-solutions\" class=\"btn-menu\" title=\"Small-midsize Business\"> Small-midsize Business</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/enterprise-business-solutions\" class=\"btn-menu\" title=\"Enterprise\"> Enterprise</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/advertising-agency\" class=\"btn-menu\" title=\"Advertising Agencies\"> Advertising Agencies</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#How_it_Works\" role=\"button\" aria-expanded=\"false\" aria-controls=\"How_it_Works\">How it Works ?</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"How_it_Works\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/dedicated-teams\" class=\"btn-menu\" title=\"Dedicated Teams\"> Dedicated Teams</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/fixed-bid-projects\" class=\"btn-menu\" title=\"Fixed Bid Projects\"> Fixed Bid Projects</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/time-and-materials\" class=\"btn-menu\" title=\"Time and Material\"> Time and Material</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  <!--<a href=\"/web-marketing-technology\" class=\"btn-menu\" title=\"Web + Marketing Technology Strategy\"> Web + Marketing Technology Strategy</a>
\t\t\t\t\t\t  <a href=\"/responsive-web-design\" class=\"btn-menu\">Responsive Web Design</a> 
\t\t\t\t\t\t  <a href=\"/cms\" class=\"btn-menu\"> Content Management Systems</a> 
\t\t\t\t\t\t  <a href=\"/customer-journeys-marketing-automation\" class=\"btn-menu\"> Customer Journeys + Marketing Automation</a> 
\t\t\t\t\t\t  <a href=\"/mobile-app-development\" class=\"btn-menu\"> Mobile Apps</a> 
\t\t\t\t\t\t  <a href=\"/email-marketing-digital-messaging\" class=\"btn-menu\"> Email Marketing + Digital Messaging</a>--> \t\t\t\t\t\t   
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-2 box-menu\"> 
\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-business-solutions\"><span style=\"font-size: 1rem; font-weight: normal;\">MICROSOFT DYNAMICS</span>
\t\t\t\t\t\t  <p>ERP Solutions</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics365\" class=\"btn-menu\"> Microsoft Dynamics 365</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-nav\" class=\"btn-menu\">Microsoft Dynamics NAV</a> 
\t\t\t\t\t\t\t  <!--<a href=\"\" class=\"btn-menu\"> Customer Portal For NAV</a>--> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-gp\" class=\"btn-menu\"> Microsoft Dynamics GP</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-ax\" class=\"btn-menu\"> Microsoft Dynamics AX</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-crm\" class=\"btn-menu\">Microsoft Dynamics CRM</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-bi\" class=\"btn-menu\"> Microsoft Dynamics Power BI</a> 
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-2 box-menu\"><a href=\"/sap-hana-business-solutions\"> <span style=\"font-size: 1rem; font-weight: normal;\">SAP HANA </span>
\t\t\t\t\t\t  <p>ERP Solutions</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/sap-hana-product\" class=\"btn-menu\"> SAP HANA Product</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-hana-platform\" class=\"btn-menu\">SAP HANA Platform</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-benefits\" class=\"btn-menu\"> SAP Benefits</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-hana-cloud\" class=\"btn-menu\"> SAP - HANA - Cloud</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-services\" class=\"btn-menu\"> SAP Services</a> 
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> 
\t\t\t\t\t\t  <a href=\"/infrastructure-cloud-management\"><span style=\"font-size: 1rem; font-weight: normal;\">INFRASTRUCTURE +</span>
\t\t\t\t\t\t  <p>Cloud  Management</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t  <a href=\"/managed-service-provider\" class=\"btn-menu\"> Managed IT Services</a> 
\t\t\t\t\t\t  <a href=\"/office-365-g-suite-sharepoint\" class=\"btn-menu\">Office365 +  G suite  + SharePoint</a> 
\t\t\t\t\t\t  <a href=\"/disaster-recovery-and-business-continuity\" class=\"btn-menu\"> Disaster Recovery and Business Continuity</a> 
\t\t\t\t\t\t  <a href=\"/hosting-cloud-services\" class=\"btn-menu\"> Hosting and Cloud Services</a> 
\t\t\t\t\t\t  <a href=\"/virtualization\" class=\"btn-menu\"> Virtualization (Hyper-V, VMware, Citrix)</a> 
\t\t\t\t\t\t  <a href=\"/network-security-audit\" class=\"btn-menu\">Network Security + Audit</a>
\t\t\t\t\t\t</div>               
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown \"> 
\t\t\t\t  <a class=\"openmenu2 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Industries </span> <br>
\t\t\t\t\tWE SERVE </a>
\t\t\t\t\t<a class=\"openmenu2 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Industries </span> <br>
\t\t\t\t\tWE SERVE </a>
\t\t\t\t\t<strong class=\"openmenu2\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu2\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-10 offset-lg-1 box-menu\"> 
\t\t\t\t\t\t\t  <p>INDUSTRIES WE SERVE</p>
\t\t\t\t\t\t\t  <hr>
                            <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
                              <a href=\"/manufacturing-industry-solutions\" class=\"btn-menu\">Manufacturing</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
\t\t\t\t\t\t\t<a href=\"/retail-fashion-industry-solutions\" class=\"btn-menu\">Retail & Fashion</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
\t\t\t\t\t\t\t<a href=\"/non-profit-sector-solutions\" class=\"btn-menu\"> Non Profit</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t  <a href=\"/ecommerce-solutions\" class=\"btn-menu \">Ecommerce</a>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t<a href=\"/healthcare-solutions\" class=\"btn-menu \"> Healthcare</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t<a href=\"/financial-services-solutions\" class=\"btn-menu\"> Financial Services</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div> 
                            </div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t  <a class=\"openmenu3 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Core</span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t<a class=\"openmenu3 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Core</span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t\t<strong class=\"openmenu3\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu3\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t  <div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 offset-lg-1 box-menu\"> <span>ENGAGE</span>
\t\t\t\t\t\t  <p>Digital Growth Strategies</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Convert more prospects and retain more customers with next-generation marketing automation, personalization, and data science services supported by best-in-class platforms and technologies from top providers.</span>
\t\t\t\t\t\t  <a href=\"/engage-digital-growth-strategies\" class=\"btn-menu light-blue\">Learn More</a> </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> <span>ENABLE</span>
\t\t\t\t\t\t  <p>Digital Operations Optimization</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Manage and scale your business better and smarter with enterprise resource planning applications powered by the Microsoft Dynamics suite and supporting platforms that generate industry-leading return on investment.</span>
\t\t\t\t\t\t  <a href=\"/digital-operations-optimization\" class=\"btn-menu light-blue\"> Learn More</a> </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> <span>ACCELERATE</span>
\t\t\t\t\t\t  <p>Digital Business Transformation</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Achieve your business goals and fuel the next phase of your organization with innovative, cost-effective mobility, cloud, Internet of Things, AI, and data science solutions tailored to your unique needs and industry.</span>
\t\t\t\t\t\t  <a href=\"/digital-business-transformation\" class=\"btn-menu light-blue\"> Learn More</a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t  <a class=\"openmenu4 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Technology </span> <br>
\t\t\t\t\tSERVICES </a> 
\t\t\t\t\t<a class=\"openmenu4 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Technology </span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t\t<strong class=\"openmenu4\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu4\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 pl-lg-5 box-menu\">
\t\t\t\t\t\t\t\t<p>ERP</p>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<a href=\"/microsoft-dynamics\" class=\"btn-menu\"> Microsoft Dynamics 365</a>
\t\t\t\t\t\t\t\t<a href=\"/business-central\" class=\"btn-menu\"> Microsoft Dynamics Business Central</a>
\t\t\t\t\t\t\t\t<a href=\"/customer-portal-for-nav\" class=\"btn-menu\"> Customer Portal for NAV</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 box-menu\"> 
\t\t\t\t\t\t\t  <p>Web Marketing</p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t\t<div class=\"row col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/drupal\" class=\"btn-menu\"> Drupal</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/wordpress\" class=\"btn-menu\"> WordPress</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/kentico-cms\" class=\"btn-menu\"> Kentico</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/magento\" class=\"btn-menu\"> Magento</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mautic\" class=\"btn-menu\"> Mautic</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce\" class=\"btn-menu\"> Salesforce </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-support\" class=\"btn-menu\"> Salesforce Support</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-integration\" class=\"btn-menu\"> Salesforce Integration</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-consulting\" class=\"btn-menu\"> Salesforce Consulting</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\">
\t\t\t\t\t\t\t  <p>Special Technology Services</p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t\t<a href=\"/patient-journey\" class=\"btn-menu\"> Patient Journey</a>
\t\t\t\t\t\t\t\t<a href=\"/business-intelligence-big-data-solutions\" class=\"btn-menu\"> Business Intelligence + Big Data</a>
\t\t\t\t\t\t\t\t<a href=\"/solutions-for-publishers\" class=\"btn-menu\"> Solution For Publishers</a> 
\t\t\t\t\t\t\t\t<a href=\"/kompete-hrm-solution\" class=\"btn-menu\"> HRM Solution </a>
\t\t\t\t\t\t\t</div>
                            
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-2 pr-lg-5 box-menu\">
\t\t\t\t\t\t\t  <p>Mobile </p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/android-app-development-company\" class=\"btn-menu\"> Android Development</a>
\t\t\t\t\t\t\t\t<a href=\"/ios-app-development-company\" class=\"btn-menu\"> IOS Development</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
                            <div class=\"col-12 col-lg-12 px-lg-5 box-menu\"> 
\t\t\t\t\t\t\t  <p>Infrastructure </p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/office365-migration\" class=\"btn-menu\"> Microsoft Office 365</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/hosting-on-azure\" class=\"btn-menu\"> Azure Cloud Solutions</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/microsoft-sharepoint\" class=\"btn-menu\"> Microsoft SharePoint</a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/flat-fee\" class=\"btn-menu\"> Infra Flat Fee Calculator</a>
\t\t\t\t\t\t\t\t</dv>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t  <a class=\"openmenu5 nav-link dropdown-toggle mobilmenu pr-0 d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Work </span> <br>
\t\t\t\t\tCASE STUDIES </a> 
\t\t\t\t\t<a class=\"openmenu5 nav-link dropdown-toggle mobilmenu pr-0 d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Work </span> <br>
\t\t\t\t\tCASE STUDIES </a>
\t\t\t\t\t<strong class=\"openmenu5\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu5\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-10 offset-lg-1 box-menu\">
\t\t\t\t\t\t\t\t<p>CASE STUDIES</p>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=81&amp;category=66\" class=\"btn-menu\"> Microsoft Dynamics Business Solutions</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=86&amp;category=66\" class=\"btn-menu\"> Mobile Apps + Custom Development</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=76&amp;category=66\" class=\"btn-menu\"> Infrastructure + Cloud Management</a>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=106&category=66\" class=\"btn-menu\"> Web + Marketing Technology</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
\t\t</nav>
</header>";
    }

    public function getTemplateName()
    {
        return "@korone/header-primary-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 8,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * 
 * Header Primary Menu file
 */
#}
\t<nav class=\"navbar navbar-expand-lg \">
\t\t\t<div class=\"col-12\"> 
\t\t\t\t<a class=\"navbar-brand mt-2 mt-lg-0\" href=\"/\">
\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/korcomptenz-logo.png\" alt=\"Korcomptenz\" class=\"mt-2\" />
\t\t\t\t</a> 
\t\t\t\t<!--<span class=\"floater\">Creating Lasting Value. Providing Competitive Advantage</span>--> 
\t\t\t\t<button style=\"font-size:30px;cursor:pointer\" class=\"navbar-toggler\" onclick=\"openNav()\"> 
\t\t\t\t\t<i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t  <div class=\"collapse navbar-collapse float-right \" id=\"navbarSupportedContent\"> 
\t\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
\t\t\t\t<ul class=\"navbar-nav sidenav \" id=\"mySidenav\">
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/about-us\">About</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/request-consultation\">Contact</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/careers\">Careers</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/why-korcomptenz\">Why Korcomptenz?</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/resources\">Resources</a></li>
\t\t\t\t\t<li class=\"nav-item mobile-only-menu\"><a class=\"nav-link\" href=\"/blog\">Blog</a></li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t\t<a class=\"nav-link dropdown-toggle mobilmenu openmenu1 d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our </span> <br> SOLUTIONS </a> 
\t\t\t\t\t<a class=\"nav-link dropdown-toggle mobilmenu openmenu1 d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our </span> <br> SOLUTIONS </a> 
\t\t\t\t\t\t<strong class=\"openmenu1\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu1\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t  <div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 offset-lg-1 box-menu\"> <a href=\"/web-mobile-technology\"><span style=\"font-size: 1rem; font-weight: normal;\">WEB + MOBILE </span>
\t\t\t\t\t\t  <p>Technology</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#web_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"web_solutions\">Web Solutions</a>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"web_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/website-development\" class=\"btn-menu\" title=\"Website Development\"> Website Development</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/website-design\" class=\"btn-menu\" title=\"Website Development\"> Website Design</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/web-support-and-hosting\" class=\"btn-menu\" title=\"Web Support and Hosting\"> Web Support and Hosting</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/web-integration\" class=\"btn-menu\" title=\"Web Integration\"> Web Integration</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#mobile_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"mobile_solutions\">Mobile Solutions</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"mobile_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"Android\"> Android</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"IOS\"> IOS</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"Enterprise Mobility Applications\"> Enterprise Mobility Applications</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#engagement_solutions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"engagement_solutions\">Engagement Solution</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"engagement_solutions\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/magento\" class=\"btn-menu\" title=\"Magento\"> Magento</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce\" class=\"btn-menu\" title=\"Salesforce\"> Salesforce</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/\" class=\"btn-menu\" title=\"MS CRM\"> MS CRM</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mautic\" class=\"btn-menu\" title=\"Mautic\"> Mautic</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#consulting_stratgey\" role=\"button\" aria-expanded=\"false\" aria-controls=\"consulting_stratgey\">Consulting & Stratgey</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"consulting_stratgey\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/small-midsize-business-solutions\" class=\"btn-menu\" title=\"Small-midsize Business\"> Small-midsize Business</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/enterprise-business-solutions\" class=\"btn-menu\" title=\"Enterprise\"> Enterprise</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/advertising-agency\" class=\"btn-menu\" title=\"Advertising Agencies\"> Advertising Agencies</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn-menu\" data-toggle=\"collapse\" href=\"#How_it_Works\" role=\"button\" aria-expanded=\"false\" aria-controls=\"How_it_Works\">How it Works ?</a>
\t\t\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse\" id=\"How_it_Works\">
\t\t\t\t\t\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"/dedicated-teams\" class=\"btn-menu\" title=\"Dedicated Teams\"> Dedicated Teams</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/fixed-bid-projects\" class=\"btn-menu\" title=\"Fixed Bid Projects\"> Fixed Bid Projects</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/time-and-materials\" class=\"btn-menu\" title=\"Time and Material\"> Time and Material</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  <!--<a href=\"/web-marketing-technology\" class=\"btn-menu\" title=\"Web + Marketing Technology Strategy\"> Web + Marketing Technology Strategy</a>
\t\t\t\t\t\t  <a href=\"/responsive-web-design\" class=\"btn-menu\">Responsive Web Design</a> 
\t\t\t\t\t\t  <a href=\"/cms\" class=\"btn-menu\"> Content Management Systems</a> 
\t\t\t\t\t\t  <a href=\"/customer-journeys-marketing-automation\" class=\"btn-menu\"> Customer Journeys + Marketing Automation</a> 
\t\t\t\t\t\t  <a href=\"/mobile-app-development\" class=\"btn-menu\"> Mobile Apps</a> 
\t\t\t\t\t\t  <a href=\"/email-marketing-digital-messaging\" class=\"btn-menu\"> Email Marketing + Digital Messaging</a>--> \t\t\t\t\t\t   
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-2 box-menu\"> 
\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-business-solutions\"><span style=\"font-size: 1rem; font-weight: normal;\">MICROSOFT DYNAMICS</span>
\t\t\t\t\t\t  <p>ERP Solutions</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics365\" class=\"btn-menu\"> Microsoft Dynamics 365</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-nav\" class=\"btn-menu\">Microsoft Dynamics NAV</a> 
\t\t\t\t\t\t\t  <!--<a href=\"\" class=\"btn-menu\"> Customer Portal For NAV</a>--> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-gp\" class=\"btn-menu\"> Microsoft Dynamics GP</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-ax\" class=\"btn-menu\"> Microsoft Dynamics AX</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-crm\" class=\"btn-menu\">Microsoft Dynamics CRM</a> 
\t\t\t\t\t\t\t  <a href=\"/microsoft-dynamics-bi\" class=\"btn-menu\"> Microsoft Dynamics Power BI</a> 
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-2 box-menu\"><a href=\"/sap-hana-business-solutions\"> <span style=\"font-size: 1rem; font-weight: normal;\">SAP HANA </span>
\t\t\t\t\t\t  <p>ERP Solutions</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/sap-hana-product\" class=\"btn-menu\"> SAP HANA Product</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-hana-platform\" class=\"btn-menu\">SAP HANA Platform</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-benefits\" class=\"btn-menu\"> SAP Benefits</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-hana-cloud\" class=\"btn-menu\"> SAP - HANA - Cloud</a> 
\t\t\t\t\t\t\t  <a href=\"/sap-services\" class=\"btn-menu\"> SAP Services</a> 
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> 
\t\t\t\t\t\t  <a href=\"/infrastructure-cloud-management\"><span style=\"font-size: 1rem; font-weight: normal;\">INFRASTRUCTURE +</span>
\t\t\t\t\t\t  <p>Cloud  Management</p></a>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t  <a href=\"/managed-service-provider\" class=\"btn-menu\"> Managed IT Services</a> 
\t\t\t\t\t\t  <a href=\"/office-365-g-suite-sharepoint\" class=\"btn-menu\">Office365 +  G suite  + SharePoint</a> 
\t\t\t\t\t\t  <a href=\"/disaster-recovery-and-business-continuity\" class=\"btn-menu\"> Disaster Recovery and Business Continuity</a> 
\t\t\t\t\t\t  <a href=\"/hosting-cloud-services\" class=\"btn-menu\"> Hosting and Cloud Services</a> 
\t\t\t\t\t\t  <a href=\"/virtualization\" class=\"btn-menu\"> Virtualization (Hyper-V, VMware, Citrix)</a> 
\t\t\t\t\t\t  <a href=\"/network-security-audit\" class=\"btn-menu\">Network Security + Audit</a>
\t\t\t\t\t\t</div>               
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown \"> 
\t\t\t\t  <a class=\"openmenu2 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Industries </span> <br>
\t\t\t\t\tWE SERVE </a>
\t\t\t\t\t<a class=\"openmenu2 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Industries </span> <br>
\t\t\t\t\tWE SERVE </a>
\t\t\t\t\t<strong class=\"openmenu2\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu2\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-10 offset-lg-1 box-menu\"> 
\t\t\t\t\t\t\t  <p>INDUSTRIES WE SERVE</p>
\t\t\t\t\t\t\t  <hr>
                            <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
                              <a href=\"/manufacturing-industry-solutions\" class=\"btn-menu\">Manufacturing</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
\t\t\t\t\t\t\t<a href=\"/retail-fashion-industry-solutions\" class=\"btn-menu\">Retail & Fashion</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \"> 
\t\t\t\t\t\t\t<a href=\"/non-profit-sector-solutions\" class=\"btn-menu\"> Non Profit</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t  <a href=\"/ecommerce-solutions\" class=\"btn-menu \">Ecommerce</a>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t<a href=\"/healthcare-solutions\" class=\"btn-menu \"> Healthcare</a> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 \">
\t\t\t\t\t\t\t<a href=\"/financial-services-solutions\" class=\"btn-menu\"> Financial Services</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div> 
                            </div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t  <a class=\"openmenu3 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Core</span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t<a class=\"openmenu3 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Core</span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t\t<strong class=\"openmenu3\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu3\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t  <div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 offset-lg-1 box-menu\"> <span>ENGAGE</span>
\t\t\t\t\t\t  <p>Digital Growth Strategies</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Convert more prospects and retain more customers with next-generation marketing automation, personalization, and data science services supported by best-in-class platforms and technologies from top providers.</span>
\t\t\t\t\t\t  <a href=\"/engage-digital-growth-strategies\" class=\"btn-menu light-blue\">Learn More</a> </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> <span>ENABLE</span>
\t\t\t\t\t\t  <p>Digital Operations Optimization</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Manage and scale your business better and smarter with enterprise resource planning applications powered by the Microsoft Dynamics suite and supporting platforms that generate industry-leading return on investment.</span>
\t\t\t\t\t\t  <a href=\"/digital-operations-optimization\" class=\"btn-menu light-blue\"> Learn More</a> </div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\"> <span>ACCELERATE</span>
\t\t\t\t\t\t  <p>Digital Business Transformation</p>
\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t<span>Achieve your business goals and fuel the next phase of your organization with innovative, cost-effective mobility, cloud, Internet of Things, AI, and data science solutions tailored to your unique needs and industry.</span>
\t\t\t\t\t\t  <a href=\"/digital-business-transformation\" class=\"btn-menu light-blue\"> Learn More</a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t  <a class=\"openmenu4 nav-link dropdown-toggle mobilmenu d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Technology </span> <br>
\t\t\t\t\tSERVICES </a> 
\t\t\t\t\t<a class=\"openmenu4 nav-link dropdown-toggle mobilmenu d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Technology </span> <br>
\t\t\t\t\tSERVICES </a>
\t\t\t\t\t<strong class=\"openmenu4\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu4\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 pl-lg-5 box-menu\">
\t\t\t\t\t\t\t\t<p>ERP</p>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<a href=\"/microsoft-dynamics\" class=\"btn-menu\"> Microsoft Dynamics 365</a>
\t\t\t\t\t\t\t\t<a href=\"/business-central\" class=\"btn-menu\"> Microsoft Dynamics Business Central</a>
\t\t\t\t\t\t\t\t<a href=\"/customer-portal-for-nav\" class=\"btn-menu\"> Customer Portal for NAV</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4 box-menu\"> 
\t\t\t\t\t\t\t  <p>Web Marketing</p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t\t<div class=\"row col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/drupal\" class=\"btn-menu\"> Drupal</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/wordpress\" class=\"btn-menu\"> WordPress</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/kentico-cms\" class=\"btn-menu\"> Kentico</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/magento\" class=\"btn-menu\"> Magento</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/mautic\" class=\"btn-menu\"> Mautic</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce\" class=\"btn-menu\"> Salesforce </a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-support\" class=\"btn-menu\"> Salesforce Support</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-integration\" class=\"btn-menu\"> Salesforce Integration</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/salesforce-consulting\" class=\"btn-menu\"> Salesforce Consulting</a>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 box-menu\">
\t\t\t\t\t\t\t  <p>Special Technology Services</p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t\t<a href=\"/patient-journey\" class=\"btn-menu\"> Patient Journey</a>
\t\t\t\t\t\t\t\t<a href=\"/business-intelligence-big-data-solutions\" class=\"btn-menu\"> Business Intelligence + Big Data</a>
\t\t\t\t\t\t\t\t<a href=\"/solutions-for-publishers\" class=\"btn-menu\"> Solution For Publishers</a> 
\t\t\t\t\t\t\t\t<a href=\"/kompete-hrm-solution\" class=\"btn-menu\"> HRM Solution </a>
\t\t\t\t\t\t\t</div>
                            
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-2 pr-lg-5 box-menu\">
\t\t\t\t\t\t\t  <p>Mobile </p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <a href=\"/android-app-development-company\" class=\"btn-menu\"> Android Development</a>
\t\t\t\t\t\t\t\t<a href=\"/ios-app-development-company\" class=\"btn-menu\"> IOS Development</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
                            <div class=\"col-12 col-lg-12 px-lg-5 box-menu\"> 
\t\t\t\t\t\t\t  <p>Infrastructure </p>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/office365-migration\" class=\"btn-menu\"> Microsoft Office 365</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/hosting-on-azure\" class=\"btn-menu\"> Azure Cloud Solutions</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/microsoft-sharepoint\" class=\"btn-menu\"> Microsoft SharePoint</a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t<a href=\"/flat-fee\" class=\"btn-menu\"> Infra Flat Fee Calculator</a>
\t\t\t\t\t\t\t\t</dv>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                            
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item dropdown\"> 
\t\t\t\t  <a class=\"openmenu5 nav-link dropdown-toggle mobilmenu pr-0 d-none d-lg-block\" href=\"/\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Work </span> <br>
\t\t\t\t\tCASE STUDIES </a> 
\t\t\t\t\t<a class=\"openmenu5 nav-link dropdown-toggle mobilmenu pr-0 d-block d-lg-none\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\"> <span>Our Work </span> <br>
\t\t\t\t\tCASE STUDIES </a>
\t\t\t\t\t<strong class=\"openmenu5\">&nbsp;</strong>
\t\t\t\t\t<div class=\"dropdown-menu opensubmenu5\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<div class=\"row py-5 pl-lg-0 pl-3\">
\t\t\t\t\t\t\t<div class=\"col-12 col-lg-10 offset-lg-1 box-menu\">
\t\t\t\t\t\t\t\t<p>CASE STUDIES</p>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=81&amp;category=66\" class=\"btn-menu\"> Microsoft Dynamics Business Solutions</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=86&amp;category=66\" class=\"btn-menu\"> Mobile Apps + Custom Development</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=76&amp;category=66\" class=\"btn-menu\"> Infrastructure + Cloud Management</a>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"col-12 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/resources?types=106&category=66\" class=\"btn-menu\"> Web + Marketing Technology</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
\t\t</nav>
</header>";
    }
}
