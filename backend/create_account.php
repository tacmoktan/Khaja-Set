<?php
    include('connect.php');
    
    //connection
    if(isset($_POST['register']))
   {
        $name=$_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        
        if($name!="" && $email!="" && $password==$confirmpassword)  //!empty($name)
        {
        $insert="insert into teamkhajaset(user_name,user_email,user_password) values('$name','$email','$password')";
        $query=mysqli_query($con,$insert);
    
            if($query)
            {
                header('location:../login.php');
            }
            else
            {
               header('location:../register.php');
            }
            
        }
        else
        {
            header('location:../register.php');
        }
    
   }
?>


