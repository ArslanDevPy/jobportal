<?php
session_start();
include('../config.php');
$target = '../../media/job/' . basename($_FILES['image']['name']);
// echo "<script> alert(" . $target . "); </script>";
echo $target;
$id = $_SESSION['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$image = $_FILES['image']['name'];
$category = $_POST['category'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$sql = 'INSERT INTO job(title, description, job_startdate, job_enddate, image, cateid,userid) VALUES ("' . $title . '","' . $desc . '","' . $start_date . '","' . $end_date . '","' . $image . '","' . $category . '","' . $id . '")';
if ($conn->query($sql)) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script>location.href = 'http://localhost/jobportal/dashboard/job.php';</script>";
        // Image Uploaded Successfully..!
    } else {
        // There Was a Problem uploading image
    }
}
