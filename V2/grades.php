<?php

                
        $name = $_GET['ln'];
        $Class=$_GET['Class'];
        $ClassGrade = $_GET['ClassGrade'];
      
      
             
                    $con = mysql_connect("localhost","seniorgato","");
        if(!$con){
            die("Can't Connect:" . mysql_error());
        }
        mysql_select_db("c9",$con);
        
            
            $comment = mysql_query("SELECT Comments FROM `TABLE 2` WHERE LastName = '$name'");
            $result = mysql_fetch_array($comment);
        
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
        <h1>Classname: <?php echo $Class;?></h1>
        <h2> Grade <?php echo $ClassGrade;?></h2>
        
           
                <form action="gradesDatabase.php" method="post">
                Name: <input type="text" value="<?php echo $name;?>" name="name">
                Class: <input type="text"value="<?php echo $Class;?>" name="Class">
                Grade: <input type="text"value="<?php echo $ClassGrade;?>" name="Grade">
                Comments: <input type="text"value="<?php echo $result['Comments'];?>"name="comments">
                <input type="submit">
                </form>
      <div>
          <h1>Comments: </h1>
      </div>
      <p>
          <?php echo $result['Comments'];?>
      </p>
    </body>

</html>
