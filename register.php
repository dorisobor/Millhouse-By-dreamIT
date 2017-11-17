<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
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
                        <input type="text" id="username" name="username" value="" placeholder="username" required /><br>

                        <label class="label" for="email">Fill in your email</label>
                        <input type="text" id="email" name="email" value="" placeholder="Email" required /><br>

                        <label class="label" for="password">Fill in your password</label>
                        <input type="text" id="password" name="password" value="" placeholder="password" required/><br>

                        <label class="label" for="passwordConfirm">Fill out password again to confirm</label>
                        <input type="text" id="passwordConfirm" name="passwordConfirm" value="" placeholder="password" required/><br>

                        <input type="checkbox" name="agree" id="agree" value="yes" required>  
                        <label class="label" for="agree">
                        I agree to TERMS and PRIVACY POLICY</label> <br><br>

                        <input type="submit" value="Sign up" />
                    </fieldset>
                </form>
            </div>
        </div>

    </main>

<?php require 'footer.php';  ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
