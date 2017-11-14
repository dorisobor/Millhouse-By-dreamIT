<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User setttings</title>
</head>
<body>

<header>
    <img src="" alt="Millhouse logo"/>
</header>

<nav>

</nav>

<main>

<!-- form container -->
<div>

    <h1>User settings<h1>
    <!-- Nuvarande uppgifter bör skrivas ut i value? -->
    <form action="" method="POST">
    <fieldset>
            <legend>Edit your user settings</legend>
            <label for="username">Fill in your new username</label>
            <input type="text" name="username" placeholder="" value=""/><br>

            <label for="email">Fill in your new email</label>
            <input type="text" name="email" placeholder="" value=""/><br>

            <label for="password">Fill in new password</label>
            <input type="text" name="password" placeholder="" value=""/><br>

            <label for="confirmPassword">Fill in new password again to confirm</label>
            <input type="text" name="confirmPassword" placeholder="" value=""/><br>

            <label for="bio">Change your profile bio</label>
            <textarea rows="5" cols="30" name="bio" placeholder="Change your profile bio"></textarea><br>
            <span>Maximum 20 characters</span>
        </fieldset>
    </form>

</div>

</main>

<footer>
    <button>facebook</button>
    <button>instagram</button>
    <button>contact</button>
    <span>credit</span>
</footer>

</body>
</html>