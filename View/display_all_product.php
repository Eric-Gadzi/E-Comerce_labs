<?php
require_once("../functions/product_function.php");
require_once("../functions/brand_functions.php");
require_once("../functions/category_functions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

    <title>All Product</title>
</head>

<body>
    <h1>All Products</h1>

    <!-- Optional JavaScript; choose one of the two! -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Price (GHC)</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>

            <?php selectAllProducts_table(); ?>;

        </tbody>
    </table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Modal -->
    <div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Successful</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../actions/add_product.php" method="GET">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $_GET['name'] ?>" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_description" class="form-label">Product Description</label>
                            <input type="text" class="form-control" name="product_description" id="product_description" aria-describedby="emailHelp"
                            value="<?php echo $_GET['description'];?>" required>
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

                </div>

                <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ok</button>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>