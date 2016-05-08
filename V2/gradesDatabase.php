<?php

                
     $name=$_POST["name"];
     $Class=$_POST["Class"];
     $ClassGrade=$_POST["Grade"];
     $Comment=$_POST["comments"];
        

            $servername = "localhost";
            $username = "seniorgato";
            $password = "";
            $dbname = "c9";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "UPDATE `TABLE 2` SET $Class='$ClassGrade', Comments='$Comment' WHERE LastName='$name'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header("location: graphic.php?ln=$name");

            } else {
                echo "Error updating record: " . $conn->error;
            }
            
            $conn->close();

    
    
    
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <script src="go-debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.6.2/go-debug.js"></script>
        <title>Graphic</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="graphic.css">
    </head>
    
    <body>

    </body>

</html>
