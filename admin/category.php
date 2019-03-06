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
       
         <!--       Dashboard Left Menu -->
           <div class="col-md-3">           
            <?php require_once('includes/sidebar.php');?>
             </div>
         <!--       Dashboard Left Menu -->
           
            <div class="col-md-9">
                <h1><i class="fas fa-folder-open"></i>Category <small>Different Category </small></h1><hr>
               <hr>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                 
                  <li><a href="#"><i class="fa fa-tachometer"></i> dashboard</a></li>
                   
                    <li class="active"><i class="fa fa-folder-open"></i> Category</li>
                </ol>
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <lebel for="category"> Category Name:</lebel>
                                <input type="text" placeholder="Category Name" class="form-control">
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
               
                </nav>
                
            </div>
            


        </div>
    </div>
    
         <!-- Footer -->
            <?php include 'includes/footer.php';?>
         <!-- Footer -->
     
     
</body>
</html>