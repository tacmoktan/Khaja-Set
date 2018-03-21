<?php
    include('connect.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $select=" select * from teamkhajaset where user_email='$email' AND user_password='$password'";
        $query=mysqli_query($con,$select);
        if(mysqli_num_rows($query)===1)
        {  
            header('location:../User/index.php');
        }
        else
        {
            header('location:../login.php');
        }
    }
?>