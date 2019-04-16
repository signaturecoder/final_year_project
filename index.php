<?php include 'includes/header.php';
?>
</head>
<body>

<?php
    
    include 'includes/navbar.php';
    
    $number_of_posts = 2;
    
    if(isset($_GET['page'])){
        $page_id = $_GET['page'];
    }
    else{
        $page_id = 1;
    }
    
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        $cat_query = "SELECT * FROM categories where id = $cat_id";
        $cat_run = mysqli_query($con,$cat_query);
        $cat_row = mysqli_num_rows($cat_run);
        $cat_name = $cat_row['category'];
    }
    
    if(isset($_POST['search'])){
         $search = $_POST['search-title'];
         $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
         $all_posts_query .=" and tags LIKE '%$search%'";
         $all_posts_run = mysqli_query($con,$all_posts_query);
         $all_posts = mysqli_num_rows($all_posts_run);
         $total_pages = ceil($all_posts / $number_of_posts); // ceil is used to convert fraction in whole number
         $posts_start_from = ($page_id - 1) * $number_of_posts;

    }
    
    else{   
         $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
         if(isset($cat_name)){
            $all_posts_query .=" and category = '$cat_name'";
         }        
         $all_posts_run = mysqli_query($con,$all_posts_query);
         $all_posts = mysqli_num_rows($all_posts_run);
         $total_pages = ceil($all_posts / $number_of_posts); // ceil is used to convert fraction in whole number
         $posts_start_from = ($page_id - 1) * $number_of_posts;
    }
    
    
    
?>
    
    <div class="tophead">
      
         <p class="userdetails ml-2">Welcome <?php
                      if(isset($_SESSION['email']))
                          echo $_SESSION['email'];?></p>
    </div>
    


               <!-- <div class="jumbotron">
                      <div class="container">
                          <div id="details" class="animated fadeInLeft">
                           <h1>CMS<span>blog</span></h1>
                           <p>This is a simple paragraph. </p>
                       </div>
                       <img src="img/technoIndiaBuilding2.jpg" alt="top-image">
                      </div>   
               </div> -->
          


             
             <div class="sidebar">
              <ul>
                <li><a class="" href="#">home</a></li>
                <li><a class="" href="#">contact</a></li>
                <li><a class="" href="#">thank you</a></li>
              </ul>
            </div> 
               
               
               
    <!--   Section Started            -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                
                <!--   Corosol Started-->
                  <?php require_once('includes/corosol.php');?>
                <!--   corosol ended-->
                    
                    <!--    Main Posts  -->
                    <?php
                    
                    //  Search tab php code if search found = true otherwise false condition started
                    if(isset($_POST['search'])){
                            $search = $_POST['search-title'];
                            $query = "SELECT * FROM posts WHERE status = 'publish'";
                            $query .= " and tags  LIKE '%$search%'";  
                            $query .="ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";
                    }
                    else{
                            $query = "SELECT * FROM posts WHERE status = 'publish'";
                            if(isset($cat_name)){
                                $query .=" and category = '$cat_name'";   
                            }
                            $query .=" ORDER BY id DESC LIMIT $posts_start_from, $number_of_posts";
                    }
                    
                    //  Search tab php code if search found = true otherwise false condition ended 
                    
                    $run = mysqli_query($con,$query);
                    if(mysqli_num_rows($run) > 0)
                       {
                        while($row = mysqli_fetch_array($run))
                        {
                            //  Do not need to write in proper order similar to database
                            // these are the php variables = php array['database column_name']
                            $id = $row['id'];
                            $date =$row['date'];
                            $date1=date_parse($date); // associative array 
                            $day = $date1['day'];
                            $month = $date1['month'];
                            $year = $date1['year'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $author_image = $row['author_image'];
                            $image = $row['image'];
                            $category = $row['category'];
                            $tags = $row['tags'];
                            $post_data = $row['post_data'];
                            $view = $row['view'];
                            $status = $row['status'];
                            //  close the php tag here    
                            ?>  
                          <!-- html post description -->
                          <div class="post">
                            <div class="row">
                                <div class="col-md-2 post-date">
                                    <!--  replace static value with dynamic value using php tag-->
                                    <div class="day"><?php echo $day;?></div>
                                    <div class="month"><?php echo $month;?></div>
                                    <div class="year"><?php echo $year;?></div>
                                </div>
                                <div class="col-md-8 post-title">
                                    <a href="post.php?post_id=<?php echo $id;?> "><h2><?php echo $title;?></h2></a>
                                    <p>Written by :<span><?php echo ucfirst($author);?></span></p>
                                </div>
                                <div class="col-md-2 profile-picture">
                                    <img src="img/<?php echo $author_image;?>" alt="Profile Picture" class="rounded-circle">
                                </div>
                            </div>
                            <a href="post.php?post_id=<?php echo $id;?> "><img src="img/<?php echo $image;?>" alt="post-image"></a>
                            <p class="desc"><?php echo substr($post_data,0,100)."....";?></p>
                            <a href="post.php?post_id=<?php echo $id;?> " class="btn btn-primary">Read More...</a>
                            <div class="bottom">
                                <span class="first"><i class="fas fa-folder"></i><a href="#"> <?php echo ucfirst($category);?></a></span>|<span class="sec"><i class="fas fa-comment"></i><a href="#"> Comment</a></span>
                            </div>
                         </div>
                         
                        <!--   again open the php tag to complete the while loop and if condition -->
                        <?php
                            
                            }
                        }
                        else
                        {
                            echo "<center><h2>No Posts Available</h2></center>";
                        }
                        ?>
                        <!--    Post ended here-->
                        
                     <nav>
                      <ul class="pagination justify-content-center pagination-sm">
                       <?php 
                        for($i = 1; $i <= $total_pages; $i++){
                             echo "<li class='".($page_id == $i ? 'active':'')." page-item'><a class='page-link' href='index.php?page=".$i."&".(isset($cat_name) ? "cat=$cat_id":" ")."'>$i</a></li>";
                        }  
                        ?>
                      </ul>
                    </nav>
                </div>
                <!-- Side Posts        -->
                <div class="col-md-4">
                 <!--       SidePost Bar-->
                <?php include 'includes/sidebar.php';?>
                 <!--       SidePost Bar-->
                </div>
                </div>
            </div>
    </section>
    
          <!-- Footer -->
        <?php include 'includes/footer.php';?>
     <!-- Footer -->
