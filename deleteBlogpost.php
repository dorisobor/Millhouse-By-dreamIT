<?php
session_start();
require_once 'partials/db.php';
require_once 'functions.php';

// function to delete the blogpost
if(isset ($_GET['delete_post'])){
      
      $deletePost = $_GET['delete_post'];

      // make sure that comments linked to the post gets deleted
      $statement = $pdo->prepare("DELETE FROM comments
      WHERE postID = :postID AND userID = :userID");
      $statement->execute(array(
            ":postID" =>  $deletePost, 
            ':userID' => getLoggedInUserID()));

      //deletes IMAGE
      $statement = $pdo->prepare("DELETE images FROM images
      JOIN blogposts ON blogposts.postID = images.postID
      WHERE images.postID = :postID AND userID = :userID");
      $statement->execute(array(
            ":postID" =>  $deletePost, 
            ':userID' => getLoggedInUserID()));

      // delete post (ONLY TEXT ELEMENTS)
      $statement = $pdo->prepare("DELETE blogPosts FROM blogPosts
      WHERE postID = :postID AND userID = :userID");
       $statement->execute(array(
            ":postID" =>  $deletePost, 
            ':userID' => getLoggedInUserID()));
}

$redirect = 'index.php';

//if user should be directed to somewhere other than index
if (isset($_GET['redirectto'])){
    $redirect = $_GET['redirectto'];
}

header("Location: $redirect");
