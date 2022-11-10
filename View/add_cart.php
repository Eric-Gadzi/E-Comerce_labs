<?php
include("../functions/brand_functions.php");
include("../functions/category_functions.php");

    $product_title = $_GET['name'];
    $product_desc = $_GET['description'];
    $category_id = $_GET['category_id'];
    $brand_id = $_GET['brand_id'];
    $product_id = $_GET['product_id'];
    $product_price = $_GET['price'];
    $keywords = $_GET['keywords'];
    $product_image = " ";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Add Product</title>
</head>

<body style="margin: 5% 40%;">
    <h1>Edit Product</h1>

   

    <form action="../actions/add_to_cart.php" method="GET">
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" value="<?php echo $product_title; ?>" class="form-control" name="name" id="product_name" aria-describedby="emailHelp" required>
            <input type="hidden" value="<?php echo $product_id; ?>" class="form-control" name="product_id" id="product_id" aria-describedby="emailHelp" readonly required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <input type="text" value="<?php echo $product_desc;?>" class="form-control" name="description" id="product_description" aria-describedby="emailHelp" readonly required>
        </div>
        <div class="mb-3">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" class="form-control" value="<?php echo $keywords;?>" name="keywords" id="product_keywords" aria-describedby="emailHelp" readonly required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" value="<?php echo $product_price;?>" name="price" id="price" aria-describedby="emailHelp" readonly required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Quantity</label>
            <input type="number" class="form-control" value="" name="qty"  aria-describedby="emailHelp" required>
        </div>
        <input type="hidden" class="form-control" name="category_id"  aria-describedby="emailHelp" value="<?php echo $category_id ?>" required>
        <input type="hidden" class="form-control" name="brand_id"  aria-describedby="emailHelp" value="<?php echo $brand_id ?>" required>
        <input type="hidden" class="form-control" name="category_id"  aria-describedby="emailHelp" value="<?php echo $category_id ?>" required>
        


        <div class="input-group mb-3">
            <label class="input-group-text" name="category" for="product_category">Product Category</label>
            <select class="form-select" name="category_id" id="product_category" disabled required>
                <option selected>Choose Category..</option>
                <!-- <option value="1">One</option> -->
                <?php category_dropDown_selected($category_id); ?>

            </select>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="product_brand">Product Brand</label>
            <select class="form-select" name="brand_id" id="product_brand" disabled required>
                <option selected>Choose Brand..</option>
                <?php brand_dropdown_selected($brand_id); ?>
            </select>
        </div>

        <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
</body>

</html>