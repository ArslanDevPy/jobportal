<?php
include('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM notification WHERE id = '" . $id . "' ";
if (mysqli_query($conn, $sql)) {
    echo '<script>location.href = "http://localhost/jobportal/dashboard/notification.php";</script>';
}
