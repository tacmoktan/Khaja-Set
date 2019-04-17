<?php include('header.php'); ?>
<!--BODY OPEN-->
<div class="container" id="register-container">
        <h2>Registration</h2>
    <form action="backend/create_account.php" method="POST">
        <div class="form-group">
        <label for="name"> Name </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"  >
        </div>
        <div class="form-group">
        <label for="email"> Email </label>
        <input type="text" class="form-control" id="email" name="email" placeholder="@email.com" >
        </div>
        <div class="form-group">
        <label for="password"> Password</label>
        <input type="password" class="form-control" id="password" name="password"  />
        </div>
        <div class="form-group">
        <label for="confirmpassword"> Confirm Password </label>
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
        </div>
        
        <button type="submit" class="btn btn-primary" name="register">Register</button>
        
    </form>
</div>

<!--BODY CLOSE-->
<?php include('footer.php') ?>