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
                        <legend class="legend"> Create a new post </legend>



                        <label class="label" for="headline">Headline</label>
                        <br />
                        <input type="text" name="headline" placeholder="Headline" id="headline" aria-required="true" required />
                        <br /> <br />

                        <!--Uppload an image-->
                        <label class="label" for="image"> Choose image </label> <br />
                        <input type="file" name="image" id="image" />
                        <br />
                        <label class="label" for="blog_post"> Write post</label> <br />
                        <textarea class="textarea" id="blog_post" name="blog_post" rows="6" cols="50" placeholder="Your text" required></textarea>
                        <br />

                        <!--Checkboxes-->
                        <div class="form checkboxes_wrapper">
                            <p class="form form--theme">Select one or several categories for your post:</p>
                            <br />


                            <input type="checkbox" name="checkbox" id="checkbox_1" value="Sunglasses">
                            <label class="label label--checkboxes" for="checkbox_1">Sunglasses</label><br>
                            <input type="checkbox" name="checkbox" id="checkbox_2" value="Watches">
                            <label class="label label--checkboxes" for="checkbox_2">Watches</label><br>
                            <input type="checkbox" name="checkbox" id="checkbox_3" value="Interior">
                            <label class="label label--checkboxes" for="checkbox_3">Interior</label><br>
                        </div>
                        <!--Publish-->
                        <input type="submit" value="Publish post" />
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <?php require 'footer.php';  ?>
</body>

</html>