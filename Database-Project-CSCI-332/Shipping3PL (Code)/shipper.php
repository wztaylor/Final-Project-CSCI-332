<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>name</th><th>phone</th><th>street</th><th>city</th><th>state</th><th>zip</th></tr>";
if ($result = $mysqli->query("SELECT * from Shipper")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["name"];
         echo "</td><td>";
         echo $row["phone"];
         echo "</td><td>";
         echo $row["street"];
         echo "</td><td>";
         echo $row["city"];
         echo "</td><td>";
         echo $row["state"];
         echo "</td><td>";
         echo $row["zip"];

         echo "</td><td><a href=shipperdelete.php?shipperID=";
         echo $row["shipperID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=shipperadd.php?shipperID=";
         echo $row["shipperID"];
         echo ">EDIT</a>";
         echo "</td></tr>";
    }
echo "</table>";    

}
?>

<a href=shipperadd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>