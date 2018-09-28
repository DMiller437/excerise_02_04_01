<!DOCTYPE html>
<html>
<head>
   <!--
     excerise 02_04_01
     Author: Dylan J. Jones-Miller
     date: 9.26.18
     
     ProcessScholarship.php
    -->
    <title>Process Scholarship</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="intial-scale=1.0">
    <script src="modernizr.custom.65897.js"> </script>
</head>
<body>
    <h2>Process Scholarship</h2>
<?php
    //declaring variables
    //using superglobal methods to get data from inputs
    $firstName = stripslashes($_POST['fName']);
    $lastName = stripslashes($_POST['lName']);
    //displaying a message using the variables.
    echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    
    
    
?>

</body>
</html>
