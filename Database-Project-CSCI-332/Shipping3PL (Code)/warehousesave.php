<?php
include 'dbconnect.php';
if(empty($_REQUEST["warehouseID"])){ 

$sql = "insert into Warehouses (name,phone,street,city,state,zip,clientID) VALUES ('" . $_REQUEST["name"] . "','";
$sql .= $_REQUEST["phone"] ."','";
$sql .= $_REQUEST["street"] ."','";
$sql .= $_REQUEST["city"] ."','";
$sql .= $_REQUEST["state"] ."','";
$sql .= $_REQUEST["zip"] ."','";
$sql .= $_REQUEST["clientID"] ."')";
}

else
{
$sql = "update Warehouses set name = '" . $_REQUEST["name"] . "',";
$sql .= "phone = '" . $_REQUEST["phone"] ."',";
$sql .= "street = '" . $_REQUEST["street"] ."',";
$sql .= "city = '" . $_REQUEST["city"] ."',";
$sql .= "state = '" . $_REQUEST["state"] ."',";
$sql .= "zip = '" . $_REQUEST["zip"] ."',";
$sql .= "clientID = '" . $_REQUEST["clientID"] ."',";
$sql .= "where warehouseID = " . $_REQUEST['warehouseID'];
}

$mysqli ->query($sql);

?>

<script>
window.location = 'warehouses.php'
</script>
?>