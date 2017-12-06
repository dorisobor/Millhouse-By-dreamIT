<?php
session_start();
require_once 'partials/db.php';
require_once 'functions.php';
require_once 'partials/fetch_all_blogposts.php';

//checks if delete button was pressed och post was deleted
//if it was deleted variable is used to trigger a message
//see row 91
$postIsDeleted = isset($_SESSION['postDeleted']);
//unsets session in order for message to disappear
unset($_SESSION['postDeleted']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Millhouse blog</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<!-- header with millhouselogo and navbar -->
<?php
require 'logoheader.html';
require_once 'partials/navbar.php';
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
              <h3>
                <a href="categoryWatches.php">Watches</a>
              </h3>
            </figcaption>
        </figure>

        <figure>
          <a href="categorySunglasses.php"> 
          <img class ="figures__category-image" src="images/square_glasses.png" alt="sunglasses">
          </a><figcaption>
            <h3>
              <a href="categorySunglasses.php">Sunglasses</a>
            </h3>
          </figcaption>
        </figure>

        <figure>
          <a href="categoryInterior.php"> 
          <img class ="figures__category-image" src="images/square_interior.png" alt="interior">
          </a><figcaption>
              <h3>
                <a href="categoryInterior.php">Interior</a>
              </h3>
          </figcaption>
        </figure>
    </div>
  
    <hr class="d-none d-lg-block d-xl-block">

    <div class="mainBody">
    
    <!-- triggers message if post was deleted -->
    <?php if($postIsDeleted): ?>
           <?php require 'messages/messageDeletePostConfirm.html';?>
		<?php endif; ?>
    
      <h1>Latest Stories</h1>
    
      <?php 
      //foreach to show all the blogposts and sort the 5 latest posts
      foreach($blogposts as $blogpost) {
      ?>
   
	      <article class="blogpost">
      
          <!-- clickable categorylabel -->
          <div class="blogpost__category-tag">
            <a class="blogpost__category-link" href="category<?= $blogpost['categoryName'] ?>.php">
              <?= $blogpost['categoryName']?>
            </a>
          </div>
  
          <div class="blogpost__user-info">
              <div class="user-image__container">
                  <img class="user-image__image" src="<?= $blogpost['userAvatar'] ?>"/>
              </div>
              
              <!-- userinformation -->
              <div class="blogpost__content-username">
                  <p class="username">Author: <?= $blogpost['username'] ?></p>
                  <time><p>Publish date: <?= substr($blogpost['postDate'],0,16)?></p></time>
              </div>
          </div>
    
          <div class="clear"></div>

          <!-- blog title -->
          <h2><?=$blogpost['postTitle'];?></h2>
        
          <!-- blogpicture -->
          <figure>
            <img src="images/<?= $blogpost['imageName'] ?>">
          </figure>

          <!-- blog text -->
          <div class= "blogpost__blog-description">

          <!-- limits the text to show the first 200 characters -->
          <?php if (strlen($blogpost['postText']) > 200 ): ?>
            <a href="blogpost.php?view_post=<?= $totalPost['postID']; ?>">
              <p><?= substr($blogpost['postText'],0,200) ?> ...</p>
            </a>
          <?php else: ?>
            <a href="blogpost.php?view_post=<?= $blogpost['postID']; ?>">
              <p><?= $blogpost['postText'] ?></p>
            </a>
          <?php endif; ?>

          <!-- a read more link -->
          <div class="blogpost__read-more">
            <a href="blogpost.php?view_post=<?= $blogpost['postID']; ?>">
                Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
          </div>
          <br>

          <div class="blogpost__share-button"> 
            <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
          </div>

          <div class="commentLink">
            <i class="fa fa-commenting-o" aria-hidden="true"></i>
            <a href="blogpost.php?view_post=<?= $blogpost['postID'].'#comment'; ?>"></a>
          </div>

          <div class="clear"></div>

		  </div>
	</article>
<?php
    //end of loop     
}
?>

<!-- user gets a message if theres no posts published -->
<?php require 'messages/messageEmptyHome.php'; ?>

</div>

<?php
require 'partials/pagination.php';
?>

</main>

<?php
require 'partials/footer.php';
require_once 'bootstrapScripts.html';
?>

</body>
</html>