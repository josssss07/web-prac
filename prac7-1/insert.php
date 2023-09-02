<?php 
    //initialize database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "empdetailsDB";

    //connect to db
    $conn = mysqli_connect($hostname, $username, $password, $database);

    //check if connection worked
    if(!$conn){
        die("Connection failed " .mysqli_connect_error());
    }

    else{
        echo "Connection Successful!";
    }   


    //extract data from the form

    

    //close connection
    mysqli_close($conn);
?>

