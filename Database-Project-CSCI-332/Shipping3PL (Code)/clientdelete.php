<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Clients where clientID = " . $_REQUEST['clientID']);

?>

<script>
window.location = 'clients.php'
</script>