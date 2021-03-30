<?php
session_start();

if (isset($_SESSION['uname'])) {
  if (isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost','root','','test');

    $firstname= $_POST['fname'];
    $lastname= $_POST['lname'];
    $location= $_POST['location'];

    $sql = "INSERT INTO names(first_name,last_name) VALUES('$firstname','$lastname')";

    $query= mysqli_query($conn, $sql);

    if ($query) {
      $sql2 = "INSERT INTO locations(location) VALUES('$location')";

      $result= mysqli_query($conn, $sql2);

      echo "uploaded";

    }else {
      echo "error";
    }
  }

}else{
  header ("location: index.php");
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin panel</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <ul>
      <li ><a href="show.php">Show_Customers</a></li>
    </ul>
    <form action="welcome.php" method="post">
      <div><input type="text" name="fname" placeholder="Firstname"></div>
      <div><input type="text" name="lname" placeholder="Lastname"></div>
      <div><input type="text" name="location" placeholder="Location"></div>
      <div><input type="submit" name="submit" value="submit"></div>
    </form>
    <ul>

      <li ><a href="logout.php">LOGOUT</a></li>
    </ul>

  </body>
</html>
