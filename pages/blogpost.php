<?php 
session_start();
require_once '../config.php';
require_once DIRBASE . 'database/db.php'; 
require_once DIRBASE . 'database/functions.php';
require_once DIRBASE . 'partials/writeComment.php';
require_once DIRBASE . 'database/actions/fetch_all_blogposts.php';

//checks if DELETE button was pressed och post was deleted
//if it was deleted variable is used to trigger a message
$commentIsDeleted = isset($_SESSION['commentDeleted']);
//unsets session in order for message to disappear
unset($_SESSION['commentDeleted']);

//checks if PUBLISH button was pressed och comment was published
//and if yes, variable is used to trigger a message
$commentIsPublished = isset($_SESSION['commentPublished']);
//unsets session in order for message to disappear
unset($_SESSION['commentPublished']);

//values for comment form
$publishComment = "publish";
$updateComment = "updateComment";
//commenttext
$commentText = '';
$commentButton = $publishComment;
$commentButtonValue = "Publish!";

//if read more linked is clicked the following is fetched from the database
if(isset($_GET['view_post'])){ 

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
	
	//fetches all the comments connected to the post
	$statement = $pdo->prepare("SELECT comments.*, users.*  
	FROM comments
	JOIN users ON users.userID = comments.userID
	WHERE comments.postID = $postID
	ORDER BY comments.commentDate DESC");
	$statement->execute();
	$comments =  $statement ->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once DIRBASE . 'partials/head.php'; ?>
	<title>Blogpost</title>
	<meta name="description" content="Another amazing story from Millhouse Stories!">
</head>

<body>

<!-- header with millhouse logo and navbar -->
<?php
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php'; 
?>

<main>
	<div class="mainBody">
		<?php if ($commentIsDeleted): ?>
            <?php require DIRBASE . 'messages/messageDeleteCommentConfirm.html'; ?>
		<?php endif; ?>
		<?php if ($commentIsPublished): ?>
            <?php require DIRBASE . 'messages/messageWriteCommentConfirm.html'; ?>
        <?php endif; ?>
		<?php     
		//foreach to show the blogposts
		foreach($blogposts as $blogpost) {      
		?>
			<h1>Story</h1>
			<article class="blogpost">
				<!-- clickable category label -->
				<div class="blogpost__category-tag">
					<a class="blogpost__category-link" href="pages/category<?= $blogpost['categoryName'] ?>.php">
						<?= $blogpost['categoryName']?>
					</a>
				</div>

				<!-- shows the useravatar -->
				<div class="blogpost__user-info">
					<div class="user-image__container">
						<img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>" alt="user icon"/>
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

				<!-- blogpicture, if there is no picture, no alt tag is set -->
				<?php if (empty($blogpost['imageName'])): ?>
					<figure>
						<img src="/images/<?= $blogpost['imageName'] ?>" alt="">
					</figure>
				<?php else: ?>
					<figure>
						<img src="/images/<?= $blogpost['imageName'] ?>" alt="image for the blogpost">
					</figure>
				<?php endif; ?>

				<div class="blogpost__blog-description">
					<p>
						<?=$blogpost['postText'];?>
					</p>
				</div>

				<!-- Share button -->
				<?php require DIRBASE . 'partials/shareButton.php'; ?>

				<div class="editButtons">	
					<!-- ONLY renders if the inlogged user has written the post -->
					<?php if(getLoggedInUserID() == $blogpost['userID']): ?>
						<!-- edit button -->
						<!-- buttons for delete and edit post -->
						<button>
							<a href="pages/editPost.php?postID=<?=$blogpost['postID'];?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
						</button>		
						<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal" 
							data-postid="<?= $totalPost['postID'] ?>" data-redirect-page="pages/profilepage.php"> 
							<i class="fa fa-trash" aria-hidden="true"></i> Delete
						</button>
					<?php endif; ?>

				<div class="clear"></div>

				<?php if(isLoggedIn()): ?>
					<form method="post">
						<div class="commentInput">
							<div class="commentHr">
								<hr>
							</div>
							<p id="comment">Comment on this Story</p>
							<input type="hidden" id="postID" name="postID" value="<?= $postID ?>">
							<input type="hidden" id="commentID" name="commentID" value="<?= $commentID ?>">
							<textarea class="textarea" id="message" rows="6" cols="50" name="comment" placeholder="Write comment here..." required><?= $commentText; ?> </textarea>
						</div>
						<div class="commentButton">
							<input type="submit" name="<?= $commentButton ?>" value="<?= $commentButtonValue ?>"  />
						</div>
					</form>
				<? endif; ?>

                <h3>All comments (<?= getTotalCommentsOnPost($blogpost['postID']) ?>)</h3>
				<!-- loops all the comments on the post -->
				<?php foreach($comments as $comment): ?>
						<div class="comment-field">
							<p class="comment-field__username">
								<?= $comment['username'] ?>
							</p>
							<p class="comment-field__text">
								commented on
							</p>
							<p class="comment-field__date">
								<?= substr($comment['commentDate'], 0,16 ) ?>
							</p>
							<p>
								<?= $comment['commentText'] ?>
							</p>
							<!-- checks if the inlogged user wrote the comment, only then sh/e can delete -->
							<?php if(getLoggedInUserID() == $comment['userID']): ?>
								<div class="editButtons">
									<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-comment-modal"
										data-comment-id="<?= $comment['commentID']?>" data-redirect-page="pages/blogpost.php?view_post=<?= $blogpost['postID'];?>">
										<i class="fa fa-trash" aria-hidden="true"></i> Delete
									</button>
								</div>
							<?php endif; ?>
						</div>
				<?php endforeach; ?>
				<!-- if there is no comments the user gets a message -->
				<?php if(empty($comment)): ?>
					<p>There are no comments yet!</p>
				<?php endif; ?>
    		</div> 
		</div>
	</article>
</div>

<?php 
//end of loop     
}
?>

<!-- modal that shows if user clicks delete button -->
<?php require DIRBASE . 'modals/modalDeletePost.php'; ?>

<!-- popup window connected to delete button (ie delete confirmation) -->
<?php require DIRBASE . 'modals/modalDeleteComment.php'; ?>

</main>
	
<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html';
?>

</body>
</html>
