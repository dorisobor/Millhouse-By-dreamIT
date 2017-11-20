<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Latest comments</title>
</head>
<body>
	
<?php require 'logoheader.html'; ?>
<?php require 'navbar.php' ?>
<main>
<!--Profile Box-->
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
                <a class="nav-item nav-link" href="profilePage.php">Profile</a>
                <a class="nav-item nav-link" href="latestPosts.php">Latest Posts</a>
                <a class="nav-item nav-link active" href="latestComments.php">Latest Comments</a>
            </nav>
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
