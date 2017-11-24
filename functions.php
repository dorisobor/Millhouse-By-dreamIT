<?php 

function getUserInfo ($userID) {
    global $pdo;            
    $stmt = $pdo->prepare("SELECT username, userBio FROM users WHERE userID = :id");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $userDescription = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userDescription;
}

function getUserStatisticsPosts($userID) {
    global $pdo;                
    $stmt = $pdo->prepare("SELECT COUNT(postID) as count FROM blogPosts WHERE userID = :id");  
    $stmt->bindParam(":id", $userID);        
    $stmt->execute();
    $userPosts = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userPosts['count'];
}

function getUserStatisticsComments ($userID){
    global $pdo;                    
    $stmt = $pdo->prepare("SELECT COUNT(commentID) as count FROM comments WHERE userID = :id"); 
    $stmt->bindParam(":id", $userID);            
    $stmt->execute();
    $userComments = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userComments['count'];
}

function getLatestBlogpostByUserID ($userI) {
    global $pdo;        
    $stmt = $pdo->prepare("SELECT * FROM blogPosts WHERE userID = :id ORDER BY postDate DESC LIMIT 5 ");  
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}

function getAllBlogpostsByUserID ($userID) {
    global $pdo;    
    $stmt = $pdo->prepare("SELECT * FROM blogPosts WHERE userID = :id ORDER BY postDate DESC");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $userBlogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $userBlogposts;
}

function getAllCategories ($postID) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM blogPosts JOIN categories ON categories.categoryID = blogPosts.categoryID WHERE blogPosts.postID = :id");
    $stmt->bindParam(":id", $postID);
    $stmt->execute();
    $postCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $postCategories;
}

function getAllImagesByPostID ($postID) {
	global $pdo;
	$stmt = $pdo->prepare("SELECT * FROM blogPosts JOIN images ON images.postID = blogPosts.postID WHERE blogPosts.postID = :id");  
	$stmt->bindParam(":id", $postID);
	$stmt->execute();
    $postImages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $postImages;
}


