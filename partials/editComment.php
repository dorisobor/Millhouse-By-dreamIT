<?php 


//echo $_GET['commentID'];
$commentID = $_GET['commentID'];
echo " comment " . $commentID;	

if(isset($_GET['commentID']) && is_numeric($_GET['commentID'])){
    
    $commentButton  = $updateComment;
    $commentButtonValue  = "Update";
   
    
    $statement = $pdo->prepare("SELECT `commentID`, `commentDate`, `commentText`, `userID`, `postID` FROM `comments` WHERE commentID = '$commentID'");
 
$statement->execute();


$comment = $statement->fetchAll(PDO::FETCH_ASSOC); 
//var_dump($comment); 
    
 foreach($comment as $commentAttribute)  {
    $commentID  = $commentAttribute['commentID'];
    $commentDate = $commentAttribute['commentDate'];   
    $commentText = $commentAttribute['commentText']; 
    $userID = $commentAttribute['userID'];
    $postID = $commentAttribute['postID']; 
 }
    
    echo $commentText;
}




if(isset($_POST['updateComment'])){
    $commentID = $_POST['commentID'];
    
    $sql = "UPDATE `comments` SET `commentText` =:commentText WHERE `commentID`='$commentID'";
   //$sql = "UPDATE `comments` SET `commentText` =:commentText WHERE `commentID`='$commentID'";
    
    $statement = $pdo -> prepare($sql);
 
    $statement->bindValue(':commentText', $_POST['comment']);
    $statement->execute();
    
    if($statement){
        $success = true; 
        
    }
    

echo 'här är ' . $commentID;
}


	

?>
