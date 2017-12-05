<?php 
require_once 'partials/db.php';

// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT blogPosts.*,users.*,categories.* 
FROM blogPosts 
JOIN users ON users.userID = blogPosts.userID
JOIN categories ON categories.categoryID = blogPosts.categoryID
ORDER BY postDate DESC");

$statement->execute();

$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 
?>