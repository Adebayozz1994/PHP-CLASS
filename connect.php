<?php
$localhost = "localhost";
$username='root';
$password='';
$database='mysql_db';




$connection=new mysqli($localhost,$username,$password,$database);


if ($connection->connect_error) {
    echo 'not connected';
}
else{
    echo 'connected';
}

?>