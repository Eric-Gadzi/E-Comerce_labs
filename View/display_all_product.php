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
    <button type="submit" name="add_product" class="btn btn-primary" onclick="window.location.href= '../View/index.php';">Back To Home</button>
    <!-- Optional JavaScript; choose one of the two! -->
    <table d="dtBasicExample" `class`="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Price (GHC)</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
                <th scope="col">Edit</th>
                <th scope="col">View</th>
                <th scope="col">Cart</th>


            </tr>
        </thead>
        <tbody>
            <form>
                <div `class`="input-group mb-3">
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" aria-label="Product Name" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" name="search" id="button-addon2">Search</button>
                </div>
            </form>


            <?php
            if (isset($_GET['search'])) {
                searchAProduct($_GET['product_name']);
            } else {
                selectAllProducts_table();
            }
            ?>
            <script>
                // Basic example
                $(document).ready(function() {
                    $('#dtBasicExample').DataTable({
                        "paging": true // false to disable pagination (or any other option)
                    });
                    $('.dataTables_length').addClass('bs-select');
                });
            </script>

        </tbody>
    </table>

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
        function ajax(value) {

            event.preventDefault();

            var url = value;

            var xhttp = new XMLHttpRequest();


            xhttp.onload = function() {
                var result = this.responseText;

                if (result === 'success') {
                    alert("Product Delete successfully");
                    location.reload(true);
                } else {
                    alert("could not delete data");
                }
            };
            xhttp.open("GET", `${url}`, true);
            xhttp.send();
        }
    </script>

</body>

</html>