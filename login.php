<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--to connect with main.css-->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    
    <!--font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!--NAV OPEN-->
    <nav class="navbar navbar-default">
           <div class="container-fluid" >
                <div class="row">
                    <div class="col-sm-2">
                    <div class="navbar-header"> 
                        <a class="navbar-brand" href="index.php"> <img id="logo" src="image/logo.jpg"></a>
                        <a class="navbar-brand" href="index.php"> Khaja Set</a>    
                        <button type="button" class=" navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#navi"></button>
                                
                    </div>
                    </div>
                    <div class="col-sm-10">
                     <div class="collapse navbar-collapse" id="navi">   
                        <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="about.php">About</a></li>
                        
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="register.php"><span class="glyphicon glyphicon-user"> </span> Sign Up</a></li>
                            <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>    
                    </div>
                    </div>
                </div>
            </div>    
    </nav>
    <!--NAV CLOSE-->
    <!--BODY OPEN-->
    <br />
<div class="container">
    
       
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
<br />
    <!--BODY CLOSE-->
    
      <!--FOOTER OPEN-->
    <div class="container-fluid">
        <div class="jumbotron">
       <div class="row" >
       <div class="col-sm-5">
            <h4>CONTACT</h4>
                <dl>
                    <dt>Mobile</dt>
                    <dd>9812345678</dd>
                </dl>
                <dl>
                    <dt>Landline</dt>
                    <dd>4412345</dd>
                </dl>
       </div>
       <div class="col-sm-5">
            <h4>FOLLOW US ON: </h4> 
            <dl>
                <dt>Facebook</dt>
                <dd><i class="fa fa-facebook-square" style="font-size:20px;color:#2C2C2C;"></i></dd>
                <dt>Instagram</dt>
                <dd><i class="fa fa-instagram" style="font-size: 20px;color:#2C2C2C;"></i></dd>
                <dt>Youtube</dt>
                <dd><i class="fa fa-youtube" style="font-size: 20px;color:#2C2C2C;"></i></dd>
            </dl>
            <!--
            <i class="fa fa-twitter-square" style="font-size:20px;color:#2C2C2C;"></i>
            <i class="fa fa-google" style="font-size: 20px;color:#2C2C2C;"></i>
              -->
        </div>
         
        </div> 
        </div>
        <div class="panel panel-default">
        <h5><p class="text-center">   All rights reserved &copy; 2017.</p> </h5>
        </div>
    </div>
    <!--FOOTER CLOSE-->
</body>    
</html>