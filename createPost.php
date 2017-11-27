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
            <div class="form_wrapper">
                <div class="help">
                    <p>
                       <a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a> 
                    </p>
                </div>
                
                <form class="form" action="createPost.php" method="post" enctype="multipart/form-data">
                    <fieldset class="fieldset">
                        <legend class="legend"> Create a new post </legend>



                        <label class="label" for="headline">Headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                      
                        <label class="label" for="upload"> Choose image </label> <br />
                        <input type="file" name="upload" id="image" value="">
                        <input type="hidden" name="action" value="upload"> 
                        <br />
                        
                        <label class="label" for="postText"> Write post</label> <br />
                       <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                     
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Select one or several categories for your post:</p>
                            <br />


                            <input type="radio" name="category" id="Sunglasses" value="Sunglasses"  required >
                            <label class="label label--checkboxes" for="category_1">Sunglasses</label><br>
                            <input type="radio" name="category" id="Watches" value="Watches">
                            <label class="label label--checkboxes" for="category_2">Watches</label><br>
                            <input type="radio" name="category" id="Interior" value="Interior">
                            <label class="label label--checkboxes" for="category_3">Interior</label><br>
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
    </main>

    <?php require 'footer.php'; ?>
    <?php require 'bootstrapScripts.html'; ?> 

</body>
</html>
