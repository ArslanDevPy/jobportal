<?php
class Auth
{
    function __construnt()
    {
        // code...
    }

    function __destruct()
    {
        // code...
    }

    public function connection()
    {
    }

    public function login()
    {
        include('dbconnect.php');
        $mysql = new Conection();
        $conn = $mysql->conOpen();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select * from users where email = '$email' and password='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['full_name'] = $row['first_name'] . " " . $row['last_name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['is_authenticated'] = true;
            $_SESSION['is_admin'] = $row['is_admin'];
            $_SESSION['is_company'] = $row['is_company'];
            $_SESSION['is_user'] = $row['is_active'];
            $_SESSION['is_verify'] = $row['is_verify'];
            $_SESSION['user_img'] = $row['user_img'];
            $_SESSION['user_cv'] = $row['user_cv'];
            $conn->close();
            echo "<script> alert('Login Successfully..!'); </script>";
            echo "<script>location.href = 'http://localhost/jobportal/dashboard/';</script>";
        } else {
            $conn->close();
            return "Wrong informaction..!";
        }
    }

    public function register()
    {
        include('dbconnect.php');
        $mysql = new Conection();
        $conn = $mysql->conOpen();
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        if ($first_name != "" && $last_name != "" && $username != "" && $email != "" && $pass != "" && $cpass != "") {
            if ((strlen($pass) > 6 == strlen($cpass) > 6) && ($pass == $cpass)) {
                $query = "insert into users(first_name, last_name, email, username, password) VALUES ('$first_name','$last_name','$email','$username','$pass')";
                $query_status = $conn->query($query);
                if ($query_status) {
                    $conn->close();
                    echo "<script> alert('Register Successfully..!'); </script>";
                    echo "<script>location.href = 'login.php';</script>";
                    return "Data Save";
                }
            } else {
                $conn->close();
                return "Password is Not Mach..! and length more than 8 word..!";
            }
        } else {
            $conn->close();
            return "Plz fill all fields..!";
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        echo "<script> alert('Logout Successfully..!'); </script>";
        echo "<script>location.href = 'login.php';</script>";
    }

    public function getUserInfo()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $id = $_SESSION['id'];
        $query = "select * from users where id = '$id';";
        $result = mysqli_query($conn, $query);
        $row = null;
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        }
        return $row;
    }

    public function accountDeleted()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $email = $_SESSION['email'];
        echo $email;
        $password = $_POST['password'];
        $query = "select * from users where email = '$email' and password='$password'";
        $result = $conn->query($query);
        if (mysqli_num_rows($result) === 1) {
            $id = $_SESSION['id'];
            $sql = "delete from notification WHERE userid='$id'";
            $conn->query($sql);
            $sql = "delete from job WHERE userid='$id'";
            $conn->query($sql);
            $sql = "delete from jobapply WHERE userid='$id'";
            $conn->query($sql);
            $sql = "delete from users WHERE email='$email'";
            $conn->query($sql);
            session_unset();
            session_destroy();
            echo "<script> alert('Account Deleted Successfully..!'); </script>";
            echo "<script>location.href = 'http://localhost/jobportal/login.php';</script>";
            echo "<script>alert('OK')</script>";
            return "Accout has been Deleted..!";
        } else {
            echo "<script>location.href = 'http://localhost/jobportal/dashboard/accountdelect.php';</script>";
            echo '<script> document.getElementById("message").innerText = "Something is Wrong..!"; </script>';
        }
    }

    public function updateAccount()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $id = $_SESSION['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $jobselect = $_POST['jobselect'];
        $address = $_POST['address'];
        $sql = 'UPDATE users SET first_name="' . $first_name . '",last_name="' . $last_name . '",address="' . $address . '",country="' . $country . '",city="' . $city . '",gender="' . $gender . '",jobselect ="' . $jobselect . '" WHERE id = "' . $id . '";';
        if ($conn->query($sql)) {
            echo "<script> alert('Account Updated Successfully..!'); </script>";
            $_SESSION['full_name'] = $first_name . " " . $last_name;
        }
        echo "<script>location.href = 'http://localhost/jobportal/dashboard/account.php';</script>";
    }

    public function changePassword()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $id = $_SESSION['id'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if (($password1 == $password2) && (strlen($password1) >= 6 && strlen($password1) >= 6) && ($password1 != "" && $password2 != "")) {
            $sql = 'UPDATE users SET password ="' . $password1 . '" WHERE id = "' . $id . '"';
            if ($conn->query($sql)) {
    echo "<script> alert('Password Change Successfully..!'); </script>";

                echo "<script>location.href = 'http://localhost/jobportal/dashboard/';</script>";
            } else {
                // Somethings is Wrong...!
            }
        } else {
            // Password is Not Same
        }
    }

    public function uploadProfileImg()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $target = 'media/user/img/' . basename($_FILES['image']['name']);
        $images = $_FILES['image']['name'];
        $id = $_SESSION['id'];
        $sql = 'UPDATE users SET user_img ="' . $images . '" WHERE id = "' . $id . '"';
        if ($conn->query($sql)) {
    echo "<script> alert('Profile Image Updated Successfully..!'); </script>";

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $_SESSION['user_img'] = $images;
                // Image Uploaded Successfully..!
            } else {
                // There Was a Problem uploading image
            }
        }
    }

    public function uploadusercv()
    {
        $username = 'root';
        $password = '';
        $db = 'jobportal';
        $host = "localhost";
        $conn = new mysqli($host, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection Faild");
        }
        $target = 'media/user/cv/' . basename($_FILES['fileToUpload']['name']);
        $file = $_FILES['fileToUpload']['name'];
        $id = $_SESSION['id'];
        $sql = 'UPDATE users SET user_cv ="' . $file . '" WHERE id = "' . $id . '"';
        if ($conn->query($sql)) {
            echo "<script> alert('CV Updated Successfully..!'); </script>";
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
                $_SESSION['user_cv'] = $file;
                // CV Uploaded Successfully..!
            } else {
                // There Was a Problem uploading CV
            }
        }
    }
}
