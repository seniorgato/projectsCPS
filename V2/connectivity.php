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

                if (!empty($row['userName']) OR !empty($row['pass'])) {
                    $_SESSION['userName'] = $row['pass'];

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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
    <div class="container">
     <a href="home.php"><h1>Successful Log-in, Click here</h1> </a>
    </div>
</body>
</html>