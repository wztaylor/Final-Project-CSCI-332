<?php
include 'dbconnect.php';
if(empty($_REQUEST["shipperID"])) 
{
$sql = "insert into Shipper (name,phone,street,city,state,zip) VALUES ('" . $_REQUEST["name"] . "','";
$sql .= $_REQUEST["phone"] ."','";
$sql .= $_REQUEST["street"] ."','";
$sql .= $_REQUEST["city"] ."','";
$sql .= $_REQUEST["state"] ."','";
$sql .= $_REQUEST["zip"] ."')";
}
else
{
 $sql = "update Shipper set name = '" . $_REQUEST["name"] . "',";
$sql .= "phone = '" . $_REQUEST["phone"]. "',"; 
$sql .= "street = '" . $_REQUEST["street"]. "',";
$sql .= "city = '" . $_REQUEST["city"]. "',";
$sql .= "state = '" . $_REQUEST["state"]. "',";
$sql .= "zip = '" . $_REQUEST["zip"] . "' ";
$sql .= "where shipperID = " . $_REQUEST['shipperID'];
}
$mysqli ->query($sql);

?>


<script>
window.location = 'shipper.php'
</script>
?>