<?php    
    function get_len_of_word($str,$number){
       $array_str = explode(" ", $str);
       if(isset($array_str[$number])){
         return implode(" ",array_slice($array_str, 0, $number));
       }
     return $str;
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Archive - Triazine software</title>
    <?php include 'includes/stylesheets.php' ?>
</head>
<body>
    <main>
        <section class="blog blog-list">
            <!--headerBannerDiv start-->
            <div class="container-fluid container-top container-blog parallax">
                <svg class="svg1">
                    <circle class="circle1"></circle>
                    <circle class="circle2"></circle>

                </svg>
                <!-- Left menu code -->
                 <nav class="navbar navbar-expand-md pl-0 pr-0 header only-landingpage">
					<?php include 'includes/navbar.php'?>
				</nav>
                <!-- Left menu code -->
                <!--Text on top banner---->
                <?php 
                    $month_year = urldecode($_GET['duration']); 
                    $month_year = explode('_', $month_year);    
                    $year = $month_year[1];
                    $month = $month_year[0];
                    $month_nw = date('F', mktime(0, 0, 0, $month, 10));
                    $month_year_nw = $month_nw.' '.$year;                    
                ?>
                <div class="blogpdiv row">
                    <div class="col-md-7 blogpdivL">
                        <h1 class="blogH"><?php echo $month_year_nw;?></h1>
                        <p class="blogP">We're a Technology Company that understands inherent complexities at businesses and with your technical expertise we help than transform and scale </p>                       
                    </div>
                    <div class="col-md-5 blogpdivR"><img class="img-fluid" src="<?php echo base_url();?>siteassets/img/illustration blogs.svg"></div>
                </div>
                <!--End of text div -->
                <div style="clear:both;"></div>
            </div>
            <!--headerBannerDiv end-->
            <!-- start blogdivTxt div-->
            <div class="cstmRowCareer blogdivTxt boxShadow">
                <div class="col-sm">
                    <p class="blogdivP1">
                        The marvels of technology are a dynamic and agile process. This is why we’ve put together the finest and latest technology pieces, knowledge resources, and product stories to expand your understanding of modern technological architecture. Our articles cover market insights, search algorithms updates, and trending topics as it happens!
                    </p>
                </div>
            </div>
            <!--start blogRightDrawer-->
            <div class="blogRightDrawer">
                <div class="align-right-menu text-right">
                    <img class="img-fluid" id="alignRightMenu" src="<?php echo base_url();?>siteassets/img/align-right-menu.svg">
                </div>
                <div id="blogRightDrawer" class="featurCol3Mobile wow slideInRight" data-wow-duration="1000ms" data-wow-delay="4ms" style="display:none;">
                    <?php //include 'blog-sidebar-mobileview.php';?>
                </div>
            </div>

            <!--Start blogList-->
            <div class="cstmRowCareer blogListDiv">
                <div class="row">
                    <div class="col-md-8">
                        <div class="bloglatest">
                            <h3 class="bloglatestH">Latest Articles</h3>
                            <div class="bloglatestrow row">
                                <?php
                                   
                                    $month_year = urldecode($_GET['duration']); 
                                    $month_year = explode('_', $month_year);    
                                    $year_val = $month_year[1];
                                    $month_val = $month_year[0];

                                    $sql = "SELECT * FROM `posts` Where `status`=1 AND (Month(`created_at`)='".$month_val."' && YEAR(`created_at`)=".$year_val.");"; 
                                    
                                    $results = $this->db->query($sql);                                  
                                    $num_rows = $results->num_rows();   
                                    //echo $num_rows;die;
                                                             
                                    if ($num_rows > 0) {                                    
                                        foreach($results->result_array() as $row) {

                                             if(strlen($row["title"])>95){
                                                $title= substr($row["title"],0,95).' ..'; 
                                            }else{
                                                $title= $row["title"];
                                            }                                          
                                            /*$slug = "blog-details.php?post=".$row["slug"];   */  
                                            $slug = $row["slug"];   
                                            //$descriptionLatest = get_len_of_word($row["body"],23);
                                            $desL = strip_tags($row["body"]);
                                            $descriptionLatest = substr($desL,0,120);
                                            $sqlForAuthorName = "SELECT name FROM users WHERE id = ".$row["user_id"];
                                            $resultForAuthorName = $this->db->query($sqlForAuthorName);
                                            $details = $resultForAuthorName->row_array();                                        
                                ?> 
                                <div class="col-md-6 bloglatestcol1">
                                    <div class="card">
                                        <a href="<?php echo base_url('blogs/').$slug;?>"><img src="../admin/assets/images/posts/<?php echo $row["post_image"];?>" class="img-fluid" alt="image"></a>
                                        <p><a href="<?php echo base_url('blogs/').$slug;?>" style="cursor: pointer;color:#000000;"><?php echo strip_tags($title); ?></a></p>
                                        <!--<p><?php //echo strip_tags($descriptionLatest)."...."; ?></p>-->
                                        <p><?php echo $descriptionLatest;?> ..&nbsp; <span class="read_more"><a href="<?php echo base_url('blogs/').$slug;?>">Read More</a></span></p>
                                        <p>By <?php echo $details["name"]; ?> | <?php echo date("M d, Y", strtotime($row["created_at"])); ?></p>
                                    </div>
                                </div> 
                                <?php  } ?>
                                <?php }else{ ?>
                                    <div class="col-md-6 bloglatestcol1">
                                        <div class="card">
                                           <p class="text-left">0 Articles</p>
                                        </div>
                                    </div> 
                                <?php }?>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-5 right-sidebar">
                        <div class="row blogfeaturrow">
                            <div class="col-md-12 featurCol3">
                                <input type="text" placeholder="Search" style="display:none;">
                                <h4 class="featurCol3H">Recent Articles</h4>  
                                <?php

                                    $postslug = $this->uri->segment(2);
                                    $recrentArticlesQuery = $this->db->query("SELECT * FROM posts WHERE status = 1 AND slug NOT IN ('".$postslug."') ORDER BY id DESC LIMIT 4");                                    
                                    $numrows = $recrentArticlesQuery->num_rows();
                                    if ($numrows > 0) { 
                                      foreach($recrentArticlesQuery->result_array() as $row){
                                    ?>
                                                              
                                <p><a href="<?php echo base_url();?>blogs/<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a></p>
                                <?php }?>
                                <?php }else{?>
                                    <p> No Recent Article</p>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row bloglatestrow mt-5">
                            <?php include 'blog-sidebar.php';?>
                        </div>
                    </div>
                </div>
            </div>


            <!--start linediv-->
            <div class="linediv"></div>

            <br>


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