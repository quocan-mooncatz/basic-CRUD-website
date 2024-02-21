<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./assest/css/read.css">
</head>
<body>
<div class="container">
  <h1 style="text-align: center;">Products Data</h1>
<a type="button" class="btn btn-info" href="./index.php">Home Page</a>
<a type="button" class="btn btn-primary" href="./create.php">Add Products</a>
<p></p>
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
      <th class="text-center">Game ID</th>
        <th class="text-center">Game name</th>
        <th class="text-center">DirectorID</th>
        <th class="text-center">PublisherID</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

use LDAP\Result;

      $servername = "localhost";
      $username = "root";
      $pass_word = "";
      $database = "baitaplon521cnt";

      $conn = new mysqli($servername, $username, $pass_word,$database);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM games";
      $result = $conn->query($sql);
      if (!$result){
        die("Invalid query: " . $conn->error);
      }
      while($row = $result->fetch_assoc()){
        $gameid = $row['gameid'];
        $gamename = $row['gamename'];
        $directorid = $row['directorid'];
        $publisherid = $row['publisherid'];
        echo '<tr>
        <td class = "text-center">'.$gameid.'</td>
        <td class = "text-center">'.$gamename.'</td>
        <td class= "text-center">'.$directorid.'</td>
        <td class= "text-center">'.$publisherid.'</td>
        <td class = text-center>
          <a href = "update.php?updateid='.$gameid.'" class = "btn btn-success btn-sm">Update</a>
          <a href = "delete.php?deleteid='.$gameid.'" class = "btn btn-danger btn-sm"">Delete</a>
        </td>
      </tr>';
      }

      ?>
    </tbody>
  </table>
</div>

</body>
</html>