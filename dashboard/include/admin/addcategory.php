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
                <a href="http://localhost/jobportal/dashboard/category.php" class="text-muted">
                    <?php echo $page ?>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-3 height-3 mx-3 text-muted" viewBox="0 0 7.41 12">
                    <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
                </svg>
            </li>
            <li class="breadcrumb-item active text-dark">Add
                <?php echo $page ?>
            </li>
        </ol>
    </nav>

    <div class="d-flex">
        <div class="flex-grow-1">
            <h2 class="mb-3 d-inline-block">Add New
                <?php echo $page ?>
            </h2>
        </div>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="card-header align-items-center">
            <form action="http://localhost/jobportal/dashboard/code/category/addcategory.php" class="p-3" method="post">

                <div class="input-group mb-3">
                    <input required type="text" name="title" autofocus class="form-control" placeholder="Title">
                </div>
                <div class="input-group mb-3">
                    <textarea required name="desc" id="" cols="30" class="form-control" placeholder="Description" rows="10"></textarea>
                </div>
                <div class="col text-center">
                    <input type="submit" class="btn btn-outline-primary pl-3 pr-3 mt-3" value="Add <?php echo $page ?>">
                </div>
            </form>
        </div>
    </div>
</div>