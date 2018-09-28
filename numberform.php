<!DOCTYPE html>
<html>
<head>
   <!--
     excerise 02_04_01
     Author: Dylan J. Jones-Miller
     date: 9.27.18
     
     numberform.php
    -->
    <title>Superglobals</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="intial-scale=1.0">
    <script src="modernizr.custom.65897.js"> </script>
</head>
<body>
<h2>Number Form</h2>
<?php
    //declaring global variables
    $displayForm = true;
    $number = "";
    //testing if the user as submitted the form
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        //checking if what was entered was a number
        if (is_numeric($number)) {
            $displayForm = false;
        } else {
            echo "<p> You need to eneter a numeric value. </p>\n";
           $displayForm = true; 
        }
        
    }
    //redisplaying the form if necessary
    if($displayForm) {
     ?>
     <form name = "numberForm" action="numberform.php" method="post">
        <p>
            Enter a number: <input type = "text" name = "number" value = "<?php echo $number; ?>">
        </p>
        <p>
            <input type = "reset" value="Clear Form">&nbsp;&nbsp;
            <input type = "submit" name = "submit"  value="Send Form">
        </p>     
     </form>
     
    <?php   
    }
    else{
        echo "<p>Thank you for entering a number.</p>\n";
        echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
        echo "<p><a href = \"numberform.php\">Try again?</a></p>\n";

    }
    
?>

</body>
</html>
