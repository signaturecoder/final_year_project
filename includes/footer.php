<div class="footer">
  <div class="cointainer">
   copyright &copy; <a href="https://www.google.com/">Google</a> All Right Reserved from 2015-<?php echo date('Y')?>.
 </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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


  $('.btnspl').on("click",function(){
    $('.btnspl').toggleClass('btnsplc');
    $('.sidebar').toggleClass('side');
  });

</script>  
<?php mysqli_close($con);?>
</body>
</html>
