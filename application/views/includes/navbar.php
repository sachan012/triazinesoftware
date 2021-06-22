<div class="row mr-0 ml-0 pl-2 pr-2 pt-1">
  <div class="col-md-5 padding text-left">
    <div id="mySidepanel" class="sidepanel">
      <div class="row leftMenuRowTop">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <button class="openbtn" onclick="closeNav()">×</button>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 logocol">
          <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>siteassets/img/logo.png" class="Logo-1 logo_nav" alt="Triazine Softwares"></a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 pr-0"></div>
      </div>
      <!--webView leftMenu  start-->
      <div class="row leftMenuRow">
        <div class="col-md-4 leftMenuRowCol1">
            <a href="<?php echo base_url();?>" class="sideNavLi navTabLinks" onmouseover="openSidenavLinkContent(event, 'Home')">Home</a>
            <a href="about-us.html" class="sideNavLi navTabLinks active" onmouseover="openSidenavLinkContent(event, 'AboutUs')" id="defaultOpenNavTab">About Us</a>
            <a href="#" class="sideNavLi navTabLinks" onmouseover="openSidenavLinkContent(event, 'Services')">Services</a>
            <a href="#" class="sideNavLi navTabLinks" onmouseover="openSidenavLinkContent(event, 'Solution')">Solutions</a>
            <a href="portfolio.html" class="sideNavLi navTabLinks" onmouseover="openSidenavLinkContent(event, 'Portfolio')">Portfolio</a>
            <a href="contact-us.html" class="sideNavLi navTabLinks" onmouseover="openSidenavLinkContent(event, 'ContactUs')">Contact Us</a>
        </div>
        <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="Home" style="display: none;">
          <div class="row col8content">
              <div class="row col8contentfirstDiv">
                  <div class="col-md-6 pl-0">
                      <img src="<?php echo base_url();?>siteassets/img/home_nav.png" class="imgage1 img-fluid" alt="Menu home">
                  </div>
                  <div class="col-md-6">
                      <p class="col8contentcontent">
                          With our wide range of services, tailored to meet your business needs, we offer both the expertise and experience to provide a seamless experience across platforms.<br> We have been working with organizations
                          around the world to help them leverage various digital channels for improved customer experience and sales revenue.<br><br> And we have proud to have plenty of them!<br><br> We invest in partnerships
                          that harmonizes and integrates well with our vision.
                      </p>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="AboutUs" style="display: block;">
          <div class="row col8content">
              <div class="row col8contentfirstDiv">
                  <div class="col-md-6 pl-0">
                      <img src="<?php echo base_url();?>siteassets/img/abut_nav.png" class="imgage1 img-fluid" alt="menu about">
                  </div>
                  <div class="col-md-6">
                      <p class="col8contentcontent">
                          We are one of the leading IT service companies in India, focused on building unmatched experiences for our customers, be it on mobile or desktop. We have a proven track record of delivering multifaceted services to meet our customer’s business objectives.
                          Our team of experts have wide experience, working with customers from myriad industries, incorporating the most updated technology trends to offer you the most innovative solutions.
                      </p>
                  </div>
              </div>
              <div class="row col8contentsecondDiv">
                  <div class="col-md-12 pl-0">
                      <div class="row col8contentSecondRow">
                          <div class="col-md-4 underline Developmentprocess">
                              <ul class="webdevelopment_nav">
                                <li><span><a class="cool-link" href="about-us.html#whoWeAre">Who Are We?</a></span></li>
                                <li><span><a class="cool-link" href="about-us.html#LeadershipTeam">Our LeadershipTeam</a></span></li>
                                <li><span><a class="cool-link" href="about-us.html#DevelopmentCycle">Our Development Process</a></span></li>
                              </ul>
                          </div>
                          <div class="col-md-8 pr-0 underline Developmentprocess Model">
                              <ul class="webdevelopment_nav">
                                <li><span><a class="cool-link" href="blog.php">Blog</a></span></li>
                                <li><span><a class="cool-link" href="career.html">Careers</a></span></li>
                                <li><span><a class="cool-link" href="our-engagement-model.html">Our Engagement Model</a></span></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="Services" style="display: none;">
        <div class="row col8content">
            <div class="row col8contentfirstDiv">
                <div class="col-md-6 pl-0">
                    <img src="<?php echo base_url();?>siteassets/img/service_nav.png" class="imgage1 img-fluid" alt="menu service">
                </div>
                <div class="col-md-6">
                    <p class="col8contentcontent">
                        Ensuring Highest Quality at Optimum Cost We understand that every customer is unique and so are their requirements. Our flexible engagement models ensures that customer’s priorities are met with high quality, timely and cost effective.
                    </p>
                </div>
            </div>
            <div class="row col8contentsecondDiv">
                <div class="col-md-12 mt-2 pl-0">
                    <div class="row col8contentSecondRow">
                        <div class="col-md-4 underline Developmentprocess">
                            <h6>Mobile App Development</h6>
                            <ul class="mobileapp_nav">
                                <li>
                                    <span>
                                        <a class="cool-link" href="iphone-app-development.html">
                                            <img src="<?php echo base_url();?>siteassets/img/sharp_arrow.png" class="imgage-arow" alt="icon">iOS
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                      <a class="cool-link" href="android-app-development.html">
                                        <img src="<?php echo base_url();?>siteassets/img/sharp_arrow.png" class="imgage-arow" alt="icon">Android
                                      </a>
                                    </span>
                                </li>
                                <li>
                                    <span><a class="cool-link"
                                            href="hybrid-app-development.html"><img
                                                src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                class="imgage-arow">Hybrid
                                            <small class="small">(React,Native, Flutter,
                                                IONIC)</small></a></span>
                                </li>
                            </ul>
                            <h6>Analytics</h6>
                            <ul class="analytics_nav">
                                <li>
                                    <span>
                                        <a class="cool-link"
                                            href="google-analytics-integration-in-ios-android-apps.html"><img
                                                src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                class="imgage-arow">Mobile & Web Analytics</a>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                      <a class="cool-link" href="our-products.html">
                                          <img src="<?php echo base_url();?>siteassets/img/sharp_arrow.png" class="imgage-arow" alt="icon">Our Product
                                        </a>
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4 pr-0 underline Developmentprocess Model">
                            <!-- <h6>Web Development</h6> -->
                            <ul class="webdevelopment_nav">
                                <li><span><a class="cool-link"
                                    href="website-development-company.html">Web Development</a></span></li>
                                <li><span><a class="cool-link"
                                            href="javascript-frameworks.html">JavaScript
                                            Framework</a></span></li>
                                <li><span><a class="cool-link"
                                            href="ecommerce-app-development.html">ECommerce
                                            & CMS</a></span></li>
                                <li>
                                  <span><a class="cool-link" href="iot-app-development.html">Internet of Things (IoT)</a></span></li>
                                <li>
                                  <span><a class="cool-link" href="sap-implementation.html">SAP Implementation
                                            & Support</a></span></li>
                                <li>
                                  <span><a class="cool-link" href="software-development-consulting.html">Software
                                            Consulting</a></span></li>
                                <li>
                                  <span>
                                  <a class="cool-link" href="qa-testing-services.html"> Quality Assurance</a></span>
                                </li>
                                <li>
                                  <span>
                                  <a class="cool-link" href="cloud-computing-services.html">Cloud Hosting </a>
                                </span>
                              </li>
                            </ul>
                        </div>
                        <div class="col-md-4 pr-0 underline Developmentprocess Model text-left">
                            <!-- <h6>Cloud Hosting</h6> -->
                            <ul class="webdevelopment_nav">
                              <li><span><a class="cool-link" href="asp-dot-net-development-company.html">Asp .Net</a></span></li>
                              <li><span><a class="cool-link" href="aws-server-migration-service.html">Aws Server Migration</a></span></li>
                              <li><span><a class="cool-link" href="flutter-app-development.html">Flutter App Development</a></span></li>
                              <li><span><a class="cool-link" href="ibm-worklight.html">IBM Worklight</a></span></li>
                              <li><span><a class="cool-link" href="ionic-app-development.html">Ionic App Development</a></span></li>
                              <li><span><a class="cool-link" href="map-based-app-development.html">MAP Based App Development</a></span></li>
                              <li><span><a class="cool-link" href="python-app-development.html">Paython App Development</a></span></li>
                              <li><span><a class="cool-link" href="react-native-app-development.html">React Native</a></span></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-5"></div> -->
            </div>
        </div>
    </div>
                            <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="Solution" style="display: none;">
                                  <div class="row col8content">
                                      <div class="row col8contentfirstDiv">
                                          <div class="col-md-6 pl-0">
                                              <img src="<?php echo base_url();?>siteassets/img/solution_nav.png" class="imgage1 img-fluid" alt="menu solution">
                                          </div>
                                          <div class="col-md-6">
                                              <p class="col8contentcontent">
                                                  As part of the solution, we cover – UI/UX, Simplify User Journey, and Integration with other platforms being used by the customer to provide better insights.We have worked with some of the top brands in the industry and leveraged the knowledge gained to develop solutions that could not only take care of the challenges that the industry is facing currently but also of changing consumer expectations.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="row col8contentsecondDiv">
                                          <div class="col-md-12 mt-2 pl-0">
                                              <div class="row col8contentSecondRow">
                                                  <div class="col-md-7 underline Developmentprocess">
                                                    <h6>Industry Based Solutions</h6>
                                                    <ul class="analytics_nav">
                                                        <li>
                                                            <span>
                                                                <a class="cool-link" href="food-and-restaurant.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">Food & Restaurant</a>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <a class="cool-link" href="meter-reading-software.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">Oil & Gas (Meter Reading
                                                                    Solution)</a>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <a class="cool-link" href="travel-and-hospitality-management-software.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">Travel & Hospitality
                                                                    (Aggregator app for traveler and supplier)</a>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <a class="cool-link"
                                                                    href="ecommerce-app-development.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">E-Commerce</a>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <a class="cool-link" href="parking-management-software.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">Parking, Permit &
                                                                    Traffic Solution</a>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <a class="cool-link"
                                                                    href="e-learning-solutions.html"><img
                                                                        src="<?php echo base_url();?>siteassets/img/sharp_arrow.png"
                                                                        class="imgage-arow">E-Learning</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                  </div>
                                                  <div class="col-md-5 pr-0 underline Developmentprocess Model">
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- <div class="col-md-5"></div> -->
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="Portfolio" style="display: none;">
                                  <div class="row col8content">
                                      <div class="row col8contentfirstDiv">
                                          <div class="col-md-6 pl-0">
                                              <img src="<?php echo base_url();?>siteassets/img/portfolio_nav.png" class="imgage1 img-fluid" alt="portfolio">
                                          </div>
                                          <div class="col-md-6">
                                              <p class="col8contentcontent">
                                                  We have proven experience of working with customers across industries and taking their business to the next level to achieve unbelievable results often. Take a look at some of our incredible work. We make every effort to turn your idea into reality that changes user perspective. Have a look at our Portfolio.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="row col8contentsecondDiv">
                                          <div class="col-md-12 pl-0">
                                              <div class="row col8contentSecondRow">
                                                  <div class="col-md-6 underline Developmentprocess">
                                                      <!-- <span><u> <a class="cool-link" href="#!">Who Are We?</a> </u></span>-->
                                                  </div>
                                                  <div class="col-md-6 pr-0 underline Developmentprocess Model">
                                                      <!-- <span><u><a class="cool-link" href="#!"> Our Development Process</a> </u></span>-->
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-8 leftMenuRowCol2 NavTabContent" id="ContactUs" style="display: none;">
                                  <div class="row col8content">
                                      <div class="row col8contentfirstDiv">
                                          <div class="col-md-6 pl-0">
                                              <img src="<?php echo base_url();?>siteassets/img/contact_nav.png" class="imgage1 img-fluid" alt="contact">
                                          </div>
                                          <div class="col-md-6">
                                              <p class="col8contentcontent">
                                                  We Triazine Soft belive the connecting dots which will turn the best results. If you have an idea of the project talk to us an we will churn into a great product.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="row col8contentsecondDiv">
                                          <div class="col-md-12 pl-0">
                                              <div class="row col8contentSecondRow">
                                                  <div class="col-md-6 underline Developmentprocess">
                                                      <!-- <span><u> <a class="cool-link" href="#!">Who Are We?</a> </u></span> -->
                                                  </div>
                                                  <div class="col-md-6 pr-0 underline Developmentprocess Model">
                                                      <!-- <span><u><a class="cool-link" href="#!"> Our Development Process</a> </u></span>-->
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- <div class="col-md-5"></div> -->
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--webView leftMenu  end-->
                          <!--mobileView leftMenu start-->
                          <div class="leftMenuRow1">

                              <ul class="mobileLeftMenuul">
                                  <li class="mobileLeftmenuMainHeading">
                                      <a href="<?php echo base_url();?>">
                                          Home
                                      </a>
                                  </li>
                                  <div>
                                      <li data-toggle="collapse" data-target="#mobileAboutUs" class=" mobileLeftmenuMainHeading collapsed active plus">
                                          <a href="#">About Us </a>
                                      </li>
                                      <ul class="sub-menu collapse" id="mobileAboutUs">
                                          <li class="subMenuLi"><a href="about-us.html#whoWeAre">Who Are We?</a></li>
                                          <li class="subMenuLi"><a href="about-us.html#LeadershipTeam">Our Leadership Team</a></li>
                                          <li class="subMenuLi"><a href="about-us.html#DevelopmentCycle">Our Development Process</a></li>
                                          <li class="subMenuLi"><a href="blog.php">Blog</a></li>
                                          <li class="subMenuLi"><a href="career.html">Careers</a></li>
                                          <li class="subMenuLi"><a href="our-engagement-model.html">Our Engagement Model</a></li>
                                      </ul>
                                  </div>
                                  <div>
                                      <li data-toggle="collapse" data-target="#service" class="mobileLeftmenuMainHeading collapsed plus">
                                          <a href="#"> Services</a>
                                      </li>
                                      <ul class="sub-menu collapse" id="service" class="collapsed">
                                          <li class="subMenuLi" data-toggle="collapse" data-target="#mobileappService">Mobile App Development
                                          </li>
                                          <ul class="sub-menu1 collapse" id="mobileappService">
                                              <li><a href="iphone-app-development.html">iOS</a></li>
                                              <li><a href="android-app-development.html">Android</a></li>
                                              <li><a href="hybrid-app-development.html">Hybrid(React,Native, Flutter,
                                                      IONIC)</a></li>
                                          </ul>
                                          <li class="subMenuLi" data-toggle="collapse" data-target="#AnalyticsService">Analytics
                                          </li>
                                          <ul class="sub-menu1 collapse" id="AnalyticsService">
                                              <li><a href="google-analytics-integration-in-ios-android-apps.html">Mobile App & Web Analytics</a></li>
                                              <!-- <li><a href="google-analytics-integration-in-ios-android-apps.html">Web Analytics</a></li> -->
                                          </ul>
                                          <li class="subMenuLi" data-toggle="collapse" data-target="#WebService">
                                              Web Development
                                          </li>
                                          <ul class="sub-menu1 collapse" id="WebService">
                                              <li><a href="javascript-frameworks.html">JavaScript Framework</a></li>
                                              <li><a href="ecommerce-app-development.html">ECommerce & CMS</a></li>
                                              <li><a href="iot-app-development.html">Internet of Things (IoT)</a></li>
                                              <li><a href="sap-implementation.html">SAP Implementation & Support</a></li>
                                              <li><a href="software-development-consulting.html">Software Consulting</a></li>
                                              <li><a href="asp-dot-net-development-company.html">Asp .Net</a></span></li>
                                              <li><a href="aws-server-migration-service.html">Aws Server Migration</a></span></li>
                                              <li><a href="flutter-app-development.html">Flutter App Development</a></span></li>
                                              <li><a href="ibm-worklight.html">IBM Worklight</a></span></li>
                                              <li><a href="ionic-app-development.html">Ionic App Development</a></span></li>
                                              <li><a href="map-based-app-development.html">MAP Based App Development</a></span></li>
                                              <li><a href="python-app-development.html">Paython App Development</a></span></li>
                                              <li><a href="react-native-app-development.html">React Native</a></span></li>
                                          </ul>
                                          <li class="subMenuLi" data-toggle="collapse" data-target="#CloudHostingService">Cloud Hosting
                                          </li>
                                          <ul class="sub-menu1 collapse" id="CloudHostingService">
                                              <li><a href="qa-testing-services.html">Quality Assurance</a></li>
                                              <li><a href="our-products.html">Our Product</a></li>
                                          </ul>
                                      </ul>
                                  </div>
                                  <div>
                                      <li data-toggle="collapse" data-target="#Solutions" class="collapsed mobileLeftmenuMainHeading plus">
                                          <a href="#">Solutions</a>
                                      </li>
                                      <ul class="sub-menu collapse" id="Solutions" class="collapsed">
                                          <!-- <li class="subMenuLi" data-toggle="collapse" data-target="#GeneralSolutions">General Solutions
                                          </li>
                                          <ul class="sub-menu1 collapse" id="GeneralSolutions">
                                              <li><a href="#">Chat Bot</a></li>
                                          </ul> -->
                                          <li class="subMenuLi" data-toggle="collapse" data-target="#IndustryBasedSolutions">
                                              Industry Based Solutions</li>
                                          <ul class="sub-menu1 collapse" id="IndustryBasedSolutions">
                                              <li><a href="food-and-restaurant.html">Food & Restaurant</a></li>
                                              <li><a href="meter-reading-software.html">Oil & Gas (Meter Reading Solution)</a></li>
                                              <li><a href="travel-and-hospitality-management-software.html">Travel & Hospitality
                                                      (Aggregator app for traveler and supplier)</a></li>
                                              <li><a href="ecommerce-app-development.html">E-Commerce</a></li>
                                              <li><a href="parking-management-software.html">Parking, Permit & Traffic Solution</a></li>
                                              <li><a href="e-learning-solutions.html">E-Learning</a></li>
                                          </ul>
                                      </ul>
                                  </div>
                                  <li class="mobileLeftmenuMainHeading">
                                      <a href="portfolio.html">
                                          Portfolio
                                      </a>
                                  </li>

                                  <li class="mobileLeftmenuMainHeading">
                                      <a href="contact-us.html">
                                          Contact Us
                                      </a>
                                  </li>
                              </ul>
                          </div>
                          <!--mobileView leftMenu  end-->

                      </div>
                      <button class="openbtn" onclick="openNav()">☰</button>
                  </div>
                  <div class="col-md-2 padding logocol">
                      <a class="navbar-brand" href="<?php echo base_url();?>">
                          <img src="<?php echo base_url();?>siteassets/img/logo.png" class="Logo-1" alt="Triazine Softwares">
                          <img src="<?php echo base_url();?>siteassets/img/Logo-1.png" class="Logo-stycky" alt="Triazine Softwares">
                      </a>
                  </div>
                  <div class="col-md-5 padding text-right head-contact-top">
                    <span class="mail-span">
                      <a class="mailto" href="mailto:sales@triazinesoft.com">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <b>sales@triazinesoft.com</b>
                      </a>
                      <img class="ml-2 mr-2 divider-head" src="<?php echo base_url();?>siteassets/img/divider-head.png" alt="" height="30">
                    </span>
                    <span class="mr-2 skype">
                      <a class="mailto" href="tel:+91-9643861253"><i class="fa fa-phone"></i><b>+91-9643861253</b></a>
                    </span>
                    <span class="mr-2 skype">
                    <a href="https://join.skype.com/invite/Q41QACvRcX3y" class="skype" target="_blank">
                      <img src="<?php echo base_url();?>siteassets/img/skype-logo.png" alt="Skype" width="30"></a>
                    </span>
                    <a href="contact-us.html" class="web_icon"> <button class="btn applybtn"><span>Contact Us</span></button></a>
                    <a href="contact-us.html" class="mobile_icon"><i class="fa fa-phone" aria-hidden="true"></i></a>
                  </div>
              </div>