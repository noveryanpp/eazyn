<?php

$username = "root";
$password = "12345678";
$host = "localhost";

$is_connect = mysqli_connect($host, $username, $password);

if($is_connect){
    mysqli_select_db($is_connect, "ijinbk");
}else{
    echo "yesn't";
}

?>