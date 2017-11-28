<?php 
require_once 'partials/db.php';

// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT images.* ,blogPosts.* ,users.*   FROM blogPosts 
JOIN users ON users.userID = blogPosts.userID
LEFT JOIN images ON images.postID = blogPosts.postID
 ORDER BY postDate DESC");

$statement->execute();

$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 
?>