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
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">
            <?php
            $id = $_SESSION['cus_ID'];
            $select = mysqli_query($conf, "SELECT * FROM customers WHERE ID = $id");

            while($result = mysqli_fetch_assoc($select))
            {
                $res_name  = $result['Name'];
                $res_Uname = $result['User_Name'];
                $res_phone = $result['phone'];
                $res_ID    = $result['ID'];
            }
            

            echo "<a href='edit.php? ID=$res_ID'>Ching Profile</a>"
            ?>


            
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p> Helo <b> <?php echo $res_name ?> </b>, Welcome </p>
                </div>
                <div class="box">
                    <p> Your Email Is <b> <?php echo $res_Uname ?> </b>, Welcome </p>
                </div>
                <div class="box">
                    <p> And You Are Phone Is <b> <?php echo $res_phone ?> </b>, Welcome </p>
                </div>
            </div>
            <div class="bottom">
               
            </div>
        </div>
    </main>
</body>
</html>