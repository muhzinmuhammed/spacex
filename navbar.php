<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_name('MyCustomSessionName');
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user']);
?>
<body>
<header class="header header-fix">
    <div class="header-top">
        <div class="template-ad">
            <!-- <img src="assets/img/icons/badge-icon.svg" alt="icon"> -->
            <!-- <h5>No 5, Realestate Website to Buy / Sell Your Place <span>First Listing Free!!!</span></h5> -->
        </div>
    </div>
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.html" class="navbar-brand logo">
                <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
            </div>
            <ul class="main-nav">
                <!-- Add your menu items here -->
            </ul>
        </div>

        <ul class="nav header-navbar-rht">
            <?php if ($isLoggedIn): ?>
                <li class="new-property-btn">
                    <a href="add-new-property.php">
                        <i class="bx bxs-plus-circle"></i> Add New Property
                    </a>
                </li>
				<li class="new-property-btn">
                   Hi <?php echo ($_SESSION['user']['name']) ?>
                </li>
                <li>
                    <a href="logout.php" class="btn btn-primary"><i class="feather-log-out"></i> Logout</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="register.php" class="btn btn-primary"><i class="feather-user-plus"></i> Sign Up</a>
                </li>
                <li>
                    <a href="login.php" class="btn sign-btn"><i class="feather-unlock"></i> Sign In</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
</body>
</html>
