<?php
$username = 'root';
$password = '';
$db = 'jobportal';
$host = "localhost";
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
  die("Connection Faild");
}
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$users = 0;
while ($rows = mysqli_fetch_assoc($result)) {
  $users++;
}
if (!$users) {
  $users = 0;
}

$sql = "SELECT * FROM category;";
$result = mysqli_query($conn, $sql);
$category = 0;
while ($rows = mysqli_fetch_assoc($result)) {
  $category++;
}
if (!$category) {
  $category = 0;
}

$sql = "SELECT * FROM contact;";
$result = mysqli_query($conn, $sql);
$cont = 0;
while ($rows = mysqli_fetch_assoc($result)) {
  $cont++;
}
if (!$cont) {
  $cont = 0;
}

$sql = "SELECT * FROM job;";
$result = mysqli_query($conn, $sql);
$job = 0;
while ($rows = mysqli_fetch_assoc($result)) {
  $job++;
}
if (!$job) {
  $job = 0;
}

$sql = "SELECT * FROM jobapply;";
$result = mysqli_query($conn, $sql);
$jobapply = 0;
while ($rows = mysqli_fetch_assoc($result)) {
  $jobapply++;
}
if (!$jobapply) {
  $jobapply = 0;
}
$sql = "SELECT * FROM reqadmin ORDER BY created_at LIMIT 5 ;";
$result = mysqli_query($conn, $sql);
?>

