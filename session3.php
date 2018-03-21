<?php
session_start();

//session_destroy();
unset($_SESSION['name']);

if(isset($_SESSION['name'])) {
    echo "I am still here / Not logged out";
} else {
    echo "Did you just refresh? / Log out";
}
?>