

<?php 
require 'partials/db.php';
        
        $imageInfo = $_FILES['upload'];
        //use print_r() to see info about the image
        print_r($imageInfo);
        //$path is the pemporery place where the image stores befoor it moves to database
        $path = $_FILES["upload"]["tmp_name"];
        $filename = $_FILES["upload"]["name"];
        
        // Move the image file from $path to folder images
        if(move_uploaded_file($path, 'images/' . $filename)){
        // Insert file in database. 
            $statement  = $pdo->prepare("
                INSERT INTO images 
                (postImage) 
                VALUES (:postImage)");
        
                $statement->execute(array(
                ":postImage" => "images/" . $filename
            ));

        } else {
            echo "FAIL!";
        }
        
    /*if (isset($_post['create'])) {
        $file = $_FILES['upload'];
        print_r($file);
        $fileName = $_FILES['upload']['name'];
        $fileTmpName = $_FILES['upload']['tmp_name'];
        $fileSize = $_FILES['upload']['size'];
        $fileError = $_FILES['upload']['error'];
        $fileType = $_FILES['upload']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strlower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 10000){
                   $fileNameNew = uniqid('', true).".".$fileActualExt;
                   $fileDestination = 'images/'.$fileNameNew;
                   move_uploaded_file($fileTmpName, $fileDestination);
                   header("Location: index.php?uploadsuccess");
                }else echo 'Your file is to big!!';
            }else{
                echo 'There was an error uploading your file!';
            }
        }else{
            echo 'You cannot upload files of this type!';
        }
    }*/

    

    ?>

    