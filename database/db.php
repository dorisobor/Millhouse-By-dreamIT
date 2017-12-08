<?php

    //tries to connect to database
    try {
    $pdo = new PDO(
      "mysql:host=localhost;dbname=millhouse;charset=utf8",
      "root",
      "root"
    ); 

    //in casse connection fails, shows error message
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
