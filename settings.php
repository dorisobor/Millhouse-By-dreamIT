<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
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
</body>

</html>
