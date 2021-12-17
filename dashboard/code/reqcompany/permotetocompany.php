<?php
$id = $_GET['id'];
include('../config.php');
$sql = 'UPDATE users SET is_verify=True,is_active=False,is_admin=False,is_company=True WHERE id="' . $id . '"';
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/requestcompany.php';</script>";
} else {
    // Not Re
}
