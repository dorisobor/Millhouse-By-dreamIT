<?php

//starts sesson, get pdo connection and fetches validateLoginInput function 
session_start();         
require_once 'partials/db.php';
require_once 'functions.php';

//variable used to print out message if there is no user found or if
//user writes the wrong username or password
$loginError = false;

//when submnit button is pushed the function to check for users in database
//is called och if it returns a user sh/e gets redirected to homepage if it
//returns null the user returns to loginpage and receives a error message
if (isset($_POST['submit'])) {

    if (isset($_POST['username'])){
        $user = validateLoginInput ();

        if ($user != null) {
            $_SESSION['userID'] = $user['userID'];           
            header('Location: index.php');
        } else {
            $loginError = true;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>Login</title>
<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php';  ?>

<main>
    <div class="main">
        <div class="mainBody">
            <div class="form_wrapper">    
                <form class="form" method="post" enctype="multipart/form-data">
                    <div class="topInfo">
                        <legend class="legend"><h1>Login</h1></legend>
                        <p class="topInfo__instruction">Login to your account here.</p>
                    </div>
                    <fieldset class="fieldset">
                        <div class="contactForm">
                            <div class="contactForm__input">
                                <label for="username" class="login-label">Username</label>

                                <!-- checks if user has put in their login info correctly 
                                and then prints a message if sh/e has filled in something wrong
                                or simply do not have an account -->
                                <?php if ($loginError): ?>
                                    <span class="error-msg">Wrong username or password
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="username" value="" placeholder="Email or Username"/><br>
                                <label for="username" class="login-label">Password</label>
                                <input type="password" name="password" value="" placeholder="Password"/><br>
                            </div>
                        </div>
                        <div class="submitButton">
                            <input name="submit" type="submit" value="Log In"/><br>
                        </div>
                    </fieldset>
                </form>
                <!-- links the user to register page -->
                <div class="newAccount">
                    <a href="register.php">Create New Account</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
