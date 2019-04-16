<?php
ob_start();
session_start();
require_once('../includes/db.php'); 
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $check_username_query = "SELECT * FROM users_details WHERE username ='$username'";
  $check_username_run = mysqli_query($con,$check_username_query);
  if(mysqli_num_rows($check_username_run) > 0){
        $row = mysqli_fetch_array($check_username_run);
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_role = $row['role'];
        $db_author_image = $row['image'];

        //$password from form and $db_password from our database
      
        $password = crypt($password,$db_password);
        if($username == $db_username && $password == $db_password){
              header('location: index.php');
              $_SESSION['username'] = $db_username;
              $_SESSION['role'] = $db_role;
              $_SESSION['author_image'] = $db_author_image;
        }
        else{
          $error = " Wrong Username and Password";
        }
  }
  else{
        $error = " Wrong Username and Password";
  }
}
?>
<!doctype html>
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
<!--  <div id="wrapper">-->
    <div class="container mt-3">
        <div class="row justify-content-sm-center">
          <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
              <div class="card-header bg-white">
                <img src="img/technoLogo1.png" alt="techno logo" width="50px">
              </div>

              <div class="row">
                        <div class="col-md-12 mt-3">
                          <center><div class="g-signin2" data-onsuccess="onSignIn"></div></center>
                        </div>
              </div>
              <div class="card-body">
                <form class="form-signin" action="" method="post">
                  <input type="username"  name="username" class="form-control mb-2" placeholder="Username" required>
                  <input type="password"  name="password" class="form-control mb-2" placeholder="Password" required>
                  <input type="submit" name="submit" value="Sign In" class="btn btn-lg btn-primary btn-block mb-1">
                  <label class="checkbox float-left">
                    <?php
                    if(isset($error)){
                        echo $error;
                    }
                    ?> 
                  </label>
                </form>
              </div>
            </div>
            <a href="signup.php" class="float-right">Create an account </a>
          </div>
        </div>
      </div>


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

    