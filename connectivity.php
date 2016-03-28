<?php

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'c9');
        define('DB_USER', 'seniorgato');
        define('DB_PASSWORD', '');
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
        $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
        $ID       = $_POST['user'];
        $Password = $_POST['pass'];
        function SignIn()
        {
            session_start(); {
                $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
                $row = mysql_fetch_array($query) or die(mysql_error());
                if (!empty($row['userName']) AND !empty($row['pass'])) {
                    $_SESSION['userName'] = $row['pass'];
                    echo " SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                   
                } else {
                    echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...".  "<a href = index.php> click here </a>";

                }
            }
        }
        if (isset($_POST['submit'])) {
            SignIn();
        }
?>
<html>
<head>
    <title>Yays</title>
    
</head>
<body>
     <a href="home.php">Click here </a>
</body>
</html>