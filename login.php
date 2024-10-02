<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DreamsEstate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="container">
            <!-- Header -->
            <header class="log-header">
                <a href="index.html"><img class="img-fluid logo-dark" src="assets/img/logo.svg" alt="Logo"></a>
            </header>
            <!-- /Header -->

            <div class="login-wrapper">
                <div class="loginbox">
                    <div class="login-auth">
                        <div class="login-auth-wrap">
                            <h1>Hey There!!! Welcome Back.</h1>
                            <form action="./action_login.php" method="POST">
                                <div class="form-group">
                                    <label class="form-label">Email <span>*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password <span>*</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" name="password" placeholder="Enter Password" required>
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-light w-100 btn-size">Sign In</button>
                                <div class="text-center dont-have">Don't have an account? <a href="register.php">Sign Up</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
