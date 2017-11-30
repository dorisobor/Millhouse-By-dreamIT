<?php 

require_once 'partials/db.php'; 
require 'functions.php';



?>

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
  <div class="jumbotron_indexHeader"></div>    
</header>
  
<main>
    <div class="figures">
        <figure>
        <a href="categoryWatches.php"> 
        <img class ="figures__category-image" src="images/square_watch.png" alt="watches">
        </a><figcaption>
            <h3><a href="categoryWatches.php">Watches</a></h3>
          </figcaption>
        </figure>

        <figure>
        <a href="categorySunglasses.php"> 
        <img class ="figures__category-image" src="images/square_glasses.png" alt="sunglasses">
        </a><figcaption>
            <h3><a href="categorySunglasses.php">Sunglasses</a></h3>
          </figcaption>
        </figure>

        <figure>
        <a href="categoryInterior.php"> 
        <img class ="figures__category-image" src="images/square_interior.png" alt="interior">
        </a><figcaption>
            <h3><a href="categoryInterior.php">Interior</a></h3>
          </figcaption>
        </figure>
      </div>
  
	<hr class="d-none d-lg-block d-xl-block">

  <div class="mainBody">
  
	<h1>Latest Stories</h1>
	
<?php 
  //foreach to show all the blogposts and sort the 5 latest posts
  $i=0;
  foreach($blogposts as $blogpost) {
    if($i <= 4) {
?>
   
	<article class="blogpost">
  <!--CATEGORIE TAG-->
	<div class="blogpost__category-tag">
	<span><?= $blogpost['categoryName'] ?></span>
	</div>
	<!--USER INFO-->
  
		<div class="blogpost__user-info">
        <div class="user-image__container">
					  <img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>"/>
        </div>
        
        <div class="blogpost__content-username">
            <p class="username"><?= $blogpost['username'] ?></p>
            <time><p>Date:<?= substr($blogpost['postDate'],0,16)?></p></time>
        </div>
    </div>
    

    <div class="clear"></div>

  	<!--The blog title-->
		<h2><?=$blogpost['postTitle'];?></h2>
  
	<!--BLOG PICTURE-->
		<figure>
		<img src="<?= $blogpost['imageName'] ?>" alt="">
		</figure>
  <!--The blog text-->
    <div class= "blogpost__blog-description">
  <!--limits the text to show the first if a post is more than 200 characters-->
      <?php if (strlen($blogpost['postText']) > 200 ):?>
        <a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
          <p><?=substr ($blogpost['postText'],0,200)?> ...</p>
        </a>
      <?php else: ?>
        <a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
          <p><?= $blogpost['postText'] ?></p>
        </a>
      <?php endif; ?>
      <!--a read more link-->
     <div class="blogpost__read-more">
      <a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
      Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
     </div>
     <br>

			<div class = "blogpost__share-button"> 
				<a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>

      <div class="commentLink">
        <i class="fa fa-commenting-o" aria-hidden="true"></i>
        <a href="blogpost.php?view_post=<?=$blogpost['postID'];?>">
        <span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comment(s)</span></a>
      </div>

      <div class="clear"></div>

		</div>
	</article>
  <?php 
//end if    
 }
 $i++;
//end of loop     
   }
  ?>

  <?php require 'messagePlainEmpty.php';?>

  </div>

</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>