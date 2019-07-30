<?php include('header.php'); ?>
    <!--BODY OPEN-->
 <div class="container" id="addorder-container">
    
    <form action="backend/addorderbackend.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" placeholder="Full Name" autofocus required/>
            <!-- to send user's email data secretly to addorder table -->
            <input type="hidden" name="email" value=<?php echo $_SESSION['email'];?> />
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" min="0" required/>
        </div>
        <div class="form-group">
            <label for="item">Item</label>
            
            <select type="text" class="form-control" id="item" name="item" required>
                <?php
                    include('../backend/connect.php');  //creates db connection

                    $select = " select title from foodmenu";

                    $query = mysqli_query($con, $select);

                    if( mysqli_num_rows($query) != false){
                        while( $food = mysqli_fetch_assoc($query) ){

                            echo "<option>".$food['title']."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="0" required/>
        </div>
        <button class="btn btn-primary" name="addorder"> Add Order </button>
    </form>    
 </div>
 
    <!--BODY CLOSE-->
<?php include('../footer.php'); ?>