<?php

if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'png');
    
    if (in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if($fileSize < 500000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: home.html?uploadsuccess");
                echo "UPLOAD SUCCESSFUL!";
            }
            else {
                echo "File is too big!";
            }
        }
        else {
            echo "There was an error uploading your file. Please try again." ;
        }
    }
}
else {
   echo "File type not allowed! JPG & PNG pictures only accepted!" ;
}
?>