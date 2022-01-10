<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Order</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-with, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assign11style.css">
  </head>
  <body>
    <br><br>
  <p>   <?php
    if (isset($_GET['confirm'])) {
      echo "The order has been confirmed!";
    }
    else if (isset($_GET['cancel'])) {
      echo "The order has been cancelled!";
    }
  ?>
  </p>
    <br><br><br>
    <a href="assign11.html">Purchase Again</a><br><br><br>
    
  </body>
</html>
