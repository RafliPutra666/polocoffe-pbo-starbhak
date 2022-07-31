<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/register.css">
    <title>Register | Page</title>
</head>

<body>
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h1 class="card-title">Register</h1>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div> -->
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Register</h2>
                <div id="underline-title">

                </div>
            </div>
            <form method="post" class="form">
                <label for="name" style="padding-top: 1px;">
                    Name
                </label>
                <input id="name" class="form-content" type="text" name="name" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-email" style="padding-top: 22px;">Email</label>
                <input id="user-email" class="form-content" type="email" name="email" required />
                <div class="form-border"></div>

                <label for="user-reemail" style="padding-top: 22px;">Password</label>
                <input id="user-reemail" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <!-- <a href="#">
                    <legend id="forgot-pass">Lupa Password</legend>
                </a> -->
                <input id="submit-btn" type="submit" name="submit" value="Regist">
                <a href="/login " id="signup">Sudah punya akun? Login</a>

            </form>
        </div>
    </div>
</body>

</html>
