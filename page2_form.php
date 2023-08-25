
<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['name'])){
 if (empty($_POST['name'])
 || empty($_POST['email'])
 || empty($_POST['contact'])
 || empty($_POST['gender']))
 
 { 
    $_SESSION['error_page1'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
    header("location: page1_form.php"); // Redirecting to second page. 
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
if (empty($_SESSION['error_page2'])) 

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
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
            <form action="page3_form.php" method="post">
                
                <label>Nationality :<span>*</span></label><br />
                <input name="nationality" id="nationality" type="text" value="" >

                


                <label>Qualification :<span>*</span></label>
                <select name="qualification">
                <option value="">----Select----</options>
                <option value="graduation" value="">Graduation </options>
                <option value="postgraduation" value="">Post Graduation </options>
                <option value="other" value="">Other </options>
                </select>
                
                <label>Job Experience :<span>*</span></label>
                <select name="experience">
                <option value="">----Select----</options>
                <option value="fresher" value="">Fresher </options>
                <option value="less" value="">Less Than 2 year </options>
                <option value="more" value="">More Than 2 year</options>
                </select>

                <label>Linkedin :<span>*</span></label><br />
                <input name="linkedin" id="linkedin" type="text" value="" >

                <input type="reset" value="Reset" />
                <input type="submit" value="Next" />
            </form>
 </div>
 </div>
 
 </body>
</html>

