<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home Directory</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="home.css">
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
                                         <li>
                                            <a href="csvDownloader.php">CSV Downloader</a>
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
                     <h1 style=" padding-top: 40px;  color: white;">Think Smart<small style="color: white;"> Work Less</small></h1>
                </div>
                
          
            </div>
            
            <div id="missionstatement">
                <center style="color: gray;">
                     <h2 color="black">Making University simpler, day by day!</h2>

                </center>
            </div>
            
            <div id="links" class="row">
                
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.repairmsexcel.com/blog/wp-content/uploads/2015/08/AcrossDevice_Excel_430x208.png" alt="...">
                        <div class="caption">
                             <h3>CSV Uploader</h3>

                            <p>Click Here to upload your .csv (Excel) into the Database for viewing and editing</p>
                            <p><a href="csvUploader.php" class="btn btn-primary" role="button">Go Now</a> 
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.4zzzfm.org.au/sites/default/files/styles/sub_band_image/public/students.jpg?itok=A1aGXBzj" alt="...">
                        <div class="caption">
                             <h3>List of Students</h3>

                            <p>View of List of Students, click on their names to be brought to a beautiful graphics</p>
                            <p><a href="studentList.php" class="btn btn-primary" role="button">Go Now</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://3.bp.blogspot.com/-SAHbbV4qllw/Uiad0cFlInI/AAAAAAAACMA/Hpp0lT9NxT4/s1600/csv_text.png" alt="...">
                        <div class="caption">
                             <h3>CSV Downloader</h3>

                            <p>Save List of Students Grades for Future Reference!</p>
                            <p><a href="csvDownloader.php" class="btn btn-primary" role="button">Download</a> 
                        </div>
                    </div>
                </div>
                
            </div>
           
            
            <div>
                
                
            </div>
            
            
            
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(".progress-bar").animate({
                width: "75%"
            }, 2000);
        </script>
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script src="jquery.min.js"></script>
        <script src="jssor.slider.mini.js"></script>
    </body>

</html>