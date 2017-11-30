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
	<div class="jumbotron_watchesHeader"></div>    
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
					<p class="username"><?= $blogpost['username'] ?></p>
					<time><p><?= substr($blogpost['postDate'], 0, 16)?></p></time>
				</div>
			</div>
	
			<div class="clear"></div>
			
			<h2><?= $blogpost['postTitle'] ?></h2>
			<!--BLOG PICTURE-->
			<figure>
				<img src="<?= $blogpost['postImage'] ?>" alt="">
			</figure>
			<div class= "blogpost__blog-description">
			<?php if (strlen($blogpost['postText']) > 200 ):?>
				<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
					<p><?=substr ($blogpost['postText'],0,200)?> ...</p>
				</a>
			<?php else: ?>
				<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
					<p><?= $blogpost['postText'] ?></p>
				</a>
			<?php endif; ?>

				<div class="blogpost__read-more"> 
					<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>

				<br>

				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>

				<div class="commentLink">
					<i class="fa fa-commenting-o" aria-hidden="true"></i>
					<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
					<span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comment(s)</span></a>
				</div>	

     			<div class="clear"></div>

			</div>
		</article>
		<?php endforeach; ?>

		<?php require 'messageEmptyCategory.php'; ?>
	
	</div>
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>