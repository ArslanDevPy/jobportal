<?php
include('../config.php');
$id = $_GET['id'];
$query = "select * from job where id = '$id';";
$result = mysqli_query($conn, $query);
$row = null;
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
}

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
            <li class="breadcrumb-item d-flex align-items-center">
                <a href="http://localhost/jobportal/dashboard/job.php" class="text-muted"><?= $page ?></a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item active text-dark">Edit <?= $page ?></li>
        </ol>
    </nav>

    <div class="d-flex">
        <div class="flex-grow-1">
            <h2 class="mb-3 d-inline-block">Edit <?= $page ?></h2>
        </div>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-header align-items-center">
            <form action="http://localhost/jobportal/dashboard/code/job/editjob.php" class="p-3" method="post" enctype="multipart/form-data">
                <label for="">Title</label>
                <input type="hidden" name="pimg" value="<?= $row['image'] ?>">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div class="input-group mb-3 ">
                    <input required type="text" value="<?= $row['title'] ?>" name="title" autofocus class="form-control" placeholder="First Name">
                </div>
                <label for="">Description</label>
                <div class="input-group mb-3">
                    <textarea required name="desc" class="form-control" placeholder="Description" maxlength="800" rows="5"><?= $row['description'] ?></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Select Image</label><small> <a href="media/job/<?= $row['image'] ?>"> View</a></small>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Select Category</label>
                        <div class="input-group mb-3 ">
                            <select required name="category" id="i_visibility" class="custom-select">
                                <option value="">Select</option>
                                <?php
                                $query = "select * from category;";
                                $result = mysqli_query($conn, $query);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?= $rows['id'] ?>" <?php if ($row['cateid'] == $rows['id']) {
                                                                            echo "selected";
                                                                        } ?>><?= $rows['title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Start Date</label>
                        <div class="input-group mb-3">
                            <input required type="tel" value="<?= $row['job_startdate'] ?>" name="start_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">End Date</label>
                        <div class="input-group mb-3 ">
                            <input required type="tel" value="<?= $row['job_enddate'] ?>" name="end_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <input required type="submit" class="btn btn-outline-primary pl-3 pr-3 mt-3" value="Update Job">
                </div>
            </form>
        </div>
    </div>
</div>