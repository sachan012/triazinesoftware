<div class="col-md-12 bloglatestcol3">
    <ul class="col3ul1">Categories
        <?php 
        $categories = $this->db->select('categories.id,categories.name,count(categories.name) as totalposts')
            ->where('categories.status',1)
            ->join('posts','posts.category_id=categories.id')
            ->group_by('categories.name')
            ->get('categories')
            ->result_array(); 
            //echo "<pre>";print_r($category);die;   
            foreach($categories as $category){
            $category_id = $category["id"];
            $category_name = $category["name"];

        ?>
        <li>
            <a href="<?php echo base_url('blog/category');?>?categoryid=<?php echo $category["id"]; ?>&category-name=<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $category["name"]);?>"><?php echo $category_name ;?><span><?php echo  $category['totalposts'];?></a>
        </li>
        <?php }?>
   
    </ul>
    <ul class="col3ul2">Archives
    <?php  
        
        $sqlArchives = "SELECT Month(`created_at`) as Month, Year(`created_at`) as Year FROM posts GROUP BY Month(`created_at`), Year(`created_at`)";
        $resultsqlArchives = $this->db->query($sqlArchives);
        $rowcount = $resultsqlArchives->num_rows();
        if ($rowcount > 0) {        
        $reslt = $resultsqlArchives->result_array();
                    foreach($reslt as $row) { 
                    //print_r();
                    $month = date('F', mktime(0, 0, 0, $row["Month"], 10));
                    $year =  $row["Year"];
                    $month_year = $row["Month"].'_'.$year;
                ?>
                <li><a href="<?php echo base_url('blog/archive'); ?>?duration=<?php echo urlencode($month_year)?>"><?php echo date('F', mktime(0, 0, 0, $row["Month"], 10)); ?>&nbsp; <?php echo $row["Year"]; ?></a></li>
                <?php } }?>                                        
            </ul>     
    </div>
