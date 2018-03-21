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
                    <a class="navbar-brand" href="#" > ORDER TABLE</a>
                 </div>
                 <div class="">
                    <ul class="nav navbar-nav">
                    <li><a href="addorder.php">Add Order</a></li>
                    </ul>
                 </div>
    </div>
 </nav>   
<!--NAV CLOSE-->
<br />
<!--BODY OPEN-->
<div class="container">
   <!-- <div class="jumbotron"> -->
        <h3>Order Table</h3>
    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th><th>Name</th><th>Address</th><th>Phone</th><th>Item</th><th>Quantity</th><th>Action</th>
            </tr>
        </thead>
       <tbody> 
        <?php
        include('../backend/connect.php');
        $select="Select * from addorder";
        $query=mysqli_query($con,$select) or die(mysqli_error($con));
        if(mysqli_num_rows($query)!=false){            //to return the rows//
            while($row=mysqli_fetch_assoc($query)){  //to fetch the rows until no rows left
                echo "<tr>";
                foreach($row as $val){      //goes for each elements in row
                    
                    echo "<td>".$val."</td>";
                    ;
                }                                                                                       //php?Id= is to throw Id//
                echo "<td>"."<button class='btn btn-primary' type='button' name='update'><a href='update.php?Id=".$row['Id']."' style='color:white;text-decoration:none;'><span class='glyphicon glyphicon-pencil'> Update</span></a></button> 
                             <button class='btn btn-primary' type='button' name='delete'><a href='delete.php?Id=".$row['Id']."'style='color:white;text-decoration:none;'><span class='glyphicon glyphicon-remove'> Delete</span></a></button>"."</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
    </div>
   <!-- </div> -->
</div>
<!--BODY CLOSE-->
<br />
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

