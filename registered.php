<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Đăng Ký Tài Khoản</title>
</head>
<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Register</h1>
                <div>Please login to use the platform</div>
            </div>
            <form class="login-card-form">
                <div class="form-item">
                    
                    <input type="text" placeholder="Enter your First name" id="nameForm" autofocus required>
                </div>
                <div class="form-item">
                   
                    <input type="text" placeholder="Enter your Last name" id="nameForm" autofocus required>
                </div>
                <div class="form-item">
                    <input type="text" placeholder="Enter your Email" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Enter Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">I agree with the Terms and conditions and the Privacy policy.</label>
                    </div>
                    
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="login-card-footer">
                Back to login page <a href="login.html">login.</a>
            </div>
        </div>
</body>
</html>