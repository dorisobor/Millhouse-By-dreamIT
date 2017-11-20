<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
  
	<title>Profile Page</title>
</head>
<body>

<?php require 'logoheader.html'; ?>
<?php require 'navbar.php'; ?>

	<main>
		
		<div class="profileBox"> 

		<!--USER IMAGE-->
			<div class="profileBox__content-1">
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
	
				<div class="settingsIcon">
					<button class="settings">
						<a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</button>
				</div>
			</div>

				<div class="clear"></div>
			
			<div class="profileBox__content-2">
				<div class="profileBox__content-commentsPosts">

					<div class="totalPosts">
						<a href="#">50 blogposts</a>
					</div>

					<div class="totalComments">
						<a href="#">125 comments</a>
					</div>
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

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>