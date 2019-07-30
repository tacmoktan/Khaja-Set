<?php include('header.php'); ?>
<!--BODY OPEN-->
<div class="container" id="orderTable-container">
 <!-- <div class="jumbotron"> -->
    <h3>Order Table </h3>
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

                    if( $val != $row['email'])    //not displaying email in the Order table
                        echo "<td>".$val."</td>";
                    
                }                                                                                       //php?Id= is to throw Id//

                //to allow update/delete feature to respective user's record only
                if($_SESSION['email'] == $row['email']){ 
                    echo 
                    "<td>"."<button class='btn btn-primary' type='button' name='update'>
                    <a href='update.php?Id=".$row['id']."' style='color:white;text-decoration:none;'>
                    <span class='glyphicon glyphicon-pencil'> Update</span>
                    </a>
                    </button> 
                    <button class='btn btn-primary' type='button' name='delete'>
                    <a href='delete.php?Id=".$row['id']."'style='color:white;text-decoration:none;'>
                    <span class='glyphicon glyphicon-remove'> Delete</span>
                    </a>
                    </button>"."</td>";
                }
                
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
<?php include('../footer.php'); ?>