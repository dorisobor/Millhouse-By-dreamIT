<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'head.html'; ?>
    <title>Contact</title>
</head>
  
  
<body>
  
<?php require 'logoheader.html'; ?>
<?php require 'navbar.php';  ?>
  
    <main>
        <div class="main">
            <div class="form_wrapper">
                <h1>Contact</h1>
                <p>Contact us if you have any questions or issues with the blog!</p>       
                
                <!-- form container -->
                <form class="form" action="confirmation.php" method="POST">
                    <fieldset class="fieldset">
                        <input type="text" name="name" value="" placeholder="Your Name" required /><br>
                        <input type="text" name="email" value="" placeholder="Email" required /><br>
                        <input type="text" name="subject" value="" placeholder="Subject" required /><br>
                        <textarea class="textarea" id="message" rows="6" cols="50" placeholder="Write your message here..." required></textarea><br>
                        <input type="submit" value="Send"/>
                    </fieldset>
                </form>

            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>

</body>
</html>
