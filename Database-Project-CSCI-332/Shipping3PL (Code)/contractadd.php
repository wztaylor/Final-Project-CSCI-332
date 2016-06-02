<?php
if(!empty($_REQUEST['contractID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Contracts where contractID = " . $_REQUEST['contractID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $contractID = $row['contractID'];
        $name = $row['name'];
        $type = $row['type'];
        $duration = $row['duration'];
        $details = $row['details'];
        $clientID = $row['clientID'];
        $paymentID = $row['paymentID'];


        }
}
?>
<form action="contractsave.php">
<input type="hidden" name = "contractID" value ="<?php echo $_REQUEST['contractID'] ?>"/>
<input type="hidden" name = "clientID" value ="<?php echo $_REQUEST['clientID'] ?>"/>
<input type="hidden" name = "paymentID" value ="<?php echo $_REQUEST['paymentID'] ?>"/>

Name: <input type="text" name="name" value ="<?php echo $name ?>"/>
Type: <input type="text" name="type" value ="<?php echo $type ?>"/>
Duration: <input type="text" name="duration" value ="<?php echo $duration ?>"/>
Details: <input type="text" name="details" value ="<?php echo $details ?>"/>
Client ID: <input type="text" name="clientID" value ="<?php echo $clientID ?>"/>
Payment ID: <input type="text" name="paymentID" value ="<?php echo $paymentID ?>"/>
<input type="submit" value="Save"/>
</form>