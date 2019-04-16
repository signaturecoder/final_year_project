<?php
$session_role1 = $_SESSION['role'];

$get_comment = "SELECT * FROM comments WHERE status = 'pending'";
$get_comment_run = mysqli_query($con, $get_comment);
$num_of_rows = mysqli_num_rows($get_comment_run);
?>


<ul class="list-group">
 <a href="index.php" class="list-group-item active">Dashboard</a>
 <a href="admin_post.php" class="list-group-item d-flex justify-content-between align-items-end">
  All Posts

</a>
<a href="admin_media.php" class="list-group-item d-flex justify-content-between align-items-end">
  Media

</a>
<?php
if($session_role1 == 'admin'){

  ?>
  <a href="admin_comment.php"  class="list-group-item d-flex justify-content-between align-items-end">
    Comments
    <?php 
    if($num_of_rows > 0 ){
      echo "<span class='badge badge-primary badge-pill'>$num_of_rows</span>";
    }
    ?>
    
  </a>
  <a href="admin_category.php"  class="list-group-item d-flex justify-content-between align-items-end">
    Categories

  </a>
  <a href="admin_user.php"  class="list-group-item d-flex justify-content-between align-items-end">
    User

  </a>
<?php }?>
</ul>