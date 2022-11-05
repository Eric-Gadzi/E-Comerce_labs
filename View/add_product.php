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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

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
            <label class="input-group-text" name="category" for="product_category">Product Category</label>
            <select class="form-select" name="category" id="product_category" required>
                <option selected>Choose Category..</option>
                <!-- <option value="1">One</option> -->
                <?php category_dropDown(); ?>

            </select>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="product_brand">Product Brand</label>
            <select class="form-select" name="brand" id="product_brand" required>
                <option selected>Choose Brand..</option>
                <?php brand_dropdown(); ?>
            </select>
        </div>

        <button type="submit" name="add_product" class="btn btn-primary" onclick="ajax()">Submit</button>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Successful</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <i class="bi bi-check-circle-fill bi-align-center icon-large" style="font-size:1000%;color:green;"></i>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function ajax() {
            event.preventDefault();

            let name = document.getElementById("product_name").value;
            var desc = document.getElementById("product_description").value;
            var keyword = document.getElementById("product_keywords").value;
            var price = document.getElementById("price").value;
            var category = document.getElementById("product_category").value;
            var brand = document.getElementById("product_brand").value;

            var xhttp = new XMLHttpRequest();


            xhttp.onload = function() {
                var result = this.responseText;
                if (result === "success") {
             
                    $('#exampleModalCenter').modal('show');
                } else {
                    alert("could not insert data");
                }
            };
            xhttp.open("GET", `../actions/add_product.php?product_name=${name}&product_description=${desc}&product_keywords=${keyword}&price=${price}&category=${category}&brand=${brand}&add_product=add_product`, true);
            xhttp.send();
        }
    </script>

</body>

</html>