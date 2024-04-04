<?php
session_start();
require 'connect.php';
// echo 'signin page';
// print_r($_POST);
  if(isset($_POST['submit'])){
    echo 'yes';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user_table WHERE email = '$email' ";
    $connect = $connection->query($query);
    // print_r($connect);
    if($connect->num_rows > 0){
        
        $user= $connect->fetch_assoc();
        // print_r($user);
        $passwordhashed = $user['password'];
        $userId = $user['user_id'];
        // echo 
        // echo $passwordhashed;
        $passwordverify= password_verify($password, $passwordhashed);
        // echo 'paswword verified';
        if($passwordverify){
            $_SESSION['userId']=$userId;
            header('location:dashboard.php');
            echo $_SESSION['userId'];
            echo '<div class="alert alert-danger text-center"> user found and the user id is'.$_SESSION['userId'].'</div>';

        }
        else{
            // echo 'password not correct';
            echo '<div class="alert alert-danger text-center">wrong password enter</div>';

        }
        // // echo 'user found';
    }
    else{
        echo '<div class="alert alert-danger text-center">No user found</div>';
        // echo 'user not found';
    }
   
}
?>




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
        <div>
            <div>
                <h1 class="text-center text-primary">sign in page</h1>
                <form <?php echo $_SERVER['PHP_SELF'] ?> method="post">
                    <input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" class="btn btn-primary" name="submit">
                </form>
            </div>
        </div>

    </div>
</body>
</html>