<?php
if(!empty($_REQUEST['shipperID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Shipper where shipperID = " . $_REQUEST['shipperID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $shipperID = $row['shipperID'];
        $name = $row['name'];
        $phone = $row['phone'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $zip = $row['zip']; 

        }
}
?>


<form action="shippersave.php">
<input type="hidden" name = "shipperID" value ="<?php echo $_REQUEST['shipperID'] ?>"/>
Name: <input type="text" name="name" value ="<?php echo $name ?>"/>
Phone: <input type="text" name="phone" value ="<?php echo $phone ?>"/>
Street: <input type="text" name="street" value ="<?php echo $street ?>"/>
City: <input type="text" name="city" value ="<?php echo $city ?>"/>
State: <input type="text" name="state" value ="<?php echo $state ?>"/>
Zip: <input type="text" name="zip" value ="<?php echo $zip ?>"/>
<input type="submit" value="Save"/>
</form>