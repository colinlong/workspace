<!-- THIS WILL BE CHANGED / LEARNED NEXT CLASS -->

<?php
include 'dbConnection.php';

//brand Query for related data dropdown
$sql = "SELECT id, brandName FROM brands";

$brands = $conn->query($sql);


include 'head.php';
?>


  <body>
        <?php include 'nav.php' ?>
        <div class="container">
        <form action="addObjects.php" method="post" class="form-signin">
        <div class="wrapper">
          <h1 class="form-signin-heading">Enter Object</h1>
  
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" placeholder="e.g., Aeron Task Chair" autofocus required maxlength="255"/>
  
          <label for="brand_id">Brand:</label>
            <select name="brand_id" class="form-control" required>
              <option value="" disabled selected>Select brand</option>
              <?php
                if ($brands-> num_rows > 0) {
                  //output data of each row
                  while($brand = $brands->fetch_assoc()){
                    echo "<option value='" . $brand["id"] ."'";
                    echo ">" . $brand["brandName"] . "</option>";
                  }
                }
              ?>
            </select>
<!--          <input type="text" name="city" class="form-control" placeholder="e.g., Knoll" required/> -->
  
          <label for="type">Type:</label>
          <input type="text" name="type" class="form-control" placeholder="e.g., Office" required maxlength="255"/>
  
          <label for="cost">Cost:</label>
          <input type="number" name="cost" class="form-control" placeholder="e.g., 329.50" required maxlength="11"/>
          
          <label for="price">Price:</label>
          <input type="number" name="finish" class="form-control" placeholder="e.g., 1200.00"required maxlength="11"/>
          
          <label for="finish">Finish:</label>
          <input type="text" name="finish" class="form-control" placeholder="e.g., powder-coated metals, textiles, flex-plastic"required maxlength="255"/>
  
          <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        </div> <!-- wrapper -->
    
      </form>
    </div>
  </body>
</html>