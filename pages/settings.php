<?php 
session_start();  
require_once '../config.php';
require_once DIRBASE . 'database/actions/insert.php';
require_once DIRBASE . 'database/actions/fetch_all_blogposts.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require DIRBASE . 'partials/head.php'; ?>
	<title>User Settings</title>
<body>

    <?php require DIRBASE . 'partials/logoheader.html'; ?>
    <?php require DIRBASE . 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="pages/createPost.php" method="post" enctype="multipart/form-data">
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

    <?php require DIRBASE . 'partials/footer.php'; ?>
    <?php require DIRBASE . 'partials/bootstrapScripts.html'; ?> 

</body>
</html>
