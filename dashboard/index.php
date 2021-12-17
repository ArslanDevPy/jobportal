<?php
  session_start();
  $page = "home";

?>
<html lang="en" class="h-100" dir="ltr">

<head>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
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
    <?php
      include('include/topbar.php');
    ?>
    <div class="bg-base-2">
      <div class="container py-3 my-3">
      <?php
        if ($_SESSION["is_admin"]){
          include('include/admin/home.php');
        }
        elseif($_SESSION['is_company']){
          include('include/company/home.php'); 
        }
        else{
          include('include/user/home.php'); 
        }
        ?>
      </div>
    </div>
    <?php
      include('include/footer.php');
    ?>
  </div>
</body>

</html>