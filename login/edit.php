<?php
session_start();
include "config.php";
if(!isset($_SESSION['valid']))
{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Ching Profile</title>
</head>
<body>
<div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Ching Profile</a>
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">

            <?php 
            if(isset($_post['Update']))
            {
                $name   = $_POST['name'];
                $Uname  = $_POST['email'];
                $phone  = $_POST['phone'];

                $id = $_SESSION['cus_ID'];
                $edit = mysqli_query($conf, "UPDATE `customers` SET Name ='$name', User_Name ='$Uname', phone='$phone' WHERE ID = $id");

                if($edit){
                    echo "<div class='message'>
                          <p>Profile UPdating Successfully!</p>
                          </div><br>";
                    echo "<a href='home.php'><button class='btn'>Go Home</button></a>";
                }

            }
            else{
                $id = $_SESSION['cus_ID'];
                $select = mysqli_query($conf, "SELECT * FROM `customers` WHERE ID = $id");

                while($result = mysqli_fetch_assoc($select))
                {
                    $res_name  = $result['Name'];
                    $res_Uname = $result['User_Name'];
                    $res_phone = $result['phone'];
                };
            ?>

            <header> 
                <center><h1> Ching Profile </h1></center>
            </header>

            <form action="" method="POST">
                <div class="field input">
                    <label for="name"> Username </label>
                    <input type="text" name="name" value="<?php echo $res_name ?>" id="name" required>
                </div>

                <div class="field input">
                    <label for="email"> Email </label>
                    <input type="email" name="email" value="<?php echo $res_Uname ?>" autocomplete="off" id="email" required>
                </div>

                <div class="field input">
                    <label for="phone"> phone </label>
                    <input type="tel" name="phone" value="<?php echo $res_phone ?>" autocomplete="off" id="phone" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="Update" value="Update" required>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>