<?php
require_once 'partials/db.php';


// function to delete the blogpost
if(isset ($_GET['delete_post'])){
  $deletePost = $_GET['delete_post'];


// delete post
$statement= $pdo->prepare("
			DELETE FROM blogposts
            WHERE postID = :postID
			");
		
 $statement->execute(array(":postID" => $_GET["delete_post"],));
   
}
header('Location: index.php')

?>