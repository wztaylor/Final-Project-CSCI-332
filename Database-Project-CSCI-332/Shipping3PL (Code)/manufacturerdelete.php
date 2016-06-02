<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Manufacturer where manufacturerID = " . $_REQUEST['manufacturerID']);

?>

<script>
window.location = 'manufacturer.php'
</script>