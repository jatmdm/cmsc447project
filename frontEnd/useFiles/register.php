<!DOCTYPE html>
	<?php
		session_start()
		// Checks to see if the user is logged in, if so it redirects them to homepage
		if (isset($_SESSION["HAS_LOGGED_IN"])) {
			if ($_SESSION["HAS_LOGGED_IN"]) {
				header('Location:../map.html');
			}
		}
	?>

    <head>
        <title>Account Registration</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.0/build/pure-min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css"> 
	</head>

    <body>
        <div id="reg-form">
            <h1 id="reg-title">Account Registration</h1>

            <!-- Use the htmlspecial chars to protect from XSS and CSSR -->
            <form class="pure-form pure-form-aligned" action="../useFiles/register_success.php" method="post">
                <fieldset>
                    <div class="pure-control-group">
                        <label for="fName">First Name </label>
                        <input id="fName" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]+$" type="text" name="fName" required> </div>

                    <div class="pure-control-group">
                        <label for="lName">Last Name </label>
                        <input id="lName" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]+$" type="text" name="lName" required> </div>

                    <div class="pure-control-group">
                        <label for="email">Email </label>
                        <input id="email" pattern="^[a-zA-Z0-9._-]+@umbc.edu$" type="email" placeholder="example@umbc.edu" name="email" required>
                        <?php
                            if (isset($_SESSION["ERROR_ADVISOR_REGISTRATION_EMAIL"])) {
                                echo $_SESSION["ERROR_ADVISOR_REGISTRATION_EMAIL"];
                                unset($_SESSION["ERROR_ADVISOR_REGISTRATION_EMAIL"]);
                                }
                        ?>
                    </div>
					
					<div class="pure-control-group popup">
                        <label for="username">Username</label>
                        <input pattern = "^[a-z0-9_-]{3,15}$" placeholder="Username" id="username" name="username" required>
							<span class="popuptext" id="myPopup"><br>Username requires:<br>At least 3 characters<br>Must be alphanumeric, or with hyphen or underscore<br>At most 15 characters</span>
						<!-- <img onmousedown="document.getElementById('password').type='text'" onmouseup="document.getElementById('password').type='password'" src="http://www.freeiconspng.com/uploads/eyeball-icon-png-eye-icon-1.png" id="check_pass" style="width:25px;height:25px;" align="top"> --></div>
					<br>
					
                    <div class="pure-control-group popup" onclick="passwordExample()">
                        <label for="password">Password </label>
                        <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" placeholder="Password" id="password" name="password" required>
							<span class="popuptext" id="myPopup"><br>Password requires:<br>1 uppercase<br>1 lowercase<br>6 or more characters</span>
						<!-- <img onmousedown="document.getElementById('password').type='text'" onmouseup="document.getElementById('password').type='password'" src="http://www.freeiconspng.com/uploads/eyeball-icon-png-eye-icon-1.png" id="check_pass" style="width:25px;height:25px;" align="top"> --></div>
					
					
                    <div class="pure-control-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                        <!-- <img onmousedown="document.getElementById('confirm_password').type='text'" onmouseup="document.getElementById('confirm_password').type='password'" src="http://www.freeiconspng.com/uploads/eyeball-icon-png-eye-icon-1.png" id="check_pass" style="width:25px;height:25px;" align="top"> --></div>

                    <div class="pure-control-group">
                        <label for="zipcode">Your Zip Code</label>
                        <input type="text" id="zipcode" name="zipcode" placeholder="21250" required> </div>


                    <!--  <div class="g-recaptcha" data-sitekey="6LfVsg0UAAAAAFPYD2qXz9la6tENRyCdjSav5W6o"></div> -->

                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-u-1 pure-button-primary">Confirm</button>
                    </div>
                </fieldset>
            </form>
            <div id="register">
                <br> Have an Account? &nbsp;
                <a href="../index.php">
                    <button class="pure-button" type="button">Login</button>
                </a>
            </div>
        </div>
        <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->
        <script type="text/javascript" src="js/index.js"></script>
    </body>

    </html>