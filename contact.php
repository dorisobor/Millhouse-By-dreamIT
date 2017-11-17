<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Create new post</title>
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <?php require 'navbar.php';  ?>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <h1 class="headline">Contact</h1>
                <p class="instruction">Contact us if you have any questions or issues with the blog!</p>

                <form class="form" action="confirmation.php" method="POST">
                    <fieldset class="fieldset">
                        <legend class="legend">Fill in your contactinformation and email us!</legend>
                        <label class="label" for="name">Fill in your name</label><br>
                        <input type="text" name="name" value="" placeholder="your name" required /><br>

                        <label class="label" for="email">Fill in your email</label><br>
                        <input type="text" name="email" value="" placeholder="email" required /><br>

                        <label class="label" for="subject">Fill in the email subject</label><br>
                        <input type="text" name="subject" value="" placeholder="Subject" required /><br>

                        <!-- message -->

                        <label class="label" for="message"> Change post</label> <br />
                        <textarea class="textarea" id="message" rows="6" cols="50" required></textarea><br>

                        <input type="submit" value="Send" />
                    </fieldset>
                </form>

            </div>
        </div>
    </main>

    <?php require 'footer.php';  ?>
</body>

</html>
