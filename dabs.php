<?php

$servername = "localhost";
$username = "root";
$password = "";

//  connecting the host 

$conn = mysqli_connect($servername, $username, $password);

$a ="Create database myhost";
mysqli_query($conn, $a);

if(!$conn)
{
    echo ("sorry your connection is failed:".mysqli_connect_error());
}
else
{
    echo"you are connect the successful with the database and create your database ";
}
?>