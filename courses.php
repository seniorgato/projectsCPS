<!DOCTYPE html>
<html>
<body>

    <?php
        $servername = "localhost";
        $username = "seniorgato";
        $password = "";
        $dbname = "c9";
        $sent_url = $_POST['url']; 
      echo $sent_url ;
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "SELECT * FROM `TABLE 2` ";
        $result = $conn->query($sql);
        
       
        $conn->close();
?>


</body>
</html>