<?php

require_once 'partials/db.php';
require 'functions.php';

//calls on function to delete comment
deleteComment($_GET['commentID']);

//redirects to previous page
$redirect = 'index.php';

if (isset($_GET['redirectto'])){
    $redirect = $_GET['redirectto'];
}

header("Location: $redirect");

