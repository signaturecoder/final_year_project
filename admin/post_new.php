<?php require_once('includes/header.php');
//if no username in our database and session
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}
$session_username = $_SESSION['username'];
$session_author_image = $_SESSION['author_image'];

?>
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
</head>
<body>
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->
  <p>Welcome : <?php echo $_SESSION['username'];?></p>
    <div class="cointainer-fluid body-section">

      <div class="row">
        <!--       Dashboard Left Menu Started -->
        <div class="col-md-3">           
          <?php require_once('includes/sidebar.php');?>
        </div>
        <!--       Dashboard Left Menu Ended -->
        
        
        <div class="col-md-9">
          <h1><i class="fas fa-plus-square"></i>Add Posts<small>Add New Post</small></h1><hr>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="fas fa-tachometer-alt mr-1"></i>Dashboard</a></li>
              <li class="breadcrumb-item active"><i class="fa fa plus-square"></i>Add Post</li>
            </ol>
            
            <?php
              if(isset($_POST['submit'])){
                   $date = time();
                   $title = mysqli_real_escape_string($_POST['title']);
                   $post_data =  mysqli_real_escape_string($_POST['post_data']);
                   $categories = $_POST['categories'];
                   $tags =  mysqli_real_escape_string($_POST['tags']);
                   $status = $_POST['status'];
                    $image = $_FILES['image']['name'];
                   $tmp_name = $_FILES['image']['tmp_name'];
                  
                  if(empty(title) or empty($post_data) or empty($tags) or empty($image)){
                      $error = "All (*) Feilds Are Required";
                      
                  }
                  else{
                      $insert_query = "INSERT INTO posts (date,title,author,author_image,image,categories,tags,post_data,views,status) VALUES ('$date','$title','$session_username','$session_author_image','$image','$categories','$tags','$post_data','0','$status')";
                      if(mysqli_query($con, $insert_query)){
                          $msg = "post has been added";
                          $path ="media/$image";
                         if(move_uploaded_file($tmp_name, $path)){
                             copy($path, "../$path");
                         }
                          
                      }
                      else{
                          $error = "post has not been added";
                      }
                  }
              }
              ?>
            
          </nav>
            
       <div class="row">
           <div class="col-xs-12"></div>
           <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="title">title:*</label>
                   
                   <?php
                   if(isset($msg)){
                       echo "<span class='pull-right' style='color:green;'>$msg</span>";
                   }
                    else if(isset($error)){
                       echo "<span class='pull-right' style='color:red;'>$error</span>";
                   }
                   ?>
                   <input type="text" name="title" placeholder="Type Post Title Here" class="form-control">
               </div>
               
                <div class="form-group">
                 <a href="media.php" class="btn btn-primary">Add Media</a>
               </div>
               
                <div class="form-group">
                   <textarea name="post-data" id="classic" ></textarea>
                
               </div>
               
               <div class="row">
                   <div class="col-sm-6">
                                <div class="form-group">
                           <label for="file">Post Image:*</label>
                           <input type="file" name="image" >
                       </div>
                   </div>
                   <div class="col-sm-6">
                                <div class="form-group">
                           <label for="Categories">Categories:*</label>
                          <select class="form-control" name="Categories" id="Categories">
                              <?php
                              $cat_query = "SELECT * FROM categories ORDER BY id DESC";
                              $cat_run = mysqli_query($con, $cat_query);
                              if(mysqli_num_rows($cat_run) > 0){
                                 while($cat_row = mysqli_fetch_array($cat_run)){
                                     $cat_name = $cat_row['category'];
                                      echo "<option value='".$cat_name."'>".ucfirst($cat_name)."</option>";
                                     
                                 }
                                  
                              }
                              else{
                                  echo "<cetner><h6>No Categories Available</h6></cetner>";
                              }
                              ?>
                          </select>
                       </div>
                   </div>
               </div>
               
                        <div class="row">
                           <div class="col-sm-6">
                                        <div class="form-group">
                                   <label for="tags">Tags:*</label>
                                   <input type="text" name="tags" placeholder="your tags here" class="form-control" >
                               </div>
                           </div>
                           <div class="col-sm-6">
                                        <div class="form-group">
                                   <label for="status">Status:*</label>
                                  <select class="form-control" name="status" id="status">
                                      <option value="publish">Publish</option>
                                      <option value="draft">Draft</option>
                                  </select>
                               </div>
                           </div>
                       </div>
                       
                       <input type="submit" class="btn btn-primary" value="Add Post" name="submit">
               
           </form>
       </div>    
</div>
</div>
</div>
<?php require_once('includes/footer.php')?>