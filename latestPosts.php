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
			<div class="userImage">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
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
					<span><?= getUserStatisticsPosts($GLOBALS['userID']) ?>  post(s)</span>
				</div>
				<div class="totalComments">
					<span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comments(s)</span>
				</div>
			</div>
			<div class="createNewPost">
				<button class="create">
					<a href="createPost.php">Create New Post</a>
				</button>
			</div>
		</div>      
	</div>
	
	<!-- Tab menu -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link" href="profilePage.php">Profile</a>
		<a class="nav-item nav-link active" href="latestPosts.php">Latest Posts</a>
		<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
	</nav>
			
	<div class="profilePosts">

	<?php foreach (getAllBlogpostsByUserID($userID) as $i => $totalPost): ?>
		<article class="blogpost">

			<!-- category tag -->
			<button class="categoryButton">
				<a href="categoryInterior.php">Interior</a>
			</button>

			<!-- blogpost title -->
			<h2 class="blogpost__title"><?= $totalPost['postTitle'] ?></h2>
			<date><p class="blogpost__date"><?= substr($totalPost['postDate'], 0, 16) ?></p></date>

			<!-- blogpost image -->
			<?php foreach (getAllImagesByPostID($totalPost['postID']) as $i => $latestPostImage): ?>
				<figure>
					<img src="<?= $latestPostImage['postImage']?>" alt="inredning_kollage">
				</figure>
			<?php endforeach; ?>

			<div class="clear"></div> 

			<div class= "blogpost__blog-description">
				<p><?= $totalPost['postText'] ?></p>
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
					<button><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
					<button class="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
				</div> 
			</article>
		<?php endforeach; ?>
	</div>
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
