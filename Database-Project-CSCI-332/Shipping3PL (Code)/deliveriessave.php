<?php
include 'dbconnect.php';
if(empty($_REQUEST["deliveryID"])) 
{
$sql = "insert into Deliveries (referenceNumber,transportMode,pickupLocation,destination,manufacturerID,contractID,warehouseID) VALUES ('" . $_REQUEST["referenceNumber"] . "','";
$sql .= $_REQUEST["transportMode"] ."','";
$sql .= $_REQUEST["pickupLocation"] ."','";
$sql .= $_REQUEST["destination"] ."','";
$sql .= $_REQUEST["manufacturerID"] ."','";
$sql .= $_REQUEST["contractID"] ."','";
$sql .= $_REQUEST["warehouseID"] ."')";
}
else
{
 $sql = "update Deliveries set name = '" . $_REQUEST["referenceNumber"] . "',";
$sql .= "transportMode = '" . $_REQUEST["transportMode"]. "',"; 
$sql .= "pickupLocation = '" . $_REQUEST["pickupLocation"]. "',";
$sql .= "destination = '" . $_REQUEST["destination"]. "',";
$sql .= "manufacturerID = '" . $_REQUEST["manufacturerID"]. "',";
$sql .= "contractID = '" . $_REQUEST["contractID"]. "',";
$sql .= "warehouseID = '" . $_REQUEST["warehouseID"] . "',";
$sql .= "where deliveryID = " . $_REQUEST['deliveryID'];
}

$mysqli ->query($sql);

?>

<script>
window.location = 'deliveries.php'
</script>
?>