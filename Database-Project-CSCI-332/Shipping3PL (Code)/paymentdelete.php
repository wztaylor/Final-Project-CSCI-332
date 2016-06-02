<?php 
include 'dbconnect.php';
$mysqli ->query("Delete from Payment where paymentID = " . $_REQUEST['paymentID']);

?>

<script>
window.location = 'payment.php'
</script>