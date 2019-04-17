<?php include('header.php'); ?>
    <!--BODY OPEN-->
 <div class="container" id="addorder-container">
    
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
 
    <!--BODY CLOSE-->
<?php include('../footer.php'); ?>