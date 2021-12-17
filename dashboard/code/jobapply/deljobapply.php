<?php

$id = $_GET['id'];
include('../config.php');
$sql = 'DELETE FROM jobapply WHERE id="' . $id . '"';
if ($conn->query($sql)) {
    echo "<script>location.href = 'https://localhost/jobportal/dashboard/jobapply.php';</script>";
} else {
    // Not Re
}
