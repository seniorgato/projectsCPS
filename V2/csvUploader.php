<?php
   if(isset($_FILES['csv'])){
      $errors= array();
      $file_name = $_FILES['csv']['name'];
      $file_size = $_FILES['csv']['size'];
      $file_tmp = $_FILES['csv']['tmp_name'];
      $file_type = $_FILES['csv']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['csv']['name'])));
      
      $expensions= array("csv");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a CSV file.";
      }
      
      if($file_size > 800000) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"csvs/".$file_name);
         header("location:csvDatabase.php");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <link rel="stylesheet" href="csvUploader.css">
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
                     <h1 style=" padding-top: 127px; padding-left:256px;  color: white;">Upload Your Data</h1>
                </div>
                
          
            </div>
            
            <div id="missionstatement">
                <center style="color: gray;">
                     <h2 color="black">Please be sure to only upload .csv files</h2>

                </center>
            </div>
            
 
           
            
            <div>
                <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "csv" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['csv']['name'];  ?>
            <li>File size: <?php echo $_FILES['csv']['size'];  ?>
            <li>File type: <?php echo $_FILES['csv']['type'] ?>
         </ul>
			
      </form>
                
            </div>
            
            
            
            
        </div>
      
      
   </body>
</html>