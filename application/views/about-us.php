<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us - Triazine software</title>
    <?php include 'includes/stylesheets.php' ?>
</head>
<body>
    <main class="aboutus_section">
        <header>
            <!--headerBannerDiv start-->
            <div class="container-fluid container-top parallax">
                <svg class="svg1">
                    <circle class="circle1"></circle>
                    <circle class="circle2"></circle>

                </svg>
                <!-- Left menu code -->
                <nav class="navbar navbar-expand-md pl-0 pr-0 header only-landingpage">
                   <?php include 'includes/navbar.php'?>             
                </nav>
                <!-- Left menu code -->
                <div class="cstmRowCareer row header_text text-center">
                    <div class="col-md-6 header_textL">
                        <h1 class="header_textLH text-left">About Us</h1>
                        <p class=" text-left header_textLP">
                                <span>Triazine Software</span> offers end to end software development services
                        </p>
                    </div>
                    <div class="col-md-6 header_textR"><img src="<?php echo base_url();?>siteassets/img/illustration about us.svg" class="aboutsbannerimg" alt="about us"></div>

                    <!-- <div style="clear:both;"></div> -->
                </div>
                <div style="clear:both;"></div>
        </header>
        <!--headerBannerDiv end-->
        <section class="about_content">
            <div class="container-fluid">
                <div class="row cstmRowCareer whoweare_block">
                    <div class="col-sm-6 col-xs-12 bg_green">
                        <!-- <h3 class="Who-we-are wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="1s">
                          Who we are?</h3> -->
                        <h3 id="whoWeAre" class="Who-we-are">
                            About Us - Triazine</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12 bg_white">
                        <!--  <p class="Who-we-are-text">We are one of the leading IT service companies in India, focused on building unmatched experiences for our customers, be it on mobile or desktop. We have a proven track record of delivering multifaceted services to meet our customer’s
                            business objectives. Our team of experts have wide experience, working with customers from myriad industries, incorporating the most updated technology trends to offer you the most innovative solutions. </p> -->
                        <p class="Who-we-are-text">We are one of the leading IT service companies in India, focused on building unmatched experiences for our customers, be it on mobile or desktop. We have a proven track record of delivering multifaceted services to meet our customer’s
                            business objectives. </p>

                        <p class="Who-we-are-text pb-4">Our team of experts have wide experience, working with customers from myriad industries, incorporating the most updated technology trends to offer you the most innovative solutions. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row head_quater_block">
                    <div class="col-sm-6 col-xs-12 head_quater_blockL">
                        <h5 class="Headquarters">
                            Headquarters</h5>
                        <p class="HeadquarteredP1">
                            Headquartered in NCR, India, our presence cuts across continents <span> North America,
                                Africa, Middle East, Asia</span> </p>
                        <p class="HeadquarteredP1">Founded in 2015,
                            the team of <b>80+ skilled consultants</b> have worked with <b>50+ customers</b> in various industries and delivered <b>200+ solutions</b> in the areas of Sports Betting, Fleet Management, Real Time Location Tracking of the field force, e-Commerce, Online Ordering, CMS Portals, SAAS based platforms, e-Learning, Permit,
                            Parking and Traffic Solutions, Social Travel App, Custom Workflow Automation and many more.
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12 head_quater_blockR">
                        <img class="img-fluid" src="<?php echo base_url();?>siteassets/img/headquaters illustration.svg" alt="headquaters">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row CMMi-Level-3">
                    <div class="col-sm-12">
                        <p class="CMMi-Level-text text-center"><b>A CMMi Level 3 and ISO 9001:2015 Certified
                                Organization</b><br> Offering End to End Web and Mobile Solutions with Flexible Delivery Models to suit your business needs
                        </p>
                    </div>

                    <div class="col">
                        <div class="media services-wrap pull-right">
                            <div class="img_block">
                                <img src="<?php echo base_url();?>siteassets/img/cmmi.png" class="img-fluid" alt="CMMI">
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="media services-wrap m-auto">
                            <div class="img_block">
                                <img src="<?php echo base_url();?>siteassets/img/nasscom.png" class="img-fluid" alt="Nasscom">
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="media services-wrap">
                            <div class="img_block">
                                <img class="img-fluid " src="<?php echo base_url();?>siteassets/img/iso.png" alt="ISO">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- Container -->
        </section>
        <section class="productdev-blk mt-4" id="DevelopmentCycle">
            <div class="container-fluid">
                <div class="prddevplop row mt-4">
                    <div class="col-sm-12 col-sm-12 col-xs-12 text-center">
                        <h3 class="mt-5">Our Product Development Cycle</h3>
                        <p>
                            We closely work with you at every stage of the development cycle<br> to deliver solutions that best suits your business requirements backed up with 24x7 support.
                        </p>
                        <h3 class="shadowtext">this is how we work</h3>
                    </div>
                </div>
            </div>
            <div>
                <div class="row nav nav-pills productdevRow">
                    <!-- <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="5s">
                        <li class="nav-item wework tabproductdevlist hover-1" onClick="openprodDevCycleStep(event, 'strategy')">
                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="5s">
                                <li class="nav-item wework tabproductdevlist hover-1" onClick="openprodDevCycleStep(event, 'strategy')"> -->
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="1s">
                        <li class="nav-item wework tabproductdevlist hover-1" id="defaultproductdevOpen" onClick="openprodDevCycleStep(event, 'strategy')">
                            <div class=" strategy_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_Strategy.png" alt="Strategy">
                                <span class="strategy_arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <a class="nav-link navlinkstrategy weworklink wow fadeInUp" data-wow-duration="1s">Strategy</a>
                        </li>
                    </div>
                    <!-- <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="4s">
                                        <li class="nav-item wework tabproductdevlist hover-2" onClick="openprodDevCycleStep(event, 'plan')">
                                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="4s">
                                                <li class="nav-item wework tabproductdevlist hover-2" onClick="openprodDevCycleStep(event, 'plan')"> -->
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="1.5s">
                        <li class="nav-item wework tabproductdevlist hover-2" onClick="openprodDevCycleStep(event, 'plan')">
                            <div class="plan_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_Plan.png" alt="Plan">
                                <span class="plan_arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <a class="nav-link navlinkplan weworklink wow fadeInUp" data-wow-duration="1s">Plan</a>
                        </li>
                    </div>
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="2s">
                        <!-- <li class="nav-item wework tabproductdevlist hover-3 active" id="defaultproductdevOpen" onClick="openprodDevCycleStep(event, 'design')">
                                                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="18s">
                                                                <li class="nav-item wework tabproductdevlist hover-3 active" id="defaultproductdevOpen" onClick="openprodDevCycleStep(event, 'design')">
                                                                    <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="18s"> -->
                        <li class="nav-item wework tabproductdevlist hover-3 active" onClick="openprodDevCycleStep(event, 'design')">
                            <div class="design_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_design.png" alt="design">
                                <span class="design_arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <a class="nav-link navlinkdesign weworklink designLink">Design</a>
                        </li>
                    </div>
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="2.5s">
                        <!-- <li class="nav-item wework tabproductdevlist hover-4" onClick="openprodDevCycleStep(event, 'development')">
                                                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="20s">
                                                                <li class="nav-item wework tabproductdevlist hover-4" onClick="openprodDevCycleStep(event, 'development')">
                                                                    <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="20s"> -->
                        <li class="nav-item wework tabproductdevlist hover-4" onClick="openprodDevCycleStep(event, 'development')">
                            <div class="development_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_Development.png" alt="Development">
                                <span class="devlop_arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <a class="nav-link nallinkdevelopmentarow weworklink navlinkdevelopment">Development</a>
                        </li>
                    </div>
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="3s">
                        <!-- <li class="nav-item wework tabproductdevlist hover-5" onClick="openprodDevCycleStep(event, 'test')">
                                                                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="20s">
                                                                                <li class="nav-item wework tabproductdevlist hover-5" onClick="openprodDevCycleStep(event, 'test')">
                                                                                    <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="20s"> -->
                        <li class="nav-item wework tabproductdevlist hover-5" onClick="openprodDevCycleStep(event, 'test')">
                            <div class="test_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_Test.png" alt="Test">
                                <span class="test_arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <a class="nav-link navlinktestarrow weworklink navlinktest">Test</a>
                        </li>
                    </div>
                    <div class="col-md-2 developcycle wow slideInLeft" data-wow-duration="3.5s">
                        <!-- <li class="nav-item wework tabproductdevlist hover-6" onClick="openprodDevCycleStep(event, 'launch')">
                                                                                            <div class="col-md-2 wow fadeInLeft" data-wow-duration="20s">
                                                                                                <li class="nav-item wework tabproductdevlist hover-6" onClick="openprodDevCycleStep(event, 'launch')">
                                                                                                    <div class="col-md-2 developcycle wow fadeInLeft" data-wow-duration="20s"> -->
                        <li class="nav-item wework tabproductdevlist hover-6" onClick="openprodDevCycleStep(event, 'launch')">
                            <div class="launch_icon">
                                <img src="<?php echo base_url();?>siteassets/img/icon_Launch.png" alt="Launch">
                            </div>
                            <a class="nav-link navlinklauncharrow weworklink navlinklaunch">Launch</a>
                        </li>
                    </div>
                </div>
                <div class="container-fluid Union">
                    <div class="nav_pills_content">
                        <div id="strategy" class="container tabproductdevContent"><br>
                            <h5><strong>Strategy</strong></h5>
                            <p>
                                Our team work closely with the customer todiscuss their Mission, Vision, Goals, Target Markets etc. in detailto get a good understanding of customer’s business and priorities. Based on the discussion, the team prepares an approach document about the process
                                which is going to be followed to achieve the outlined goals and objectives.
                            </p>
                        </div>
                        <div id="plan" class="container tabproductdevContent"><br>
                            <h5><strong>Plan</strong></h5>
                            <p>
                                Once the strategy is in place, the team prepares a working plan, breaking down the strategy into actionable items with timelines and milestones and shares it with all stakeholders to ensure that everyone is aligned.
                            </p>
                        </div>
                        <div id="design" class="container tabproductdevContent"><br>
                            <h5><strong>Design</strong></h5>
                            <p>
                                Planning is followed by creation ofWireframes & Design Concepts. A wireframe is a simple visual representation of various sections which is designed considering various user experience principles and design conventions. After discussion with the customers
                                the wireframes go through iterations as required to make the final product meet business expectations as closely as possible
                            </p>
                        </div>
                        <div id="development" class="container tabproductdevContent"><br>
                            <h5><strong>Development</strong></h5>
                            <p>
                                We useHTML for creating web/mobile pages and CSS stylesheets for styling. All the development is done in an Agile way.Agile methodology helps increase productivity and accommodates changes at any stage of the cycle without taking much time.
                            </p>
                        </div>
                        <div id="test" class="container tabproductdevContent"><br>
                            <h5><strong>Test</strong></h5>
                            <p>
                                Testing is the most important step in the whole processthat decides success or failure of the product. The team takes feedback from users and makes changes in the product to improve user experience and work towards delighting them
                            </p>
                        </div>
                        <div id="launch" class="container tabproductdevContent"><br>
                            <h5><strong>Launch</strong></h5>
                            <p>
                                This is the final leg of the process, where after all the feedbacks/suggestions, testing, the final product is deployed taking care of software& hardware requirements with the customer which is followed by support to users on any issues they might feel
                                and guiding them on the usage.
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="technologies_blk">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="technologyuse text-center">
                            <h3 class="Technologies-that-we-used">Technologies that we use</h3>
                            <p class="Technology-is-our-backbone-because-we-understand-t">
                                Technology is our backbone because we understand the very important role it plays in providing a seamless User Experience to our customers. Choosing the right technology stack for any platform – Mobile or Web is vital. An appropriate tech stack not only
                                can reduce the overall development time but also can lower cost considerably. Our teams leverage a wide range of technologies that works on native Android or iOS, cross-platform and responsive web app platforms.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid container_toggle pl-0 pr-0 wow fadeInDown" data-wow-duration="600ms">
                <!-- Nav pills -->
                <nav class="navbar justify-content-center cms_navbar pl-0 pr-0">
                    <ul class="nav nav-pills portfol_pills wow fadeInDown" data-wow-duration="600ms" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#mobile">Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#frontend">Frontend</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#database">Database</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#mobile">Backend</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#cms">CMS</a>
                        </li>
                    </ul>
                </nav>
                <!-- Tab panes -->
                <div class="tab-content text-center wow slideInRight" data-wow-duration="1s">
                    <div id="mobile" class="container tab-pane active"><br>
                        <div class="row text-center">
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeios/objective-c.png" alt="objective-c" class="img-fluid"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeios/swift.png" alt="swift" class="img-fluid"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeios/xcode.png" alt="xcode" class="img-fluid"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeandroid/android-ndk.png" class="img-fluid" alt="android-ndk"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeandroid/java.png" class="img-fluid" alt="java"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeandroid/kotlin.png" class="img-fluid" alt="kotlin"></div>
                        </div><br>
                        <div class="row text-center">
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/nativeandroid/android-studio.png" class="img-fluid" alt="android-studio"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/ionic.png" class="img-fluid" alt="image"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/angularjs.png" class="img-fluid" alt="angularjs"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/react-native.png" class="img-fluid" alt="react-native"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/paython.png" class="img-fluid" alt="paython"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/ibmmf.png" class="img-fluid" alt="ibmmf"></div>
                        </div><br>
                        <div class="row text-center">
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/flutter.png" class="img-fluid" alt="flutter"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/typescript.png" class="img-fluid" alt="typescript"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/html5.png" class="img-fluid" alt="html5"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/css3.png" class="img-fluid" alt="CSS3"></div>
                            <!-- <div class="col-md-2 tech_icon"></div>
                            <div class="col-md-2 tech_icon"></div> -->
                            <br>
                        </div>
                    </div>
                    <div id="frontend" class="container tab-pane fade">
                        <div class="row rowImg1">
                            <div class="col-md-3"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/html5.png" class="img-fluid" alt="html5"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/mobile/hybrid/css3.png" class="img-fluid" alt="CSS3"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/ionic.png" class="img-fluid" alt="image"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <div id="database" class="container tab-pane fade">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/dynamo.png" class="img-fluid" alt="Dynamo">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/firebase.png" class="img-fluid" alt="Firebase">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/mongo.png" class="img-fluid" alt="Mongo">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/oracle.png" class="img-fluid" alt="Firebase">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/ibmdb2.png" class="img-fluid" alt="IBMDB2">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/sql.png" class="img-fluid" alt="Sql Server">
                        <img src="<?php echo base_url();?>siteassets/img/technologyimgs/database/mysql.png" class="img-fluid" alt="mysql">
                    </div>
                    <div id="cms" class="container tab-pane fade">
                        <div class="row text-center">
                            <div class="col-md-1"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/codeigniter.png" class="img-fluid" alt="CI"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/laravel.png" class="img-fluid" alt="Laravel"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/magento.png" class="img-fluid" alt="Magento"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/opencart.png" class="img-fluid" alt="Opencart"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/php.png" class="img-fluid" alt="PHP"></div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-2"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/wordpress.png" class="img-fluid" alt="Wordpress"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/zend.png" class="img-fluid" alt="Zend"></div>
                            <div class="col-md-2 tech_icon"><img src="<?php echo base_url();?>siteassets/img/technologyimgs/opensource/zoomla.png" class="img-fluid" alt="Zoomla"></div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                </div>
        </section>
        <section class="vision_section">
            <div class="inner_vision">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 col-xs-12 vision_block2">
                            <div class="zoom-effect-container">
                                <div class="image-card">
                                    <img src="<?php echo base_url();?>siteassets/img/gr_vision.svg" class="img-vision" alt="Vision">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-5 col-xs-12 vision_block3">
                            <h4 class="Our-Vision">Our Vision</h4>
                            <article class="We-are-one">
                                <span>“</span> To be a trustee Global IT Consulting company, helping enterprises with Innovative IT Solutions, admired for people and performance.
                            </article>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
            <div class="mission_section inner_mission">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 col-xs-12 mission_block3">
                            <h4 class="Our-Vision">Our Mission</h4>
                            <article class="We-are-one">
                                <span>“</span>To deliver reliable, scalable and affordable solutions across the globe, leveraging innovative and cutting edge technologies to help eterprises stay competitive while maximising the return on investment.
                            </article>
                        </div>
                        <div class="col-sm-5 col-xs-12 mission_block2">
                            <div class="zoom-effect-container">
                                <div class="image-card">
                                    <img src="<?php echo base_url();?>siteassets/img/gr_mission.svg" class="img-mision" alt="Mission">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="OurWideDiv" id="RangeOfSolutions">
            <div class="container-fluid">
                <div class="cstmRowEngagement">
                    <div class="row OurWideDiv1">
                        <div class="col-md-5 OurWide">
                            <h3 class="OurWideh3">Our Wide Range of Solutions across Industries</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="OurWideDiv2 cstmRowEngagement">
                    <div class="row" id="OurWideDiv2TabWebabouts">
                        <!-- <div class="col-sm-1"></div> -->
                        <div class="col-md-5 col1">
                            <div class="OnlineFood tabSolLinks" id="defaultOpenSol" onClick="openSol(event, 'OnlineFoodTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_onlineFood.png" class="img-fluid OnlineFoodimg" alt="onlineFood"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Food Ordering Solution</h1>
                                </div>
                                <div></div>
                            </div>
                            <div class="OnlineFood tabSolLinks" onClick="openSol(event, 'PermitTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_permitTraffic.png" class="img-fluid OnlineFoodimg" alt="permitTraffic"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Permit/ Parking/ Traffic Solution</h1>
                                </div>
                            </div>
                            <div class="OnlineFood tabSolLinks" onClick="openSol(event, 'GrievanceRedressalSysTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_grievance.png" class="img-fluid OnlineFoodimg" alt="grievance"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Grievance Redressal System
                                    </h1>
                                </div>
                            </div>
                            <div class="OnlineFood tabSolLinks" onClick="openSol(event, 'OnlineTicketBookingTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_forest.png" class="img-fluid OnlineFoodimg" alt="forest"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Ticket Booking for Forest</h1>
                                </div>
                            </div>
                            <div class="OnlineFood tabSolLinks" onClick="openSol(event, 'MeterReadingSolTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_meterReading.png" class="img-fluid OnlineFoodimg" alt="meterReading"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Meter Reading Solution
                                    </h1>
                                </div>
                            </div>
                            <div class="OnlineFood tabSolLinks" onClick="openSol(event, 'PlatformTitle')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_broker.png" class="img-fluid OnlineFoodimg" alt="broker"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Platform for Broker, Seller and Buyer</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 orderingSolution OnlineFoodDetail tabSolContent" id="OnlineFoodTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding">Online Food Ordering Solution</h1>
                                    <p class="orderingSolutionRowDivPara">
                                        Let your customers order food online from their favorite restaurant/Outlet using our solution.
                                    </p>

                                    <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                    <ul class="OrderList">
                                        <li>Auto-Detection of location and Store identification</li>
                                        <li>Order Customization, Cart Management, </li>
                                        <li>PUSH Notifications, </li>
                                        <li>Order History/ Repeat Order,</li>
                                        <li>Refund Management,</li>
                                        <li> Integration with various payment gateway providers</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7 orderingSolution PermitTitleDetail tabSolContent" id="PermitTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left tri2"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding">Permit/Parking/Traffic Solution</h1>
                                    <p class="orderingSolutionRowDivPara">
                                        The solution offers everything required to make the overall transportation process from home to office/mall or any other place, convenient for your customers.
                                    </p>

                                    <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                    <ul class="OrderList">
                                        <li>Parking Management</li>
                                        <li>Traffic Management,</li>
                                        <li>Permit Management,</li>
                                        <li>Payment Management,</li>
                                        <li> e-Appeal </li>
                                        <!-- <li></li> -->
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7 orderingSolution GrievanceRedressalSysDetail tabSolContent" id="GrievanceRedressalSysTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left tri3"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding"> GrievanceRedressal System</h1>
                                    <p class="orderingSolutionRowDivPara"></p>

                                    <h1 class="orderingSolutionRowDivHadding1"></h1>

                                    <ul class="OrderList">
                                        <!-- <li>Auto-Detection of location and Store identification</li>
                                        <li>Order Customization, Cart Management, </li>
                                        <li>PUSH Notifications, </li>
                                        <li>Order History/ Repeat Order,</li>
                                        <li>Refund Management,</li>
                                        <li> Integration with various payment gateway providers</li> -->
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7 orderingSolution OnlineTicketBookingDetail tabSolContent" id="OnlineTicketBookingTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left tri4"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding"> Online Ticket Booking for Forest</h1>
                                    <p class="orderingSolutionRowDivPara"></p>

                                    <h1 class="orderingSolutionRowDivHadding1"></h1>

                                    <ul class="OrderList">
                                        <!-- <li>Auto-Detection of location and Store identification</li>
                                        <li>Order Customization, Cart Management, </li>
                                        <li>PUSH Notifications, </li>
                                        <li>Order History/ Repeat Order,</li>
                                        <li>Refund Management,</li>
                                        <li> Integration with various payment gateway providers</li>
                                    </ul> -->
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7 orderingSolution MeterReadingSolDetail tabSolContent" id="MeterReadingSolTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left tri5"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding"> Meter Reading Solution</h1>
                                    <p class="orderingSolutionRowDivPara">
                                        Triazineworked with One of India's leading Natural Gas Distribution companies for building a comprehensive Meter Reading solution that covers.
                                    </p>

                                    <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                    <ul class="OrderList">
                                        <li>Field Force Management,</li>
                                        <li>Meter Reading, </li>
                                        <li>User & Role Management, </li>
                                        <li>Automatic Assignment of Customers to Agencybased on their area of Operation,</li>
                                        <li>Geotagging, </li>
                                        <li>Audit & Reporting</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7 orderingSolution PlatformDetail tabSolContent" id="PlatformTitle">
                            <div class="row orderingSolutionRow">
                                <div class="triangle-left tri6"></div>
                                <div class="orderingSolutionRowDiv">
                                    <h1 class="orderingSolutionRowDivHadding">Platform for Broker, Seller and Buyer</h1>
                                    <p class="orderingSolutionRowDivPara"></p>

                                    <h1 class="orderingSolutionRowDivHadding1"> </h1>

                                    <ul class="OrderList">
                                        <!-- <li>Auto-Detection of location and Store identification</li>
                                        <li>Order Customization, Cart Management, </li>
                                        <li>PUSH Notifications, </li>
                                        <li>Order History/ Repeat Order,</li>
                                        <li>Refund Management,</li>
                                        <li> Integration with various payment gateway providers</li> -->
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- start tab for mobile-->
                    <div class="row" id="OurWideDiv2TabMobileview">
                        <!-- <div class="col-sm-1"></div> -->
                        <div class="col-md-12 col1">
                            <div class="OnlineFood tablinksfoodMobileviews active" id="defaultopenSolMobiletab" onclick="openSolMobiletab(event, 'OnlineFoodTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_onlineFood.svg" class="img-fluid OnlineFoodimg" alt="onlineFood"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Food Ordering Solution</h1>
                                </div>
                                <div></div>
                            </div>
                            <div class=" orderingSolution OnlineFoodDetail tabcontentfoodMobiletext" id="OnlineFoodTitleMobile">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding">Online Food Ordering Solution</h1>
                                        <p class="orderingSolutionRowDivPara">
                                            Let your customers order food online from their favorite restaurant/Outlet using our solution.
                                        </p>

                                        <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                        <ul class="OrderList">
                                            <li>Auto-Detection of location and Store identification</li>
                                            <li>Order Customization, Cart Management, </li>
                                            <li>PUSH Notifications, </li>
                                            <li>Order History/ Repeat Order,</li>
                                            <li>Refund Management,</li>
                                            <li>Integration with various payment gateway providers</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="OnlineFood tablinksfoodMobileviews" onclick="openSolMobiletab(event, 'PermitTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_permitTraffic.svg" class="img-fluid OnlineFoodimg" alt="permitTraffic"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Permit/ Parking/ Traffic Solution</h1>
                                </div>
                                <div></div>
                            </div>
                            <div class=" orderingSolution PermitTitleDetail tabcontentfoodMobiletext " id="PermitTitleMobile" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding">Permit/Parking/Traffic Solution</h1>
                                        <p class="orderingSolutionRowDivPara">
                                            The solution offers everything required to make the overall transportation process from home to office/mall or any other place, convenient for your customers.
                                        </p>

                                        <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                        <ul class="OrderList">
                                            <li>Parking Management</li>
                                            <li>Traffic Management,</li>
                                            <li>Permit Management,</li>
                                            <li>Payment Management,</li>
                                            <li> e-Appeal </li>
                                            <!-- <li></li> -->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="OnlineFood tablinksfoodMobileviews" onclick="openSolMobiletab(event, 'GrievanceRedressalSysTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_grievance.svg" class="img-fluid OnlineFoodimg" alt="grievance"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Grievance Redressal System
                                    </h1>
                                </div>
                                <div></div>
                            </div>
                            <div class="orderingSolution GrievanceRedressalSysDetail tabcontentfoodMobiletext" id="GrievanceRedressalSysTitleMobile" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding"> GrievanceRedressal System</h1>
                                        <p class="orderingSolutionRowDivPara"></p>

                                        <h1 class="orderingSolutionRowDivHadding1"></h1>

                                        <ul class="OrderList">
                                            <!-- <li>Auto-Detection of location and Store identification</li>
                                            <li>Order Customization, Cart Management, </li>
                                            <li>PUSH Notifications, </li>
                                            <li>Order History/ Repeat Order,</li>
                                            <li>Refund Management,</li>
                                            <li> Integration with various payment gateway providers</li> -->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="OnlineFood tablinksfoodMobileviews" onclick="openSolMobiletab(event, 'OnlineTicketBookingTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_forest.svg" class="img-fluid OnlineFoodimg" alt="forest"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Ticket Booking for Forest</h1>
                                </div>
                                <div></div>
                            </div>
                            <div class=" orderingSolution OnlineTicketBookingDetail tabcontentfoodMobiletext" id="OnlineTicketBookingTitleMobile" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding"> Online Ticket Booking for Forest</h1>
                                        <p class="orderingSolutionRowDivPara"></p>

                                        <h1 class="orderingSolutionRowDivHadding1"></h1>

                                        <ul class="OrderList">
                                            <!-- <li>Auto-Detection of location and Store identification</li>
                                            <li>Order Customization, Cart Management, </li>
                                            <li>PUSH Notifications, </li>
                                            <li>Order History/ Repeat Order,</li>
                                            <li>Refund Management,</li>
                                            <li> Integration with various payment gateway providers</li> -->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="OnlineFood tablinksfoodMobileviews" onclick="openSolMobiletab(event, 'MeterReadingSolTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_meterReading.svg" class="img-fluid OnlineFoodimg" alt="meterReading"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Meter Reading Solution
                                    </h1>
                                </div>
                                <div></div>
                            </div>
                            <div class="orderingSolution MeterReadingSolDetail tabcontentfoodMobiletext" id="MeterReadingSolTitleMobile" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding"> Meter Reading Solution</h1>
                                        <p class="orderingSolutionRowDivPara">
                                            Triazineworked with One of India's leading Natural Gas Distribution companies for building a comprehensive Meter Reading solution that covers.
                                        </p>

                                        <h1 class="orderingSolutionRowDivHadding1"> Features include:</h1>

                                        <ul class="OrderList">
                                            <li>Field Force Management,</li>
                                            <li>Meter Reading, </li>
                                            <li>User & Role Management, </li>
                                            <li>Automatic Assignment of Customers to Agencybased on their area of Operation,</li>
                                            <li>Geotagging, </li>
                                            <li>Audit & Reporting</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="OnlineFood tablinksfoodMobileviews" onclick="openSolMobiletab(event, 'PlatformTitleMobile')">
                                <div><img src="<?php echo base_url();?>siteassets/img/ic_broker.svg" class="img-fluid OnlineFoodimg" alt="broker"></div>
                                <div>
                                    <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">
                                        Platform for Broker, Seller and Buyer</h1>
                                </div>
                                <div></div>
                            </div>
                            <div class="orderingSolution PlatformDetail tabcontentfoodMobiletext" id="PlatformTitleMobile" style="display: none;">
                                <div class="row orderingSolutionRow">

                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding">Platform for Broker, Seller and Buyer
                                        </h1>
                                        <p class="orderingSolutionRowDivPara"></p>

                                        <h1 class="orderingSolutionRowDivHadding1"></h1>

                                        <ul class="OrderList">
                                            <!-- <li>Auto-Detection of location and Store identification</li>
                                            <li>Order Customization, Cart Management, </li>
                                            <li>PUSH Notifications, </li>
                                            <li>Order History/ Repeat Order,</li>
                                            <li>Refund Management,</li>
                                            <li> Integration with various payment gateway providers</li> -->
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End tab for Mobile-->
                </div>

            </div>

        </section>
        <section id="LeadershipTeam" class="Ourleadership_team">
            <div class="container">
                <div class="row member_block">
                    <div class="col-sm-12 text-center">
                        <h4 class="Our-Leadership-Title">Our Leadership Team</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="<?php echo base_url();?>siteassets/img/team/director_abhinavsir.png" alt="Director Abhinav Kumar" class="img-fluid pull-right overlay-shade">
                                <div class="content title_block1">
                                    <p>Abhinav Kumar <br>Director & Co-Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-xs-12 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="<?php echo base_url();?>siteassets/img/team/director_vikashsir1.png" alt="Director vikash Srivastava" class="img-fluid overlay-shade">
                                <div class="content title_block2">
                                    <p>Vikash Srivastava <br>Director & Co-Founder</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ourteam_direct">
                    <div class="col-sm-12 text-center">
                        <h3 class="Our-Leadership-Title mt-5 pt-5">Our Team</h3>
                    </div>
                    <div class="col-md-3 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="<?php echo base_url();?>siteassets/img/team/TL_rahul.png" alt="PM_rahul" class="img-fluid overlay-shade">
                                <div class="content title_block">
                                    <p><b>Rahul Singh Rajpoot</b><br>Project Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                              <img src="<?php echo base_url();?>siteassets/img/team/nishantthakur.png" alt="PM-nishantthakur" class="img-fluid overlay-shade">
                              <div class="content title_block">
                                  <p><b>Nishant Thakur</b><br>Project Manager</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="<?php echo base_url();?>siteassets/img/team/pradeep.jpg" alt="PM-pradeep" class="img-fluid overlay-shade">
                                <div class="content title_block">
                                    <p><b>Pradeep Kumar</b><br>Project Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 director_name">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img src="<?php echo base_url();?>siteassets/img/team/ganesh.png" alt="Sales-M-ganesh" class="img-fluid overlay-shade">
                                <div class="content title_block">
                                    <p><b>Ganesh Dutt</b><br>Sales Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="getfree_quote">
            <div class="container container_happlyhelp">
                <div class="row text-center">
                    <div class="col-md-12 freequote_contant">
                        <p>If you are looking to implement any of the above Solutions or Industry Specific Solutions, we are happy to help you!</p>
                    </div>
                </div>
                <div class="getButton mt-4 text-center">
                    <a href="contact-us.html">
                        <button class="getquteButton btnCommon"><span>Get a free Quote</span></button>
                    </a>
                </div>
            </div>
        </section>
        <section class="modai-top">
            <div class="container">
            <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog Modal-block">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title text-capitalize">
                  <img src="<?php echo base_url();?>siteassets/img/quick-enquiry-icon.png" alt="Enquiry">  Get free quote
                  </h4>
                  <button type="button" class="close onclose" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <h5 class="text-center border-bottom mail-title">
                    Please fill in the form below or <br> mail us at <a href="mailto:sales@triazinesoft.com">sales@triazinesoft.com</a>
                  </h5>
                    <form action="sendMail/mail.php" method="post" id="popup_modal">
                         <input type="text" name="machine"  id="machine" class="machine" style="display:none">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control field-input" placeholder="Enter your full Name" id="popup_fullname" name="name" data-validation="length" data-validation-length="min1" data-validation-error-msg="Name is Required.">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control field-input" placeholder="Enter your email Address" id="popup_email" name="user_email" data-validation="email" data-validation-error-msg="Email-ID is Required.">

                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control field-input" placeholder="Enter your Phone Number" id="popup_phone" name="phone" type="text" data-validation="number" minlength="9" data-validation-error-msg="Contact Number is Required." onkeyup="this.value=this.value.replace(/[^\d]/,'')">

                      </div>
                      <div class="form-group">
                        <label for="mesage">Message</label>
                        <textarea id="popup_requirement" class="requirement" name="message" rows="3" cols="47" placeholder="Enter your Requirement" data-validation="required" data-validation-error-msg="Enter Your Requirements."></textarea>

                      </div>
                      <div class="form-group form-check text-center">
                           <b>Human Test <b id="question"></b>&nbsp; <input type="number" class="field-input" id="check" data-validation="required">
                          <!--<p>Human Test <b id="question"></b><input id="ans" type="text" class="field-input" id="check" data-validation="required" data-validation-error-msg="*please verify you are human! *"></p>-->

                          <div id="success" class="text-success">Validation Success :)</div>
                          <div id="fail" class="text-danger">Validation failed :(</div>
                      </div>
                      <div class="form-group form-btn text-center">
                        <button id="popup_modal_submit" type="submit" class="btn btn-default">Submit</button>
                      </div>
                  </form>
                </div>

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger onclose" data-dismiss="modal">Close</button>
                  <p>nitesh</p>
                </div>-->

              </div>
            </div>
          </div>

        </div>
      </section>
        <!-- Footer -->
        <footer class="page-footer font-small indigo">
          <?php include 'includes/footer.php';?>
        </footer>
        <!-- Footer -->
    </main>
      <!-- Common Scripts included Here  -->
   <?php include 'includes/scripts.php';?>
</body>

</html>
