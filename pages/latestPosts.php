<?php 
session_start();   
require_once '../config.php';
require_once DIRBASE . 'database/db.php'; 
require_once DIRBASE . 'database/functions.php';

//checks if delete button was pressed och post was deleted
//if it was deleted variable is used to trigger a message
//see row 91
$postIsDeleted = isset($_SESSION['postDeleted']);
//unsets session in order for message to disappear
unset($_SESSION['postDeleted']);

//if user is not logged in sh/e gets redirected to home
if (!isLoggedIn()){
	header('Location: pages/login.php');
	return;
}

$user = getUserInfo($_SESSION['userID']);
$userID = $user['userID'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once DIRBASE . 'partials/head.php'; ?>
	<title>Latest posts</title>
	<meta name="description" content="See the latest stories you've written.">
</head>

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php';
?>

<main>
	<div class="profileBox"> 
		<div class="profileBox__content-1">
			
			<!-- userimage (deafault = user icon) -->
			<div class="user-image__container">
				<img class="user-image__image" src="<?= $user['userAvatar'] ?>" alt="user icon"/>
			</div>

			<!-- username and userdescription -->
			<div class="profileBox__content-username">
				<p class="username"><?= $user['username'] ?></p>
				<p class="aboutMe"><?= $user['userBio'] ?></p>
			</div>
        </div>
				
		<div class="clear"></div> 

        <div class="profileBox__content-2">
			<div class="createNewPost">
				<button class="create">
					<a href="pages/createPost.php">Create New Story</a>
				</button>
			</div>

			<!-- prints out total posts and comments the user has published -->
			<div class="profileBox__content-commentsPosts">
				<div class="totalPosts">
					<span>Published stories: <?= getUserStatisticsPosts($userID)?></span>
				</div>
				<div class="totalComments">
					<span>Comments: <?= getUserStatisticsComments($userID) ?></span>
				</div>
			</div>
		</div>      
	</div>
	
	<!-- inner user nav -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link" href="pages/profilePage.php">All Stories</a>
		<a class="nav-item nav-link active" href="pages/latestPosts.php">Latest Stories</a>
		<a class="nav-item nav-link" href="pages/latestComments.php">Latest Comments</a>
	</nav>
			
	<div class="profilePosts">
		<!-- triggers message if post was deleted -->
		<?php if ($postIsDeleted): ?>
			<?php require DIRBASE . 'messages/messageDeletePostConfirm.html';?>
		<?php endif; ?>

		<?php foreach (getLatestBlogpostByUserID($userID) as $i => $latestPost): ?>
			<article class="blogpost">

			<!-- clickable category label -->
			<div class="blogpost__category-link">
				<a class="blogpost__category-link" href="pages/category<?= $latestPost['categoryName'] ?>.php">
					<?= $latestPost['categoryName']?>
				</a>
			</div>

			<!-- blogtitle and publish date  -->
			<date><p class="blogpost__date">Publish date: <?= substr($latestPost['postDate'], 0, 16) ?></p></date>
			<h2 class="blogpost__title"><?= $latestPost['postTitle'] ?></h2>

			 <!-- blogpicture, if there is no picture, no alt tag is set -->
			 <?php if (empty($blogpost['imageName'])): ?>
				<figure>
					<img src="images/<?= $latestPost['imageName'] ?>" alt="">
				</figure>
          	<?php else: ?>
				<figure>
					<img src="images/<?= $latestPost['imageName'] ?>" alt="image for the blogpost">
				</figure>
          	<?php endif; ?>

			<div class="clear"></div> 

			<!-- prints out the preview of the post, if it has more than 200
			chars 3 dots appear to show the user that theres more to read -->
			<div class= "blogpost__blog-description">
				<?php if (strlen($latestPost['postText']) > 200 ):?>
					<a href="pages/blogpost.php?view_post=<?=$latestPost['postID'];?>">
						<p><?=substr ($latestPost['postText'],0,200)?> ...</p>
					</a>
				<?php else: ?>
					<a href="pages/blogpost.php?view_post=<?=$latestPost['postID'];?>">
						<p><?= $latestPost['postText'] ?></p>
					</a>
				<?php endif; ?>

				<!-- link that leads to fullview of chosen post -->
				<div class="blogpost__read-more">
					<a href="pages/blogpost.php?view_post=<?=$latestPost['postID'];?>"
					aria-label="click here to read the entire post">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
				<br>
				<?php require DIRBASE .'partials/shareButton.php'; ?>

			
				<!-- buttons for delete and edit post -->
				<div class="editButtons">
					<button>
          				<a href="pages/editPost.php?postID=<?=$latestPost['postID'];?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
 					</button>
					<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal"
					data-postid="<?= $latestPost['postID'] ?>" data-redirect-page="pages/latestPosts.php">
						<i class="fa fa-trash" aria-hidden="true"></i> Delete
					</button>
				</div> 
		</article>
	<?php endforeach; ?>

<!-- shows a message to user if sh/e doesn't have any posts -->
<?php require DIRBASE . 'messages/messageEmptyProfileLatestPosts.php'; ?>

</div>

<!-- popup window connected to delete button (ie delete confirmation) -->
<?php require DIRBASE . 'modals/modalDeletePost.php'; ?>

</main>

<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html'; 
?>

</body>
</html>
