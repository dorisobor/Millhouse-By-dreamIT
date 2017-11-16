<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Contact</title>
</head>
<body>

<?php require 'navbar.php' ?>


<header>
    <img src="" alt="Millhouse logo"/>
</header>



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

<footer>
	<button>facebook</button>
	<button>instagram</button>
	<button>contact</button>
	<span>credit</span>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
</body>
</html>