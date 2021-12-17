<?php
include('../config.php');
$id = $_GET['id'];
$sql = "DELETE FROM category WHERE id = '" . $id . "' ;";
if ($conn->query($sql)) {
    echo "<script> alert('Deleted Successfully..!'); </script>";
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/category.php';</script>";
} else {
    // Not Del
}
