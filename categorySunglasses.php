<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Sunglasses</title>
</head>
<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php'; ?>

<header>
	<figure class="coverPhoto">
		<img src="images/mh_sunglasses_576.png" alt="interior header photo">
	</figure>
</header>

<main>
	<!-- picture representing the category -->
	<div class="mainBody">
		<h1>Sunglasses</h1>
		<p>Here you can read all about Millhouse exclusive sunglasses!</p>
		<!-- article = blogpost -->
		<?php foreach(getAllBlogpostsOnSunglasses(2) as $i => $blogposts): ?>
		<article class="blogpost">
		<!--CATEGORIE TAG-->
		<button class="categoryButton">
			<a href="categorySunglasses.php"><?= $blogposts['categoryName'] ?></a>
		</button>
	
			<h2><?= $blogposts['postTitle'] ?></h2>
			<figure>
			<!--BLOG PICTURE-->
				<img src="<?= $blogposts['postImage'] ?>" alt="">
			</figure>
			<div class= "blogpost__blog-description">
				<p>
					<?= $blogposts['postText'] ?>
				</p>
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

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>