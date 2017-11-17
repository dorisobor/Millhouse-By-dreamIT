<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	

	<title>Profile Page</title>
</head>
<body>
	<header>
   </header>
	<nav>
	<a href="url">logut</a>
	<!--User icon as a dropdown menue-->
		<div class="dropdown">
  <img src="" alt="">
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
	</nav>
	<main>
		
		<div class="profileBox"> 
		<!--USER IMAGE-->
			<div class="profileBox__content-image">
				<img src="" alt="">
				<div class="userImage">
					<i class="fa fa-user-circle" aria-hidden="true"></i>
				</div>
		
				<!--edit icon from bootsrap?-->
				<!--USER NAME-->
				<div class="profileBox__content-username">
					<p class="username">Username</p>
					<p class="aboutMe">Something About Me</p>
				</div>

			</div>

			<div class="profileBox__content-icons">
				<div class="settingsIcon">
					<button class="settings">
						<a href="createPost.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</button>
				</div>

				<div class="clear"></div>

				<div class="profileBox__content-commentsPosts">
					<div class="totalPosts"><p>50 Blogposts</p></div>
					<div class="totalComments"><p>125 Comments</p></div>
				</div>

				<div class="createNewPost">
					<button class="create">
						<a href="createPost.php">Create New Post</a>
					</button>
				</div>
			</div>
			


			<!--settings icon from bootstrap?-->
		</div>

			<!--BOOTSTRAP SECOND NAV-->
			<nav class="nav nav-pills nav-justified">
				<a class="nav-item nav-link active" href="profilePage.php">Profile</a>
				<a class="nav-item nav-link" href="latestPosts.php">Latest Posts</a>
				<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
			</nav>

				<!--BLOGPOSTS-->
			<div class="profilePosts">
				<article class="categoryPosts">
				<!-- tag -->
					<button class="tagg">
						<a href="categoryInterior.php">Interior</a>
					</button>
					<h2>Blogpost title</h2>
					<figure>
						<img src="" alt="">
					</figure>
					<p class=""></p>
					<!-- userimage -->
					<img src="" alt="">
					<!-- username -->
					<span></span>
					<!-- publish date -->
					<time></time>
					<!-- share -->

					<div class="postButtons">
						<button>Edit</button>
						<button class="delete">Delete</button>
					</div> 
				</article>
			</div>
	
	</main>
	<footer>
		<button>facebook</button>
		<button>instagram</button>
		<button>contact</button>
		<span>credit</span>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>