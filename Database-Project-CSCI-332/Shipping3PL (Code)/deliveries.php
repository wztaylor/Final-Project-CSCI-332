<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>deliveryID</th><th>referenceNumber</th><th>transportMode</th><th>pickupLocation</th><th>destination</th><th>manufacturerID</th><th>contractID</th><th>warehouseID</th></tr>";
if ($result = $mysqli->query("SELECT * from Deliveries")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["deliveryID"];
         echo "</td><td>";
         echo $row["referenceNumber"];
         echo "</td><td>";
         echo $row["transportMode"];
         echo "</td><td>";
         echo $row["pickupLocation"];
         echo "</td><td>";
         echo $row["destination"];
         echo "</td><td>";
         echo $row["manufacturerID"];
         echo "</td><td>";         
         echo $row["contractID"];
         echo "</td><td>";
         echo $row["warehouseID"];

         echo "</td><td><a href=deliveriesdelete.php?deliveryID=";
         echo $row["deliveryID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=deliveriesadd.php?deliveryID=";
         echo $row["deliveryID"];
         echo ">EDIT</a>";
         echo "</td></tr>";
    }
echo "</table>";    

}
?>
<a href=deliveriesadd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>
