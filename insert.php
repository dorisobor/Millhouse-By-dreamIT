<?php




if(isset($_POST['publish'])){
    require_once 'partials/db.php';
 
 
 
    
    $sql = "
    INSERT INTO `blogposts`(`postDate`, `postTitle`, `postText`,`userID`, `categoryName`, `imageName`) VALUES (NOW(),:headline,:postText,$userID, :categoryName,:imageName)
    ";
    
    $statement = $pdo -> prepare($sql);
    
    $statement->bindValue(':headline', $_POST['headline']);
    $statement->bindValue(':postText', $_POST['postText']);
    $statement->bindValue(':categoryName', $_POST['categoryName']);
    $statement->bindValue(':imageName', $_FILES['upload']['name']);
    
    $statement->execute();
    
//    $sql = "
//    INSERT INTO `categories`(`categoryName`) VALUES (:category)
//    ";
//
//    
//    $statement = $pdo -> prepare($sql);
//    
//
//    $statement->bindValue(':category', $_POST['category']);
//    $statement->execute(); 
    
    
    if($statement){
        $success = true;
    }
    $pdo = null;

   
}


