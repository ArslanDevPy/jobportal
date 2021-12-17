<?php
include('../config.php');
$admin = false;
$company = false;
$user = false;
if ($_POST['role'] == "admin") {
    $admin = true;
} else if ($_POST['role'] == "company") {
    $company = true;
} else {
    $user = true;
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['pass'];
$email = $_POST['email'];
$username = $_POST['username'];
$sql = 'INSERT INTO users(first_name, last_name, email, username, password, is_verify, is_active, is_admin,is_company) VALUES ("' . $first_name . '","' . $last_name . '","' . $email . '","' . $username . '","' . $password . '",True,"' . $user . '","' . $admin . '","' . $company . '");';
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/user.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/addusers.php';</script>";
}
