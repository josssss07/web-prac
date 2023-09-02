<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        tr:nth-child(even){
            background-color:bisque;
        }
    </style>
</head>
<body>
        <h1>Data from Table</h1>

    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "empdetailsDB";
        $conn = mysqli_connect($hostname, $username, $password, $database);
        if(!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }

        $sql ="SELECT * FROM emp_general_details";
        $result = mysqli_query($conn , $sql);

        if(mysqli_num_rows($result)>0){
            echo"<table border = '1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</name>
                        <th>Department</th>
                        <th>Position</th>
                    </tr>";

                    while($row = mysqli_fetch_assoc($result)){
                        echo"
                            <tr>
                                <td>".$row['emp_id']."</td>
                                <td>".$row['emp_name']."</td>
                                <td>".$row['department']."</td>
                                <td>".$row['position']."</td>
                            </tr>
                        ";

                    }
                    echo"</table>";

        }
        else{
            echo("NO DATA FOUND");
        }

    mysqli_close($conn);
    ?>
</body>
</html>