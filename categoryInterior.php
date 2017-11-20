<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Interior</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'navbar.php'; ?>

<header>
	<figure class="coverPhoto">
		<img src="images/mh_interior_576.png" alt="interior header photo">
	</figure>
</header>

<main>

	<!-- picture representing the category -->

	<div class="mainBody">

		<div class="mainTitle">
			<h1>Interior</h1>
		</div>

		<p>Here you can read all about
		<br>Millhouse exclusive interior details!</p>


		<!-- article = blogpost -->
					
		<article class="blogpost">
           <!--CATEGORIE TAG-->
			<button class = "blogpost__category-button"
				<a href="#">Interior</a>
			</button>
		 <!--USER INFO-->
		 <div class="blogpost__user-info">
			 		 <!--USER INFO-->
 <i class="fa fa-user-circle-o" aria-hidden="true"></i>
     <span>Username</span> <time><p>Date:D/M/YYYY </p></time>
    </div>
			<h2>Blog title</h2>
			<figure>
                <!--BLOG PICTURE-->
				<img src="images/inredning_kollage.jpg" alt="inredning_kollage">
			</figure>
				<div class= "blogpost__blog-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at eros dolor. Nullam sit amet velit enim. 
					Etiam ut convallis erat. In ornare risus nec justo tincidunt, nec eleifend dolor lacinia. Curabitur ut feugiat sem,
					non tempus tellus. Nunc sed dolor vitae purus 
					tristique consequat sit amet in libero. Ut rhoncus tempus justo, 
					sit amet suscipit diam congue et. Suspendisse tempor commodo lacinia...
				
					<div class="blogpost__share-button"> 
						<a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
					</div>
				</div>
		</article>
</div>
	
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>