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
				<a class="blogpost__category-link" href="category<?= $latestPost['categoryName'] ?>.php"><?= $latestPost['categoryName']?></a>
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
				<p><?= $latestPost['postText'] ?></p>
				<div class="blogpost__read-more"> 
					<a href="#" >
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
			
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>
			</div>
				<div class="editButtons">
					<button>
						<a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<a>
					</button>
					<button class="delete">
						<a href="deleteBlogpost.php?delete_post=<?= $latestPost['postID']; ?>&redirectto=latestPosts.php">
							<i class="fa fa-trash" aria-hidden="true"></i> Delete
						</a>
					</button>
				</div> 
			</article>
		<?php endforeach; ?>
	</div>
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
