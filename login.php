<?php include("header.php"); ?>
    <!--BODY OPEN-->
    
<div class="container" id="login-container">
    
       
    <form action="backend/loginbackend.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="@gmail.com" > 
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <button class="btn btn-primary" type="submit" name="login">Login</button><br /><br />
        <p> <a href="register.php">Register</a> an account? </p>
    </form>  
</div>

    <!--BODY CLOSE-->
    
<?php include('footer.php'); ?>