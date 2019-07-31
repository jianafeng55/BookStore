<div class="navbar navbar-light navbar-fixed-top" style="background-color: #1A0900">
    <div class="container">
        <div class="navbar-header">
           <a class="navbar-brand" href="index.php">
				<img src="img/logo-white.png" style="padding-top: 0px; height: 36px;width: 170px">
       		</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php" style="background-color: #1A0900;color: white"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php" style="background-color: #1A0900;color: white"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php" style="background-color: #1A0900;color: white"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php" style="background-color: #1A0900;color: white"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                    <li><a href="login.php" style="background-color: #1A0900;color: white"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>