<?php
include('../config.php');

$id = $_POST['id'];
$jobid = $_POST['jobid'];
$userid = $_POST['userid'];
$sql = "UPDATE jobapply SET jobid= '".$jobid."' ,userid='".$userid."' WHERE id = '" . $id . "';";
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/jobapply.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/editapplyjob.php?id=$id';</script>";
}
