<?php
session_start(); // Session starts here.
?>

<!DOCTYPE HTML>
<html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
        <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
            <title>Survey Form</title>
            <link rel="stylesheet" href="style.css" />
        </head>
    <body>
        <div class="container">
            <div class="main">
                <h2>Let's Take A Review</h2>

                <span id="error">
                    <!---- Initializing Session for errors --->
                <?php
                    if (!empty($_SESSION['error'])) 
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
                </span>
                <form action="page2_form.php" method="post">

                <label>Full Name :<span>*</span></label>
                <input name="name" type="text" placeholder="Ex-firstname lastname" required>

                <label>Email :<span>*</span></label>
                <input name="email" type="email" placeholder="Ex-example@gmail.com" required>

                <label>Contact :<span>*</span></label>
                <input name="contact" type="text" placeholder="10-digit number" required>

                <label>Gender :<span>*</span></label>
                <input type="radio" name="gender" value="male" required>Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other<br>

                <!--<label>Password :<span>*</span></label>
                <input name="password" type="Password" placeholder="*****" />

                <label>Re-enter Password :<span>*</span></label>
                <input name="confirm" type="password" placeholder="*****" >
                -->
                
                
                <input type="reset" value="Reset" />
                <input type="submit" value="Next" /><br><br>
                </form>
            </div>
        </div>

        
    </body>
</html>

