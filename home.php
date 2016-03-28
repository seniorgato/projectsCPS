<!DOCTYPE html>
<html>
<body>

    <?php
        $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
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
        
        $sql = "SELECT * FROM `TABLE 2` ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["COL 1"]. " &nbsp &nbsp  " . $row["COL 2"]. "<a href = courses.php> click here </a>"."<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
?>
<form action="test2.php" method="POST">
    <input type="hidden" name="url" value="<?php echo $url ?>" >
    <input type="submit" name="download" value="" onclick="alert('<?php echo $url; ?>')">
</form>

</body>
</html>