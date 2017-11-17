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
    <?php require 'navbar.php';  ?>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <h1 class="headline">Settings</h1>
                <p class="instruction">New to Millhouse? Create your account here.</p>

                <form class="form" action="" method="POST">
                    <fieldset class="fieldset">
                        <legend class="legend">Edit your user settings</legend>
                        <label class="label" for="username">Fill in your username</label>
                        <input type="text" id="username"  name="username" value="" placeholder="username" /><br>

                        <label class="label" for="email">Fill in your email</label>
                        <input type="text" id="email" name="email" value="" placeholder="Email" /><br>

                        <label class="label" for="password">Fill in your password</label>
                        <input type="text" id="password" name="password" value="" placeholder="password" /><br>

                        <label class="label" for="passwordConfirm">Fill out password again to confirm</label>
                        <input type="text" id="passwordConfirm" name="passwordConfirm" value="" placeholder="password" /><br>

                        <label for="profile_description" class="label">Change your profile description</label><br>
                          <p>(Maximum 20 characters)</p>

                        <textarea class="textarea" rows="6" cols="50" name="profile_description" id="profile_description" placeholder="Change your profile description"></textarea><br>
                      
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
