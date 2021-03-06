<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
    header('location: admin_login.php');
}

$session_username = $_SESSION['username'];

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $edit_query = "SELECT * FROM users_details WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con,$edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
        $e_username = $edit_row['username'];
        //restricted other user to change the profile of one another
        if($e_username == $session_username) {
            $e_first_name = $edit_row['first_name'];
            $e_last_name = $edit_row['last_name'];
            $e_image = $edit_row['image'];
            $e_details = $edit_row['details'];
        }
      
    }
    else{
        header('location: index.php');
    }
}
else{
    header('location: index.php');
}
?>
    
</head>
<body>
<!--     <div id="wrapper"> -->
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
                <h1><i class="fa fa-user"></i> Edit Profile <small>Edit Profile Details</small></h1><hr>

                   <?php
                        if(isset($_POST['submit'])){
                            $first_name = mysqli_real_escape_string($con,$_POST['first-name']);
                            $last_name = mysqli_real_escape_string($con,$_POST['last-name']);
                            $password = mysqli_real_escape_string($con,$_POST['password']);

                            $image = $_FILES['image']['name']; 
                            $image_tmp = $_FILES['image']['tmp_name']; 
                            $details = mysqli_real_escape_string($con,$_POST['details']);
                            
                            if(empty($image)){
                                $image = $e_image;
                            }
                            
                              
                            $salt_query = "SELECT * FROM users_details ORDER BY id DESC LIMIT 1";
                            $salt_run = mysqli_query($con, $salt_query);
                            $salt_row = mysqli_fetch_array($salt_run);
                            $salt = $salt_row['salt'];
                            $insert_password = crypt($password, $salt);
                           
                            if(empty($first_name) or empty($last_name) or empty($image)){
                                $error = "All (*) feilds are required";
                                
                            }
                         
                            else{
                //                 echo  " first name is " . $first_name . " last name is " . $last_name
                // .  " image is ".
                //  $image ." image_tmp is ".
                //  $image_tmp . " password is ". $password ."encrypt password is ". $insert_password . " role is " . $role. " id " . $edit_id;
                                $update_query = "UPDATE `users_details` SET `first_name` = '$first_name', `last_name` = '$last_name', `image` = '$image', `details` = '$details'";
                                
                                if(isset($password)){
                                    $update_query .= ", password = '$insert_password'";
                                    
                                }
                                 
                                  $update_query .= " WHERE `users_details`.`id` = $edit_id";
                                if(mysqli_query($con, $update_query)){
                                    $msg = "user has been updated";
                                    header("refresh:1;url=admin_edit_profile.php?edit=$edit_id");

                                if(!empty($image)){
                                    move_uploaded_file($image_tmp, "img/$image");
                                }

                                }
                                else{
                                     $error = "user has not been updated";
                                    

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
                                           echo "<span class='float-right' style='color:red;'>$error</span>";
                                       }
                                       else if(isset($msg)){
                                           echo "<span class='float-right' style='color:green;'>$msg</span>";
                                       }
                                 ?>
                                 
                                 
                                 <input type="text" id="first-name" name="first-name" class="form-control" value="<?php echo $e_first_name;?>" placeholder="First Name">
                             </div>
                             
                             <div class="form-group">
                                 <label for="last-name">Last Name:*</label>
                                 <input type="text" id="last-name" name="last-name" class="form-control" value="<?php echo $e_last_name;?>" placeholder="Last Name">
                             </div>
              
                            <div class="form-group">
                                 <label for="first-name">Password:*</label>
                                 <input type="password" id="password" name="password" class="form-control" placeholder="password">
                             </div>
             
                            <div class="form-group">
                                 <label for="image">Profile picture:*</label>
                                 <input type="file" id="image" name="image" class="form-control">
                             </div>
                            
                            <div class="form-group">
                                 <label for="details">Details:*</label>
                                 <textarea name="details" id="details" cols="30" rows="10" class="form-control"><?php echo $e_details;?></textarea>
                                 
                             </div>
                             
                            <input type="submit" value="Update User" name="submit" class="btn btn-primary">
                         </form>
                        <br>
                        </div>
                        <div class="col-md-4">
                           <?php 
                             echo "<img src='img/$e_image' width='100px'>";
                            ?>
                           
                        </div>
                    </div>
                    </div>
                </div>
            </div>
<?php require_once('includes/footer.php')?>