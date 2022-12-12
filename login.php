<?php
require("main.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" style="border-color: #1A0900" >
                            <div class="panel-heading" style="background-color: #1A0900;">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_html.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn" style="background-color: #1A0900;color: white">Login</button><br><br>
                                    <?php echo @$_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php" style="color: #1A0900"><b>Register</b></a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
