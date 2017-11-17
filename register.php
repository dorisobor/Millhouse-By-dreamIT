<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Registration</title>
</head>

<body>
   <?php require 'navbar.php';  ?>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <h1 class="headline">Register</h1>
                <p class="instruction">New to Millhouse? Create your account here.</p>

                <form class="form" action="confirmation.php" method="POST">
                    <fieldset class="fieldset">
                        <legend class="legend">User information</legend>
                        <label class="label" for="username">Fill in your username</label>
                        <input type="text" id="username" name="username" value="" placeholder="username" /><br>

                        <label class="label" for="email">Fill in your email</label>
                        <input type="text" id="email" name="email" value="" placeholder="Email" /><br>

                        <label class="label" for="password">Fill in your password</label>
                        <input type="text" id="password" name="password" value="" placeholder="password" /><br>

                        <label class="label" for="passwordConfirm">Fill out password again to confirm</label>
                        <input type="text" id="passwordConfirm" name="passwordConfirm" value="" placeholder="password" /><br>

                        <input type="checkbox" name="agree" id="agree" value="yes">  <label class="label" for="agree">
                        I agree to TERMS and PRIVACY POLICY</label> <br><br>

                        <input type="submit" value="Sign up" />
                    </fieldset>
                </form>
            </div>
        </div>

    </main>

<?php require 'footer.php';  ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
