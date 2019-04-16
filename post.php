<?php
    ob_start();
    include "includes/db.php";
?>
<?php require_once('includes/header.php');  
?>
</head>
<body>
    <?php include 'includes/navbar.php'?>
    
    <!--    Post id-->
       
    <?php
            $row=array();
            $image='';
            $id='';
            $date = '';
            // $month = '';
            // $year = '';
            $title ='';
            $image = '';
            $author_image = '';
            $author = '';
            $category = '';
            $post_data = '';
            $post_id='';
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
        $query = "SELECT * FROM posts WHERE status = 'publish' and id = $post_id";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run) > 0){
            
            $row = mysqli_fetch_array($run);
            $id = $row['id'];
            $date =$row['date'];
            // $day = $date['mday'];
            // $month = $date['month'];
            // $year = $date['year'];
            $title = $row['title'];
            $image = $row['image'];
            $author_image = $row['author_image'];
            $author = $row['author'];
            $category = $row['category'];
            $post_data = $row['post_data'];
            
        }
        else{
            header('Location:index.php');
        }
    }
    ?>          
               
                <!--        Description Bar-->
               <div class="jumbotron">
                      <div class="container">
                          <div id="details" class="animated fadeInLeft">
                           <h1>Custom<span>Post</span></h1>
                           <p>Put your tagline here.</p>
                       </div>
                       <img src="img/banner9.jpg" alt="top-image">
                      </div>
                       
               </div>

                <!--   Section Started            -->
                <section>
                    <div class="container">
                        <div class="row">

                            <!-- Post started-->
                            <div class="col-md-8">
                             <div class="row">
                             <div class="post">
                                    <div class="row">
                                        <div class="col-md-2 post-date">
                                            <div class="day"><?php echo $date;?></div>
                                            
                                        </div>
                                        <div class="col-md-8 post-title">
                                            <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                                            <p>Written by :<span><?php echo ucfirst($author);?></span></p>
                                        </div>
                                        <div class="col-md-2 profile-picture">
                                            <img src="img/<?php echo $author_image;?>" alt="Profile Picture" class="rounded-circle">
                                        </div>
                                    </div>
                                    <a href="post.php?post_id=<?php echo $id;?>"><img src="img/<?php echo $image;?>" alt="post-image"></a>
                                    <p class="desc">
                                    <?php echo $post_data;?>
                                    </p>

                                    <div class="bottom">
                                        <span class="first"><i class="fas fa-folder"></i><a href="#"><?php echo ucfirst($category);?></a></span>|<span class="sec"><i class="fas fa-comment"></i><a href="#"> Comment</a></span>
                                    </div>
                                 </div>

                                <div class="related-posts mb-3 px-3 bg-white w-100">
                                <h2>Related Post</h2><hr>
                                   <div class="row">

                                  <!--    Repeat the belowe post that's why php is written here-->
                                   <?php 
                                    $r_query = "SELECT * FROM posts WHERE status = 'publish' and title LIKE '%$title%' LIMIT 3";
                                    $r_run = mysqli_query($con,$r_query);
                                       
                                   while($r_row = mysqli_fetch_array($r_run)){
                                                $r_id = $r_row['id'];           // r_id = related-id
                                                $r_title = $r_row['title'];
                                                $r_image = $r_row['image'];
                                    
                                    ?>

                                   <!--The below section is repeated-->
                                    <div class="col-sm-4">
                                        <a href="post.php?post_id=<?php echo $r_id;?>">
                                            <img src="img/<?php echo $r_image;?>" alt="banner6">
                                            <h4><?php echo $r_title;?></h4>
                                        </a>
                                    </div>
                                    <!--   While loop is closed after the repetion of posts ended-->

                                    <?php 
                                       }
                                    ?>

                                 
                                </div>
                            </div>

                                <div class="author bg-white mb-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="img/<?php echo $author_image;?> " class="rounded-circle my-3 mx-3" alt="Profile Image">
                                        </div>
                                        <div class="col-md-9">
                                            <h4><?php echo ucfirst($author);?></h4>
                                            <?php
                                            $bio_query = "SELECT * FROM users_details WHERE username = '$author'";
                                            $bio_run = mysqli_query($con, $bio_query);
                                            if(mysqli_num_rows($bio_run) > 0){
                                                echo "running";
                                                $bio_row = mysqli_fetch_array($bio_run);
                                                $author_details = $bio_row['details'];

                                            ?>
                                            <p><?php echo $author_details;?></p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                
                               <!--    comments-->
                               <?php
                                $c_query = "SELECT * FROM comments where status = 'approve' and post_id = $post_id ORDER BY id DESC";
                                $c_run = mysqli_query($con,$c_query);
                                if(mysqli_num_rows($c_run) > 0){
                                 ?>
                                <div class="comment w-100">
                                   <h3>Comments</h3><hr>
                                   <?php
                                    while($c_row = mysqli_fetch_array($c_run)){
                                        $c_id = $c_row['id'];
                                        $c_name = $c_row['name'];
                                        $c_username = $c_row['username'];
                                        $c_image = $c_row['image'];
                                        $c_comment = $c_row['comment'];
                                    ?>
                                    <div class="row single-comment">
                                        <div class="col-md-2">
                                            <img src="img/<?php echo $c_image?>" alt="Profile Picture" class="rounded-circle">
                                        </div>
                                        <div class="col-md-10">
                                            <h4><?php echo ucfirst($c_name);?></h4>
                                            <p><?php echo $c_comment?></p>
                                        </div>
                                    </div><hr>
                                    <?php }?>
                                 
                                </div>
                                <?php }
                                 
                                 if(isset($_POST['submit'])){
                                        $cs_name = $_POST['full-name'];
                                        $cs_email = $_POST['email'];
                                        $cs_website = $_POST['website'];
                                        $cs_comment = $_POST['comment'];
                                        $cs_date = time();
                                        if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
                                            
                                            $error_msg = "All (*) feilds are Required";
                                        }
                                        else{
                                            $cs_query = "INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES (NULL, '$cs_date', '$cs_name', '$c_username', '$post_id', '$cs_email', '$cs_website', 'unknown.png', '$cs_comment', 'pending')";
                                            if(mysqli_query($con,$cs_query)){
                                                $msg = "Comment Submitted and waiting for Approval";
                                                $cs_name = " ";
                                                $cs_email = " ";
                                                $cs_website = " ";
                                                $cs_comment = " ";
                                            }
                                            else{
                                                $error_msg ="Comment not submitted";
                                            }
                                        }
                                     
                                 }
                                 
                                 ?>
                                 <div class="col-md-12 comment-box bg-white py-4 ">
                                     <form action=""  method="post">
                                         <div class="form-group">
                                             <label for="full-name">Full Name:*</label>
                                             <input type="text" name="full-name" value="<?php if(isset($cs_name)){echo $cs_name;}?>" class="form-control" placeholder="Full Name" required>
                                         </div>

                                         <div class="form-group">
                                             <label for="email">Email:*</label>
                                             <input type="text" name="email" value="<?php if(isset($cs_email)){echo $cs_email;}?>" class="form-control" placeholder="Email Address" required>
                                         </div>

                                         <div class="form-group">
                                             <label for="website">Website:</label>
                                             <input type="text"  name="website" value="<?php if(isset($cs_website)){echo $cs_website;}?>" class="form-control" placeholder="Website">
                                         </div>

                                         <div class="form-group">
                                             <label for="message">Comment:*</label>
                                             <textarea  name="comment" cols="30" rows="10" class="form-control" placeholder="Your Message Should Be Here" required><?php if(isset($cs_comment)){echo $cs_comment;}?></textarea>
                                         </div>

                                         <input type="submit" name="submit" value="Submit Comment" class="btn btn-primary">
                                           <?php
                                            if(isset($error_msg)){
                                                echo  "<span class='float-right text-danger'>$error_msg</span>";
                                            }
                                            else if(isset($msg)){
                                                echo "<span class='float-right text-success'>$msg</span>";
                                            }
                                          ?>
                                     </form>
                                 </div>
                             </div>

  </div>
                            <div class="col-md-4">
                             <!--       SidePost Bar-->
                             <?php include 'includes/sidebar.php';?>
                             <!--       SidePost Bar-->
                            </div>
                            </div>
                        </div>
                </section>
                <!--    Section Ended-->

     <!-- Footer -->
        <?php include 'includes/footer.php';?>
     <!-- Footer -->
