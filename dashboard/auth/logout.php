<?php
session_start();
session_unset();
session_destroy();
echo "<script> alert('Logout Successfully..!'); </script>";
echo "<script>location.href = 'http://localhost/jobportal/login.php';</script>";
?>