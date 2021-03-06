<?php require_once('includes/header.php');
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}

$session_username =$_SESSION['username'];
$query = "SELECT * FROM users_details WHERE username = '$session_username'";
$run = mysqli_query($con, $query);
$row = mysqli_fetch_array($run);

$image = $row['image'];
$id = $row['id'];
$date =$row['date'];
// $day = $date['mday'];
// $month = substr($date['month'],0,3);
// $year = $date['year'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$username = $row['username'];
$email = $row['email'];
$role = $row['role'];
$details = $row['details'];
?>
</head>
<body id="profile">
  <!--   Navigation Bar Started-->
  <?php require_once('includes/navbar.php');?>
  <!--    Navigation bar ended-->

  <div class="cointainer-fluid">
    <div class="row">
      <!--       Dashboard Left Menu Started -->

      <div class="col-md-3">           
        <?php require_once('includes/sidebar.php');?>
        <div class="container-fluid body-section">
          <div class="col-md-3">
           <?php require_once('includes/header.php');?>
         </div>
       </div>
     </div>

     <div class="col-md-9">
      <h1><i class="fa fa-user"></i> Profile <small>Personal Details</small></h1><hr>
<!--        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav> -->

        <center><img src="img/<?php echo $image;?>" width="200px" class="img-circle img-thumbnail" id="profile-image"></center><br>
        <a href="admin_edit_profile.php?edit=<?php echo $id;?>" class="btn btn-primary float-right">edit profile</a>
        <center>
         <h3>Profile Details</h3>
       </center>
       <br>
       <table class="table table-bordered table-hover">
         <tr>
           <td width="20%"><b>user id:</b></td>
           <td width="30%"><?php echo $id;?></td>
           <td width="20%"><b>singup date:</b></td>
           <td width="30%"><?php echo $date;?></td>
         </tr>

         <tr>
           <td width="20%"><b>first name:</b></td>
           <td width="30%"><b><?php echo $first_name;?></b></td>
           <td width="20%"><b>last name:</b></td>
           <td width="30%"><b><?php echo $last_name;?></b></td>
         </tr>

         <tr>
           <td width="20%"><b>user name:</b></td>  
           <td width="30%"><?php echo $username;?></td>
           <td width="20%"><b>email:</b></td>
           <td width="30%"><?php echo $email;?></td>
         </tr>

         <tr>
           <td width="20%"><b>role:</b></td>
           <td width="30%"><?php echo $role;?></td>
           <td width="20%"><b></b></td>
           <td width="30%"><b></b></td>
         </tr>

       </table>
       <div class="row">
         <div class="col-lg-8 col-sm-12">
           <b>Details</b>
           <div><?php echo $details;?></div>
         </div>
       </div>
       <br><br>
   </div>
 </div>
</div>

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
<!-- Footer -->
<?php include 'includes/footer.php';?>
<!-- Footer -->


