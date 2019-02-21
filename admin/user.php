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
                <h1><i class="fas fa-user"></i>User<small>View all User</small></h1><hr>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                    <li class="active"><i class="fa fa-users ml-2"></i>Users</li>
                </ol>
                        <div class="row">
                            <div class="col-sm-8">
                                <form action="">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <select name="" id="" class="form-control">
                                                    <option value="delete">Delete</option>
                                                    <option value="author">Change To Author</option>
                                                    <option value="admin">Change To Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 ml-2">
                                            <input type="submit" class="btn btn-success" value="Apply">
                                            <a href="#" class="btn btn-primary">Add New</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                   <th><input type="checkbox"></th>
                                    <th>Sr #</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Post</th>
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                  <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                   
                                   <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
        
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>21 feb 2019</td>
                                    <td>sanchita</td>
                                    <td>sanchita1234</td>
                                    <td>sanc1234gmail.com</td>
                                    <td><img src="" alt=""></td>
                                    <td>1234rewq</td>
                                    <td>admin</td>
                                    <td>11</td>
                                    <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                
                </nav>
                
            </div>
        </div>
    </div>
     
</body>
</html>