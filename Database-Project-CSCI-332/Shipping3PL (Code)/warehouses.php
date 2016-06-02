<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>warehouseID</th><th>name</th><th>phone</th><th>street</th><th>city</th><th>state</th><th>zip</th><th>clientID</th></tr>";
if ($result = $mysqli->query("SELECT * from Warehouses")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["warehouseID"];
         echo "</td><td>";
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
         echo "</td><td>";
         echo $row["clientID"];

         echo "</td><td><a href=warehousedelete.php?warehouseID=";
         echo $row["warehouseID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=warehouseadd.php?warehouseID=";
         echo $row["warehouseID"];
         echo ">EDIT</a>";

         echo "</td></tr>";
    }
echo "</table>";    

}
?>

<br><br>
<a href=warehouseadd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>