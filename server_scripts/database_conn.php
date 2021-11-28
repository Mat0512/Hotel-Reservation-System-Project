<?php
    $server_name = "localhost";
    $user_name = "admin";
    $password = "admin";
    $database_name = "hotel_reservation";

    $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }