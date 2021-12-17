<html lang="en" class="h-100" dir="ltr">
<?php
session_start();
$page = "Profile Image Update";
include('auth/auth.php');
$auth = new Auth();
?>

<head>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Job Portal</title>
    <script src="js/main.js" defer=""></script>
    <link href="css/main.css" rel="stylesheet" id="app-css">
</head>

<body class="d-flex flex-column">
    <?php
    include('include/sidebar.php');
    ?>
    <div class="d-flex flex-column  content ">
        <div class="bg-base-2">
            <div class="container py-3 my-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="http://localhost/jobportal/dashboard/" class="text-muted">Home</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                                <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                            </svg>
                        </li>
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="http://localhost/jobportal/dashboard/setting.php" class="text-muted">Settings</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                                <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active text-dark"><?= $page ?></li>
                    </ol>
                </nav>

                <h2 class="mb-3 d-inline-block"><?= $page ?></h2>

                <div class="card border-0 shadow-sm">
                    <div class="card-header align-items-center">
                        <div class="row">
                            <div class="col">
                                <div class="font-weight-medium py-1"><?= $page ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="img">Select Image</label><small class="pl-5"><?php if (isset($_SESSION['user_img'])) { ?>
                                        <a href="media/user/img/<?= $_SESSION['user_img'] ?>" download>Download</a><?php } ?></small>
                                <input required type="file" name="image" id="img" class="form-control">
                            </div>
                            <div class="col text-right">
                                <button type="submit" name="submit" class=" px-4 btn btn-primary "><?= $page ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('include/footer.php');
        ?>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $auth->uploadProfileImg();
}
?>