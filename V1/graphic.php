<!DOCTYPE html>
<html>
<body>

    <?php
        $con = mysql_connect("localhost","seniorgato","");
        if(!$con){
            die("Can't Connect:" . mysql_error());
        }
        mysql_select_db("c9",$con);
        
       $var_value = $_GET['id'];
       echo $var_value;
        mysql_close($con);
        ?>
<h1>JESUS</h1>
</body>
</html>