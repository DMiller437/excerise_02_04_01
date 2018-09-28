<!DOCTYPE html>
<html>

<head>
    <!--
     excerise 02_04_01
     Author: Dylan J. Jones-Miller
     date: 9.26.18
     
     ProcessScholarship2.php
    -->
    <title>Process Scholarship</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="intial-scale=1.0">
    <script src="modernizr.custom.65897.js">


    </script>
</head>

<body>
    <h2>Process Scholarship Two</h2>
<?php
    $errorCount = 0;
    
    //function to display errror message
    function displayRequired($fieldName) {
        echo "The field \"$fieldName\" is required!<br>\n";
    }
    
    //validating the input
    function validateInput($data, $fieldName) {
        global $errorCount;
        //if missing a field display the error message
        if (empty($data)) {
            displayRequired($fieldName);
            ++$errorCount;
            $retval = "";
        } else {
            //storing the data but cleaned up
            $retval = trim($data);
            $retval = stripslashes($retval);
        }
        //returning the value
        return $retval;
    }
    
    //redisplaying the form if there was errors
    function redisplayForm($firstName, $lastName) {
    ?>
    <h2 style = "text-align: center">Scholarship Form</h2>
    <form name="scholarship" action="ProcessScholarship2.php" method="post">
        <p>First name:
            <input type="text" name="fName" value = "<?php echo $firstName; ?>"
        </p>
        <p>Last name:
            <input type="text" name="lName" value = "<?php echo $lastName; ?>"
        </p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" value="Send Form">
        </p>
        </form>
    <?php
    }
    //declaring variables
    //using superglobal methods to get data from inputs
    $firstName = validateInput($_POST['fName'], "First Name");
    $lastName = validateInput($_POST['lName'], "Last Name");
    if($errorCount > 0) {
        //error message to guide the user
        echo "$errorCount errors: Please re-enter the information below.<br>\n";
        redisplayForm($firstName, $lastName);
    } else{
        //displaying a message using the variables.
        echo "Thank you for filling out the scholarship form " . $firstName . " " . $lastName . ".";
    }
?>

</body>

</html>
