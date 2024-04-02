<?php
session_start();
require 'connect.php';


if (isset($_POST['submit'])) {
    print_r($_POST);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];


    $query = "SELECT * FROM `user_table` WHERE email='$email'";
    $connect = $connection->query($query);
    
        if ($connect->num_rows > 0) {
            // echo 'user found';
            $_SESSION['msg']='email exists already';
            header('location:signups.php');
            // $user=$connect->fetch_assoc();
            // print_r($user);
            // echo "email already exists";
        } 
        else {
            // echo 'email not found';
            $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
            echo $hashedpassword;

            $query = "INSERT INTO `user_table` (`firstname`, `lastname`, `email`, `password`, `address`) VALUES ('$firstname', '$lastname', '$email', '$hashedpassword', '$address')";
            $connect = $connection->query($query);
            if ($connect) {
                // echo $connect.'successfully inserted';
                header('location:signin.php');
            } 
            else {
                echo 'Failed to insert';
            }
        }
    }
    
    else {
        echo "error ";
    }







