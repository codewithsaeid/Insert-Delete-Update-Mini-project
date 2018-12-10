<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="Login.css" media="all" />
        <div class="layer2">
            <!-- <img src="Layer2.png" alt="Black Layer" /> -->
            <div class="handel-area">
                <img src="handle.png" alt="Blue Layer" />
                <div class="nail-area">
                    <img src="nail.png" alt="Blue Layer" />
                </div>
            </div>
            <div class="layer1">
                <h2 style="color:#fff; margin: 5px 15px 0px 15px;">LOGO</h2>
                <div class="from-area">
                    <p style="color:#fff; text-align: center; margin: 0px 0px 20px 0px; font-weight: 700;
                        font-family: tahoma;">Login</p>
                    <form action="inc/login.php" method="POST">
                        <div class="username-area"><label for="username" style="margin-right:9px">Username</label><input type="text" id="username" name="username"/></div>
                        <div class="password-area"><label for="password">Password</label><input type="password" id="password" name="password"/></div>
                        <input type="submit" value="Sign in"/>
						
                        <!-- <div class="remember"><label for="remember" style="margin:0px;">Remember me</label> <input type="checkbox" id="remember" name="password"/></div> -->
                    </form>
                </div>
                <div class="register-area">Not a Member? <a href="Registation\index.php">Sign up here</a></div>
            </div>
        </div>
    </body>
</html>