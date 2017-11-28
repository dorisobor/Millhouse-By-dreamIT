<?php

require 'partials/db.php';
require 'functions.php';

$user = getUserInfo($GLOBALS['userID']);

$statement = $pdo->prepare
("SELECT users.userID, users.username, comments.commentID, comments.userID, comments.commentDate, comments.commentText,comments.postID, 
        blogPosts.userID, blogPosts.postTitle, blogPosts.postID
    FROM blogPosts
    JOIN users
    JOIN comments 
    ON users.userID = blogPosts.userID AND comments.postID = blogPosts.postID 
    AND users.userID = :id LIMIT 5
");  

$statement->bindParam(":id", $GLOBALS['userID']);    
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
                    <a href="createPost.php">Create New Post</a>
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
                <h6><time> <?= substr($info["commentDate"], 0, 16) ?> </time></h6>
                <h2> <?= $info["postTitle"]; ?> </h2>
                <p> <?= $info["commentText"]; ?> </p>
                <button><i class="fa fa-pencil" aria-hidden="true"></i><a href="/editPost.php">Edit</button></a>
                <button class="delete">
                    <a href="deleteComment.php?commentID=<?= $info['commentID']?>&redirectto=latestComments.php">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </a>
                </button>
            </article>	
        </div>
        <?php }?>
	</div>      
</main>

<?php require 'partials/footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>


</body>
</html>