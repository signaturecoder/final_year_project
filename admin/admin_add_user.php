<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
  header('location: index.php');
}

?>

</head>
<body>
  <!--   <div id="wrapper"> -->
    <!--   Navigation Bar Started-->
    <?php require_once('includes/navbar.php');?>
    <!--    Navigation bar ended-->
    <div class="wrapper"> 
      <div class="cointainer-fluid">
        <div class="row">

          <!--       Dashboard Left Menu Started -->
          <div class="col-md-3">           
            <?php require_once('includes/sidebar.php');?>
          </div>
          <!--       Dashboard Left Menu Ended -->



          <div class="col-md-9">
            <h1><i class="fa fa-user-plus"></i> Add User <small>Add New User</small></h1><hr>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>

            <?php
            if(isset($_POST['submit'])){
              $date = date('Y-m-d');
              $first_name = mysqli_real_escape_string($con,$_POST['first-name']);
              $last_name = mysqli_real_escape_string($con,$_POST['last-name']);

              $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
              $username_trim = preg_replace('/\s+/','',$username);

              $email = mysqli_real_escape_string($con,strtolower($_POST['email']));
              $password = mysqli_real_escape_string($con,$_POST['password']);
              $role = $_POST['role'];
              $image = $_FILES['image']['name']; 
              $image_tmp = $_FILES['image']['tmp_name']; 

              $check_query = "SELECT * FROM users_details WHERE username = '$username' or email ='$email'";
              $check_run = mysqli_query($con, $check_query);

              $salt_query = "SELECT * FROM users_details ORDER BY id DESC LIMIT 1";
              $salt_run = mysqli_query($con, $salt_query);
              $salt_row = mysqli_fetch_array($salt_run);
              $salt = $salt_row['salt'];
              $password = crypt($password, $salt);


              if(empty($first_name) or empty($last_name) or empty($username) or empty($email) or empty($password) or empty($image)){
                $error = "All (*) feilds are required";

              }

              else if($username != $username_trim){
                $error = "Don't use spaces in Username";

              }
              else if(mysqli_num_rows($check_run) > 0){
                $error = "Username or Emails are Already Exist";

              }

              else{
                //debugging purpose
                // echo "My name is khan and my email is " . $email . " date is ".
                // $date . " first name is " . $first_name . " last name is " . $last_name
                // . " username is " . $username . " email is ". $email . " image is ".
                // $image . " password is ". $password . " role is " . $role;

                $insert_query = "INSERT INTO `users_details` (`id`,`date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`) VALUES (NULL, '$date', '$first_name', '$last_name', '$username', '$email', '$image', '$password', '$role')";
                if(mysqli_query($con,$insert_query)){
                  $msg = "users_details has been added";
//                                    move_uploaded_file($image_tmp, "img/$image");
//                                    $image_check = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
//                                    $image_run = mysqli_query($con, $image_check);
//                                    $image_row = mysqli_fetch_array($image_run);
//                                    $check_image = image_row['image'];
                }
                else 
                {
                  $error = "users_details has not been added";
                }
              }
            }  
            ?>

            <div class="row">
              <div class="col-md-8">
                <!-- to fetch input_type_file by multipart/form-data -->
                <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label for="first-name">First Name:*</label>

                   <?php 
                   if(isset($error)){
                     echo "<span class='pull-right' style='color:red;'>$error</span>";
                   }
                   else if(isset($msg)){
                     echo "<span class='pull-right' style='color:green;'>$msg</span>";
                   }
                   ?>


                   <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name">
                 </div>

                 <div class="form-group">
                   <label for="last-name">Last Name:*</label>
                   <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name">
                 </div>

                 <div class="form-group">
                   <label for="username">Username:*</label>
                   <input type="text" id="username" name="username" class="form-control" placeholder="username">
                 </div>

                 <div class="form-group">
                   <label for="email">Email:*</label>
                   <input type="text" id="email" name="email" class="form-control" placeholder="email">
                 </div>

                 <div class="form-group">
                   <label for="first-name">Password:*</label>
                   <input type="password" id="password" name="password" class="form-control" placeholder="password">
                 </div>

                 <div class="form-group">
                   <label for="role">Role:*</label>
                   <select name="role" id="role" class="form-control">
                     <option value="author">Author</option>
                     <option value="admin">Admin</option>
                   </select>
                 </div>

                 <div class="form-group">
                   <label for="image">Profile picture</label>
                   <input type="file" id="image" name="image" class="form-control">
                 </div>

                 <input type="submit" value="Add User" name="submit" class="btn btn-primary mb-3">

               </form>

             </div>
             <div class="col-md-4">
                   <?php 
                          $image='';
                          
                            echo "<img src='img/$image' width='100px'>";
                    ?>
             </div>
           </div>
         </div>
       </div>
     </div>
     <?php require_once('includes/footer.php')?>