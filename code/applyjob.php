<?php
session_start();
include('config.php');
$userid = $_SESSION['id'];
$jobid = $_GET['id'];
$sql = 'INSERT INTO jobapply(jobid, userid) VALUES ("' . $jobid . '","' . $userid . '")';
if ($conn->query($sql)) {
    echo "<script> alert('Successfully Applyed..!'); </script>";
    echo "<script>location.href = 'http://localhost/jobportal/';</script>";
} else {
}
?>