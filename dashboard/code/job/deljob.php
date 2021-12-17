<?php
include('../config.php');
$id = $_GET['id'];
$sql = "DELETE FROM job WHERE id = '" . $id . "' ;";
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/job.php';</script>";
} else {
    // Not Del
}
