<?php
session_start();   
require_once '../config.php';
require_once DIRBASE . 'database/db.php'; 
require_once DIRBASE . 'database/functions.php';

//if user is not logged in sh/e gets redirected to home
if (!isLoggedIn()){
	header('Location: pages/login.php');
	return;
}

//checks if delete button was pressed och post was deleted
//if it was deleted variable is used to trigger a message
$commentIsDeleted = isset($_SESSION['commentDeleted']);
//unsets session in order for message to disappear
unset($_SESSION['commentDeleted']);

$user = getUserInfo($_SESSION['userID']);
$userID = $user['userID'];

$statement = $pdo->prepare
("SELECT * FROM blogPosts
JOIN comments ON comments.postID = blogPosts.postID 
JOIN users on users.userID = blogPosts.userID
WHERE comments.userID = :id ORDER BY commentDate DESC LIMIT 5
");  

$statement->bindParam(":id", $userID);   
$statement->execute();
$infos = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once DIRBASE . 'partials/head.php'; ?>
    <title>Latest comments</title>
    <meta name="description" content="See the latest comments you've made.">
</head>  

<body>

<?php 
require DIRBASE . 'partials/logoheader.html';
require DIRBASE . 'partials/navbar.php'; 
?>

<main>
    <div class="profileBox"> 
        <div class="profileBox__content-1">
            <!--  userimage (deafault = user icon) -->
            <div class="user-image__container">
                <img class="user-image__image" src="<?= $user['userAvatar'] ?>" alt="user icon"/>
            </div>
        
            <!-- username and userdescription -->
            <div class="profileBox__content-username">
                <p class="username"><?= $user['username'] ?></p>
                <p class="aboutMe"><?= $user['userBio'] ?></p>
            </div>
        </div>

        <div class="clear"></div>
        
        <div class="profileBox__content-2">
            <div class="createNewPost">
                <button class="create">
                    <a href="pages/createPost.php">Create New Story</a>
                </button>
            </div>

            <!-- prints out total posts and comments the user has published -->
            <div class="profileBox__content-commentsPosts">
                <div class="totalPosts">
                    <span>Published stories: <?= getUserStatisticsPosts($userID)?></span>
                </div>
                <div class="totalComments">
                    <span>Comments: <?= getUserStatisticsComments($userID) ?></span>
                </div>
			</div>
        </div>   
    </div>

    <!-- inner user nav -->
    <nav class="nav nav-pills nav-justified">
        <a class="nav-item nav-link" href="pages/profilePage.php">All Stories</a>
        <a class="nav-item nav-link" href="pages/latestPosts.php">Latest Stories</a>
        <a class="nav-item nav-link active" href="pages/latestComments.php">Latest Comments</a>
    </nav>

	<!--latest comments-->
	<div class="container-wrapper">

        <?php if ($commentIsDeleted): ?>
            <?php require DIRBASE . 'messages/messageDeleteCommentConfirm.html'; ?>
        <?php endif; ?>

        <?php foreach($infos as $info){?>  
            <div class= "container-latestComments">
                <article>  
                    <p class="post-information__text">On</p> 
                    <!-- prints the title of the post that has been commented on -->
                    <p class="post-information__text post-information__text--title">
                        <?= $info["postTitle"]; ?>
                    </p>

                    <p class="post-information__text">written by</p>
                    <!-- prints the auhtor of the commented post -->
                    <p class="post-information__text post-information__text--author">
                        <?= $info["username"]; ?>
                    </p></br>

                    <!-- prints the date the post was commented on -->
                    <p class="post-information__text">
                        the <time> 
                        <?= substr($info["commentDate"], 0, 16) ?></time> 
                        you wrote:
                    </p>

                    <!-- prints the comment, if the user wants to see the post sh/e 
                    can click on the commenttext -->
		            <p class="post-information__comment">
                        <a href="pages/blogpost.php?$infos['postID']">
                            <?= $info["commentText"]; ?>
                        </a>
                    </p>

                    <br>

                    <!-- delete button -->
                    <div class="editButtons">
                        <button class="delete" type="button" data-toggle="modal" data-target=".delete-confirmation-comment-modal"
                        data-comment-id="<?= $info['commentID']?>" data-redirect-page="pages/latestComments.php">
                                <i class="fa fa-trash" aria-hidden="true"></i> Delete
                        </button>
                    </div>
                </article>	
            </div>
        <?php }?>

        <?php require DIRBASE . 'messages/messageEmptyProfileComments.php'; ?>
        
    </div>  

    <!-- popup window connected to delete button (ie delete confirmation) -->
    <?php require DIRBASE . 'modals/modalDeleteComment.php'; ?>

</main>

<?php 
require DIRBASE . 'partials/footer.php';
require DIRBASE . 'partials/bootstrapScripts.html'; 
?>

</body>
</html>
