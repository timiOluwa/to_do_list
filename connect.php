<?php


    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database_name = 'todolist';

    $connect = mysqli_connect($host_name, $user_name, $password, $database_name);
    if(!$connect){
        die(mysqli_error($connect));
    }
?>