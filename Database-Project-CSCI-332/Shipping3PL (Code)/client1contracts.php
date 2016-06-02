<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>Client</th><th>Contract</th><th>type</th><th>details</th></tr>";
if ($result = $mysqli->query("SELECT * from ClientsAndContracts WHERE Client = 'Client 1'")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["Client"];
         echo "</td><td>";
         echo $row["Contract"];
         echo "</td><td>";
         echo $row["type"];
         echo "</td><td>";
         echo $row["details"];

         echo "</td></tr>";
    }
echo "</table>";    

}
?>
<br><br>
<a href=homepage.php> Return to Homepage </a>
