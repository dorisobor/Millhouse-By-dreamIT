<?php require_once 'partials/insert.php'; ?>
 require_once 'partials/fetch_one_blogpost.php';
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>Create New createPost</title>
<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfo">
                            <legend class="legend"><h1>Create New Post</h1></legend>
                            <p>Create your post here. For help press the icon.</p>

                            <div class="help">
                                <p><a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                        <br></br>

                        <div class="clear"></div>

                        <div class="createForm">
                            <fieldset class="fieldset">
                                <label class="label" for="blogtitle"><h6>Blog Title</h6></label>
                                <input type="text" name="blogtitle" placeholder="Title" id="headline" aria-required="true" required />
                                <br>
                            
                                <label class="label" for="upload">Choose Image</label>
                                <input type="file" name="upload" id="image" value="">
                                <input type="hidden" name="action" value="upload"> 
                                <br>
                                
                                <label class="label" for="postText">Write Post</label>
                                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required></textarea>
                                <br>
                            </div>

                                <div class="formCheckboxesWrapper">
                                    <br>
                                    <p class="form form--theme">Select one or several categories for your post:</p>

                                    <input type="radio" name="category" id="Sunglasses" value="Sunglasses">
                                    <label class="label label--checkboxes" for="category_1">Sunglasses</label>
                                    <br>

                                    <input type="radio" name="category" id="Watches" value="Watches">
                                    <label class="label label--checkboxes" for="category_2">Watches</label>
                                    <br>

                                    <input type="radio" name="category" id="Interior" value="Interior">
                                    <label class="label label--checkboxes" for="category_3">Interior</label>
                                    <br>
                                </div>
                            
                                <input type="submit" value="publish" name="publish">
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
    }
    ?>
            </div>
        </div>
    </main>

    <?php require 'footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
