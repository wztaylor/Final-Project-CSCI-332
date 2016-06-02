<?php
if(!empty($_REQUEST['manufacturerID']))  {
    include 'dbconnect.php';
    $sql = "Select * from Manufacturer where manufacturerID = " . $_REQUEST['manufacturerID'];
    if ($result = $mysqli->query($sql))
    if($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $manufacturerID = $row['manufacturerID'];
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

<form action="manufacturersave.php">
<input type="hidden" name = "manufacturerID" value ="<?php echo $_REQUEST['manufacturerID'] ?>"/>
Name: <input type="text" name="name" value ="<?php echo $name ?>"/>
Phone: <input type="text" name="phone" value ="<?php echo $phone ?>"/>
Email: <input type="email" name="email" value ="<?php echo $email ?>"/>
Street: <input type="text" name="street" value ="<?php echo $street ?>"/>
City: <input type="text" name="city" value ="<?php echo $city ?>"/>
State: <input type="text" name="state" value ="<?php echo $state ?>"/>
Zip: <input type="text" name="zip" value ="<?php echo $zip ?>"/>
<input type="submit" value="Save"/>
</form>