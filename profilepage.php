<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Profile Page</title>
</head>
<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php'; ?>

<main>
	<div class="profileBox"> 

		<!-- userimage (deafault = user icon) -->
		<div class="profileBox__content-1">
			<div class="user-image__container">
				<img class="user-image__image" src="<?= $user['userAvatar'] ?>"/>
			</div>
			
			<!-- username and userdescription -->
			<div class="profileBox__content-username">
				<p class="username"><?= $user['username'] ?></p>
				<p class="aboutMe"><?= $user['userBio'] ?></p>
			</div>
			
			<!-- icon for user settings -->
			<div class="settingsIcon">
				<button class="settings">
					<a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
				</button>
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="profileBox__content-2">

			<div class="createNewPost">
				<button class="create">
					<a href="createPost.php">Create New Story</a>
				</button>
			</div>

			<!-- prints out total posts and comments the user has published -->
			<div class="profileBox__content-commentsPosts">
				<div class="totalPosts">
					<span><?= getUserStatisticsPosts($GLOBALS['userID']) ?>  stories(s)</span>
				</div>

				<div class="totalComments">
					<span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comments(s)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- inner user nav -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link active" href="profilePage.php">All Stories</a>
		<a class="nav-item nav-link" href="latestPosts.php">Latest Stories</a>
		<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
	</nav>

	<!-- blogposts -->
	<div class="profilePosts">
	<?php foreach (getAllBlogpostsByUserID($userID) as $i => $totalPost): ?>
		<article class="blogpost">

			<!-- clickable category label -->
			<div class="blogpost__category-link">
				<a class="blogpost__category-link" href="category<?= $totalPost['categoryName'] ?>.php"><?= $totalPost['categoryName']?></a>
			</div>
			
			<!-- blogtitle and publish date -->
			<date>
				<p class="blogpost__date">Publish date: <?= substr($totalPost['postDate'], 0, 16) ?></p>
			</date>
			<h2 class="blogpost__title"><?= $totalPost['postTitle'] ?></h2>

			<!-- blogpost image -->
			<figure>
				<img src="<?= $totalPost['postImage'] ?>" alt="">
			</figure>	

			<div class="clear"></div> 

			<!-- prints out the preview of the post, if it has more than 200
			chars 3 dots appear to show the user that theres more to read -->
			<div class= "blogpost__blog-description">
			<?php if (strlen($totalPost['postText']) > 200 ):?>
				<a href="blogpost.php?view_post=<?=$totalPost['postID'];?>">
					<p><?=substr ($totalPost['postText'],0,200)?> ...</p>
				</a>
      		<?php else: ?>
				<a href="blogpost.php?view_post=<?=$totalPost['postID'];?>">
					<p><?= $totalPost['postText'] ?></p>
				</a>
			<?php endif; ?>
			
			<!-- link that leads to fullview of chosen post -->
			<div class="blogpost__read-more">
      			<a href="blogpost.php?view_post=<?=$totalPost['postID'];?>">
      				Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
				</a>
     		</div>
			<br>
			<div class="blogpost__share-button"> 
				<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>

			<!-- buttons for delete and edit post -->
			<div class="editButtons">
				<button>
					<a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<a>
				</button>
				<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal" 
				data-postid="<?= $totalPost['postID'] ?>" data-redirect-page="profilepage.php"> 
						<i class="fa fa-trash" aria-hidden="true"></i> Delete
				</button>
			</div>
			
		</article>
	<?php endforeach; ?>	
		
	<!-- shows a message to user if sh/e doesn't have any posts -->
	<?php require 'messages/messageEmptyProfileAllPosts.php'; ?>

	</div>
	
	<!-- popup window connected to delete button (ie delete confirmation) -->
	<?php require 'modals/modalDeletePost.php'; ?>

</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>