
<?php
session_start();
// echo $_SESSION['userId'];
$userId=$_SESSION['userId'];
require 'connect.php';
if(isset($_POST['submit'])){
    // print_r($_FILES);
    // echo 'yes';
    $picture = $_FILES['picture'];
    $name = $picture['name'];
    $tmp= $picture['tmp_name'];
    $newname=time().$name;
    // echo $newname;
    $move=move_uploaded_file($tmp,"pictures/".$newname);
    if($move){
        $query = "UPDATE `user_table` SET `profile_picture` = '$newname' WHERE user_id = $userId";
        $con = $connection->query($query);
        if($con){
            $_SESSION['msg']='uploaded successfully';
            header('location:dashboard.php');
        }
        else{
            $_SESSION['msg']='failed to uploaded';
            header('location:dashboard.php');

        }
        // echo 'uploaded';
    }
    else{
        $_SESSION['msg']='failed to uploaded';
        header('location:dashboard.php');
    }
    // echo ($tmp);
    // echo $name;
    // print_r($picture);
}



?>