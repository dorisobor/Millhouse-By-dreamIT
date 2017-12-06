<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
  <!--the pagination -->
<div class="paginations">

  <!--if the page starts at 1 you can only go forward -->
<?php if ($page == 1): ?>
 
  <!--the pages will decrease by 1 each page if you move forward the page-->
  <a href="?page=<?php echo $page+1;?>">
    next
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
 </a>
 <?php elseif ($page <= $pages): ?>
    <!--the pages will increase by 1 each page if you move backwards the page-->
   <a href="?page=<?php echo $page-1;?>">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    previous
  </a>
     <!--the pages will decrease by 1 each page if you move forwards the page-->
   <a href="?page=<?php echo $page+1;?>">
    next
    <i class="fa fa-arrow-right" aria-hidden="true"></i>

  </a>
<?php elseif (empty($latestPost)): ?>
  <a href="?page=<?php echo $page-1;?>">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    previous
    </a>

  <?php endif; ?>

</div>

</body>
</html>

