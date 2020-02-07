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
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$org = $_POST['org'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$crisis = $_POST['crisis'];
$crisisData = $_POST['crisisData'];
$industry = $_POST['industry'];
$services = $_POST['services'];
$servicesString = implode(", ", $services);
$referral = $_POST['referral'];
$consult = $_POST['consult'];


//Display the form data
echo "<div>";
echo "<br><br><br><h1>Thank you for contacting Dayside LLC!</h1>";
echo "<p>Someone will contact you within 2-3 business days to learn 
more about how we may be able to help assist with your leadership 
and change management needs.</p>";
echo "</div>";


//Send email to owner
$fromAddress = "dayside@gmail.com";
$toAddress = "Dhaas3@mail.greenriver.edu";
$subject = "New Consult Request";
$headers = "Consultation request from <$email>";
$message = "Name: $fname $lname\r\n";
$message .= "Organization: $org\r\n";
$message .= "Location: $city $state\r\n";
$message .= "Phone: $phone\r\n";
$message .= "Email: $email\r\n\r\n";
$message .= "Crisis: $crisis\r\n";
$message .= "Crisis Explanation: $crisisData\r\n\r\n";
$message .= "Industry type: $industry\r\n";
$message .= "Services: $servicesString\r\n";
$message .= "Referral: $referral\r\n";
$message .= "Preferred Consultation Form: $consult\r\n";
mail($toAddress, $fromAddress, $message, $headers);

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