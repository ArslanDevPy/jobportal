<div class="container py-3 my-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
            <li class="breadcrumb-item d-flex align-items-center">
                <a href="http://localhost/jobportal/dashboard/" class="text-muted">Dashboard</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item d-flex align-items-center">
                <a href="http://localhost/jobportal/dashboard/user.php" class="text-muted">users</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item active text-dark">Add User</li>
        </ol>
    </nav>

    <div class="d-flex">
        <div class="flex-grow-1">
            <h2 class="mb-3 d-inline-block">Add New User</h2>
        </div>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-header align-items-center">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="p-3" method="post">

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
                        <select required name="role" id="i_visibility" class="custom-select">
                            <option value="user" selected>user</option>
                            <option value="company">company</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                </div>
                <div class="col text-center">
                    <input required type="submit" class="btn btn-outline-primary pl-3 pr-3 mt-3" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('code/user/adduser.php');
}
?>