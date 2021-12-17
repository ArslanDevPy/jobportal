<?php
session_start();
include('../config.php');
$id = $_SESSION['id'];
$message = $_POST['message'];
echo '<script> alert("'.$message.'") </script>';
$sql = 'INSERT INTO reqadmin(message, userid) VALUES ("' . $message . '","' . $id . '")';
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/';</script>";
} else {
}
