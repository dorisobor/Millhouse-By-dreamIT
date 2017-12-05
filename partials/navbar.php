
<?php 

require_once 'functions.php';

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<a class="navbar-brand hidden-md-up" href="index.php"><img class="logo" src="images/logo.png"></a>
        
    <?php if (isLoggedIn()): ?>
    <button class="sign-up-btn d-md-none d-lg-none d-xl-none">
        <a class="sign-up-btn__link" href="signOut.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
        </a>
    </button>
    <?php else: ?>
    <button class="sign-up-btn d-lg-none d-xl-none">
        <a class="sign-up-btn__link" href="register.php">Register</a>
    </button>
    <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
    	<div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link" href="categoryWatches.php">Watches</a>
            <a class="nav-item nav-link" href="categorySunglasses.php">Sunglasses</a>
            <a class="nav-item nav-link" href="categoryInterior.php">Interior</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a><br>

            <?php if (isLoggedIn()): ?>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="createPost.php">Create New Story</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="profilepage.php">Profile</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="help.php">Help</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="settings.php">Settings</a>
            <?php else:  ?>
                <a class="nav-item nav-link d-md-none d-lg-none d-xl-none" href="login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Log In
                </a>
            <?php endif; ?>

        </div>

        <?php if (isLoggedIn()): ?>
        <div class="user-actions d-none d-lg-block d-xl-block ml-auto">
            <a class="user-actions__link" href="signOut.php"> 
                <button class="user-actions__sign-up-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                </button>
            </a>
        </div>
        <?php else: ?>
            <div class="user-actions d-none d-lg-block d-xl-block ml-auto">
                <a class="user-actions__link--black" href="login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Log In
                </a>
                <a class="user-actions__link" href="register.php"> 
                    <button class="user-actions__sign-up-btn">Register</button>
                </a>
            </div>
        <?php endif; ?>
    
        <?php if (isLoggedIn()): ?>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle d-none d-lg-block d-xl-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> User menu
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="createPost.php">Create New Story</a>
                    <a class="dropdown-item" href="profilepage.php">Profile</a>
                    <a class="dropdown-item" href="help.php">Help</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                </div>
            </div>
        <?php endif; ?>    
    </div>
</nav>