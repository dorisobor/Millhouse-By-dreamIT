

<?php 
require 'partials/db.php';
    if(isset($_post['create'])) {
        $imageInfo = $_FILES['upload'];
        print_r($imageInfo);
        $path = $_FILES["upload"]["tmp_name"];
        $filename = $_FILES["upload"]["name"];
        $fileSize = $_FILES['upload']['size'];
        $fileError = $_FILES['upload']['error'];
        $fileType = $_FILES['upload']['type'];

        $allowed = array ('jpg', 'jpeg', 'png');

        if(move_uploaded_file($path, 'images/' . $filename)){
        
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

    