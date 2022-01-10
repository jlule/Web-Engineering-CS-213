

<html>
<head>
  <title>Checkout Form</title>
</head>
<body>
   <h2> Your Order Summary. </h2>
     <p> First Name: <?php echo $_GET["first"]; ?></p><br>
     <p> Last Name: <?php echo $_GET["last"]; ?></p><br>
     <p> Address: <?php echo $_GET["address"]; ?></p><br>
     <p> Cellphone: <?php echo $_GET["phone"]; ?></p><br>
     <p> Wired earphones :<?php echo $_GET["qty1"] * 14.99; ?></p><br>
     <p> Wireless earbuds: <?php echo $_GET["qty2"] *24.99; ?></p><br>
     <p> Wired headphones: <?php echo $_GET["qty3"] *15.99; ?></p><br>
     <p> Wireless headphones: <?php echo $_GET["qty4"] *34.99; ?></p><br>
     <p> Card-Type: <?php echo $_GET['pay']; ?></p><br> 
     <p> Expiration: <?php echo $_GET['expdate']; ?></p><br>
     <h3> Total: <?php echo $_GET['total']; ?></h3><br>                         
     
     
     
   <form id="purchased_form" action="assign11_a.php" method="get">
      <h2>Confirm Purchase?</h2>
              <input type="submit" name="confirm" value="Comfirm">
              <input type="submit" name="cancel" value="Cancel">
              <br><br><br>
            </form>
          </div>
          <footer>
           
          </footer>
      </body>
</html>
