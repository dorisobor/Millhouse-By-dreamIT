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
                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfo">
                            <legend class="legend"><h1>Login</h1></legend>
                            <p>Login to your account here.</p>
                            <br>
                        </div>

                        <fieldset class="fieldset">
                            <div class="contactForm">
                                <input type="text" name="username" value="" placeholder="Email or Username"/><br>
                                <input type="text" name="password" value="" placeholder="Password"/><br>
                            </div>
                            
                            <div class="submitButton">
                                <input type="submit" value="Log In"/><br>
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
