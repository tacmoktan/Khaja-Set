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
                        <li class="active"><a href="menu.php">Menu</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="about.php">About</a></li>
                        
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="register.php"><span class="glyphicon glyphicon-user"> </span> Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>    
                    </div>
                    </div>
                </div>
            </div>    
    </nav>
    <br />
    <!--NAV CLOSE-->
    <!--BODY OPEN-->
  <div class="container"> 
    <div class="row"> <!--FIRST food items-->
            <div class="col-sm-4">
                <a target="_blank" href="image/food/daalbhaat.jpg"><img class="img-responsive img-rounded" src="image/food/daalbhaat.jpg" alt="daalbhaat"></a>
                <dl>
                    <dt>Daal Bhaat</dt>
                    <dd>Price: Rs. 130 </dd>
                </dl>
            </div>
            <div class="col-sm-4">
                <a target="_blank" href="image/food/maasuchiura.jpg"><img class="img-responsive img-rounded" src="image/food/maasuchiura.jpg" alt="maasuchiura"></a>
                <dl>
                    <dt>Maasu Chiura</dt>
                    <dd>Price: Rs. 130</dd>
                </dl>
            </div> 
            <div class="col-sm-4">
                <a target="_blank" href="image/food/momo.jpg"><img class="img-responsive img-rounded" src="image/food/momo.jpg" alt="momo"></a>
                <dl>
                    <dt>Mo:Mo</dt>
                    <dd>Price: Rs.100</dd>
                </dl>
            </div>   
    </div><br />
    <div class="row"> <!--SECOND food items-->
        <div class="col-sm-4">
            <a target="_blank" href="image/food/newarikhana.jpg"><img class="img-responsive img-rounded" src="image/food/newarikhana.jpg" alt="newarikhana"></a>
            <dl>
                <dt>Newari Khana</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
        <div class="col-sm-4">
            <a target="_blank" href="image/food/newarisnack.jpg"><img class="img-responsive img-rounded" src="image/food/newarisnack.jpg" alt="newarisnack"></a>
            <dl>
                <dt>Newari Snack</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
        <div class="col-sm-4">
            <a target="_blank" href="image/food/phapar.jpg"><img class="img-responsive img-rounded" src="image/food/phapar.jpg" alt="phapar"></a>
            <dl>
                <dt>Phapar ko dhido</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
    </div><br />
     <div class="row">  <!--last 3 food-->
        <div class="col-sm-4">
            <a target="_blank" href="image/food/potatosalad.jpg"><img class="img-responsive img-rounded" src="image/food/potatosalad.jpg" alt="potatosalad"></a>
            <dl>
                <dt>Potato Salad</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
        <div class="col-sm-4">
            <a target="_blank" href="image/food/samaybaji.jpg"><img class="img-responsive img-rounded" src="image/food/samaybaji.jpg" alt="samaybaji"></a>
            <dl>
                <dt>Samaybaji</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
        <div class="col-sm-4">
            <a target="_blank" href="image/food/thakali.jpg"><img class="img-responsive img-rounded" src="image/food/thakali.jpg" alt="thakali"></a>
            <dl>
                <dt>Thakali</dt>
                <dd>Price: Rs. 130</dd>
            </dl>
        </div>
    </div>
  </div> 
    <!--BODY CLOSE-->
    <!--FOOTER OPEN-->
    <br />
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