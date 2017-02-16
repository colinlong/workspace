<?php

include 'dbConnection.php';

$brandName = $_POST['brandName'];
$origin = $_POST['origin'];
$leadtime = $_POST['leadtime'];
$warehouse = $_POST['warehouse'];
$repname = $_POST['repname'];
$repcontact = $_POST['repcontact'];
$sql = "INSERT INTO brands (brandName, origin, leadtime, warehouse, repname, repcontact)
VALUES ('$brandName', '$origin', '$leadtime', '$warehouse', '$repname', '$repcontact')";

include 'head.php';
?>


  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New brand entered successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Brand: <?php echo $brandName ?><br>
      Origin: <?php echo $origin ?><br>
      Lead Time: <?php echo $leadtime ?><br>
      Warehouse: <?php echo $warehouse ?><br>
      Rep Name: <?php echo $repname ?><br>
      Rep Contact: <?php echo $repcontact ?><br>

    </div>
  </body>
</html>