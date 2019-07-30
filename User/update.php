<?php include('header.php'); ?>

<!--BODY OPEN-->
<div class="container">
  <!--  <div class="jumbotron"> -->
    <h3>Order Table</h3>
    <div class="table-responsive">
      <form action="backend/updatebackend.php" method="POST">
        <table class="table">
          <thead>
            <tr><th>Id</th><th>Name</th><th>Address</th><th>Phone</th><th>Item</th><th>Quantity</th><th>Action</th></tr> 
          </thead>
          <tbody>

            <?php
              include('../backend/connect.php');
              $id=$_GET['Id']; // to catch the thrown Id//
              $select="select * from addorder where id='$id'";
              $query= mysqli_query($con,$select) or die(mysqli_error($con));
              // if($query){
               //   if(mysqli_num_rows($query)!=false){

              $row= mysqli_fetch_assoc($query);
            ?>    
              <tr>
                <td> <input type="number" name="id" value="<?php echo $row["id"];?>" readonly></td>
                <td><input type="text" name="name" value="<?php echo $row["name"];?>" placeholder="full name" required></td>
                <td><input type="text" name="address" value="<?php echo $row["address"];?>" required>  </td>
                <td><input type="number" name="phone" value="<?php echo $row["phone"];?>" required></td>
                <td>
                  <select type="text" name="item" value="<?php echo $row["item"];?>" required>
                    <?php

                    $select = " select title from foodmenu";

                    $query = mysqli_query($con, $select);
                    
                    if(mysqli_num_rows($query) != false){
                        while( $food = mysqli_fetch_assoc($query) ){

                            echo "<option>".$food['title']."</option>";
                        }
                    }
                    ?>
                  </select>
                </td>
                <td><input type="number" name="quantity" value="<?php echo $row["quantity"];?>"  min="0" required></td>
                <td>
                  <button type="submit" class="btn btn-primary" name="updateback" >
                    Update  
                  </button>
                </td>
              </tr>


            </tbody>
          </table>
        </form>
      </div>
      <!--</div>-->
    </div>
    <!--BODY CLOSE-->

<?php include('../footer.php'); ?>