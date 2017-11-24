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
                    <p>Blogpost Title</p>
                    <input type="text" name="headline" placeholder="Title" id="headline" aria-required="true" required />
                    <br></br>

                    <!--Uppload an image-->
                    <p>Choose an image</p>
                    <input type="file" name="image" id="image"/>
                    <br></br>
                    
                    <p> Write post</p>
                    <textarea class="textarea" id="blog_post" name="blog_post" rows="6" cols="50" placeholder="Your text" required></textarea>
                    <br></br>

                    <!--Checkboxes-->
                    <div class="form checkboxes_wrapper">
                        <p>Select one category for your post:</p>
                        <input type="checkbox" name="checkbox" id="checkbox_1" value="Sunglasses">
                        <label class="label label--checkboxes" for="checkbox_1"></label><p>Sunglasses</p>
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
