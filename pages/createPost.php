<?php 
session_start();
require_once '../config.php';
require_once DIRBASE . 'database/actions/insert.php';
require_once DIRBASE . 'database/functions.php';

//if user is not logged in sh/e gets redirected to home
if (!isLoggedIn()){
	header('Location: pages/login.php');
	return;
}

if(isset($_FILES['upload'])){
    require_once DIRBASE . 'database/db.php';
    $imageInfo = $_FILES['upload'];
 
    //$path is the pemporery place where the image stores befoor it moves to database
    $path = $_FILES['upload']['tmp_name'];
    $filename = $_FILES['upload']['name'];
        
    // Move the image file from $path to folder images
    if(move_uploaded_file($path, '../images/' . $filename)){
    // Insert file in database. 
        $statement  = $pdo->prepare("
            INSERT INTO images 
            (postImage) 
            VALUES (:postImage)");
    
            $statement->execute(array(
            ":postImage" => "images/" . $filename));        
    } 
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require DIRBASE . 'partials/head.php'; ?>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <title>Create New Post</title>
    <meta name="description" content="create a new story!">
</head>

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php';
?>
 
<main>
    <div class="main">
        <div class="mainBody">
            <!-- if users has published a post sh/e gets a message -->
            <?php if(isset($_POST['publish'])): ?>
                <?php require DIRBASE . 'messages/messageCreatePostConfirm.php';?>
            <?php endif; ?>
            <div class="form_wrapper">
                <div class="create_wrapper">
                    <form class="form" method="post" enctype="multipart/form-data">
                        <div class="topInfoCreate">
                            <legend class="legend">
                                <h1>Create New Story</h1>
                            </legend>
                            <div class="help">
                                <p>Fields marked with * is mandatory. Need help? Press the icon </p>
                                <p><a href="pages/help.php" aria-label="click here if you want read FAQ">
                                <i class="fa fa-question-circle" alt="questionmark" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                        <br><br>
                        <div class="clear"></div>
                        <fieldset class="fieldset">
                            <div class="createForm">
                                <label for="headline">Write your headline here *</label>
                                <input type="text" name="headline" placeholder="Blog title" id="headline" aria-required="true" required />
                                <br>
                                <label for="headline">Write your story here *</label>
                                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required></textarea>
                                <br>
                                <label for="upload">Choose a picture for your story</label>
                                <input type="file" name="upload" id="image" value="image.jpg">
                                <input type="hidden" name="action" value="">
                                <br>
                                <input type="hidden" name="imageName" value="<?php $imageName ?>">
                            </div>
                            <div class="checkboxWrapper">
                                <p class="formTheme">Select a category for your story *</p>
                                <input type="radio" name="category" id="Watches" value="1" checked>
                                <label class="labelCheckboxes" for="Watches">Watches</label>
                                <br>
                                <input type="radio" name="category" id="Sunglasses" value="2">
                                <label class="labelCheckboxes" for="Sunglasses">Sunglasses</label>
                                <br>
                                <input type="radio" name="category" id="Interior" value="3">
                                <label class="labelCheckboxes" for="Interior">Interior</label>
                                <br>
                            </div>
                            <div class="createButton">
                                <input type="submit" value="Publish" name="publish">
                            </div>
                        </fieldset>
                    </form>
                </div>
             </div>
        </div>
    </div>
</main>

<script>
CKEDITOR.replace( 'postText' );
CKEDITOR.config.width = '100%';
</script>

<?php         
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html'; 
?>

</body>
</html>
