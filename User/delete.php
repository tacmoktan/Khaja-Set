<?php
   include('../backend/connect.php');
   $id=$_GET['Id'];
   
    $delete="delete from addorder where Id='$id'";
    $query=mysqli_query($con,$delete) or die(mysqli_error($con));
    if($query){
        header('location:index.php');
    }
    else
        header('location:delete.php');
        
        
    
?>