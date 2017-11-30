<?php 
require_once 'partials/db.php';
//$statement = $pdo->prepare("SELECT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryName`, `imageName` FROM `blogposts`");
// 
//$statement->execute();
//
//
//$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 


// fetch all the blogposts that will order the posts by date

$statement = $pdo->prepare("SELECT * FROM blogposts ORDER BY postDate DESC");

$statement->execute();

$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC);

//JOIN users ON users.userID = blogposts.userID
//LEFT JOIN images ON images.postID = blogposts.postID

?>



<!--
// fetch all the blogposts that will order the posts by date

$statement = $pdo->prepare("SELECT images.* ,blogposts.* ,users.*   FROM blogPosts 
JOIN users ON users.userID = blogPosts.userID
LEFT JOIN images ON images.postID = blogPosts.postID
 ORDER BY postDate DESC");

$statement->execute();

$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); -->
