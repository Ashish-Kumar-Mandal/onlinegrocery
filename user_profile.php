<?php include_once('header.php');

$user_id = $_SESSION['user_id'];
$query = mysqli_query($conn, "SELECT * from users WHERE user_id=$user_id");
while($row =  mysqli_fetch_array($query)){
    $f_name =  $row['f_name'];
    $l_name =  $row['l_name'];
    $email =  $row['email'];
    $mobile =  $row['mobile'];
    $address =  $row['address'];
}

?>
<container class="signupcontainer">
    <div class="signupheading">
        <h2>Online Grocery</h2>
        <p><b>USER'S PROFILE</b></p>
        <hr>
    </div>
    <div class="signupform">
           <form action="" method="post">
               <div class="element">
                   <input type="text" value="<?php echo $f_name; ?>" name="firstname" placeholder="Enter the first name">
                   <input type="text" value="<?php echo $l_name; ?>" name="lastname" placeholder="Enter the Last name">
               </div>
               <div class="element">
                   <input type="email" value="<?php echo $email; ?>" name="email" placeholder="Enter the email">
                   <input type="number" value="<?php echo $mobile; ?>" name="mobno" id="mobile" placeholder="Enter the mob no.">
               </div>
               <div class="element">
                   <textarea name="address" id="add" placeholder="Enter the Address Details" style="padding-left:9px;"><?php echo $address; ?></textarea>
               </div>
               <div class="btns">
                    <span><input type="submit" name="save" value="Update" id="s1"></span>
                </div>
           </form>
    </div>
    </container>
<?php include_once('footer.php');?>