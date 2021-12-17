<html lang="en" class="h-100" dir="ltr">
<?php
session_start();
$page = "Setting";
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
                            <a href="http://localhost/jobportal/dashboard" class="text-muted">Home</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                                <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active text-dark">Settings</li>
                    </ol>
                </nav>

                <h2 class="mb-0 d-inline-block">Settings</h2>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-3">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="d-flex position-relative text-primary width-12 height-12 align-items-center justify-content-center my-3 mx-auto">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-6 height-6" viewBox="0 0 18 18">
                                        <path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0ZM9,9a3,3,0,1,1,3-3A3,3,0,0,1,9,9ZM9,5a1,1,0,1,0,1,1A1,1,0,0,0,9,5Zm6,10H3V13.47C3,11,7,9.89,9,9.89s6,1.08,6,3.58ZM5.31,13h7.38A7,7,0,0,0,9,11.88,7,7,0,0,0,5.31,13Z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="my-2 text-dark font-weight-medium font-size-lg">Account</div>

                                <a href="http://localhost/jobportal/dashboard/account.php" class="text-secondary text-decoration-none stretched-link mb-3">
                                    Update your account information
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-3">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="d-flex position-relative text-primary width-12 height-12 align-items-center justify-content-center my-3 mx-auto">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-6 height-6" viewBox="0 0 14 18">
                                        <path d="M1,16a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2V6a2,2,0,0,0-2-2H3A2,2,0,0,0,1,6ZM4,6h6a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V7A1,1,0,0,1,4,6Zm6.5-5L9.79.29A1,1,0,0,0,9.09,0H4.91a1,1,0,0,0-.7.29L3.5,1H1A1,1,0,0,0,1,3H13a1,1,0,0,0,0-2Z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="my-2 text-dark font-weight-medium font-size-lg">Delete account</div>

                                <a href="http://localhost/jobportal/dashboard/accountdelect.php" class="text-secondary text-decoration-none stretched-link mb-3">
                                    Delete your account and associated data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-3">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="d-flex position-relative text-primary width-12 height-12 align-items-center justify-content-center my-3 mx-auto">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-6 height-6" viewBox="0 0 18 18">
                                        <path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0ZM9,9a3,3,0,1,1,3-3A3,3,0,0,1,9,9ZM9,5a1,1,0,1,0,1,1A1,1,0,0,0,9,5Zm6,10H3V13.47C3,11,7,9.89,9,9.89s6,1.08,6,3.58ZM5.31,13h7.38A7,7,0,0,0,9,11.88,7,7,0,0,0,5.31,13Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="my-2 text-dark font-weight-medium font-size-lg">Change Password</div>
                                <a href="http://localhost/jobportal/dashboard/changepassword.php" class="text-secondary text-decoration-none stretched-link mb-3">
                                    Change Password on Login Account
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-3">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="d-flex position-relative text-primary width-12 height-12 align-items-center justify-content-center my-3 mx-auto">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-6 height-6" viewBox="0 0 18 18">
                                        <path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0ZM9,9a3,3,0,1,1,3-3A3,3,0,0,1,9,9ZM9,5a1,1,0,1,0,1,1A1,1,0,0,0,9,5Zm6,10H3V13.47C3,11,7,9.89,9,9.89s6,1.08,6,3.58ZM5.31,13h7.38A7,7,0,0,0,9,11.88,7,7,0,0,0,5.31,13Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="my-2 text-dark font-weight-medium font-size-lg">Profile Image</div>
                                <a href="http://localhost/jobportal/dashboard/uploadprofileimg.php" class="text-secondary text-decoration-none stretched-link mb-3">
                                    Upload Profile Image on Login Account
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-3">
                        <div class="card border-0 h-100 shadow-sm">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="d-flex position-relative text-primary width-12 height-12 align-items-center justify-content-center my-3 mx-auto">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-6 height-6" viewBox="0 0 18 18">
                                        <path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0ZM9,9a3,3,0,1,1,3-3A3,3,0,0,1,9,9ZM9,5a1,1,0,1,0,1,1A1,1,0,0,0,9,5Zm6,10H3V13.47C3,11,7,9.89,9,9.89s6,1.08,6,3.58ZM5.31,13h7.38A7,7,0,0,0,9,11.88,7,7,0,0,0,5.31,13Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="my-2 text-dark font-weight-medium font-size-lg">User CV</div>
                                <a href="http://localhost/jobportal/dashboard/uploadusercv.php" class="text-secondary text-decoration-none stretched-link mb-3">
                                    Upload CV on Login Account
                                </a>
                            </div>
                        </div>
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