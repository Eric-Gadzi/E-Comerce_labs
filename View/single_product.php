<?php
$product_title = $_GET['name'];
$product_desc = $_GET['description'];
$category_id = $_GET['category_id'];
$brand_id = $_GET['category_id'];
$product_id = $_GET['product_id'];
$product_price = $_GET['price'];
$keywords = $_GET['keywords'];
$product_image = "../images/Tux.jpg";
$category_name = $_GET['category_name'];
$brand = $_GET['brand'];
$product_id = $_GET['product_id'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1><?php echo $product_title ?></h1>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product_title ?></h5>
            <p class="card-text"><?php echo $product_desc ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: <?php echo $product_price ?></li>
            <li class="list-group-item">Category: <?php echo $category_name ?></li>
            <li class="list-group-item">Brand: <?php echo $brand ?></li>
        </ul>
        <div class="card-body">
           <?php echo "<td><a href='../actions/add_to_cart.php?name=$product_title&description=$product_desc&price=$product_price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category_id&product_id=$product_id&keywords=$keywords&category_name=$category_name&brand=$brand'  onclick = ''; class='btn btn-success btn-lg active' role='button' aria-pressed='true'><i class='bi bi-cart-fill'></i>Add to Cart</a></td>"; ?>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>