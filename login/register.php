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
    <title>register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php

            include "config.php";
            if(isset($_POST['reg']))
            { 
                $username = mysqli_real_escape_string($conf, $_POST['username']);
                $email    = mysqli_real_escape_string($conf, $_POST['email']);
                $phone    = mysqli_real_escape_string($conf, $_POST['phone']);
                $pass     = mysqli_real_escape_string($conf, $_POST['password']);
            //  $cpass    = mysqli_real_escape_string($conf, $_POST['re_password']);

                // if($cpass == $pass)
                // {
                //     $insert = "INSERT INTO customers (Password) values ('$pass')";
                //     mysqli_query($conf, $insert);
                // }
                // else
                // {
                //     $message[] = 'password is not identical';
                // }
                $select = mysqli_query($conf, "SELECT * FROM `customers` WHERE User_Name = '$email' AND Password = '$pass'") or die('query failed');
                if(mysqli_num_rows($select) != 0){
                    echo "<div class='message'>
                        <p>This email is used, Try another one please</p>
                        </div><br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";      
                }
                else{
                    mysqli_query($conf, "INSERT INTO `customers`(Name, User_Name, phone, Password) VALUES('$username', '$email', '$phone', '$pass')") or die('query failed');
                    echo "<div class='message'>
                        <p>Registration Successfully!</p>
                        </div><br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
                }
            }else{
        ?>
            <header> 
                <center><h1> Sign Up </h1></center>
            </header>
            <form action="reg_connect.php" method="post">
                <div class="field input">
                    <label for="username"> Username </label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email"> Email </label>
                    <input type="email" name="email" autocomplete="off" id="email" required>
                </div>
                
                <div class="field input">
                    <label for="phone"> Phone </label>
                    <input type="tel" name="phone" autocomplete="off" id="phone" required>
                </div>

                <div class="field input">
                    <label for="password"> Password </label>
                    <input type="password" name="password" autocomplete="off" id="password" required>
                </div>

                <!-- <div class="field input">
                    <label for="re_password"> Password </label>
                    <input type="password" name="re_password" autocomplete="off" id="re_password" required>
                </div> -->

                <div class="field">
                    <input type="submit" class="btn" name="reg" value="Signup" required>
                </div>

                <div class="links">
                    Already a member?
                    <a href="index.php">Sign In</a>
                </div>
                    
            </form>
        </div>
                <?php } ?>
    </div>
    
</body>
</html>