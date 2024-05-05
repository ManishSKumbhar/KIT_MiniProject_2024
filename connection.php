<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_train";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    //echo "Connection OK";
}
else{
    echo "Connection Not OK";
}

?>