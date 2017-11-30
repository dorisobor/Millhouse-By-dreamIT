<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Latest posts</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php'; ?>

<main>
	<div class="profileBox"> 
		<div class="profileBox__content-1">
			
			<!-- Userimage instead of icon -->
			<div class="user-image__container">
				<img class="user-image__image" src="<?= $user['userAvatar'] ?>"/>
			</div>

			<!-- username and info -->
			<div class="profileBox__content-username">
				<p class="username"><?= $user['username'] ?></p>
				<p class="aboutMe"><?= $user['userBio'] ?></p>
			</div>

			<!-- settings icon -->
			<div class="settingsIcon">
				<button class="settings">
					<a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
				</button>
			</div>
        </div>
				
		<div class="clear"></div> 

        <div class="profileBox__content-2">
			<div class="profileBox__content-commentsPosts">
				<div class="totalPosts">
					<span><?= getUserStatisticsPosts($GLOBALS['userID']) ?> stories(s)</span>
				</div>
				<div class="totalComments">
					<span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comments(s)</span>
				</div>
			</div>
			<div class="createNewPost">
				<button class="create">
					<a href="createPost.php">Create New Story</a>
				</button>
			</div>
		</div>      
	</div>
	
	<!-- Tab menu -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link" href="profilePage.php">All Stories</a>
		<a class="nav-item nav-link active" href="latestPosts.php">Latest Stories</a>
		<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
	</nav>
			
	<div class="profilePosts">
	<?php foreach (getLatestBlogpostByUserID($userID) as $i => $latestPost): ?>
		<article class="blogpost">

			<!-- category tag -->
			<div class="blogpost__category-link">
				<a class="blogpost__category-link" href="category<?= $latestPost['categoryName'] ?>.php">
					<?= $latestPost['categoryName']?>
				</a>
			</div>

			<!-- blogpost title -->
			<date><p class="blogpost__date"><?= substr($latestPost['postDate'], 0, 16) ?></p></date>
			<h2 class="blogpost__title"><?= $latestPost['postTitle'] ?></h2>

			<!-- blogpost image -->
			<figure>
				<img src="<?= $latestPost['postImage']?>" alt="">
			</figure>

			<div class="clear"></div> 

				<div class= "blogpost__blog-description">
				<?php if (strlen($latestPost['postText']) > 200 ):?>
					<a href="blogpost.php?view_post=<?=$latestPost['postID'];?>">
						<p><?=substr ($latestPost['postText'],0,200)?> ...</p>
					</a>
      			<?php else: ?>
					<a href="blogpost.php?view_post=<?=$latestPost['postID'];?>">
						<p><?= $latestPost['postText'] ?></p>
					</a>
      			<?php endif; ?>

				<div class="blogpost__read-more">
     				<a href="blogpost.php?view_post=<?=$latestPost['postID'];?>">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
     			</div>
				<br>
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>
			</div>
				<div class="editButtons">
					<button>
						<a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<a>
					</button>
					<button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-modal"
					data-postid="<?= $latestPost['postID'] ?>" data-redirect-page="latestPosts.php">
						<i class="fa fa-trash" aria-hidden="true"></i> Delete
					</button>
				</div> 
			</article>
		<?php endforeach; ?>

		<!-- shows a message to user if sh/e doesn't have any posts -->
		<?php require 'messages/messageEmptyProfileLatestPosts.php'; ?>

	</div>

	<!-- popup window -->
	<?php require 'modals/modalDeletePost.php'; ?>

</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
