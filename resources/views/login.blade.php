<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login | Page</title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Login</h2>
                <div id="underline-title">

                </div>
            </div>
            <form method="post" class="form">
                <label for="user-email" style="padding-top: 13px;">
                    Email
                </label>
                <input id="user-email" class="form-content" type="email" name="Email" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px;">Password</label>

                <input id="user-password" class="form-content" type="password" name="Password" required />
                <div class="form-border"></div>
                <a href="#">
                    <legend id="forgot-pass">Lupa Password</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="Login">
                <a href="/register" id="signup">Belum Punya Akun?</a>

            </form>
        </div>
    </div>
</body>

</html>
