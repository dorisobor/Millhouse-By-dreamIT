<?php 


require_once 'partials/db.php';


// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT images.* ,blogPosts.* ,categories.*  FROM blogPosts 
JOIN categories ON categories.categoryID = blogPosts.categoryID
LEFT JOIN images ON images.postID = blogPosts.postID
WHERE userID = :id ORDER BY postDate DESC");

$statement->bindParam(":id", $userID);    

$statement->execute();


$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 


?>