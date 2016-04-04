<!DOCTYPE html>
<html>
<body>

    <?php
        $con = mysql_connect("localhost","seniorgato","");
        if(!$con){
            die("Can't Connect:" . mysql_error());
        }
        mysql_select_db("c9",$con);
        
        if(isset($_POST['update'])){
            $UpdateQuery = "UPDATE `TABLE 2` SET LastName='$_POST[LastName]', FirstName='$_POST[FirstName]' WHERE LastName='$_POST[hidden]'";
            mysql_query($UpdateQuery,$con);
            
        };
        if(isset($_POST['delete'])){
            $DeleteQuery = "DELETE FROM `TABLE 2` WHERE LastName='$_POST[hidden]'";
            mysql_query($DeleteQuery,$con);
        };
        
        $sql= "SELECT * FROM `TABLE 2`";
        $myData=mysql_query($sql,$con);
        echo "<table border =1>
        <tr>
        <th>LastName</th>
        <th>FirstName</th>
        </tr>";
        
        while($record = mysql_fetch_array($myData)){
            echo "<form action=home.php method = post>";
            echo "<tr>";
            echo "<td>" . "<input type=text name=LastName value=" . $record['LastName'] . "> </td>";
            echo "<td>" . "<input type=text name=FirstName value=" . $record['FirstName'] . "> </td>";
            echo "<td>" . "<input type=hidden name=hidden value=" .$record['LastName'] . "</td>";
            echo "<td>" . "<input type=submit name=update value=update". "</td>";
            echo "<td>" . "<input type=submit name=delete value=delete". "</td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
        mysql_close($con);
?>

</body>
</html>