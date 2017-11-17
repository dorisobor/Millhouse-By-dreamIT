<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<title>Index Page</title>
</head>
<body>

<?php require 'navbar.php' ?>


	<header>

	</header>


	<main>
        
        <div class="">
        <form action="confirmation.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend> Edit Your Post </legend>
                <label for="name">Edit Your Post Title</label>
                 <br /> 
                <input type="text" name="name" id="name" aria-required="true" />
                <br />
                <label for="blog_post"> Write post</label>
                <br />
                <textarea id="blog_post" name="blog_post" rows="4" cols="50"></textarea>
                <br /> 
                <label for="image"> Image </label>
                <input type="file" name="image" id="image" />
                <br />
                <!--Checkboxes-->
                <p>In which category does your post belong in?</p>
                <br />
                <input type="checkbox" name="vehicle" value="Sunglasses">I have a bike<br>
                <input type="checkbox" name="vehicle" value="Watches">I have a bike<br>
                <input type="checkbox" name="vehicle" value="Interiror">I have a bike<br>
                
                <input type="submit" value="Upload" />
            </fieldset>
        </form>
    </div>
		
		
	
	
	</main>
	<footer>
		<button>facebook</button>
		<button>instagram</button>
        <button>contact</button>
        <br />
		<span>credit</span>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>