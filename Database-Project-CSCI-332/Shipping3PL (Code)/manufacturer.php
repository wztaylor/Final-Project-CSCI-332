<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>manufacturerID</th><th>name</th><th>phone</th><th>email</th><th>street</th><th>city</th><th>state</th><th>zip</th></tr>";
if ($result = $mysqli->query("SELECT * from Manufacturer")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["manufacturerID"];
         echo "</td><td>";
         echo $row["name"];
         echo "</td><td>";
         echo $row["phone"];
         echo "</td><td>";
         echo $row["email"];
         echo "</td><td>";
         echo $row["street"];
         echo "</td><td>";
         echo $row["city"];
         echo "</td><td>";
         echo $row["state"];
         echo "</td><td>";
         echo $row["zip"];


         echo "</td><td><a href=manufacturerdelete.php?manufacturerID=";
         echo $row["manufacturerID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=manufactureradd.php?manufacturerID=";
         echo $row["manufacturerID"];
         echo ">EDIT</a>";


         echo "</td></tr>";
    }
echo "</table>";    

}
?>
<a href=manufactureradd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>