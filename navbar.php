<section class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost/jobportal/">
            <img src="images/logo.png" alt="logo" width="80" class="px-2">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse nav-setting navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 set-nav-itme-font-size">
                <li class="nav-item <?php if ($page == "home") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link fort-nav-item" href="http://localhost/jobportal/">Home</a>
                </li>
                <li class="nav-item <?php if ($page == "about") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link fort-nav-item" href="http://localhost/jobportal/about.php">about us</a>
                </li>
                <li class="nav-item <?php if ($page == "contact") {
                                        echo "active";
                                    } ?>">
                    <a class="nav-link fort-nav-item" href="http://localhost/jobportal/contact.php">Contact Us</a>
                </li>
                <?php
                if (!isset($_SESSION['is_authenticated'])) {
                ?>
                    <li class="nav-item <?php if ($page == "register") {
                                            echo "active";
                                        } ?>">
                        <a class="nav-link fort-nav-item" href="http://localhost/jobportal/register.php">Register</a>
                    </li>
                    <li class="nav-item <?php if ($page == "login") {
                                            echo "active";
                                        } ?>">
                        <a class="nav-link fort-nav-item" href="http://localhost/jobportal/login.php">Login</a>
                    </li>
                <?php } ?>
                <?php if (isset($_SESSION['is_authenticated'])) { ?>
                    <li class="nav-item">
                        <a href="http://localhost/jobportal/dashboard/" class="nav-link fort-nav-item">
                            <img src="dashboard/media/user/img/<?= $_SESSION['user_img'] ?>" width="20px" alt="Logo">
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</section>