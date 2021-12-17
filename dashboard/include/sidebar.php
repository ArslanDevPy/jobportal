<?php
if (!isset($_SESSION['is_authenticated'])) {
  echo "<script>location.href = 'http://localhost/jobportal/login.php';</script>";
}
?>
<div id="header" class="header sticky-top shadow bg-base-0 z-1025 d-lg-none">
  <div class="container-fluid">
    <nav class="navbar navbar-light px-0 py-3">
      <a href="http://localhost/jobportal/dashboard/" aria-label="phpShort" class="navbar-brand p-0">
        <div class="logo d-flex">
          <img src="../images/logo.png">
        </div>
      </a>
      <button class="slide-menu-toggle navbar-toggler border-0 p-0" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
</div>

<nav class="slide-menu shadow bg-base-0 ct navbar navbar-light p-0 d-flex flex-column z-1025" id="slide-menu">
  <div class="sidebar-section flex-grow-1 d-flex flex-column w-100">
    <div>
      <div class="pl-4 py-3 d-flex align-items-center">
        <a href="http://localhost/jobportal/dashboard/" aria-label="phpShort" class="navbar-brand p-0">
          <div class="logo">
            <img src="../images/logo.png">
          </div>
        </a>
        <div class="close slide-menu-toggle cursor-pointer d-lg-none d-flex align-items-center ml-auto px-4 py-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3" viewBox="0 0 16 16">
            <path d="M14.8,0a1.2,1.2,0,0,1,.85,2.05L9.7,8l5.95,5.95a1.2,1.2,0,0,1-1.7,1.7L8,9.7,2.05,15.65a1.2,1.2,0,0,1-1.7-1.7L6.3,8,.35,2.05A1.2,1.2,0,1,1,2.05.35L8,6.3,13.95.35A1.2,1.2,0,0,1,14.8,0Z">
            </path>
          </svg>
        </div>
      </div>
    </div>

    <div class="sidebar-section flex-grow-1 overflow-auto sidebar">
      <hr>
      <div class="nav d-block text-truncate">
        <?php
        if ($_SESSION["is_admin"]) {
          include('admin/navitems.php');
        } else if ($_SESSION['is_company']) {
          include('company/navitems.php');
        } else {
          include('user/navitems.php');
        }
        ?>
      </div>
    </div>
    <div class="sidebar sidebar-footer">
      <div class="py-3 pl-4 pr-0 d-flex align-items-center" aria-expanded="true">
        <a href="http://localhost/jobportal/dashboard/setting.php" class="d-flex align-items-center overflow-hidden text-secondary text-decoration-none flex-grow-1">
          <img src="media/user/img/<?= $_SESSION['user_img'] ?>" class="flex-shrink-0 rounded-circle width-9 height-9 mr-3">

          <div class="d-flex flex-column text-truncate">
            <div class="font-weight-medium text-dark text-truncate">
              <?php echo $_SESSION['username'] ?>
            </div>

            <div class="small font-weight-medium">
              Settings
            </div>
          </div>
        </a>
        <a class="py-2 px-4 d-flex flex-shrink-0 align-items-center text-secondary" href="auth/logout.php" data-enable="tooltip" title="Logout" data-original-title="Logout"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4" viewBox="0 0 18 18">
            <path d="M7.79,13.29a1,1,0,0,0,1.41,0L12.79,9.7a1,1,0,0,0,0-1.41L9.2,4.7A1,1,0,1,0,7.79,6.11L9.67,8H1a1,1,0,0,0,0,2H9.67L7.79,11.88A1,1,0,0,0,7.79,13.29ZM16,0H2A2,2,0,0,0,0,2V5A1,1,0,0,0,2,5V3A1,1,0,0,1,3,2H15a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V13a1,1,0,0,0-2,0v3a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0Z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</nav>