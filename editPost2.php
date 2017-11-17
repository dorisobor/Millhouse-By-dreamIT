<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index Page</title>
</head>
<body>
	<header>

	</header>
	<nav>

	</nav>
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
</body>
</html>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About