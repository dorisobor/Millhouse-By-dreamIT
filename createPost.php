<?php 
require_once 'partials/insert.php';

?>
<?php
//     $categoryArray = array('Sunglasses','Watches','Interior');
//     $categoryName = $categoriesArray[$_POST['category']];
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
<!--    <script src="https://cdn.ckeditor.com/ckeditor5/[version.number]/[distribution]/ckeditor.js"></script>-->
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<!--   <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>-->
    <title>Create New Post</title>
</head>

<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>
    <?php 
    
    $postID = 1;
    $userID = 1; 
    //should be taken from POST or GET
?>
    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">


                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
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

                                <input type="radio" name="categoryName" id="Sunglasses" value="Sunglasses" required>
                                <label class="labelCheckboxes" for="Sunglasses">Sunglasses</label>
                                <br>

                                <input type="radio" name="categoryName" id="Watches" value="Watches">
                                <label class="labelCheckboxes" for="Watches">Watches</label>
                                <br>

                                <input type="radio" name="categoryName" id="Interior" value="Interior">
                                <label class="labelCheckboxes" for="Interior">Interior</label>
                                <br>
                            </div>

                            <div class="createButton">
                                <input type="submit" value="Publish" name="publish">
                            </div>
                                                        <div class="createButton">
                                <button type="button">
                                  <a href="blogpost.php?view_post=<?= $last_id ?>">View post</a>
                                </button>
                               
                            </div> 
                        </fieldset>
                    </form>
                </div>



                <?php 
if(isset($_FILES['upload'])){
    require 'partials/db.php';
         $imageInfo = $_FILES['upload'];
        //use print_r() to see info about the image
//        print_r($imageInfo);
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
                ":postImage" => "images/" . $filename
            ));
        } else {
            echo "FAIL!";
        }
}
    
    if(!empty($success)){
       
       
//        $imgCopyName = $_FILES['upload']['tmp_name'];
//        $imageName = $_FILES['upload']['name'];
//        $imgSize = $_FILES['upload']['size'];
//        echo  $imgCopyName . "<br>";
//        echo  $imgName;
            echo '<script type="text/javascript">alert("Published!");</script>'; 
//        echo  $imgSize . " Kb";
   }
              
//              else{
//                  echo "no success";
//              }
    ?>
            </div>
        </div>
    </main>
		<script>
			CKEDITOR.replace( 'postText' );
		</script>
   
<!--
   <script>
			ClassicEditor
				.create( document.querySelector( '#postText' ) )
				.then( editor => {
					console.log( postText );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>
-->
    <?php require 'partials/footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?>



</body>

</html>
