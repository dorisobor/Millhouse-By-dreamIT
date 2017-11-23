<?php 


require_once 'partials/db.php';

// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT * FROM blogposts ORDER BY postDate desc");


$statement->execute();


$blogposts =  $statement ->fetchAll(PDO::FETCH_ASSOC); 


?>