<?php
include('../config.php');
$id = $_GET['id'];
$userid = $_GET['user'];
$sql = "UPDATE jobapply SET is_select= false,is_padding=false,not_select=true WHERE id = '" . $id . "';";
if ($conn->query($sql)) {
    $sql = 'INSERT INTO Notification(title, message, userid) VALUES ("Not Seleted For '.$_GET['job'].' Job","You Are Not Seleted","'.$_GET['user'].'");';
    $conn->query($sql);
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/jobapply.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/jobapply.php';</script>";
}