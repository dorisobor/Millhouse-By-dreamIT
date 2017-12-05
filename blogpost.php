<?php 
require_once 'partials/db.php'; 
require 'functions.php';

//commented out since they dont exist in this version
// require_once 'partials/writeComment.php';
// require_once 'partials/readComments.php';

require_once 'partials/fetch_all_blogposts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Blogpost</title>
</head>

<body>

 <!--Included files-->
<?php require 'logoheader.html';
	  require 'partials/navbar.php'; 
	  require_once 'partials/db.php';
	  

	  if(isset($_GET['view_post']) ){ 
		$postID = $_GET ['view_post'];

		if(isset($_GET['view_post']) ){ 
		$postID = $_GET ['view_post'];
		
	    //Prepare statement that will help showing the specific task with the id
		$statement = $pdo->prepare("SELECT blogPosts.* , users.* ,categories.*  FROM blogPosts 
		JOIN users ON users.userID = blogPosts.userID
		JOIN categories ON categories.categoryID = blogPosts.categoryID
		WHERE postID ='$postID'");
	
	   //execute it
	$statement->execute();
	  
	   // Fetch all rows
	 $blogposts =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
	  
		
	  }
	  
	  }
 ?>


<main>

<div class="mainBody">

	
<?php 
        
 //foreach to show the blogposts
    foreach($blogposts as $blogpost) {
        
?>

	 <h1>Story</h1>
		
<article class="blogpost">
	<!--CATEGORIE TAG-->
	<div class="blogpost__category-tag">
	<span><?= $blogpost['categoryName'] ?></span>
	</div>
	<!--USER INFO-->

	<div class="blogpost__user-info">
		<div class="user-image__container">
			<img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>"/>
		</div>
	
		<div class="blogpost__content-username">
			<p class="username">Author: <?= $blogpost['username'] ?></p>
			<time><p>Date: <?=$blogpost['postDate'];?></p></time>
		</div>
	</div>


<div class="clear"></div>

	<!--The blog title-->
    <h2><?=$blogpost['postTitle'];?></h2>
	<figure>
		<!--BLOG PICTURE-->
	<img src="images/<?= $blogpost['imageName'] ?>" alt="<?=$blogpost['postTitle'];?>">

	</figure>
	<div class="blogpost__blog-description">
	
	   <p><?=$blogpost['postText'];?>
		</p>

	 <div class="blogpost__share-button"> <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
	 </div>

	 <div class="editButtons">
<!--
        <button>
          <a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
        </button>
-->
        <button>
          <a href="editPost.php?postID=<?=$blogpost['postID'];?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
        </button>
        
        <button class="delete">
          <a href="deleteBlogpost.php?delete_post=<?=$blogpost['postID'];?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
         </button>
        <form action="blogpost.php" method="post">
			<div class="commentInput">
				<div class="commentHr">
					<hr>
				</div>
				<p id="comment">Comment on this Story</p>
		        <input type="hidden" id="postID" name="postID" value="<?= $postID ?>">
				<?php
				//  foreach($comments as $commentRow) {
				// 	 foreach($commentRow as $comment => $value){
				// 		echo $comment['commentText'];
				// 		echo "<br>";
				// 	}
				// }
				?>
				<textarea class="textarea" id="message" rows="6" cols="50" name="comment" placeholder="Write comment here..." required> </textarea>
			</div>
			<div class="commentButton">
				<input type="submit" name="publish" value="Publish" />
			</div>
		</form>
    </div> 
	
	</div>
</article>
</div>
	
<?php 

//end of loop     
   }
  ?>
</main>
	
<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
