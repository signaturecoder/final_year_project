<?php require_once('../includes/db.php');?>
<?php 
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_query = "DELETE FROM `users_details` WHERE `users_details`.`id` = $del_id";
    if(mysqli_query($con, $del_query)){
        $msg = "User Has been Delete";
    }
    else{
        $error = "User has not been deleted";
    }
    
}
if(isset($_POST['checkboxes'])){
    foreach($_POST['checkboxes'] as $user_id){
        
      $bulk_option = $_POST['bulk-options'];
        
        if($bulk_option == 'delete'){
            $bulk_del_query = "DELETE FROM `users_details` WHERE `users_details`.`id` = $user_id";
            mysqli_query($con, $bulk_del_query);
            
        }
        else if($bulk_option == 'author'){
             $bulk_author_query = "UPDATE `users_details` SET `role` = 'author ' WHERE `users_details`.`id` = $user_id";
             mysqli_query($con, $bulk_author_query);
             
            
        }
        
         else if($bulk_option == 'admin'){
             $bulk_admin_query = "UPDATE `users_details` SET `role` = 'admin' WHERE `users_details`.`id` = $user_id";
             mysqli_query($con, $bulk_admin_query);
             
         }
    }
    
}
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
                <h1><i class="fas fa-user"></i>User<small>View all User</small></h1><hr>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                    <li class="active"><i class="fa fa-users ml-2"></i>Users</li>
                </ol>
                      <?php 
                           $query = "SELECT * FROM users_details ORDER BY id DESC";
                           $run = mysqli_query($con, $query);
                           if(mysqli_num_rows($run) > 0){      
                         ?>
                         
                       <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-8">
                                
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <select name="bulk-options" id="selectallboxes" class="form-control">
                                                    <option value="delete">Delete</option>
                                                    <option value="author">Change To Author</option>
                                                    <option value="admin">Change To Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 ml-2">
                                            <input type="submit" class="btn btn-success" value="Apply">
                                            <a href="add-user.php" class="btn btn-primary">Add New</a>
                                        </div>
                                 </div>
                            </div>
                        </div>
                        <?php 
                           if(isset($error)){
                                   echo "<span style='color:red;' class='pull-right'>$error</span>";
                                   
                               }
                               else if(isset($msg)){
                                    echo "<span style='color:green;' class='pull-right'>$msg</span>";
                               }
                         ?>
                        
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                   <th><input type="" class="checkboxes" id="selectallboxes"></th>
                                    <th>Sr #</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
                               while($row = mysqli_fetch_array($run)){
                                   $id = $row['id'];
                                   $first_name = ucfirst($row['first_name']);
                                   $last_name = ucfirst($row['last_name']);
                                   $email = $row['email'];
                                   $username = $row['username'];
                                   $role = $row['role'];
                                   $image = $row['image'];
                                   $date = getdate($row['date']);
                                   $day = $date['mday'];
                                   $month = substr ($date['month'],0,3);
                                   $year = $date['year'];
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"></td>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo "$day $month $year";?></td>
                                    <td><?php echo "$first_name $last_name";?></td>
                                    <td><?php echo $username;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><img src="img/<?php echo $image;?>"> 
                                    </td>
                                    <td>************</td>
                                    <td><?php echo ucfirst($role);?></td>         
                                    <td><a href="edit-user.php?edit=<?php echo $id;?>">
                                    <i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="user.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
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
                </nav>
            </div>
        </div>
    </div>
              <!-- Footer -->
                <?php include 'includes/footer.php';?>
             <!-- Footer -->
     
</body>
</html>