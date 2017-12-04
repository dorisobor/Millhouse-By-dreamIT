<?php 
session_start();         
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>Register New Account</title>
<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfo">
                            <legend class="legend"><h1>Register</h1></legend>
                            <p>New to Millhouse? Create your account here.</p>
                            <br>
                        </div>

                        <fieldset class="fieldset">
                            <div class="createForm">
                                <input type="text" name="blogtitle" placeholder="Username*" id="headline" aria-required="true" required/>                            
                                <input type="text" name="name" value="" placeholder="Email*" required/>
                                <input type="text" name="email" value="" placeholder="Repeat Email*" required/>
                                <input type="text" name="subject" value="" placeholder="Password*" required/>
                                <input type="text" name="subject" value="" placeholder="Confirm Password*" required/>
                            </div> 
                                
                            <div class="registerAgree">
                                <input type="checkbox" name="agree" id="agree" value="yes" required>  
                                <label class="label" for="agree">I agree to TERMS and PRIVACY POLICY</label>
                                <br>
                            </div>

                            <div class="submitButton">
                                <input type="submit" value="Register"/>
                            </div>
                        </fieldset>
                    </form>
                    <div class="newAccount">
                        Already have an account? <a href="login.php">Log in.</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require 'partials/footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
