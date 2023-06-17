<?php

$host = "localhost";
$username = "root";
$password = "12345";
$database = "db_admin";

$connection = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error()){

    echo "error";
}

//  else {
//     echo "connected";
// }


?>