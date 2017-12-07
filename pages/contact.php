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
	<title>Contact</title>
<body>

    <?php require DIRBASE . 'partials/logoheader.html'; ?>
    <?php require DIRBASE . 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="pages/createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfo">
                            <legend class="legend"><h1>Contact</h1></legend>
                            <p>Contact us if you have any questions or issues with the blog!</p>
                            <br>
                        </div>

                        <fieldset class="fieldset">
                            <div class="contactForm">
                                <input type="text" name="name" value="" placeholder="Your Name" required/>
                                <input type="text" name="email" value="" placeholder="Email" required/>
                                <input type="text" name="subject" value="" placeholder="Subject" required/>
                                <textarea class="textarea" id="message" rows="6" cols="50" placeholder="Write your message here..." required></textarea>
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
