<?php

// saves postID that should be updated
$postID = 8;

if(isset($_POST['publish'])){
    require_once 'partials/db.php';
   
    
   $sql = "UPDATE `blogposts` SET `date`=NOW(), `headline`=:headline,`postText`=:postText WHERE `postID`=$postID";
    
    $statement = $pdo -> prepare($sql);
    
    $statement->bindValue(':headline', $_POST['headline'], PDO::PARAM_STR);
    $statement->bindValue(':postText', $_POST['postText'], PDO::PARAM_STR);
    
    $statement->execute();
    
    if($statement){
        $success = true; 
        
    }
    $pdo = null;


}


