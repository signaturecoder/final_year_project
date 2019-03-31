<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
    header('location: admin_login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('location: index.php');
}

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $edit_query = "SELECT * FROM users_details WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con,$edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
        $e_first_name = $edit_row['first-name'];
        $e_last_name = $edit_row['last-name'];
        $e_role = $edit_row['role'];
        $e_image = $edit_row['image'];
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
                            $password = mysqli_real_escape_string($con,$_POST['password']);
                            $role = $_POST['role'];
                            $image = $_FILES['image']['name']; 
                            $image_tmp = $_FILES['image']['tmp_name']; 

                            $salt_query = "SELECT * FROM users_details ORDER BY id DESC LIMIT 1";
                            $salt_run = mysqli_query($con, $salt_query);
                            $salt_row = mysqli_fetch_array($salt_run);
                            $salt = $salt_row['salt'];
                            $password = crypt($password, $salt);
                           
                            if(empty($first_name) or empty($last_name) or empty($image)){
                                $error = "All (*) feilds are required";
                                
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
                            
                            <input type="submit" value="Update User" name="submit" class="btn btn-primary">
                         </form>
                      
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                    </nav> 
                    </div>
                </div>
            </div>
<?php require_once('includes/footer.php')?>