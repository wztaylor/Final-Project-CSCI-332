<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>Client</th><th>Contract</th><th>Details</th><th>Type</th><th>Duration</th></tr>";
$sql = "select c.name,t.name AS cname,t.details,t.type,t.duration from Clients c, Contracts t WHERE c.clientID = t.clientID GROUP BY c.name, t.name";

if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["name"];
         echo "</td><td>";
         echo $row["cname"];
         echo "</td><td>";
         echo $row["details"];
         echo "</td><td>";
         echo $row["type"];
         echo "</td><td>";
         echo $row["duration"];
         echo "</td></tr>";
    }
echo "</table>";    

}
?>

<a href=homepage.php> Return to Homepage </a>
