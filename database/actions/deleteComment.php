<?php
session_start();
require_once '../../config.php';
require_once DIRBASE . 'database/db.php';
require_once DIRBASE . 'database/functions.php';

//calls on function to delete comment
deleteComment($_GET['commentID']);

//sets varibale to true in order to be able to show 
//confirmation in 'pages/latestComments.php'
$_SESSION['commentDeleted'] = true;

//redirects to previous page
$redirect = 'index.php';

if (isset($_GET['redirectto'])){
    $redirect = SITEBASE . $_GET['redirectto'];
}

header("Location: $redirect");

