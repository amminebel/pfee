
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>ClickShop</title>
</head>

<body>
    <div class="containerCss">
        <!-- Forms -->
        <div class="forms-container">
            <div class="signin">
                <form action="signIn.php" method="POST" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field" id="signInUsernameInputField">
                        <i class="fas fa-user"></i>
                        <input type="text" name="signInUserName" placeholder="Username" autocomplete="off" id="signInUserName">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="signInUserPassword" placeholder="Password" autocomplete="off" id="signInUserPass">
                    </div>
                    <input type="submit" name="signInSubmit" class="btn solid" value="Login">
                    <p class="social-text">Follow us on</p>
                    <div class="social-media">
                        <a href="https://twitter.com/" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
            <!-- sign up partie -->
            <div class="signup">
                <form class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field" id="signUpUsernameInputField">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" autocomplete="off" id="signUpUserName">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" autocomplete="off" id="signUpUserEmail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" autocomplete="off" id="signUpUserPass">
                    </div>

                    <input type="submit" name="signUpsubmit" class="btn solid" value="Sign Up">
                    <p class="social-text">Follow us on</p>
                    <div class="social-media">
                        <a href="https://twitter.com/" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.google.com" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Of Forms -->
        <!-- Panels -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima cupiditate dolorum distinctio doloribus
                    </p>
                    <button class="btn transparent" id="sign-up-button">
                        Sign Up
                    </button>
                </div>
                <img src="img/onlineShop.svg" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima cupiditate dolorum distinctio doloribus
                    </p>
                    <button class="btn transparent" id="sign-in-button">
                        Sign In
                    </button>
                </div>
                <img src="img/droneDelivery.svg" class="image">
            </div>
        </div>
        <!-- End Of Panels -->
    </div>
    <script type="module" src="js/main.js"></script>
</body>

</html>