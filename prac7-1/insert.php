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

    //global declartive index
    $emp_id = $_POST['empid'];
    $emp_name = $_POST['empname'];
    $emp_position = $_POST['empposition'];
    $emp_department = $_POST['empdept'];    

    //close connection
    mysqli_close($conn);
?>