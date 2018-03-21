<?php
session_start();

if(isset($_SESSION['name'])) {
     echo "Session Name// Current User : ".$_SESSION['name'];
 } else {
    echo "Session has not been created";
}

?>