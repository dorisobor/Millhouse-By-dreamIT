<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<title>User setttings</title>
</head>
<body>

<?php require 'navbar.php' ?>


<header>
    <img src="" alt="Millhouse logo"/>
</header>


<main>

<!-- form container -->
<div>

    <h1>User settings<h1>
    <!-- Nuvarande uppgifter bör skrivas ut i value? -->
    <form action="" method="POST">
    <fieldset>
            <legend>Edit your user settings</legend>
            <label for="username">Fill in your new username</label>
            <input type="text" name="username" placeholder="" value=""/><br>

            <label for="email">Fill in your new email</label>
            <input type="text" name="email" placeholder="" value=""/><br>

            <label for="password">Fill in new password</label>
            <input type="text" name="password" placeholder="" value=""/><br>

            <label for="confirmPassword">Fill in new password again to confirm</label>
            <input type="text" name="confirmPassword" placeholder="" value=""/><br>

            <label for="bio">Change your profile bio</label>
            <textarea rows="5" cols="30" name="bio" placeholder="Change your profile bio"></textarea><br>
            <span>Maximum 20 characters</span>
        </fieldset>
    </form>

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