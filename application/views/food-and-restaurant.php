<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Ordering Mobile App - Mobile App for Restaurant Ordering - TriazineSoftware</title>
     <?php include 'includes/stylesheets.php' ?>
</head>

<body>
    <main>
        <section class="foodRestaurant">
            <!--headerBannerDiv start----------->
            <div class="container-fluid container-top container-foodRestaurant-div">
                <svg class="svg1">
                    <circle class="circle1"></circle>
                    <circle class="circle2"></circle>

                </svg>
                <!-- Left menu code -->
                 <nav class="navbar navbar-expand-md pl-0 pr-0 header only-landingpage">
					<?php include 'includes/navbar.php'?>
				</nav>
                <!-- Left menu code -->
                <div class="foodRestaurantpdiv row text-center">
                    <div class="col-md-7 foodRestaurantpdivL">
                        <h1 class="text-left foodRestaurantpdivH wordStyle">
                            Food Ordering Mobile App
                        </h1>
                        <p class="text-left foodRestaurantpdivP wordStyle">
                            Increase Revenue and Improve Customer Experience
                        </p>
                    </div>
                    <div class="col-md-5 text-right foodRestaurantpdivR">
                        <img src="<?php echo base_url();?>siteassets/img/gr_food&restaurant.svg" class="img-fluid" alt="banner"></div>

                    <!-- <img src="<?php echo base_url();?>siteassets/img/android-logo.svg"> -->
                </div>
                <!-- <div class="greenemptydiv"><button></button></div> -->
                <div style="clear:both;"></div>
            </div>
            <!-----headerBannerDiv end------->
            <!----------foodParadiv---------------->
            <div class="container-fluid">
                <div class="foodParadiv containerBox boxShadow">
                    <div class="row foodParadivCol">
                        <div class="col webappDevlopTxtTopColL">
                            <p class="foodParadivColP">
                                With changing consumer expectations and tastes, Food & Restaurant industry has a lot on its plate to handle. The first step to succeed and gain a competitive position in the marketplace is – Keeping up with the trends.
                            </p>
                            <p class="foodParadivColP">Today’s consumer wants quick, healthy and affordable options and Mobile apps have changed the game for the industry. The expectations now are, not to just have an app, but an app that offers features like - View Menus, Make
                                a Reservation, Order Food Online, Check Reviews and Ratings, Make online payment, Suggestions on popular food items and so on. And when they struggle to find answers on their own, they expect an instant help. Not to mention
                                the concerns about diet, nutrition, food allergies and ingredients they have.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!--Foodwhtweoffer-->
            <div class="Foodwhtweoffer cstmRowCareer">
                <h3 class="FoodwhtweofferH">What We Offer</h3>
                <p class="FoodwhtweofferP">We have worked with some of the top brands in the industry and leveraged the knowledge gained to develop solutions that could not only take care of the challenges that the industry is facing currently but also of changing consumer expectations.
                </p>
                <div class="row FoodwhtweofferRow">
                    <div class="col-md-6 FoodwhtweofferRowColL">
                        <img class="img-fluid" src="<?php echo base_url();?>siteassets/img/solutions/food-ordering-dominos.png" alt="food-ordering">

                    </div>
                    <div class="col-md-6 FoodwhtweofferRowColR">
                        <h3 class="FoodwhtweofferRowColRH">Online Food Ordering Solution</h3>
                        <p class="FoodwhtweofferRowColRP">The solution lets your customers order food online from their favorite restaurant/Outlet without any hassle. As part of the solution, we cover – UI/UX, Simplify User Journey, and Integration with other platforms being used by the
                            customer to provide better insights.
                        </p>
                        <h3 class="FoodwhtweofferRowColRH">Salient Features</h3>
                        <ul class="FoodwhtweofferRowColRul">
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Auto-Detection of location and Store identification</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Order Customization</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Cart Management</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>PUSH Notifications</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Order History/ Repeat Order</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Refund Management</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Integration with various payment gateway providers</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!----------foodcasestudy-->
            <div class="foodcasestudy">
                <div class="row foodcasestudyRow cstmRowCareer">
                    <div class="col-md-5 foodcasestudyRowL">
                        <h4 class="foodcasestudyRowLH1">Case Studies</h4>
                        <h3 class="foodcasestudyRowLH2">Dominos</h3>
                        <p class="foodcasestudyRowLP"> Food Order & Delivery App with Easy to Understand UI</p>
                    </div>
                    <div class="col-md-7 foodcasestudyRowR">
                        <img class="img-fluid" src="<?php echo base_url();?>siteassets/img/mobile_imgs.png" alt="">
                    </div>
                </div>
            </div>
            <!-------foodbusinschallng-------->
            <div class="foodbusinschallng cstmRowCareer">
                <h3 class="foodbusinschallngH">Business Challenges</h3>
                <ul class="foodbusinschallngUL">
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg">
                        <p>Significant No. of failed orders leading to unhappy customers</p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg">
                        <p>Cumbersome process for locating nearby stores</p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg">
                        <p>App not scalable enough to accommodate growing user base and accommodate new features</p>
                    </li>
                </ul>
            </div>
            <!-------foodwtwedid-------->
            <div class="foodwtwedid cstmRowCareer">
                <h3 class="foodwtwedidH">What We Did</h3>
                <ul class="foodwtwedidUL">
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                        <p>Redesigned UI/UX of the app considering the branding guidelines and material design principles</p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                        <p>Simplified User Journey while Improving overall User Experience</p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                        <p>Integrated various Analytics platforms such as AppsFlyer, ClevarTap and Google Analytics to capture User Behavior accurately
                        </p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                        <p>Configured Amazon Web Service (AWS) to host MFP and Online Ordering APIs to Improve App Performance and Reduce Downtime
                        </p>
                    </li>
                    <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                        <p>Implemented solution for Automatic Identification of nearby stores based on user’s current location
                        </p>
                    </li>
                </ul>
            </div>
            <!----foodOutcomes--------->
            <div class="foodOutcomes ">
                <div class="row foodOutcomesRow cstmRowCareer">
                    <div class="col-md-6 foodOutcomesRowL">
                        <h3 class="foodOutcomesRowLH">Outcomes</h3>
                        <ul class="foodOutcomesRowLUL">
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>3X increase in Revenue through new, redesigned Mobile App</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Simplified User Journey with Enhanced UI Design</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Improved User Experience leading to Improved App Rating from 3.3 to 3.9 on Google Play Store within a year</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Reduced Store Detection time leading to increased no. of orders</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Deep understanding of Customer behavior from advanced Analytics resulting in improved ROI</p>
                            </li>
                            <li><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/check.svg" alt="check">
                                <p>Scalable enough to handle ~150000 concurrent users</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 foodOutcomesRowR">
                        <img class="img-fluid" src="<?php echo base_url();?>siteassets/img/pizza-mobile-img.png" alt="">
                        <img class="img-fluid" src="<?php echo base_url();?>siteassets/img/pizza-mobile-img.png" alt="">
                    </div>
                </div>

            </div>
            <!-----technologydiv start---------->
            <div class="technologydiv">
                <h4 class="technologydivH text-center">
                    Technologies</h4>
                <div class="cstmRowCareer row technologydivRow wow slideInRight" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/ionic.png" class="img-fluid" alt="ionic">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/php.png" class="img-fluid" alt="php">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/linux.png" class="img-fluid" alt="linux">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/mysql.png" class="img-fluid" alt="mysql">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/mfp.png" class="img-fluid" alt="mfp">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="<?php echo base_url();?>siteassets/img/apache.png" class="img-fluid" alt="apache">
                    </div>

                </div>
            </div>
            <!-----technologydiv end---------->
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
</body>

</html>
