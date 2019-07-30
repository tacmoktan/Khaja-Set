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
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    
    <!--font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
    <!--NAV OPEN-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="col-sm-9">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" > ORDER TABLE</a>
                </div>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li><a href="addorder.php">Add Order</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <form action="../backend/logoutbackend.php">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                session_start();
                echo  $_SESSION['name']
                ?>
                <button type="submit" class="btn btn-default" style="margin-top:4px;">
                    <span style="font-family:serif;font-weight: bold; text-decoration: none">Logout</span>
                </button>
            </form>
        </div>

    </div>
</nav>   
<!--NAV CLOSE-->