<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Millhouse blog</title>
</head>


<body>

<?php require 'navbar.php' ?>

    <header>
        <div class="jumbotron jumbotron-fluid">
        </div>
        
    </header>


	<main>
	
		<figure>
			<img src="" alt=""><!--3 CATEGORIES PICTURSE UNDER HERO IMAGE-->
			<figcapture>KATEGORI</figcapture>
		</figure>

		
		<h1>Blogpost</h1>
		
		<article class="blogpost">
           <!--CATEGORIE TAG-->
			<button class = "blogpost__category-button"<a href="#">Category name</a></button>
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
         </p> <div class="blogpost__read-more"> <a href="#" >Read More>></a></div><br>
				 <div class = "blogpost__share-button"> <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				 </div>
						</div>
		</article>
	
	</main>

	<?php require 'footer.php' ?>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>



<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
