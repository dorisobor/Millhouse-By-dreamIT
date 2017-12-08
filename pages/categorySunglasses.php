<?php 
session_start();    
require_once '../config.php';     
require_once DIRBASE . 'database/db.php'; 
require_once DIRBASE . 'database/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once DIRBASE . 'partials/head.php'; ?>
	<title>Sunglasses</title>
	<meta name="description" content="all stories about Millhouse sunglasses.">
</head>

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php'; 
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
					<img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>" alt="user icon"/>
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

			<!-- blogpicture, if there is no picture, no alt tag is set -->
			<?php if (empty($blogpost['imageName'])): ?>
				<figure>
					<img src="images/<?= $blogpost['imageName'] ?>" alt="">
				</figure>
			<?php else: ?>
				<figure>
					<img src="images/<?= $blogpost['imageName'] ?>" alt="image for the blogpost">
				</figure>
			<?php endif; ?>

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
					<a href="pages/blogpost.php?view_post=<?=$blogpost['postID'];?>"
					aria-label="click here to read the entire post">
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>

				<br>
				
				<!-- Share button -->
				<?php require DIRBASE . 'partials/shareButton.php'; ?>

				<!-- link to full post -->
				<div class="commentLink">
					<a href="pages/blogpost.php?view_post=<?= $blogpost['postID'].'#comment'; ?>"
					aria-label="click here if you want to comment">
					<i class="fa fa-commenting-o" aria-hidden="true"></i> Comments
					</a>
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