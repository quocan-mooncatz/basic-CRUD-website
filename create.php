<?php
session_start();
  include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="assest/css/create.css">
    <title>Create</title>
</head>
<body>
    <div class="wrapper">
        <h1>Add Products</h1>
        <form action="create.php" method="POST">
            <diV>
               
                <input type="text" placeholder="gamename" name="gamename" id="gamename">
            </diV>
            <div>
            
                <input type="text" placeholder="director" name="director" id="director">
            </div>
            <div>
              
                <input type="text" placeholder="directorid" name="directorid" id="directorid">
            </div>
            <div>
           
                <input type="text" placeholder="phonenumberdirector" name="phonenumberdirec" id="phonenumberdirec">
            </div>
            <div>
            
                <input type="text" placeholder="birthyear" name="birthyear" id="birthyear">
            </div>
            <div>
            
                <input type="text" placeholder="publisher" name="publisher" id="publisher">
            </div>
            <div>
            
                <input type="text" placeholder="publisherid" name="publisherid" id="publisherid">
            </div>
            <div>
            
                <input type="text" placeholder="address" name="add_ress" id="add_ress">
            </div>
            <div>
            
                <input type="text" placeholder="phonenumberpublish" name="phonenumberpublish" id="phonenumberpublish">
            </div>
            <a href="read.php">go back</a>
        <button type="submit" name="submit" value="submit" >Add</button>
        </form>
    </div>
</body>
</html>

<?php
include'connect.php';
if(isset($_POST['submit'])){
        $gamename = $_POST['gamename'];
        $directorid = $_POST['directorid'];
        $director = $_POST['director'];
        $publisherid = $_POST['publisherid'];
        $phonenumberpublish = $_POST['phonenumberpublish'];
        $sqlgames = "INSERT INTO  games( gamename,directorid,publisherid)  VALUES ('$gamename','$directorid','$publisherid')";
        $query = mysqli_query($conn, $sqlgames);

        $directorid = $_POST['directorid'];
        $director = $_POST['director'];
        $phonenumberdirector = $_POST['phonenumberdirec'];
        $birthyear = $_POST['birthyear'];
        $sqltacgia ="INSERT INTO tacgia(director, directorid,birthyear, phonenumberdirec) VALUES ('$director','$directorid','$birthyear','$phonenumberdirector')";
        $query2 = mysqli_query($conn, $sqltacgia);

        $publisher = $_POST['publisher'];
        $publisherid = $_POST['publisherid'];
        $add_ress = $_POST['add_ress'];
        $phonenumberpublish = $_POST['phonenumberpublish'];
        $sqlnhaphathanh = "INSERT INTO nhaphathanh(publisher, publisherid, add_ress, phonenumberpublish) VALUES ('$publisher','$publisherid','$add_ress','$phonenumberpublish')";
        $query3 = mysqli_query($conn, $sqlnhaphathanh);

       if($query && $query2 && $query3){

        header('location: read.php');
       }
    else{
        echo'oops! some things wrong!';
    }
}
?>