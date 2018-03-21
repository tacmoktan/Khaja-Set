<?php
    include('../../backend/connect.php');
    
    if(isset($_POST['addorder']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
        if( !empty($name) && !empty($address) && !empty($phone) && !empty($item) && !empty($quantity))
        {
            $insert="insert into addorder(Name,Address,Phone,Item,Quantity) values ('$name','$address','$phone','$item','$quantity')";
            $query=mysqli_query($con,$insert);
            if($query)
            {
                header('location:../index.php');
            }
            else
            {
                header('location:../addorder.php');
            }
        }
        else
        {
            header('location:../addorder.php');
        }
    }
    
?>