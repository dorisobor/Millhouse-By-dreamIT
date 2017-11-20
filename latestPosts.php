<!DOCTYPE html>
<html lang="en">

<head>
	<?php require 'head.html'; ?>
	<title>Latest posts</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'navbar.php'; ?>

<main>
	<div class="profileBox"> 
		<div class="profileBox__content-1">
			<!-- Userimage instead of icon -->
			<div class="userImage">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
			</div>

			<!-- username and info -->
			<div class="profileBox__content-username">
				<p class="username">Username</p>
				<p class="aboutMe">Something About Me</p>
			</div>

			<!-- settings icon -->
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
	</div>
	
	<!-- Tab menu -->
	<nav class="nav nav-pills nav-justified">
		<a class="nav-item nav-link" href="profilePage.php">Profile</a>
		<a class="nav-item nav-link active" href="latestPosts.php">Latest Posts</a>
		<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
	</nav>
			
	<div class="profilePosts">
		<article class="blogpost">

			<!-- category tag -->
			<button class="categoryButton">
				<a href="categoryInterior.php">Interior</a>
			</button>

			<!-- blogpost title -->
			<h2>Blog title</h2>

			<!-- blogpost image -->
			<figure>
				<img src="images/inredning_kollage.jpg" alt="inredning_kollage">
			</figure>

			<div class= "blogpost__blog-description">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Pellentesque at eros dolor. Nullam sit amet velit enim. 
				Etiam ut convallis erat. In ornare risus nec justo tincidunt, 
				nec eleifend dolor lacinia. Curabitur ut feugiat sem,
				non tempus tellus. Nunc sed dolor vitae purus 
				tristique consequat sit amet in libero. Ut rhoncus tempus justo, 
				sit amet suscipit diam congue et. 
				Suspendisse tempor commodo lacinia...</p>

				<div class="blogpost__read-more"> 
					<a href="#" >
						Read More <i class="fa fa-chevron-right" aria-hidden="true"></i>
					</a>
				</div>
			
				<div class="blogpost__share-button"> 
					<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="editButtons">
				<button><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
				<button class="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
			</div> 
		</article>
	</div>
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
