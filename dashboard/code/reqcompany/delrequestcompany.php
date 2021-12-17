<?php

$id = $_GET['id'];
include('../config.php');
$sql = 'DELETE FROM reqadmin WHERE id="' . $id . '"';
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/requestcompany.php';</script>";
} else {
    // Not Re
}
