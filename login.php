<?php
$page = "login";
session_start();
include('dashboard/auth/auth.php');
include('dashboard/utils/utils.php');
$auth = new Auth();
$utils = new Utils();
if (isset($_SESSION['is_authenticated'])) {
    echo "<script>location.href = 'http://localhost/jobportal/dashboard';</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Job Portal - Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <section>
        <div class="col-md-6 offset-md-3 text-center login-form-padding">
            <div class="card p-5 shadow-lg rounded">
                <div class="card-title">
                    <h2 class="find-color">Login Form</h2>
                </div>
                <center class="pb-2 text-danger">
                    <small id="message">
                    </small>
                </center>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group mb-3">
                        <input required type="email" class="form-control" name="email" autofocus placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input required type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn btn-outline-warning pl-3 pr-3 mt-3">
                </form>
            </div>
        </div>
    </section>
    <?php
    include('jslink.php');
    ?>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $auth->login();
    if ($message) {
        $utils->message($message);
    }
}
?>