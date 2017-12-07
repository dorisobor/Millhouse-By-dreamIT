<?php
$last_id = "0";
//$userID = "1";
if(isset($_SESSION['userID'])){
$user = getUserInfo($_SESSION['userID']);
$userID = $user['userID'];
}
if(isset($_POST['publish'])){
//    require_once 'partials/db.php';
  try {
 $conn = new PDO(
      "mysql:host=localhost;dbname=millhouse;charset=utf8",
      "root",
      "root"
    );    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $comment = $_POST['comment'];
	  $postID = $_POST['postID'];
      //var_dump($postID);
        $sql = "INSERT INTO `comments`(`commentDate`, `commentText`,`userID`,`postID`) VALUES (NOW(), '$comment', '$userID', '$postID')";
//      $statement = $conn -> prepare($sql);
//    
//    $statement->bindValue(':headline', $_POST['headline']);
//    $statement->bindValue(':postText', $_POST['postText']);
    
      
   
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
