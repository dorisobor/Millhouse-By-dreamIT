<?php 
require '../config.php';
require DIRBASE . 'database/db.php';
                         
$postID = $_REQUEST['postID'];

if(isset($_FILES['upload'])){
    require_once DIRBASE . 'database/db.php';
    $imageInfo = $_FILES['upload'];
 
    //$path is the temporary place where the image stores befoor it moves to database
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

if(isset($_GET['postID']) && is_numeric($_GET ['postID']) && empty($_POST)){ 
    $postID =$_GET['postID'];
    $statement = $pdo->prepare("SELECT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryName`, `imageName` 
    FROM `blogPosts` WHERE postID = '$postID'");
    $statement->execute();
    $blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 
    
    foreach($blogposts as $blogpost)  {
        $postID  = $blogpost['postID'];
        $postTitle = $blogpost['postTitle'];   
        $postText = $blogpost['postText']; 
        $categoryName = $blogpost['categoryName'];
        $imageName = $blogpost['imageName']; 
        $postDate = $blogpost['postDate'];
    }
 
} else {
        
    $postTitle = $_POST['headline'];   
    $postText = $_POST['postText']; 
    $categoryName = $_POST['categoryName'];
    $imageName = $_FILES['upload']['name']; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require DIRBASE . 'partials/head.php'; ?>
    <title>Edit Story</title>
</head>

<body>

    <?php require DIRBASE . 'partials/logoheader.html'; ?>
    <?php require DIRBASE . 'partials/navbar.php';  ?>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    
    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">
                    <form class="form" action="pages/editPost.php" method="POST" enctype="multipart/form-data">
                        <div class="topInfoCreate">
                            <legend class="legend">
                                <h1>Edit Your Story</h1>
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
                               <input type="hidden" name="postID" value="<?= $postID ?>">
                                <input type="text" name="headline" placeholder="<?= $postTitle ?>" value="<?= $postTitle ?>" id="headline" aria-required="true" required />
                                <br>

                                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required>
                                   <?php 
                                   if(isset($imageName)){
                                    echo '<img src="' . DIRBASE . 'images/' . $imageName . '">';
                                    echo $postText; 
                                   }
                                    ?></textarea>
                                <br>

                                <input type="file" name="upload" id="image" value="image.jpg">
                                
                                 <input type="hidden" name="imageName" value="<?php $imageName ?>">
                                <input type="hidden" name="action" value="upload">
                                <br>
                            </div>

                            <div class="checkboxWrapper">
                                <p class="formTheme">Change category for your post:</p>

                                <input type="radio" name="categoryName" id="Sunglasses" value="Sunglasses" required>
                                <label class="labelCheckboxes" for="Sunglasses">Sunglasses</label>
                                <br>

                                <input type="radio" name="categoryName" id="Watches" value="Watches" >
                                <label class="labelCheckboxes" for="Watches">Watches</label>
                                <br>

                                <input type="radio" name="categoryName" id="Interior" value="Interior"  >
                                <label class="labelCheckboxes" for="Interior">Interior</label>
                                <br>
                            </div>

                            <div class="createButton">
                                <input type="submit" value="Update" name="publish">
                            </div>
                            <div class="createButton">
                                <button type="button">
                                  <a href="pages/blogpost.php?view_post=<?= $postID ?>">View post</a>
                                </button>
                            </div> 
                        </fieldset>
                    </form>
                </div>

<?php require DIRBASE .  'database/actions/update.php'; ?>

        </div>
    </div>
</main>

<script>
    CKEDITOR.replace('postText');
</script>

<?php require DIRBASE .  'partials/footer.php'; ?>
<?php require DIRBASE .  'partials/bootstrapScripts.html'; ?>

</body>
</html>