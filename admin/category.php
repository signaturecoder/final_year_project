<!DOCTYPE html>
<html lang="en">
<head>
    <!--   Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    
    <title>Admin Page</title>
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
      <a class="navbar-brand" href="#">CMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>  Add Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-user-plus"></i> Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-user"></i> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Log Out</a>
          </li>
 
        </ul>
        
      </div>
    </nav>
    <div class="cointainer-fluid">
        <div class="row">
        <!--       Dashboard Left Menu -->
        
           <div class="col-md-3">           
            <ul class="list-group">
             <a href="#" class="list-group-item active">Dashboard</a>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                All Posts
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Comments
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Categories
                <span class="badge badge-primary badge-pill">11</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                User
                <span class="badge badge-primary badge-pill">14</span>
              </li>
            </ul>

            </div>
            
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
     
</body>
</html>