<h4 class="mb-0">Overview</h4>
<div class="row mb-5">
  <div class="col-12 col-md-6 col-xl-3 mt-3">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
      <div class="card-body d-flex">
        <div class="d-flex position-relative text-primary width-10 height-10 align-items-center justify-content-center flex-shrink-0">
          <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 500 400">
            <path d="m405.378906 361.273438c-3.5-2.21875-8.132812-1.183594-10.351562 2.316406-18.730469 29.519531-50.753906 47.144531-85.664063 47.144531h-192.996093c-55.894532 0-101.367188-45.476563-101.367188-101.371094v-179.742187c0-4.140625-3.359375-7.5-7.5-7.5s-7.5 3.359375-7.5 7.5v179.742187c0 64.167969 52.203125 116.371094 116.367188 116.371094h192.996093c40.074219 0 76.835938-20.230469 98.328125-54.109375 2.21875-3.496094 1.183594-8.132812-2.3125-10.351562zm-65.9375-199.304688-57.183594 57.1875c-2.929687 2.929688-2.929687 7.679688 0 10.605469 1.460938 1.464843 3.382813 2.199219 5.300782 2.199219 1.917968 0 3.839844-.734376 5.304687-2.199219l57.183594-57.183594c2.929687-2.929687 2.929687-7.679687 0-10.609375-2.925781-2.925781-7.675781-2.925781-10.605469 0zm161.707032-124.957031-26.140626-26.140625c-14.46875-14.472656-38.015624-14.472656-52.484374 0l-27.136719 27.136718c-22.046875-24.25-52.945313-38.007812-86.023438-38.007812h-192.996093c-26.769532 0-52.90625 9.316406-73.597657 26.230469-20.398437 16.671875-34.667969 39.964843-40.171875 65.582031-.871094 4.050781 1.707032 8.039062 5.757813 8.910156.53125.109375 1.0625.167969 1.582031.167969 3.460938 0 6.570312-2.40625 7.324219-5.925781 4.796875-22.304688 17.222656-42.589844 35-57.121094 18.019531-14.730469 40.785156-22.84375 64.105469-22.84375h192.996093c29.046875 0 56.167969 12.179688 75.402344 33.628906l-79.757813 79.757813h-209.144531c-4.144531 0-7.503906 3.355469-7.503906 7.5 0 4.140625 3.359375 7.5 7.503906 7.5h194.144531l-35.960937 35.957031h-158.183594c-4.144531 0-7.503906 3.359375-7.503906 7.503906 0 4.140625 3.359375 7.5 7.503906 7.5h143.183594l-46.523437 46.523438c-13.480469 13.480468-24.511719 29.027344-32.78125 46.207031l-21.347657 44.347656c-5.90625 12.277344-3.5 26.433594 6.132813 36.066407 6.125 6.125 14.082031 9.328124 22.222656 9.328124 4.65625 0 9.375-1.050781 13.839844-3.199218l21.515625-10.355469c.003906-.003906.011719-.003906.015625-.007813l22.820312-10.980468c17.175782-8.269532 32.722656-19.300782 46.207032-32.78125l139.585937-139.585938v129.453125c0 8.214844-.984375 16.382813-2.925781 24.28125-.988282 4.023438 1.472656 8.082031 5.496094 9.070313.601562.148437 1.203124.21875 1.792968.21875 3.375 0 6.4375-2.289063 7.277344-5.710938 2.230469-9.066406 3.359375-18.441406 3.359375-27.859375v-144.453125l20.847656-20.847656c.003907-.003906.003907-.003906.003907-.007812.003906 0 .003906 0 .003906-.003907l54.558594-54.554687c14.46875-14.472656 14.46875-38.015625 0-52.484375zm-327.0625 323.09375c-7.828126 3.769531-14.921876.808593-18.953126-3.21875-4.027343-4.03125-6.988281-11.125-3.21875-18.953125l6.328126-13.152344c5.28125 4.222656 10.40625 8.800781 15.300781 13.695312 4.894531 4.894532 9.472656 10.019532 13.695312 15.300782zm44.347656-21.34375-17.355469 8.351562c-5.144531-6.671875-10.8125-13.128906-16.929687-19.242187-6.117188-6.117188-12.574219-11.789063-19.242188-16.929688l8.351562-17.355468c5.765626-11.972657 13-23.070313 21.582032-33.125l56.71875 56.71875c-10.054688 8.578124-21.152344 15.816406-33.125 21.582031zm44.078125-31.84375-57.410157-57.410157 168.164063-168.167968 57.410156 57.410156zm178.773437-178.773438-57.410156-57.410156 18.515625-18.515625 57.414063 57.410156zm49.257813-49.257812-20.132813 20.132812-57.410156-57.410156 20.128906-20.132813c4.3125-4.3125 9.972656-6.464843 15.636719-6.464843 5.660156 0 11.324219 2.152343 15.632813 6.464843l26.140624 26.140626c8.621094 8.621093 8.621094 22.648437.003907 31.269531zm-394.679688 13.539062h234.007813c4.140625 0 7.5-3.355469 7.5-7.5s-3.359375-7.5-7.5-7.5h-234.007813c-4.144531 0-7.503906 3.355469-7.503906 7.5s3.359375 7.5 7.503906 7.5zm0 0">
            </path>
          </svg>
        </div>

        <div class="flex-grow-1"></div>
        <div class="d-flex align-items-center h2 font-weight-bold mb-0 text-truncate">
          <?= $job ?>
        </div>
      </div>
      <div class="card-footer bg-base-2 border-0">
        <a href="http://localhost/jobportal/dashboard/job.php" class="text-muted font-weight-medium d-inline-flex align-items-baseline">Job Posts <svg xmlns="http://www.w3.org/2000/svg" class="width-3 height-3 fill-current ml-2" viewBox="0 0 7.41 12">
            <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
          </svg></a>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-xl-3 mt-3">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
      <div class="card-body d-flex">
        <div class="d-flex position-relative text-primary width-10 height-10 align-items-center justify-content-center flex-shrink-0">
          <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 500 400">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-4 mr-3" viewBox="0 0 500 500">
              <g xmlns="http://www.w3.org/2000/svg">
                <path d="m429.038 288.141v-19.728c0-13.004-10.58-23.584-23.584-23.584h-5.595v-128.553c0-4.137-3.354-7.491-7.491-7.491s-7.491 3.354-7.491 7.491v128.552h-27.021l-5.324-16.258c-3.182-9.716-12.189-16.244-22.413-16.244h-104.628c-10.224 0-19.231 6.528-22.412 16.244l-1.615 4.932-1.615-4.932c-3.182-9.716-12.189-16.244-22.413-16.244h-105.967v-195.192c0-1.186.965-2.151 2.152-2.151h309.105c1.186 0 2.151.965 2.151 2.151v64.448c0 4.137 3.354 7.491 7.491 7.491s7.491-3.354 7.491-7.491v-64.448c0-9.447-7.686-17.134-17.134-17.134h-309.105c-9.448 0-17.134 7.687-17.134 17.134v195.193h-5.594c-13.004 0-23.584 10.579-23.584 23.584v153.771c0 4.137 3.354 7.491 7.491 7.491s7.491-3.354 7.491-7.491v-153.772c0-4.743 3.858-8.601 8.601-8.601h126.543c3.729 0 7.014 2.381 8.175 5.925l7.014 21.418c1.008 3.078 3.88 5.159 7.119 5.159h205.711c4.743 0 8.602 3.859 8.602 8.602v18.053c-.113 0-.224-.009-.337-.009-39.135 0-70.973 31.838-70.973 70.973s31.838 70.973 70.973 70.973c.113 0 .224-.008.337-.009v60.022c0 4.743-3.859 8.601-8.602 8.601h-354.561c-4.743 0-8.601-3.858-8.601-8.601v-63.482c0-4.137-3.354-7.491-7.491-7.491s-7.491 3.354-7.491 7.491v63.482c0 13.004 10.58 23.584 23.584 23.584h354.562c13.004 0 23.584-10.58 23.584-23.584v-61.697c31.793-7.025 55.654-35.415 55.654-69.289s-23.862-62.264-55.655-69.289zm-215.518-43.312 3.797-11.595c1.161-3.543 4.445-5.924 8.174-5.924h104.627c3.729 0 7.014 2.381 8.175 5.924l3.797 11.595zm200.199 168.591c-30.873 0-55.99-25.117-55.99-55.99s25.117-55.99 55.99-55.99 55.99 25.117 55.99 55.99-25.117 55.99-55.99 55.99z"></path>
                <path d="m456.287 343.328c-1.465-4.509-5.289-7.734-9.981-8.416l-14.856-2.158-6.644-13.463c-2.098-4.25-6.346-6.892-11.087-6.892s-8.989 2.641-11.087 6.892l-6.644 13.463-14.856 2.158c-4.691.682-8.516 3.906-9.981 8.415s-.266 9.365 3.129 12.673l10.75 10.479-2.538 14.798c-.801 4.672 1.084 9.306 4.92 12.093 2.167 1.574 4.703 2.374 7.255 2.374 1.965 0 3.94-.474 5.765-1.434l13.288-6.986 13.287 6.985c4.196 2.207 9.186 1.847 13.021-.94 3.835-2.786 5.72-7.42 4.919-12.093l-2.538-14.797 10.749-10.478c3.395-3.308 4.594-8.164 3.129-12.673zm-25.323 13.385c-2.914 2.841-4.243 6.932-3.555 10.943l1.873 10.923-9.81-5.157c-3.602-1.894-7.903-1.894-11.506 0l-9.81 5.157 1.874-10.923c.688-4.01-.641-8.101-3.556-10.944l-7.936-7.736 10.968-1.594c4.028-.585 7.508-3.114 9.309-6.764l4.905-9.938 4.904 9.938c1.801 3.651 5.281 6.179 9.309 6.765l10.967 1.594z"></path>
                <path d="m352.969 135.246h-249.592c-4.137 0-7.491 3.354-7.491 7.491s3.354 7.491 7.491 7.491h249.592c4.137 0 7.491-3.354 7.491-7.491s-3.354-7.491-7.491-7.491z"></path>
                <path d="m352.969 171.513h-249.592c-4.137 0-7.491 3.354-7.491 7.491s3.354 7.491 7.491 7.491h249.592c4.137 0 7.491-3.354 7.491-7.491s-3.354-7.491-7.491-7.491z"></path>
                <path d="m115.298 111.984c2.71 0 5.59-.644 8.504-2.261 5.919-3.286 9.597-9.597 9.597-16.468v-44.63c0-4.135-3.352-7.487-7.487-7.487s-7.487 3.352-7.487 7.487v44.63c0 1.435-.725 2.728-1.891 3.376-3.046 1.692-5.856-2.722-8.123-3.933-2.952-1.577-6.34-1.333-8.78 1.064-2.942 2.89-2.993 7.619-.109 10.572 4.25 4.35 9.48 7.65 15.776 7.65z"></path>
                <path d="m252.454 41.138h-16.221c-4.135 0-7.487 3.352-7.487 7.487v55.841c0 4.135 3.352 7.487 7.487 7.487h19.053c12.416 0 22.517-10.131 22.517-22.584 0-6.916-3.136-13.111-8.059-17.245 1.918-3.102 3.045-6.742 3.045-10.65.001-11.213-9.122-20.336-20.335-20.336zm-8.733 14.975h8.733c2.956 0 5.362 2.406 5.362 5.362s-2.406 5.362-5.362 5.362c-1.201 0-8.733.015-8.733.015zm11.566 40.866h-11.566v-15.143c.944-.004 11.566-.01 11.566-.01 4.159 0 7.543 3.384 7.543 7.544 0 4.195-3.383 7.609-7.543 7.609z"></path>
                <path d="m217.555 76.546c0-19.524-15.884-35.407-35.407-35.407-19.524 0-35.408 15.884-35.408 35.407s15.884 35.408 35.408 35.408c19.523 0 35.407-15.884 35.407-35.408zm-55.84 0c0-11.267 9.166-20.433 20.433-20.433s20.433 9.166 20.433 20.433-9.166 20.434-20.433 20.434c-11.267-.001-20.433-9.167-20.433-20.434z"></path>
              </g>
            </svg>
          </svg>
        </div>

        <div class="flex-grow-1"></div>
        <div class="d-flex align-items-center h2 font-weight-bold mb-0 text-truncate">
          <?= $jobapply ?>
        </div>
      </div>
      <div class="card-footer bg-base-2 border-0">
        <a href="http://localhost/jobportal/dashboard/jobapply.php" class="text-muted font-weight-medium d-inline-flex align-items-baseline">Job Apply <svg xmlns="http://www.w3.org/2000/svg" class="width-3 height-3 fill-current ml-2" viewBox="0 0 7.41 12">
            <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
          </svg></a>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-xl-3 mt-3">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
      <div class="card-body d-flex">
        <div class="d-flex position-relative text-primary width-10 height-10 align-items-center justify-content-center flex-shrink-0">
          <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 600 600">
            <path d="m220 0h-200c-11.046875 0-20 8.953125-20 20v200c0 11.046875 8.953125 20 20 20h200c11.046875 0 20-8.953125 20-20v-200c0-11.046875-8.953125-20-20-20zm-20 200h-160v-160h160zm299.65625 73.523438c-7.472656-3.097657-16.078125-1.386719-21.796875 4.332031l-200 200c-5.722656 5.722656-7.433594 14.324219-4.335937 21.796875 3.097656 7.476562 10.386718 12.347656 18.476562 12.347656h200c11.046875 0 20-8.953125 20-20v-200c0-8.089844-4.871094-15.382812-12.34375-18.476562zm-27.65625 198.476562h-131.714844l131.714844-131.714844zm-80-232c66.167969 0 120-53.832031 120-120s-53.832031-120-120-120-120 53.832031-120 120 53.832031 120 120 120zm0-200c44.113281 0 80 35.886719 80 80s-35.886719 80-80 80-80-35.886719-80-80 35.886719-80 80-80zm-157.859375 266.144531-85.855469 85.855469 85.855469 85.855469c7.8125 7.8125 7.8125 20.476562 0 28.285156-7.808594 7.808594-20.472656 7.8125-28.28125 0l-85.859375-85.855469-85.859375 85.859375c-7.808594 7.808594-20.472656 7.808594-28.28125 0-7.8125-7.8125-7.8125-20.476562 0-28.285156l85.855469-85.859375-85.855469-85.855469c-7.8125-7.8125-7.8125-20.476562 0-28.285156 7.808594-7.8125 20.472656-7.8125 28.28125 0l85.859375 85.855469 85.859375-85.859375c7.808594-7.808594 20.472656-7.808594 28.28125 0 7.8125 7.8125 7.8125 20.476562 0 28.289062zm0 0">
            </path>
          </svg>
        </div>

        <div class="flex-grow-1"></div>
        <div class="d-flex align-items-center h2 font-weight-bold mb-0 text-truncate">
          <?= $category ?>
        </div>
      </div>
      <div class="card-footer bg-base-2 border-0">
        <a href="http://localhost/jobportal/dashboard/category.php" class="text-muted font-weight-medium d-inline-flex align-items-baseline">Category <svg xmlns="http://www.w3.org/2000/svg" class="width-3 height-3 fill-current ml-2" viewBox="0 0 7.41 12">
            <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
          </svg></a>
      </div>
    </div>
  </div>


  <div class="col-12 col-md-6 col-xl-3 mt-3">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
      <div class="card-body d-flex">
        <div class="d-flex position-relative text-primary width-10 height-10 align-items-center justify-content-center flex-shrink-0">
          <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 500 500">
            <path d="M482.763,379.323l-81.704-48.905l-0.254-21.704c10.298-13.386,17.657-28.793,21.596-45.216    c0.727-3.807,2.56-7.314,5.271-10.083c6.771-6.827,10.58-16.047,10.6-25.663v-26.283c0.023-5.62-1.279-11.166-3.8-16.188    l-1.504-3.004c-1.32-2.684-2.016-5.633-2.033-8.625v-37.804c-0.041-37.308-30.275-67.542-67.583-67.583h-13.055    c-12.954-26.099-39.558-42.623-68.695-42.667h-51.2c-29.137,0.043-55.742,16.567-68.695,42.667H148.65    c-37.308,0.041-67.542,30.275-67.583,67.583v37.804c-0.014,2.966-0.698,5.89-2,8.554l-1.5,3.008    c-2.544,5.039-3.859,10.609-3.837,16.254v26.283c0.02,9.616,3.83,18.837,10.604,25.663c2.713,2.778,4.547,6.294,5.271,10.108    c3.85,16.195,11.123,31.378,21.329,44.529v22.371l-81.708,48.908C11.149,390.255,0.073,409.811,0,430.931v46.933    c0,4.713,3.82,8.533,8.533,8.533h213.31l0.023,0.004l0.028-0.004h68.212l0.028,0.004l0.023-0.004h213.31    c4.713,0,8.533-3.82,8.533-8.533v-46.933C511.926,409.806,500.845,390.247,482.763,379.323z M403.914,352.018l-14.829,14.829    l-18.352-11.017l19.918-11.951c0.375,0.269,0.68,0.609,1.082,0.848L403.914,352.018z M355.037,237.294    c7.642-7.601,11.926-17.943,11.896-28.721V178.24c-0.006-6.305-1.474-12.524-4.287-18.167l-1.763-3.521    c-1.631-3.271-2.481-6.875-2.483-10.529v-43.625c-0.017-5.745-0.68-11.47-1.978-17.067h6.928    c27.886,0.032,50.484,22.63,50.517,50.517v37.804c0.024,5.614,1.324,11.149,3.8,16.188l1.575,3.142    c1.312,2.636,1.984,5.544,1.963,8.488v26.283c-0.008,5.092-2.021,9.977-5.604,13.596c-5.079,5.132-8.53,11.649-9.921,18.733    c-3.524,14.134-9.955,27.378-18.883,38.887c-1.809,2.685-2.782,5.846-2.796,9.083v19.914l-29.849,17.909l-29.884-17.94    l-0.008-26.479c11.702-15.338,19.978-33.008,24.271-51.817C349.435,244.973,351.699,240.678,355.037,237.294z M256,370.465    l15.534,15.534l-11.272,15.066h-8.525l-11.272-15.066L256,370.465z M220.346,381.981l-46.881-25.577l22.914-13.756    c0.161-0.094,0.276-0.235,0.433-0.333l44.243,18.961L220.346,381.981z M270.945,361.276l44.23-18.956    c0.127,0.079,0.22,0.194,0.35,0.27l23.01,13.815l-46.881,25.577L270.945,361.276z M162.133,178.24    c0.003-3.656,0.854-7.262,2.487-10.533l1.754-3.512c2.816-5.644,4.285-11.864,4.292-18.171v-43.625    c0.037-32.974,26.759-59.696,59.733-59.733h51.2c32.974,0.037,59.696,26.759,59.733,59.733v43.625    c0.006,6.305,1.474,12.524,4.287,18.167l1.762,3.521c1.631,3.271,2.481,6.875,2.483,10.529v30.333    c0.015,6.257-2.474,12.26-6.913,16.671c-5.707,5.748-9.586,13.056-11.15,21.004c-3.857,16.439-11.159,31.872-21.425,45.279    c-2.057,2.88-3.168,6.328-3.179,9.867v25.779L256,349.115l-51.2-21.942v-25.779c-0.017-3.579-1.154-7.062-3.25-9.963    c-10.234-13.381-17.512-28.781-21.354-45.183c-1.566-7.955-5.452-15.27-11.167-21.021c-4.43-4.408-6.912-10.405-6.896-16.654    V178.24z M106.325,260.106c-1.389-7.093-4.84-13.618-9.921-18.758c-3.585-3.617-5.601-8.503-5.608-13.596v-26.283    c-0.019-2.969,0.666-5.901,2-8.554l1.571-3.146c2.458-5.018,3.745-10.529,3.766-16.117v-37.804    c0.032-27.886,22.63-50.485,50.517-50.517h6.928c-1.297,5.597-1.961,11.322-1.978,17.067v43.625    c-0.003,3.656-0.854,7.262-2.487,10.533l-1.754,3.512c-2.816,5.644-4.285,11.864-4.292,18.171v30.333    c-0.028,10.786,4.262,21.135,11.913,28.737c3.33,3.381,5.588,7.67,6.492,12.329c4.284,18.791,12.558,36.441,24.262,51.754    l-0.037,26.563l-29.848,17.919L128,327.966v-19.914c-0.032-3.354-1.076-6.62-2.996-9.371    C116.168,287.258,109.807,274.122,106.325,260.106z M120.238,344.744c0.412-0.245,0.724-0.592,1.108-0.867l19.921,11.953    l-18.352,11.017l-14.829-14.829L120.238,344.744z M59.733,469.331H17.067v-38.4c0.055-15.13,7.99-29.138,20.938-36.966    l54.985-32.911l14.845,14.845l-14.955,8.978c-20.493,12.393-33.053,34.564-33.146,58.513V469.331z M76.8,469.331l0-25.941    c-0.06-17.998,9.399-34.688,24.871-43.883l48.838-29.32l56.654,99.144H76.8z M220.257,457.85l-46.889-82.056l44.411,24.229    c3.324,1.812,7.444,1.219,10.121-1.458l0.372-0.372l9.564,12.78L220.257,457.85z M234.182,469.331l19.2-51.2h5.236l19.2,51.2    H234.182z M274.164,410.972l9.564-12.78l0.372,0.372c2.677,2.677,6.797,3.271,10.121,1.458l44.411-24.229l-46.889,82.056    L274.164,410.972z M304.837,469.331l56.654-99.145l48.83,29.316c15.476,9.195,24.938,25.886,24.879,43.888l0,25.941H304.837z     M494.933,469.331h-42.667V443.39c-0.094-23.952-12.657-46.125-33.154-58.517l-14.947-8.974l14.846-14.846l54.972,32.902    c12.954,7.828,20.893,21.84,20.95,36.975V469.331z" />
          </svg>
        </div>

        <div class="flex-grow-1"></div>
        <div class="d-flex align-items-center h2 font-weight-bold mb-0 text-truncate">
          <?= $users ?>
        </div>
      </div>
      <div class="card-footer bg-base-2 border-0">
        <a href="http://localhost/jobportal/dashboard/user.php" class="text-muted font-weight-medium d-inline-flex align-items-baseline">User <svg xmlns="http://www.w3.org/2000/svg" class="width-3 height-3 fill-current ml-2" viewBox="0 0 7.41 12">
            <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
          </svg></a>
      </div>
    </div>
  </div>


  <div class="col-12 col-md-6 col-xl-3 mt-3">
    <div class="card border-0 shadow-sm h-100 overflow-hidden">
      <div class="card-body d-flex">
        <div class="d-flex position-relative text-primary width-10 height-10 align-items-center justify-content-center flex-shrink-0">
          <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-35">
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 500 500">
            <g xmlns="http://www.w3.org/2000/svg">
              <path d="M490.114,12.813H132.568c-12.012,0.014-21.746,9.748-21.76,21.76v98.62l-16.35-24.525     c-7.484-11.289-22.535-14.676-34.133-7.68l-33.638,20.224c-11.016,6.464-19.097,16.946-22.545,29.244     c-12.271,44.681-3.166,121.66,109.824,234.667C203.821,474.885,270.816,499.06,316.99,499.06     c10.69,0.049,21.339-1.34,31.659-4.13c12.293-3.448,22.775-11.518,29.252-22.519l20.198-33.673     c6.968-11.589,3.584-26.609-7.68-34.091l-80.546-53.692c-11.049-7.308-25.859-4.905-34.031,5.521l-23.45,30.148     c-2.451,3.226-6.897,4.166-10.445,2.21l-4.463-2.458c-14.686-8.004-32.964-17.971-69.879-54.886     c-3.994-3.994-7.612-7.731-11.008-11.307h333.517c11.982,0.009,21.713-9.676,21.76-21.658V34.573     C511.86,22.561,502.126,12.827,490.114,12.813z M229.318,401.362l4.335,2.381c10.897,6.093,24.614,3.266,32.213-6.639     l23.45-30.148c2.666-3.396,7.49-4.179,11.093-1.801l80.546,53.692c3.659,2.439,4.759,7.321,2.5,11.093l-20.198,33.673     c-4.218,7.233-11.071,12.553-19.123,14.848c-40.337,11.093-110.933,1.707-218.078-105.446S9.56,195.273,20.627,154.97     c2.293-8.051,7.61-14.903,14.839-19.123l33.673-20.207c3.773-2.254,8.652-1.155,11.093,2.5l53.717,80.546     c2.382,3.602,1.599,8.43-1.801,11.093l-30.157,23.458c-9.903,7.597-12.731,21.311-6.639,32.205l2.389,4.335     c8.533,15.65,19.14,35.123,57.805,73.779C194.212,382.213,213.677,392.828,229.318,401.362z M494.808,298.526     c-0.028,2.567-2.127,4.627-4.693,4.608H141.203c-11.083-12.674-20.64-26.604-28.476-41.506l-2.458-4.48     c-1.96-3.54-1.022-7.982,2.202-10.428l30.157-23.458c10.43-8.17,12.833-22.982,5.521-34.031l-20.275-30.43V34.573     c-0.014-1.249,0.476-2.451,1.359-3.334c0.883-0.883,2.085-1.373,3.334-1.359h357.547c1.249-0.014,2.451,0.476,3.334,1.359     c0.883,0.883,1.373,2.085,1.359,3.334V298.526z" />
              <path d="M460.725,52.323l-142.618,108.16c-4.035,2.932-9.499,2.932-13.534,0L162.008,52.323     c-3.756-2.849-9.111-2.113-11.959,1.643c-2.849,3.756-2.113,9.111,1.643,11.959l142.583,108.151     c10.144,7.494,23.989,7.494,34.133,0L471.034,65.925c1.805-1.368,2.992-3.398,3.299-5.642c0.307-2.244-0.29-4.518-1.661-6.321     C469.824,50.213,464.478,49.48,460.725,52.323z" />
              <path d="M238.517,174.793l-87.415,93.611c-3.214,3.447-3.025,8.848,0.422,12.062c3.447,3.214,8.848,3.025,12.062-0.422     l87.416-93.653c2.888-3.484,2.553-8.617-0.762-11.698C246.924,171.612,241.78,171.656,238.517,174.793z" />
              <path d="M384.728,174.793c-3.214-3.447-8.614-3.637-12.062-0.422c-3.447,3.214-3.637,8.614-0.422,12.062l87.39,93.611     c3.214,3.447,8.614,3.637,12.062,0.422c3.447-3.214,3.637-8.614,0.422-12.062L384.728,174.793z" />
            </g>
          </svg>
        </div>

        <div class="flex-grow-1"></div>
        <div class="d-flex align-items-center h2 font-weight-bold mb-0 text-truncate">
          <?= $cont ?>
        </div>
      </div>
      <div class="card-footer bg-base-2 border-0">
        <a href="http://localhost/jobportal/dashboard/contacts.php" class="text-muted font-weight-medium d-inline-flex align-items-baseline">Contacts <svg xmlns="http://www.w3.org/2000/svg" class="width-3 height-3 fill-current ml-2" viewBox="0 0 7.41 12">
            <path d="M0,1.41,4.58,6,0,10.59,1.41,12l6-6-6-6Z"></path>
          </svg></a>
      </div>
    </div>
  </div>

