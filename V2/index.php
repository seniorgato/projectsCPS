<!DOCTYPE html>
<html>
<head>
    <title>Sign-In</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
</head>
<body id="body-color" class= "container">
    <div id="Sign-In">
        <fieldset style="width:30%">
            <legend>LOG-IN HERE</legend>
            <form action="connectivity.php" method="post">
                User<br>
                <input name="user" size="40" type="text"><br>
                Password<br>
                <input name="pass" size="40" type="password"><br>
                <input id="button" name="submit" type="submit" value="Log-In">
            </form>
        </fieldset>
    </div>
</body>
</html>