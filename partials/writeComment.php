<?php
require_once DIRBASE . 'database/db.php';

if(isset($_POST['publish'])){
    
    $userID =  getLoggedInUserID();
    global $pdo;  
    $statement = $pdo->prepare("INSERT INTO `comments`(`commentDate`, `commentText`,`userID`,`postID`) 
    VALUES (NOW(), :comment, :userID, :postID)");
    $statement->bindParam(':comment', $_POST['comment']);
    $statement->bindParam(':userID', $userID);
    $statement->bindParam(':postID', $_POST['postID']);
    $statement->execute(); 

    //saves variable in session in order to trigger a confirmaton
    //after publication in blogpost.php
    $_SESSION['commentPublished'] = true;
   
}
