<?php

    $host = "localhost";
    $username = "zaizai";
    $password = "zaizai";
    $dbname = "zaidatabase";

    $connection = mysqli_connect($host,$username,$password,$dbname);

    if(mysqli_connect_error()){
        die("connect fail"."<br>");
    }

?>
