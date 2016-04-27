<!DOCTYPE>
<html>
    <head>
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
          <link rel="stylesheet" href="studentList.css">
    </head>
    
   <body>
        <div class="container">
            <div class="jumbotron container-fluid">
                <div class="row">
                   
                    <div class="col-md-5">
                        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="home.php">
                                        Student Webapp
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="home.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="csvUploader.php">CSV Uploader</a>
                                        </li>
                                        <li>
                                            <a href="studentList.php">Student List</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>

                    </div>
                </div>
                
                <div id="title">
                     <h1 style=" padding-top: 70px; padding-left:331px;  color: white;">Student List</h1>
                </div>
                
          
            </div>
            
            <div id="missionstatement">
                <center style="color: gray;">
                     <h2 color="black">List of Students with the option to see more</h2>

                </center>
            </div>
            
            
            
            
             <div class="row">
                 <div class="col-md-2 col-md-offset-5">
                 <?php
                    $con = mysql_connect("localhost","seniorgato","");
        if(!$con){
            die("Can't Connect:" . mysql_error());
        }
        mysql_select_db("c9",$con);
        
        
        $sql= "SELECT * FROM `TABLE 2`";
        $myData=mysql_query($sql,$con);
        echo "<table border =1>
        <tr>
        <th>LastName</th>
        <th>FirstName</th>
        </tr>";
        
        while($record = mysql_fetch_array($myData)){
            echo "<form action=studentList.php method = post>";
            $ln=$record['LastName'];
            $fn=$record['FirstName'];
            echo "<tr>";
            echo "<td>" . "<a href='graphic.php'>$ln</a>"  ."</td>";
            echo "<td>" . "<a href='graphic.php'>$fn</a>"  ."</td>";
            echo "</tr>";
            echo "</form>";
        }
        
        
        
        
        
        
        echo "</table>";
        mysql_close($con);
        
                 ?>
                 </div>
                 
             </div>
           
            
            
            
            
            
        </div>
       
   </body>
</html>
