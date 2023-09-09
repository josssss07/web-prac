<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <div class="container">
        <div>
        <form  method="post">
            <div class="text-center">
                <h2>Employee Details</h2>
            </div>
            
            <div class="row">
                <div class="col-sm-2">
                    <h3>Employee Id: </h3>
                </div>
                <div class="col-sm-4">
                <label for="empid">
                        <input type="text" name="empid" id="empid" >
                    </label>
                </div>
                <div class="col-sm-2">
                <button type="submit" formaction="delete.php">Delete</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <h3>Employee Name: </h3>
                </div>
                <div class="col-sm-4">
                    <label for="emp_name">
                        <input type="text" name="emp_name" id="emp_name">                
                    </label>
                </div>
                <div class="col-sm-4">
                    <input type="button" value="Update" id="update">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-2">
                    <h3>Employee Post: </h3>
                </div>
                <div class="col-sm-4">
                    <label for="emp_post">
                        <input type="text" name="emp_post" id="emp_post">                
                    </label>
                </div>
                <div class="col-sm-4">
                    <input type="button" value="Search" id="search">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <h3>Employee Dept: </h3>
                </div>
                <div class="col-sm-4">
                    <label for="emp_dept">
                        <input type="text" name="emp_dept" id="emp_dept">                
                    </label>
                </div>
                <div class="col-sm-4">
                    <button type="submit" formaction="details.php">Submit</button>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                <input type="button" value="View" id="insert">  
                <input type="reset" value="Reset" id="reset">
                </div>
            </div>
            
        </form>

    </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>