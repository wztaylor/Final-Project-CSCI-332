<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Shipper where shipperID = " . $_REQUEST['shipperID']);

?>

<script>
window.location = 'shipper.php'
</script>