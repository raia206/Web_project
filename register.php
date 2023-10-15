<?php include('functions.php') ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <link
        rel="stylesheet"
        href="https://use.fontawsome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhnd0JK28anvf"
        crossorigin="anonymous"
    />

    <title>sign in /sign up</title>
    <link rel="stylesheet" href="style1.css"/>




</head>
<body >
<div class="container" id="container" >
    <div class="form-container sign-up-container">
        <form  method="post" >
            <h1  id="ggg">Create Account</h1>


            <input type="text" placeholder="Name" name="Name" />
            <input type="email" placeholder="Email" name="Email"/>
            <input type="password" placeholder="Password"name="Password" />
            <button name="signup" id="signup">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post" action="register.php">
            <?php echo display_error(); ?>
            <h1>Sign in</h1>
            <div class="social-container">

            </div>

            <input type="email" placeholder="Email" name="Email"  value= "<?php echo $email; ?>"/>
            <input type="password" placeholder="Password"  name="Password" value= "<?php echo $pass; ?>">
            <a href="#">Forgot your password?</a>
            <button name="sign_in" id="sign_in" >Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>
                    To keep connected with us please log in with your personal info
                </p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>
