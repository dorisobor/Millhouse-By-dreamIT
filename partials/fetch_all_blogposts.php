<?php 


require_once 'partials/db.php';

// fetch all the blogposts
$statement = $pdo->prepare("SELECT * FROM blogposts");


$statement->execute();


$blogposts =  $statement ->fetchAll(PDO::FETCH_ASSOC); 


?>