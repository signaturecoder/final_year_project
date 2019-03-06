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
                    
                    <!--All Post Box-->
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
                                   <div class="clearfx"> </div>
                               </div>
                           </a>
                        </div>
                    </div>
                       
                       <!--All Users Box-->
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
                    
                             <tbody>
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
         <!-- Footer -->
            <?php include 'includes/footer.php';?>
         <!-- Footer -->
     
     <!--    On Google Signin-->
     <script type="text/javascript">
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();


          if(profile){
              $.ajax({
                    type: 'POST',
                    url: 'login_pro.php',
                    data: {id:profile.getId(), name:profile.getName(), email:profile.getEmail()}
                }).done(function(data){
                    console.log(data);
                    window.location.href = 'index.php';
                }).fail(function() { 
                    alert( "Posting failed." );
                });
          }


        }
    </script>
    
</body>
</html>