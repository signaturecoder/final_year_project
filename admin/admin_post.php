<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
 header('Location: admin_login.php');
}

$session_username = $_SESSION['username'];
// echo $session_username;
if(isset($_GET['del'])){
  $del_id = $_GET['del'];
  echo $del_id;
  if($_SESSION['role'] == 'admin'){
    $del_check_query = "SELECT * FROM posts WHERE id= $del_id";
    $del_check_run = mysqli_query($con, $del_check_query);
  }
  else if($_SESSION['role'] == 'author'){
    $del_check_query = "SELECT * FROM posts WHERE id= $del_id and author = '$session_username'";
    $del_check_run = mysqli_query($con, $del_check_query);
  }
  if(mysqli_num_rows($del_check_run) > 0){
    $del_query = "DELETE FROM `posts` WHERE `posts`.`id`= $del_id";
    if(mysqli_query($con,$del_query)){
      $msg = "Post Has been Delete";
    }
    else{
      $error = "Post has not been deleted";
    }
  }
  else{
    // header('location: index.php');
  }
}

  if(isset($_POST['checkboxes'])){

    foreach($_POST['checkboxes'] as $user_id){

      $bulk_option = $_POST['bulk-options'];

      if($bulk_option == 'delete'){
        $bulk_del_query = "DELETE FROM `posts` WHERE `users`.`id` = $user_id";
        mysqli_query($con, $bulk_del_query);

      }
      else if($bulk_option == 'publish'){
       $bulk_author_query = "UPDATE `posts` SET `status` = 'publish' WHERE `posts`.`id` = $user_id";
       mysqli_query($con, $bulk_author_query);


     }

     else if($bulk_option == 'draft'){
       $bulk_admin_query = "UPDATE `posts` SET `status` = 'draft' WHERE `posts`.`id` = $user_id";
       mysqli_query($con, $bulk_admin_query);

     }
   }
 }
 ?>

</head>
<body>
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->
  
  <div class="cointainer-fluid">
    <div class="row">

      <!--       Dashboard Left Menu Started -->
      <div class="col-md-3">           
        <?php require_once('includes/sidebar.php');?>
      </div>
      <!--       Dashboard Left Menu Ended -->
      
      <div class="col-md-9">
        <h1><i class="fas fa-file mr-1"></i>Post <small>View all Post</small></h1><hr>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>


        <?php
        if($_SESSION['role'] == 'admin'){
         $query = "SELECT * FROM posts ORDER BY id DESC";
         $run = mysqli_query($con, $query);
       }
       else if($_SESSION['role'] == 'author'){
        $query = "SELECT * FROM posts WHERE author ='$session_username' ORDER BY id DESC";
        $run = mysqli_query($con, $query);

      }
      if(mysqli_num_rows($run) > 0){     
        ?>

        <form action="" method="post">
          <div class="row">
            <div class="col-sm-8">

              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group ml-3">
                    <select name="bulk-options" id="selectallboxes" class="form-control">
                      <option value="delete">Delete</option>
                      <option value="publish">Publish</option>
                      <option value="draft">Draft</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-8 ml-2">
                  <input type="submit" class="btn btn-success" value="Apply">
                  <a href="admin_add_post.php" class="btn btn-primary">Add New</a>
                </div>
              </div>
            </div>
          </div>
          <?php 
          if(isset($error)){
           echo "<span style='color:red;' class='float-right'>$error</span>";

         }
         else if(isset($msg)){
          echo "<span style='color:green;' class='float-right'>$msg</span>";
        }
        ?>

        <table class="table table-bordered table-striped table-hover">
         <thead>
          <tr>
           <th><input type="checkbox" id="selectallboxes"></th>
           <th>Sr #</th>
           <th>Date</th>
           <th>Title</th>
           <th>Author</th>
           <th>Image</th>
           <th>Categories</th>
           <th>Views</th>
           <th>Status</th>
           <th>Edit</th>
           <th>Del</th>
         </tr>
       </thead>
       <tbody>
         <?php 
         while($row = mysqli_fetch_array($run)){
           $id = $row['id'];
           $title = ucfirst($row['title']);
           $author = ucfirst($row['author']);
           $view = $row['view'];
           $category= $row['category'];
           $image = $row['image'];
           $status = $row['status'];
           $date = $row['date'];
           // $day = $date['mday'];
           // $month = substr ($date['month'],0,3);
           // $year = $date['year'];
           ?>
           <tr>
            <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"></td>
            <td><?php echo $id;?></td>
            <td><?php echo $date;?></td>
            <td><?php echo $title;?></td>
            <td><?php echo $author;?></td>

            <td><img src="img/<?php echo $image;?>" width="50px"> 
            </td>
            <td><?php echo $category;?></td>
            <td><?php echo $view;?></td>

            <td><span style="color:<?php 
                if($status == 'publish'){
                  echo 'green';
                }
                else if($status == 'draft'){
                  echo 'red';
                }
            ?>"><?php echo ucfirst($status);?></span></td>         
            <td><a href="admin_edit_post.php?edit=<?php echo $id;?>">
              <i class="fas fa-pencil-alt"></i></a></td>
              <td><a href="admin_post.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
            </tr>
          <?php }?> 

        </tbody>
      </table>

      <?php
    }

    else{
     echo "<center><h2>NO USER AVAILABLE NOW</h2></center>";
   }
   ?>



 </form>
</div>
</div>
</div>
<?php require_once('includes/footer.php')?>