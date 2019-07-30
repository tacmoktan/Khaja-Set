<?php
    include('connect.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $select=" select * from teamkhajaset where user_email='$email' AND user_password='$password'";
        /* query to check if the record is present in db*/
        $query=mysqli_query($con,$select);

        if(mysqli_num_rows($query)===1)
        {  

            session_start();
            if( $record =  mysqli_fetch_assoc($query)){
                $_SESSION['name']= $record['user_name'];
                $_SESSION['email']= $record['user_email'];
            }
            
            header('location:../User/index.php');
        }
        else
        {
            header('location:../login.php');
        }
    }
?>