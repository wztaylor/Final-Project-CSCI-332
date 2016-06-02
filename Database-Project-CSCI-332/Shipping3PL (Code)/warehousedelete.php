<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Warehouses where warehouseID = " . $_REQUEST['warehouseID']);

?>

<script>
window.location = 'warehouses.php'
</script>