<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Latest comments</title>
</head>
<body>
	
<?php require 'logoheader.html'; ?>
<?php require 'navbar.php' ?>

	<!--latest comments-->
	<div class="container-wrapper">
		<div  class= "container-latestComments">
			<article>
			<!--CATEGORY TAG-->
			<h2>BLOG POST TITLE</h2>
			<h4>Commented for  <time><?php echo date("Y/m/d");?></time> days ago.</h4>
			<p>Loosque tenetur excepturi sapiente cupiditate quae vero quibusdam? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, temporibus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quibusdam soluta quis exercitationem atque nisi laboriosam quaerat amet aliquam perferendis, culpa distinctio consequatur maxime hic ex ad repellendus eveniet beatae ipsa qui neque omnis eius, provident doloremque. Praesentium cumque ipsa nostrum fugiat tempora ducimus odit officia nisi soluta a. Deleniti.</p>
			<button><i class="fa fa-pencil" aria-hidden="true"></i><a href="/editPost.php">Edit</button></a>
			<button><i class="fa fa-trash" aria-hidden="true"></i><a href="#"> Delete</button></a>
			</article>	
		</div>
	</div> 
	     
	</main>

	
<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>


</body>
</html>
