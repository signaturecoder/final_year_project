<?php include 'includes/header.php';
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $check_username_query = "SELECT * FROM users_details WHERE username ='$username'";
  $check_username_run = mysqli_query($con,$check_username_query);
  if(mysqli_num_rows($check_username_run) > 0){
    echo "running";
        $row = mysqli_fetch_array($check_username_run);
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_email  = $row['email'];
        $db_role = $row['role'];
        //$password from form and $db_password from our database
        $password = crypt($password,$db_password);
        if($username == $db_username && $password == $db_password){
              header('location: index.php');
              $_SESSION['username'] = $db_username;
              $_SESSION['role'] = $db_role;
              $_SESSION['email'] = $db_email;
              
        }
        else{
          $error = " Wrong Username and Password inside";
          echo $error;
        }
  }
  else{
        $error = " Wrong Username and Password";
        echo $error;
  }
}
?>

<body>
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
                  <input type="submit" name="submit" value="singin" class="btn btn-lg btn-primary btn-block mb-1">
                  <label class="checkbox float-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                  </label>
                  <a href="signup.php" class="float-right">Create an account </a>
                </form>
              </div>
            </div>
            
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

    