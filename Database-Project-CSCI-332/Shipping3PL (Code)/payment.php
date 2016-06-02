<?php
include 'dbconnect.php';

echo "<table border=1>";
echo "<tr><th>paymentID</th><th>referenceNumber</th><th>amount</th><th>date</th><th>paymentMethod</th></tr>";
if ($result = $mysqli->query("SELECT * from Payment")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
         echo "<tr><td>";
         echo $row["paymentID"];
         echo "</td><td>";
         echo $row["referenceNumber"];
         echo "</td><td>";
         echo $row["amount"];
         echo "</td><td>";
         echo $row["date"];
         echo "</td><td>";
         echo $row["paymentMethod"];


         echo "</td><td><a href=paymentdelete.php?paymentID=";
         echo $row["paymentID"];
         echo ">DEL</a> &nbsp;&nbsp;&nbsp;&nbsp;";
         
         echo "<a href=paymentadd.php?paymentID=";
         echo $row["paymentID"];
         echo ">EDIT</a>";
         echo "</td></tr>";
    }
echo "</table>";    

}
?>
<a href=paymentadd.php> Add New </a> <br><br>
<a href=homepage.php> Return to Homepage </a>