<?php 
require_once '../config.php';

$postID = $_REQUEST['postID'];
//$_GET ['edit_postID'] = 15;take it from blogpost postID where it is published $postID = $_REQUEST['postID'];  
//$postID = $_GET ['edit_postID'];
//var_dump($_REQUEST);
require_once DIRBASE . 'database/db.php';





if(isset($_GET['postID']) && is_numeric($_GET ['postID']) && empty($_POST)){ 
		$postID =$_GET['postID'];
			// fetch all the blogposts that will order the posts by date
//$statement = $pdo->prepare("SELECT DISTINCT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryID`, `image` FROM `blogposts`, `images`  WHERE `postID` = '$postID'");	
		// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT `postID`, `postDate`, `postTitle`, `postText`, `userID`, `categoryName`, `image` FROM `blogposts` WHERE postID = '$postID'");
 
$statement->execute();


$blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 
//var_dump($blogposts); 
    
 foreach($blogposts as $blogpost)  {
    $postID  = $blogpost['postID'];
    $postTitle = $blogpost['postTitle'];   
    $postText = $blogpost['postText']; 
    $categoryName = $blogpost['categoryName'];
    $image = $blogpost['image']; 
    $postDate = $blogpost['postDate'];
 }
//    
//$sunglasses = 'Sunglasses';
//$watches = 'Watches';
//$interior = 'Interior';
//$checked_0 =  $checked_1 =  $checked_2 = '';    
//if($categoryID == 0){
//$checked_0 = 'checked';
//}
//elseif($categoryID == 1){
//$checked_1 = 'checked';
//} 
// else{
//    $checked_2 = 'checked';
//}
//	    require_once 'partials/require_once 'database/actions/fetch_all_blogposts.php';.php';
//    echo "yes!";
//    echo $postDate . "yes!";
//    echo $postID . "yes!";
//    echo $postTitle . "yes!";
//    echo $postText . "yes!";
//    echo  $image  . "yes!";
//    echo  $categoryName . "yes!";
    
    
} else {
    
    $postTitle = $_POST['headline'];   
    $postText = $_POST['postText']; 
    $categoryName = $_POST['categoryName'];
    $image = $_FILES['upload']['name']; 
   
  
//   echo "no!";
//  
//    echo $postID . "no!";
//    echo $postTitle . "no!";
//    echo $postText . "no!";
//    echo  $image  . "no!";
//    echo  $categoryName . "no!"; 
}

?>




<?php require_once DIRBASE . 'database/actions/update.php'; ?>

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
                    <div class="edit_wrapper">
                        <form class="form" action="pages/editPost.php" method="POST" enctype="multipart/form-data">
                            <div class="topInfoCreate">
                                <legend class="legend">
                                    <h1>Edit Your Story</h1>
                                </legend>
                                <div class="help">
                                    <p>For help press the icon</p>
                                    <p><a href="pages/help.php"><i class="fa fa-question-circle" aria-hidden="true"></i></a></p>
                                </div>
                            </div>

                            <br><br>

                            <div class="clear"></div>
    <?php 
    //    var_dump($postID); 
    ?>
                            <fieldset class="fieldset">
                                <div class="createForm">
                                <input type="hidden" name="postID" value="<?= $postID ?>">
                                    <input type="text" name="headline" placeholder="<?= $postTitle ?>" value="<?= $postTitle ?>" id="headline" aria-required="true" required />
                                    <br>

                                    <textarea class="textarea" id="postText" name="postText" rows="6" cols="50" placeholder="Write your text here" required>
                                    <?php echo $postText; 
                                    if(isset($image)){
                                        echo '<img src="images/' . $image . '" alt="'. $postTitle . '">';
                                    }
                                        ?></textarea>
                                    <br>

                                    <input type="file" name="upload" id="image" value="">
                                    
                                    <input type="hidden" name="image" value="<?php $image ?>">
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
                                    <input type="submit" value="Publish" name="publish">
                                </div>
                                <div class="createButton">
                                    <button type="button">
                                    <a href="pages/blogpost.php?view_post=<?= $postID ?>">View post</a>
                                    </button>
                                </div> 
                            </fieldset>
                        </form>
                    </div>
                </div>

                <?php 
//    var_dump($_POST);
                                     
        if(isset($success)){
            $imgCopyName = $_FILES['upload']['tmp_name'];
            $image = $_FILES['upload']['name'];
            $imgSize = $_FILES['upload']['size'];
//        echo  $imgCopyName . "<br>";
//        echo  $image;
//        echo  $imgSize . " Kb";
            require_once DIRBASE . 'database/actions/update.php';  
        echo '<br> <br> Published!<br> <script type="text/javascript">alert("Published!");</script>'; 
        
        //           sleep(5);
        //         header("Location: pages/blogpost.php", true, 303);
            //then should redirect to page with full blogpost
        }
?>
            </div>
        </div>
    </main>
    <script>
        CKEDITOR.replace('postText');

    </script>
    <?php require DIRBASE . 'partials/footer.php'; ?>
    <?php require DIRBASE . 'partials/bootstrapScripts.html'; ?>

</body>

</html>
