<?php




if(isset($_POST['publish'])){
    require_once 'partials/db.php';
 $categoriesArray = array('Sunglasses' => 1, 'Watches' => 2, 'Interior' => 3);
 $categoryID = $categoriesArray[$_POST['category']];
 var_dump($categoryID);
 $userID = 5;
 
    
    $sql = "
    INSERT INTO `blogposts`(`date`, `headline`, `postText`,`userID`,`categoryID`) VALUES (NOW(),:headline,:postText,$userID, $categoryID)
    ";
    
    $statement = $pdo -> prepare($sql);
    
    $statement->bindValue(':headline', $_POST['headline']);
    $statement->bindValue(':postText', $_POST['postText']);
    $statement->execute();
    
    $sql = "
    INSERT INTO `categories`(`category`) VALUES (:category)
    ";

    
    $statement = $pdo -> prepare($sql);
    

    $statement->bindValue(':category', $_POST['category']);
    $statement->execute(); 
    
    
    if($statement){
        $success = true;
    }
    $pdo = null;

   
}


