<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Millhouse blog</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'navbar.php'; ?>

<header>
	<div class="jumbotron jumbotron-fluid logo-header d-none d-lg-block d-xl-block"></div>    
</header>
  
<main>
  <div class="figures">
    <figure>
      <img class ="figures__category-image" src="images/mh_watch_576.png" alt="watches">
      <figcaption>
        <h3><a href="#">Watches</a></h3>
      </figcaption>
    </figure>

    <figure>
      <img class ="figures__category-image" src="images/mh_sunglasses_576.png" alt="sunglasses">
       <figcaption>
         <h3><a href="#">Sunglasses</a></h3>
      </figcaption>
    </figure>

    <figure>
       <img class ="figures__category-image" src="images/mh_interior_576.png" alt="interior">
       <figcaption>
        <h3><a href="#">Interior</a></h3>
      </figcaption>
    </figure>
  </div>
  
	<hr class="d-none d-lg-block d-xl-block">
  
	<h1>Blogpost</h1>
	
	<article class="blogpost">
      <!--CATEGORIE TAG-->
		<button class = "blogpost__category-button"<a href="#">Category name</a></button>
		 <!--USER INFO-->
		<div class="blogpost__user-info">
		<i class="fa fa-user-circle-o" aria-hidden="true"></i>
		<span>Username</span> <time><p>Date:D/M/YYYY </p></time>
		</div>
  
		<h2>Blog title</h2>
  
		<!--BLOG PICTURE-->
		<figure>
			<img src="images/inredning_kollage.jpg" alt="inredning_kollage">
		</figure>
  
		<div class= "blogpost__blog-description">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at eros dolor. Nullam sit amet velit enim. 
			Etiam ut convallis erat. In ornare risus nec justo tincidunt, nec eleifend dolor lacinia. Curabitur ut feugiat sem,
				non tempus tellus. Nunc sed dolor vitae purus 
				tristique consequat sit amet in libero. Ut rhoncus tempus justo, 
				sit amet suscipit diam congue et. Suspendisse tempor commodo lacinia...
			</p>
        
			<div class="blogpost__read-more"> <a href="#" >Read More
				<i class="fa fa-chevron-right" aria-hidden="true"></i></a></div><br>
	
			<div class = "blogpost__share-button"> 
				<a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>
		</div>
	</article>
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
