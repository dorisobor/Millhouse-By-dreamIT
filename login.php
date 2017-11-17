<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.html'; ?>
	<title>Login</title>
</head>
<body>

<?php require 'navbar.php' ?>

<header>
    <img src="" alt="Millhouse logo"/>
</header>



<main>
	
    <!-- form container -->
    <div> 

        <h1>Login</h1>

        <form action="" method="POST">
            <fieldset>
                <legend>Fill in your login information</legend>
                <label for="username">Fill in your username or email</label>
                <input type="text" name="username" value="" placeholder="email or username"/><br>

                <label for="password">Fill in your password</label>
                <input type="text" name="password" value="" placeholder="password"/><br>

                <input type="submit" value="Log In"/><br>
            </fieldset>
        </form>

        <a href="">create a new account</a>

    </div>

</main>

<?php require 'footer.php'; ?>
<?php require 'bootstrapScripts.html'; ?>
    
</body>
</html>