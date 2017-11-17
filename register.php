<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <h1 class="headline">Register</h1>
                <p class="instruction">New to Millhouse? Create your account here.</p>

                <form class="form" action="" method="POST">
                    <fieldset class="fieldset">
                        <legend class="legend">User information</legend>
                        <label class="label" for="username">Fill in your username</label>
                        <input type="text" name="username" value="" placeholder="username" /><br>

                        <label class="label" for="email">Fill in your email</label>
                        <input type="text" name="email" value="" placeholder="Email" /><br>

                        <label class="label" for="password">Fill in your password</label>
                        <input type="text" name="password" value="" placeholder="password" /><br>

                        <label class="label" for="passwordConfirm">Fill out password again to confirm</label>
                        <input type="text" name="passwordConfirm" value="" placeholder="password" /><br>

                        <input type="checkbox" name="agree" id="agree" value="yes">  <label class="label" for="agree">
                        I agree to TERMS and PRIVACY POLICY</label> <br><br>

                        <input type="submit" value="Sign up" />



                    </fieldset>

                </form>
            </div>
        </div>

    </main>


</body>

</html>
