<?php 
require_once DIRBASE . 'database/functions.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<a class="navbar-brand hidden-md-up" href="index.php"><img class="logo" src="images/logo.png" alt="Logo for Millhouse"></a>
        
    <?php if (isLoggedIn()): ?>
    <button class="sign-up-btn d-md-block d-lg-none d-xl-none">
        <a class="sign-up-btn__link" href="database/actions/signOut.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
        </a>
    </button>
    <?php else: ?>
    <button class="sign-up-btn d-lg-none d-xl-none">
        <a class="sign-up-btn__link" href="pages/register.php">Register</a>
    </button>
    <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
    	<div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link" href="pages/categoryWatches.php">Watches</a>
            <a class="nav-item nav-link" href="pages/categorySunglasses.php">Sunglasses</a>
            <a class="nav-item nav-link" href="pages/categoryInterior.php">Interior</a>
            <br>
            

            <?php if (isLoggedIn()): ?>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="pages/createPost.php">Create New Story</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="pages/profilePage.php">Profile</a>
                <a class="nav-item nav-link d-lg-none d-xl-none" href="pages/help.php">Help</a>

            <?php else:  ?>
                <a class="nav-item nav-link d-md-block d-lg-none d-xl-none" href="pages/login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Log In
                </a>
            <?php endif; ?>

        </div>

        <?php if (isLoggedIn()): ?>
        <div class="user-actions d-none d-lg-block d-xl-block ml-auto">
            <a class="user-actions__link" href="database/actions/signout.php"> 
                <button class="user-actions__sign-up-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                </button>
            </a>
        </div>
        <?php else: ?>
            <div class="user-actions d-none d-lg-block d-xl-block ml-auto">
                <a class="user-actions__link--black" href="pages/login.php">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> Log In
                </a>
                <a class="user-actions__link" href="pages/register.php"> 
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
                    <a class="dropdown-item" href="pages/createPost.php">Create New Story</a>
                    <a class="dropdown-item" href="pages/profilePage.php">Profile</a>
                    <a class="dropdown-item" href="pages/help.php">Help</a>
                </div>
            </div>
        <?php endif; ?>    
    </div>
</nav>