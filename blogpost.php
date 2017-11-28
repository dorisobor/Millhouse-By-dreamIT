<?php 

require_once 'partials/db.php'; 
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Blogpost</title>
</head>

<body>
 <!--Included files-->
<?php require 'logoheader.html';
	  require 'partials/navbar.php'; 
	  require_once 'partials/db.php';
	  

	  if(isset($_GET['view_post']) ){ 
		$postID = $_GET ['view_post'];
		
		
	  require_once 'partials/fetch_all_blogposts.php';
	  }
 ?>


<main>

<div class="mainBody">

	
<?php 
        
 //foreach to show the blogposts
    foreach($blogposts as $blogpost) {
        
?>

	 <h1>Story</h1>
		
<article class="blogpost">
	<!--CATEGORIE TAG-->
	<div class="blogpost__category-tag">
	<span><?= $blogpost['categoryName'] ?></span>
	</div>
	<!--USER INFO-->

	<div class="blogpost__user-info">
		<div class="user-image__container">
			<img class="user-image__image" src="<?= $user['userAvatar'] ?>"/>
		</div>
	
		<div class="blogpost__content-username">
			<p class="username"><?= $user['username'] ?></p>
			<time><p>Date: <?=$blogpost['postDate'];?></p></time>
		</div>
	</div>


<div class="clear"></div>

	<!--The blog title-->
    <h2><?=$blogpost['postTitle'];?></h2>
	<figure>
		<!--BLOG PICTURE-->
	<img src="<?= $blogpost['postImage'] ?>" alt="">

	</figure>
	<div class="blogpost__blog-description">
	
	   <p><?=$blogpost['postText'];?>
		</p>

	 <div class="blogpost__share-button"> <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
	 </div>

	 <div class="editButtons">
        <button>
          <a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
        </button>
        <button class="delete">
          <a href="deleteBlogpost.php?delete_post=<?=$blogpost['postID'];?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
         </button>
    </div> 
	
	</div>
</article>
</div>
	
<?php 

//end of loop     
   }
  ?>
</main>
	
<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
