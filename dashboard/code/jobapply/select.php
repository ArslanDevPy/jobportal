<?php
include('../config.php');
$id = $_GET['id'];
    $sql = "UPDATE jobapply SET is_select= true,is_padding=false,not_select=false WHERE id = '" . $id . "';";
    if ($conn->query($sql)) {
        $sql = 'INSERT INTO Notification(title, message, userid) VALUES ("Seleted For '.$_GET['job'].' Job","You Are Seleted","'.$_GET['user'].'");';
        $conn->query($sql);
        echo "<script>location.href = 'http://localhost/jobportal/dashboard/jobapply.php';</script>";
    } else {
        echo "<script>location.href = 'http://localhost/jobportal/dashboard/jobapply.php';</script>";
    }

