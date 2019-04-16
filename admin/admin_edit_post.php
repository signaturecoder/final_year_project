<?php require_once('includes/header.php');
//if no username in our database and session
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}

$session_username = $_SESSION['username'];
$session_role = $_SESSION['role'];
$session_author_image = $_SESSION['author_image'];

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    if($session_role == 'admin'){
            $get_query = "SELECT * FROM posts WHERE id = $edit_id";
            $get_run = mysqli_query($con, $get_query);
    }
    else if($session_role == 'author'){
        $get_query = "SELECT * FROM posts WHERE id = $edit_id and author = '$session_role'";
        $get_run = mysqli_query($con, $get_query);
        
    }
    
    if(mysqli_num_rows($get_run) > 0){
        $get_row = mysqli_fetch_array($get_run);
         $title = $get_row['title'];
         $post_data = $get_row['post_data'];
         $tags = $get_row['tags'];
         $image = $get_row['image'];
         $status = $get_row['status'];
         $category = $get_row['category'];
        
        
        
    }
    else{
        header('location: admin_post.php');
    }
}

?>
<!--<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>-->
</head>
<body>
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->
<!--  <p>Welcome : <?php echo $_SESSION['username'];?></p>-->
    <div class="cointainer-fluid body-section">

      <div class="row">
        <!--       Dashboard Left Menu Started -->
        <div class="col-md-3">           
          <?php require_once('includes/sidebar.php');?>
        </div>
        <!--       Dashboard Left Menu Ended -->
        
        
        <div class="col-md-9">
          <h1><i class="fa fa-pencil"></i>Edit Post <small> Edit Post Details</small></h1><hr>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="fas fa-tachometer-alt mr-1"></i>Dashboard</a></li>
              <li class="breadcrumb-item active"><i class="fa fa-pencil"></i>Edit Post</li>
            </ol>
            <?php  
              if(isset($_POST['update'])){
                  
                   $up_title = mysqli_real_escape_string($con,$_POST['title']);
                   $up_post_data = mysqli_real_escape_string($con,$_POST['post_data']);
              
                  $up_category = $_POST['category'];
                  $up_tags =  mysqli_real_escape_string($con,$_POST['tags']);
                  $up_status = $_POST['status'];
                  $up_image = $_FILES['image']['name'];
                  $up_tmp_name = $_FILES['image']['tmp_name'];
                  
                 if(empty($up_image)){
                     $up_image = $image;
                 }
                  
                  if(empty($up_title) or empty($up_post_data) or empty($up_tags) or empty($up_image)){
                      $error = "All (*) feilds Are Required";
                  }
                  else{
                      $update_query = "UPDATE posts SET title ='$up_title',image = '$up_image', category = '$up_category', tags = '$up_tags', post_data ='$up_post_data', status = '$up_status' WHERE id = $edit_id";
                      
                      if(mysqli_query($con, $update_query)){
                          $msg = "Post Has Been Updated";
                          $path = "img/$up_image";
                          header("location: admin_edit_post.php?edit=$edit_id");
                          if(!empty($up_image)){
                              if(move_uploaded_file($up_tmp_name, $path)){
                              copy($path, "../$path");
                          }
                          }
                      }
                      else{
                          $error = "Post Has Not Been Updated";
                      }
                  }
                  
              }
              ?>
          </nav>
            
       <div class="row">
           <div class="col-xs-12"></div>
           <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="title">Title:*</label>
                   <?php
                   if(isset($msg)){
                       echo "<span class='float-right' style='color:green'>$msg</span>";
                   }
                   
                   else if(isset($error)){
                       echo "<span class='float-right' style='color:red'>$error</span>";
                   }
                   ?>
                   <input type="text" name="title" placeholder="Type Post Title Here" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
               </div>
               
                <div class="form-group">
                 <a href="media.php" class="btn btn-primary">Add Media</a>
               </div>
               
                <div class="form-group">
<!--
                   <textarea id="classic">
                   <?php if(isset($post_data)){echo $post_data;}?>


  

</textarea>
-->
                <textarea name="post_data" id="" cols="30" rows="10">
                    <?php if(isset($post_data)){echo $post_data;}?>

                </textarea>

                
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
                          <select class="form-control" name="category" id="Categories">
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
                                   <input type="text" name="tags" placeholder="your tags here" <?php if(isset($tags)){echo $tags;}?> class="form-control" >
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
                       
                       <input type="submit" class="btn btn-primary" value="update Post" name="update">
               
           </form>
       </div>    
</div>
</div>
</div>
<?php require_once('includes/footer.php')?>