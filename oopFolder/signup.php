<?php
require ("users.php");

$firstname = "adebayo";
$lastname = "peter";
$email = "mondayzzzZz@gmail.com";
$password = "Peter1234";
$address = "no 123, abuleegba";


$newUser = new User;
$newUser->createUser($firstname, $lastname, $email, $password, $address);