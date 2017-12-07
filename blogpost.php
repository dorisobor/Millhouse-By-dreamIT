<?php 
session_start();
require_once 'partials/db.php'; 
require_once 'functions.php';

//commented out since they dont exist in this version
// require_once 'partials/writeComment.php';
// require_once 'partials/readComments.php';

require_once 'partials/fetch_all_blogposts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'partials/head.html'; ?>
	<title>Blogpost</title>
</head>

<body>

<?php 
// renders header with millhouse logo and navbar
require 'partials/logoheader.html';
require 'partials/navbar.php'; 
	  
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
	<?php
	$statement = $pdo->prepare("SELECT users.*, blogPosts.*, comments.*  FROM comments
	LEFT JOIN blogPosts ON blogPosts.postID = comments.postID
	LEFT JOIN users ON users.userID = comments.userID
	WHERE blogPosts.postID = $postID;
    ");

    $statement->execute();

    $allComments = $statement->fetchAll(PDO::FETCH_ASSOC); 
	?>

<?php foreach($allComments as $allComment) { 
	
	
	}
?>
<main>

<div class="mainBody">

<?php     
 //foreach to show the blogposts
foreach($blogposts as $blogpost) {  
	print_r ($blogpost);   
?>

	<h1>Story</h1>
		
	<article class="blogpost">
		<!-- clickable category label -->
		<div class="blogpost__category-tag">
			<a class="blogpost__category-link" href="category<?= $blogpost['categoryName'] ?>.php">
				<?= $blogpost['categoryName']?>
			</a>
		</div>

		<div class="blogpost__user-info">
			<div class="user-image__container">
				<img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>"/>
			</div>

			<!-- username and date -->
			<div class="blogpost__content-username">
				<p class="username">Author: <?= $blogpost['username'] ?></p>
				<time><p>Publish date: <?= substr($blogpost['postDate'],0,16)?></p></time>
			</div>
		</div>

		<div class="clear"></div>

		<!-- blogtitle -->
		<h2><?=$blogpost['postTitle'];?></h2>

		<!-- blogimage -->
		<figure>
			<img src="images/<?= $blogpost['imageName'] ?>" alt="<?php $blogpost['postTitle'];?>">
		</figure>

		<div class="blogpost__blog-description">
			<p>
				<?=$blogpost['postText'];?>
			</p>
			<div class="blogpost__share-button">
				<a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>

	 		<div class="editButtons">	
			<!-- ONLY renders if the inlogged user has written the post -->
			<?php if(getLoggedInUserID() == $blogpost['userID']): ?>
				<!-- edit button -->
				<button>
					<a href="editPost.php?postID=<?=$blogpost['postID'];?>">
						<i class="fa fa-pencil" aria-hidden="true"></i> Edit
					</a>
				</button>
				<!-- delete button -->
				<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal" 
				data-postid="<?= $blogpost['postID'] ?>" data-redirect-page="index.php"> 
					<i class="fa fa-trash" aria-hidden="true"></i> Delete
				</button>
			<?php endif; ?>

			<div class="clear"></div>

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
		
		<div class="allComments">
			<p>All Comments For This Story</p>
			
		
			
		</div>
    </div> 
	</div>
</article>
</div>
	
<?php 
//end of loop     
}
?>

<!-- modal that shows if user clicks delete button -->
<?php require 'modals/modalDeletePost.php'; ?>

</main>
	
<?php 
require 'partials/footer.php';
require 'partials/bootstrapScripts.html';
?>

</body>
</html>
