<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Interior</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php'; ?>

<header>
	<figure class="coverPhoto">
		<img src="images/mh_interior_576.png" alt="interior header photo">
	</figure>
</header>

<main>
	<div class="mainBody">
		<div class="mainTitle">
			<h1>Interior</h1>
		</div>
		<p>Here you can read all about Millhouse exclusive interior details!</p>
		<!-- article = blogpost -->	
		<?php foreach(getAllBlogpostsOnInterior(3) as $i => $blogpost): ?>
		<article class="blogpost">
		<!--CATEGORIE TAG-->
			<div class="blogpost__category-tag">
				<span><?= $blogpost['categoryName'] ?></span>
			</div>
			<div class="blogpost__user-info">
				<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				<span><?= $blogpost['username'] ?></span> 
				<time><p><?= substr($blogpost['postDate'], 0, 16); ?></p></time>
			</div>
			<h2><?= $blogpost['postTitle'] ?></h2>
			<figure>
			<!--BLOG PICTURE-->
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