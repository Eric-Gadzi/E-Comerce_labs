<?php 
  require("../functions/brand_functions.php");
  require("../functions/category_functions.php");
  require("../functions/product_function.php");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shopping More</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <?php 
    session_start();

    if(!isset($_SESSION['customer_id'])){
      echo "<a class='btn btn-warning mb-3' href='../login/login.php' role='button'>Sign in</a><br>

        <a class='btn btn-primary mb-3' href='../login/register.php' role='button'>Sign Up</a><br>";
    }
  ?>

    


  <!-- Button trigger modal -->
  <?php 
  
      echo AdminButtons();
      
      display_add_product_btn();
  ?>
      
  
  <?php

      display_brands();

      display_category();
         
  ?>

  <!-- Modal Brand-->
  <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add A Product Brand</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../actions/add_brand.php" method="get">
            <h3>Add A Product Brand</h3>
            <div class="col-md-6 mb-3">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="brand_name" id="lname" placeholder="Brand Name">
                <label for="lname">Brand Name</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name = "add_brand" class="btn btn-success">Add Brand</button>
        </div>
        </form>
      </div>
    </div>
  </div>


    <!-- Modal Category-->
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add A Product Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../actions/add_category.php" method="get">
            <h3>Add A Product Category</h3>
            <div class="col-md-6 mb-3">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="category_name" id="lname" placeholder="Brand Name">
                <label for="lname">Category Name</label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name = "add_category" class="btn btn-success">Add Category</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>