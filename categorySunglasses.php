<?php 
session_start();         
require_once 'partials/db.php'; 
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Sunglasses</title>
</head>

<body>

<?php 
require 'logoheader.html';
require 'partials/navbar.php'; 
?>

<header>
	<div class="jumbotron_sunglassesHeader"></div>    
</header>

<main>
	<!-- picture representing the category -->
	<div class="mainBody">
		<h1>Sunglasses</h1>
		<p>Here you can read all about Millhouse exclusive sunglasses!</p>

		<?php foreach(getAllBlogpostsOnSunglasses() as $i => $blogpost): ?>
		<article class="blogpost">
			<!-- category label -->
			<div class="blogpost__category-tag">
				<span><?= $blogpost['categoryName'] ?></span>
			</div>

			<!-- useravatar -->
			<div class="blogpost__user-info">
				<div class="user-image__container">
					<img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>"/>
				</div>

				<!-- prints username and publish date -->
				<div class="blogpost__content-username">
					<p class="username">Author: <?= $blogpost['username'] ?></p>
					<time><p>Publish date: <?= substr($blogpost['postDate'], 0, 16) ?></p></time>
				</div>
			</div>
		
			<div class="clear"></div>

			<!-- blogpost title -->
			<h2><?= $blogpost['postTitle'] ?></h2>

			<!-- blogpost image -->
			<figure>
				<img src="images/<?= $blogpost['imageName'] ?>" alt="">
			</figure>

			<!-- prints out the preview of the post, if it has more than 200
			chars 3 dots appear to show the user that theres more to read -->
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

				<!-- link to full post -->
				<div class="blogpost__read-more"> 
					<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>

				<br>
				
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>

				<!-- link to full post -->
				<div class="commentLink">
					<i class="fa fa-commenting-o" aria-hidden="true"></i>
					<a href="blogpost.php?view_post=<?=$blogpost['postID'];?>"></a>
				</div>	

     			<div class="clear"></div>

			</div>
		</article>
		<?php endforeach; ?>

		<!-- user gets a message if theres no posts published -->
		<?php require 'messages/messageEmptyCategory.php'; ?>

	</div>
</main>

<?php 
require 'partials/footer.php';
require 'bootstrapScripts.html'; 
?>

</body>
</html>