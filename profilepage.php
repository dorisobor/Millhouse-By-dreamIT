
<?php 

require_once 'partials/db.php'; 

$stmt = $pdo->prepare("SELECT username, userBio FROM users WHERE userID = 1");  
$stmt->execute();
$userDescription = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT COUNT(postID) as count FROM blogPosts WHERE userID = 1");  
$stmt->execute();
$userPosts = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT COUNT(commentID) as count FROM comments WHERE userID = 1");  
$stmt->execute();
$userComments = $stmt->fetch(PDO::FETCH_ASSOC);

?>

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
						<p class="username"><?= $userDescription['username'] ?></p>
						<p class="aboutMe"><?= $userDescription['userBio'] ?></p>
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
						<span><?= $userPosts['count']; ?>  post(s)</span>
					</div>

					<div class="totalComments">
						<span><?= $userComments['count']; ?> comment(s)</span>
					</div>
				</div>
				
				<div class="createNewPost">
					<button class="create">
						<a href="createPost.php">Create New Post</a>
					</button>
				</div>
			</div>
		</div>

			<!--BOOTSTRAP SECOND NAV-->
			<nav class="nav nav-pills nav-justified">
				<a class="nav-item nav-link active" href="profilePage.php">Profile</a>
				<a class="nav-item nav-link" href="latestPosts.php">Latest Posts</a>
				<a class="nav-item nav-link" href="latestComments.php">Latest Comments</a>
			</nav>

				<!--BLOGPOSTS-->
			<div class="profilePosts">
				<article class="blogpost">
				<!--CATEGORIE TAG-->
					<button class="categoryButton">
						<a href="categoryInterior.php">Interior</a>
					</button>
			<!--USER INFO-->
			
					<h2>Blog title</h2>
					<figure>
					<!--BLOG PICTURE-->
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
			
						<div class="blogpost__share-button"> 
							<a href="#">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a>
						</div>
					</div>

						<div class="editButtons">
							<button>
								<a href="editPost.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit<a>
							</button>

							<button class="delete">
								<a href="deleteConfirm.php"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
							</button>
						</div> 
				</article>

				
			</div>
	
	</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>