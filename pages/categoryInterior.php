<?php 
session_start();     
require_once '../config.php';
require_once DIRBASE . 'database/db.php'; 
require_once DIRBASE . 'database/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require DIRBASE . 'partials/head.php'; ?>
	<title>Interior</title>
	<meta name="description" content="all stories about Millhouse interior products.">
</head>

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php'; 
?>

<header>
	<div class="jumbotron_interiorHeader"></div>    
</header>

<main>
	<div class="mainBody">
		<div class="mainTitle">
			<h1>Interior</h1>
		</div>
		<p>Here you can read all about Millhouse exclusive interior details!</p>

		<?php foreach(getAllBlogpostsOnInterior() as $i => $blogpost): ?>
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

				<!-- username and publish date -->
				<div class="blogpost__content-username">
					<p class="username">Author: <?= $blogpost['username'] ?></p>
					<time><p>Publish date: <?= substr($blogpost['postDate'], 0, 16) ?></p></time>
				</div>
			</div>
	
			<div class="clear"></div>
			
			<!-- blogtitle -->
			<h2><?= $blogpost['postTitle'] ?></h2>

			<!-- blogimage -->
			<figure>
				<img src="images/<?= $blogpost['imageName'] ?>" alt="image for the blogpost">
			</figure>

			<!-- prints out the preview of the post, if it has more than 200
			chars 3 dots appear to show the user that theres more to read -->
			<div class= "blogpost__blog-description">
				<?php if (strlen($blogpost['postText']) > 200 ):?>
					<a href="pages/blogpost.php?view_post=<?=$blogpost['postID'];?>">
						<p><?=substr ($blogpost['postText'],0,200)?> ...</p>
					</a>
				<?php else: ?>
					<a href="pages/blogpost.php?view_post=<?=$blogpost['postID'];?>">
						<p><?= $blogpost['postText'] ?></p>
					</a>
				<?php endif; ?>

				<!-- link to full post -->
				<div class="blogpost__read-more"> 
					<a href="pages/blogpost.php?view_post=<?=$blogpost['postID'];?>">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>

				<br>

				<!-- Share button -->
				<?php require DIRBASE . 'partials/shareButton.php'; ?>

				<!-- link to full post -->
				<div class="commentLink">
					<i class="fa fa-commenting-o" aria-hidden="true"></i>
					<a href="pages/blogpost.php?view_post=<?=$blogpost['postID'];?>"></a>
				</div>	

				<div class="clear"></div>
				
			</div>
		</article>
		<?php endforeach; ?>
		
		<!-- user gets a message if theres no posts published -->
		<?php require DIRBASE . 'messages/messageEmptyCategory.php'; ?>

	</div>
</main>

<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html';
?>

</body>
</html>