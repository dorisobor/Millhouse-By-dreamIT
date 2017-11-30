<?php 
require_once 'partials/insert.php';

?>
<?php
     $categoryArray = array('Sunglasses','Watches','Interior');
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
   // $userID = 5; /*should be taken from POST or GETT*/
?>
    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="testFile.php" method="post" enctype="multipart/form-data">
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

                                <input type="hidden" name="action" value="upload">
                                <br>

                                <input type="hidden" name="image" value="<?php $image ?>">
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
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
		<!--script>
			CKEDITOR.replace( 'postText' );
		</script-->
   

   <!--script>
			ClassicEditor
				.create( document.querySelector( '#postText' ) )
				.then( editor => {
					console.log( postText );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script-->

    <?php require 'partials/footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?>



</body>

</html>
