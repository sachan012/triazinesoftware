<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio - TriazineSoftware</title>
     <?php include 'includes/stylesheets.php' ?>
</head>
<body>
    <main class="mainTag">
        <section class="Portfolio">
            <!--headerBannerDiv start-->
            <div class="container-fluid container-top container-portfolio">
                <svg class="svg1">
                    <circle class="circle1"></circle>
                    <circle class="circle2"></circle>
                </svg>
                <!-- Left menu code -->
                 <nav class="navbar navbar-expand-md pl-0 pr-0 header only-landingpage">
					<?php include 'includes/navbar.php'?>
				</nav>
                <!-- Left menu code -->
                <!--Text on top banner-->


                <div class="portDiv row">
                    <div class="col-md-6 portDivCol1">
                        <h1 class="portDiv1">Portfolio
                        </h1>
                        <p class="portDiv2">
                            We make every effort to turn your idea into reality that changes user perspective. Have a look at our Portfolio.
                        </p>
                    </div>
                    <div class="col-md-6 portDivCol2">
                        <img src="<?php echo base_url();?>siteassets/img/portfolio.svg" class="img-fluid" alt="portfolio">


                    </div>

                </div>

                <!--End of text div -->
                <div style="clear:both;"></div>
            </div>


            <!--headerBannerDiv-- end-->
            <!-- start portofolioTxt div-->
            <div class=" portofolioTxt boxShadow">
                <div class="col-sm">
                    <p class="portofolioTxt1">
                        We have proven experience of working with customers across industries and taking their business to the next level to achieve unbelievable results often. Take a look at some of our incredible work.
                    </p>
                </div>
            </div>
            <!-- Start Gallery div-->
            <div class="Gallery container-fluid">
                <div id="myBtnContainer" class="btncontainer text-center">
                    <button class="butn active" onclick="filterSelection('all')"> All</button>
                    <button class="butn" onclick="filterSelection('native')">Mobile Application</button>
                    <button class="butn" onclick="filterSelection('webapp')">Web Application</button>
                    <button class="butn" onclick="filterSelection('hybrid')">ERP Implementation</button>

                </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row MainRow">
                    <div class="MainColoum forAll">
                        <div class="content MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/dominos-port.png" alt="Dominos Pizza" style="width:100%" class="image">
                            <p class="pWithImg">Dominos Pizza App <span>| Native App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Dominos Pizza App | Native App</h4>
                                <p class="behind">Domino’s pizza delivery app comes with an easy-to-use interface...</p>
                                <a href="dominos-mobile-app.html" class="Detail">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/GRC_Greentip.png" alt="GRC Green TIP" style="width:100%" class="image">
                            <p class="pWithImg">GRC Green TIP <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">GRC Green TIP | Web Application</h4>
                                <p class="behind">The idea behind "HelloTax" is to simplify the process of tax return filing process and empowering income tax payers</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="MainColoum webapp forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/hellotax-web.png" alt="HelloTax App" style="width:100%" class="image">
                            <p class="pWithImg">HelloTax App <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">HelloTax App | Hybrid App</h4>
                                <p class="behind">The idea behind "HelloTax" is to simplify the process of tax return filing process and empowering income tax payers</p>
                                <a href="hello-tax-mobile-app.html" class="Detail">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-3.png" alt="HelloTax" style="width:100%" class="image">
                            <p class="pWithImg">HelloTax <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">HelloTax | Hybrid App</h4>
                                <p class="behind">HelloTax is one of the best income tax return apps available on Android & iOS, mobile site & web as well.</p>
                                <a href="hello-tax-mobile-app.html" class="Detail">Read More</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="MainColoum native forAll">
                        <div class="content MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-2.png" alt="Jauntfix Web App" style="width:100%" class="image">
                            <p class="pWithImg">Jauntfix <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Jauntfix | Web Application</h4>
                                <p class="behind">Jauntfix is a new age mobile travel app that lets you connect with fellow traveler..</p>
                                <a href="jauntfix-mobile-app.html" class="Detail">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="MainColoum native">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/igl-11.png" alt="IGL" style="width:100%" class="image">
                            <p class="pWithImg">IGL <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IGL | Hybrid App</h4>
                                <p class="behind">Automating meter reading process to curb under reporting of meter reading and plug revenue loss...s</p>
                                <a href="igl-mobile-app.html" class="Detail">Read More</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="MainColoum native">
                        <div class="content MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/dominos-port.png" alt="Dominos Pizza" style="width:100%" class="image">
                            <p class="pWithImg">Dominos Pizza App <span>| Native App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Dominos Pizza App | Native App</h4>
                                <p class="behind">Domino’s pizza delivery app comes with an easy-to-use interface...</p>
                                <a href="dominos-mobile-app.html" class="Detail">Read More</a>
                            </div>

                        </div>
                    </div>

                    <div class="MainColoum native">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-5.png" alt="IMD Native App" style="width:100%" class="image">
                            <p class="pWithImg">IMD <span>| Native App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IMD | Native App</h4>
                                <p class="behind">The app provides various weather information such as wetaher forecast, city temperature, warnings, alerts for various cities of india.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/igl-1.png" alt="IGL Safety" style="width:100%" class="image">
                            <p class="pWithImg">IGL Safety Work Permit System <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IGL Safety Work Permit System | Web Application</h4>
                                <p class="behind">Safety Work Permit Portal helps in monitoring permit such as Hot Work Permit and Cold Work Permit.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/igl-2.png" alt="IGL Meter Reading" style="width:100%" class="image">
                            <p class="pWithImg">IGL Meter Reading Web Portal <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IGL Meter Reading Web Portal | Web Application</h4>
                                <p class="behind">This web portal helps agencies and IGL admins to see the progress of meter reading activity.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="MainColoum hybrid">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/nfral.png" alt="NFRAL: CMS Site" style="width:100%" class="image">
                            <p class="pWithImg">NFRAL: CMS Site <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">NFRAL: CMS Site | Web Application</h4>
                                <p class="behind">National Law University Forum for Research on Arbitration Law.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>

                    <!-- END GRID -->
                </div>
                <div class="row aggre">
                    <div class="MainColoum forAll col-md-12">
                        <div class="row">
                            <div class="col-sm-6 aggregatorDiv">
                                <p class="aggregatorPara">Where2Go was designed for high-volume delivery companies who want to display a large number of delivery and pick-up locations on a map for their driver(s).</p>
                                <p class="aggregatorParaOne">These locations change on a daily basis, so new maps have to be created. To display this information, Where2Go integrates with an uploaded file containing address and other information through a web-based porthole or it can retrieve this data automatically from a server.</p>
                                <div class="aggregatorimgDiv">
                                    <!-- <a href="#" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/apple-store.png"></a> -->
                                    <a href="https://play.google.com/store/apps/details?id=com.smbiz.where2go&hl=en" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/play-store.png" alt="where2go"></a>
                                </div>
                            </div>
                            <div class="col-sm-6 aggregatorWhere2Go">
                                <!-- <img src="<?php echo base_url();?>siteassets/img/where2go.png" class="flude-img where2go"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native col-md-12">
                        <div class="row">
                            <div class="col-sm-6 aggregatorDiv igl">
                                <p class="aggregatorPara">Automating meter reading process to curb under reporting of meter reading and plug revenue loss</p>
                                <p class="aggregatorParaOne">We implemented a Comprehensive Solution Comprises Mobile App and Web Portal for Admin, Meter Reading Agency and Meter Readers. Solution is integrated with legacy SAP system to pull and push the data.</p>
                                <div class="aggregatorimgDiv">

                                    <a href="https://apps.apple.com/us/app/igl-connect/id1147477099" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/apple-store.png" alt=""></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.CustomerApp&amp;hl=en" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/play-store.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-6 aggregatorWhere2Go">
                                <!-- <img src="<?php echo base_url();?>siteassets/img/where2go.png" class="flude-img where2go"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp col-md-12">
                        <div class="row">
                            <div class="col-sm-6 aggregatorDiv Greentip">
                                <p class="aggregatorPara">GreenTIP platform is a web-based portal developed for those professionals who are trying to find environmental solutions.</p>
                                <p class="aggregatorParaOne">
                                    GreenTIP is an interactive platform developed by Grass Roots Research & Creation India (P) Limited to hand-hold with stakeholders in the field of environment for sustainable development. GRC India (P) Ltd. is a pioneer environmental consultancy organization
                                    working in the field of environment and EIA since 2006. GRC India has been providing optimal solutions for Environmental Clearances for Industrial and Infrastructural sectoral projects.
                                </p>
                                <!-- <div class="aggregatorimgDiv">
                                    <a href="https://itunes.apple.com/in/app/jauntfix-social-travel-app/id1326118678?mt=8" target="_blank"><img src="<?php echo base_url();?>siteassets/img/apple-store.png"></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.jauntfix&amp;hl=en" target="_blank"><img src="<?php echo base_url();?>siteassets/img/play-store.png"></a>
                                </div> -->
                            </div>
                            <div class="col-sm-6 aggregatorWhere2Go">
                                <!-- <img src="<?php echo base_url();?>siteassets/img/where2go.png" class="flude-img where2go"></div> -->
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row aggre">

                </div>
                <div class="row MainRow pl-2">
                  <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/readsfeed.png" alt="Readsfeed: e-Learning Site" style="width:100%" class="image">
                            <p class="pWithImg">Readsfeed: e-Learning Site <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Readsfeed: e-Learning Site | Hybrid App</h4>
                                <p class="behind">Readsfeed is the one stop reading application where parents, teachers and students can connect to help build the reading community of the future.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/District-KPI.png" alt="District KPI" style="width:100%" class="image">
                            <p class="pWithImg">District KPI <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">District KPI | Hybrid App</h4>
                                <p class="behind">KPIs envisaged for capturing progress of District. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/rotary-club.png" alt="rotary-club" style="width:100%" class="image">
                            <p class="pWithImg">Rotary Club <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Rotary Club | Hybrid App</h4>
                                <p class="behind">It's an App Showcasing Goals and Activities of Rotary club of Delhi Shahdara. It also tells us Rotary International's history and very basics of it.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="row aggre heighlighetedMob">
                        <div class="MainColoum forAll col-md-12">
                            <div class="row">
                                <div class="col-sm-6 aggregatorDiv igl">
                                    <p class="aggregatorPara">Automating meter reading process to curb under reporting of meter reading and plug revenue loss</p>
                                    <p class="aggregatorParaOne">We implemented a Comprehensive Solution Comprises Mobile App and Web Portal for Admin, Meter Reading Agency and Meter Readers. Solution is integrated with legacy SAP system to pull and push the data.</p>
                                    <div class="aggregatorimgDiv">

                                        <a href="https://apps.apple.com/us/app/igl-connect/id1147477099" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/apple-store.png" alt=""></a>
                                        <a href="https://play.google.com/store/apps/details?id=com.CustomerApp&amp;hl=en" target="_blank"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/play-store.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 aggregatorWhere2Go">
                                    <!-- <img src="<?php echo base_url();?>siteassets/img/where2go.png" class="flude-img where2go"></div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-6.png" alt="RRECL" style="width:100%" class="image">
                            <p class="pWithImg">RRECL <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">RRECL | Hybrid App</h4>
                                <p class="behind">Rajasthan Renewable Energy Corporation Limited (RRECL) had been formed by merging erstwhile REDA (Rajasthan Energy Development Agency).</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-7.png" alt="RajFab Hybrid App" style="width:100%" class="image">
                            <p class="pWithImg">RajFab<span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">RajFab | Hybrid App</h4>
                                <p class="behind">RajFAB -App to Verification of Registration/License/Approval for Rajasthan.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-8.png" alt="RYVP Hybrid App" style="width:100%" class="image">
                            <p class="pWithImg">RYVP <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">RYVP | Hybrid App</h4>
                                <p class="behind">The objective of RYVP Program is to generate awareness and enhance capacity to ensure that people are able to take benefits of government schemes/programs. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="row aggre heighlighetedWeb">
                        <div class="MainColoum forAll col-md-12">
                            <div class="row">
                                <div class="col-sm-6 aggregatorDiv Greentip">
                                    <p class="aggregatorPara">GreenTIP platform is a web-based portal developed for those professionals who are trying to find environmental solutions.</p>
                                    <p class="aggregatorParaOne">
                                        GreenTIP is an interactive platform developed by Grass Roots Research & Creation India (P) Limited to hand-hold with stakeholders in the field of environment for sustainable development. GRC India (P) Ltd. is a pioneer environmental consultancy organization
                                        working in the field of environment and EIA since 2006. GRC India has been providing optimal solutions for Environmental Clearances for Industrial and Infrastructural sectoral projects.
                                    </p>
                                </div>
                                <div class="col-sm-6 aggregatorWhere2Go">
                                    <!-- <img src="<?php echo base_url();?>siteassets/img/where2go.png" class="flude-img where2go"></div> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="MainColoum native">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/readsfeed.png" alt="Readsfeed" style="width:100%" class="image">
                            <p class="pWithImg">Readsfeed: e-Learning Site <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Readsfeed: e-Learning Site | Hybrid App</h4>
                                <p class="behind">Readsfeed is the one stop reading application where parents, teachers and students can connect to help build the reading community of the future.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/mjsa-rajasthan.png" alt="MJSA Rajasthan" style="width:100%" class="image">
                            <p class="pWithImg">MJSA Rajasthan <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">MJSA Rajasthan | Hybrid App</h4>
                                <p class="behind">The application is intended for use only by the officials of Rajasthan state who are engaged in Mukhya Mantri Jal Swavlamban Abhiyan (MJSA) related activities. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/rajasthan-sampark.png" alt="Rajasthan Sampark" style="width:100%" class="image">
                            <p class="pWithImg">Rajasthan Sampark <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Rajasthan Sampark | Hybrid App</h4>
                                <p class="behind">Rajasthan Sampark is an integrated platform for readressal of grievances related to delivery of Government services.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum native forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/wsr.png" alt="WSR" style="width:100%" class="image">
                            <p class="pWithImg">WSR <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">WSR | Hybrid App</h4>
                                <p class="behind">Wildlife Species Rescue application help user to protect, develop and manage the forest and wildlife resources of the state. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/nfral.png" alt="NFRAL: CMS Site" style="width:100%" class="image">
                            <p class="pWithImg">NFRAL: CMS Site <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">NFRAL: CMS Site | Web Application</h4>
                                <p class="behind">National Law University Forum for Research on Arbitration Law.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- pest your -->
                    <div class="MainColoum native">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/District-KPI.png" alt="District KPI" style="width:100%" class="image">
                            <p class="pWithImg">District KPI <span>| Hybrid App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">District KPI | Hybrid App</h4>
                                <p class="behind">KPIs envisaged for capturing progress of District. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="MainColoum native">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/where2go.png" alt="Where2Go App" style="width:100%" class="image">
                            <p class="pWithImg">Where2Go App <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Where2Go App | Web Application</h4>
                                <p class="behind">The app captures the real time location of drivers and sends the location to server. Admin web portal displays the current location on Google Maps. </p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/gallery-image-5.png" alt="IMD" style="width:100%" class="image">
                            <p class="pWithImg">IMD <span>| Native App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IMD | Native App</h4>
                                <p class="behind">The app provides various weather information such as wetaher forecast, city temperature, warnings, alerts for various cities of india.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/elegance_capital_services.png" alt="Elegance Capital Services" style="width:100%" class="image">
                            <p class="pWithImg">Elegance Capital Services <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Elegance Capital Services | Web Application</h4>
                                <p class="behind">ELEGANCE CAPITAL SERVICES PRIVATE LIMITED was incorporated on 15th February, 1995.</p>
                                <a href="" class="Detail">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="MainColoum webapp">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/nfral.png" alt="NFRAL: CMS Site" style="width:100%" class="image">
                            <p class="pWithImg">NFRAL: CMS Site <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">NFRAL: CMS Site | Web Application</h4>
                                <p class="behind">National Law University Forum for Research on Arbitration Law.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/ilovereading.png" alt="I Love Reading" style="width:100%" class="image">
                            <p class="pWithImg">I Love Reading:e-Commerce Site <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">I Love Reading:e-Commerce Site | Web Application</h4>
                                <p class="behind">ILR is a renowned publisher based out of Singapore publishing wide range of educational book and magazines.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/igl-1.png" alt="IGL Safety Work" style="width:100%" class="image">
                            <p class="pWithImg">IGL Safety Work Permit System <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IGL Safety Work Permit System | Web Application</h4>
                                <p class="behind">Safety Work Permit Portal helps in monitoring permit such as Hot Work Permit and Cold Work Permit.</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/igl-2.png" alt="IGL Meter Reading" style="width:100%" class="image">
                            <p class="pWithImg">IGL Meter Reading Web Portal <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">IGL Meter Reading Web Portal | Web Application</h4>
                                <p class="behind">This web portal helps agencies and IGL admins to see the progress of meter reading activity.</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="MainColoum webapp">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/elegance_capital_services.png" alt="Elegance Capital Services" style="width:100%" class="image">
                            <p class="pWithImg">Elegance Capital Services <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Elegance Capital Services | Web Application</h4>
                                <p class="behind">ELEGANCE CAPITAL SERVICES PRIVATE LIMITED was incorporated on 15th February, 1995.</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/highrise_security.png" alt="Highrise Securities" style="width:100%" class="image">
                            <p class="pWithImg">Highrise Securities & Trading <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">Highrise Securities & Trading | Web Application</h4>
                                <p class="behind">.................</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/jsfinvest.png" alt="JS Finvest" style="width:100%" class="image">
                            <p class="pWithImg">JS Finvest <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">JS Finvest | Web Application</h4>
                                <p class="behind">.......................</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="MainColoum forAll">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/getapermit-login.png" alt="getAPermit:Permit Solution" style="width:100%" class="image">
                            <p class="pWithImg">getAPermit:Permit Solution <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">getAPermit:Permit Solution | Web Application</h4>
                                <p class="behind">getAPermit is a web and app based solution that allows residents and visitors (in USA cities) to purchase parking, residential and business permits.</p>
                                <!-- <a href="" class="Detail">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="MainColoum webapp">
                        <div class="MainContaint">
                            <img src="<?php echo base_url();?>siteassets/img/getapermit-login.png" alt="getAPermit:Permit Solution" style="width:100%" class="image">
                            <p class="pWithImg">getAPermit:Permit Solution <span>| Web App</span></p>
                            <div class="overlay">
                                <h4 class="headClass">getAPermit:Permit Solution | Web Application</h4>
                                <p class="behind">getAPermit is a web and app based solution that allows residents and visitors (in USA cities) to purchase parking, residential and business permits.</p>
                                <!--<a href="" class="Detail">Read More</a>-->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end Gallery div-->
			<br>
			<br>
			<br>
			<br>
			<br>

            <!--start linediv-->

            <!--start careerlast-->
               <!-- <div class="cstmRowCareer careerlast">
                <div class="col-md-12 text-center">
                 <a href="dominos-mobile-app.html">
                        <button class="btnQuote portfolios">
                        <span>Load More Portfolio</span></button>
                    </a>
                </div>
            </div> -->
        </section>
        <section class="portfoliofooterContact footer-contact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 pl-0 pr-0">
                        <img class="img-fluid IndexContactImg" src="<?php echo base_url();?>siteassets/img/contactimg.png" alt="Contact Us">
                    </div>
                    <div class="col-sm-6 pl-0 pr-0 lastSectionDiv">
                        <form  action="sendMail/index.php" method="post"  enctype="multipart/form-data" class="myForm boxShadow">
                            <h6 class="Contact-Us">
                                Contact US</h6>
                            <p class="pshare">
                                Share with us your questions/concerns and we’ll be happy to connect with you and discuss your requirements in details.</p>
                                 <span id="fname-error" class="fname-error error"></span>
                            <input type="text" name="fname" id="fname" placeholder="First Name, Last Name" class="frminput">
                              <span id="email-error" class="email-error error"></span>
                            <input type="text" name="email" id="email" placeholder="Email ID" class="frminput">
                            <span id="contact-error" class="contact-error error"></span>
                            <input type="text" name="contact" id="contact" placeholder="Contact Number" class="frminput">
                             <input type="hidden" name="page" value="portfolio">
                              <span id="message-error" class="message-error error"></span>
                            <textarea rows="5" cols="3" id="message" placeholder="Message" name="message" class="frminput"></textarea>
                            <div class="chkbox">
                                <label class="customCheckbox">Attach the requirement document
                                    <input type="checkbox" id="upload" onclick="myFunctioner()">
                                    <span class="checkmark"></span>
                                </label>
                                <input type="file" id="files" name="myfile" class="filesId">
                            </div>
                            <div >
                                  <span id="captcha-error" class="captcha-error error"></span>
                            <div class="g-recaptcha" id="recaptcha" data-sitekey="6LcOm7gZAAAAAFzTwUQCHW_r2YdAQK44iBN_1toA"></div>

                        </div>
        <button style=" margin-top: 5%;" class ="btn-submit_green"   id="submit" type="submit" onclick="return contactusvalidation()"> submit </button>
                          <!--   <input type="submit" id="submit" value="submit" class="btn-submit_green"> -->
                 <!-- <button style=" margin-top: 5%;" class ="btn-submit_green" type="submit" onclick="return contactusvalidation()"> submit </button> -->
                        </form>
                    </div>
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
                        <input class="form-control field-input" placeholder="Enter your Phone Number" id="popup_phone" name="phone" type="text" data-validation="number" data-validation-error-msg="Contact Number is Required." onkeyup="this.value=this.value.replace(/[^\d]/,'')">

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
    </main>

   <!-- Footer -->
        <footer class="page-footer font-small indigo">
          <?php include 'includes/footer.php';?>
        </footer>
        <!-- Footer -->
    </main>
      <!-- Common Scripts included Here  -->
   <?php include 'includes/scripts.php';?>
   <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("MainColoum");
            // if (c == "all") c = "";
            if (c == "all") c = "forAll";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
            if (c == "forAll") {
                $(".row.aggre.heighlighetedMob").css("display", "block");
                $(".row.aggre.heighlighetedWeb").css("display", "block");
            } else {
                $(".row.aggre.heighlighetedMob").css("display", "none");
                $(".row.aggre.heighlighetedWeb").css("display", "none");

            }
        }

        function w3AddClass(element, name) {

            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = document.getElementById("myBtnContainer").getElementsByClassName("butn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                // current[0].className = current[0].className.replace("active", "");
                $(".butn.active").removeClass("active");
                this.className += " active";
            });
        }
    </script>
</body>

</html>

