<?php include_once('header.php'); ?>

<section class="usermsg">
         <div class="contain">
           <h2>Item's List</h2>
         <table class="users">
             <tr>
               <th>S.No</th>
               <th>Item Name</th>
               <th>Item Price</th>
               <th>Category</th>
               <th>Item Image</th>
               <th>Quantity</th>
             </tr>
             <?php
                    $query = mysqli_query($conn, "SELECT * FROM items,category,manage_cart,users WHERE items.item_category=category.cat_id");
                    $i=1;
                    while ($row = mysqli_fetch_array($query)){
              ?>
             <tr>
     
                <td><?php echo $i; ?></td>
                <td><?php echo $row['item_name'];?></td>
            </tr>
            <?php $i++; } ?>
         </table>
         </div>
</section>

<?php include_once('footer.php'); ?>