<?php
         $con = mysql_connect("localhost","seniorgato","");
                if(!$con){
                    die("Can't Connect:" . mysql_error());
                }
                mysql_select_db("c9",$con);
                
        
        
        
        
        
        $name = $_GET['ln'];
        $result = mysql_query("SELECT * FROM `TABLE 2` WHERE lastName='$name' LIMIT 1");
        
        $row = mysql_fetch_array($result);
        
        echo $row['firstName'];
        echo $_GET['ln'];
        
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
        $OPSys=$row['CPS340OPSys'];
        $LP=$row['CPS425LangProcessing'];
        $Elect1=$row['CPS493Elect1'];
        $Projects=$row['CPS493Projects'];
        $DigLogic=$row['EGC230DigLogic'];
        $DLlab=$row['EGC208DigLogicLab'];
        $SciI=$row['SCIENCEI'];
        $SciII=$row['SCIENCEII'];

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
                            <a href="#"><span>CPS I</span> <span><?php echo "$CPSI";?></span></a>
                           
                             <ul class="subdirector">
                      <li><a href="studentList.php"><span>Go Back</span></a></li>
                            </ul>
                            <ul class="departments cf">								
                              <li><a href="#"><span>CPS II</span></a></li>
                              
                              
                              <li class="department dep-a">
                                <a href="#"><span>Knowledge Part 1</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="#"><span>Assembly & Architecture</span></a></li>
                                  <li class="section"><a href="#"><span>CS III</span></a></li>
                                  <li class="section"><a href="#"><span>Object Oriented Programming</span></a></li>
                                  <li class="section"><a href="#"><span>Discrete Math for CS</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-b">
                                <a href="#"><span>Knowledge Part 2</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="#"><span>Operating Systems</span></a></li>
                                  <li class="section"><a href="#"><span>Language Processing</span></a></li>
                                  <li class="section"><a href="#"><span>Software Engineering</span></a></li>
                                  <li class="section"><a href="#"><span>Discrete & Continuous Algorithms</span></a></li>

                                </ul>
                              </li>
                              <li class="department dep-c">
                                <a href="#"><span>Math, Science, & Engineering</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="#"><span>Calculus I</span></a></li>
                                  <li class="section"><a href="#"><span>Calculus II</span></a></li>
                                  <li class="section"><a href="#"><span>Science I</span></a></li>
                                  <li class="section"><a href="#"><span>Science II</span></a></li>
                                  <li class="section"><a href="#"><span>Digital Logic Design</span></a></li>
                                  <li class="section"><a href="#"><span>Digital Logic Lab</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-d">
                                <a href="#"><span>Skills (Electives)</span></a>
                                <ul class="sections">
                                  <li class="section"><a href="#"><span>Database</span></a></li>
                                  <li class="section"><a href="#"><span>Web Programming</span></a></li>
                                  <li class="section"><a href="#"><span>Networks</span></a></li>
                                  <li class="section"><a href="#"><span>AI/Robotics</span></a></li>
                                  <li class="section"><a href="#"><span>Embedded Linux</span></a></li>
                                </ul>
                              </li>
                              <li class="department dep-e">
                                <a href="#"><span>Projects CPS</span></a>
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
