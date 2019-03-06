<?php
require_once('../includes/db.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/header.php');?>
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
                <h1><i class="fa fa-user"></i> Edit User <small>Edit User details</small></h1><hr>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                    <li class="active"><i class="fa fa-user ml-2"></i>Edit User</li>
                </ol>
                   
                   <?php
                        if(isset($_POST['submit'])){
                            $first_name = mysqli_real_escape_string($con,$_POST['first-name']);
                            $last_name = mysqli_real_escape_string($con,$_POST['last-name']);
                            
                            $username = mysqli_real_escape_string($con,$_POST['username']);
                            $username_trim = preg_replace('/\s+/','',$username);
                            
                            $email = mysqli_real_escape_string($con,$_POST['email']);
                            $password = mysqli_real_escape_string($con,$_POST['password']);
                            $role = $_POST['role'];
                            $image = $_FILES['image']['name']; 
                            $image_tmp = $_FILES['image']['tmp_name']; 
                            
                            $check_query = "SELECT * FROM users_details WHERE username = '$username' or email ='$email'";
                            $check_run = mysqli_query($con, $check_query);
                            
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
                                $msg = "All Fine";
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
                                 <label for="image">Profile picture:*</label>
                                 <input type="file" id="image" name="image" class="form-control">
                             </div>
                            
                            <input type="submit" value="Add User" name="submit" class="btn btn-primary">
                         </form>
                      
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                    </nav> 
                    </div>
                </div>
            </div>
              <!-- Footer -->
                <?php include 'includes/footer.php';?>
             <!-- Footer -->
     
</body>
</html>