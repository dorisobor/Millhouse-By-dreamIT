<?php
//$servername = "localhost";
//$username = "username";
//$password = "";
//$dbname = "millhouse3";

try {
    $conn = new PDO(
      "mysql:host=localhost;dbname=millhouse3;charset=utf8",
      "root",
      ""
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `users`(`username`, `userBio`, `userEmail`) VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>