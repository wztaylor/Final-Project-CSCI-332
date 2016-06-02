<?php
include 'dbconnect.php';
if(empty($_REQUEST["clientID"])) 
{
$sql = "insert into Clients (name,phone,email,street,city,state,zip) VALUES ('" . $_REQUEST["name"] . "','";
$sql .= $_REQUEST["phone"] ."','";
$sql .= $_REQUEST["email"] ."','";
$sql .= $_REQUEST["street"] ."','";
$sql .= $_REQUEST["city"] ."','";
$sql .= $_REQUEST["state"] ."','";
$sql .= $_REQUEST["zip"] ."')";
}
else
{
 $sql = "update Clients set name = '" . $_REQUEST["name"] . "',";
$sql .= "phone = '" . $_REQUEST["phone"]. "',"; 
$sql .= "email = '" . $_REQUEST["email"]. "',";
$sql .= "street = '" . $_REQUEST["street"]. "',";
$sql .= "city = '" . $_REQUEST["city"]. "',";
$sql .= "state = '" . $_REQUEST["state"]. "',";
$sql .= "zip = '" . $_REQUEST["zip"] . "' ";
$sql .= "where clientID = " . $_REQUEST['clientID'];
}
$mysqli ->query($sql);

?>


<script>
window.location = 'clients.php'
</script>
?>