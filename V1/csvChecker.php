<?php
    $target_dir = "uploads";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if($imageFileType != "csv" ) {
        echo "Sorry, only CSV files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    
        
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header ("location: connectivity.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>