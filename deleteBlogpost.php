<?php
require_once 'partials/db.php';

// function to delete the blogpost
if(isset ($_GET['delete_post'])){
  $deletePost = $_GET['delete_post'];

//deletes IMAGE
$statement= $pdo->prepare("
DELETE FROM images
      WHERE postID = :postID
");

$statement->execute(array(":postID" =>  $deletePost));

// make sure that comments linked to the post gets deleted
$statement= $pdo->prepare("
DELETE FROM comments
      WHERE postID = :postID
");

$statement->execute(array(":postID" =>  $deletePost));


// delete post (ONLY TEXT ELEMENTS)
$statement= $pdo->prepare("
			DELETE FROM blogPosts
            WHERE postID = :postID
			");
		
 $statement->execute(array(":postID" => $_GET["delete_post"],));

 $statement= $pdo->prepare("
 DELETE FROM blogPosts
       WHERE postID = :postID
 ");

$statement->execute(array(":postID" => $_GET["delete_post"],));

}

$redirect = 'index.php';

//added to reuse in profilepage
if (isset($_GET['redirectto'])){
    $redirect = $_GET['redirectto'];
}

header("Location: $redirect")

?>