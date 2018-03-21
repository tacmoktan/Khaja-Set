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
    <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" > ORDER TABLE</a>
                 </div>
                 <ul class="nav navbar-nav">
                 <li><a href="addorder.php">Add Order</a></li>
                 </ul>
                 
        
    </div>
 </nav>   
<!--NAV CLOSE-->
<br />
    <!--BODY OPEN-->
 <div class="container">
    
    <form action="backend/addorderbackend.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" >
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" />
        </div>
        <div class="form-group">
            <label for="item">Item</label>
            <input type="text" class="form-control" id="item" name="item">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quanitity" name="quantity" />
        </div>
        <button class="btn btn-primary" name="addorder"> Add Order </button>
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
                <dd><a href="https://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:20px;color:#2C2C2C;"></i></dd></a>
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