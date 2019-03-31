<?php
    include "includes/db.php";

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$first_name = $_POST['first_name'];
$first_name = mysqli_real_escape_string($con, $first_name);

$last_name = $_POST['lname'];
$last_name = mysqli_real_escape_string($con, $last_name);

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
//
//$contact = $_POST['contact'];
//$contact = mysqli_real_escape_string($con, $contact);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$query = "SELECT * FROM users_details WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
} else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
} else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
} else {

    $query = "INSERT INTO `users_details` (`first_name`, `last_name`, `email`, `password`,) VALUES ('$first_name', '$last_name', '$email','$password')";
    mysqli_query($con, $query) or die(mysqli_error($con));
                        
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
}
?>