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
            $UpdateQuery = "UPDATE `TABLE 2` SET LastName='$_POST[LastName]', FirstName='$_POST[FirstName]',WHERE LastName='$_POST[hidden]'";
            mysql_query($UpdateQuery,$con);
            
        };
        if(isset($_POST['delete'])){
            $DeleteQuery = "DELETE FROM `TABLE 2` WHERE LastName='$_POST[hidden]'";
            mysql_query($DeleteQuery,$con);
        };
        if(isset($_POST['add'])){
            $AddQuery = "INSERT INTO `TABLE 2` (LastName, FirstName) VALUES( '$_POST[uLastName]','$_POST[uFirstName]')";
            mysql_query($AddQuery,$con);
            
        };
        
        $sql= "SELECT * FROM `TABLE 2`";
        $myData=mysql_query($sql,$con);
        echo "<table border =2>
        <tr>
        <th>LastName</th>
        <th>FirstName</th>
        <th>MAT251-Calc-I</th>
        <th>MAT252-Calc-II</th>
        <th>MAT320-DiscreteMath</th>
        <th>CPS210-CompSci-I</th>
        <th>CPS310-CompSci-II</th>
        <th>CPS315-CompSci-III</th>
        <th>CPS352-OOP</th>
        <th>CPS330-Assembly.Arch.</th>
        <th>CPS353-SoftEng</th>
        <th>CPS415-Disc.Cont.Algorithms</th>
        <th>CPS340-Op.Sys</th>
        <th>CPS425-Lang.Processing</th>
        <th>CPS493-Elect-1</th>
        <th>CPS493-Projects</th>
        <th>EGC230-Dig.Logic</th>
        <th>EGC208-Dig.Logic.Lab</th>
        <th>SCIENCE-I</th>
        <th>SCIENCE-II</th>
        </tr>";
        
        while($record = mysql_fetch_array($myData)){
            echo "<form action=home.php method = post>";
            echo "<tr>";
            echo "<td>" . "<input type=text name=LastName value=LastName" . $record['LastName'] . "> </td>";
            echo "<td>" . "<input type=text name=FirstName value=FirstName" . $record['FirstName'] . "> </td>";
            
            /*
            echo "<td>" . "<input type=text name=MAT251CalcI  value=" . $record['MAT251CalcI'] . "> </td>";
            echo "<td>" . "<input type=text name=MAT252CalcII  value=" . $record['MAT252CalcII'] . "> </td>";
            echo "<td>" . "<input type=text name=MAT320DiscreteMath value=" . $record['MAT320DiscreteMath'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS210CompSciI  value=" . $record['CPS210CompSciI'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS310CompSciII value=" . $record['CPS310CompSciII'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS315CompSciIII  value=" . $record['CPS315CompSciIII'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS352OOP value=" . $record['CPS352OOP'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS330AssemblyArch  value=" . $record['CPS330AssemblyArch'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS353SoftEng  value=" . $record['CPS353SoftEng'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS415DiscContAlgorithms  value=" . $record['CPS415DiscContAlgorithms'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS340OpSys value=" . $record['CPS340OpSys'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS425LangProcessing value=" . $record['CPS425LangProcessing'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS493Elect1 value=" . $record['CPS493Elect1'] . "> </td>";
            echo "<td>" . "<input type=text name=CPS493Projects value=" . $record['CPS493Projects'] . "> </td>";
            echo "<td>" . "<input type=text name=EGC230DigLogic value=" . $record['EGC230DigLogic'] . "> </td>";
            echo "<td>" . "<input type=text name=EGC208DigLogicLab value=" . $record['EGC208DigLogicLab'] . "> </td>";
            echo "<td>" . "<input type=text name=SCIENCEI value=" . $record['SCIENCEI'] . "> </td>";
            echo "<td>" . "<input type=text name=SCIENCEIIvalue=" . $record['SCIENCEII'] . "> </td>";
            */
            
            
            echo "<td>" . "<input type=hidden name=hidden value=" .$record['LastName'] . "> </td>";
            
            echo "<td>" . "<input type=submit name=update value=update>".  "</td>";
            echo "<td>" . "<input type=submit name=delete value=delete>". "</td>";
            echo "</tr>";
            echo "</form>";
        }
        
        echo "<form action=home.php method = post>";
        echo "<tr>";
        echo "<td><input type=text name=uLastName></td>";
        echo "<td><input type=text name=uFirstName></td>";
        echo "<td>" . "<input type=submit name=add value=add>". "</td>";
        echo "</form>";
        
        
        
        
        
        echo "</table>";
        mysql_close($con);
?>

</body>
</html>