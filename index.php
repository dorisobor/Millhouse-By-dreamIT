<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Millhouse blog</title>
</head>

<body>
 <!--Included files-->

<?php 
require 'logoheader.html';
require 'partials/navbar.php';
require_once 'partials/db.php';
require_once 'partials/fetch_all_blogposts.php';
?>

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

  <div class="mainBody">
  
	<h1>Blogpost</h1>
	
<?php 
  //foreach to show all the blogposts and sort the 5 latest posts
  $i=0;
  foreach($blogposts as $blogpost) {
    if($i <= 4) {
?>
   
	<article class="blogpost">
  <!--CATEGORIE TAG-->
		<button class = "blogpost__category-button"<a href="#">Category</a></button>
	<!--USER INFO-->
		<div class="blogpost__user-info">
		<i class="fa fa-user-circle-o" aria-hidden="true"></i>
		<span>Username</span> <time><p>Date: <?=$blogpost['postDate'];?></p></time>
		</div>
  	<!--The blog title-->
		<h2><?=$blogpost['postTitle'];?></h2>
  
	<!--BLOG PICTURE-->
		<figure>
			<img src="images/inredning_kollage.jpg" alt="inredning_kollage">
		</figure>
  <!--The blog text-->
    <div class= "blogpost__blog-description">
  <!--limits the text to show the first 200 characters-->
      <a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
			<p><?=substr ($blogpost['postText'],0,200)?>
			...</p></a>
         <!--a read more link-->
     <div class="blogpost__read-more"><a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
		 Read More<i class="fa fa-chevron-right" aria-hidden="true"></i></a></div><br>

			<div class = "blogpost__share-button"> 
				<a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>
		</div>
	</article>
  <?php 
//end if    
 }
 $i++;
//end of loop     
   }
  ?>
  </div>

</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
