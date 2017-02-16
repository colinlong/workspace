<?php include 'head.php' ?>
  

  <body>
        <?php include 'nav.php' ?>
        <div class="container">
        <form action="addBrands.php" method="post" class="form-signin">
          <div class="wrapper">
            <h1 class="form-signin-heading" id="format">Enter Brand</h1>
    
            <label for="brandName">Brand:</label>
            <input type="text" name="brandName" class="form-control" placeholder="e.g., Knoll" autofocus required maxlength="255"/>
    
            <label for="origin">Origin:</label>
            <input type="text" name="origin" class="form-control" placeholder="e.g., United States" required maxlength="255"/>
    
            <label for="leadtime">Lead Time:</label>
            <input type="text" name="leadtime" class="form-control" placeholder="e.g., 10-12 weeks"required maxlength="255"/>
    
            <label for="warehouse">Warehouse:</label>
            <input type="text" name="warehouse" class="form-control" placeholder="e.g., East Greenville, PA"required maxlength="255"/>
            
            <label for="repname">Rep Name:</label>
            <input type="text" name="repname" class="form-control" placeholder="e.g., Mike Ippoliti" maxlength="255"/>
            
            <label for="repcontact">Rep Contact:</label>
            <input type="text" name="repcontact" class="form-control" placeholder="e.g., mippoliti@knoll.com, 215-989-9900" maxlength="255"/>
    
            <button type="submit" class="btn btn-lg btn-primary btn-block submitit">Submit</button>
          </div><!-- wrapper -->
      </form>
    </div>
  </body>
</html>