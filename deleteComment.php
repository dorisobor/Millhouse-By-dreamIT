<?php
session_start();
require_once 'partials/db.php';
require 'functions.php';

//calls on function to delete comment
deleteComment($_GET['commentID']);

//sets varibale to true in order to be able to show 
//confirmation in 'latestComments.php'
$_SESSION['commentDeleted'] = true;

//redirects to previous page
$redirect = 'index.php';

if (isset($_GET['redirectto'])){
    $redirect = $_GET['redirectto'];
}

header("Location: $redirect");

