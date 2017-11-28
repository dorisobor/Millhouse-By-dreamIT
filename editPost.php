<?php require_once 'partials/update.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>Edit Story</title>
<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfoCreate">
                            <legend class="legend"><h1>Edit Your Story</h1></legend>
                            <div class="help">
                                <p>For help press the icon</p>
                                <p><a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>
                            </div>
                        </div>

                        <br></br>

                        <div class="clear"></div>

                        <fieldset class="fieldset">
                            <div class="createForm">
                                <input type="text" name="blogtitle" placeholder="Story title" id="headline" aria-required="true" required />
                                <br>
                                    
                                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required></textarea>
                                <br>

                                <input type="file" name="upload" id="image" value="">
                                <input type="hidden" name="action" value="upload"> 
                                <br>
                            </div>

                                <div class="checkboxWrapper">
                                    <p class="formTheme">Change category for your story:</p>
                            
                                    <input type="radio" name="category" id="Sunglasses" value="Sunglasses" required>
                                    <label class="labelCheckboxes" for="category_1">Sunglasses</label>
                                    <br>

                                    <input type="radio" name="category" id="Watches" value="Watches">
                                    <label class="labelCheckboxes" for="category_2">Watches</label>
                                    <br>

                                    <input type="radio" name="category" id="Interior" value="Interior">
                                    <label class="labelCheckboxes" for="category_3">Interior</label>
                                    <br>
                                </div>
                            
                                <div class="createButton">
                                    <input type="submit" value="Publish" name="create">
                                </div>
                        </fieldset>
                    </form>
                </div>
                
<?php 
    var_dump($_POST);
        if(isset($success)){
            $imgCopyName = $_FILES['upload']['tmp_name'];
            $imgName = $_FILES['upload']['name'];
            $imgSize = $_FILES['upload']['size'];
        echo  $imgCopyName . "<br>";
        echo  $imgName;
        echo '<br> <br> Published!<br> <script type="text/javascript">alert("Published!");</script>'; 
        echo  $imgSize . " Kb";
        //           sleep(5);
        //         header("Location: blogpost.php", true, 303);
            //then should redirect to page with full blogpost
        }
?>
            </div>
        </div>
    </main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
