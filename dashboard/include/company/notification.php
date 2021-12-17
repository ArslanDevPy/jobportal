<?php
$username = 'root';
$password = '';
$db = 'jobportal';
$host = "localhost";
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection Faild");
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM Notification WHERE userid='$id';";
$result = mysqli_query($conn, $sql);
?>
<div class="container py-3 my-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-0 bg-transparent font-weight-medium mb-0">
            <li class="breadcrumb-item d-flex align-items-center">
                <a href="http://localhost/jobportal/dashboard/" class="text-muted">Dashboard</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item active text-dark"><?php echo $page ?></li>
        </ol>
    </nav>

    <div class="d-flex">
        <div class="flex-grow-1">
            <h2 class="mb-3 d-inline-block"><?php echo $page ?></h2>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header align-items-center">
            <div class="row">
                <div class="col">
                    <div class="font-weight-medium py-1"><?php echo $page ?></div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="list-group list-group-flush my-n3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $rows['title'] ?></td>
                                <td><?= $rows['message'] ?></td>
                                <td>
                                    <a href="http://localhost/jobportal/dashboard/code/delnotification.php?id=<?= $rows['id'] ?>" class="text-center btn btn-outline-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 400 400">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M335.94,114.944H71.581c-2.86-0.243-5.694,0.702-7.837,2.612c-2.107,2.024-3.083,4.954-2.612,7.837l27.167,236.669     c3.186,26.093,25.436,45.647,51.722,45.453h131.657c27.026,0.385,49.791-20.104,52.245-47.02l22.465-236.147     c0.139-2.533-0.811-5.005-2.612-6.792C341.634,115.646,338.8,114.701,335.94,114.944z M303.026,359.45     c-1.642,15.909-15.366,27.803-31.347,27.167H140.022c-15.694,0.637-29.184-11.024-30.825-26.645L83.075,135.842h241.371     L303.026,359.45z" />
                                                    <path d="M374.079,47.026H266.454V30.307c0.58-16.148-12.04-29.708-28.188-30.288c-0.53-0.019-1.061-0.024-1.591-0.014h-65.829     c-16.156-0.299-29.494,12.555-29.793,28.711c-0.01,0.53-0.005,1.061,0.014,1.591v16.718H33.442     c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449h340.637c5.771,0,10.449-4.678,10.449-10.449     S379.849,47.026,374.079,47.026z M245.556,30.307v16.718h-83.592V30.307c-0.589-4.579,2.646-8.768,7.225-9.357     c0.549-0.071,1.104-0.086,1.656-0.047h65.829c4.605-0.326,8.603,3.142,8.929,7.748C245.643,29.203,245.627,29.758,245.556,30.307     z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>