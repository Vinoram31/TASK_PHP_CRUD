<?php
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"dbcrud");

    if(isset($_POST["Submit"]))
     {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
       

        $sql = "insert into student(name,email,mobile)values('$name','$email','$mobile')";

        if(mysqli_query($connection,$sql)){
            echo '<script>location.replace("index.php")</script>';  
        }else{
            echo "Some thing Error" . $connection->error;
        }
    }
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class ="container">
        <div class="row">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header">
                STUDENT DETAILS
            </div>
            <div class="card-body">
            <form action="add.php" method="post">
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label> Mobile </label>
                    <input type="number" name="mobile" class="form-control"  placeholder="Enter mobile">
                </br>   
                </div>
                <input type="submit" class="btn btn-primary" name="Submit" value="Register">
                </form>
           


          
            </div>

            </div>
               
    </div>
    
</body>
</html>