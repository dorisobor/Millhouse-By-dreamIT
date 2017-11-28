<?php require_once 'partials/update.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Edit post</title>
</head>

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
               
<form class="form" action="editPost.php" method="post" enctype="multipart/form-data">
                     <fieldset class="fieldset">
                        <legend class="legend"> Edit the post </legend>



                        <label class="label" for="headline">Change headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                        <!--Uppload an image-->
                        <label class="label" for="upload"> Change image </label> <br />
                        <input type="file" name="upload" id="upload" />
                        <br />
                        <label class="label" for="blog_post"> Change post</label> <br />
                        <textarea class="textarea" id="postText" name="postText"  rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                        <!--Checkboxes-->
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Change categories for your post:</p>
                            <br />


                            <input type="radio" name="category" id="category_1" value="Sunglasses"  required >
                            <label class="label" for="category_1">Sunglasses</label><br>
                            <input type="radio" name="category" id="category_2" value="Watches">
                            <label class="label" for="category_2">Watches</label><br>
                            <input type="radio" name="category" id="category_3" value="Interior">
                            <label class="label" for="category_3">Interior</label><br>
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
//           sleep(5);
//         header("Location: blogpost.php", true, 303);
        //then should redirect to page with full blogpost
   }
?>
        </div>
    </main>

<?php require 'partials/footer.php';  ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
