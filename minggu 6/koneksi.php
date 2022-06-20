<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "tokohp";

    //create connection 
    $conn = new mysqli($servername, $username, $password, $db);

    //check conection
    if ($conn -> connect_error){
        die("Conection failed : ".$conn -> connect_error);
    }
    //echo "Connection successfully";
?>