<?php
include('../config.php');
$id = $_GET['id'];
$sql = "delete from contact WHERE id='$id'";
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/contacts.php';</script>";
} else {
    // Not Del
}
