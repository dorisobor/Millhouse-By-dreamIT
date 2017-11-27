<?php 
require_once 'partials/insert.php';
require_once 'partials/fetch_all_blogposts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>User Settings</title>
<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfo">
                            <legend class="legend"><h1>Settings</h1></legend>
                            <p>Change your settings here.</p>
                            <br>
                        </div>

                        <fieldset class="fieldset">
                            <div class="contactForm">
                                <input type="text" id="username"  name="username" value="" placeholder="New Username"/>
                                <input type="text" id="email" name="email" value="" placeholder="New Email*"/>
                                <input type="text" id="email" name="email" value="" placeholder="Repeat Email*"/>
                                <input type="text" id="password" name="password" value="" placeholder="New Password*"/>
                                <input type="text" id="passwordConfirm" name="passwordConfirm" value="" placeholder="Confirm New Password*"/>
                            </div>
                            <div class="submitButton">
                                <input type="submit" value="Send"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php require 'partials/footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
