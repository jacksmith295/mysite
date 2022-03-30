<?php
/* Attempt to connect to MySQL database */
$link = mysqli_connect('mysql://doadmin:5kOHxcrc4H34T8QK@websitedatabase-do-user-11242026-0.b.db.ondigitalocean.com:25060/defaultdb?ssl-mode=REQUIRED');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>