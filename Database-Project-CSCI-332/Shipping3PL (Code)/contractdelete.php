<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Contracts where contractID = " . $_REQUEST['contractID']);

?>

<script>
window.location = 'contracts.php'
</script>