<html lang="en" class="h-100" dir="ltr">
<?php
session_start();
$page = "Accounts";
include('auth/auth.php');
$auth = new Auth();
include('code/config.php');
$sql = "SELECT * FROM category;";
$cats = mysqli_query($conn, $sql);

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
    $row = $auth->getUserInfo();
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
                        <li class="breadcrumb-item active text-dark">Account </li>
                    </ol>
                </nav>

                <div class="d-flex">
                    <h2 class="mb-3 text-break">Account</h2>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        <div class="font-weight-medium py-1">
                            Account
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <div class="col text-center">
                                <small class="text-success" id='message'>
                                </small>
                            </div>
                            <h6 class="border p-2 bg-light">Personal Information</h6>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="first_name">First Name</label>
                                    <input required type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" value="<?= $row['first_name']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="last_name">Last Name</label>
                                    <input required type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" value="<?= $row['last_name']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="gender">Gender</label>
                                    <select required name="gender" id="gender" class="custom-select">
                                        <option value="" <?php if (!$row['gender']) {
                                                                echo "selected";
                                                            } ?>>Select</option>
                                        <option <?php if ($row['gender'] == "Mail") {
                                                    echo "selected";
                                                } ?> value="Mail">Mail</option>
                                        <option <?php if ($row['gender'] == "Femail") {
                                                    echo "selected";
                                                } ?> value="Femail">Femail</option>
                                        <option <?php if ($row['gender'] == "Other") {
                                                    echo "selected";
                                                } ?> value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="i_email">Email</label>
                                    <input required type="email" disabled name="email" id="email" class="form-control" value="<?= $row['email'] ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="country">Country Name</label>
                                    <input required type="text" id="country" name="country" placeholder="Country Name" class="form-control" value="<?= $row['country'] ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city">City Name</label>
                                    <input required type="text" id="city" name="city" placeholder="city Name" class="form-control" value="<?= $row['city'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input required type="text" name="address" id="address" placeholder="Enter Address" class="form-control" value="<?= $row['address'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="gender">Select Job Category</label>
                                <select required name="jobselect" id="gender" class="custom-select">

                                    <option value="">Select</option>
                                    <?php
                                    while ($r = mysqli_fetch_assoc($cats)) {
                                    ?>
                                        <option <?php if ($row['jobselect'] == $r['id']) {
                                                    echo "selected";
                                                } ?> value="<?= $r['id'] ?>"><?= $r['title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-right">
                                    <button type="submit" name="submit" class=" px-4 btn btn-primary">Save</button>
                                </div>
                                <div class="col-auto">
                                </div>
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
    $auth->updateAccount();
}
?>