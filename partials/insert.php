<?php  
require_once 'partials/db.php';
require_once 'functions.php';

if(isset($_POST['publish'])){

    $userID =  getLoggedInUserID();

    if (isset($_POST['categoryWatches'])){
        $categoryID = 1;
    }
    if (isset($_POST['categorySunglasses'])){
        $categoryID = 2;
    }
    if (isset($_POST['categoryInterior'])){
        $categoryID = 3;
    }

    global $pdo;                
    $statement = $pdo->prepare("INSERT INTO blogPosts (postDate, postTitle, postText, userID, categoryID, imageName) 
    VALUES (NOW(), :postTitle, :postText, :userID, :categoryID, :imageName)");
    $statement->bindParam(':postTitle', $_POST['headline']);
    $statement->bindParam(':postText', $_POST['postText']);
    $statement->bindParam(':userID', $userID);    
    $statement->bindParam(':categoryID', $categoryID);
    $statement->bindParam(':imageName', $_FILES['upload']['name']);
    $statement->execute();
    $postID = $pdo->lastInsertId();    
    return $postID; 
    
}


