<?php include_once('header.php') ?>

     <container class="categorycontainer">
    <div class="categoryHeading"> 
        <?php
                    $query = mysqli_query($conn, "SELECT * FROM category WHERE cat_id=".$_GET['id']);
                    while ($row = mysqli_fetch_array($query)){
                      $cat_name = $row['cat_name'];
                    }
                    ?>
            <h2><?php echo $cat_name; ?> Items</h2>
    </div>
    <div class="categoryContent">
         <div class="categoryCommon">
             <?php
                    $query = mysqli_query($conn, "SELECT * FROM items WHERE item_category=".$_GET['id']);
                    while ($row = mysqli_fetch_array($query)){
                      $id = $row['item_id'];
                      $item_img = $row['item_img'];
                      $item_name = $row['item_name'];
                      $item_price = $row['item_price'];
                    ?>
                        <div class="item">
                           <img src="items/<?php echo $item_img; ?>" alt="<?php echo $item_name; ?>">
                           <h2><?php echo $item_name; ?></h2>
                           <p>&#8377;<?php echo $item_price; ?>/Kg</p>
                           <div class="divpr">
                             <span id="divpr<?php echo $id; ?>">
                                <button id="addtocart" class="cart">ADD TO CART</button> 
                             </span> 
                           </div>
                        </div>
                    <?php } ?>
         </div>
     </div>
 </container>

<?php include_once('footer.php') ?>