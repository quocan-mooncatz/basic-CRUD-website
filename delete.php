<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM games WHERE gameid=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:read.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>