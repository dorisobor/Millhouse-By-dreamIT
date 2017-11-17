<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	  <title>Create new post</title>
</head>

<body>

    <?php require 'navbar.php';  ?>
    <main>
        <div class="main">
            <div class="form_wrapper">
                <div class="help">
                    <p>
                        <span class="fa-stack fa-2x">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <a class="btn btn-default btn-sm" href="help.php"><i class="fa fa fa-question fa-stack-1x fa-inverse"></i></a>
                    </span>
                    </p>
                </div>
                <form class="form" action="confirmation.php" method="post" enctype="multipart/form-data">
                    <fieldset class="fieldset">
                        <legend class="legend"> Edit the post </legend>



                        <label class="label" for="headline">Change headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                        <!--Uppload an image-->
                        <label class="label" for="image"> Change image </label> <br />
                        <input type="file" name="image" id="image" />
                        <br />
                        <label class="label" for="blog_post"> Change post</label> <br />
                        <textarea class="textarea" id="blog_post" name="blog_post" rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                        <!--Checkboxes-->
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Change categories for your post:</p>
                            <br />


                            <input type="checkbox" name="checkbox" id="checkbox_1" value="Sunglasses">
                            <label class="label label--checkboxes" for="checkbox_1">Sunglasses</label><br>
                            <input type="checkbox" name="checkbox" id="checkbox_2" value="Watches">
                            <label class="label label--checkboxes" for="checkbox_2">Watches</label><br>
                            <input type="checkbox" name="checkbox" id="checkbox_3" value="Interior">
                            <label class="label label--checkboxes" for="checkbox_3">Interior</label><br>
                        </div>
                        <!--Publish-->
                        <input type="submit" value="Update post" />
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <?php require 'footer.php';  ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>

</html>
