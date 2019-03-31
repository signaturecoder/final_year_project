
<?php require_once('includes/header.php');
//if no username in our database and session
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}

?>

</head>
<body>
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->
  <p>Welcome : <?php echo $_SESSION['username'];?></p>
    <div class="cointainer-fluid body-section">

      <div class="row">
        <!--       Dashboard Left Menu Started -->
        <div class="col-md-3">           
          <?php require_once('includes/sidebar.php');?>
        </div>
        <!--       Dashboard Left Menu Ended -->
        
        
        <div class="col-md-9">
          <h1><i class="fas fa-tachometer-alt mr-1"></i>Dashboard <small>Stactical Overview</small></h1><hr>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Home</a></li>
            </ol>
          </nav>
            
            <!--  New Comments  Box-->
            <div class="row tag-boxes">
              <div class="col-md-6 col-lg-3">
                <div class="panel panel-primary border border-primary">
                  <div class="panel-heading">
                    <div class="row ">
                      <div class="col-sm-3">
                        <i class="fa fa-comments fa-3x text-primary"></i>
                        
                      </div>
                      <div class="col-xs-9">
                        <div class="float-right huge text-primary">11</div>
                        <div class="float-right text-primary pl-3">All Comments</div>
                      </div>
                    </div>
                  </div>
                  <a href="admin_comment.php">
                   <div class=" pannel-footer">
                     <span class="float-left">View All Comments</span>
                     <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                     <div class="clearfix"></div>
                   </div>
                 </a>
               </div>
             </div>
             
             <!--All Post Box-->
             <div class="col-md-6 col-lg-3">
              <div class="panel panel-red border border-danger">
                <div class="panel-heading">
                  <div class="row ">
                    <div class="col-sm-3">
                      <i class="fa fa-file-alt fa-3x text-danger"></i>
                    </div>
                    <div class="col-xs-9">
                      <div class="float-right huge text-danger">18</div>
                      <div class="float-right text-danger pl-3">All posts</div>
                    </div>
                  </div>
                </div>
                <a href="admin_post.php">
                 <div class="pannel-footer">
                   <span class="float-left ">View All posts</span>
                   <span class="float-right "><i class="fa fa-arrow-circle-right"></i></span>
                   <div class="clearfix"> </div>
                 </div>
               </a>
             </div>
           </div>

           <!--    All Users Box -->
           <div class="col-md-6 col-lg-3">
             <div class="panel panel-yellow border border-warning">

               <div class="panel-heading">
                 <div class="row ">
                  <div class="col-sm-3">
                   <i class="fa fa-users fa-3x text-warning"></i>
                 </div>
                 <div class="col-xs-9">
                  <div class="float-right huge text-warning">40</div>
                  <div class="float-right text-warning pl-3">All users</div>
                </div>
              </div>
            </div>
            <a href="admin_user.php">
             <div class="pannel-footer">
               <span class="float-left">View All users</span>
               <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
               <div class="clearfix"></div>
             </div>
           </a>
         </div>
       </div>

       <!--  All Categories Box-->
       <div class="col-md-6 col-lg-3">
        <div class="panel panel-green border border-success">
          <div class="panel-heading">
           <div class="row ">
            <div class="col-sm-3">
              <i class="fa fa-folder-open fa-3x text-success"></i>
            </div>
            <div class="col-xs-9">
              <div class="float-right huge text-success">9</div>
              <div class="float-right text-success pl-3">All categories</div>
            </div>
          </div>
        </div>
        <a href="admin_category.php">
         <div class="pannel-footer">

           <span class="float-left">View All categories</span>
           <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
           <div class="clearfix"></div>
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

<!--     </nav> -->

</div>
</div>
</div>
<?php require_once('includes/footer.php')?>