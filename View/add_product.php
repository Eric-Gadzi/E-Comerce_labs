<?php 
    include("../functions/brand_functions.php");
    include("../functions/category_functions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Product</title>
</head>

<body style="margin: 5% 40%;">
    <h1>Add Product</h1>

    <form action="../actions/add_product.php" method="GET">
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="product_description" id="product_description" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" class="form-control" name="product_keywords" id="product_keywords" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="emailHelp" required>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" name = "category" for="product_category">Product Category</label>
            <select class="form-select" name="category" id="product_category" required>
                <option selected>Choose Category..</option>
                <!-- <option value="1">One</option> -->
                <?php category_dropDown(); ?>
                
            </select>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="product_category">Product Brand</label>
            <select class="form-select" name="brand" id="product_category" required>
                <option selected>Choose Brand..</option>
                <?php brand_dropdown(); ?>
            </select>
        </div>

        <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>