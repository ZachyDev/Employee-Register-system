<?php
    // include config.php
    require_once('config.php');
    // connect to db
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // check the status of the connection
    if($conn){
        // echo "Connected to db" . "<br>";
    }else{
        die ("ERROR " . mysqli_connect_error());
    }

?>