<?php
session_start();
require_once '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once DIRBASE . 'partials/head.php'; ?>
	<title>Help</title>
	<meta name="description" content="see FAQ about Millhouse Stories blog.">
</head>
<body>
	
<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php';
?>

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
					<h2 class="article__question">How do I write a story?</h2>
					<p class="article__text">
						Click on your username in the far end of the topmenu, choose the first option
						"Create New Story". You will also find a button for this in your profilepage.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="article__content">					
					<h2 class="article__question">How do I edit my stories?</h2>
					<p class="article__text">
						Go to the story you want to edit and press the "edit" button. You can also
						access all your stories if you click on the username in the menu and choose 
						the second option "Profile". There you choose to edit or delete any of your
						stories.
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
					<div class="contact__link-container">
						<a href="mailto:info@millhouse.com" target="_blank" rel="noopener" aria-role="click to send email">
							Kontakt
						</a>
					</div>
				</div>
			</div>
		</div>	
	</article>	
</main>

<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html';
?>

</body>
</html>