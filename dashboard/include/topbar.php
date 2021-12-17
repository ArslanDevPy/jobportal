<div class="bg-base-1 flex-fill">
  <div class="bg-base-0">
    <div class="container py-5">
      <div class="d-flex">
        <div class="row no-gutters w-100">
          <div class="d-flex col-12 col-md">
            <div class="flex-shrink-1">
              <a href="" class="d-block"><img src="media/user/img/<?= $_SESSION['user_img'] ?>" class="rounded-circle width-16 height-16"></a>
            </div>
            <div class="flex-grow-1 d-flex align-items-center ml-3">
              <div>
                <h4 class="font-weight-medium mb-0"><?= $_SESSION['full_name'] ?></h4>
                <div class="text-muted mt-2">
                  <div class="d-inline-block mr-4">
                    <div class="d-flex">
                      <div class="d-inline-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4" viewBox="0 0 18 18">
                          <path d="M2.75,0a1,1,0,0,0-.86.5L.14,3.5A1,1,0,0,0,0,4V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V4a1,1,0,0,0-.14-.5L16.11.5a1,1,0,0,0-.86-.5Zm.57,2H8V4H2.16ZM10,2h4.68l1.16,2H10ZM2,6H16V16H2ZM6,8v2h6V8Z">
                          </path>
                        </svg>
                      </div>
                      <div class="d-inline-block ml-2">
                        <a class="text-dark text-decoration-none">
                          <?php
                          if ($_SESSION["is_admin"]) {
                            echo "Admin";
                          } elseif ($_SESSION['is_company']) {
                            echo "Company";
                          } else {
                            echo "User";
                          }
                          ?>
                          <?php
                          if ($_SESSION['is_verify']) {
                            echo "<span class='badge badge-success'>Verify</span></a>";
                          } else {
                            echo "<span class='badge badge-danger'>Not Verify</span></a>";
                          }
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-auto d-flex flex-row-reverse align-items-center">
            <?php

            if ($_SESSION['is_admin'] || $_SESSION['is_company']) {
              echo '<a href="http://localhost/jobportal/dashboard/addjob.php"
                      class="btn btn-primary btn-block d-flex justify-content-center align-items-center mt-4 mt-md-0"><svg
                        xmlns="http://www.w3.org/2000/svg" class="width-4 height-4 fill-current mr-2" viewBox="0 0 14 14">
                        <path d="M13,8H8v5a1,1,0,0,1-2,0V8H1A1,1,0,0,1,1,6H6V1A1,1,0,0,1,8,1V6h5a1,1,0,0,1,0,2Z"></path>
                      </svg>Create New Post</a>
                      ';
            } else {
              include("../code/config.php");
              $id = $_SESSION['id'];
              $sql = 'select * from reqadmin where userid="' . $id . '";';
              $result = mysqli_query($conn, $sql);
              $users = 0;
              while ($rows = mysqli_fetch_assoc($result)) {
                $users++;
              }
              if (!$users) {
                echo '<a href="http://localhost/jobportal/dashboard/requestcompany.php" class="btn btn-primary btn-block d-flex justify-content-center align-items-center mt-4 mt-md-0">Requesrt To Company Account</a>';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>