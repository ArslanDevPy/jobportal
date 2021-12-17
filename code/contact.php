<?php
include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = 'INSERT INTO contact(first_name, last_name, email, subject, message) VALUES ("' . $first_name . '","' . $last_name . '" , "' . $email . '" , "' . $subject . '" , "' . $message . '" );';
    if ($conn->query($sql)) {
        echo "<script> alert('Send Successfully..!'); </script>";
        echo "<script>location.href = 'http://localhost/jobportal/contact.php';</script>";
    } else {
        echo "<script>location.href = 'http://localhost/jobportal/';</script>";
    }
}
