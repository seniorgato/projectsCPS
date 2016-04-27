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
            $UpdateQuery = "UPDATE `TABLE 2` SET LastName='$_POST[LastName]', FirstName='$_POST[FirstName]', MAT251CalcI = '$_POST[MAT251CalcI]', MAT252CalcII = '$_POST[MAT252CalcII]'
            , MAT320DiscreteMath = '$_POST[MAT320DiscreteMath]', CPS210CompSciI = '$_POST[CPS210CompSciI]', CPS310CompSciII = '$_POST[CPS310CompSciII]'
            , CPS315CompSciIII = '$_POST[CPS315CompSciIII]', CPS352OOP = '$_POST[CPS352OOP]', CPS330AssemblyArch = '$_POST[CPS330AssemblyArch]'
            , CPS353SoftEng = '$_POST[CPS353SoftEng]', CPS415DiscContAlgorithms = '$_POST[CPS415DiscContAlgorithms]', CPS340OpSys = '$_POST[CPS340OpSys]'
            , CPS425LangProcessing = '$_POST[CPS425LangProcessing]', CPS493Elect1 = '$_POST[CPS493Elect1]', CPS493Projects = '$_POST[CPS493Projects]'
            , EGC230DigLogic = '$_POST[EGC230DigLogic]', EGC208DigLogicLab = '$_POST[EGC208DigLogicLab]', SCIENCEI = '$_POST[SCIENCEI]'
            , SCIENCEII = '$_POST[SCIENCEII]' WHERE LastName='$_POST[hidden]'";
            mysql_query($UpdateQuery,$con);
            
        };
        if(isset($_POST['delete'])){
            $DeleteQuery = "DELETE FROM `TABLE 2` WHERE LastName='$_POST[hidden]'";
            mysql_query($DeleteQuery,$con);
        };
        if(isset($_POST['add'])){
            $AddQuery = "INSERT INTO `TABLE 2` (LastName, FirstName, MAT251CalcI , MAT252CalcII , MAT320DiscreteMath , CPS210CompSciI, CPS310CompSciII 
            , CPS315CompSciIII, CPS352OOP, CPS330AssemblyArch, CPS353SoftEng, CPS415DiscContAlgorithms, CPS340OpSys, CPS425LangProcessing, CPS493Elect1
            , CPS493Projects, EGC230DigLogic, EGC208DigLogicLab, SCIENCEI, SCIENCEII
            ) 
            
            
            VALUES( '$_POST[uLastName]'
            ,'$_POST[uFirstName]'
            ,'$_POST[uMAT251CalcI]'
            ,'$_POST[uMAT251CalcII]'
            ,'$_POST[uMAT320DiscreteMath]'
            ,'$_POST[uCPS210CompSciI]'
            ,'$_POST[uCPS310CompSciII]'
            ,'$_POST[uCPS315CompSciIII]'
            ,'$_POST[uCPS352OOP]'
            ,'$_POST[uCPS330AssemblyArch]'
            ,'$_POST[uCPS353SoftEng]'
            ,'$_POST[uCPS415DiscContAlgorithms]'
            ,'$_POST[uCPS340OpSys]'
            ,'$_POST[uCPS425LangProcessing]'
            ,'$_POST[uCPS493Elect1]'
            ,'$_POST[uCPS493Projects]'
            ,'$_POST[uEGC230DigLogic]'
            ,'$_POST[uEGC208DigLogicLab]'
            ,'$_POST[uSCIENCEI]'
            ,'$_POST[uSCIENCEII]')";
            mysql_query($AddQuery,$con);
            
        };
        
        $sql= "SELECT * FROM `TABLE 2`";
        $myData=mysql_query($sql,$con);
        echo "<table border =1>
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
            echo "<td>" . "<input type=text name=LastName value=" . $record['LastName'] . "> </td>";
            echo "<td>" . "<input type=text name=FirstName value=" . $record['FirstName'] . "> </td>";
            
            
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
            echo "<td>" . "<input type=text name=SCIENCEII value=" . $record['SCIENCEII'] . "> </td>";
            
            
            
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
        
        echo "<td><input type=text name=uMAT251CalcI></td>";
        echo "<td><input type=text name=uMAT251CalcII></td>";
        echo "<td><input type=text name=uMAT320DiscreteMath></td>";
        echo "<td><input type=text name=uCPS210CompSciI></td>";
        echo "<td><input type=text name=uCPS310CompSciII></td>";
        echo "<td><input type=text name=uCPS315CompSciIII></td>";
        echo "<td><input type=text name=uCPS352OOP></td>";
        echo "<td><input type=text name=uCPS330AssemblyArch></td>";
        echo "<td><input type=text name=uCPS353SoftEng></td>";
        echo "<td><input type=text name=uCPS415DiscContAlgorithms></td>";
        echo "<td><input type=text name=uCPS340OpSys></td>";
        echo "<td><input type=text name=uCPS425LangProcessing></td>";
        echo "<td><input type=text name=uCPS493Elect1></td>";
        echo "<td><input type=text name=uCPS493Projects></td>";
        echo "<td><input type=text name=uEGC230DigLogic></td>";
        echo "<td><input type=text name=uEGC208DigLogicLab></td>";
        echo "<td><input type=text name=uSCIENCEI></td>";
        echo "<td><input type=text name=uSCIENCEII></td>";
        
        echo "<td>" . "<input type=submit name=add value=add>". "</td>";
        echo "</form>";
        
        
        
        
        
        echo "</table>";
        mysql_close($con);
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</body>
</html>