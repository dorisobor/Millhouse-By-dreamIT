<?php
// saves postID that should be updated
// $postID = 15;

if(isset($_POST['publish'])){
    require_once DIRBASE . 'database/db.php';

    if (isset($_POST['pages/categoryWatches.php'])){
        $categoryID = 1;
    }
    if (isset($_POST['pages/categorySunglasses.php'])){
        $categoryID = 2;
    }
    if (isset($_POST['pages/categoryInterior.php'])){
        $categoryID = 3;
    }
    
    $sql = "UPDATE `blogposts` SET `postID`=:postid, `postDate`=NOW(), `postTitle`=:headline,`postText`=:postText, `categoryID`=:categoryID, `image`=:image WHERE `postID`='$postID'";
    $statement = $pdo -> prepare($sql);
    $statement->bindValue(':postid', $postID, PDO::PARAM_STR);
    $statement->bindValue(':headline', $_POST['headline'], PDO::PARAM_STR);
    $statement->bindValue(':postText', $_POST['postText'], PDO::PARAM_STR);
    $statement->bindValue(':categoryID', $_POST['categoryID']);
    $statement->bindValue(':image', $_FILES['upload']['name']);
    $statement->execute();
    
    if($statement){
        $success = true; 
    }
    $pdo = null;

}


