<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="Register.css" media="all" />
    </head>
    <body>
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
                        font-family: tahoma;">Register</p>
                    <form action="../inc/signup.php" method="POST">
                        <div class="fullname">
                            <label for="fullname" style="margin-left:0px;">Full Name :</label>
                            <input type="text" id="fullname" name="fullname" />
                        </div>
                        <div class="email">
                            <label for="email" style="margin-right:45px;">Email : </label>
                            <input type="text" id="email" name="email"/>
                        </div>
                        <div class="password"><label for="pass" style="margin-right:22px;">Password :</label>
                            <input type="password" id="pass" name="password"/>
                        </div>
                        <div class="repassword"><label for="repass" style="margin-right:22px;">Re-Type <br/>Password :</label>
                            <input type="password" id="repass" name="repassword"/>
                        </div>
                        <div class="age"><label for="age" style="margin-right:55px;">Age :</label>
                            <input type="number" id="age" name="age"/>
                        </div>
                        <!-- <div class="gender"> -->
                            <!-- <span style="color: #fff; margin-right: 27px; margin-top: 9px; display: inline-block;">Religion :</span> -->
                            <!-- <select style="padding: 3px 0px; width: 54%; border-radius: 4px;"> -->
                                <!-- <option value="select" >-select-</option> -->
                                <!-- <option value="islam" >Islam</option> -->
                                <!-- <option value="hinduism">Hinduism</option> -->
                                <!-- <option value="buddha ">Buddha </option> -->
                                <!-- <option value="christian">Christian</option> -->
                            <!-- </select> -->
						<!-- </div>  -->
						<div class="Reg-row">
							<label for="date" class="Reg-label">Date of Birth</label>
							<input type="date" id="mydate" name="birthday" class="reg-input" value="-Select-">
						</div>
                        <span style="color:#fff; margin-top:10px; display: inline-block;">Gender :</span>
                        <div style="color:#fff; margin-left: 31%;">
                            <input type="radio" name="gender" value="Male" >Male<br />
                            <input type="radio" name="gender" value="Female">Female<br /> <br/>
                        </div>
                        <div class="aggrement" style="color:#fff;">
                            <span style="color:#fff; display: block;"></span>
                            <div style="color:#fff;">
                                <input type="checkbox" name="checkbox" id="agree" /><span>I agree the terms & condition</span>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" value="Registration" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="register-area">Are you Already Register? <a href="../index.php">Login Here</a></div>
        </div>
        <script type="text/javascript" src="./service.js"></script>
    </body>
</html>