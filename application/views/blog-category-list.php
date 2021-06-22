<?php 
    include_once("connection.php");
    function get_len_of_word($str,$number){
       $array_str = explode(" ", $str);
       if(isset($array_str[$number])){
         return implode(" ",array_slice($array_str, 0, $number));
       }
     return $str;
    }

    $sql = "SELECT * FROM `categories` WHERE `id` = ".$_GET['categoryid'];
    $result = $conn->query($sql);
    $category_details = $result->fetch_array();  
    $category_name = $category_details['name']; 
    $category_image =   $category_details['image'];
    $category_desc =   $category_details['full_description'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Category- Triazine software</title>
    
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
                <div class="blogpdiv row">
                    <div class="col-md-7 blogpdivL">
                        <h1 class="blogH"><?php echo $category_name ?></h1>
                        <?php if(empty($category_desc)){?>
                            <p class="blogP">Learning has a beginning, but no end!  Take a step into the high-tech ocean filled to its brim with endless knowledge, intelligence, and wisdom. </p>
                        <?php }else{?>
                             <p class="blogP"><?php echo strip_tags(get_len_of_word($category_desc,20)); ?> ..</p>
                        <?php } ?>                        
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
                    <?php include 'blog-sidebar-mobileview.php';?>
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
                                   
                                    $sqlForLatestArticles = "SELECT * FROM `posts` where `status`=1 && `category_id` =".$_GET['categoryid'].";";
                                    $resultForLatestArticles = $conn->query($sqlForLatestArticles);
                                    if ($resultForLatestArticles->num_rows > 0) {                                   
                                        while($row = $resultForLatestArticles->fetch_array()) {                                          
                                            if(strlen($row["title"])>95){
                                                $title= substr($row["title"],0,95).' ..'; 
                                            }else{
                                                $title= $row["title"];
                                            } 
                                          
                                            $slug = $row["slug"];
                                            $pd = strip_tags($row["body"]);
                                            $descriptionLatest = substr($pd,0,130);
                                            $sqlForAuthorName = "SELECT name FROM users WHERE id = ".$row["user_id"];
                                            $resultForAuthorName = $conn->query($sqlForAuthorName);
                                            $details = $resultForAuthorName->fetch_array();                                        
                                ?>  
                                
                                <div class="col-md-6 bloglatestcol1">                                  
                                    <div class="card">                                        
                                        <a href="<?php echo base_url();?>blogs/<?php echo $slug;?>"><img src="<?php echo base_url();?>admin/assets/images/posts/<?php echo $row["post_image"];?>" class="img-fluid" alt="image"></a>
                                        <p><a href="<?php echo base_url();?>blogs/<?php echo $slug;?>" style="cursor: pointer;color:#000000;"><?php echo strip_tags($title); ?></a></p>
                                        <!--<p><?php echo strip_tags($descriptionLatest)."...."; ?></p>-->
                                        <p><?php echo trim($descriptionLatest);?> ..&nbsp; <span class="read_more"><a href="<?php echo base_url();?>blogs/<?php echo $slug;?>">Read More</a></span></p>
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
