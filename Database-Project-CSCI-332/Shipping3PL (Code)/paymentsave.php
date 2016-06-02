<?php
include 'dbconnect.php';
if(empty($_REQUEST["paymentID"])) 
{
$sql = "insert into Payment (referenceNumber,amount,date,paymentMethod,contractID) VALUES ('" . $_REQUEST["referenceNumber"] . "','";
$sql .= $_REQUEST["amount"] ."','";
$sql .= $_REQUEST["date"] ."','";
$sql .= $_REQUEST["paymentMethod"] ."','";
$sql .= $_REQUEST["contractID"] ."')";
}
else
{
 $sql = "update Payment set referenceNumber = '" . $_REQUEST["referenceNumber"] . "',";
$sql .= "amount = '" . $_REQUEST["amount"]. "',"; 
$sql .= "date = '" . $_REQUEST["date"]. "',";
$sql .= "paymentMethod = '" . $_REQUEST["paymentMethod"]. "',";
$sql .= "contractID = '" . $_REQUEST["contractID"]. "',";
$sql .= "where paymentID = " . $_REQUEST['paymentID'];
}
$mysqli ->query($sql);

?>


<script>
window.location = 'payment.php'
</script>
?>