<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
    header('location: admin_login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('location: index.php');
}
?>
<?php 
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_check_query = "DELETE FROM `comments` WHERE `comments`.`id` = $del_id";
    $del_check_run = mysqli_query($con,$del_check_query);
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM `comments` WHERE `comments`.`id` = $del_id";
        //if(isset(_SESSION['username']) && _SESSION['role'] == 'admin'){
            if(mysqli_query($con, $del_query)){
                $msg = "Comment Has been Delete";
            }
            else{
                $error = "Comment has not been deleted";
            }

        //  }
              
        }
    else{
          header('location: index.php');
        }
}

if(isset($_GET['approve'])){
    $approve_id = $_GET['approve'];
    $approve_check_query = "SELECT * `comments` WHERE `comments`.`id` = $approve_id";
    $approve_check_run = mysqli_query($con,$approve_check_query);
    if(mysqli_num_rows($approve_check_run) > 0){
        $approve_query = "UPDATE `comments` SET `status` = 'approve ' WHERE `comments`.`id` = $approve_id";
        //if(isset(_SESSION['username']) && _SESSION['role'] == 'admin'){
          if(mysqli_query($con, $approve_query)){
              $msg = "Comment Has been approved";
          }
          else{
              $error = "Comment has not been approved";
          }
        //}
    }
    else{
        header('location: index.php');
    }

}


if(isset($_POST['checkboxes'])){
    foreach($_POST['checkboxes'] as $user_id){
        
      $bulk_option = $_POST['bulk-options'];
        
        if($bulk_option == 'delete'){
            $bulk_del_query = "DELETE FROM `comments` WHERE `comments`.`id` = $user_id";
            mysqli_query($con, $bulk_del_query);
            
        }
        else if($bulk_option == 'approve'){
        $bulk_author_query = "UPDATE `comments` SET `status` = 'approve ' WHERE `comments`.`id` = $user_id";
             mysqli_query($con, $bulk_author_query);
             
            
        }
        
         else if($bulk_option == 'pending'){
             $bulk_admin_query = "UPDATE `comments` SET `status` = 'pending' WHERE `comments`.`id` = $user_id";
             mysqli_query($con, $bulk_admin_query);
             
         }
    }
    
}
?>
</head>
<body>
<!--   <div id="wrapper"> -->
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
                <h1><i class="fas fa-comments mr-1"></i>Comments <small>View all Comments</small></h1><hr>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                  </ol>
                </nav>
                      <?php 
                           $query = "SELECT * FROM comments ORDER BY id DESC";
                           $run = mysqli_query($con, $query);
                           if(mysqli_num_rows($run) > 0){      
                         ?>
                         
                       <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-8">
                                
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group ml-3">
                                                <select name="bulk-options" id="selectallboxes" class="form-control">
                                                    <option value="delete">Del</option>
                                                    <option value="approve">Approve</option>
                                                    <option value="pending">Unapprove</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 ml-2">
                                            <input type="submit" class="btn btn-success" value="Apply">
                                            
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
                                   <th><input type="checkbox" id="selectallboxes"></th>
                                    <th>Sr</th>
                                    <th>Date</th>
                                    <th>Username</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>Reply</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
                               while($row = mysqli_fetch_array($run)){
                                   $id = $row['id'];
                                   $username = $row['username'];
                                   $status = $row['status'];
                                   $comment = $row['comment'];
                                   $post_id = $row['post_id'];
                                   //$role = $row['role'];
                                   $date = getdate($row['date']);
                                   $day = $date['mday'];
                                   $month = substr ($date['month'],0,3);
                                   $year = $date['year'];
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"></td>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo "$day $month $year";?></td>
                                    <td><?php echo $username;?></td>
                                    <td><?php echo $comment;?></td>
                                    <td><?php echo ucfirst($status);?></td>
                                    <td><a href="admin_comment.php?Approve=<?php echo $id;?>">Approve</a></td>
                                    <td><a href="admin_comment.php?Unapprove=<?php echo $id;?>">Unapprove</a></td>
                                    <td><a href="admin_comment.php?Reply=<?php echo $post_id;?>"><i class="fas fa-reply"></i></a></td>
                                    <td><a href="admin_comment.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
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