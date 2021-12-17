<?php
$username = 'root';
$password = '';
$db = 'jobportal';
$host = "localhost";
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection Faild");
}
$sql = "SELECT * FROM jobapply;";
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
                            <th>User Name</th>
                            <th>Job Name</th>
                            <th>join Date</th>
                            <?php if(isset($_SESSION['is_company'])||isset($_SESSION['is_admin'])){ ?>
                                <th>Status</th>
                                <th>Change Status</th>
                                <?php } ?>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rows = mysqli_fetch_assoc($result)) {
                            
                            $query = "select * from users where id = '" . $rows['userid'] . "'";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) === 1) {
                                $user = mysqli_fetch_assoc($result);
                            }
                            $query = "SELECT * FROM job WHERE id = '" . $rows['jobid'] . "'";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) === 1) {
                                $job = mysqli_fetch_assoc($result);
                            }
                        ?>
                            <tr>
                                <td><?= $user['username'] ?></td>
                                <td><?= $job['title'] ?></td>
                                <td><?= $job['title'] ?></td>
                                <td><?= $rows['created_at'] ?></td>
                                <?php if(isset($_SESSION['is_company'])||isset($_SESSION['is_admin'])){ ?>
                                <td><?php
                                    if($rows['is_padding']){
                                        echo "<span style = 'color:blue'>Padding</span>";
                                    }
                                    else if($rows['is_select']){
                                        echo "<span style = 'color:red'>Selected</span>";
                                    }
                                    else{
                                        echo "<span style = 'color:red'>Not Selected</span>";
                                    }
                                    ?></td>
                                <td>
                                    <a href="https://localhost/jobportal/dashboard/code/jobapply/select.php?id=<?= $rows['id']?>&user=<?=$rows['userid']?>&job=<?=$job['title']?>">Seleted</a>
                                    <a href="https://localhost/jobportal/dashboard/code/jobapply/notselect.php?id=<?= $rows['id']?>&user=<?=$rows['userid']?>&job=<?=$job['title']?>">Not Seleted</a>
                                    <a href="https://localhost/jobportal/dashboard/code/jobapply/padding.php?id=<?= $rows['id']?>&user=<?=$rows['userid']?>&job=<?=$job['title']?>">Padding</a>
                                </td>
                                <?php } ?>
                                <td>
                                    <a href="http://localhost/jobportal/dashboard/editapplyjob.php?id=<?= $rows['id']?>" class="text-center btn btn-outline-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 400 400">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231   c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685   c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176   C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99   L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386   c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z" />
                                                <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904   c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15   s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798   c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://localhost/jobportal/dashboard/code/jobapply/deljobapply.php?id=<?= $rows['id'] ?>" class="text-center btn btn-outline-danger btn-sm">
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