</div>
<h4>Permote Request</h4>
<div class="card">
  <div class="card-title p-4">
    <h5>Permote Request List</h5>
  </div>
  <div class="card-body">
    <div class="list-group list-group-flush my-n3">
      <table class="table">
        <thead>
          <tr>
            <th>User Name</th>
            <th>Message</th>
            <th>Request Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($rows = mysqli_fetch_assoc($result)) {
            $query = "select * from users where id = '" . $rows['userid'] . "'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) === 1) {
              $row = mysqli_fetch_assoc($result);
            }
            if ($row['is_company'] || $row['is_admin']) {
              continue;
            }
          ?>
            <tr>
              <td><?= $row['username'] ?></td>
              <td><?= $rows['message'] ?></td>
              <td><?= $rows['created_at'] ?></td>
              <td>
                <a href="http://localhost/jobportal/dashboard/code/reqcompany/permotetocompany.php?id=<?= $row['id'] ?>" class="text-center btn btn-outline-primary btn-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-5 height-5" viewBox="0 0 400 400">
                    <g xmlns="http://www.w3.org/2000/svg">
                      <path d="M333.988,11.758l-0.42-0.383C325.538,4.04,315.129,0,304.258,0c-12.187,0-23.888,5.159-32.104,14.153L116.803,184.231   c-1.416,1.55-2.49,3.379-3.154,5.37l-18.267,54.762c-2.112,6.331-1.052,13.333,2.835,18.729c3.918,5.438,10.23,8.685,16.886,8.685   c0,0,0.001,0,0.001,0c2.879,0,5.693-0.592,8.362-1.76l52.89-23.138c1.923-0.841,3.648-2.076,5.063-3.626L336.771,73.176   C352.937,55.479,351.69,27.929,333.988,11.758z M130.381,234.247l10.719-32.134l0.904-0.99l20.316,18.556l-0.904,0.99   L130.381,234.247z M314.621,52.943L182.553,197.53l-20.316-18.556L294.305,34.386c2.583-2.828,6.118-4.386,9.954-4.386   c3.365,0,6.588,1.252,9.082,3.53l0.419,0.383C319.244,38.922,319.63,47.459,314.621,52.943z" />
                      <path d="M303.85,138.388c-8.284,0-15,6.716-15,15v127.347c0,21.034-17.113,38.147-38.147,38.147H68.904   c-21.035,0-38.147-17.113-38.147-38.147V100.413c0-21.034,17.113-38.147,38.147-38.147h131.587c8.284,0,15-6.716,15-15   s-6.716-15-15-15H68.904c-37.577,0-68.147,30.571-68.147,68.147v180.321c0,37.576,30.571,68.147,68.147,68.147h181.798   c37.576,0,68.147-30.571,68.147-68.147V153.388C318.85,145.104,312.134,138.388,303.85,138.388z" />
                    </g>
                  </svg>
                </a>
                <a href="http://localhost/jobportal/dashboard/code/reqcompany/delrequestcompany.php?id=<?= $rows['id'] ?>" class="text-center btn btn-outline-danger btn-sm">
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