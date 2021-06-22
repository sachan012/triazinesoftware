<?php include_once("connection.php");
    include("baseurl.php"); 
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
    <title>Blog - Triazine software</title>
     <?php include 'includes/stylesheets.php' ?>
</head>

<body>
    <main>
        
        <section class="blog">
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
                        <h1 class="blogH">
                            Blog
                        </h1>
                        <!-- <p class="blogP">We're a Technology Company that understands inherent complexities at businesses and with your technical expertise we help than transform and scale </p> -->
                        <p class="blogP">Learning has a beginning, but no end!  Take a step into the high-tech ocean filled to its brim with endless knowledge, intelligence, and wisdom. </p>
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
                        <!-- Putting up with the finest of Tech Pieces, Knowledge Resources, News Archives, and Hand-picked Stories to keep you ahead of the technology curve. Making sure you get the latest of industry insights and forum updates as it happens -
                        all wrapped in the K-exclusive factor we aim and strive to deliver! -->

                        The marvels of technology are a dynamic and agile process. This is why we’ve put together the finest and latest technology pieces, knowledge resources, and product stories to expand your understanding of modern technological architecture. Our articles
                        cover market insights, search algorithms updates, and trending topics as it happens!
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

            <div class="cstmRowCareer blognewStruct">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blogfeatur ">
                            <h3 class="blogfeaturH ">Featured Articles</h3>
                            <?php 

                                $sql = "SELECT * FROM posts WHERE feature = 1 LIMIT 1";
                                $result = $conn->query($sql);
                                $featurepost = $result->fetch_array();
                                $feature_post_title = $featurepost["1"];
                                $feature_post_image = $featurepost["5"];
                                //$description = get_len_of_word($featurepost["6"],30);
                                $featured_post_description = strip_tags(substr($featurepost["7"],0,150));
                                $feature_post_url = urlencode($featurepost["slug"]);

                            ?>
                            <div class=" row blogfeaturrow">                                                            
                                <div class="col-md-6 featurCol1">
                                    <a href="<?php echo base_url();?>blogs/<?php echo $feature_post_url; ?>"><img src="./admin/assets/images/posts/<?php echo $featurepost["5"];?>" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="col-md-6 featurCol2">
                                    <p class="featurCol2P1"><a href="<?php echo base_url();?>blogs/<?php echo $feature_post_url; ?>" style="cursor: pointer;color:#000000;"><?php echo $feature_post_title;?></a></p>
                                    <p class="featurCol2P2"><?php echo $featured_post_description;?> ..</p>
                                    <!--<p class="featurCol2P2"><?php //echo ucwords(trim(strip_tags($description)));?></p> -->
                                    <a href="<?php echo base_url();?>blogs/<?php echo $feature_post_url; ?>"><button class="featurecol2btn" data-wow-delay="600ms"><span>Read more...</span></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="bloglatest">
                            <h3 class="bloglatestH">Latest Articles
                            </h3>
                            <div class="bloglatestrow row">
                                 <?php
                                    //$sqlForLatestArticles = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC";
                                    $sqlForLatestArticles = "SELECT * FROM posts WHERE `STATUS` = 1 AND `feature` IS NULL ORDER BY id DESC";
                                    $resultForLatestArticles = $conn->query($sqlForLatestArticles);
                                    if ($resultForLatestArticles->num_rows > 0) {                                   
                                        while($row = $resultForLatestArticles->fetch_array()) {
                                            //$title= $row["title"];
                                            if(strlen($row["title"])>95){
                                                $title= substr($row["title"],0,95).' ..'; 
                                            }else{
                                                $title= $row["title"];
                                            } 
                                          /*  $slug = "blog-details.php?post=".$row["slug"];*/
                                            $slug = $row["slug"];
                                           // $descriptionLatest = get_len_of_word($row["body"],25);
                                           $pd = strip_tags($row["body"]);
                                           $descriptionLatest = substr($pd,0,130);
                                            $sqlForAuthorName = "SELECT name FROM users WHERE id = ".$row["user_id"];
                                            $resultForAuthorName = $conn->query($sqlForAuthorName);
                                            $details = $resultForAuthorName->fetch_array();                                        
                                ?>  
                                
                                <div class="col-md-6 bloglatestcol1">                                  
                                    <div class="card">                                        
                                        <a href="<?php echo base_url();?>blogs/<?php echo $slug;?>"><img src="./admin/assets/images/posts/<?php echo $row["post_image"];?>" class="img-fluid" alt="image"></a>
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
                    <div class="col-md-4 blogfeatur bloglatest">
                        <div class="row blogfeaturrow ">
                            <div class="col-md-12 featurCol3">
                                <input type="text" placeholder="Search" style="display:none;">
                                <h4 class="featurCol3H">Recent Articles</h4>
                                <?php
                                    $sqlForRecentArticles = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC LIMIT 4";
                                    $resultForRecentArticles = $conn->query($sqlForRecentArticles);
                                    //$categories = $result->fetch_array();
                                    //print_r($resultForRecentArticles->fetch_assoc); die;

                                if ($resultForRecentArticles->num_rows > 0) { ?>
                                <?php  
                                    while($row = $resultForRecentArticles->fetch_assoc()) {
                                    $shortTitle = get_len_of_word($row["title"],10);
                                ?>
                                <p><a href="<?php echo base_url();?>blogs/<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a></p>
                                <?php }?>
                                <?php  }else{ ?>
                                    <p>No Recent Articles</p>
                                <?php } ?> 
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
            <!--start careerlast-->


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