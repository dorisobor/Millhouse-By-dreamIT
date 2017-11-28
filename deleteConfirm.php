<?php
    $pdo = new PDO(
        "mysql:host=localhost;dbname=millhouse;charset=utf8",
        "root",
        "root"
    );
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Confirmation</title>
</head>

<body>

<?php require 'logoheader.html'; ?>
<?php require 'partials/navbar.php';  ?>

    <main>
        <div class="main">
            <div class="main">
                <h1 class="headline message--attention">Are you sure?</h1>
                <h2>You are going to delete your text!</h2>
                <p class="instruction">Confirm deleting:</p>
                <button class="button button--delete" type="button">Delete!</button>
            </div>

        </div>
    </main>

<?php require 'partials/footer.php';  ?>
<?php require 'bootstrapScripts.html'; ?>
    
</body>
</html>
