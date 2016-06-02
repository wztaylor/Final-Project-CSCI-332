<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Deliveries where deliveryID = " . $_REQUEST['deliveryID']);

?>

<script>
window.location = 'deliveries.php'
</script>