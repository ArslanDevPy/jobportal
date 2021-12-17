<?php
include('../config.php');
if ($_POST['role'] == "admin") {
    $is_admin = true;
    $is_company = false;
    $is_active = false;
} else if ($_POST['role'] == "company") {
    $is_admin = false;
    $is_company = true;
    $is_active = false;
} else {
    $is_admin = false;
    $is_company = false;
    $is_active = true;
}
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['pass'];
$email = $_POST['email'];
$username = $_POST['username'];
$sql = "UPDATE users SET first_name='" . $first_name . "',last_name='" . $last_name . "',email='" . $email . "',username='" . $username . "',password='" . $password . "',is_active='" . $is_active . "',is_admin='" . $is_admin . "',is_company='" . $is_company . "' WHERE id = '" . $id . "';";
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/user.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/editusers.php?id=$id';</script>";
}
