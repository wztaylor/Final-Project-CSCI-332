<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>contractID</th><th>name</th><th>details</th><th>type</th><th>duration</th></tr>";
if ($result = $mysqli->query("SELECT * from Contracts")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["contractID"];
         echo "</td><td>";
         echo $row["name"];
         echo "</td><td>";
         echo $row["details"];
         echo "</td><td>";
         echo $row["type"];
         echo "</td><td>";
         echo $row["duration"];


         echo "</td><td><a href=contractdelete.php?contractID=";
         echo $row["contractID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=contractadd.php?contractID=";
         echo $row["contractID"];
         echo ">EDIT</a>";
         echo "</td></tr>";
    }
echo "</table>";    

}
?>
<a href=contractadd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>