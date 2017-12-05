<?php 
require_once 'partials/db.php';

// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT comments.*, blogPosts.* 
FROM comments, blogPosts 
JOIN comments c ON c.postID = blogPosts.postID
ORDER BY commentDate DESC");

$statement->execute();

$comments = $statement->fetchAll(PDO::FETCH_ASSOC); 
?>