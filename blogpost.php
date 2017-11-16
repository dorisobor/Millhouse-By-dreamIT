<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
	<title>Blogpost</title>
</head>
<body>
	<header>
   </header>
	<!-- temporary nav -->
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand hidden-md-up" href="#"><img class="logo" src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Sunglasses</a>
      <a class="nav-item nav-link" href="#">Watches</a>
      <a class="nav-item nav-link" href="#">Interior</a>
	  <a class="nav-item nav-link" href="#">Contact</a>

	  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    User
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Create new post</a>
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Help</a>
	<a class="dropdown-item" href="#">Settings</a>
  </div>
</div>
    </div>
  </div>
</nav>
<hr>
	<main>
	
		
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
             </p>   <a href="#" class="blogpost__read-more">Read More</a><br/>
				 <div class = "blogpost__share-button"> <a href="#"> Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				 </div>
						</div>
		</article>
	
	
	</main>
	<footer>
		<button>facebook</button>
		<button>instagram</button>
		<button>contact</button>
		<span>credit</span>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
