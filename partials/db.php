<?php
  require_once 'partials/db.php';
?>

$pdo = new PDO(
  "mysql:host=localhost;dbname=millhouse;charset=utf8",
  "root",
  ""
);

//handling of error messages
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//defence against simulated queries
$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>