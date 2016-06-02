<?php
if(!empty($_REQUEST['deliveryID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Deliveries where deliveryID = " . $_REQUEST['deliveryID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $deliveryID = $row['deliveryID'];
        $referenceNumber = $row['referenceNumber'];
        $transportMode = $row['transportMode'];
        $pickupLocation = $row['pickupLocation'];
        $destination = $row['destination'];
        $manufacturerID = $row['manufacturerID'];
        $contractID = $row['contractID'];
        $warehouseID = $row['warehouseID'];


        }
}
?>
<form action="deliveriessave.php">
<input type="hidden" name = "deliveryID" value ="<?php echo $_REQUEST['deliveryID'] ?>"/>

Reference Number: <input type="text" name="referenceNumber" value ="<?php echo $referenceNumber ?>"/>
Transport Mode: <input type="text" name="transportMode" value ="<?php echo $transportMode ?>"/>
Pickup Location: <input type="text" name="pickupLocation" value ="<?php echo $pickupLocation ?>"/>
Destination: <input type="text" name="destination" value ="<?php echo $destination ?>"/>
Manufacturer ID: <input type="text" name="manufacturerID" value ="<?php echo $manufacturerID ?>"/>
Contract ID: <input type="text" name="contractID" value ="<?php echo $contractID ?>"/>
Warehouse ID: <input type="text" name="warehouseID" value ="<?php echo $warehouseID ?>"/>
<input type="submit" value="Save"/>
</form>