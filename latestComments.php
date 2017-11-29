<?php

require 'partials/db.php';
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

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
    <?php require 'head.html'; ?>
	<title>Latest comments</title>
</head>  

<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php' ?>

<main>
    <div class="profileBox"> 
        <div class="profileBox__content-1">
            <!-- user avatar -->
            <div class="user-image__container">
                <img class="user-image__image" src="<?= $user['userAvatar'] ?>"/>
            </div>
        
            <!-- userinfo (username and bio) -->
            <div class="profileBox__content-username">
                <p class="username"><?= $user['username'] ?></p>
                <p class="aboutMe"><?= $user['userBio'] ?></p>
            </div>
    
            <div class="settingsIcon">
                <button class="settings">
                    <a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i></a>
                </button>
            </div>
        </div>

        <div class="clear"></div>
            
        <div class="profileBox__content-2">
            <div class="profileBox__content-commentsPosts">
                <div class="totalPosts">
                    <span><?= getUserStatisticsPosts($GLOBALS['userID']) ?>  stories(s)</span>
                </div>
                <div class="totalComments">
                    <span><?= getUserStatisticsComments($GLOBALS['userID']) ?>  comments(s)</span>
                </div>
			</div>
            <div class="createNewPost">
                <button class="create">
                    <a href="createPost.php">Create New Story</a>
                </button>
            </div>
        </div>   
    </div>

    <!-- Tab menu -->
    <nav class="nav nav-pills nav-justified">
        <a class="nav-item nav-link" href="profilePage.php">All Stories</a>
        <a class="nav-item nav-link" href="latestPosts.php">Latest Stories</a>
        <a class="nav-item nav-link active" href="latestComments.php">Latest Comments</a>
    </nav>

	<!--latest comments-->
	<div class="container-wrapper">
        <?php foreach($infos as $info){?>  
        <div class= "container-latestComments">
            <article>
                <p class="post-information__text">On</p> 
                <p class="post-information__text post-information__text--title">
                    <?= $info["postTitle"]; ?>
                </p>
                <p class="post-information__text">written by</p>
                <p class="post-information__text post-information__text--author">
                    <?= $info["username"]; ?>
                </p></br>
                <p class="post-information__text">
                    the <time> 
                    <?= substr($info["commentDate"], 0, 16) ?></time> 
                    you wrote:
                </p>
                <p class="post-information__comment"> <?= $info["commentText"]; ?></p>
                <button>
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    <a href="/editPost.php">Edit</button></a>
                </button>
                <button class="delete">
                    <a class="delete"  data-toggle="modal" data-target="#delete-confirmation">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </a>
                </button>
            </article>	
        </div>
        <?php }?>

        <?php if (empty($info)): ?>
			<div class="message">
				<p class="message__if-empty">
					You haven't commented on any story yet! 
					Don't know where to start? 
					<a class="message__link" href="index.php">
						Click here to see the latest stories
					</a>
				</p>
			</div>
        <?php endif; ?>
        
    </div>  

    <!-- popup window -->
    <div class="modal fade" id="delete-confirmation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Delete confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Are your sure you want to delete this comment?
					   Once you've deleted it, the comment cant be re-created.
					</p>
                </div>
                <div class="modal-footer">
                    <a class="modal-footer__link" href="deleteComment.php?commentID=<?= $info['commentID']?>&redirectto=latestComments.php">
                        Yes, delete
                    </a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Don't delete</button>
                </div>
            </div>
        </div>
    </div>   
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>