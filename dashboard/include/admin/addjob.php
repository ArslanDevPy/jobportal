<?php
include('code/config.php');
$sql = "SELECT * FROM category;";
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
            <li class="breadcrumb-item d-flex align-items-center">
                <a href="http://localhost/jobportal/dashboard/job.php" class="text-muted"><?= $page ?></a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item active text-dark">Add <?= $page ?></li>
        </ol>
    </nav>

    <div class="d-flex">
        <div class="flex-grow-1">
            <h2 class="mb-3 d-inline-block">Add <?= $page ?></h2>
        </div>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-header align-items-center">
            <form action="http://localhost/jobportal/dashboard/code/job/addjob.php" class="p-3" method="post" enctype="multipart/form-data">
                <label for="">Title</label>
                <div class="input-group mb-3 ">
                    <input required type="text" name="title" autofocus class="form-control" placeholder="First Name">
                </div>
                <label for="">Description</label>
                <div class="input-group mb-3">
                    <textarea required name="desc" class="form-control" placeholder="Description" maxlength="800" rows="5"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Select Image</label>
                        <div class="input-group mb-3">
                            <input required type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Select Category</label>
                        <div class="input-group mb-3 ">
                            <select required name="category" id="i_visibility" class="custom-select">
                                <option value="" selected>Select</option>
                                <?php
                                $i = 0;
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    $i++;
                                ?>
                                    <option value="<?= $rows['id'] ?>"><?= $rows['title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Start Date</label>
                        <div class="input-group mb-3">
                            <input required type="datetime-local" name="start_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">End Date</label>
                        <div class="input-group mb-3 ">
                            <input required type="datetime-local" name="end_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <input required type="submit" class="btn btn-outline-primary pl-3 pr-3 mt-3" value="Create Job">
                </div>
            </form>
        </div>
    </div>
</div>