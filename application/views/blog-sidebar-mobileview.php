<input type="text" placeholder="Search">
<h4 class="featurCol3H">Recent Articles</h4>
<?php
    $sqlForRecentArticles = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC LIMIT 4";
    $resultForRecentArticles = $conn->query($sqlForRecentArticles);
    if ($resultForRecentArticles->num_rows > 0) 
    { 
        while($row = $resultForRecentArticles->fetch_assoc()) 
        {
        $shortTitle = get_len_of_word($row["title"],10);
?>
<p><a href="blog-details.php?post=<?php echo $row["slug"]; ?>"><?php echo ucwords($shortTitle); ?></a></p>
<?php }?>
<?php  }else{ ?>
    <p>No Recent Articles</p>
<?php } ?> 

<ul class="col3ul1">Categories
    <?php 
        $sql = "SELECT * FROM categories WHERE status = 1";
        $result = $conn->query($sql);                        
        if ($result->num_rows > 0) {                        
        while($row = $result->fetch_array()) {
        $sqlForCount = "SELECT id FROM posts WHERE category_id = ".$row["id"]." AND status =1;";
        //echo $sqlForCount; die;
        $resultForCount = $conn->query($sqlForCount);
    ?>
    <li>
        <a href="blog-category-list.php?categoryid=<?php echo $row["id"]; ?>&category-name=<?php echo $row["name"];?>"><?php echo $row["name"]?> <?php if($resultForCount->num_rows > 0) { ?><span><?php if($resultForCount->num_rows > 0) { echo $resultForCount->num_rows;  } ?></span><?php } ?></a>
    </li>
    <?php  } }?>
</ul>
<ul class="col3ul2">Archives
    <?php  
        // output Archive Data 
        $sqlArchives = "SELECT Month(`created_at`) as Month, Year(`created_at`) as Year FROM posts GROUP BY Month(`created_at`), Year(`created_at`)";
            $resultsqlArchives = $conn->query($sqlArchives);
    ?>
    <?php if ($resultsqlArchives->num_rows > 0) { ?> 
    <?php  
        while($row = $resultsqlArchives->fetch_array()) { 
        //print_r();
        $month = date('F', mktime(0, 0, 0, $row["Month"], 10));
        $year =  $row["Year"];
        $month_year = $row["Month"].'_'.$year;
    ?>
    <li><a href="blog-archive-list.php?duration=<?php echo urlencode($month_year)?>"><?php echo date('F', mktime(0, 0, 0, $row["Month"], 10)); ?>&nbsp; <?php echo $row["Year"]; ?></a></li>
    <?php } ?>
    <?php } ?>
</ul>