<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Watches</title>
</head>
<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php'; ?>

<header>
	<figure class="coverPhoto">
		<img src="images/mh_watch_576.png" alt="interior header photo">
	</figure>
</header>

<main> 
	<!-- picture representing the category -->
	<div class="mainBody">
		<h1>Watches</h1>
		<p>Here you can read all about Millhouse exclusive watches!</p>
		<!-- article = blogpost -->
		<?php foreach (getAllBlogpostsOnWatches(1) as $i => $blogpost): ?>
		<article class="blogpost">
		<!--CATEGORIE TAG-->
			<div class="blogpost__category-tag">
				<span><?= $blogpost['categoryName'] ?></span>
			</div>

			<div class="blogpost__user-info">
				<div class="user-image__container">
					<img class="user-image__image" src="<?= $user['userAvatar'] ?>"/>
				</div>
			
				<div class="blogpost__content-username">
					<p class="username"><?= $user['username'] ?></p>
					<time><p>Date: <?=$blogpost['postDate'];?></p></time>
				</div>
			</div>
	
			<div class="clear"></div>
			
			<h2><?= $blogpost['postTitle'] ?></h2>
			<!--BLOG PICTURE-->
			<figure>
				<img src="<?= $blogpost['postImage'] ?>" alt="">
			</figure>
			<div class= "blogpost__blog-description">
				<p><a href="#">
					<?= substr($blogpost['postText'],0,200) ?>
					</a></p>
				<div class="blogpost__read-more"> 
					<a href="blogpost.php">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>
			</div>
		</article>
		<?php endforeach; ?>
	</div>
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>