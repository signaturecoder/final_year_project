
<?php require_once('includes/header.php');
//if no username in our database and session
if(!isset($_SESSION['username'])){
  header('location: admin_login.php');
}

?>

</head>
<body>
<!-- <div id="wrapper"> -->
  <?php require_once('includes/navbar.php');?>
  
    <div class="cointainer-fluid body-section">
      <div class="row">
       <div class="col-md-3">           
        <?php require_once('includes/sidebar.php');?>
      </div>


      <div class="col-md-9">
        <h1><i class="fa fa-database"></i>Media <small>Add Or View Media Files</small></h1><hr>
              
         <?php 
          if(isset($_POST['submit'])){
            if(count($_FILES['media']['name']) > 0){
              for($i = 0; $i < count($_FILES['media']['name']); $i++){

                $image = $_FILES['media']['name'][$i];
            
                $tmp_name = $_FILES['media']['tmp_name'][$i];  
                $query = "INSERT INTO media (image) VALUE ('$image')";
                if(mysqli_query($con, $query)){
                  move_uploaded_file($tmp_name, "media/$image");  
                }
              }
            }
          }

          ?> 


          <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-4 col-xs-8">
                <input type="file" name="media[]" required multiple>
              </div>
              <div class="col-sm-4 col-xs-4">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Add Media">
              </div>
            </div>
          </form>
          <div class="row">
       <?php 
           $get_query = "SELECT * FROM media ORDER BY id DESC";
           $get_run = mysqli_query($con, $get_query);
           if(mysqli_num_rows($get_run) > 0){
            while($get_row = mysqli_fetch_array($get_run))  {
              $get_image = $get_row['image'];

              ?>
              <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 thumb">
                <a href="media/<?php echo $get_image;?>" class="thumbnail"><br>
                  <img src="media/<?php echo $get_image;?>" width="100px" alt="">
                </a>
              </div>
              <?php
            }
          }
          else{
            echo "<center><h2>No Media Available</h2></center>";
          }
          ?> 

        </div>
    </div>
  
</div>
<?php require_once('includes/footer.php')?>