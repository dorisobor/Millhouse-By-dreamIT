<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'head.html'; ?>
	<title>Help</title>
</head>
<body>
	
<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php' ?>

<main>
	<article class="help-article-container">
		<div class="row">
			<div class="col">
				<div class="article__top-header">
					<h1 class="article__heading">Frequently asked questions</h1>
					<p class="article__text">Having any trouble? Hopefully you'll find your answers below!</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">			
				<div class="article__content">
					<h2 class="article__question">How do I write a post?</h2>
					<p class="article__text">
						Click on your username in the far end of the topmenu, choose the first option
						"Create new post". You will also find a button for this in your profilepage.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="article__content">					
					<h2 class="article__question">How do I edit my posts?</h2>
					<p class="article__text">
						Go to the post you want to edit and press the "edit" button. You can also
						access all your post if you click on the username in the menu and choose 
						the second option "Profile". There you choose to edit or delete any of your
						posts.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="article__content">
					<h2 class="article__question">How do I change my password?</h2>
					<p class="article__text">
						Click on your username in the far end of the topmenu, choose the last option
						"Settings". 
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="contact">
					<span class="contact__text">Still wondering something?</span>
					<div class="contact__btn-container">
						<a class="contact__btn" href="contact.php">Contact us!</a>
					</div>
				</div>
			</div>
		</div>	
	</article>	
</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>