<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="img/technoLogoSmall.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,500" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="399945929502-bi8oe166ss1p9t79fr6hq3ltc8okrk78.apps.googleusercontent.com" >
    
    <!--    Custom Css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">
  <title>Login Page</title>
</head>
<body>
  
  	<div class="container mt-3">
        <div class="row justify-content-sm-center">
          <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
              <div class="card-header">
                Sign in to continue
              </div>

              <div class="row">
                        <div class="col-md-12 mt-3">
                          <center><div class="g-signin2" data-onsuccess="onSignIn"></div></center>
                        </div>
              </div>
              <div class="card-body">
                <form class="form-signin">
                  <input type="text" class="form-control mb-2" placeholder="Email" required autofocus>
                  <input type="password" class="form-control mb-2" placeholder="Password" required>
                  <button class="btn btn-lg btn-primary btn-block mb-1" type="submit">Sign in</button>
                  <label class="checkbox float-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                  </label>
                  <a href="#" class="float-right">Need help?</a>
                </form>
              </div>
            </div>
            <a href="#" class="float-right">Create an account </a>
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

    