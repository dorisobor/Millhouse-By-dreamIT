<?php
$last_id = "0";
$userID = 1;//should be changed later


if(isset($_POST['publish'])){
//    require_once 'partials/db.php';
  try {
    $conn = new PDO(
      "mysql:host=localhost;dbname=mariiase_millhouse;charset=utf8",
      "mariiase_user",
      "constantinvacheron115"
    );    

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $headline = $_POST['headline'];
      $postText = $_POST['postText'];
      $categoryName = $_POST['categoryName'];
      $imageName = $_FILES['upload']['name'];
      
//      $sql = "
//    INSERT INTO `blogPosts`(`postDate`, `postTitle`, `postText`,`userID`, `categoryName`, `imageName`) VALUES (NOW(),$headline,$postText,$userID, $categoryName,$imageName)
//    ";
        $sql = "INSERT INTO `blogPosts`(`postDate`, `postTitle`, `postText`, `userID`, `categoryName`, `imageName`) VALUES (NOW(), '$headline', '$postText', '$userID', '$categoryName', '$imageName')";
//      $statement = $conn -> prepare($sql);
//    
//    $statement->bindValue(':headline', $_POST['headline']);
//    $statement->bindValue(':postText', $_POST['postText']);
//    $statement->bindValue(':categoryName', $_POST['categoryName']);
//    $statement->bindValue(':imageName', $_FILES['upload']['name']);
    
      
   
     // use exec() because no results are returned
    $conn->exec($sql);
    
    $last_id =  $conn->lastInsertId();
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

//$conn = null;  
    
 
 
 
    
 
   
}


