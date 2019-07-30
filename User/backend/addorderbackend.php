<?php
    include('../../backend/connect.php');
    
    if(isset($_POST['addorder']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $item=$_POST['item'];
        $quantity=$_POST['quantity'];
        if( !empty($name) && !empty($email) && !empty($address) && !empty($phone) && !empty($item) && !empty($quantity))
        {
            $insert="insert into addorder(name, email, address, phone, item, quantity) values ('$name', '$email', '$address','$phone','$item','$quantity')";
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