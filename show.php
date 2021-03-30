<?php
session_start();

if (isset($_SESSION['uname'])) { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show Data</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <ul>
      <li><a href="welcome.php">Insert</a></li>

    </ul>
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Location</th>
      </tr>

      <?php
        $conn = mysqli_connect('localhost','root','','test');

        if ($conn-> connect_error) {
          die("Connection failed:". $conn-> connect_error);
        }
        $sql3 = "SELECT names.first_name, names.last_name, locations.location FROM names, locations
        WHERE names.id = locations.id ORDER BY names.first_name" ;
        $result = $conn->query($sql3);

        if ($result-> num_rows > 0 ) {
          while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>". $row["location"] ."</td></tr>";

          }
          echo "</table>";
        }else {
          echo "0 result";
        }

        $conn-> close();
       ?>
    </table>
    <ul>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </body>
</html>

<?php }else {
  header ("location: index.php");
} ?>
