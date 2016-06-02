<?php
$mysqli = new mysqli('37.60.234.248', 'zact5492_creator', 'school123', 'zact5492_logistics');

if ($mysqli->connect_errno) {
   
    echo "Errno: " . $mysqli->connect_errno . "</b>";
    echo "Error: " . $mysqli->connect_error . "</b>";
    
    exit;
}
?>