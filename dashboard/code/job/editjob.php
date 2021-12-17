<?php
session_start();
include('../config.php');
$target = '../../media/job/' . basename($_FILES['image']['name']);
// echo "<script> alert(" . $target . "); </script>";
echo $target;
$image = null;
if ($_FILES['image']['name']) {
    $image = $_FILES['image']['name'];
} else {
    $image = $_POST['pimg'];
}
$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$sql = 'UPDATE job SET title="' . $title . '",description="' . $desc . '",job_startdate="' . $start_date . '",job_enddate="' . $end_date . '",image="' . $image . '",cateid="' . $category . '" WHERE id = "' . $id . '"';
if ($conn->query($sql)) {
    if ($_FILES['image']['name']) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "<script>location.href = 'http://localhost/jobportal/dashboard/job.php';</script>";
            // Image Uploaded Successfully..!
        } else {
            // There Was a Problem uploading image
        }
    } else {
        echo "<script>location.href = 'http://localhost/jobportal/dashboard/job.php';</script>";
    }
}
