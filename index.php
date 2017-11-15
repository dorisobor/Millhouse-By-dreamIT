<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Index Page</title>
</head>
<body>
	<header>

	</header>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand hidden-md-up" href="index.php"><img class="logo" src="images/logo.png"></a>
	
		<button class="sign-up-btn d-md-none d-lg-none d-xl-none">
			<a class="sign-up-btn__link" href="register.php">Sign up</a>
		</button>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    	<div class="navbar-nav">
				<a class="nav-item nav-link" href="index.php">Home</a>
				<a class="nav-item nav-link" href="categorySunglasses.php">Sunglasses</a>
				<a class="nav-item nav-link" href="categoryWatches.php">Watches</a>
				<a class="nav-item nav-link" href="categoryInterior.php">Interior</a>
				<a class="nav-item nav-link" href="contact.php">Contact</a><br>
				<a class="nav-item nav-link d-md-none d-lg-none d-xl-none" href="login.php">Login</a>
		</div>
		
		<div class="user-actions d-none d-lg-block d-xl-block ml-auto">
					<a class="user-actions__link--black" href="login.php">Login</a>
					<button class="user-actions__sign-up-btn"><a class="user-actions__link" href="register.php">Sign up<a/></button>
		</div>
  </div>
</nav>

	<main>
	
		<figure>
			<img src="" alt=""><!--3 CATEGORIES PICTURSE UNDER HERO IMAGE-->
			<figcapture>KATEGORI</figcapture>
		</figure>

		<h1>Blogs</h1>
		
		
		<article class="">
			<button <a href="#">Name of the categorie</a></button><!--CATEGORIE TAG-->
			<h2>BLOG TITLE</h2>
			<figure>
				<img src="" alt=""><!--BLOG PICTURE-->
			</figure>
			<p class=""></p>
			<img src="" alt=""><!--USER IMAGE-->
			<span></span><!--USER NAME-->
			<time></time>
		</article>
	
	
	</main>
	<footer>
		<div class="footer__container">
			<button>facebook</button>
			<button>instagram</button>
			<button>contact</button>
			<div class="footer__credit">
			<span>&copy;dreamIT 2017</span>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>