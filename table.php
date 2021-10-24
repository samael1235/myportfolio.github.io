<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myhost";
//  connecting the host 

$conn = mysqli_connect($servername, $username, $password, $database);

$a ="Create table admin( `Sl_no` INT(200) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(200) NOT NULL , `Email` VARCHAR(200) NOT NULL , `Messages` VARCHAR(500) NOT NULL , PRIMARY KEY (`Sl_no`))";
$b = mysqli_query($conn, $a);

if($b)
{
    echo"congratulation your table has been created in project database ";
}
else
{
    echo "sorry your table has been not created:".mysqli_error($conn);
}

?>