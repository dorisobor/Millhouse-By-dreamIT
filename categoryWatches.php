<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Watches</title>
</head>
<body>


<?php require 'logoheader.html'; ?>
<?php require 'navbar.php'; ?>


<header>
	<figure class="coverPhoto">
		<img src="images/mh_watch_576.png" alt="interior header photo">
	</figure>
</header>


<main> 
	
	<!-- picture representing the category -->
	<div class="mainBody">
		<h1>Watches</h1>
		<p>Here you can read all about 
		<br>Millhouse exclusive watches!</p>

			
		<!-- article = blogpost -->
			
		<article class="blogpost">
		<!--CATEGORIE TAG-->
			<button class="categoryButton">
				<a href="categoryWatches.php">Watches</a>
			</button>
	<!--USER INFO-->
	
			<h2>Blog title</h2>
			<figure>
			<!--BLOG PICTURE-->
				<img src="images/mh_watch_blogpost.jpeg" alt="inredning_kollage">
			</figure>
			<div class= "blogpost__blog-description">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Pellentesque at eros dolor. Nullam sit amet velit enim. 
				Etiam ut convallis erat. In ornare risus nec justo tincidunt, 
				nec eleifend dolor lacinia. Curabitur ut feugiat sem,
				non tempus tellus. Nunc sed dolor vitae purus 
				tristique consequat sit amet in libero. Ut rhoncus tempus justo, 
				sit amet suscipit diam congue et. 
				Suspendisse tempor commodo lacinia...</p>

				<div class="blogpost__read-more"> 
					<a href="blogpost.php" >Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
	
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>
			</div>
		</article>
	</div>
	
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>