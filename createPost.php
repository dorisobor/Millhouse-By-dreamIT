<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Create new post</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'navbar.php';  ?>

    <main>
        <div class="form_wrapper">
            <h1>Create New Post</h1>
            <div class="create_post">
                <p>Create your new post here!</p>
            </div>

            <div class="help">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            </div>

            <form class="form" action="confirmation.php" method="post" enctype="multipart/form-data">
                <fieldset class="fieldset">
                    <p>Title</p>
                    <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />

                    <!--Uppload an image-->
                    <p>Choose an image</p>
                    <input type="file" name="image" id="image"/>
                    
                    <p> Write post</p>
                    <textarea class="textarea" id="blog_post" name="blog_post" rows="6" cols="50" placeholder="Your text" required></textarea>

                    <!--Checkboxes-->
                    <div class="form checkboxes_wrapper">
                        <p>Select one or several categories for your post:</p>
                        <input type="checkbox" name="checkbox" id="checkbox_1" value="Sunglasses">
                        <label class="label label--checkboxes" for="checkbox_1">Sunglasses</label><br>
                        <input type="checkbox" name="checkbox" id="checkbox_2" value="Watches">
                        <label class="label label--checkboxes" for="checkbox_2">Watches</label><br>
                        <input type="checkbox" name="checkbox" id="checkbox_3" value="Interior">
                        <label class="label label--checkboxes" for="checkbox_3">Interior</label><br>
                    </div>

                    <!--Publish-->
                    <div class="publishPost">
                        <input type="submit" value="Publish post"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>
    
</body>
</html>
