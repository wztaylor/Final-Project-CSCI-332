<?php
if(!empty($_REQUEST['paymentID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Payment where paymentID = " . $_REQUEST['paymentID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $paymentID = $row['paymentID'];
        $referenceNumber = $row['referenceNumber'];
        $amount = $row['amount'];
        $date = $row['date'];
        $paymentMethod = $row['paymentMethod'];
        $contractID = $row['contractID'];
        }
}
?>


<form action="paymentsave.php">
<input type="hidden" name = "paymentID" value ="<?php echo $_REQUEST['paymentID'] ?>"/>
<input type="hidden" name = "contractID" value ="<?php echo $_REQUEST['contractID'] ?>"/>

Reference Number: <input type="text" name="referenceNumber" value ="<?php echo $referenceNumber ?>"/>
Amount: <input type="text" name="amount" value ="<?php echo $amount ?>"/>
Date <input type="date" name="date" value ="<?php echo $date ?>"/>
Payment Method: <input type="text" name="paymentMethod" value ="<?php echo $paymentMethod ?>"/>
Contract ID: <input type="text" name="contractID" value ="<?php echo $contractID ?>"/> 

<input type="submit" value="Save"/>
</form>