<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<title>Login</title>
</head>
<body>

<?php require 'navbar.php' ?>

<header>
    <img src="" alt="Millhouse logo"/>
</header>



<main>
	
    <!-- form container -->
    <div> 

        <h1>Login</h1>

        <form action="" method="POST">
            <fieldset>
                <legend>Fill in your login information</legend>
                <label for="username">Fill in your username or email</label>
                <input type="text" name="username" value="" placeholder="email or username"/><br>

                <label for="password">Fill in your password</label>
                <input type="text" name="password" value="" placeholder="password"/><br>

                <input type="submit" value="Log In"/><br>
            </fieldset>
        </form>

        <a href="">create a new account</a>

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