<?php
         $con = mysql_connect("localhost","seniorgato","");
                if(!$con){
                    die("Can't Connect:" . mysql_error());
                }
                mysql_select_db("c9",$con);
                
        
        
        
        
        
        $name = $_GET['ln'];
        $result = mysql_query("SELECT * FROM `TABLE 2` WHERE lastName='$name' LIMIT 1");
        
        $row = mysql_fetch_array($result);
        
        echo "<h1>". $_GET['ln'] .",". "</h1>";
        echo "<h2>". $row['FirstName']. "</h2>";
        
        
        $CalcI= $row['MAT251CalcI'];
        $CalcII=$row['MAT252CalcII'];
        $DiscreteMath=$row['MAT320DiscreteMath'];
        $CPSI=$row['CPS210CompSciI'];
        $CPSII=$row['CPS310CompSciII'];
        $CPSIII=$row['CPS315CompSciIII'];
        
        $OOP=$row['CPS352OOP'];
        $Assembly=$row['CPS330AssemblyArch'];
        $SoftwareEng=$row['CPS353SoftEng'];
        $DCA=$row['CPS415DiscContAlgorithms'];
        $OPSys=$row['CPS340OpSys'];
        $LP=$row['CPS425LangProcessing'];
        $Elect1=$row['CPS493Elect1'];
        $Projects=$row['CPS493Projects'];
        $DigLogic=$row['EGC230DigLogic'];
        $DLlab=$row['EGC208DigLogicLab'];
        $SciI=$row['SCIENCEI'];
        $SciII=$row['SCIENCEII'];
        
            
                                                              $color = "#FF3333";
    
                                                              if ($CalcI!='')
                                                                 $CalcIG = "green";
                                                                 
                                                              if ($CalcII!='')
                                                                 $CalcIIG = "green";
                                                              
                                                              if ($DiscreteMath!='')
                                                                 $DiscreteMathG = "green";
                                                              
                                                              if ($CPSI!='')
                                                                 $CPSIG = "green";
                                                              
                                                              if ($CPSII!='')
                                                                 $CPSIIG = "green";
                                                                 
                                                              if ($CPSIII!='')
                                                                 $CPSIIIG = "green";
                                                                 
                                                              if ($OOP!='')
                                                                 $OOPG = "green";
                                                                 
                                                              if ($Assembly!='')
                                                                 $AssemblyG = "green";
                                                                 
                                                              if ($SoftwareEng!='')
                                                                 $SoftwareEngG = "green";
                                                                 
                                                              if ($DCA!='')
                                                                 $DCAG = "green";
                                                                 
                                                              if ($OPSys!='')
                                                                 $OPSysG = "green";
                                                                 
                                                              if ($LP!='')
                                                                 $LPG = "green";
                                                              
                                                              if ($Elect1!='')
                                                                 $Elect1G = "green";
                                                                 
                                                              if ($Projects!='')
                                                                 $ProjectsG = "green";
                                                                 
                                                              if ($DigLogic!='')
                                                                 $DigLogicG = "green";
                                                                 
                                                              if ($DLlab!='')
                                                                 $DLlabG = "green";
                                                                 
                                                              if ($SciI!='')
                                                                 $SciIG = "green";
                                                                 
                                                            if ($SciII!='')
                                                                 $SciIIG = "green";
                                                          
                                                                 

    
   
   
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <script src="go-debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.6.2/go-debug.js"></script>
        <title>Graphic</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="graphic.css">
    </head>
    
    <body>
       <div class="content">
                  <figure class="org-chart cf">
                    <ul class="administration">
                      <li>					
                        <ul class="director">
                          <li>
                            
                             <a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS210CompSciI?> & ClassGrade=<?php echo $CPSI?>" 
                             style="background-color:<?php echo $CPSIG;?>">
                               <span>CPS I</span></a></li>
                             
                             
                             
                           <!-- <a href="javascript:window.open('grades.php?ln=<?php echo $name ?> & Class=<?php echo CPS210CompSciI?> & ClassGrade=<?php echo $CPSI?>','mywindowtitle','width=500,height=150')"><span onclick="myFunctionCPSI()">CPS I</span></a>-->
                
                
                             <ul class="subdirector">
                      <li><a href="studentList.php" style="background-color:white; color:black;"><span>Go Back</span></a></li>
                            </ul>
                            <ul class="departments cf">								
                              <li><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS310CompSciII?> & ClassGrade=<?php echo $CPSII?>"style="background-color:<?php echo $CPSIIG;?>"><span>CPS II</span></a></li>
                              
                              
                              <li class="department dep-a">
                                <a href="#"><span>Knowledge Part 1</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS330AssemblyArch?> & ClassGrade=<?php echo $Assembly?>"style="background-color:<?php echo $AssemblyG;?>"><span>Assembly & Architecture</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS315CompSciIII?> & ClassGrade=<?php echo $CPSIII?>"style="background-color:<?php echo $CPSIIIG;?>"><span>CS III</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS352OOP?> & ClassGrade=<?php echo $OOP?>"style="background-color:<?php echo $OOPG;?>"><span>Object Oriented Programming</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo MAT320DiscreteMath?> & ClassGrade=<?php echo $DiscreteMath?>"style="background-color:<?php echo $DiscreteMathG;?>"><span>Discrete Math for CS</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-b">
                                <a href="#"><span>Knowledge Part 2</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS340OpSys?> & ClassGrade=<?php echo $OPSys?>"style="background-color:<?php echo $OPSysG;?>"><span>Operating Systems</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS425LangProcessing?> & ClassGrade=<?php echo $LP?>"style="background-color:<?php echo $LPG;?>"><span>Language Processing</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS353SoftEng?> & ClassGrade=<?php echo $SoftwareEng?>"style="background-color:<?php echo $SoftwareEngG;?>"><span>Software Engineering</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS415DiscContAlgorithms?> & ClassGrade=<?php echo $DCA?>"style="background-color:<?php echo $DCAG;?>"><span>Discrete & Continuous Algorithms</span></a></li>

                                </ul>
                              </li>
                              <li class="department dep-c">
                                <a href="#"><span>Math, Science, & Engineering</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo MAT251CalcI?> & ClassGrade=<?php echo $CalcI?>"style="background-color:<?php echo $CalcIG;?>"><span >Calculus I</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo MAT252CalcII?> & ClassGrade=<?php echo $CalcII?>"style="background-color:<?php echo $CalcIIG;?>"><span>Calculus II</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo SCIENCEI?> & ClassGrade=<?php echo $SciI?>"style="background-color:<?php echo $SciIG;?>"><span>Science I</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo SCIENCEII?> & ClassGrade=<?php echo $SciII?>"style="background-color:<?php echo $SciIIG;?>"><span>Science II</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo EGC230DigLogic?> & ClassGrade=<?php echo $DigLogic?>"style="background-color:<?php echo $DigLogicG;?>"><span>Digital Logic Design</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo EGC208DigLogicLab?> & ClassGrade=<?php echo $DLlab?>"style="background-color:<?php echo $DLlabG;?>"><span>Digital Logic Lab</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-d">
                                <a href="#"><span>Skills (Electives)</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Elect1?> & ClassGrade=<?php echo $Elect1?>"style="background-color:<?php echo $Elect1G;?>"><span>Database</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Elect1?> & ClassGrade=<?php echo $Elect1?>"style="background-color:<?php echo $Elect1G;?>"><span>Web Programming</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Elect1?> & ClassGrade=<?php echo $Elect1?>"style="background-color:<?php echo $Elect1G;?>"><span>Networks</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Elect1?> & ClassGrade=<?php echo $Elect1?>"style="background-color:<?php echo $Elect1G;?>"><span>AI/Robotics</span></a></li>
                                  <li class="section"><a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Elect1?> & ClassGrade=<?php echo $Elect1?>"style="background-color:<?php echo $Elect1G;?>"><span>Embedded Linux</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-e">
                                <a href="grades.php?ln=<?php echo $name;?> & Class=<?php echo CPS493Projects?> & ClassGrade=<?php echo $Projects?>" style="background-color:<?php echo $ProjectsG;?>"><span>Projects CPS</span></a>
                                <ul class="sections">
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>	
                      </li>
                    </ul>			
                  </figure>
                </div>

    </body>

</html>
