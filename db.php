<?php
    require_once('conn.php');
    // get the form inputs
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $job_no= $_POST['job_no'];
    $dept = $_POST['dept'];

    $query = "INSERT INTO `emp` (`First Name`,`Last Name`,`Job Number`,`Department`) VALUES('$firstname','$lastname','$job_no','$dept');";
    // check if success
    if(mysqli_query($conn,$query)){
        echo "Record inserted";
    }else{
        echo "something went wrong";
    }
?>