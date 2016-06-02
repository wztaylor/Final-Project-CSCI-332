<?php
if(!empty($_REQUEST['warehouseID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Warehouses where warehouseID = " . $_REQUEST['warehouseID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $warehouseID = $row['warehouseID'];
        $name = $row['name'];
        $phone = $row['phone'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $zip = $row['zip'];
        $clientID = $row['clientID']; 
        }

}
?>


<form action="warehousesave.php">
<input type="hidden" name = "warehouseID" value ="<?php echo $_REQUEST['warehouseID'] ?>"/>
<input type="hidden" name = "clientID" value ="<?php echo $_REQUEST['clientID'] ?>"/>

Name: <input type="text" name="name" value ="<?php echo $name ?>"/>
Phone: <input type="text" name="phone" value ="<?php echo $phone ?>"/>
Street: <input type="text" name="street" value ="<?php echo $street ?>"/>
City: <input type="text" name="city" value ="<?php echo $city ?>"/>
State: <input type="text" name="state" value ="<?php echo $state ?>"/>
Zip: <input type="text" name="zip" value ="<?php echo $zip ?>"/>
ClientID: <input type="text" name="clientID" value ="<?php echo $clientID ?>"/>

<br>
<br>




<input type="submit" value="Save"/>
</form>