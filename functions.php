<?php 

function getUserInfo ($userID) {
    global $pdo;            
    $stmt = $pdo->prepare("SELECT username, userBio FROM users WHERE userID = :id");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userInfo;
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

function getLatestBlogpostByUserID ($userID) {
    global $pdo;   
    $stmt = $pdo->prepare("SELECT * FROM blogPosts 
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    LEFT JOIN images ON images.postID = blogPosts.postID
    WHERE userID = :id ORDER BY postDate DESC LIMIT 5");  
    $stmt->bindParam(":id", $userID);     
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}

function getAllBlogpostsByUserID ($userID) {
    global $pdo;    
    $stmt = $pdo->prepare("SELECT * FROM blogPosts 
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    LEFT JOIN images ON images.postID = blogPosts.postID
    WHERE userID = :id ORDER BY postDate DESC");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}

function getAllBlogpostsOnWatches () {
    return getAllBlogpostsByCategory(1);
}

function getAllBlogpostsOnSunglasses () {
    return getAllBlogpostsByCategory(2);
}

function getAllBlogpostsOnInterior() {
    return getAllBlogpostsByCategory(3);
}

function getAllBlogpostsByCategory ($postCategory){
    global $pdo;    
    $stmt = $pdo->prepare("SELECT * FROM blogPosts
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    LEFT JOIN images ON images.postID = blogPosts.postID
    JOIN users ON users.userID = blogPosts.userID
    WHERE categories.categoryID = :categoryID
    ORDER BY blogPosts.postID DESC");  
    $stmt->bindParam(":categoryID", $postCategory);    
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}