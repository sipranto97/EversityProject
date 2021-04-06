<?php
include 'db.php';
session_start();
$name="";
$email="";
$pass="";
$loginemail="";
$loginpass="";
$error_mail="";
$error_login="";
$success = "";
if(isset($_POST['regBtn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query= "select * from user where Email = '$email'";
    $res = mysqli_query($connection,$query);
    $num = mysqli_num_rows($res);
    if($num > 0){
        $error_mail="Email already taken.";
    }else{
        $reg = "insert into users (Fullname,Email,Password) 
        values ('$name','$email','$pass') ";
        mysqli_query($connection,$reg);
        $success = "Registration Successful";
        $name="";
        $email="";
        $pass="";
    }
}elseif(isset($_POST['loginBtn'])){
    $loginemail = $_POST['email'];
    $loginpass = $_POST['password'];
    $query= "select * from user where Email = '$loginemail'";
    $res = mysqli_query($connection,$query);
    $num = mysqli_num_rows($res);
    if($num == 1){
        
        $_SESSION['usermail'] = $loginemail;
       header('location:index.php');
    }else{
        $error_login="Invalid email or password.";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eversity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="reg_body">
    <div >
    <div class="row navbar reg_nav">
        <div class="col-1"></div>
        <div class="col-lg-10">
        <div class="logo"><h2><a class="logoT" href="#">Eversity</a></h2></div>
        </div>
        <div class="col-1"></div>
    </div>


    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                    <?php
                            echo '<h6 style= "color: red;">'.$error_login.'</h6>'
                        ?>
                        <label for="email">Email</label>
                        <?php 
                        echo '<input type="email" name="email" value="'.$loginemail.'"  class="form-control" required>';
                        ?>
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <?php 
                        echo '<input type="password" name="password" value="'.$loginpass.'"  class="form-control" required>';
                        ?>
                        
                    </div>
                    <button type="submit" name="loginBtn" class="btn btn-success"> Login </button>
                </form>
            </div>
            <div class="col-md-6 login-right">
            <h2>Registration Here</h2>
                <?php
                echo '<h5 style= "color: blue;">'.$success.'</h5>';
                ?>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <?php 
                        echo '<input type="text" name="name" value="'.$name.'"  class="form-control" required>';
                        ?>
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <?php 
                        echo '<input type="email" name="email" value="'.$email.'"  class="form-control" required>';
                        ?>
                        
                        
                        <?php
                            echo '<h6 style= "color: red;">'.$error_mail.'</h6>'
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <?php 
                        echo '<input type="password" name="password" value="'.$pass.'"  class="form-control" required>';
                        ?>
                    </div>
                    <button type="submit" name="regBtn" class="btn btn-info" style="float:right;"> Sign Up </button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    
    

</body>
</html>