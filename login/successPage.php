<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
</head>
<body>

<h1>
    LOGIN SUCCESS!!!

    <?php 
        session_start();

        echo $_SESSION['user_role'];
        echo $_SESSION['name'];
    ?>

</h1>
    
</body>
</html>