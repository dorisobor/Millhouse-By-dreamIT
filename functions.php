<?php 

// deletes comments from userprofile
function deleteComment ($commentID) {
    global $pdo;            
    $stmt = $pdo->prepare("DELETE FROM comments WHERE commentID = :commentID");  
    $stmt->bindParam(":commentID", $commentID);    
    $stmt->execute();
}

// fetches userinfo 
function getUserInfo ($userID) {
    global $pdo;            
    $stmt = $pdo->prepare("SELECT * FROM users WHERE userID = :id");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userInfo;
}

// counts the total posts that the user has made
function getUserStatisticsPosts($userID) {
    global $pdo;                
    $stmt = $pdo->prepare("SELECT COUNT(postID) as count FROM blogPosts WHERE userID = :id");  
    $stmt->bindParam(":id", $userID);        
    $stmt->execute();
    $userPosts = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userPosts['count'];
}

// counts the total comments that the user has made
function getUserStatisticsComments ($userID){
    global $pdo;                    
    $stmt = $pdo->prepare("SELECT COUNT(commentID) as count FROM comments WHERE userID = :id"); 
    $stmt->bindParam(":id", $userID);            
    $stmt->execute();
    $userComments = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userComments['count'];
}

// fetches the 5 latest posts the user has made
function getLatestBlogpostByUserID ($userID) {
    global $pdo;   
    $stmt = $pdo->prepare("SELECT images.*,blogPosts.*,categories.* FROM blogPosts 
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    LEFT JOIN images ON images.postID = blogPosts.postID
    WHERE userID = :id ORDER BY postDate DESC LIMIT 5");  
    $stmt->bindParam(":id", $userID);     
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}

// fetches all the posts the user has made
function getAllBlogpostsByUserID ($userID) {
    global $pdo;    
    $stmt = $pdo->prepare("SELECT images.*,blogPosts.*,categories.* FROM blogPosts 
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    LEFT JOIN images ON images.postID = blogPosts.postID
    WHERE userID = :id ORDER BY postDate DESC");  
    $stmt->bindParam(":id", $userID);    
    $stmt->execute();
    $blogposts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $blogposts;
}

// gets all posts in order to sort them in categories
function getAllBlogpostsByCategory ($postCategory){
    global $pdo;    
    $stmt = $pdo->prepare("SELECT images.*, blogPosts.*, categories.*, users.* 
    FROM blogPosts
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

// gets all posts in category: watches
function getAllBlogpostsOnWatches () {
    return getAllBlogpostsByCategory(1);
}

// gets all posts in category: sunglasses
function getAllBlogpostsOnSunglasses () {
    return getAllBlogpostsByCategory(2);
}

// gets all posts in category: interior
function getAllBlogpostsOnInterior() {
    return getAllBlogpostsByCategory(3);
}