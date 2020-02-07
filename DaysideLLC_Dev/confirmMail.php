<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DAYSIDE LLC</title>

    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">
            <img class="img" width="60" src="img/dayside-logo.jpeg" alt="logo">
            <div class="d-inline-flex" id="logo-title">DAYSIDE LLC</div>
        </a>
        <!-- button with toggler classes see bootstrap 04_08
             can put button on other side of <a></a> and it will be on other side-->
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold
            bg-primary text-white rounded" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i>
        </button>
        <!-- div with collapse classes for nav items see bootstrap 04_08-->
        <!-- <div class="navbar-nav> check if we should add>-->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php/#about">About Dayside</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php/#services">Services</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php/#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br><br><br><br><br>

<?php

//Get the form data
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Display the form data
echo "<p>Thank you, $fname, for signing up to receive fresh ideas and free advice 
    on leadership, management, and organizational change. You will receive quick 
    and practical information delivered right to your inbox.</p>";

//Send email to client
$fromAddress = "dayside@gmail.com";
$toAddress = $email;
$subject = "Dayside Mailing List";
$headers = "You requested to be put on a mailing list from <$fromAddress>";
$messageOut = "Thank you for signing up to receive fresh ideas and free advice on
    leadership, management, and organizational change. You will receive quick and
    practical information delivered right to your inbox.\r\n";
$messageOut .= "\r\nIf you would like a free quote for consultation services, please
    follow the consultation button (https://stormchasers.greenriverdev.com/305/Development/DaysideLLC_Dev/daysideForm2.html).\r\n\r\n";
$messageOut .= "Name: $fname $lname\r\n";
$messageOut .= "Address: $address\r\n";
$messageOut .= "To unsubscribe, please go to http://www.unscubscribe@daysidellc.com\r\n";
mail($toAddress, $subject, $messageOut, $headers);

// Send email to owner
$fromAddress2 = "dayside@gmail.com";
$toAddress2 = "Dhaas3@mail.greenriver.edu";
$subject2 = "New Dayside Mailing List Client";
$headers2 = "Mailing list request from <$email>";
$messageOut2 = "Name: $fname $lname\r\n";
$messageOut2 .= "Email: $email\r\n";
$messageOut2 .= "Phone: $phone\r\n";
$messageOut2 .= "Message: $message\r\n";
mail($toAddress2, $fromAddress2, $messageOut2, $headers2);

?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

<!-- car -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>