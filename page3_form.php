
<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['nationality']))
{
    if (empty($_POST['nationality'])
    
    || empty($_POST['qualification'])
    || empty($_POST['experience'])
    || empty($_POST['linkedin']))
    { 
        $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
        header("location: page2_form.php"); // Redirecting to second page. 
    } 
    else
    {
        // Fetching all values posted from second page and storing it in variable.
        foreach ($_POST as $key => $value) 
        {
            $_SESSION['post'][$key] = $value;
        }
    }
} 
else
{
 if (empty($_SESSION['error_page3'])) 
 
 {
    header("location: page1_form.php");// Redirecting to first page.
 }
}

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
                <h2>Let's Take A Review</h2><hr/>

                <span id="error">
                    <?php
                        if (!empty($_SESSION['error_page3'])) 
                        {
                            echo $_SESSION['error_page3'];
                            unset($_SESSION['error_page3']);
                        }
                ?>
                </span>
                    <form action="page4_form.php" method="post">
                        

                        <label>City :<span>*</span></label>
                        <input name="city" id="city" type="text" size="25" required>

                        <label>Pin Code :<span>*</span></label>
                        <input name="pin" id="pin" type="text" size="10" required>

                        <label>State :<span>*</span></label>
                        <input name="state" id="state" type="text" size="30" required>

                        <label>Address :<span>*</span></label>
                        <input name="address" id="address" type="text" size="50" required>
                        
                        <input type="reset" value="Reset" />
                        <input name="submit" type="submit" value="Submit" />
                    </form>
            </div> 
        </div>

        
    </body>
</html>

