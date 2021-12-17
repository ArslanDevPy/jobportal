<?php
$page = "register";
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
    <title>Job Portal - Register </title>
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
        <div class="col-md-8 offset-md-2 text-center login-form-padding">
            <div class="card p-5 shadow-lg rounded">
                <div class="card-title">
                    <h2 class="find-color">Register Form</h2>
                </div>
                <center class="pb-2 text-danger">
                    <small id="message">
                    </small>
                </center>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="row">
                        <div class="input-group mb-3 col-md-6">
                            <input required type="text" name="first_name" autofocus class="form-control" placeholder="First Name">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <input required type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3 col-md-6">
                            <input required type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <input required type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group mb-3 col-md-6">
                            <input required type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group mb-3 col-md-6">
                            <input required type="password" name="cpass" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-warning pl-3 pr-3 mt-3" value="Register">

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
    $message = $auth->register();
    if ($message) {
        $utils->message($message);
    }
}
?>