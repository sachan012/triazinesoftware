<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Engagement Model - Triazinesoftware</title>
    <?php include 'includes/stylesheets.php' ?>  
</head>
<body>
    <main>
        <section class="engagementSection">
            <!---headerBannerDiv start--->
            <div class="container-fluid container-top engagenmentContainer-top">
                <svg class="svg1">
                    <circle class="circle1"></circle>
                    <circle class="circle2"></circle>
                </svg>
                <!-- Left menu code -->
                <nav class="navbar navbar-expand-md pl-0 pr-0 header only-landingpage">
                   <?php include 'includes/navbar.php'?>                
                </nav>
                <!-- Left menu code -->
                <div class="engagnmentpdiv row text-center">
                    <div class="col-md-6 engagepdivL">
                        <h1 class="text-left engagnmentpdivH wordStyle ">Our Engagement Model
                        </h1>
                        <p class="text-left engagnmentpdivP wordStyle ">Ensuring Highest Quality at Optimum Cost
                        </p>
                    </div>
                    <div class="col-md-6 text-right engagepdivR"><img src="<?php echo base_url();?>siteassets/img/illustration engagement modal.svg" class="img-fluid">
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <!---headerBannerDiv-- end--->

            <!--- EngagementContainer--->
            <!---engagementMainDiv1--->
            <div class="cstmRowCareer engagementMainDiv1 boxShadow ">
                <div class="col-sm">
                    <p class="engagementMainDiv1Para">
                        We understand that every customer is unique and so are their requirements. Our flexible engagement models ensure that customers’ priorities are met with high quality, timely and cost effective deliveries. </p>
                </div>
            </div>
            <div class="engagementMainDiv2Heading">
                <p class="engagementMainDiv2Headingpara ">Choose from our wide range of Engagement Models to suit your business needs.
                </p>
                <div class="row engagementColrow cstmRowCareer ">
                    <div class="col-md-2 colImgTag">
                        <img src="<?php echo base_url();?>siteassets/img/FixedTimePrice.svg" alt="FixedTimePrice">
                    </div>
                    <div class="col-md-10">
                        <h1 class="fixedTime ">Fixed Time, Fixed Price </h1>
                        <p class="fixedPrice ">
                            Best suited for organizations with fixed and clear set of requirements, limited scope, which is unlikely to change over the course of development and short timelines. Allows customers to predict the cost of overall project in the beginning itself and
                            puts the control in their hand to manage it. Any change in the scope would change the overall cost. </p>
                    </div>
                </div>
            </div>
            <div class="row engagementColrow cstmRowCareer ">
                <div class="col-md-2 colImgTag">
                    <img src="<?php echo base_url();?>siteassets/img/TimeMaterial.svg" alt="">
                </div>
                <div class="col-md-10 ">
                    <h1 class="fixedTime  ">Time & Material </h1>
                    <p class="fixedPrice ">Best suited for organizations with constantly evolving scope & specifications for complex projects. A cost effective model that allows customers to pay as per use on a pre-agreed hourly/daily/weekly rate while offering flexibility
                        to change requirements anytime.
                    </p>
                </div>
            </div>
            <div class="row engagementColrow cstmRowCareer ">
                <div class="col-md-2 colImgTag">
                    <img src="<?php echo base_url();?>siteassets/img/DedicatedTeams.svg" alt="FixedTimePrice">
                </div>
                <div class="col-md-10 ">
                    <h1 class="fixedTime ">Dedicated Teams </h1>
                    <p class="fixedPrice ">
                        Best suited for organizations with long term projects where our team of dedicated people, works as an extension of customer’s team. All infrastructure and other requirements of this team is taken care of by us. Customers get a team of highly skilled SMEs
                        who knows the industry/business well and provide round the clock support.</p>
                </div>
            </div>
            <div class="row engagementColrow cstmRowCareer ">
                <div class="col-md-2 colImgTag">
                    <img src="<?php echo base_url();?>siteassets/img/DistributedTeams.svg" alt="FixedTimePrice">
                </div>
                <div class="col-md-10 ">
                    <h1 class="fixedTime ">Distributed Teams </h1>
                    <p class="fixedPrice "> A combination of Onsite - Offshore teams, the model is best suited for organizations looking for cost efficiencies without compromising on skillset. Aimed at optimizing the efficiency and cost, this model enables better communication
                        & provides required assurance to customers while also offering cost savings and round the clock support.
                    </p>
                </div>
            </div>


            <!---OurWide--->

            <section class="OurWideDiv">
                <div class="container-fluid ">
                    <div class="cstmRowEngagement">
                        <div class="row OurWideDiv1">
                            <div class="col-md-5 OurWide">
                                <h3 class="OurWideh3 " style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">

                                    Our Wide Range of Solutions acros Industries
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="OurWideDiv2 cstmRowEngagement ">
                        <!--start tab for web-->
                        <div class="row" id="OurWideDiv2TabWeb">
                            <!-- <div class="col-sm-1"></div> -->
                            <div class="col-md-5 col1">
                                <div class="OnlineFood tablinks active " id="defaultOpen" onclick="openSol(event, 'OnlineFoodTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_onlineFood.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Food Ordering Solution</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="OnlineFood tablinks " onclick="openSol(event, 'PermitTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_permitTraffic.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Permit/ Parking/ Traffic Solution</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="OnlineFood tablinks " onclick="openSol(event, 'GrievanceRedressalSysTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_grievance.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Grievance Redressal System
                                        </h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="OnlineFood tablinks " onclick="openSol(event, 'OnlineTicketBookingTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_forest.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Ticket Booking for Forest</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="OnlineFood tablinks " onclick="openSol(event, 'MeterReadingSolTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_meterReading.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Meter Reading Solution
                                        </h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="OnlineFood tablinks " onclick="openSol(event, 'PlatformTitle')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_broker.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">
                                            Platform for Broker, Seller and Buyer</h1>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 orderingSolution OnlineFoodDetail tabcontent" id="OnlineFoodTitle">
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
                                            <li> Integration with various payment gateway providers</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-7 orderingSolution PermitTitleDetail tabcontent" id="PermitTitle" style="display: none;">
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

                            <div class="col-md-7 orderingSolution GrievanceRedressalSysDetail tabcontent" id="GrievanceRedressalSysTitle" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding"> GrievanceRedressal System</h1>
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

                            <div class="col-md-7 orderingSolution OnlineTicketBookingDetail tabcontent" id="OnlineTicketBookingTitle" style="display: none;">
                                <div class="row orderingSolutionRow">
                                    <div class="orderingSolutionRowDiv">
                                        <h1 class="orderingSolutionRowDivHadding"> Online Ticket Booking for Forest</h1>
                                        <p class="orderingSolutionRowDivPara">

                                        </p>

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

                            <div class="col-md-7 orderingSolution MeterReadingSolDetail tabcontent" id="MeterReadingSolTitle" style="display: none;">
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

                            <div class="col-md-7 orderingSolution PlatformDetail tabcontent" id="PlatformTitle" style="display: none;">
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
                        <!-- End tab for Web-->
                        <!-- start tab for mobile-->
                        <div class="row" id="OurWideDiv2TabMobile">
                            <!-- <div class="col-sm-1"></div> -->
                            <div class="col-md-12 col1">
                                <div class="OnlineFood tablinksfoodMobile  active " id="defaultOpenMobile" onclick="openSolMobile(event, 'OnlineFoodTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_onlineFood.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Food Ordering Solution</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=" orderingSolution OnlineFoodDetail tabcontentfoodMobile" id="OnlineFoodTitleMobile">
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
                                                <li> Integration with various payment gateway providers</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="OnlineFood tablinksfoodMobile " onclick="openSolMobile(event, 'PermitTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_permitTraffic.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Permit/ Parking/ Traffic Solution</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=" orderingSolution PermitTitleDetail tabcontentfoodMobile " id="PermitTitleMobile" style="display: none;">
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
                                <div class="OnlineFood tablinksfoodMobile " onclick="openSolMobile(event, 'GrievanceRedressalSysTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_grievance.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Grievance Redressal System
                                        </h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="orderingSolution GrievanceRedressalSysDetail tabcontentfoodMobile" id="GrievanceRedressalSysTitleMobile" style="display: none;">
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
                                <div class="OnlineFood tablinksfoodMobile " onclick="openSolMobile(event, 'OnlineTicketBookingTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_forest.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Online Ticket Booking for Forest</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class=" orderingSolution OnlineTicketBookingDetail tabcontentfoodMobile" id="OnlineTicketBookingTitleMobile" style="display: none;">
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
                                <div class="OnlineFood tablinksfoodMobile " onclick="openSolMobile(event, 'MeterReadingSolTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_meterReading.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">Meter Reading Solution
                                        </h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="orderingSolution MeterReadingSolDetail tabcontentfoodMobile" id="MeterReadingSolTitleMobile" style="display: none;">
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
                                <div class="OnlineFood tablinksfoodMobile " onclick="openSolMobile(event, 'PlatformTitleMobile')" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div><img src="<?php echo base_url();?>siteassets/img/ic_broker.svg" class="img-fluid OnlineFoodimg"></div>
                                    <div>
                                        <h1 class="OnlineFoodHeadding custmOnlineFoodHeaddingFontPadding">
                                            Platform for Broker, Seller and Buyer</h1>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="orderingSolution PlatformDetail tabcontentfoodMobile" id="PlatformTitleMobile" style="display: none;">
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

            <!--start careerlast-->
            <div class="cstmRowCareer careerlast ">
                <div class="col-md-12 text-center">
                    <p>If you are looking to implement any of the above Solutions or Industry Specific Solutions, we are happy to help you!</p>
                    <a href="contact-us.html">
                        <button class="btnQuote ">
                        <span>Get a free Quote</span>
                    </button>
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
     <!-- Common Scripts included Here  -->
    <?php include 'includes/scripts.php';?>
  
</body>
</html>
