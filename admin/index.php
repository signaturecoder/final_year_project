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
    <!--   Navigation Bar Started-->
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
    <!--    Navigation bar ended-->
    
    <div class="cointainer-fluid">
        <div class="row">
        <!--       Dashboard Left Menu Started -->
        
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
            <!--       Dashboard Left Menu Ended -->
            
            
            <div class="col-md-9">
                <h1><i class="fas fa-tachometer-alt"></i>dashboard <small>stactical overview</small></h1><hr>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
                
                <!--  New Comments  Box-->
                <div class="row tag-boxes">
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <div class="row ">
                                <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="text-right huge">11</div>
                                <div class="text-right">New Comments</div>
                            </div>
                            </div>
                           </div>
                           <a href="#">
                               <div class="pannel-footer">
                                   <span class="pull-left">View All Comments</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfx"></div>
                               </div>
                           </a>
                        </div>
                    </div>
                    
                    <!--  All Post Box-->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                           <div class="row ">
                                <div class="col-xs-3 "> 
                                <i class="fas fa-file-alt"></i>
           
                            </div>
                            <div class="col-xs-9">
                                <div class="text-right huge">18</div>
                                <div class="text-right">All posts</div>
                            </div>
                            </div>
                           </div>
                           <a href="#">
                               <div class="pannel-footer">
                                   <span class="pull-left">View All Comments</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfx"></div>
                               </div>
                           </a>
                        </div>
                    </div>
                       
                       <!--  All Users Box-->
                       <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow ">
                            <div class="panel-heading">
                           <div class="row ">
                                <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="text-right huge">40</div>
                                <div class="text-right">All users</div>
                            </div>
                            </div>
                           </div>
                           <a href="#">
                               <div class="pannel-footer">
                                   <span class="pull-left">View All users</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfx"></div>
                               </div>
                           </a>
                        </div>
                    </div>
                       
                       <!--  All Categories Box-->
                       <div class="col-md-6 col-lg-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                           <div class="row ">
                                <div class="col-xs-3">
                                <i class="fa fa-folder-open fa-5x"></i>
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="text-right huge">9</div>
                                <div class="text-right">All categories</div>
                            </div>
                            </div>
                           </div>
                           <a href="#">
                               <div class="pannel-footer">
                                   <span class="pull-left">View All categories</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfx"></div>
                               </div>
                           </a>
                        </div>
                    </div>
                    
                </div><hr>
                
                <!--  create table-->
                <h3>New Users</h3>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                     <!--  start tbody tag-->
                     <tbody>
                               <!--  now static when we code dynamically by php then automatically data come-->
                                
                                 <tr>
                                     <td>1</td>
                                     <td>20 jan 2019</td>
                                     <td>CMS</td>
                                     <td>Username</td>
                                     <td>Admin</td>
                                 </tr>
                                 
                                  <tr>
                                     <td>1</td>
                                     <td>20 jan 2019</td>
                                     <td>CMS</td>
                                     <td>Username</td>
                                     <td>Admin</td>
                                  </tr>
                                  
                                  <tr>
                                     <td>1</td>
                                     <td>20 jan 2019</td>
                                     <td>CMS</td>
                                     <td>Username</td>
                                     <td>Admin</td>
                                  </tr>
                                  
                                  <tr>
                                     <td>1</td>
                                     <td>20 jan 2019</td>
                                     <td>CMS</td>
                                     <td>Username</td>
                                     <td>Admin</td>
                                  </tr>
                                  
                                  <tr>
                                     <td>1</td>
                                     <td>20 jan 2019</td>
                                     <td>CMS</td>
                                     <td>Username</td>
                                     <td>Admin</td>
                                  </tr>
                                
                                
                                 
                     </tbody>
                </table>
                <!--  for button-->
                <a href="#" class="btn btn-primary">View All Users</a><hr>
                <h3>New Posts</h3>
                <table class="table">
                    <thread>
                        <tr>
                            <th>Sr #</th>
                            <th>Date</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Views</th>
                            <th></th>
                        </tr>
                    </thread>
                    <!--tbody-->
                    <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>20 jan 2019</td>
                                    <td>our cms final year project</td>
                                    <td>video tutorials</td>
                                    <td><i class="fa fa-eye"></i>28</td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>20 jan 2019</td>
                                    <td>our cms final year project</td>
                                    <td>video tutorials</td>
                                    <td><i class="fa fa-eye"></i>28</td>
                                </tr>
                                
                                 <tr>
                                    <td>1</td>
                                    <td>20 jan 2019</td>
                                    <td>our cms final year project</td>
                                    <td>video tutorials</td>
                                    <td><i class="fa fa-eye"></i>28</td>
                                </tr>
                                
                                 <tr>
                                    <td>1</td>
                                    <td>20 jan 2019</td>
                                    <td>our cms final year project</td>
                                    <td>video tutorials</td>
                                    <td><i class="fa fa-eye"></i>28</td>
                                </tr>
                                
                                 <tr>
                                    <td>1</td>
                                    <td>20 jan 2019</td>
                                    <td>our cms final year project</td>
                                    <td>video tutorials</td>
                                    <td><i class="fa fa-eye"></i>28</td>
                                </tr>
                    </tbody>
                </table>
                
                </nav>
                
            </div>
        </div>
    </div>
     <footer>
        <div class="cointainer">
               copyright &copy; <a href="https://www.google.com/">Google</a> All Right Reserved from 2015-2019.
        </div>
    </footer> 
</body>
</html>