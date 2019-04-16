<?php require_once('includes/header.php');
//if no username in our database and session
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}
$comments_tag_query = "SELECT * FROM comments WHERE status = 'pending'";
$categories_tag_query = "SELECT * FROM categories";
$users_details_tag_query = "SELECT * FROM users_details";
$posts_tag_query = "SELECT * FROM posts";

$com_tag_run = mysqli_query($con, $comments_tag_query);
$cat_tag_run = mysqli_query($con, $categories_tag_query);
$user_tag_run = mysqli_query($con, $users_details_tag_query);
$post_tag_run = mysqli_query($con, $posts_tag_query);

$com_rows = mysqli_num_rows($com_tag_run);
$cat_rows = mysqli_num_rows($cat_tag_run);
$user_rows = mysqli_num_rows($user_tag_run);
$user_rows = mysqli_num_rows($user_tag_run);
$post_rows = mysqli_num_rows($post_tag_run);
?>

</head>
<body>
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->
  <!-- <p>Welcome : <?php echo $_SESSION['username'];?></p> -->
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
                    <div class="float-right huge text-primary"><?php echo $com_rows;?></div>
                    <div class="float-right text-primary pl-3">All Comments</div>
                  </div>
                </div>
              </div>
              <a href="admin_comment.php">
               <div class=" pannel-footer">
                 <span class="float-left">View All Comments</span>
                 <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                 <div class="clearfix">
                   
                 </div>
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
                  <div class="float-right huge text-danger"><?php echo $post_rows;?></div>
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
              <div class="float-right huge text-warning"><?php echo $user_rows;?></div>
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
          <div class="float-right huge text-success"><?php echo $cat_rows;?></div>
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

<?php 
$get_users_details_query = "SELECT * FROM users_details ORDER BY id DESC LIMIT 5" ;

$get_users_details_run = mysqli_query($con, $get_users_details_query);
if(mysqli_num_rows($get_users_details_run)>0){
  
  
  
  ?>
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
      <?php 
      while($get_users_details_row = mysqli_fetch_array($get_users_details_run)){
       $users_details_id =$get_users_details_row['id'];
       $users_details_date =$get_users_details_row['date'];
//                     $users_details_day = $users_details_day['mday'];
//                     $users_details_month = substr($users_details_day['month'],0,3);
//                     $users_details_year = $users_details_day['year'];
       $users_details_first_name = $get_users_details_row['first_name'];
       $users_details_last_name = $get_users_details_row['last_name'];
                     //$users_details_fullname = "$users_details_firstname $users_details_lastname";
       $users_details_username = $get_users_details_row['username'];
       $users_details_role = $get_users_details_row['role'];
     }        
     ?>
     
     <tr>
       <td><?php echo $users_details_id;?></td>
       <td><?php echo $users_details_date;?></td>
       <td><?php echo "$users_details_first_name $users_details_last_name";?></td>
       <td><?php echo ucfirst($users_details_username);?></td>
       <td><?php echo ucfirst($users_details_role);?></td>
     </tr>

     

   </tbody>
 </table>
 <!--  for button-->
 <a href="admin_user.php" class="btn btn-primary">View All Users</a><hr>
<?php }?>

<?php 
$get_posts_query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5" ;
$get_posts_run = mysqli_query($con, $get_posts_query);
if(mysqli_num_rows($get_posts_run)>0){
  
  
  
  ?>
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
    
    <tbody>
     <?php 
     while($get_posts_row = mysqli_fetch_array($get_posts_run)){
       $posts_id = $get_posts_row['id'];
       $posts_date =$get_posts_row['date'];
//             $posts_day = $posts_day['mday'];
//             $posts_month = substr($posts_day['month'],0,3);
//             $posts_year = $posts_day['year'];
       $posts_title = $get_posts_row['title'];
       $posts_category = $get_posts_row['category'];
       $posts_view = $get_posts_row['view'];
     }        
     ?>
     
     <tr>
       <td><?php echo $posts_id;?></td>
       <td><?php echo $posts_date;?></td>
       <td><?php echo $posts_title;?></td>
       <td><?php echo ucfirst($posts_category);?></td>
       <td><?php echo ucfirst($posts_view);?></td>
     </tr>
     
     
   </tbody>
 </table>

 <a href="admin_post.php" class="btn btn-primary">View All Posts</a><hr>
<?php }?>

</div>
</div>
</div>
<?php require_once('includes/footer.php')?>