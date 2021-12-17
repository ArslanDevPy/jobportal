<?php
$page = "contact";
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Job Portal - Register </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('navbar.php'); ?>
    <section>
        <div class="offset-md-1 p-5 col-md-10">
            <div class="card p-2 shadow-lg rounded">
                <div class="card-title pt-3">
                    <h1 class="text-center find-color">Contact Us</h1>
                </div>
                <div class="card-body text-justify">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea et quia cumque sed ut dolorem,
                        ducimus voluptatum? Eveniet facilis error unde nulla, quia ea perferendis, enim, suscipit
                        voluptates reiciendis minus!
                    </p>
                    <div class="row">
                        <div class=" col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5422.374382484744!2d74.31004753827845!3d31.443468743689053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391906cbd12a8403%3A0x568e8ad71dab1c6d!2sMinhaj%20University%20Lahore!5e0!3m2!1sen!2s!4v1625211948976!5m2!1sen!2s" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-6">
                            <form action="http://localhost/jobportal/code/contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input required type="text" name="first_name" class=" m-2 form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input required type="text" name="last_name" class="m-2 form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input required type="email" name="email" class="m-2 form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input required type="text" name="subject" class="m-2 form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <textarea required name="message" cols="30" class="m-2 form-control" placeholder="Message" rows="9"></textarea>
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-outline-warning search-btn-color" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('jslink.php'); ?>
</body>

</html>