<?php

require 'partials/db.php';

$userNotFound = false;

if (isset($_POST['submit'])) {

    if (isset($_POST['username'])){
        global $pdo;            
        $stmt = $pdo->prepare("SELECT * FROM users
        WHERE username = :username AND password = :password");
        $stmt->bindParam('username', $_POST['username']);
        $stmt->bindParam('password', $_POST['password']);        
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user != null) {
            header('Location: index.php');

            //start session AND logged in = true
        } 

        else {
            if ($user == null){
            $userNotFound = true;
        }
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
                            <p>Login to your account here.</p>
                            <br>
                    </div>

                    <fieldset class="fieldset">
                        <div class="contactForm">

                            <div class="contactForm__input">
                                <label for="username" class="login-label">Username</label>
                                <?php if ($userNotFound): ?>
                                    <span class="error-msg">Theres no account matching this
                                        username/email
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
                <br>
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
