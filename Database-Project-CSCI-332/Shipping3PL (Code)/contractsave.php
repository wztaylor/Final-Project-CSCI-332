<?php
include 'dbconnect.php';

if(empty($_REQUEST["contractID"])) 
{
$sql = "insert into Contracts (name,type,duration,details,clientID,paymentID) VALUES ('" . $_REQUEST["name"] . "','";
$sql .= $_REQUEST["type"] ."','";
$sql .= $_REQUEST["duration"] ."','";
$sql .= $_REQUEST["details"] ."','";
$sql .= $_REQUEST["clientID"] ."','";
$sql .= $_REQUEST["paymentID"] ."')";
}

else
{
 $sql = "update Contracts set name = '" . $_REQUEST["name"] . "',";
$sql .= "type = '" . $_REQUEST["type"]. "',"; 
$sql .= "duration = '" . $_REQUEST["duration"]. "',";
$sql .= "details = '" . $_REQUEST["details"]. "',";
$sql .= "clientID = '" . $_REQUEST["clientID"]. "',";
$sql .= "paymentID = '" . $_REQUEST["paymentID"]. "',";
$sql .= "where contractID = " . $_REQUEST['contractID'];
}

$mysqli ->query($sql);

?>


<script>
window.location = 'contracts.php'
</script>
?>