<?php
    $servername = "80.79.25.60";
    $username = "194_root";
    $password = "Uz2khV_iM";
    $dbname = "194_imagio_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE counter SET visits = visits+0 WHERE id = 0";
    $conn->query($sql);

    $conn->close();
?>