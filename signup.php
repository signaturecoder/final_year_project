<?php include 'includes/header.php';?>
</head>
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
            <div class="form-group">
                  <!--  <label for="first-name">First Name:*</label> -->
                   <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name">
                 </div>

                 <div class="form-group">
                  <!--  <label for="last-name">Last Name:*</label> -->
                   <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name">
                 </div>

                 <div class="form-group">
                  <!--  <label for="username">Username:*</label> -->
                   <input type="text" id="username" name="username" class="form-control" placeholder="username">
                 </div>

                 <div class="form-group">
                  <!--  <label for="email">Email:*</label> -->
                   <input type="text" id="email" name="email" class="form-control" placeholder="email">
                 </div>

                 <div class="form-group">
                  <!--  <label for="first-name">Password:*</label> -->
                   <input type="password" id="password" name="password" class="form-control" placeholder="password">
                 </div>

                  <input type="submit" name="submit" value="Sign up" class="btn btn-lg btn-primary btn-block mb-1">
                   

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
            if(isset($_POST['submit'])){
              echo "run";
              $first_name = mysqli_real_escape_string($con,$_POST['first-name']);
              $last_name = mysqli_real_escape_string($con,$_POST['last-name']);

              $username = mysqli_real_escape_string($con,strtolower($_POST['username']));
              $username_trim = preg_replace('/\s+/','',$username);

              $email = mysqli_real_escape_string($con,strtolower($_POST['email']));
              $password = mysqli_real_escape_string($con,$_POST['password']);

              $check_query = "SELECT * FROM users_details WHERE username = '$username' or email ='$email'";
              $check_run = mysqli_query($con, $check_query);

              $salt_query = "SELECT * FROM users_details ORDER BY id DESC LIMIT 1";
              $salt_run = mysqli_query($con, $salt_query);
              $salt_row = mysqli_fetch_array($salt_run);
              $salt = $salt_row['salt'];
              $password = crypt($password, $salt);


              if(empty($first_name) or empty($last_name) or empty($username) or empty($email) or empty($password)){
                $error = "All (*) feilds are required";

              }

              else if($username != $username_trim){
                $error = "Don't use spaces in Username";

              }
              else if(mysqli_num_rows($check_run) > 0){
                $error = "Username or Emails are Already Exist";

              }

              else{
                //debugging purpose
                // echo "My name is khan and my email is " . $email . " first name is " . $first_name . " last name is " . $last_name
                // . " username is " . $username . " email is ". $email . " password is ". $password;

                $insert_query = "INSERT INTO `users_details` (`id`,`first_name`, `last_name`, `username`, `email`, `password`) VALUES (NULL, '$first_name', '$last_name', '$username', '$email','$password')";
                if(mysqli_query($con,$insert_query)){
                  $msg = "users_details has been added";
                  echo "<span class='pull-right' style='color:green;'>$msg</span>";
//                                    move_uploaded_file($image_tmp, "img/$image");
//                                    $image_check = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
//                                    $image_run = mysqli_query($con, $image_check);
//                                    $image_row = mysqli_fetch_array($image_run);
//                                    $check_image = image_row['image'];
                }
                else 
                {
                  $error = "users_details has not been added";
                  echo "<span class='pull-right' style='color:red;'>$error</span>";
                }

              }
            }  
            ?>

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

