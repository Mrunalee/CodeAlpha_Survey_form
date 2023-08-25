
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

        <?php
        session_start();
        if (isset($_POST['state']))
        {
            if (!empty($_SESSION['post']))
            {
                if (empty($_POST['address'])
                || empty($_POST['city'])
                || empty($_POST['pin'])
                || empty($_POST['state']))
                { 
                // Setting error for page 3.
                $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
                header("location: page3_form.php"); // Redirecting to third page.
                } 
                else 
                {
                    foreach ($_POST as $key => $value) 
                    {
                        $_SESSION['post'][$key] = $value;
                    } 

                    extract($_SESSION['post']); // Function to extract array.

                    //database connection

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "survey";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname); 
                        
                        // Storing values in database.
                        $query ="insert into data (name, email, contact, gender, nationality, qualification, experience, linkedin, address, city, pin, state) 
                    
                                values('$name','$email','$contact','$gender','$nationality','$qualification','$experience','$linkedin','$address','$city','$pin','$state')";
                    if ($query) 
                    {
                        echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
                    } 
                    else 
                    {
                        echo '<p><span>Form Submission Failed..!!</span></p>';
                    } 
                    unset($_SESSION['post']); // Destroying session.
                }
            } 
            else
            {
                header("location: page1_form.php"); // Redirecting to first page.
            }
        } 
        else
        {
            header("location: page1_form.php"); // Redirecting to first page.
        }
        ?>
 </div>
 </div>
 </body>
</html>

