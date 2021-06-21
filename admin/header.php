<?php 
if(!isset($_SESSION['user_id'])){
    header('Location:../login.php');
    session_destroy();
}

session_start();
include_once('connect_db.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grocery</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/websitelogo.png"  
    />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/utilis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <header class="head">
        <div class="d1">
            <p class="p1">Online Grocery</p>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
            </ul>
        </nav>


        <div class="butns">
            <?php if(isset($_SESSION['name'])){?>
                <p class="title"><?php echo "Hi: ".$_SESSION['name'];?></p>
               <?php 
                echo " <a href='../logout.php' id='logout'>LogOut</a>";?>

           <?php } ?>
        </div>        
    </header>
    <main  id="#main" class="mainclass">

        <?php if(isset($_GET['error'])){?>
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #ff0000; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['error']; ?>
                </span></center>
        <?php }else if(isset($_GET['done'])){?>       
            <center style="text-align:center;cursor:pointer;" id="hide" title='Close It'><a onclick="document.getElementById('hide').style.display='none'"><span style="padding: 10px; background-color: #ffffff; color: #00ff00; font-size: 20px; font-weight: bold; border-radius: 5px; "><?php echo @$_GET['done']; ?>
                </span></center>
        <?php }else{ echo ""; } ?>
        