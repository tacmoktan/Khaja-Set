<?php include('backend/check_session.php'); ?>
<?php include('header.php'); ?>
    <!--BODY OPEN-->
  <div class="container"> 
    <?php 
        include('backend/connect.php'); 

        $query = "select * from foodmenu";

        $result = mysqli_query($con, $query);

    ?>

            <?php while( $food = mysqli_fetch_assoc($result) ): ?>
            <div class="col-sm-4">
                <a target="_blank" href="image/food/<?php echo $food['imageName']; ?>">
                    <img class="img-responsive img-rounded" src="image/food/<?php echo $food['imageName']; ?>" alt="<?php echo $food['imageName']; ?>" style = "height:250px;width=250px;">
                </a>
                <dl>
                    <dt class="text-center"><?php echo $food['title']; ?></dt>
                    <dd class="text-center">Price: Rs. <?php echo $food['price']; ?>  </dd>
                </dl>
            </div>
            <?php endwhile;?>

  </div> 
    <!--BODY CLOSE-->
<?php include('footer.php'); ?>