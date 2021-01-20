<?php 
   require 'function.php';



?>
          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/register.css"></link>
</head>
<body>
    <form action="" method="POST">
        <div class="card">

        <div id="emailID">
                <label for="email"><p>email:</p></label>
                <input type="text" id="email" name="email" value="" placeholder=" Input email">
            </div>
            
            <div id="usernameID">
                <label for="username"><p>Username:</p></label>
                <input type="text" id="username" name="username" value="" placeholder=" Input Username">
            </div>

            <div id="passwordID">
                <label for="password"><p>Password:</p></label>
                <input type="password" id="password" name="password" value="" placeholder=" Input Password">
                <label for="confirm-password"><p>Confirm Password:</p></label>
                <input type="password" id="confirm-password" name="confirm-password" value="" placeholder=" Re-input Password">
            </div>
            <?php
               if(isset($_POST["submit"])){
                
                    if(confirmPassword($_POST)){
                            
                        if(create($_POST)>0){
                            header('Location: login.php');
                        }
                        else{
                            echo "<p style='color:white;'>Error</p>";
                        }
                    
                    }
                }
              
            ?>

           
            <button type="submit" id="register" name="submit"><h4>Register</h4></button>

        </div>
    </form>

    

    </div>
</body>
</html>