<?php 
$_GET ['edit_postID'] = 14; //take it from blogpost postID where it is published
require_once 'partials/update.php'; 
require_once 'partials/db.php';


global $postTitle, $postText, $categoryID, $imageID, $postDate;


if(isset($_GET['edit_postID']) && is_numeric($_GET ['edit_postID'])){ 
		$postID = $_GET ['edit_postID'];
			// fetch all the blogposts that will order the posts by date
//$statement = $pdo->prepare("SELECT DISTINCT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryID`, `postImage` FROM `blogposts`, `images`  WHERE `postID` = '$postID'");	
		// fetch all the blogposts that will order the posts by date
//funkar  $statement = $pdo->prepare("SELECT blogposts.postID, images.imageID FROM `blogposts`, `images`  WHERE blogposts.imageID = images.imageID AND blogposts.postID = images.postID");
 $statement = $pdo->prepare("SELECT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryID`, `imageID` FROM `blogposts` WHERE postID = '$postID'");
    
$statement->execute();


$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 
var_dump($blogposts); 
   
    if(isset($_POST)){
 foreach($blogposts as $blogpost)  { 
    if($blogpost['postTitle'] === $_POST['postTitle']){
        $postTitle = $blogpost['postTitle'];
    } else {
        $postTitle = $_POST['postTitle'];
    }
    if($blogpost['postText'] === $_POST['postText']){
        $postText = $blogpost['postText'];
    } else {
        $postText = $_POST['postText'];
    }    
    if($blogpost['categoryID'] === $_POST['categoryID']){
        $categoryID = $blogpost['categoryID'];
    } else {
        $categoryID = $_POST['categoryID'];
    }   
    if($blogpost['imageID'] === $_POST['imageID']){
        $imageID = $blogpost['imageID'];
    } else {
         $imageID = $_POST['imageID'];
    }  
    if($blogpost['postDate'] === $_POST['postDate']){
        $postDate = $blogpost['postDate'];
    } else {
         $postDate = $_POST['$postDate'];
    }  
        
    }
}
    
$sunglasses = 'Sunglasses';
$watches = 'Watches';
$interior = 'Interior';
$checked_0 =  $checked_1 =  $checked_2 = '';    
if(($categoryID == 0) && ($categoryID == $_POST['category'])){
    $checked_0 = 'checked';
}
elseif($categoryID == 1){
    $checked_1 = 'checked';
} 
 else{
    $checked_2 = 'checked';
}
//	    require_once 'partials/fetch_all_blogposts.php';
    echo "yes!";
    echo $postDate . "yes!";
    echo $postID . "yes!";
    echo $postTitle . "yes!";
    echo $postText . "yes!";
    echo  $imageID  . "yes!";
    echo  $categoryID . "yes!";
    
    
}

?> 





<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
	<title>Edit Story</title>
</head>
<body>

    <?php require 'logoheader.html'; ?>
    <?php require 'partials/navbar.php';  ?>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <main>
        <div class="main">
            <div class="mainBody">
                <div class="form_wrapper">    
                    <form class="form" action="editPost.php" method="post" enctype="multipart/form-data">
                        <div class="topInfoCreate">
                            <legend class="legend"><h1>Edit Your Story</h1></legend>
                            <div class="help">
                                <p>For help press the icon</p>
                                <p><a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>
                            </div>
                        </div>

                        <br><br>

                        <div class="clear"></div>

                        <fieldset class="fieldset">
                            <div class="createForm">
                                <input type="text" name="headline" placeholder="<?= $postTitle ?>" value="<?= $postTitle ?>" id="headline" aria-required="true" required />
                                <br>
                                   
                <textarea class="textarea" id="postText" name="postText" rows="6" cols="50"  placeholder="Change" required> </textarea>
                                <br>

                                <input type="file" name="upload" id="image" value="">
                                <input type="hidden" name="action" value="upload"> 
                                <br>
                            </div>

                                <div class="checkboxWrapper">
                                    <p class="formTheme">Change category for your post:</p>
                            
                                    <input type="radio" name="category" id="Sunglasses" value="<?= $sunglasses ?>" <?=  $checked_0 ?> required>
                                    <label class="labelCheckboxes" for="Sunglasses">Sunglasses</label>
                                    <br>

                                    <input type="radio" name="category" id="Watches" value="<?= $watches ?>"  <?=  $checked_1 ?> >
                                    <label class="labelCheckboxes" for="Watches">Watches</label>
                                    <br>

                                    <input type="radio" name="category" id="Interior" value="<?= $interior ?>"  <?=  $checked_2 ?> >
                                    <label class="labelCheckboxes" for="Interior">Interior</label>
                                    <br>
                                </div>
                            
                                <div class="createButton">
                                    <input type="submit" value="Publish" name="publish">
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
        echo  $imgSize . " Kb";
        echo '<br> <br> Published!<br> <script type="text/javascript">alert("Published!");</script>'; 
        
        //           sleep(5);
        //         header("Location: blogpost.php", true, 303);
            //then should redirect to page with full blogpost
        }
?>
           
            </div>
        </div>
    </main>
		<script>
			CKEDITOR.replace( 'postText' );
		</script>
<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?> 

</body>
</html>


