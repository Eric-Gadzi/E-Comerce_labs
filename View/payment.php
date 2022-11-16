<!doctype html>
<html lang="en">

<head>
    <title>Payment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Home</a>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("../functions/cart_function.php");
            session_start();
            $c_id = $_SESSION['customer_id'];
            $ip_add = $_SERVER['REMOTE_ADDR'];
            $total = displayCart_Payment_table($c_id, $ip_add);
            ?>

        </tbody>
    </table>
    <?php  echo "
                <h3></h3>
                <h3 colspan='2'>Total GHC: $total</h3>
            ";?>

    <button type="submit"  onclick ="payWithPaystack()" name="" id="" class="btn btn-primary btn-lg btn-default">Make Payment</button>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
        // const paymentForm = document.getElementById('paymentForm');
        // paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(){
            event.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_bed9ac10a9fd731dd3af495d9160b4a59b72217a', // Replace with your public key
                email: "<?php echo $_SESSION['user_email'];?>",
                amount: parseInt("<?php echo $total;?>")*100,
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                currency: 'GHS',
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                    window.location = "../actions/payment_processing.php?reference=" + response.reference;                    
                }
            });

            handler.openIframe();
        }
    </script>
</html>