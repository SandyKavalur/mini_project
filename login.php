<?php
    session_start();
    include "./dbconn.php";

    if (isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $pass = md5($pass);
        $adminpass = md5("admin");

        $query = "SELECT * FROM login WHERE user_name='$uname' AND password='$pass'";  
        $result = mysqli_query($connect, $query); 

        if(!$row = $result->fetch_assoc()){
            echo "<script>
                alert('Invalid Username or Password!');
                window.location.href = './login.php'
            </script>"; 
        } elseif ($pass == $adminpass) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['temp'] = TRUE;
            header("location:./index.php");
        } else {
            echo "hi";
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['temp'] = TRUE;
            header("location:./index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="test.css" rel="stylesheet">
</head>
<body>
    <div class="main h-100 w-100">
        <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="post">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="username" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-black">Login</button>
                <button type="submit" class="btn btn-secondary"><a class="text-white" href="./signup.php">Register</a></button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>