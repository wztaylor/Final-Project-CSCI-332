<?php
include 'dbconnect.php';
if(empty($_REQUEST["manufacturerID"])) 
{
$sql = "insert into Manufacturer (name,phone,email,street,city,state,zip) VALUES ('" . $_REQUEST["name"] . "','";
$sql .= $_REQUEST["phone"] ."','";
$sql .= $_REQUEST["email"] ."','";
$sql .= $_REQUEST["street"] ."','";
$sql .= $_REQUEST["city"] ."','";
$sql .= $_REQUEST["state"] ."','";
$sql .= $_REQUEST["zip"] ."')";
}
else
{
 $sql = "update Manufacturer set name = '" . $_REQUEST["name"] . "',";
$sql .= "phone = '" . $_REQUEST["phone"]. "',"; 
$sql .= "email = '" . $_REQUEST["email"]. "',";
$sql .= "street = '" . $_REQUEST["street"]. "',";
$sql .= "city = '" . $_REQUEST["city"]. "',";
$sql .= "state = '" . $_REQUEST["state"]. "',";
$sql .= "zip = '" . $_REQUEST["zip"] . "' ";
$sql .= "where manufacturerID = " . $_REQUEST['manufacturerID'];
}
$mysqli ->query($sql);

?>

<script>
window.location = 'manufacturer.php'
</script>
?>