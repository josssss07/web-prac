<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    
</head> 
<body>
    <form action="insert.php" method="post" >
        <div class="empid">
            <h3>Employee-ID: </h3>
            <label for="empid">
                <input type="text" name="empid" id="empid" size="10">
            </label>
        </div>
        <div class="empname">
            <h3><br>Emp Name: </h3>
            <label for="empname">
                <input type="text" name="empname" id="empname" size="20">
            </label>
        </div>
        <div class="empdept">
            <h3><br>Department </h3>
            <label for="empdept">
                <input type="text" name= "empdept" id ="empdept" size="20">
            </label>
        </div>
        <div class="empposition">
            <h3><br>Position: </h3>
            <label for="empposition">
                <input type="text" name= "empposition" id = "empposition" size="20">
            </label>
        </div>
        <div class="enterdata">
            <input type="button" value="submit" id="submit">
            <input type="button" value="clear" id="clear">
        </div>
        
    </form>
</body>
</html>
