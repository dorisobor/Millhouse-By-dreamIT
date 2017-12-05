<?php

// saves postID that should be updated
$postID = 15;

if(isset($_POST['publish'])){
    require_once 'partials/db.php';
   
    
   $sql = "UPDATE `blogposts` SET `postID`=:postid, `postDate`=NOW(), `postTitle`=:headline,`postText`=:postText, `categoryName`=:categoryName, `imageName`=:imageName WHERE `postID`='$postID'";
    
    $statement = $pdo -> prepare($sql);
    
    $statement->bindValue(':postid', $postID, PDO::PARAM_STR);
    $statement->bindValue(':headline', $_POST['headline'], PDO::PARAM_STR);
    $statement->bindValue(':postText', $_POST['postText'], PDO::PARAM_STR);
       $statement->bindValue(':categoryName', $_POST['categoryName']);
    $statement->bindValue(':imageName', $_FILES['upload']['name']);
    $statement->execute();
    
    if($statement){
        $success = true; 
        
    }
    $pdo = null;


}


