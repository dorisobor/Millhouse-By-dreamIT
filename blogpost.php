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
	  
//Prepare statement that will help showing the specific blogpost with the id
	  $statement = $pdo->prepare("SELECT * FROM blogposts
	    WHERE postID ='$postID'");
	   
 //execute it
	  $statement->execute();
	  
// Fetch all rows
	  $blogposts =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
	  
	  }
 ?>


<hr>

<main>
	
<?php 
        
 //foreach to show the blogposts
    foreach($blogposts as $blogpost) {
        
?>
	 <h1>Blogpost</h1>
		
<article class="blogpost">
	<!--CATEGORIE TAG-->
	<button class="blogpost__category-button" <a href="#">Category name</a></button>
	<!--USER INFO-->
	<div class="blogpost__user-info">
		<!--USER INFO-->
		<i class="fa fa-user-circle-o" aria-hidden="true"></i>
		<span>Username</span> <time><p>Date: <?=$blogpost['postDate'];?> </p></time>
	</div>
	<!--The blog title-->
    <h2><?=$blogpost['postTitle'];?></h2>
	<figure>
		<!--BLOG PICTURE-->
		<img src="images/inredning_kollage.jpg" alt="inredning_kollage">
	</figure>
	<div class="blogpost__blog-description">
	
	   <p><?=$blogpost['postText'];?>
		</p>

			<div class="blogpost__share-button"> <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</div>
	</div>
</article>
	
<?php 

//end of loop     
   }
  ?>
</main>
	
<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
