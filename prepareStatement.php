<?php
session_start();
require ('connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];



$query = "INSERT INTO `user_table` (`firstname`, `lastname`, `email`, `password`, `address`) VALUES (?,?,?,?,?)";
$prepare = $connection->prepare($query);
$hashedpassword = password_hash($password,PASSWORD_DEFAULT);
$bind = $prepare->bind_param("ssss", $firstname, $lastname, $email, $hashedpassword, $address);
$prepare->execute([$firstname, $lastname, $email, $hashedpassword, $address]);
$save = $prepare->execute();
if ($save) {
    echo "Registration Successful";
}else{
    echo "Registration Failed";
}
?>