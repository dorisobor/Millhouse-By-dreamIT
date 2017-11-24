<?php require_once 'partials/insert.php'; ?>
 require_once 'partials/fetch_one_blogpost.php';
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">    <title>Create new post</title>
</head>

<body>

<div class="logo-header d-none d-lg-block d-xl-block">
    <a href="index.php">
        <img class="logo d-none d-lg-block d-xl-block" src="images/Logo.png" alt="Logotype for Millhouse"/>
    </a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<a class="navbar-brand hidden-md-up" href="index.php"><img class="logo" src="images/logo.png"></a>
        
        <button class="sign-up-btn d-md-none d-lg-none d-xl-none">
        <a class="sign-up-btn__link" href="signOut.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out
        </a>
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

                            <a class="nav-item nav-link d-lg-none d-xl-none" href="createPost.php">Create new post</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="profilepage.php">Profile</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="help.php">Help</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="settings.php">Settings</a>
            
        </div>

                <div class="user-actions d-none d-lg-block d-xl-block ml-auto">
            <a class="user-actions__link" href="signOut.php.php"> 
                <button class="user-actions__sign-up-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out
                </button>
            </a>
        </div>
            
                    <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle d-none d-lg-block d-xl-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> User menu
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="createPost.php">Create new post</a>
                    <a class="dropdown-item" href="profilepage.php">Profile</a>
                    <a class="dropdown-item" href="help.php">Help</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                </div>
            </div>
            
    </div>
</nav>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <div class="help">
                    <p>
                       <a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a> 
                    </p>
                </div>
                
<form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                    <fieldset class="fieldset">
                        <legend class="legend"> Create a new post </legend>



                        <label class="label" for="headline">Headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                      
                        <label class="label" for="upload"> Choose image </label> <br />
                        <input type="file" name="upload" id="image" value="">
                        <input type="hidden" name="action" value="upload"> 
                        <br />
                        
                        <label class="label" for="postText"> Write post</label> <br />
                       <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                     
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Select one or several categories for your post:</p>
                            <br />


                            <input type="radio" name="category" id="Sunglasses" value="Sunglasses"  required >
                            <label class="label label--checkboxes" for="category_1">Sunglasses</label><br>
                            <input type="radio" name="category" id="Watches" value="Watches">
                            <label class="label label--checkboxes" for="category_2">Watches</label><br>
                            <input type="radio" name="category" id="Interior" value="Interior">
                            <label class="label label--checkboxes" for="category_3">Interior</label><br>
                        </div>
                      
                        <input type="submit" value="publish" name="publish">
                    </fieldset>
                </form>
            </div>
            
 <?php 
    var_dump($_POST);
   if(isset($success)){
       $imgCopyName = $_FILES['upload']['tmp_name'];
       $imgName = $_FILES['upload']['name'];
       $imgSize = $_FILES['upload']['size'];
    echo  $imgCopyName . "<br>";
       echo  $imgName;
        echo '<br> <br> Published!<br> <script type="text/javascript">alert("Published!");</script>'; 
       echo  $imgSize . " Kb";
   }
?>
        </div>
    </main>

    <footer>
		<div class="footer__container">
		<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
		<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
		<a href="/contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
			<div class="footer__credit">
			<span>&copy;dreamIT 2017</span>
			</div>
		</div>
	</footer><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    
</body>
</html>
