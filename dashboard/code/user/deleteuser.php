<?php
include('../config.php');
$id = $_GET['id'];
$sql = "delete from notification WHERE userid='$id'";
$conn->query($sql);
$sql = "delete from job WHERE userid='$id'";
$conn->query($sql);
$sql = "delete from jobapply WHERE userid='$id'";
$conn->query($sql);
$sql = "DELETE FROM reqadmin WHERE userid='$id'";
$conn->query($sql);
$sql = "delete from users WHERE id='$id'";
$conn->query($sql);
echo "<script>location.href = 'http://localhost/jobportal/dashboard/user.php';</script>";
