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
                                $select="select * from addorder where Id='$id'";
                                $query= mysqli_query($con,$select) or die(mysqli_error($con));
                                // if($query){
                                 //   if(mysqli_num_rows($query)!=false){
                                 
                                        $row= mysqli_fetch_assoc($query);
                                            echo"<tr>";
                                            echo "<td>"."<input type='number' name='id' value=".$row['Id']." readonly>"."</td>";
                                            echo "<td>"."<input type='text' name='name' value=".$row['Name'].">"."</td>";
                                            echo "<td>"."<input type='text' name='address' value=".$row['Address'].">"."</td>";
                                            echo "<td>"."<input type='number' name='phone' value=".$row['Phone'].">"."</td>";
                                            echo "<td>"."<input type='text' name='item' value=".$row['Item'].">"."</td>";
                                            echo "<td>"."<input type='number' name='quantity' value=".$row['Quantity'].">"."</td>";
                                            echo "<td>"."<button type='submit' class='btn btn-primary' onclick='myfunction()' name='updateback'>
                                             Update  </button>  <script> confirm('Are you sure you want to update the data?');</script>"."</td>";
                                            echo"</tr>";
                                        
                                   // }
                             //}
                               // echo $id; //to check id fetched value
                           //  }
                                
                            ?>
                           
                        </tbody>
                    </table>
                    </form>
                </div>
        <!--</div>-->
    </div>
<!--BODY CLOSE-->

<?php include('../footer.php'); ?>