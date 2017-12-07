<?php  
require_once DIRBASE . 'database/db.php';
require_once DIRBASE . 'database/functions.php';

if(isset($_POST['publish'])){
    $userID =  getLoggedInUserID();

    global $pdo;                
    $statement = $pdo->prepare("INSERT INTO blogPosts (postDate, postTitle, postText, userID, categoryID, imageName) 
    VALUES (NOW(), :postTitle, :postText, :userID, :categoryID, :imageName)");
    $statement->bindParam(':postTitle', $_POST['headline']);
    $statement->bindParam(':postText', $_POST['postText']);
    $statement->bindParam(':userID', $userID);    
    $statement->bindParam(':categoryID', $_POST['category']);
    $statement->bindParam(':imageName', $_FILES['upload']['name']);
    $statement->execute();
    $postID = $pdo->lastInsertId();    
    return $postID; 
}


