<?php
    $host = "localhost"; 
    $user = "seniorgato";
    $pass = ""; 
    $db = "`TABLE 2`"; 
    $con = mysql_connect($host, $user, $pass);
    if (!$con) {
        echo "Could not connect to server\n";
        die(mysql_error());
    }
    
    $con1 = mysql_select_db($db);
    
    if (!$con1) {
        echo "Cannot select database\n";
        die(mysql_error()); 
    }
            mysql_query("TRUNCATE TABLE `TABLE 2`");
            $sql = "
            LOAD DATA LOCAL INFILE 'csv_s/MajorCourses.csv'
            INTO TABLE `TABLE 2`
            FIELDS TERMINATED BY ','
            ENCLOSED BY '\"'
            LINES TERMINATED BY '\n'
            IGNORE 1 LINES";
            
            $query = mysql_query($sql);
            if($query){
                header("location: connectivity.php");
            }
            else{
                echo die(mysql_error());
            }
        
?>