<?php 
   

    $post = $this->uri->segment(2);    
    $query = $this->db->select()->where('slug',$this->uri->segment(2))->get('posts'); 
    $rows = $query->num_rows(); 
    // echo $rows;die;
    if($rows==0){       
       redirect(base_url('blog.php'));
    }else{       
        $post_details = $query->row_array();
        //echo "<pre>";print_r($post_details);die;
        $pagetitle = $post_details['title']; 
        $post_description = $post_details['body'];
        $meta_title = $post_details['meta_title'];
        $meta_desc = $post_details['meta_desc'];
        $meta_keywords = $post_details['keywords'];
        $canocical_url = $post_details['seo_url'];        
        $post_title = explode(' ', $post_details['title'], 3);
        $post_image = $post_details['post_banner'];        
    }  
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $meta_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="description" content="<?php echo $meta_desc;?>" />
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <?php include 'includes/stylesheets.php' ?>    
</head>

<body>
    <main>
        <section class="blog-details">
            <!--headerBannerDiv start-->
            <div class="container-fluid container-top container-blog-details parallax">
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
                <div class="blog-detailspdiv row">
                    <div class="col-md-7 blog-detailspdivL">
                        <h1 class="blog-detailsH"><?php echo $post_title[0].' '.ucwords($post_title[1]);?></h1>
                        <p class="blog-detailsP"><?php echo $post_title[2]; ?></p>
                    </div>
                    <div class="col-md-5 blog-detailspdivR"><img class="img-fluid img-thumbnail" src="<?php echo base_url();?>admin/assets/images/posts/<?php echo $post_image;?>"></div>
                </div>
                <!--End of text div -->
                <div style="clear:both;"></div>
            </div>


            <!--headerBannerDiv end-->
            <!-- start blog-detailsdivTxt div-->
            <div class="cstmRowCareer blog-detailsdivTxt boxShadow" style="display: none;">
                <div class="col-sm">
                    <p class="blog-detailsdivP1">
                        We live in a smartphone-driven world and mobile apps are now an integral part of our lives. From day-to-day commute to groceries, our lives revolve around different apps. Enterprises and startups are investing a huge chunk of their marketing budget on
                        developing apps to reach their audiences beyond geographical boundaries. Every day hundreds and thousands of apps are getting developed and pushed in the app stores. In fact, Statista says by 2020 mobile apps are expected to generate
                        USD1888.9 billion. Having a mobile app for your business is no more a luxury, but a necessity if you wish to survive in this competitive marketplace. If you’re looking to get an app developed for your business, then you need to
                        know the current trends that are bringing in disruptions in the mobile app technology. Knowing them and implementing them in your app would certainly give you an edge over your competitors.
                    </p>
                </div>
            </div>          

            <div class="cstmRowCareer">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mobileTrend">                            
                            <div class="row mobileTrendRow">
                                <div class="col-md-12 mobileTrendCol">
                                    <!--<h4 class="mobileTrendColH"></h4>-->
                                    <!--<p class="mobileTrendColP text-justify blog-detailsdivP1">-->
                                    <!--    <?php //echo $post_description;?>-->
                                    <!--</p>-->
                                    <?php echo $post_description;?>
                                </div>                                
                            </div>                            
                            
                        </div>
                        <!-- Start blogfeatur div-->
                        <div class="blogfeatur" style="margin-top:6%!important;">
                            <h3 class="blogfeaturH ">Featured Articles</h3>
                            
                            <?php 
                                $postslug = $this->uri->segment(2);
                                $featurepost = $this->db->select()
                                                ->where('feature',1)
                                                ->limit('1')
                                                ->order_by('id','DESC')
                                                ->get('posts')
                                                ->row_array();                                
                                $redirect_url = base_url().'blogs/'.urlencode($featurepost["slug"]);
                                $featureArticleTitle = trim($featurepost["title"]);
                                $featureArticleImage = base_url().'admin/assets/images/posts/'.$featurepost["post_image"];
                                $featured_post_description = strip_tags(substr($featurepost["body"],0,150));
                            ?>
                            <div class=" row blogfeaturrow">
                                <div class="col-md-6 featurCol1">
                                    <a href="<?php echo $redirect_url;?>"><img src="<?php echo $featureArticleImage;?>" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="col-md-6 featurCol2">
                                    <p class="featurCol2P1"><a class="text-dark" href="<?php echo $redirect_url;?>"><?php echo $featureArticleTitle;?></a></p>
                                    <p class="featurCol2P2"><?php echo $featured_post_description;?> ..</p>
                                    <a href="<?php echo $redirect_url;?>"><button class="featurecol2btn" data-wow-delay="600ms"><span>Read More...</span></button></a>
                                </div>        
                            </div>
                        </div>
                        <!-- start bloglatest div-->
                        <?php 
                        $latestArticles = $this->db->select()
                                                ->where('posts.status',1)
                                                ->where('posts.feature is NULL')
                                                ->join('users','users.id=posts.user_id')
                                                ->order_by('posts.id','DESC')
                                                ->get('posts');
                        $num = $latestArticles->num_rows();
                        if($num>0){ ?>                       
                        <div class="bloglatest">
                            <h3 class="bloglatestH">Latest Articles</h3>
                            <div class="bloglatestrow row"> 
                            <?php 
                                $result = $latestArticles->result_array();
                                foreach($result as $row){
                                    $redirect_url = base_url().'blogs/'.urlencode($row["slug"]);
                                    $latestArticleTitle = trim($row["title"]);
                                    $latestArticleImage = base_url().'admin/assets/images/posts/'.$row["post_image"];
                                    $latestDescription = strip_tags(substr($row["body"],0,150));
                            ?>                      
                                <div class="col-md-6 bloglatestcol1">
                                    <div class="card">
                                        <a href="<?php echo $redirect_url;?>"><img src="<?php echo $latestArticleImage;?>" class="img-fluid" alt="image"></a>
                                        <p><a href="<?php echo $redirect_url;?>" style="cursor: pointer;color:#000000;"><?php echo strip_tags($latestArticleTitle); ?></a></p>
                                        <p><a href="<?php echo $redirect_url;?>"><?php echo $latestDescription;?> ..&nbsp; <span class="read_more">Read More</span></a></p>
                                        <p>By <?php echo $row["name"]; ?> | <?php echo date("M d, Y", strtotime($row["created_at"])); ?></p>
                                    </div>
                                </div>  
                                <?php }?>                         
                            </div>
                        </div>                                             
                    </div>
                    <?php }?>  
                    
                    <div class="col-md-4 pt-3">
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
                        <div class="bloglatest">
                            <div class="row bloglatestrow mt-5">
                                 <?php include 'blog-sidebar.php';?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="">
                
                
                
            </div>

            <!-- <div class="cstmRowCareer mobileTrend">
                <h3 class="mobileTrendH text-center">5 mobile app development trends that you cannot miss</h3>
                <div class="row mobileTrendRow">
                    <div class="col-md-6 mobileTrendCol">
                        <h4 class="mobileTrendColH">Machine Learning and Artificial Intelligence</h4>
                        <p class="mobileTrendColP">
                            Machine learning and AI has made their foray across industries and mobile app technology is not left behind. We will see more and more integration of ML and AI in the form of chatbots and visual assistant in the mobile apps in the coming days. In fact,
                            the success of SIRI reaffirms the fact that ML and AI are going to stay and rule here for some time.
                        </p>
                    </div>
                    <div class="col-md-6 mobileTrendCol">
                        <h4 class="mobileTrendColH">UI design to watch out for</h4>
                        <p class="mobileTrendColP">
                            Face ID to unlock your app device is definitely going to fetch you some brownie points for your app. Spare your users from remembering app passwords by integrating Face ID. Users’ attention span is decreasing and it is important to keep them hooked on
                            to make your app a success. Incorporate motions and animations to engage.
                        </p>
                    </div>
                </div>
                <div class="row mobileTrendRow">
                    <div class="col-md-6 mobileTrendCol">
                        <h4 class="mobileTrendColH"> Enterprise app trends</h4>
                        <p class="mobileTrendColP">
                            With enterprises leveraging the benefits of mobile apps, security is becoming a prime area of concern. Mobile app development companies are now addressing various concerns like possible hacking, data theft, and more. With enterprise apps becoming more
                            imperative, app development companies are focusing on integrating valuable features to automate business workflows, support industry projects, enable frameworks for IoT and other advanced technologies.
                        </p>
                    </div>
                    <div class="col-md-6 mobileTrendCol">
                        <h4 class="mobileTrendColH">On – Demand app</h4>
                        <p class="mobileTrendColP">
                            According to a report published by PwC, on-demand apps revenue will hit $335 billion by 2025. We are already witnessing some of them which are disrupting digitization. From on-demand groceries to on-demand cabs, on-demand apps are already an integral
                            part of our lives. The benefits are many: They are accurate, convenient, nearest service availability, easy payment options available, and of course give us cost advantage. It has gained quite an attention of investors and
                            will be on trend for the coming few years.
                        </p>
                    </div>
                </div>
                <div class="row mobileTrendRow">
                    <div class="col-md-6 mobileTrendCol">
                        <h4 class="mobileTrendColH">5G technology for mobile app developers</h4>
                        <p class="mobileTrendColP">
                            f you’re a startup considering to get an app developed for your business, or if you are an app developer, give serious consideration about 5G technology for your app with respect to data security, augmented reality, 3D gaming, etc. Integrating custom
                            made network slices along with ultra-low network latency will give your app an edge on its performance and responsiveness.
                        </p>
                    </div>

                </div>
            </div> -->
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
                  <img src="<?php echo base_url(); ?>img/quick-enquiry-icon.png" alt="Enquiry">  Get free quote
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
