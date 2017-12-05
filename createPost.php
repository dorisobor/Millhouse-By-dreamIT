<?php 
session_start();
require_once 'partials/insert.php';
require_once 'functions.php';

if(isset($_FILES['upload'])){
    require 'partials/db.php';
         $imageInfo = $_FILES['upload'];
 
        //$path is the pemporery place where the image stores befoor it moves to database
        $path = $_FILES['upload']['tmp_name'];
        $filename = $_FILES['upload']['name'];
        
        // Move the image file from $path to folder images
        if(move_uploaded_file($path, 'images/' . $filename)){
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
    <?php require 'head.html'; ?>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <title>Create New Post</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php';  ?>
 
<main>
    <div class="main">
        <div class="mainBody">
            <div class="form_wrapper">
                    <form class="form"  method="post" enctype="multipart/form-data">
                        <div class="topInfoCreate">
                            <legend class="legend">
                                <h1>Create New Story</h1>
                            </legend>
                            <div class="help">
                                <p>For help press the icon</p>
                                <p><a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>
                            </div>
                        </div>

                        <br><br>

                        <div class="clear"></div>

                        <fieldset class="fieldset">
                            <div class="createForm">
                                <input type="text" name="headline" placeholder="Blog title" id="headline" aria-required="true" required />
                                <br>

                                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required></textarea>
                                <br>

                                 <input type="file" name="upload" id="image" value="image.jpg">

                                <input type="hidden" name="action" value="">
                                <br>

                                <input type="hidden" name="imageName" value="<?php $imageName ?>">
                            </div>
 
    
                            <div class="checkboxWrapper">
                                <p class="formTheme">Select a category for your story:</p>

                                <input type="radio" name="categoryWatches" id="Watches" value="Watches">
                                <label class="labelCheckboxes" for="Watches">Watches</label>
                                <br>

                                <input type="radio" name="categorySunglasses" id="Sunglasses" value="Sunglasses">
                                <label class="labelCheckboxes" for="Sunglasses">Sunglasses</label>
                                <br>

                                <input type="radio" name="categoryInterior" id="Interior" value="Interior">
                                <label class="labelCheckboxes" for="Interior">Interior</label>
                                <br>
                            </div>

                            <div class="createButton">
                                <input type="submit" value="Publish" name="publish">
                            </div>
                            <button type="button">
                                <a href="blogpost.php?view_post=<?= $last_id ?>">View post</a>
                            </button>
                            
                            </div> 
                        </fieldset>
                    </form>
                </div>

         
<script>
    CKEDITOR.replace( 'postText' );
</script>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
