<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
    header('location: admin_login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('location: index.php');
}

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    // echo $edit_id;
}



if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    
    if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
        $del_query = "DELETE FROM categories WHERE id = $del_id";
        if(mysqli_query($con, $del_query)){
            $del_msg = "Category has been Delete";
        }
        else{
            $del_error = "Category has not been deleted";
        }
    }
}

if(isset($_POST['submit'])){
    $cat_name = mysqli_real_escape_string($con,strtolower($_POST['cat-name']));
    if(empty($cat_name)){
        $error = "Must Fill This Field";
    }
    else{
        $check_query = "SELECT * FROM categories WHERE category = '$cat_name'";
        $check_run = mysqli_query($con,$check_query);
        if(mysqli_num_rows($check_run) > 0){
            $error = "Category Already Exists";
        }
        else{
            $insert_query = "INSERT INTO categories (category) VALUES ('$cat_name')";
            if(mysqli_query($con,$insert_query)){
                $msg = "Category has been added";
            }
            else{
                $error = "Category has not been added";
            }
        }
    }
    
}

if(isset($_POST['update'])){
    // echo "run";
    $cat_name = mysqli_real_escape_string($con,strtolower($_POST['cat-name']));
    if(empty($cat_name)){
        $up_error = "Must Fill This Field";
    }
    else{
        $check_query = "SELECT * FROM categories WHERE category = '$cat_name'";
        $check_run = mysqli_query($con,$check_query);
        if(mysqli_num_rows($check_run) > 0){
            $up_error = "Category Already Exists";
        }
        else{
            $update_query = "UPDATE `categories` SET `category` = '$cat_name' WHERE `categories`.`id` = $edit_id";
            if(mysqli_query($con,$update_query)){
                $up_msg = "Category has been updated";
            }
            else{
                $up_error = "Category has not been updated";
            }
        }
    }
    
}


?>

</head>
<body>
    <!--    <div id="wrapper"> -->
        <!--   Navigation Bar Started-->
        <?php require_once('includes/navbar.php');?>
        <!--    Navigation bar ended-->
        <div class="cointainer-fluid">
            <div class="row">

             <!--       Dashboard Left Menu -->
             <div class="col-md-3">           
                <?php require_once('includes/sidebar.php');?>
            </div>
            <!--       Dashboard Left Menu -->

            <div class="col-md-9">
                <h1><i class="fas fa-folder-open mr-1"></i>Category <small>Different Category </small></h1><hr>
                <hr>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <lebel for="category"> Category Name:</lebel>
                            <?php
                            if(isset($msg)){
                                echo "<span class='float-right text-success'>$msg</span>";
                            }
                            else if(isset($error)){
                                echo "<span class='float-right text-danger'>$error</span>";
                            }
                            ?>

                            <input type="text" placeholder="Category Name" name="cat-name"class="form-control">
                        </div>
                        <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                    </form>

                    <?php
                    if(isset($_GET['edit'])){
                        $edit_check_query = "SELECT * FROM categories WHERE id = $edit_id";
                        $edit_check_run = mysqli_query($con,$edit_check_query);
                        if(mysqli_num_rows($edit_check_run) > 0){

                        $edit_row = mysqli_fetch_array($edit_check_run);
                        $up_category = $edit_row['category'];

                    ?>
                    <hr>

                     <form action="" method="post">
                        <div class="form-group">
                            <lebel for="category">Update Category Name:</lebel>
                            <?php
                            if(isset($up_msg)){
                                echo "<span class='float-right text-success'>$up_msg</span>";
                            }
                            else if(isset($up_error)){
                                echo "<span class='float-right text-danger'>$up_error</span>";
                            }
                            ?>

                            <input type="text"  value="<?php echo $up_category; ?>"placeholder="Category Name" name="cat-name"class="form-control">
                        </div>
                        <input type="submit" value="Update Category" name="update" class="btn btn-primary">
                    </form>
                    <?php
                          }
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    $get_query = "SELECT * FROM categories ORDER BY id DESC";
                    $get_run = mysqli_query($con,$get_query);
                    if(mysqli_num_rows($get_run) > 0){

                            if(isset($del_msg)){
                                echo "<span class='float-right text-success'>$del_msg</span>";
                            }
                            else if(isset($del_error)){
                                echo "<span class='float-right text-danger'>$del_error</span>";
                            }
                            

                        ?>
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $category_id = '';
                                $category_name = '';
                                while($get_row = mysqli_fetch_array($get_run)){
                                   $category_id = $get_row['id'];
                                   $category_name = $get_row['category'];
                                   ?>
                                   <tr>
                                    <td><?php echo $category_id;?></td>
                                    <td><?php echo ucfirst($category_name);?></td>   
                                    <td><a href="admin_category.php?edit=<?php echo $category_id;?>">
                                        <i class="fas fa-pencil-alt"></i></a></td>
                                        <td><a href="admin_category.php?del=<?php echo $category_id;?>"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php')?>
