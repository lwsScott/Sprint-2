<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>
    <h1>Thank you for your interest</h1>
    <?php
    /*
    var_dump($_POST);
    array(7) {
        ["firstName"]=>
  string(3) "Lew"
        ["lastName"]=>
  string(5) "Scott"
        ["address"]=>
  string(10) "my address"
        ["method"]=>
  string(6) "pickup"
        ["toppings"]=>
  array(1) {
            [0]=>
    string(9) "pepperoni"
  }
  ["size"]=>
  string(6) "medium"
        ["terms"]=>
  string(2) "on"
    */

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $address = $_POST['address'];
    $toppings = $_POST['toppings'];
    $toppingsString = implode(", ", $toppings);
    $size = $_POST['size'];

    echo "<h1>Thanks you for your order, $fname</h1>";
    echo "<h2>Order Summary</h2>";
    echo "<p>First Name:  $fname</p>";
    echo "<p>Last Name:  $lname</p>";
    echo "<p>Address:  $address</p>";
    echo "<p>Toppings:  $toppingsString</p>";
    echo "<p>Size:  $size</p>";

    // send e-mail
    $fromAddress = "poppa@gmail.com";
    $toAddress = "Lscott19@mail.greenriver.edu";
    $subject = "Order Confirmation";
    $headers = "From:  Poppa's Pizza <$fromAddress>";
    $message = "Your order has been confirmed";
    mail($toAddress, $subject, $message, $headers);

    ?>

</body>
</html>