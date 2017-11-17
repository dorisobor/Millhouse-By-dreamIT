<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'navbar.php';  ?>
	<title>Contact</title>
</head>

<body>

<header>
    <img src="" alt="Millhouse logo"/>
</header>

<?php require 'navbar.php' ?>

<main>
	
    <!-- form container -->
    <div> 

        <h1>Contact</h1>
        <p>Contact us if you have any questions or issues with the blog!</p>

        <form action="" method="POST">
            <fieldset>
                <legend>Fill in your contactinformation and email us!</legend>
                <label for="name">Fill in your name</label>
                <input type="text" name="name" value="" placeholder="your name"/><br>

                <label for="email">Fill in your email</label>
                <input type="text" name="email" value="" placeholder="email"/><br>

                <label for="subject">Fill in the email subject</label>
                <input type="text" name="subject" value="" placeholder="Subject"/><br>

                <!-- rows = längd, cols = bredd -->
                <textarea rows="4" cols="30"></textarea><br>

                <input type="submit" value="Send"/>
            <fiedlset>
        </form>

    </div>

</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>