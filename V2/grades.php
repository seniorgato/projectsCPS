<?php
         $con = mysql_connect("localhost","seniorgato","");
                if(!$con){
                    die("Can't Connect:" . mysql_error());
                }
                mysql_select_db("c9",$con);
                

        
        $name = $_GET['ln'];
        $Class=$_GET['Class'];
        $ClassGrade = $_GET['ClassGrade'];
        echo $name;
        echo $Class;
        echo $ClassGrade
        
        
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
