<?php
include('../config.php');
$title = $_POST['title'];
$desc = $_POST['desc'];
$sql = 'INSERT INTO category(title, description) VALUES ("' . $title . '","' . $desc . '");';
if ($conn->query($sql)) {
    echo "<script> alert('Add Category Successfully..!'); </script>";
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/category.php';</script>";
} else {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard/addcategory.php';</script>";
}
