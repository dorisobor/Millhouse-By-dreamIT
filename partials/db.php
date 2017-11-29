<?php

$GLOBALS['userID'] = 1; //should be changed later
    try {
    $pdo = new PDO(
      "mysql:host=localhost;dbname=millhousedoris;charset=utf8",
      "root",
      "root"
    );    
    }
       catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    //handling of error messages
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //defence against simulated queries
    $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 ?>
