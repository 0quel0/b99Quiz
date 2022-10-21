<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "quiz";

    $conection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()){
        die("Falha na conexão com o banco de dados" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
    }
?>