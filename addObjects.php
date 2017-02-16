<?php

include 'dbConnection.php';

$name= $_POST['name'];
$type = $_POST['type'];
$brand_id = $_POST['brand_id'];
$cost = $_POST['cost'];
$price = $_POST['price'];
$finish = $_POST['finish'];
$sql = "INSERT INTO objects (name, type, brand_id, cost, price, finish)
VALUES ('$name', '$type', '$brand_id', '$cost', '$price', '$finish')";





include 'head.php';
?>


  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New object entered successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Name: <?php echo $name ?><br>
      Type: <?php echo $type ?><br>
      Brand: <?php echo $brand_id ?><br>
      Cost: <?php echo $cost ?><br>
      Price: <?php echo $price ?><br>
      Finish: <?php echo $finish ?><br>

    </div>
  </body>
</html>