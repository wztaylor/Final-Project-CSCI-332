<?php
if(!empty($_REQUEST['clientID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Clients where clientID = " . $_REQUEST['clientID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $clientID = $row['clientID'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $zip = $row['zip']; 

        }
}
?>


<form action="clientsave.php">
<input type="hidden" name = "clientID" value ="<?php echo $_REQUEST['clientID'] ?>"/>
Name: <input type="text" name="name" value ="<?php echo $name ?>"/>
Phone: <input type="text" name="phone" value ="<?php echo $phone ?>"/>
Email: <input type="email" name="email" value ="<?php echo $email ?>"/>
Street: <input type="text" name="street" value ="<?php echo $street ?>"/>
City: <input type="text" name="city" value ="<?php echo $city ?>"/>
State: <input type="text" name="state" value ="<?php echo $state ?>"/>
Zip: <input type="text" name="zip" value ="<?php echo $zip ?>"/>

</br>
</br>
</br>



<input type="submit" value="Save"/>
</form>