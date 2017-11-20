<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Latest comments</title>
</head>
<body>
	
<?php require 'logoheader.html'; ?>
<?php require 'navbar.php' ?>

	<header>
	<div class="jumbotron jumbotron-fluid"></div>
   </header>
	

	

	
	<!--User icon as a dropdown menue-->
		<div class="dropdown">
  <img src="" alt="">
  <div class="dropdown-content">
    <a href="#">Profile |</a>
    <a href="#">Latest Posts |</a>
    <a href="#">Latest Comments |</a>
  </div>
</div>
  


	
	<div class ="" > 
	<!--USER IMAGE-->
       <p class=""></p>
		<img src="" alt="">
		<!--edit icon from bootsrap?-->
		<!--USER NAME-->
		<span></span>
		<!--settings icon from bootstrap?-->
		</div>
		<!--bootstrap second nav-->
		<nav>
		</nav>
		<!--wrapping container-->
		<div class ="wrapper">
		<h2></h2>

		</div> 

		
		<!--latest comments-->
		<div class="container-wrapper">
			<div  class= "container-latestComments">
				<article>
				<!--CATEGORY TAG-->
				<h2>BLOG POST TITLE</h2>
				<h3>Commented for  <time><?php echo date("Y/m/d");?></time> days ago.</h3>
				<p>Loosque tenetur excepturi sapiente cupiditate quae vero quibusdam? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, temporibus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quibusdam soluta quis exercitationem atque nisi laboriosam quaerat amet aliquam perferendis, culpa distinctio consequatur maxime hic ex ad repellendus eveniet beatae ipsa qui neque omnis eius, provident doloremque. Praesentium cumque ipsa nostrum fugiat tempora ducimus odit officia nisi soluta a. Deleniti.</p>
				</article>
				<button>Edit comment</button>
				<button>Delete comment</button>
			</div>
		</div> 
	    <!--/div--> 
	</main>

	<?php require 'footer.php' ?>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>


</body>
</html>
