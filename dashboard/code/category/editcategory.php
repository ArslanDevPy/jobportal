<?php
include('../config.php');
$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$sql = "UPDATE category SET title= '" . $title . "' ,description= '" . $desc . "' WHERE id = '" . $id . "' ;";
if ($conn->query($sql)) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/category.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/editcategory.php?id=$id';</script>";
}
