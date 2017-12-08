<?php 
  require_once DIRBASE . 'database/db.php';
 //creates a link that will check which page the user is in
 //it also checks the amount posts it is per page which will be 5
    $page = isset ($_GET['page']) ? (int)$_GET['page']: 1;
    $perPage = isset ($_GET['perPage'])  ? (int)$_GET['perPage']: 5;

//Positioning the pages if the we are at example page 1 the page will show 5 posts
// the per page will be 5 times bigger and when we go back it will be 5 times smaller
  $start =($page > 1) ? ($page * $perPage) - $perPage : 0;

// fetch all the blogposts that will order the posts by date
    $statement = $pdo->prepare("SELECT   
    blogPosts.*,users.*,categories.* 
    FROM blogPosts 
    JOIN users ON users.userID = blogPosts.userID
    JOIN categories ON categories.categoryID = blogPosts.categoryID
    ORDER BY postDate DESC
    LIMIT {$start},{$perPage}
    ");

    $statement->execute();

    $blogposts = $statement->fetchAll(PDO::FETCH_ASSOC); 

// fetches the total pages,FOUND_ROWS() helps us give the total rows
    $total = $pdo ->query("SELECT FOUND_ROWS() as total") ->fetch()['total'];
//ceiling means rounding up the pages, divides the total blog posts with perpages 
// so it knows how many pages it will show
    $pages = ceil($total/$perPage);
?>