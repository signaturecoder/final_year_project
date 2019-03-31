<?php
ob_start();
session_start();
header("location: admin_login.php");
session_destroy();

?>
