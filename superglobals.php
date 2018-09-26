<!DOCTYPE html>
<html>
<head>
   <!--
     excerise 02_04_01
     Author: Dylan J. Jones-Miller
     date: 9.26.18
     
     superglobals.php
    -->
    <title>Superglobals</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="intial-scale=1.0">
    <script src="modernizr.custom.65897.js"> </script>
</head>
<body>
<h2>Superglobals</h2>
<?php
    echo "<h3>Superglobal array \$SERVER[]</h3>";
    //displaying the name of the current script using a superglobal.
    echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br>";
    
    //displaying the server software being used by using the superglobal.
    echo "<p>The script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
    
    //displaying the server name using a superglobal.
    echo "<p>The script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br>";
    
    //displaying the protocol that was used by using a superglobal
    echo "<p>The script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br>";
    
    //displaying the server ip  by using a superglobal
    echo "<p>The server address is: ", $_SERVER["SERVER_ADDR"], "<br>";
    
    //displaying the gateway that was used by using a superglobal
    echo "<p>This script is running on the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br>";
    
    //displaying the request method that was used
    echo "<p>This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"], "<br>";
    
    
    
?>

</body>
</html>
