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
$sql = "SELECT * FROM job;";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = 'SELECT * FROM job WHERE title="' . $search . '"';
}
$result = mysqli_query($conn, $sql);
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
        <div class="offset-md-3 padding-custome col-md-6">
            <div id="typeing">
                <div class="padding-find">
                    <h1 class="text-center change-text-size">Welcome To Job Portal <span class="potalcolor">!</span>
                    </h1>
                    <h5 class="text-center change-text-size2">Find <span id="element" class="find-color"></span></h5>
                </div>
            </div>
            <form class="input-group mb-3" action="http://localhost/jobportal/" method="GET">
                <input name="search" required type="text" class="form-control" placeholder="Find job..." value="<?php if (isset($_GET['search'])) {
                                                                                                                    echo $_GET['search'];
                                                                                                                } ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-warning search-btn-color" type="submit">Search</button>
                </div>
            </form>
        </div>
    </section>
    <?php if (!isset($_GET['search'])) { ?>
        <section>
            <div class="bg-light">
                <div class="owl-carousel owl-theme">
                    <img src="images/company/company1.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company2.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company3.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company4.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company5.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company6.png" alt="Company Image" class="image-size-set mx-5">
                    <img src="images/company/company7.png" alt="Company Image" class="image-size-set mx-5">
                </div>
            </div>
        </section>
    <?php } ?>
    <section>
        <div class="bg-white mx-4 my-5 row d-flex justify-content-center">
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="shadow-lg m-3 card rounded-lg rounded ">
                        <div class="card-body text-justify">
                            <?= $rows['description'] ?>
                        </div>
                        <div class="card-footer text-justify rounded find-color">
                            <a href="http://localhost/jobportal/jobdetails.php?id=<?= $rows['id'] ?>">
                                <h5>
                                    <?= $rows['title'] ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <?php
    include('jslink.php');
    ?>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                responsiveClass: true,
            });
        });

        var typed = new Typed('#element', {
            strings: ['Government Jobs', 'Railway Jobs', 'PIA Jobs', 'Police Jobs', 'OGDCL Jobs', 'WAPDA Jobs', 'Internships'],
            typeSpeed: 100,
            loop: true,
            backSpeed: 100,
            items: 4,
        });
    </script>
</body>

</html>