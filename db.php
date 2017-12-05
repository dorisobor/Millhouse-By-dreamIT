<?php

$GLOBALS['userID'] = 1; //should be changed later
    try {
    $pdo = new PDO(
      "mysql:localhost;dbname=mariiase_millhouse;charset=utf8",
      "root",
      ""
    );    
    }
       catch (PDOException $e) {
        print "Oj! Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    //handling of error messages
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //defence against simulated queries
    $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 ?>
