<?php
    include('../../backend/connect.php');
    if(isset($_POST['updateback'])){
        
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
        
        $update=" Update addorder set Name='$name',Address='$address',Phone='$phone',Item='$item',Quantity='$quantity' where Id='$id'  ";
        $query=mysqli_query($con,$update) or die(mysqli_error($con));
        
        if($query){
           // echo "data updated";
            header('location:../index.php');
        }
        else{
           // echo "data update fail";
            header('location:updatebackend.php');
        }
        
    }
    
?>