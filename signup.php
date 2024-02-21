<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assest/css/signup.css">
    <title>AKUMAN STORE</title>
</head>
<body>
    <div class="main">
        <div class="logo">
            <h1>AKUMAN STORE</h1>
        </div>
        <div class="signup">
            <h1>SignUp</h1>
            <p>SignUp to start buying game</p>
            <form  action="signup.php" method="POST" >
                <label>Username</label>
                <i class="fas fa-user">
                <input type="text" name="username" id="username" placeholder="Type your username" required></i>
                
                <label>Password</label>
                <i class="fas fa-lock">
                <input type="password" name="pass_word" id="pass_word" placeholder="Type your password" required></i>

                <label>Re-enter your Password</label>
                <i class="fas fa-lock">
                <input type="password" name="repassword" id="repassword" placeholder="Re-enter your password" required></i>

                <label>Enter your email</label>
                <i class="fas fa-envelope">
                <input type="email" name="email" id="email" placeholder="example@gmail.com" required></i>
                
                <a href="login.php">Already have an account? Login here</a>
                <button name="submit" type="submit" value="submit" >SignUp</button>
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
include 'connect.php';
if(isset($_POST['submit']))
    {
        if(($_POST['pass_word']) == ($_POST['repassword'])){
            
        }
        $username = $_POST['username'];
        $pass_word = $_POST['pass_word'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];
        
        
        $sql = "INSERT INTO nguoi_dung(ID, username, pass_word, repassword,email) VALUES ('', '$username', '$pass_word', '$repassword','$email')";
        $query = mysqli_query($conn, $sql);
        if($query)
        {
            header('location: login.php');
        }
      	else{
         	echo "Error, can't signup! Something's Wrong."; 
        }
    }
?>