<?php 
require_once 'partials/db.php';
require_once 'partials/insert.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add post</title>
</head>
<body>

<!--
<form action="add.php" method="post" 
    enctype="multipart/form-data"> 
  <div><label id="upload">Select file to upload: 
    <input type="file" id="upload" name="upload" /></label></div> 
  <div> 
    <input type="hidden" name="action" value="upload" /> 
    <input type="text" name="headline"><br><br>
   
   <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Your text" required></textarea>
    <input type="submit" value="publish" name="publish">
  </div> 
</form>
-->


<form class="form" action="add.php" method="post" enctype="multipart/form-data">
                    <fieldset class="fieldset">
                        <legend class="legend"> Create a new post </legend>



                        <label class="label" for="headline">Headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                      
                        <label class="label" for="upload"> Choose image </label> <br />
                        <input type="file" name="upload" id="image">
                        <input type="hidden" name="action" value="upload"> 
                        <br />
                        
                        <label class="label" for="postText"> Write post</label> <br />
                       <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                     
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Select one or several categories for your post:</p>
                            <br />


                            <input type="radio" name="category" id="category_1" value="Sunglasses"  required >
                            <label class="label label--checkboxes" for="category_1">Sunglasses</label><br>
                            <input type="radio" name="category" id="category_2" value="Watches">
                            <label class="label label--checkboxes" for="category_2">Watches</label><br>
                            <input type="radio" name="category" id="category_3" value="Interior">
                            <label class="label label--checkboxes" for="category_3">Interior</label><br>
                        </div>
                      
                        <input type="submit" value="publish" name="publish">
                    </fieldset>
                </form>


<!--
<form action="add.php" method="post">
    <input type="text" name="headline"><br><br>
    <input type="text" name="postText"><br><br>
    <input type="submit" value="publish" name="publish">
</form>
-->
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
</body>
</html>