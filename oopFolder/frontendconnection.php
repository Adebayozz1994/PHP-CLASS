<?php 
require('uaers.php');

    header("Access-Control-Allow-Oringin, *");
    header("Allow-Control-Allow-Headers: Content-Type");


    $userDetails = json_decode(file_get_contents("php://input"));
    $name = $userDetails['name'];
    $last_name = $userDetails['last_name'];
    $email = $userDetails['email'];
    $password = password_hash($userDetails['password'],PASSWORD_DEFAULT);
    $address =$userDetails['address'];

    $User = new User();
    $response=$User->createUser($name, $last_name, $email, $password, $address);
    echo json_encode($response);
?>