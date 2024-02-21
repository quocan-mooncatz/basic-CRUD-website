<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assest/css/login.css">
    <title>AAKUMAN STORE</title>
</head>
<body>
    <div class="main">
        <div class="logo">
            <h1>AKUMAN STORE</h1>
        </div>
        <div class="login">
            <h1>Login</h1>
            <p>Lognin to start buying game</p>
            <form  action="login.php" method="POST">
                <label>Username</label>
                <i class="fas fa-user">
                <input type="text" name="username" id="username" placeholder="Type your username" required></i>
                
                <label>Password</label>
                <i class="fas fa-lock">
                <input type="password" name="pass_word" id="pass_word" placeholder="Type your password" required></i>
                
                <a href="signup.php">Don't have an account? Signup now</a>
                <button  name="submit" type="submit" value="submit" >Login</button>
            </form>
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-github"></i></li>
                <li><i class="fab fa-instagram"></i></li>
            </ul>
        </div>
    </div>
</body>
</html>

<?php
include'connect.php';
   if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass_word = $_POST['pass_word'];
    $sql = "SELECT * FROM nguoi_dung WHERE username = '$username' AND pass_word = '$pass_word'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_num_rows($query);
    if($result !=0){
        header('location:index.php');
    }
    else{
        echo'Login failed!';
    }
   }
?>