<?php 
session_start();   
require_once '../config.php';

//saves all input from the form in variable
$formData = $_POST;
require_once DIRBASE . 'database/db.php';  
require_once DIRBASE . 'database/functions.php';

$emailError = false;
$emailIsNotValid = false;
$passwordError = false;
$usernameNotUniqe = false;
$userBioTooLong = false;

if (isset($_POST['submit'])) {
    //checks if user has filled in both email fields with the same email
    if ($_POST['email'] != $_POST['email-repeat']){
        $emailError = true;        
    }
    //checks if user has a vaild email i.e. if the input has a @ in it
    if (!strpbrk($_POST['email'], '@')){
        $emailIsNotValid = true;
    }
    //checks if the user has filled in the passwords field with the same email
    if ($_POST['password'] != $_POST['password-repeat']){
        $passwordError = true;        
    }
    if (strlen($_POST['user-bio']) > 32){
        $userBioTooLong = true;
    }
    //checks if the user has filled in a uniqe username
    if (!isUsernameUniqe($_POST['username'])) {
        $usernameNotUniqe = true;
    }

    //if no errors = information is ready to be inserted
    $informationComplete = !$emailError 
    && !$emailIsNotValid 
    && !$passwordError
    && !$usernameNotUniqe
    && !$userBioTooLong;

    if($informationComplete) {
    //saves all userinput collected from form into session
    $_SESSION["formData"] = $_POST;        
    //creates new user in database
    $userID = createNewUser($_POST);
    //sign in with new userID
    $_SESSION['userID'] = $userID; 
    //redirects to index
    header('Location: ../index.php');

    }   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once DIRBASE . 'partials/head.php'; ?>
    <title>Register New Account</title>
    <meta name="description" content="Sign up to become a member of the Millhouse family!">
</head>
<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php';
?>

<main>
    <div class="main">
        <div class="mainBody">
            <div class="form_wrapper">  
                <div class="register_wrapper">  
                    <form class="form"  method="post">
                        <div class="topInfo">
                            <legend class="legend">
                                <h1>Register</h1>
                            </legend>
                            <p>New to Millhouse? Create your account here.</p>
                            <p>Fields marked with * is mandatory.</p>
                        </div>

                        <fieldset class="fieldset">
                            <div class="registerForm">
                                <?php if ($usernameNotUniqe): ?>
                                    <span class="error-msg">It allready exists a user with this username</span>
                                <?php endif; ?> 
                                <label for="username" class="registerForm__label">Fill in a username *</label>
                                <input type="text" name="username" placeholder="Username" id="headline" value="<?= $formData['username'] ?? '' ?>" required />
                                <?php if($emailError):?>
                                    <span class="error-msg">Email doesn't match</span>
                                <?php endif; ?>
                                <?php if($emailIsNotValid ): ?>
                                    <span class="error-msg">Enter a valid email, example: someone@mail.com</span>
                                <?php endif; ?>
                                <label for="email">Fill in your email *</label>
                                <input type="text" name="email" placeholder="Email" value="<?= $formData['email'] ?? '' ?>" required />
                                <label for="email-repeat">Repeat email to confirm *</label>
                                <input type="text" name="email-repeat" placeholder="Repeat Email" value="<?= $formData['email-repeat'] ?? '' ?>" required/>
                                <?php if($passwordError): ?>
                                    <span class="error-msg">Password doesn't match</span>
                                <?php endif; ?>
                                <label for="password">Fill in a password *</label>
                                <input type="password" name="password" placeholder="Password"  required/>
                                <label for="password-repeat">Repeat password to confirm *</label>
                                <input type="password" name="password-repeat" placeholder="Confirm Password" required/>
                                <?php if($userBioTooLong): ?>
                                    <span class="error-msg">Only 32 characters is allowed</span>
                                <?php endif; ?>
                                <label for="textarea">Describe yourself, this will display in your profile (maximum 32 characters)</label>
                                <textarea name="user-bio" rows="1" cols="71" placeholder="For example: I love sunglasses!" ><?= $formData['user-bio'] ?? '' ?></textarea>
                            </div> 
                            <div class="submitButton">
                                <input type="submit" name="submit" value="Register"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="registerForm__newAccount-link">
                    Already have an account? <a href="pages/login.php">Log in.</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html';
?> 

</body>
</html>
