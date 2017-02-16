<!-- phpmyadmin-ctl install -->

<?php
include 'dbConnection.php';

$sql = "SELECT objects.id AS objects_id, objects.name AS objectName, type, cost, price, finish,
        brands.brandName AS BrandName, origin, leadtime, warehouse, repname, repcontact
        FROM objects JOIN brands on objects.brand_id = brands.id";
//'SELECT * FROM objects JOIN brands on objects.brand_id = brands.id';  

$result = $conn->query($sql);

?>

<?php include 'head.php' ?>
    
    <body>
        <?php include 'nav.php' ?>
        <div class="container">
        <?php
            if ($result->num_rows>0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<strong>" . $row['objectName'] . "</strong>" . " - " . $row['BrandName'] . " <br> " . $row['origin'] . " | " . $row['leadtime'] .
                        " | " . $row['warehouse'] . " | " . $row['repname'] . " | " . $row['repcontact'] . "<hr>";
                    }
            }
          ?>
        
        </div><!--container-->
        
    </body>
</html>