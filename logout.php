<!--Logout for Google Signin-->

<?php 
    session_start();
    session_unset();
    session_destroy();

?>
<html>
    <head>
        <meta name="google-signin-client_id" content="399945929502-bi8oe166ss1p9t79fr6hq3ltc8okrk78.apps.googleusercontent.com">
    </head>
    <body>
	<script>
  
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  
</script>
        <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
        <script>
            window.onLoadCallback = function(){
                gapi.load('auth2', function() {
                    gapi.auth2.init().then(function(){
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
							auth2.disconnect();
                            document.location.href = 'index.php';
                        });
                    });
                });
            };
        </script>
    </body>
</html>