<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
    header('location: admin_login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('location: index.php');
}

if(isset($_POST['submit'])){
    $cat_name = mysqli_real_escape_string($con,strtolower($_POST['cat-name']));

    $check_query = "SELECT * FROM categories WHERE category = '$cat_name'";
    $check_run = mysqli_query($con,$check_query);
    if(mysqli_num_rows($check_run) > 0){
        $error = "Category Already Exists";
    }
    else{
        $insert_query = "INSERT INTO categories (category) VALUES ($cat_name)";
        if(mysqli_query($con,$insert_query)){
            $msg = "Category has been added";
        }
        else{
            $error = "Category has not been added";
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
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Category Name</th>
                                    <th>Posts</th>
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Vedio Tutorials</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><ion-icon name="airplane"></ion-icon></a></td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Vedio Tutorials</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><ion-icon name="airplane"></ion-icon></a></td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Vedio Tutorials</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><ion-icon name="airplane"></ion-icon></a></td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Vedio Tutorials</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><ion-icon name="airplane"></ion-icon></a></td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Vedio Tutorials</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><ion-icon name="airplane"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('includes/footer.php')?>
