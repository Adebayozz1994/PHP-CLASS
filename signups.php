<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-6 mx-auto">
            <form action="signups.php" method="post">
                <input type="text" name="firstname" placeholder="firstname" >
                <input type="text" name="lastname" placeholder="lastname">
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <input type="text" name="address" placeholder="address">
                <input type="submit" name="submit" value="submit button">
            </form>
        </div>
        <div>
            <?php
            session_start();
            if(isset($_SESSION['msg'])){
                echo '<div class="text-center alert-danger">'.$_SESSION['msg'].'</div>';
            }
            // unset($_SESSION['msg']);
            ?>
        </div>
    </div>
</body>
</html>