<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="nails_account.css">
    <!---fonts-->
    <link rel="icon" href="images/nail-polish-icon.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="title">
                <h1>Sign Up</h1>
            </div>
            <div class="under-title">
                <p>welcome to gliss and glow. sign up to continue.</p>
            </div>
            <div class="form-card">
                <form action="nails_index.php" method="POST">
                    <div class="email-input">
                        <input type="email" name="email" id="email-input" placeholder="Enter Email">
                    </div>
                    <div class="password-input">
                        <input type="password" name="password" id="password-input" class="passwordEl"placeholder="Enter password"><span onclick="togglePassword()" class="hide">Show</span>
                    </div>
                    <div class="verify-password">
                        <input type="password" name="confirm-password" id="verify-password" class="passwordEl" placeholder="Re-enter password" autocomplete="off">
                        <p class="check">Make sure password matches.</p>
                        <style>
                            .check{
                                display: none;
                            }
                        </style>

                    </div>
                    <div class="submit-input">
                        <input type="submit" name="submit-form" id="submit" value="Register">
                        <p class="hero">Already have an account?<a class="anchor" href="nails_login.php">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="nails_account.js"></script>
</body>
</html>