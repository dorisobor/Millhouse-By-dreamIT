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
	<?php require DIRBASE . 'partials/head.php'; ?>
	<title>Profile Page</title>
	<meta name="description" content="Your personal profilepage at Millhouse Stories.">
</head>

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php';
?>

<main>
	<div class="profileBox"> 
		<!-- userimage (deafault = user icon) -->
		<div class="profileBox__content-1">
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
					<span>Published stories: <?= getUserStatisticsPosts($userID) ?></span>
				</div>

				<div class="totalComments">
					<span>Comments: <?= getUserStatisticsComments($userID) ?></span>
				</div>
			</div>
		</div>
	</div>

	<!-- inner user nav -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link active" href="pages/profilePage.php">All Stories</a>
		<a class="nav-item nav-link" href="pages/latestPosts.php">Latest Stories</a>
		<a class="nav-item nav-link" href="pages/latestComments.php">Latest Comments</a>
	</nav>

	<!-- blogposts -->
	<div class="profilePosts">
		
		<!-- triggers message if post was deleted -->
		<?php if ($postIsDeleted): ?>
			<?php require DIRBASE . 'messages/messageDeletePostConfirm.html';?>
		<?php endif; ?>
		
		<?php foreach (getAllBlogpostsByUserID($userID) as $i => $totalPost): ?>
			<article class="blogpost">

				<!-- clickable category label -->
				<div class="blogpost__category-link">
					<a class="blogpost__category-link" href="pages/category<?= $totalPost['categoryName'] ?>.php">
						<?= $totalPost['categoryName']?>
					</a>
				</div>
					
				<!-- blogtitle and publish date -->
				<date>
					<p class="blogpost__date">Publish date: <?= substr($totalPost['postDate'], 0, 16) ?></p>
				</date>
				<h2 class="blogpost__title"><?= $totalPost['postTitle'] ?></h2>

				<!-- blogpost image -->
				<figure>
					<img src="images/<?= $totalPost['imageName'] ?>" alt="image for the blogpost">
				</figure>	

				<div class="clear"></div> 

				<!-- prints out the preview of the post, if it has more than 200
				chars 3 dots appear to show the user that theres more to read -->
				<div class= "blogpost__blog-description">
				<?php if (strlen($totalPost['postText']) > 200 ):?>
					<a href="pages/blogpost.php?view_post=<?=$totalPost['postID'];?>">
						<p><?=substr ($totalPost['postText'],0,200)?> ...</p>
					</a>
				<?php else: ?>
					<a href="pages/blogpost.php?view_post=<?=$totalPost['postID'];?>">
						<p><?= $totalPost['postText'] ?></p>
					</a>
				<?php endif; ?>
			
				<!-- link that leads to fullview of chosen post -->
				<div class="blogpost__read-more">
					<a href="pages/blogpost.php?view_post=<?=$totalPost['postID'];?>"
					aria-label="click here to read the entire post">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
				<br>
				<?php require DIRBASE .'partials/shareButton.php'; ?>

				<!-- buttons for delete and edit post -->
				<div class="editButtons">
							
					<button>
          					<a href="editPost.php?postID=<?=$blogpost['postID'];?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
 					</button>		
							
					<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal" 
					data-postid="<?= $totalPost['postID'] ?>" data-redirect-page="pages/profilepage.php"> 
							<i class="fa fa-trash" aria-hidden="true"></i> Delete
					</button>
				</div>
			
			</article>
	<?php endforeach; ?>	
		
<!-- shows a message to user if sh/e doesn't have any posts -->
<?php require DIRBASE . 'messages/messageEmptyProfileAllPosts.php'; ?>

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
