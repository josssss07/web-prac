<?php
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $database = "employee";

     $conn = mysqli_connect($hostname, $username, $password, $database);


     if(!$conn){
        die("Connection failed " .mysqli_connect_error());
    }
    else{
     echo"Connection Successful <br>";
    }       


    $emp_id = $_POST['empid'];
    $emp_name = $_POST['emp_name'];
    $emp_position = $_POST['emp_post'];
    $emp_department = $_POST['emp_dept'];

    $sql_delete = "DELETE FROM emp_details WHERE emp_id ='$emp_id'";

    if(mysqli_query($conn, $sql_delete)){
        echo"Data Deleted";
        //header("Location: display.php");
        exit;
    }
    else{
        echo"Data not deleted Failed";
    }
    mysqli_close($conn);
?>