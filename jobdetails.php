<!doctype html>
<html lang="en">
<?php
session_start();
$username = 'root';
$password = '';
$db = 'jobportal';
$host = "localhost";
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection Faild");
}

$query = "select * from job where id ='" . $_GET['id'] . "';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
}
?>

<head>
    <title>Job Portal </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <section>
        <div class="m-5">
            <div class="card">
                <div class="card-body">
                    <div class="row m-3">
                        <div class="col-md-6">
                            <img class="figure-img img-fluid rounded" src="dashboard/media/job/<?= $row['image'] ?>" alt="">
                        </div>

                        <div class="col-md-6">
                            <h3 class="p-2"><?= $row['title'] ?>
                            </h3>
                            <p><?= $row['description'] ?></p>
                            <div class="col text-center p-5">
                                <?php if (isset($_SESSION['id'])) {
                                    $query = "select * from jobapply where userid ='" . $_SESSION['id'] . "';";
                                    $result = mysqli_query($conn, $query);
                                    $applyjob = null;
                                    if (mysqli_num_rows($result) === 1) {
                                        $applyjob = mysqli_fetch_assoc($result);
                                    }
                                    if (!($applyjob['jobid'] == $row['id'])) {
                                ?>
                                        <form action="http://localhost/jobportal/code/applyjob.php?id=<?= $row['id'] ?>" method="post">
                                            <button type="submit" class="btn-lg btn-primary">Apply Now
                                            </button>
                                        </form>
                                    <?php } else { ?>
                                        <h4>Applyed</h4>
                                    <?php }
                                } else { ?>
                                    <a href="http://localhost/jobportal/login.php" class="btn btn-primary">First Login </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('jslink.php');
    ?>
</body>

</html>